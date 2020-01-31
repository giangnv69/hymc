@extends('backend.index')
@section('controller','Trang')
@section('controller_route',route('pages.list'))
@section('action','Danh sách')
@section('content')
	<style>
		.image {
		    margin-top: 5px;
		}
	</style>
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
	            <li class="active"><a href="#sec1" data-toggle="tab" aria-expanded="true">Khối thứ nhất</a></li>
	            <li class=""><a href="#sec2" data-toggle="tab" aria-expanded="true">Nội dung tab - 1</a></li>
	           	<li class=""><a href="#sec3" data-toggle="tab" aria-expanded="true">Nội dung tab - 2</a></li>
	           	<li class=""><a href="#sec4" data-toggle="tab" aria-expanded="true">Nội dung tab - 3</a></li>
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

	    	<div class="tab-pane" id="sec2">
	    		<div class="row">
	    			<div class="col-sm-12">
	    				<div class="form-group">
	    					<label for="">Tiêu đề</label>
	    					<input type="text" name="content[sec_tab_1][title]" class="form-control" 
	    					value="{{ @$content->sec_tab_1->title }}">
	    				</div>
	    				<div class="form-group">
		    				<label for="">Mô tả ngắn</label>
		    				<textarea rows="5" name="content[sec_tab_1][sort_desc]" class="form-control">{{ @$content->sec_tab_1->sort_desc }}</textarea>
	    				</div>
	    			</div>

	    			<div class="col-sm-12">
	    				<div class="repeater" id="repeater">
			                <table class="table table-bordered table-hover tab_1">
			                    <thead>
				                    <tr>
				                    	<th style="width: 30px;">STT</th>
				                    	<th>Tiêu đề</th>
				                    	<th style="width: 60%">Nội dung</th>
										<th>Liên kết</th>
										<th style="width: 30px"></th>
				                    </tr>
			                	</thead>
			                    <tbody id="sortable">
					    			@if (!empty($content->sec_tab_1->content))
					    				@foreach ($content->sec_tab_1->content as $key => $value)
					    					<tr>
												<td class="index"> {{ $loop->index + 1  }}</td>
												<td>
											        <label for="">Tiêu đề</label>
											       <input type="text" class="form-control" name="content[sec_tab_1][content][{{ $key }}][title]" value="{{ @$value->title }}">
												</td>
												<td>
											        <label for="">Nội dung</label>
											        <textarea class="content" 
											        name="content[sec_tab_1][content][{{ $key }}][content]">{!! @$value->content !!}</textarea>
												</td>
											    <td>
											        <div class="form-group">
											            <label for="">Tiêu đề liên kết</label>
											            <input type="text" class="form-control" name="content[sec_tab_1][content][{{ $key }}][title_links]" value="{!! @$value->title_links !!}">
											        </div>
											        <div class="form-group">
											            <label for="">Liên kết</label>
											            <input type="text" class="form-control" name="content[sec_tab_1][content][{{ $key }}][links]" value="{!! @$value->links !!}">
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
			                    <button class="btn btn-primary" onclick="repeater(event,this,'{{ route('get.layout') }}','.index', 'tranding_tab_1', '.tab_1')">Thêm</button>
			                </div>
					    </div>
	    			</div>


	    		</div>
	    	</div>

	    	<div class="tab-pane" id="sec3">
	    		<div class="row">
	    			<div class="col-sm-12">
	    				<div class="form-group">
	    					<label for="">Tiêu đề</label>
	    					<input type="text" class="form-control" name="content[sec_tab_2][title]" 
	    					value="{{ @$content->sec_tab_2->title }}">
	    				</div>
	    				<div class="row">
	    					<div class="col-sm-6">
	    						<div class="form-group">
			    					<label for="">Tiêu đề liên kết 1</label>
			    					<input type="text" class="form-control" name="content[sec_tab_2][title_links_1]" 
			    					value="{{ @$content->sec_tab_2->title_links_1 }}">
			    				</div>
			    				<div class="form-group">
			    					<label for="">Tiêu đề liên kết 1</label>
			    					<input type="text" class="form-control" name="content[sec_tab_2][links_1]" 
			    					value="{{ @$content->sec_tab_2->links_1 }}">
			    				</div>
	    					</div>
	    					<div class="col-sm-6">
	    						<div class="form-group">
			    					<label for="">Tiêu đề liên kết 2</label>
			    					<input type="text" class="form-control" name="content[sec_tab_2][title_links_2]" 
			    					value="{{ @$content->sec_tab_2->title_links_2 }}">
			    				</div>
			    				<div class="form-group">
			    					<label for="">Tiêu đề liên kết 2</label>
			    					<input type="text" class="form-control" name="content[sec_tab_2][links_2]" 
			    					value="{{ @$content->sec_tab_2->links_2 }}">
			    				</div>
	    					</div>	
	    				</div>
	    			</div>
	    			<div class="col-sm-12">
	    				<div class="form-group">
	    					<label for="">Nội dung</label>
	    					<textarea class="content" name="content[sec_tab_2][content]">{!! @$content->sec_tab_2->content !!}</textarea>
	    				</div>
	    			</div>

	    			<div class="col-sm-12">
	    				<label for="">Tiêu chí - cam kết</label>
	    				<div class="repeater" id="repeater">
			                <table class="table table-bordered table-hover tab_2">
			                    <thead>
				                    <tr>
				                    	<th style="width: 30px;">STT</th>
				                    	<th style="width: 200px">Hình ảnh</th>
										<th>Nội dung</th>
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
											               <img src="{{ !empty(@$value->image) ? @$value->image : __IMAGE_DEFAULT__ }}">
											               <a href="javascript:void(0)" class="image__delete" onclick="urlFileDelete(this)">
											                <i class="fa fa-times"></i></a>
											               <input type="hidden" value="{{ @$value->image }}" name="content[sec_tab_2][list_commit][{{ $key }}][image]"  />
											               <div class="image__button" onclick="fileSelect(this)"><i class="fa fa-upload"></i> Upload</div>
											           </div>
											       </div>
												</td>
												<td>
											        <div class="form-group">
											            <textarea name="content[sec_tab_2][list_commit][{{ $key }}][content]" class="form-control" rows="7">{!! @$value->content !!}</textarea>
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
			                    <button class="btn btn-primary" onclick="repeater(event,this,'{{ route('get.layout') }}','.index', 'tranding_tab_2', '.tab_2')">Thêm</button>
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
	    					<input type="text" name="content[sec_tab_3][title]" class="form-control" 
	    					value="{{ @$content->sec_tab_3->title }}">
	    				</div>
	    				<div class="form-group">
		    				<label for="">Mô tả ngắn</label>
		    				<textarea rows="5" name="content[sec_tab_3][sort_desc]" class="form-control">{{ @$content->sec_tab_3->sort_desc }}</textarea>
	    				</div>
	    			</div>
					
					<div class="col-sm-12">
	    				<div class="repeater" id="repeater">
			                <table class="table table-bordered table-hover tab_3">
			                    <thead>
				                    <tr>
				                    	<th style="width: 30px;">STT</th>
				                    	<th style="width: 200px">Hình ảnh</th>
				                    	<th>Nội dung</th>
										<th style="width: 30px"></th>
				                    </tr>
			                	</thead>
			                    <tbody id="sortable">
					    			@if (!empty($content->sec_tab_3->list_content))
					    				@foreach ($content->sec_tab_3->list_content as $key => $value)
					    					<tr>
												<td class="index"> {{ $loop->index + 1 }}</td>
												<td>
											        <div class="image">
											           <div class="image__thumbnail">
											               <img src="{{ !empty($value->image) ? $value->image : __IMAGE_DEFAULT__ }}">
											               <a href="javascript:void(0)" class="image__delete" onclick="urlFileDelete(this)">
											                <i class="fa fa-times"></i></a>
											               <input type="hidden" value="{{ @$value->image }}" name="content[sec_tab_3][list_content][{{ $key }}][image]"  />
											               <div class="image__button" onclick="fileSelect(this)"><i class="fa fa-upload"></i> Upload</div>
											           </div>
											       </div>
												</td>
												<td>
											        <div class="form-group">
											            <label for="">Tiêu đề</label>
											            <input type="text" class="form-control" name="content[sec_tab_3][list_content][{{ $key }}][title]" value="{{ @$value->title }}">
											        </div>
											        <div class="form-group">
											            <label for="">Nội dung</label>
											            <textarea class="content" name="content[sec_tab_3][list_content][{{ $key }}][content]">{!! @$value->content !!}</textarea>
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
			                    <button class="btn btn-primary" onclick="repeater(event,this,'{{ route('get.layout') }}','.index', 'tranding_tab_3', '.tab_3')">Thêm</button>
			                </div>
					    </div>
	    			</div>

	    		</div>
	    	</div>



           	<button type="submit" class="btn btn-primary" style="margin-top: 20px">Lưu lại</button>
        </div>
	</form>
@stop

