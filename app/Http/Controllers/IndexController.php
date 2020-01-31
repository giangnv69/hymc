<?php

namespace App\Http\Controllers;

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

    public function getSignUp()
    {
        if(Auth::guard('member')->check()){
            return redirect('/');
        }
        $this->createSeo();
        return view('frontend.pages.user.sign-up');
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
}
