<?php

namespace App\Http\Controllers;

use App\Models\TradingAccount;
use Illuminate\Http\Request;
use App\Models\Setting;
use DateTime;
use SEO;
use SEOMeta;
use OpenGraph;
use App\Models\Image;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmail;
use App\Models\Menu;
use App\Models\Pages;
use App\Models\PagesMeta;
use App\Models\Members;
use Hash;
use Auth;
use Validator;

class IndexController extends Controller
{
    public $config_info;

    public function __construct()
    {
        $site_info    = Setting::where('type', 'setting')->first();

        $site_info = json_decode($site_info->content);

        $this->config_info = $site_info;

        $social = Setting::where('type', 'social')->first();

        $footerContent = Setting::where('type', 'footer')->first();

        $menu_header = Menu::where('id_group', 1)->orderBy('position')->get();

        $menu_footer = Menu::where('id_group', 2)->orderBy('position')->get();


        $social = json_decode($social->content);


        OpenGraph::setUrl(\URL::current());

        OpenGraph::addProperty('locale', 'vi');

        OpenGraph::addProperty('type', 'article');

        OpenGraph::addProperty('author', 'GCO-GROUP');

        SEOMeta::addKeyword($site_info->site_keyword);

        view()->share(compact('site_info', 'social', 'menu_header', 'footerContent', 'menu_footer' ));
    }

    public function getHome()
    {
        $this->createSeo();
        if (app()->getLocale() == 'en') {
            $data =  Pages::find(1);
        }else{
            $data =  Pages::find(2);
        }
        return view('frontend.pages.home', compact('data'));
    }

    public function getChangeLanguage($lang)
    {
        session(['lang' => $lang]);
        return back();
    }


    public function createSeo($dataSeo = null)
    {
        $site_info = $this->config_info;
        if (!empty($dataSeo->meta_title)) {
            SEO::setTitle($dataSeo->meta_title);
        } else {
            SEO::setTitle($site_info->site_title);
        }
        if (!empty($dataSeo->meta_description)) {
            SEOMeta::setDescription($dataSeo->meta_description);
            OpenGraph::setDescription($dataSeo->meta_description);
        } else {
            SEOMeta::setDescription($site_info->site_description);
            OpenGraph::setDescription($site_info->site_description);
        }
        if (!empty($dataSeo->image)) {
            OpenGraph::addImage($dataSeo->image, ['height' => 400, 'width' => 400]);
        } else {
            OpenGraph::addImage(asset('/uploads/config/logo/' . $site_info->site_logo_footer), ['height' => 400, 'width' => 400]);
        }
        if (!empty($dataSeo->meta_keyword)) {
            SEOMeta::addKeyword($dataSeo->meta_keyword);
        }
    }

//    public function getSignUp()
//    {
//        if(Auth::guard('member')->check()){
//            return redirect('/');
//        }
//        $this->createSeo();
//        return view('frontend.pages.user.sign-up');
//    }
    public function getSignUp()
    {
        if(Auth::guard('member')->check()){
            return redirect('/');
        }
        if (app()->getLocale() == 'en') {
            $brand =  Pages::find(1);
        }else{
            $brand =  Pages::find(2);
        }

        if (app()->getLocale() == 'en') {
            $data =  Pages::find(3);
        }else{
            $data =  Pages::find(3);
        }

        $route_name = \Request::route()->getName();
        $this->createSeo();
        return view('frontend.pages.open_trading', compact( 'data','brand', 'route_name' ));

    }

    public function postSingUp(Request $request)
    {
        $this->validate($request,
            [
                'country'               => 'required',
                'email'                 => 'required|email|unique:members,email',
                'password'              => 'required|min:6',
            ]
        );
        $member = new Members;
        $member->country = $request->country;
        $member->email = $request->email;
        $member->password = Hash::make($request->password);
        $member->status = 1;
        $member->save();
        $data = [
            'email'    => $request->email,
            'password' => $request->password,
        ];
        Auth::guard('member')->attempt($data, false);
        return redirect('/')->with(
            [
                'toast'   => true,
                'title'   => 'Thông báo',
                'message' => 'Đăng ký tài khoản thành công.'
            ]
        );
    }

    public function getLogin()
    {
        if(Auth::guard('member')->check()){
            return redirect('/');
        }
        $this->createSeo();
        return view('frontend.pages.user.sign-in');
    }

    public function postLogin(Request $request)
    {
        $this->validate($request,
            [
                'email'                 => 'required|email',
                'password'              => 'required',
            ]
        );
        $data = [
            'email'    => $request->email,
            'password' => $request->password,
        ];
        if(Auth::guard('member')->attempt($data, false)){
            return redirect('/');
        }else {
            return redirect()->back()->withInput()->withErrors([trans('auth.failed')]);
        }
    }

    public function getLogOut()
    {
        Auth::guard('member')->logout();
        return redirect('/');
    }

    public function getTrading()
    {
        if (app()->getLocale() == 'en') {
            $brand =  Pages::find(1);
        }else{
            $brand =  Pages::find(2);
        }

        if (app()->getLocale() == 'en') {
            $data =  Pages::find(3);
        }else{
            $data =  Pages::find(3);
        }

        $this->createSeo();
        return view('frontend.pages.tranding', compact( 'data','brand' ));
    }

    public function getAbout()
    {
        if (app()->getLocale() == 'en') {
            $data =  Pages::find(4);
        }else{
            $data =  Pages::find(4);
        }

        $brand =  Pages::find(1);

        $this->createSeo();
        return view('frontend.pages.about', compact( 'data','brand'));
    }

    public function openTrading()
    {
        if (app()->getLocale() == 'en') {
            $brand =  Pages::find(1);
        }else{
            $brand =  Pages::find(2);
        }

        if (app()->getLocale() == 'en') {
            $data =  Pages::find(3);
        }else{
            $data =  Pages::find(3);
        }

        $route_name = \Request::route()->getName();
        $this->createSeo();
        return view('frontend.pages.open_trading', compact( 'data','brand', 'route_name' ));
    }

    public function openTradingAccount(Request $request)
    {
        $validator = Validator::make($request->only(
            'f_name',
            'l_name',
            'email',
            'first_number',
            'phone_number',
            'country',
            'check_ipay',
            'date_birth',
            'month_birth',
            'year_birth',
            'address',
            'city',
            'post_code',
            'account_type',
            'account_currency',
            'is_us',
            'is_pep',
            'password',
            're_password'
        ), [
            'f_name' => 'required',
            'l_name' => 'required',
            'email' => 'required|email|unique:members,email',
            'first_number' => 'required',
            'phone_number' => 'required',
            'country' => 'required',
//                'check_ipay' => 'required',
            'date_birth' => 'required|numeric|min:1|max:31',
            'month_birth' => 'required|numeric|min:1|max:12',
            'year_birth' => 'required|numeric',
            'address' => 'required',
            'city' => 'required',
            'post_code' => 'required',
            'account_type' => 'required',
            'account_currency' => 'required',
            'is_us' => 'required',
            'is_pep' => 'required',
            'password' => 'required|min:6',
            're_password' => 'required|min:6'
        ]);
        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message_error' => $validator->errors(),
                'message' => 'Server error',
            ]);
        }

        if (empty($request->password) || empty($request->re_password)) {
            return response()->json([
                'status' => false,
                'message' => "Please enter a password",
            ]);
        }

        if ($request->password != $request->re_password) {
            return response()->json([
                'status' => false,
                'message' => "Re password invalid",
            ]);
        }

        $check_email = Members::where('email', $request->email)->first();

        if (!empty($check_email)) {
            return response()->json([
                'status' => false,
                'message' => "The email has already been taken.",
            ]);
        }

        $data = new Members();
        $data->check_ipay = !empty($request->check_ipay) && $request->check_ipay == true ? 1 : 0;
        $data->is_us = !empty($request->is_us) && $request->is_us == true ? 1 : 0;
        $data->is_pep = !empty($request->is_pep) && $request->is_pep == true ? 1 : 0;
        $data->is_read_policy = !empty($request->is_read_policy) && $request->is_read_policy == true ? 1 : 0;
        $data->is_access_noti = !empty($request->is_access_noti) && $request->is_access_noti == true ? 1 : 0;
        $data->f_name = $request->f_name;
        $data->l_name = $request->l_name;
        $data->email = $request->email;
        $data->first_number = $request->first_number;
        $data->phone_number = $request->phone_number;
        $data->country = $request->country;
        $data->date_birth = $request->date_birth;
        $data->month_birth = $request->month_birth;
        $data->year_birth = $request->year_birth;
        $data->address = $request->address;
        $data->city = $request->city;
        $data->post_code = $request->post_code;
        $data->account_type = $request->account_type;
        $data->account_currency = $request->account_currency;
        $data->password = Hash::make($request->password);
        $data->status = 1;

        if ($data->save()) {
            $data_sigin = [
                'email'    => $request->email,
                'password' => $request->password,
            ];

            Auth::guard('member')->attempt($data_sigin, false);

            return response()->json([
                'status' => true,
                'message' => "Success",
            ]);
        }
        return response()->json([
            'status' => false,
            'message' => "Server error",
        ]);
    }
    public function saveSettingProfile(Request $request)
    {
        $validator = Validator::make($request->only(
            'f_name',
            'l_name',
            'email',
            'first_number',
            'phone_number',
            'country',
            'check_ipay',
            'date_birth',
            'month_birth',
            'year_birth',
            'address',
            'city',
            'post_code',
//            'account_type',
//            'account_currency',
            'is_us',
            'is_pep',
//            'password',
//            're_password'
        ), [
            'f_name' => 'required',
            'l_name' => 'required',
            'email' => 'required|email|unique:trading_account,email',
            'first_number' => 'required',
            'phone_number' => 'required',
            'country' => 'required',
//                'check_ipay' => 'required',
            'date_birth' => 'required|numeric|min:1|max:31',
            'month_birth' => 'required|numeric|min:1|max:12',
            'year_birth' => 'required|numeric',
            'address' => 'required',
            'city' => 'required',
            'post_code' => 'required',
//            'account_type' => 'required',
//            'account_currency' => 'required',
            'is_us' => 'required',
            'is_pep' => 'required',
//                'password' => 'required',
//                're_password' => 'required'
        ]);
        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message_error' => $validator->errors(),
                'message' => 'Server error',
            ]);
        }

        if (!empty($request->password)) {
            if ($request->password != $request->re_password) {
                return response()->json([
                    'status' => false,
                    'message' => "Re password invalid",
                ]);
            }
        }
        $check_email = Members::where('email', $request->email)->first();

        if (!empty($check_email)) {
            return response()->json([
                'status' => false,
                'message' => "The email has already been taken.",
            ]);
        }
        $user = Auth::guard('member')->user();
        $data = Members::where('id', '=', $user->id)->first();

        if (empty($data)) {
            return response()->json([
                'status' => false,
                'message' => "Error.",
            ]);
        }

        $data->check_ipay = !empty($request->check_ipay) && $request->check_ipay == true ? 1 : 0;
        $data->is_us = !empty($request->is_us) && $request->is_us == true ? 1 : 0;
        $data->is_pep = !empty($request->is_pep) && $request->is_pep == true ? 1 : 0;
        $data->is_read_policy = !empty($request->is_read_policy) && $request->is_read_policy == true ? 1 : 0;
        $data->is_access_noti = !empty($request->is_access_noti) && $request->is_access_noti == true ? 1 : 0;
        $data->f_name = $request->f_name;
        $data->l_name = $request->l_name;
        $data->email = $request->email;
        $data->first_number = $request->first_number;
        $data->phone_number = $request->phone_number;
        $data->country = $request->country;
        $data->date_birth = $request->date_birth;
        $data->month_birth = $request->month_birth;
        $data->year_birth = $request->year_birth;
        $data->address = $request->address;
        $data->city = $request->city;
        $data->post_code = $request->post_code;
        $data->account_type = $request->account_type;
//        $data->account_currency = $request->account_currency;

        if (!empty($request->password)) {
            $data->password = Hash::make($request->password);
        }

        if ($data->save()) {
            return response()->json([
                'status' => true,
                'message' => "Update success",
            ]);
        }
        return response()->json([
            'status' => false,
            'message' => "Server error",
        ]);
    }
    public function uploadImgVerify(Request $request)
    {
        if (!empty($request->img_driver_license)) {
            $validator = Validator::make($request->only(
                'img_driver_license'
            ), [
                'img_driver_license' => 'mimes:jpeg,jpg,png,gif|required|max:2000'
            ]);
            if ($validator->fails()) {
                return response()->json([
                    'status' => false,
                    'message_error' => $validator->errors(),
                    'message' => 'Image driver license invalid',
                ]);
            }
        }
        if (!empty($request->img_id_card_before)) {
            $validator = Validator::make($request->only(
                'img_id_card_before'
            ), [
                'img_id_card_before' => 'mimes:jpeg,jpg,png,gif|required|max:2000'
            ]);
            if ($validator->fails()) {
                return response()->json([
                    'status' => false,
                    'message_error' => $validator->errors(),
                    'message' => 'Image ID card before invalid',
                ]);
            }
        }
        if (!empty($request->img_id_card_after)) {
            $validator = Validator::make($request->only(
                'img_id_card_after'
            ), [
                'img_id_card_after' => 'mimes:jpeg,jpg,png,gif|required|max:2000'
            ]);
            if ($validator->fails()) {
                return response()->json([
                    'status' => false,
                    'message_error' => $validator->errors(),
                    'message' => 'Image ID card after invalid',
                ]);
            }
        }
        if (!empty($request->img_passport)) {
            $validator = Validator::make($request->only(
                'img_passport'
            ), [
                'img_passport' => 'mimes:jpeg,jpg,png,gif|required|max:2000'
            ]);
            if ($validator->fails()) {
                return response()->json([
                    'status' => false,
                    'message_error' => $validator->errors(),
                    'message' => 'Image passport invalid',
                ]);
            }
        }
        $user = Auth::guard('member')->user();
        $data = Members::where('id', '=', $user->id)->first();

        if (empty($data)) {
            return response()->json([
                'status' => false,
                'message' => "Error.",
            ]);
        }

        if ($request->hasFile('img_driver_license')) {
            $image = $request->file('img_driver_license');
            $name = time().'_'.$image->getClientOriginalName();
            $destinationPath = public_path('uploads/images11');
            if ($image->move($destinationPath, $name)) {
                $data->img_driver_license = $name;
            }
        }
        if ($request->hasFile('img_id_card_before')) {
            $image = $request->file('img_id_card_before');
            $name = time().'_'.$image->getClientOriginalName();
            $destinationPath = public_path('uploads/images');
            if ($image->move($destinationPath, $name)) {
                $data->img_id_card_before = $name;
            }
        }
        if ($request->hasFile('img_id_card_after')) {
            $image = $request->file('img_id_card_after');
            $name = time().'_'.$image->getClientOriginalName();
            $destinationPath = public_path('uploads/images');
            if ($image->move($destinationPath, $name)) {
                $data->img_id_card_after = $name;
            }
        }
        if ($request->hasFile('img_passport')) {
            $image = $request->file('img_passport');
            $name = time().'_'.$image->getClientOriginalName();
            $destinationPath = public_path('uploads/images');
            if ($image->move($destinationPath, $name)) {
                $data->img_passport = $name;
            }
        }

        if ($data->save()) {
            return response()->json([
                'status' => true,
                'message' => "Update success",
            ]);
        }
        return response()->json([
            'status' => false,
            'message' => "Server error",
        ]);
    }

    public function myProfile()
    {
        if(!Auth::guard('member')->check()){
            return redirect('/');
        }
        $user = Auth::guard('member')->user();
        if (app()->getLocale() == 'en') {
            $brand =  Pages::find(1);
        }else{
            $brand =  Pages::find(2);
        }

        if (app()->getLocale() == 'en') {
            $data =  Pages::find(3);
        }else{
            $data =  Pages::find(3);
        }

        $this->createSeo();
        $route_name = \Request::route()->getName();

        $get_info = Members::where('id', $user->id)->first();

        if (!empty($get_info)) {
            return view('frontend.pages.my_profile', compact( 'data','brand','route_name','get_info'));
        }
        return redirect('/');
    }

    public function verify()
    {
        if(!Auth::guard('member')->check()){
            return redirect('/');
        }
        $user = Auth::guard('member')->user();
        if (app()->getLocale() == 'en') {
            $brand =  Pages::find(1);
        }else{
            $brand =  Pages::find(2);
        }

        if (app()->getLocale() == 'en') {
            $data =  Pages::find(3);
        }else{
            $data =  Pages::find(3);
        }
        $route_name = \Request::route()->getName();

        $this->createSeo();

        $get_info = Members::where('id', $user->id)->first();

        if (!empty($get_info)) {
            return view('frontend.pages.verify', compact( 'data','brand','route_name','get_info'));
        }
        return redirect('/');
    }

    public function verifyDriver()
    {
        if(!Auth::guard('member')->check()){
            return redirect('/');
        }
        $user = Auth::guard('member')->user();
        if (app()->getLocale() == 'en') {
            $brand =  Pages::find(1);
        }else{
            $brand =  Pages::find(2);
        }

        if (app()->getLocale() == 'en') {
            $data =  Pages::find(3);
        }else{
            $data =  Pages::find(3);
        }
        $route_name = \Request::route()->getName();

        $this->createSeo();

        $get_info = Members::where('id', $user->id)->first();

        if (!empty($get_info)) {
            return view('frontend.pages.verify_driver', compact( 'data','brand','route_name','get_info'));
        }
        return redirect('/');
    }

    public function verifyIDCard()
    {
        if(!Auth::guard('member')->check()){
            return redirect('/');
        }
        $user = Auth::guard('member')->user();
        if (app()->getLocale() == 'en') {
            $brand =  Pages::find(1);
        }else{
            $brand =  Pages::find(2);
        }

        if (app()->getLocale() == 'en') {
            $data =  Pages::find(3);
        }else{
            $data =  Pages::find(3);
        }
        $route_name = \Request::route()->getName();

        $this->createSeo();

        $get_info = Members::where('id', $user->id)->first();

        if (!empty($get_info)) {
            return view('frontend.pages.verify_id_card', compact( 'data','brand','route_name','get_info'));
        }
        return redirect('/');
    }

    public function verifyPassport()
    {
        if(!Auth::guard('member')->check()){
            return redirect('/');
        }
        $user = Auth::guard('member')->user();
        if (app()->getLocale() == 'en') {
            $brand =  Pages::find(1);
        }else{
            $brand =  Pages::find(2);
        }

        if (app()->getLocale() == 'en') {
            $data =  Pages::find(3);
        }else{
            $data =  Pages::find(3);
        }
        $route_name = \Request::route()->getName();

        $this->createSeo();

        $get_info = Members::where('id', $user->id)->first();

        if (!empty($get_info)) {
            return view('frontend.pages.verify_passport', compact( 'data','brand','route_name','get_info'));
        }
        return redirect('/');
    }

    public function settingProfile()
    {
        if(!Auth::guard('member')->check()){
            return redirect('/');
        }
        $user = Auth::guard('member')->user();
        if (app()->getLocale() == 'en') {
            $brand =  Pages::find(1);
        }else{
            $brand =  Pages::find(2);
        }

        if (app()->getLocale() == 'en') {
            $data =  Pages::find(3);
        }else{
            $data =  Pages::find(3);
        }
        $route_name = \Request::route()->getName();

        $this->createSeo();
        $get_info = Members::where('id', $user->id)->first();
        if (!empty($get_info)) {
            return view('frontend.pages.setting-profile', compact( 'data','brand','route_name','get_info'));
        }
        return redirect('/');
    }


}
