<?php

namespace App\Http\Controllers\Admin;

use App\Models\Members;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Pages;
use App\Models\PagesMeta;

class VerifyController extends Controller
{

    public function verify()
    {
        $data = Members::all();
        return view('backend.verify.list', compact('data'));
    }

    public function verified(Request $request)
    {
        $data = Members::findOrFail($request->id);
        return view('backend.verify.verified', compact('data'));
    }

    public function verifiedImg(Request $request)
    {
        $data = Members::where('id', $request->id)->first();

        if ($request->type == 'verify_driver_license') {
            $data->verify_driver_license = 1;
        }

        if ($request->type == 'verify_id_card') {
            $data->verify_id_card = 1;
        }

        if ($request->type == 'verify_passport') {
            $data->verify_passport = 1;
        }

        if ($data->save()) {
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
}
