<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
    public function getCKFinder()
    {
    	return view('backend.developer.ckfinder');
    }
    public function getRow()
    {
    	return view('backend.developer.ajax.row')->render();
    }
}
