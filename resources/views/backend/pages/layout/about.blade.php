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
	           	<li class=""><a href="#sec2" data-toggle="tab" aria-expanded="true">Nội dung tab - 1</a></li>
	           	<li class=""><a href="#sec3" data-toggle="tab" aria-expanded="true">Nội dung tab - 2</a></li>
	           	<li class=""><a href="#sec4" data-toggle="tab" aria-expanded="true">Nội dung tab - 3</a></li>
	           	<li class=""><a href="#sec5" data-toggle="tab" aria-expanded="true">Nội dung tab - 4</a></li>
				<li class=""><a href="#sec6" data-toggle="tab" aria-expanded="true">Nội dung tab - 5</a></li>
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
							<input type="text" name="content[sec_first][title]" class="form-control" 
							value="{{ @$content->sec_first->title }}">
	    				</div>
	    				<div class="form-group">
	    					<label for="">Nội dung</label>
	    					<textarea class="content" name="content[sec_first][content]">{!! @$content->sec_first->content !!}</textarea>
	    				</div>

	    				<div class="form-group">
	    					<label for="">Liên kết</label>
							<input type="text" name="content[sec_first][links]" class="form-control" 
							value="{{ @$content->sec_first->links }}">
	    				</div>
	    				
	    			</div>
	    		</div>
	    	</div>

	    	<div id="sec2" class="tab-pane">
	    		<div class="row">
	    			<div class="col-sm-12">
	    				<div class="form-group">
	    					<label for="">Tiêu đề</label>
	    					<input type="text" class="form-control" name="content[sec_tab_1][title]" value="{{ @$content->sec_tab_1->title }}">
	    				</div>
	    				<div class="form-group">
	    					<label for="">Nội dung</label>
	    					<textarea class="content" name="content[sec_tab_1][content]">{!! @$content->sec_tab_1->content !!}</textarea>
	    				</div>
	    			</div>
	    		</div>
	    	</div>

	    	<div class="tab-pane" id="sec3">
	    		<div class="row">
	    			<div class="col-sm-12">
	    				<div class="form-group">
	    					<label for="">Tiêu đề</label>
	    					<input type="text" class="form-control" name="content[sec_tab_2][title]" value="{{ @$content->sec_tab_1->title }}">
	    				</div>
	    				<div class="form-group">
	    					<label for="">Mô tả ngắn</label>
							<textarea class="form-control" name="content[sec_tab_2][sort_desc]" rows="6">{!! @$content->sec_tab_2->sort_desc !!}</textarea>
	    				</div>
	    				<div class="col-sm-12">
							<div class="repeater" id="repeater">
				                <table class="table table-bordered table-hover tab_2">
				                    <thead>
					                    <tr>
					                    	<th style="width: 30px;">STT</th>
					                    	<th style="width: 200px">Hình ảnh</th>
					                    	<th >Nội dung</th>
											<th style="width: 30px"></th>
					                    </tr>
				                	</thead>
				                    <tbody id="sortable">
						    			@if (!empty($content->sec_tab_2->list_commit))
						    				@foreach ($content->sec_tab_2->list_commit as $key => $value)
						    					<tr>
		   											<td class="index"> {{ $loop->index + 1  }}</td>
													<td>
												        <div class="image">
												            <div class="image__thumbnail">
												                <img src="{{ !empty($value->image) ? $value->image : __IMAGE_DEFAULT__ }}" data-init="{{ __IMAGE_DEFAULT__ }}">
												                <a href="javascript:void(0)" class="image__delete" onclick="urlFileDelete(this)">
												                <i class="fa fa-times"></i></a>
												                <input type="hidden" value="{{ @$value->image }}" name="content[sec_tab_2][list_commit][{{ $key }}][image]"  />
												                <div class="image__button" onclick="fileSelect(this)"><i class="fa fa-upload"></i> Upload</div>
												            </div>
												        </div>
													</td>
													<td>
												        <div class="form-group">
												            <label for="">Tiêu đề</label>
												            <input type="text" name="content[sec_tab_2][list_commit][{{ $key }}][title]" class="form-control" value="{{ @$value->title }}">
												        </div>
												        <label for="">Nội dung</label>
												        <textarea name="content[sec_tab_2][list_commit][{{ $key }}][content]" class="form-control" rows="6">{!! @$value->content !!}</textarea>
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
				                    <button class="btn btn-primary" onclick="repeater(event,this,'{{ route('get.layout') }}','.index', 'about_tab_2', '.tab_2')">Thêm</button>
				                </div>
						    </div>
						</div>
	    			</div>
	    		</div>
	    	</div>

	    	<div class="tab-pane" id="sec4">
	    		<div class="row">
	    			<div class="col-sm-12">
	    				<div class="form-group">
	    					<label for="">Tiêu đề</label>
	    					<input type="text" class="form-control" name="content[sec_tab_3][title]" value="{{ @$content->sec_tab_3->title }}">
	    				</div>
	    				<div class="form-group">
	    					<label for="">Nội dung</label>
	    					<textarea class="content" name="content[sec_tab_3][content]">{!! @$content->sec_tab_3->content !!}</textarea>
	    				</div>
	    			</div>
	    		</div>
	    	</div>
			
			<div class="tab-pane" id="sec5">
				<div class="row">
	    			<div class="col-sm-12">
	    				<div class="form-group">
	    					<label for="">Tiêu đề</label>
	    					<input type="text" class="form-control" name="content[sec_tab_4][title]" value="{{ @$content->sec_tab_4->title }}">
	    				</div>
	    				<div class="form-group">
	    					<label for="">Nội dung</label>
	    					<textarea class="form-control" name="content[sec_tab_4][content]">{!! @$content->sec_tab_4->content !!}</textarea>
	    				</div>
	    			</div>

	    			<div class="col-sm-6">
	    				<div class="form-group">
	    					<label for="">Icon 1</label>
	    					<div class="image">
					            <div class="image__thumbnail">
					                <img src="{{ !empty($content->sec_tab_4->icon_1->image) ? $content->sec_tab_4->icon_1->image : __IMAGE_DEFAULT__ }}" data-init="{{ __IMAGE_DEFAULT__ }}">
					                <a href="javascript:void(0)" class="image__delete" onclick="urlFileDelete(this)">
					                <i class="fa fa-times"></i></a>
					                <input type="hidden" value="{{ @$content->sec_tab_4->icon_1->image }}" name="content[sec_tab_4][icon_1][image]"  />
					                <div class="image__button" onclick="fileSelect(this)"><i class="fa fa-upload"></i> Upload</div>
					            </div>
					        </div>
	    				</div>
						<div class="form-group">
							<label for="">Tiêu đề</label>
							<input type="text" class="form-control" value="{{ @$content->sec_tab_4->icon_1->title }}"
							name="content[sec_tab_4][icon_1][title]">
						</div>
						<div class="form-group">
							<label for="">Nội dung</label>
							<textarea class="form-control" rows="5" name="content[sec_tab_4][icon_1][content]">{!! @$content->sec_tab_4->icon_1->content !!}</textarea>
						</div>
	    			</div>
					
					<div class="col-sm-6">
	    				<div class="form-group">
	    					<label for="">Icon 2</label>
	    					<div class="image">
					            <div class="image__thumbnail">
					                <img src="{{ !empty($content->sec_tab_4->icon_2->image) ? $content->sec_tab_4->icon_2->image : __IMAGE_DEFAULT__ }}" data-init="{{ __IMAGE_DEFAULT__ }}">
					                <a href="javascript:void(0)" class="image__delete" onclick="urlFileDelete(this)">
					                <i class="fa fa-times"></i></a>
					                <input type="hidden" value="{{ @$content->sec_tab_4->icon_2->image }}" name="content[sec_tab_4][icon_2][image]"  />
					                <div class="image__button" onclick="fileSelect(this)"><i class="fa fa-upload"></i> Upload</div>
					            </div>
					        </div>
	    				</div>
						<div class="form-group">
							<label for="">Tiêu đề</label>
							<input type="text" class="form-control" value="{{ @$content->sec_tab_4->icon_2->title }}"
							name="content[sec_tab_4][icon_2][title]">
						</div>
						<div class="form-group">
							<label for="">Nội dung</label>
							<textarea class="form-control" rows="5" name="content[sec_tab_4][icon_2][content]">{!! @$content->sec_tab_4->icon_2->content !!}</textarea>
						</div>

	    			</div>

	    			<div class="col-sm-12 image" style="padding-bottom: 20px">
                        <button type="button" class="btn btn-success" 
                        onclick="fileMultiSelectCustom(this, 'content[sec_tab_4][gallery]')">
                        	<i class="fa fa-upload"></i>  
                            Chọn logo
                        </button>
                        <br><br>
                        <div class="image__gallery">
                            @if (!empty($content->sec_tab_4->gallery))
                                @foreach ($content->sec_tab_4->gallery as $item)
                                    <div class="image__thumbnail image__thumbnail--style-1">
                                        <img src="{{ @$item }}">
                                        <a href="javascript:void(0)" class="image__delete" onclick="urlFileMultiDelete(this)">
                                            <i class="fa fa-times"></i>
                                        </a>
                                        <input type="hidden" name="content[sec_tab_4][gallery][]" value="{{ @$item }}">
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
	    		</div>
			</div>

			<div class="tab-pane" id="sec6">
				<div class="row">
					<div class="col-sm-2">
						<div class="form-group">
	    					<label for="">Logo</label>
	    					<div class="image">
					            <div class="image__thumbnail">
					                <img src="{{ !empty($content->sec_tab_5->logo) ? $content->sec_tab_5->logo : __IMAGE_DEFAULT__ }}" data-init="{{ __IMAGE_DEFAULT__ }}">
					                <a href="javascript:void(0)" class="image__delete" onclick="urlFileDelete(this)">
					                <i class="fa fa-times"></i></a>
					                <input type="hidden" value="{{ @$content->sec_tab_5->logo }}" name="content[sec_tab_5][logo]"  />
					                <div class="image__button" onclick="fileSelect(this)"><i class="fa fa-upload"></i> Upload</div>
					            </div>
					        </div>
	    				</div>
					</div>

					<div class="col-sm-10">
						<div class="form-group">
							<label for="">Email</label>
							<input type="text" class="form-control" name="content[sec_tab_5][email]" value="{{ @$content->sec_tab_5->email }}">
						</div>
						<div class="form-group">
							<label for="">Số điện thoại 1</label>
							<input type="text" class="form-control" name="content[sec_tab_5][phone_1]" value="{{ @$content->sec_tab_5->phone_1 }}">
						</div>
						<div class="form-group">
							<label for="">Số điện thoại 2</label>
							<input type="text" class="form-control" name="content[sec_tab_5][phone_2]" value="{{ @$content->sec_tab_5->phone_2 }}">
						</div>
					</div>
				</div>
			</div>

	    </div>

	    <button type="submit" class="btn btn-primary">Lưu lại</button>
	</form>
@stop