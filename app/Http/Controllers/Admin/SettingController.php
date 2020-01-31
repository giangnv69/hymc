<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Models\Post;
use App\Models\Product;
use File;


class SettingController extends Controller
{
    public function getSetting()
    {
        $other     = Setting::where('type', 'other')->first();
        $other     = json_decode($other->content);
        $data      = Setting::where('type', 'setting')->first();
        $site_info = json_decode($data->content);
        return view('backend.setting.general', compact('site_info', 'other'));
    }

    public function postSetting(Request $request)
    {
        $other          = Setting::where('type', 'other')->first();
        $other->content = json_encode(['email_receive' => $request->email_receive]);
        $other->save();
        $setting   = Setting::where('type', 'setting')->first();
        $content   = json_decode($setting->content);
        $path      = 'uploads/config/logo/';
        $site_logo = $content->site_logo;
        $fLogo     = $request->file('fImage');
        if (!empty($fLogo)) {
            $file_name = time() . '_' . $fLogo->getClientOriginalName();
            $fLogo->move($path, $file_name);
            if (File::exists($path . $site_logo)) {
                File::delete($path . $site_logo);
            }
            $site_logo = $file_name;
        }
        $site_favicon = $content->site_favicon;
        $fFavicon     = $request->file('fFavicon');
        if (!empty($fFavicon)) {
            $faviconFileName = 'favicon' . time() . '-' . $fFavicon->getClientOriginalName();
            $fFavicon->move($path, $faviconFileName);
            if (File::exists($path . $site_favicon)) {
                File::delete($path . $site_favicon);
            }
            $site_favicon = $faviconFileName;
        }
        $site_footer = $content->site_logo_footer;
        $fFooter     = $request->file('fFooter');
        if (!empty($fFooter)) {
            $file_name_footer = time() . '-' . $fFooter->getClientOriginalName();
            $fFooter->move($path, $file_name_footer);
            if (File::exists($path . $site_footer)) {
                File::delete($path . $site_footer);
            }
            $site_footer = $file_name_footer;
        }
        $content->site_logo_footer = $site_footer;
        $content->site_logo        = $site_logo;
        $content->site_favicon     = $site_favicon;
        $content->site_title       = $request->site_title;
        $content->site_description = $request->site_description;
        $content->site_keyword     = $request->site_keyword;
        $content->site_address     = $request->site_address;
        $content->site_company     = $request->site_company;
        $content->site_note     = $request->site_note;
        $content->time_open      = $request->time_open;
        $content->site_fax      = $request->site_fax;
        

        $content->site_email            = $request->site_email;
        $content->site_phone            = $request->site_phone;
        $content->site_google_analytics = $request->site_google_analytics;
        $content->facebook              = $request->facebook;
        $content->copyright             = $request->copyright;
        $content->codemaps              = $request->codemaps;
        $content->script                = $request->script;
        
        $content->index_google          = $request->index == 1 ? 1 : 0;
        $setting->content               = json_encode($content);
        if ($setting->save()) {
            return redirect()->back()->with([
                'flash_level'   => 'success',
                'flash_message' => 'Cập nhật thành công !'
            ]);
        }
        return redirect()->back()->with([
            'flash_level'   => 'danger',
            'flash_message' => 'Cập nhật không thành công !'
        ]);
    }

    public function getAbout()
    {
        $data = Post::where('type', 'about-page')->first();
        return view('backend.setting.about', compact('data'));
    }

    public function postAbout(Request $request)
    {
        $contents               = json_encode($request->contents);
        $post                   = Post::where('type', 'about-page')->first();
        $post->content          = $contents;
        $post->status           = 1;
        $post->image            = $request->image;
        $post->meta_title       = $request->meta_title;
        $post->meta_description = $request->meta_description;
        $post->meta_keyword     = $request->meta_keyword;
        $post->save();
        return redirect()->back()->with([
            'flash_level'   => 'success',
            'flash_message' => 'Cập nhật thành công !'
        ]);
    }

    public function getSocial()
    {
        $data = Setting::where('type', 'social')->first();
        $data = json_decode($data->content);
        return view('backend.setting.social', compact('data'));
    }

    public function postSocial(Request $request)
    {
        /*$regex = '/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/';
        if ($request->facebook != null) {
            $this->validate($request,
                [
                    'facebook' => 'regex:' . $regex,
                ],
                [
                    'facebook.regex' => 'Đường Link Facebook không đúng định dạng',
                ]
            );
        }
        if ($request->twitter != null) {
            $this->validate($request,
                [
                    'twitter' => 'regex:' . $regex,
                ],
                [
                    'twitter.regex' => 'Đường Link Instagram không đúng định dạng',
                ]
            );
        }
        if ($request->google != null) {
            $this->validate($request,
                [
                    'google' => 'regex:' . $regex,
                ],
                [
                    'google.regex' => 'Đường Link Youtbe không đúng định dạng',
                ]
            );
        }
        if ($request->youtube != null) {
            $this->validate($request,
                [
                    'youtube' => 'regex:' . $regex,
                ],
                [
                    'youtube.regex' => 'Đường Link Youtube không đúng định dạng',
                ]
            );
        }
        if ($request->pinterest != null) {
            $this->validate($request,
                [
                    'pinterest' => 'regex:' . $regex,
                ],
                [
                    'pinterest.regex' => 'Đường Link Pinterest không đúng định dạng',
                ]
            );
        }*/

        $setting          = Setting::where('type', 'social')->first();
        $setting->content = json_encode($request->except('_token'));
        $setting->save();
        return redirect()->back()->with([
            'flash_level'   => 'success',
            'flash_message' => 'Cập nhật thành công !'
        ]);
    }

    public function getConfigHome()
    {
        $data = Setting::where('type', 'config-home')->first();
        $contents = json_decode($data->content);
        return view('backend.setting.config-home', compact('contents'));
    }

    public function postConfigHome(Request $request)
    {
        $setting          = Setting::where('type', 'config-home')->first();
        $setting->content = json_encode($request->contents);
        $setting->save();
        return redirect()->back()->with([
            'flash_level'   => 'success',
            'flash_message' => 'Cập nhật thành công !'
        ]);
    }

    public function getConfigPages()
    {
        $product = Product::select('name', 'id')->where('status', 1)->get();
        $data    = Setting::where('type', 'config-pages')->first();
        $data    = json_decode($data->content);
        return view('backend.setting.config-pages', compact('data', 'product'));
    }

    public function postConfigPages(Request $request)
    {
        $setting          = Setting::where('type', 'config-pages')->first();
        $setting->type    = 'config-pages';
        $setting->content = json_encode($request->config_pages);
        $setting->save();
        return redirect()->back()->with([
            'flash_level'   => 'success',
            'flash_message' => 'Cập nhật thành công !'
        ]);
    }

    public function postRecruitment(Request $request)
    {
        $contents               = json_encode($request->contents);
        $post                   = Post::where('type', 'recruitment-page')->first();
        $post->content          = $contents;
        $post->status           = 1;
        $post->image            = $request->image;
        $post->meta_title       = $request->meta_title;
        $post->meta_description = $request->meta_description;
        $post->meta_keyword     = $request->meta_keyword;
        $post->save();
        return redirect()->back()->with([
            'flash_level'   => 'success',
            'flash_message' => 'Cập nhật thành công !'
        ]);
    }

    public function getWidget()
    {
        $data = Setting::where('type', 'footer')->first();
        return view('backend.setting.widget', compact('data'));
    }

    public function postWidget(Request $request)
    {
        $data = Setting::where('type', 'footer')->first();
        $data->content = json_encode($request->content);
        $data->save();
        return redirect()->back()->with([
            'flash_level'   => 'success',
            'flash_message' => 'Cập nhật thành công !'
        ]);
    }
   
}
