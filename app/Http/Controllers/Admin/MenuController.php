<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\MenuGroup;

class MenuController extends Controller
{
    public function getListMenu()
    {
        $data = MenuGroup::all();
        return view('backend.menu.list-group', compact('data'));
    }

    public function getEditMenu($id)
    {
        $data = Menu::where('id_group', $id)->orderBy('position')->get();
        return view('backend.menu.menu-edit', compact('id', 'data'));
    }

    public function postAddItem(Request $request, $id)
    {
        $menu           = new Menu;
        $menu->title_vi    = $request->title_vi;
        $menu->title_en    = $request->title_en;

        $menu->url      = $request->url;
        $menu->position = 0;
        $menu->id_group = $id;
        $menu->class    = $request->class;
        $menu->save();
        return redirect()->back()->with([
            'flash_level'   => 'success',
            'flash_message' => 'Thêm thành công !'
        ]);
    }

    public function postUpdateMenu(Request $request)
    {
        $jsonMenu = json_decode($request->jsonMenu);
        $this->saveMenu($jsonMenu);
        if (!$request->ajax()) {
            return back()->with([
                'flash_level'   => 'success',
                'flash_message' => 'Cập nhật thành công !'
            ]);;
        }

    }

    public function saveMenu($jsonMenu, $parent_id = null)
    {
        $count = 0;
        foreach ($jsonMenu as $item) {
            $menu = Menu::find($item->id);
            if ($menu) {
                $menu->position  = $count;
                $menu->parent_id = $parent_id;
                $menu->save();
                if (!empty($item->children)) {
                    $this->saveMenu($item->children, $menu->id);
                }
            }
            $count++;
        }
    }

    public function getDelete($id)
    {
        $menu = Menu::find($id);
        $menu->delete();
        return back()->with([
            'flash_level'   => 'success',
            'flash_message' => 'Xóa thành công !'
        ]);
    }

    public function postEditItem(Request $request)
    {
        $menu        = Menu::find($request->id);
        $menu->title_vi    = $request->title_vi;
        $menu->title_en    = $request->title_en;
        $menu->url   = $request->url;
        $menu->save();
        return back()->with([
            'flash_level'   => 'success',
            'flash_message' => 'Sửa thành công !'
        ]);
    }

    public function getEditItem($id)
    {
        $menu = Menu::find($id);
        if (isset($menu)) {
            $data = [
                'status' => 'success',
                'data'   => $menu
            ];
        } else {
            $data = [
                'status' => 'error'
            ];
        }
        return response()->json($data);
    }
}
