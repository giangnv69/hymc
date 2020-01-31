<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Pages;
use App\Models\ApplyRecruitment;

class IndexController extends Controller
{
    public function getHome()
    {
        $listPages = Pages::all();
    	return view('backend.block.home', compact('listPages'));
    }

    public function getLayout(Request $request)
    {
        $index = $request->index;
    	if ( $request->type == 'social') {
    		return view('backend.repeater.row-social', compact('index'))->render();
    	}elseif ($request->type == 'services') {
            return view('backend.repeater.row-services', compact('index'))->render();
        }elseif ($request->type == 'tranding_tab_1') {
            return view('backend.repeater.row-tranding-tab-1', compact('index'))->render();
        }elseif ($request->type == 'tranding_tab_2') {
            return view('backend.repeater.row-tranding-tab-2', compact('index'))->render();
        }elseif ($request->type == 'tranding_tab_3') {
            return view('backend.repeater.row-tranding-tab-3', compact('index'))->render();
        }elseif ($request->type == 'about_tab_2') {
            return view('backend.repeater.row-about-tab-2', compact('index'))->render();
        }
    }
}
