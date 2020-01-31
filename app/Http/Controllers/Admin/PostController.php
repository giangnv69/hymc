<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\PostCategory;
use DataTables;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $list_post = Post::where('type', $request->type)->orderBy('created_at', 'DESC')->get();
            return Datatables::of($list_post)
                ->addColumn('checkbox', function ($data) {
                    return '<input type="checkbox" name="chkItem[]" value="' . $data->id . '">';
                })->addColumn('image', function ($data) {
                    return '<img src="' . $data->image . '" class="img-thumbnail" width="50px" height="50px">';
                })->addColumn('name', function ($data) {
                    if ($data->type == 'blog') {
                        return $data->title . ' <br><a href="' . asset('tin-tuc/' . $data->slug) . '" target="_black">
                        <i class="fa fa-hand-o-right" aria-hidden="true"></i> Link: 
                        ' . asset('tin-tuc/' . $data->slug) . '
                      </a>';
                    } else {
                        return $data->title . ' <br>
                      <a href="' . asset('tuyen-dung/'.$data->slug) .'" target="_black">
                        <i class="fa fa-hand-o-right" aria-hidden="true"></i> Link: 
                        ' . asset('tuyen-dung/'.$data->slug) . '
                      </a>';
                    }
                })->addColumn('status', function ($data) {
                    if ($data->status == 1) {
                        $status = ' <span class="label label-success">Hiển thị</span>';
                    } else {
                        $status = ' <span class="label label-danger">Không hiển thị</span>';
                    }
                    if ($data->hot) {
                        $status = $status . ' <span class="label label-success">Nổi bật</span>';
                    }
                    return $status;
                })->addColumn('action', function ($data) {
                    return '<a href="' . route('post.edit', ['id' => $data->id, 'type' => $data->type]) . '" title="Sửa">
                            <i class="fa fa-pencil fa-fw"></i> Sửa
                        </a> &nbsp; &nbsp; &nbsp;
                            <a href="javascript:;" class="btn-destroy" 
                            data-href="' . route('post.destroy', $data->id) . '"
                            data-toggle="modal" data-target="#confim">
                            <i class="fa fa-trash-o fa-fw"></i> Xóa</a>
                        ';
                })->rawColumns(['checkbox', 'image', 'status', 'action', 'name'])
                ->addIndexColumn()
                ->make(true);
        }
        return view('backend.post.list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::where('type','blog_category')->get();
        return view('backend.post.add', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,
            [
                'image' => 'required',
                'slug'  => 'required',
                'type'  => 'required',
            ],
            [
                'image.required' => 'Bạn chưa chọn ảnh',
                'slug.required'  => 'Đường dẫn tĩnh sai định dạng',
                'type'           => 'Sai định dạng.',
            ]
        );
        $post_check_sulg = Post::where('slug', $request->slug)->where('type', $request->type)->first();
        if (!empty($post_check_sulg)) {
            return redirect()->back()->withInput()->withErrors(['Đường đẫn tĩnh này đã tồn tại.']);
        }
        $data = [
            'title'            => $request->name,
            'slug'             => $request->slug,
            'desc'             => $request->desc,
            'image'            => $request->image,
            'type'             => $request->type,
            'content'          => $request->contentPost,
            'status'           => $request->status == 1 ? 1 : null,
            'hot'              => $request->hot == 1 ? 1 : null,
            'meta_title'       => $request->meta_title,
            'meta_description' => $request->meta_description,
            'meta_keyword'     => $request->meta_keyword,
        ];
        $post = Post::create($data);

        return redirect()->route('post.index', ['type' => $request->type])->with([
            'flash_level'   => 'success',
            'flash_message' => 'Thêm thành công !'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Post::findOrFail($id);
        $category = Category::where('type','blog_category')->get();
        return view('backend.post.edit', compact('data', 'category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,
            [
                'image' => 'required',
                'slug'  => 'required',
                'type'  => 'required',
               
            ],
            [
                'image.required' => 'Bạn chưa chọn ảnh',
                'slug.required'  => 'Đường dẫn tĩnh sai định dạng',
                'type'           => 'Sai định dạng.',
            ]
        );
        $post_check_sulg = Post::where('id', '!=', $id)
            ->where('slug', $request->slug)
            ->where('type', $request->type)->first();
        if (!empty($post_check_sulg)) {
            return redirect()->back()->withInput()->withErrors(['Đường đẫn tĩnh này đã tồn tại.']);
        }



        $data = [
            'title'            => $request->name,
            'slug'             => $request->slug,
            'desc'             => $request->desc,
            'image'            => $request->image,
            'content'          => $request->contentPost,
            'status'           => $request->status == 1 ? 1 : null,
            'hot'              => $request->hot == 1 ? 1 : null,
            'meta_title'       => $request->meta_title,
            'meta_description' => $request->meta_description,
            'meta_keyword'     => $request->meta_keyword,
        ];
        $post = Post::find($id)->update($data);
        return redirect()->back()->with([
            'flash_level'   => 'success',
            'flash_message' => 'Sửa thành công !'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::destroy($id);
        return redirect()->back()->with([
            'flash_level'   => 'success',
            'flash_message' => 'Xóa thành công !'
        ]);
    }

    public function deleteMuti(Request $request)
    {
        if ($request->has('chkItem')) {
            foreach ($request->chkItem as $id) {
                Post::destroy($id);
            }
            return redirect()->back()->with([
                'flash_level'   => 'success',
                'flash_message' => 'Xóa thành công !'
            ]);
        } else {
            return redirect()->back()->with([
                'flash_level'   => 'danger',
                'flash_message' => 'Bạn chưa chọn dữ liệu cần xóa !'
            ]);
        }
    }

    public function getDuplicate($id)
    {
        $data           = Post::findOrFail($id);
        $data_duplicate = [
            'title'            => $data->title,
            'slug'             => $data->slug,
            'desc'             => $data->desc,
            'image'            => $data->image,
            'type'             => $data->type,
            'content'          => $data->content,
            'status'           => $data->status,
            'meta_title'       => $data->meta_title,
            'meta_description' => $data->meta_description,
            'meta_keyword'     => $data->meta_keyword,
        ];
        $post           = Post::create($data_duplicate);
        return back();
    }
}
