@extends('backend.index')
@section('controller', request()->get('type') == 'slider' ? 'Slider' : 'Đối tác')
@section('controller_route', route('slider.index').'?type='.request()->get('type'))
@section('action','Danh sách')
@section('content')
  @include('backend.block.error')
	<form action="{{ route('slider.postMultiDel') }}" method="POST">
      <input type="hidden" name="_token" value="{!! csrf_token() !!}">
      <div class="btnAdd">
          <a href="{{ route('slider.create') }}?type={{ request()->get('type') }}">
              <fa class="btn btn-primary"><i class="fa fa-plus"></i> Thêm</fa>
          </a>
          <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa ?')"><i class="fa fa-trash-o"></i> Xóa</button>
      </div>
      <table id="example1" class="table table-bordered table-striped table-hover">
          <thead>
          <tr>
              <th><input type="checkbox" name="chkAll" id="chkAll"></th>
              <th>STT</th>
              <th>Hình ảnh</th>
              <th width="30%">Tiêu đề</th>
              <th>Link</th>
              <th>Trạng thái</th>
              <th width="150px">Thao tác</th>
          </tr>
          </thead>
          <tbody>
              @foreach ($data as $item)
                <tr>
                  <td><input type="checkbox" name="chkItem[]" value="{!! $item['id'] !!}"></td>
                  <td>{{ $loop->index+1 }}</td>
                  <td>
                    <img src="{{ renderImage($item->image) }}" class="img-responsive imglist">
                  </td>
                  <td>{!! $item->name !!}</td>
                  <td>{{  $item->link }}</td>
                  <td>
                    @if ($item->status == 1 )
                        <span class="label label-success">Đang hiển thị</span>
                    @else
                        <span class="label label-danger">Đang ẩn</span>
                    @endif
                  </td>
                  <td>
                    <div>
                        <a href="{{ route('slider.edit', $item->id) }}" title="Sửa">
                            <i class="fa fa-pencil fa-fw"></i> Sửa
                        </a> &nbsp; &nbsp; &nbsp;
                          <a href="javascript:void(0);" class="btn-destroy" 
                          data-href="{{ route( 'slider.destroy',  $item->id ) }}"
                          data-toggle="modal" data-target="#confim">
                          <i class="fa fa-trash-o fa-fw"></i> Xóa
                          </a>
                      </div>
                  </td>
                  
                </tr>
              @endforeach
          </tbody>
      </table>
  </form>
@stop