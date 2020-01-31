@extends('backend.index')
@section('controller','Cấu hình chung')
@section('action','Cập nhật')
@section('content')
    @include('backend.block.error')
    <form action="" method='POST' enctype="multipart/form-data" name="frmEditProduct">
        <input type="hidden" name="_token" value="{!! csrf_token() !!}">
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
               <li class="active"><a href="#activity" data-toggle="tab" aria-expanded="true">Thông tin chung</a></li>
               <li class=""><a href="#activity1" data-toggle="tab" aria-expanded="true">Cấu hình seo</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="activity">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label>Logo</label><br>
                                <img src="{{ asset('uploads/config/logo') }}/{{ $site_info->site_logo }}" id="show-img"
                                     class="showImg">
                                <div class="file-loading">
                                    <input id="inpImg" name="fImage" type="file">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Favicon</label><br>
                                <img src="{{ asset('uploads/config/logo') }}/{{ $site_info->site_favicon }}"
                                     id="show-img" class="showImg">
                                <div class="file-loading">
                                    <input id="inpImg3" name="fFavicon" type="file" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Logo chân trang</label><br>
                                @if (isset($site_info->site_logo_footer))
                                    <img src="{{ asset('uploads/config/logo') }}/{{ $site_info->site_logo_footer }}"
                                         id="show-img" class="showImg">
                                @endif
                                <div class="file-loading">
                                    <input id="inpImg4" name="fFooter" type="file" value="">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4" style="display: none;">
                            <div class="form-group">
                                <label>CODE GOOGLE MAPS</label>
                                <textarea class="form-control"
                                          name="codemaps"
                                          id="codemaps"
                                          rows="6"
                                >{!! old('codemaps', isset($site_info->codemaps) ? $site_info->codemaps : null) !!}</textarea>
                            </div>

                            <div class="form-group">
                                <label>CODE FACEBOOK</label>
                                <textarea class="form-control" name="facebook" rows="6"
                                >{!! old('facebook', isset($site_info->facebook) ? $site_info->facebook : null) !!}</textarea>
                            </div>
                        </div>
                        
                        <div class="col-lg-4" >
                            <div class="form-group" style="display: none;">
                                <label>Google Analytics</label>
                                <textarea class="form-control"
                                          name="site_google_analytics" rows="7"
                                          id="site_google_analytics"
                                >{!! old('site_google_analytics', isset($site_info->site_google_analytics) ? $site_info->site_google_analytics : null) !!}</textarea>
                            </div>
                            
                            
                            
                            <div class="form-group" style="display: none;">
                                <label>Email nhận thông tin liên hệ</label>
                                <input type="text" class="form-control" name="email_receive"
                                       value="{!! old('emailinfo', isset($other->email_receive) ? $other->email_receive : null) !!}">
                            </div>
                            
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="site_email" id="site_email"
                                       value="{!! old('site_email', isset($site_info->site_email) ? $site_info->site_email : null) !!}">
                            </div>
                            <div class="form-group">
                                <label>Số điện thoại</label>
                                <input type="tel" class="form-control" name="site_phone" id="site_phone"
                                       value="{!! old('site_phone', isset($site_info->site_phone) ? $site_info->site_phone : null) !!}">
                            </div>

                             <div class="form-group">
                                <label>Liên kết live chat</label>
                                <input type="text" class="form-control" name="site_company" id="site_address"
                                       value="{!! old('site_company', isset($site_info->site_company) ? $site_info->site_company : null) !!}">
                            </div>

                            <div class="form-group">
                                <label class="custom-checkbox">
                                    <input type="checkbox" name="index"
                                           value="1" {{ $site_info->index_google == 1 ? 'checked' : null }}> Cho phép
                                    google tìm kiếm
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="tab-pane" id="activity2">
                    <div class="row">
                        <div class="col-sm-12">
                           
                            <div class="form-group">
                                <label>Địa chỉ</label>
                                <input type="text" class="form-control" name="site_address" id="site_address"
                                       value="{!! old('site_address', isset($site_info->site_address) ? $site_info->site_address : null) !!}">
                            </div>

                            
                            <div class="form-group">
                                <label>Mô tả chân trang</label>
                               <textarea class="form-control"  name="site_note"  rows="6">{!! old('site_note', isset($site_info->site_note) ? $site_info->site_note : null) !!}</textarea>
                            </div>

                            <div class="form-group">
                                <label>Bản quyền</label>
                                <input type="text" class="form-control" name="copyright"
                                       value="{!! old('copyright', isset($site_info->copyright) ? $site_info->copyright : null) !!}">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane" id="activity1">
                    <div class="row">
                        <div class="col-sm-12">
                           <div class="form-group">
                              <label>Tên Website</label>
                              <input type="text" class="form-control" name="site_title" id="site_title"
                                     value="{!! old('site_title', isset($site_info->site_title) ? $site_info->site_title : null) !!}"
                                     required>
                           </div>
                            <div class="form-group">
                              <label>Mô tả ngắn</label>
                              <textarea class="form-control"
                                        name="site_description"
                                        id="site_description"
                                        rows="6"
                              >{!! old('site_description', isset($site_info->site_description) ? $site_info->site_description : null) !!}</textarea>
                            </div>
                            <div class="form-group">
                              <label>Meta keyword</label>
                              <input type="text" class="form-control" name="site_keyword" id="site_keyword"
                                     value="{!! old('site_keyword', isset($site_info->site_keyword) ? $site_info->site_keyword : null) !!}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12" style="background: white">
                        <button type="submit" class="btn btn-primary">Lưu lại</button>
                    </div>
                </div>

            <!-- /.tab-content -->
        </div>

    </form>
@endsection