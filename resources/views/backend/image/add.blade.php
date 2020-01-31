@extends('backend.index')
@section('action','Thêm')
@section('controller', request()->get('type') == 'slider' ? 'Slider' : 'Đối tác')
@section('controller_route', route('slider.index').'?type='.request()->get('type'))
@section('content')
    @include('backend.block.error')
    <form action="{{ route('slider.store') }}" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{!! csrf_token() !!}">
        <div class="nav-tabs-custom">
          <ul class="nav nav-tabs">
            <li class="active"><a href="#activity" data-toggle="tab" aria-expanded="true">{{ request()->get('type') == 'slider' ? 'Slider' : 'Đối tác' }}</a></li></ul>
          <div class="tab-content">
            <div class="tab-pane active" id="activity">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="form-group">
                           <label>Hình ảnh</label>
                           <div class="image">
                               <div class="image__thumbnail">
                                   <img src="{{ old('image') ?  old('image') : __IMAGE_DEFAULT__ }}"  data-init="{{ __IMAGE_DEFAULT__ }}">
                                   <a href="javascript:void(0)" class="image__delete" onclick="urlFileDelete(this)">
                                    <i class="fa fa-times"></i></a>
                                   <input type="hidden" value="" name="image"  />
                                   <div class="image__button" onclick="fileSelect(this)"><i class="fa fa-upload"></i> Upload</div>
                               </div>
                           </div>
                       </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="form-group">
                            <label>Tiêu đề</label>
                            <input type="text" class="form-control" name="name" id="name"
                                   value="{!! old('name') !!}" required>
                        </div>
                        <div class="form-group">
                            <label>Đường dẫn (Link)</label>
                            <input type="text" class="form-control" name="link" id="link"
                                   value="{!! old('link') !!}" required>
                        </div>
                        @if (request()->get('type') == 'slider')
                            <div class="form-group" style="display: none">
                                <label>Mô tả</label>
                                <textarea class="form-control" name="decs" rows="5">{{ old('decs') }}</textarea>
                            </div>
                        @endif
                        <input type="hidden" name="type" value="{{ request()->get('type') }}">
                        <div class="form-group">
                            <label>Trạng thái</label> <br>
                            <input type="checkbox" name="status" value="1" id="status" checked>
                            <label for="status" class="lbl">Hiển thị</label>
                        </div>
                    </div>
                </div> 
            </div>
          </div>
        </div>

        <button type="submit" class="btn btn-primary">Lưu</button>
    </form>
@endsection
