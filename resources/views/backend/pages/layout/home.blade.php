@extends('backend.index')
@section('controller','Trang')
@section('controller_route',route('pages.list'))
@section('action','Danh sách')
@section('content')
	@include('backend.block.error')
	<form action="{{ route('pages.build.post') }}" method="POST">
		{{ csrf_field() }}
		<input name="type" value="{{ $data->type }}" type="hidden">
		<div class="row">
			<div class="col-sm-12">
				<div class="form-group">
					<label for="">Trang</label>
					<input type="text" class="form-control" value="{{ $data->name_page }}" disabled="">
	 				
					@if (\Route::has($data->route))
						<h5>
							<a href="{{ route($data->route) }}" target="_blank">
		                        <i class="fa fa-hand-o-right" aria-hidden="true"></i>
		                        Link: {{ route($data->route) }}
		                    </a>
						</h5>
	                @endif
				</div>
				
			</div>
		</div>
		<?php
			if(!empty($data->content)){
				$content = json_decode($data->content);
			}
		?>
		<div class="nav-tabs-custom">
	        <ul class="nav nav-tabs">
	            <li class="active"><a href="#sec1" data-toggle="tab" aria-expanded="true">Khối đầu trang</a></li>
	            <li class=""><a href="#sec2" data-toggle="tab" aria-expanded="true">Chi số</a></li>
	            <li class=""><a href="#sec3" data-toggle="tab" aria-expanded="true">Loại tài khoản</a></li>
	            <li class=""><a href="#sec4" data-toggle="tab" aria-expanded="true">Nền tảng</a></li>
	            <li class=""><a href="#sec5" data-toggle="tab" aria-expanded="true">Dịch vụ</a></li>
	            <li class=""><a href="#sec6" data-toggle="tab" aria-expanded="true">Đối tác</a></li>
	        </ul>
	    </div>
	    <div class="tab-content">

	    	<div class="tab-pane active" id="sec1">
	    		<div class="row">
	    			<div class="col-sm-2">
	    				<label for="">Hình ảnh</label>
						<div class="image">
                            <div class="image__thumbnail">
                                <img src="{{ !empty($content->sec_first->image) ?  $content->sec_first->image : __IMAGE_DEFAULT__ }}"
                                     data-init="{{ __IMAGE_DEFAULT__ }}">
                                <a href="javascript:void(0)" class="image__delete" onclick="urlFileDelete(this)">
                                    <i class="fa fa-times"></i></a>
                                <input type="hidden" value="{{ @$content->sec_first->image }}" 
                                name="content[sec_first][image]"/>
                                <div class="image__button" onclick="fileSelect(this)"><i class="fa fa-upload"></i>
                                    Upload
                                </div>
                            </div>
                        </div>
	    			</div>
	    			<div class="col-sm-10">
	    				<div class="form-group">
	    					<label for="">Tiêu đề</label>
	    					<input type="text" class="form-control" name="content[sec_first][title]" value="{{ @$content->sec_first->title }}">
	    				</div>
	    				<div class="form-group">
	    					<label for="">Nội dung</label>
	    					<textarea class="content" name="content[sec_first][content]">
	    						{!! @$content->sec_first->content !!}
	    					</textarea>
	    				</div>
	    				<div class="form-group">
	    					<label for="">Liên kết Open Account</label>
	    					<input type="text" class="form-control" name="content[sec_first][open_cccount]" value="{{ @$content->sec_first->open_cccount }}">
	    				</div>
	    				<div class="form-group">
	    					<label for="">Liên kết Learn more</label>
	    					<input type="text" class="form-control" name="content[sec_first][learn_more]" value="{{ @$content->sec_first->learn_more }}">
	    				</div>

	    			</div>
	    		</div>
	    	</div>

	    	<div class="tab-pane" id="sec2">
	    		<div class="row">
	    			<div class="col-sm-12">
		    			<div class="repeater" id="repeater">
			                <table class="table table-bordered table-hover">
			                    <thead>
				                    <tr>
				                    	<th style="width: 30px;">STT</th>
				                    	<th>Số liệu</th>
				                    	<th>Ký hiệu</th>
										<th>Mô tả</th>
				                    </tr>
			                	</thead>
			                    <tbody id="sortable">
					    			@if (!empty($content->sec_second))
					    				@foreach ($content->sec_second as $key => $value)
						    				<tr>
						    					<td>{{ $loop->index + 1 }}</td>
							    				<td>
								    				<input type="text" name="content[sec_second][{{ $key }}][number]" class="form-control" value="{{ @$value->number }}">
							    				</td>
							    				<td>
								    				<input type="text" name="content[sec_second][{{ $key }}][symbol]" class="form-control" value="{{ @$value->symbol }}">
							    				</td>
							    				<td>
								    				<input type="text" name="content[sec_second][{{ $key }}][desc]" 
								    				class="form-control" value="{{ @$value->desc }}">
							    				</td>
						    				</tr>
					    				@endforeach
					    			@endif
					    		</tbody>
					    	</table>
					    </div>
				    </div>
	    		</div>
	    	</div>
	    	<div class="tab-pane" id="sec3">
	    		<div class="row">
	    			<div class="col-sm-4">
	    				<div class="form-group">
	    					<label for="">Tiêu đề</label>
	    					<input type="text" class="form-control" name="content[sec_third][col_first][title]"
	    					value="{{ @$content->sec_third->col_first->title }}">
	    				</div>
	    				<div class="form-group">
	    					<label for="">Nội dung</label>
	    					<textarea class="content" name="content[sec_third][col_first][content]">
	    						{!! @$content->sec_third->col_first->content !!}
	    					</textarea>
	    				</div>
	    				<div class="form-group">
	    					<label for="">Liên kết</label>
	    					<input type="text" class="form-control" name="content[sec_third][col_first][link]"
	    					value="{{ @$content->sec_third->col_first->link }}">
	    				</div>
	    			</div>
	    			<div class="col-sm-4">
	    				<div class="form-group">
	    					<label for="">Tiêu đề</label>
	    					<input type="text" class="form-control" name="content[sec_third][col_second][title]"
	    					value="{{ @$content->sec_third->col_second->title }}">
	    				</div>
	    				<div class="form-group">
	    					<label for="">Nội dung</label>
	    					<textarea class="content" name="content[sec_third][col_second][content]">
	    						{!! @$content->sec_third->col_second->content !!}
	    					</textarea>
	    				</div>
	    				<div class="form-group">
	    					<label for="">Liên kết</label>
	    					<input type="text" class="form-control" name="content[sec_third][col_second][link]"
	    					value="{{ @$content->sec_third->col_second->link }}">
	    				</div>
	    			</div>
	    			<div class="col-sm-4">
	    				<div class="form-group">
	    					<label for="">Tiêu đề</label>
	    					<input type="text" class="form-control" name="content[sec_third][col_third][title]"
	    					value="{{ @$content->sec_third->col_third->title }}">
	    				</div>
	    				<div class="form-group">
	    					<label for="">Nội dung</label>
	    					<textarea class="content" name="content[sec_third][col_third][content]">
	    						{!! @$content->sec_third->col_third->content !!}
	    					</textarea>
	    				</div>
	    				<div class="form-group">
	    					<label for="">Liên kết</label>
	    					<input type="text" class="form-control" name="content[sec_third][col_third][link]"
	    					value="{{ @$content->sec_third->col_third->link }}">
	    				</div>
	    			</div>
	    		</div>
	    	</div>

	    	<div class="tab-pane" id="sec4">
	    		<div class="row">
	    			<div class="col-sm-12">
	    				<div class="form-group">
	    					<label for="">Tiêu đề khối</label>
	    					<input type="text" class="form-control" name="content[sec_fourth][title_sec]" 
	    					value="{!! @$content->sec_fourth->title_sec !!}">
	    				</div>
	    				<div class="form-group">
	    					<label for="">Mô tả ngắn</label>
	    					<textarea class="form-control" 
	    					name="content[sec_fourth][sort_desc]" rows="5">{{ @$content->sec_fourth->sort_desc }}</textarea>
	    				</div>
	    				<div class="form-group">
	    					<label for="">Tiêu đề dòng 2</label>
	    					<input type="text" class="form-control" name="content[sec_fourth][title_line_2]" 
	    					value="{!! @$content->sec_fourth->title_line_2 !!}">
	    				</div>
	    			</div>
	    			<div class="col-sm-2">
	    				<label for="">Hình ảnh</label>
	    				<div class="image">
                            <div class="image__thumbnail">
                                <img src="{{ !empty($content->sec_fourth->image) ?  $content->sec_fourth->image : __IMAGE_DEFAULT__ }}"
                                     data-init="{{ __IMAGE_DEFAULT__ }}">
                                <a href="javascript:void(0)" class="image__delete" onclick="urlFileDelete(this)">
                                    <i class="fa fa-times"></i></a>
                                <input type="hidden" value="{{ @$content->sec_fourth->image }}" 
                                name="content[sec_fourth][image]"/>
                                <div class="image__button" onclick="fileSelect(this)"><i class="fa fa-upload"></i>
                                    Upload
                                </div>
                            </div>
                        </div>
	    			</div>
	    			<div class="col-sm-10">
	    				<div class="form-group">
	    					<label for="">Mô tả</label>
	    					<textarea class="content" 
	    					name="content[sec_fourth][content]">{!! @$content->sec_fourth->content !!}</textarea>
	    				</div>
	    				<div class="form-group">
	    					<label for="">Liên kết</label>
	    					<input type="text" class="form-control" name="content[sec_fourth][link]" value="{{ @$content->sec_fourth->link }}">
	    				</div>
	    			</div>
	    		</div>
	    	</div>
	
			<div class="tab-pane" id="sec5">
				<div class="row">
					<div class="col-sm-12" style="margin-bottom: 10px">
						<label for="">Tiêu đề</label>
						<input type="text" class="form-control" name="content[sec_fifth][title]" 
						value="{{ @$content->sec_fifth->title }}">
					</div>
					<div class="col-sm-12">
						<div class="repeater" id="repeater">
			                <table class="table table-bordered table-hover">
			                    <thead>
				                    <tr>
				                    	<th style="width: 30px;">STT</th>
				                    	<th width="200px">ICON</th>
				                    	<th>Nội dung</th>
				                    	<th style="width: 30px"></th>
				                    </tr>
			                	</thead>
			                    <tbody id="sortable">
			                    	@if (!empty($content->sec_fifth->value))
			                    		@foreach ($content->sec_fifth->value as $key => $value)
			                    			<tr>
												<td class="index"> {{ $loop->index + 1  }}</td>
												<td>
											       <div class="image">
											           <div class="image__thumbnail">
											               <img src="{{ !empty($value->icon) ? $value->icon : __IMAGE_DEFAULT__ }}">
											               <a href="javascript:void(0)" class="image__delete" onclick="urlFileDelete(this)">
											                <i class="fa fa-times"></i></a>
											               <input type="hidden" value="{{ @$value->icon }}" name="content[sec_fifth][value][{{ $key }}][icon]"  />
											               <div class="image__button" onclick="fileSelect(this)"><i class="fa fa-upload"></i> Upload</div>
											           </div>
											       </div>
												</td>
												<td>
													<div class="form-group">
														<textarea class="form-control" name="content[sec_fifth][value][{{ $key }}][title]" rows="5">{!! @$value->title !!}</textarea>
													</div>
												</td>
											    <td style="text-align: center;">
											        <a href="javascript:void(0);" onclick="$(this).closest('tr').remove()" class="text-danger buttonremovetable" title="Xóa">
											            <i class="fa fa-minus"></i>
											        </a>
											    </td>
											</tr>
			                    		@endforeach
			                    	@endif
								</tbody>
			                </table>
			                <div class="text-right">
			                    <button class="btn btn-primary" onclick="repeater(event,this,'{{ route('get.layout') }}','.index', 'services')">Thêm</button>
			                </div>
			            </div>
					</div>
				</div>
			</div>

			<div id="sec6" class="tab-pane">
				<div class="row">
                    <div class="col-sm-12 image" style="padding-bottom: 20px">
                        <button type="button" class="btn btn-success" 
                        onclick="fileMultiSelectCustom(this, 'content[sec_sixth][gallery]')">
                        	<i class="fa fa-upload"></i>  
                            Chọn logo
                        </button>
                        <br><br>
                        <div class="image__gallery">
                            @if (!empty($content->sec_sixth->gallery))
                                @foreach ($content->sec_sixth->gallery as $item)
                                    <div class="image__thumbnail image__thumbnail--style-1">
                                        <img src="{{ @$item }}">
                                        <a href="javascript:void(0)" class="image__delete" onclick="urlFileMultiDelete(this)">
                                            <i class="fa fa-times"></i>
                                        </a>
                                        <input type="hidden" name="content[sec_sixth][gallery][]" value="{{ @$item }}">
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
			</div>

           	<button type="submit" class="btn btn-primary">Lưu lại</button>
        </div>
	</form>
@stop

