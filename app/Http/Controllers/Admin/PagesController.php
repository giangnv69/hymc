<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Pages;
use App\Models\PagesMeta;

class PagesController extends Controller
{

	public function getListPages()
	{
		$data = Pages::all();
		return view('backend.pages.list', compact('data'));
	}


	public function postCreatePages(Request $request)
	{
		$page = new Pages;
		$page->name_page = $request->name_page;
		$page->type = $request->type;
		$page->route = $request->route;
		$page->save();
		return redirect()->back()->with([
            'flash_level' => 'success',
            'flash_message' => 'Thêm thành công !'
        ]);
	}



    public function getBuildPages(Request $request)
    {
        $data = Pages::findOrFail($request->id);
    	return view('backend.pages.layout.'.$request->page, compact('data'));
    }

    public function postBuildPages(Request $request)
    {
       	$type = $request->type;
    	$data = Pages::where('type', $type)->firstOrFail();
    	$data->content = json_encode($request->content);
    	$data->meta_title = $request->meta_title;
    	$data->meta_description = $request->meta_description;
    	$data->meta_keyword = $request->meta_keyword;
    	$data->image = $request->image;
    	$data->save();
    	return redirect()->back()->with([
            'flash_level' => 'success',
            'flash_message' => 'Cập nhật thành công.'
        ]);
    }

}
