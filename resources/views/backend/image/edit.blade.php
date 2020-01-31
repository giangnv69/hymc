@extends('backend.index')
@section('controller', $data->type == 'slider' ? 'Slider' : 'Đối tác')
@section('controller_route', route('slider.index').'?type='.$data->type)
@section('action','Cập nhật')
@section('content')
    @include('backend.block.error')
    <form action="{{ route('slider.update', $data->id) }}" method="POST" enctype="multipart/form-data" >
        <input type="hidden" name="_token" value="{!! csrf_token() !!}">
        {!! method_field('PUT') !!}
        <div class="nav-tabs-custom">
          <ul class="nav nav-tabs">
            <li class="active"><a href="#activity" data-toggle="tab" aria-expanded="true">{{ $data->type == 'slider' ? 'Slider' : 'Đối Tác ' }}</a></li></ul>
          <div class="tab-content">
            <div class="tab-pane active" id="activity">
                <div class="row">
                   <div class="col-lg-2">
                        <div class="form-group">
                           <label>Hình ảnh</label>
                           <div class="image">
                               <div class="image__thumbnail">
                                   <img src="{{ $data->image }}"  data-init="{{ __IMAGE_DEFAULT__ }}">
                                   <a href="javascript:void(0)" class="image__delete" onclick="urlFileDelete(this)">
                                    <i class="fa fa-times"></i></a>
                                   <input type="hidden" name="image" value="{!! old('image', isset($data->image) ? $data->image : null) !!}"  />
                                   <div class="image__button" onclick="fileSelect(this)"><i class="fa fa-upload"></i> Upload</div>
                               </div>
                           </div>
                       </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="form-group">
                            <label>Tiêu đề</label>
                            <input type="text" class="form-control" name="name" id="name"
                                   value='{!! old('name', isset($data->name) ? $data->name : null) !!}' required="">
                        </div>
                        <div class="form-group">
                            <label>Đường dẫn (Link)</label>
                            <input type="text" class="form-control" name="link" id="link"
                                   value="{!! old('link', isset($data->link) ? $data->link : null) !!}" required="">
                        </div>
                        @if ($data->type == 'slider')
                            <div class="form-group" style="display: none">
                                <label>Mô tả</label>
                                <textarea class="form-control" name="decs" rows="5">{!! old('decs', isset($data->decs) ? $data->decs : null) !!}</textarea>
                            </div>
                        @endif
                        <input type="hidden" name="type" value="{{ $data->type }}">
                        <div class="form-group">
                            <label>Trạng thái</label> <br>
                            <input type="checkbox" name="status" value="1" id="status"
                            {{ $data->status == 1 ? 'checked' : null }}>
                            <label for="status" class="lbl">Hiển thị</label>
                        </div>
                    </div>
                </div> 
            </div>
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Lưu</button>
    </form>
@stop