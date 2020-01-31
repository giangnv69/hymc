@extends('backend.index')
@section('controller','Widget')
@section('action','Cập nhật')
@section('content')
	@include('backend.block.error')
	<?php if(!empty($data->content)){
		$content = json_decode( $data->content );
	} ?>
	<form action="{{ route('widget.get.post') }}" method="POST">
		<input type="hidden" name="_token" value="{!! csrf_token() !!}">
		<div class="nav-tabs-custom">
			<ul class="nav nav-tabs">
	         	<li class="active"><a href="#activity" data-toggle="tab" aria-expanded="true">Nội dung chân trang tiếng Anh</a></li>
	         	<li class=""><a href="#activity1" data-toggle="tab" aria-expanded="true">Nội dung chân trang tiếng Việt</a></li>
	         	<li class=""><a href="#activity2" data-toggle="tab" aria-expanded="true">Khác</a></li>

	      	</ul>
		</div>
		<div class="tab-content">

			<div class="tab-pane active" id="activity" >
				<div class="row">
					<h4 class="text-center" style="text-transform: uppercase;">Khối nội dung thứ nhất</h4>
					<div class="col-sm-4">
						<div class="form-group">
							<label for="">Tiêu đề</label>
							<input type="text" name="content[en][sec_frist][col_first][title]" class="form-control" 
							value="{{ @$content->en->sec_frist->col_first->title }}">
						</div>
						<div class="form-group">
							<label for="">Nội dung</label>
							<textarea class="content" 
							name="content[en][sec_frist][col_first][content]">{!! @$content->en->sec_frist->col_first->content !!}</textarea>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="form-group">
							<label for="">Tiêu đề</label>
							<input type="text" name="content[en][sec_frist][col_second][title]" class="form-control" 
							value="{{ @$content->en->sec_frist->col_second->title }}">
						</div>
						<div class="form-group">
							<label for="">Nội dung</label>
							<textarea class="content" 
							name="content[en][sec_frist][col_second][content]">{!! @$content->en->sec_frist->col_second->content !!}</textarea>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="form-group">
							<label for="">Tiêu đề</label>
							<input type="text" name="content[en][sec_frist][col_third][title]" class="form-control" 
							value="{{ @$content->en->sec_frist->col_third->title }}">
						</div>
						<div class="form-group">
							<label for="">Nội dung</label>
							<textarea class="content" 
							name="content[en][sec_frist][col_third][content]">{!! @$content->en->sec_frist->col_third->content !!}</textarea>
						</div>
					</div>
				</div>
				<div class="row">
					<h4 class="text-center" style="text-transform: uppercase;">Khối nội dung thứ hai</h4>
					<div class="col-sm-12">
						<div class="form-group">
							<label for="">Tiêu đề khối</label>
							<input type="text" name="content[en][sec_second][title]" class="form-control"
							value="{{ @$content->en->sec_second->title }}">
						</div>
						<div class="repeater" id="repeater">
			                <table class="table table-bordered table-hover">
			                    <thead>
				                    <tr>
				                    	<th style="width: 30px;">STT</th>
				                    	<th style="width: 200px">Hình ảnh</th>
				                    	<th>Nội dung</th>
				                    </tr>
			                	</thead>
			                    <tbody id="sortable">
			                    	@if(!empty($content->en->sec_second->value))
					    				@foreach ($content->en->sec_second->value as $key => $value)
						    				<tr>
						    					<td>{{ $loop->index + 1  }}</td>
						    					<td>
						    						<label for="">Logo</label>
						    						<div class="image">
			                            				<div class="image__thumbnail">
							                                <img src="{{ !empty($value->logo) ? $value->logo : __IMAGE_DEFAULT__ }}"
							                                     data-init="{{ __IMAGE_DEFAULT__ }}">
							                                <a href="javascript:void(0)" class="image__delete" onclick="urlFileDelete(this)">
							                                    <i class="fa fa-times"></i></a>
							                                <input type="hidden" value="{{ @$value->logo }}" 
							                                name="content[en][sec_second][value][{{ $key }}][logo]"/>
							                                <div class="image__button" onclick="fileSelect(this)">
							                                	<i class="fa fa-upload"></i>
							                                    Upload
							                                </div>
							                            </div>
							                        </div>
						    					</td>
						    					<td>
						    						<div class="form-group">
						    							<label for="">Tên công ty</label>
						    							<input type="text" name="content[en][sec_second][value][{{ $key }}][name]" class="form-control" value="{{ @$value->name }}">
						    						</div>
						    						<div class="form-group">
						    							<label for="">Mô tả</label>
						    							<textarea class="form-control" name="content[en][sec_second][value][{{ $key }}][content]" rows="5">{{ @$value->content }}</textarea>
						    						</div>
						    					</td>
						    				</tr>
					    				@endforeach
					    			@endif
					    		</tbody>
					    	</table>
					    </div>
					</div>
				</div>
				<div class="row">
					<h4 class="text-center" style="text-transform: uppercase;">Khối nội dung thứ ba</h4>
					<div class="col-sm-4">
						<div class="form-group">
							<label for="">Tiêu đề nội dung 1</label>
							<input type="text" name="content[en][sec_fourth][content_1][title]" value="{{ @$content->en->sec_fourth->content_1->title }}" class="form-control">
						</div>
						<div class="form-group">
							<label for="">Nội dung 1</label>
							<textarea class="content" name="content[en][sec_fourth][content_1][content]">{!! @$content->en->sec_fourth->content_1->content !!}</textarea>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="form-group">
							<label for="">Tiêu đề nội dung 2</label>
							<input type="text" name="content[en][sec_fourth][content_2][title]" value="{{ @$content->en->sec_fourth->content_3->title }}" class="form-control">
						</div>
						<div class="form-group">
							<label for="">Nội dung 2</label>
							<textarea class="content" name="content[en][sec_fourth][content_2][content]">{!! @$content->en->sec_fourth->content_3->content !!}</textarea>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="form-group">
							<label for="">Tiêu đề nội dung 3</label>
							<input type="text" name="content[en][sec_fourth][content_3][title]" value="{{ @$content->en->sec_fourth->content_3->title }}" class="form-control">
						</div>
						<div class="form-group">
							<label for="">Nội dung 3</label>
							<textarea class="content" name="content[en][sec_fourth][content_3][content]">{!! @$content->en->sec_fourth->content_3->content !!}</textarea>
						</div>
					</div>
				</div>
			</div>
			
			<div class="tab-pane " id="activity1" >
				<div class="row">
					<h4 class="text-center" style="text-transform: uppercase;">Khối nội dung thứ nhất</h4>
					<div class="col-sm-4">
						<div class="form-group">
							<label for="">Tiêu đề</label>
							<input type="text" name="content[vi][sec_frist][col_first][title]" class="form-control" 
							value="{{ @$content->vi->sec_frist->col_first->title }}">
						</div>
						<div class="form-group">
							<label for="">Nội dung</label>
							<textarea class="content" 
							name="content[vi][sec_frist][col_first][content]">{!! @$content->vi->sec_frist->col_first->content !!}</textarea>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="form-group">
							<label for="">Tiêu đề</label>
							<input type="text" name="content[vi][sec_frist][col_second][title]" class="form-control" 
							value="{{ @$content->vi->sec_frist->col_second->title }}">
						</div>
						<div class="form-group">
							<label for="">Nội dung</label>
							<textarea class="content" 
							name="content[vi][sec_frist][col_second][content]">{!! @$content->vi->sec_frist->col_second->content !!}</textarea>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="form-group">
							<label for="">Tiêu đề</label>
							<input type="text" name="content[vi][sec_frist][col_third][title]" class="form-control" 
							value="{{ @$content->vi->sec_frist->col_third->title }}">
						</div>
						<div class="form-group">
							<label for="">Nội dung</label>
							<textarea class="content" 
							name="content[vi][sec_frist][col_third][content]">{!! @$content->vi->sec_frist->col_third->content !!}</textarea>
						</div>
					</div>
				</div>
				<div class="row">
					<h4 class="text-center" style="text-transform: uppercase;">Khối nội dung thứ hai</h4>
					<div class="col-sm-12">
						<div class="form-group">
							<label for="">Tiêu đề khối</label>
							<input type="text" name="content[vi][sec_second][title]" class="form-control"
							value="{{ @$content->vi->sec_second->title }}">
						</div>
						<div class="repeater" id="repeater">
			                <table class="table table-bordered table-hover">
			                    <thead>
				                    <tr>
				                    	<th style="width: 30px;">STT</th>
				                    	<th style="width: 200px">Hình ảnh</th>
				                    	<th>Nội dung</th>
				                    </tr>
			                	</thead>
			                    <tbody id="sortable">
			                    	@if(!empty($content->vi->sec_second->value))
					    				@foreach ($content->vi->sec_second->value as $key => $value)
						    				<tr>
						    					<td>{{ $loop->index + 1  }}</td>
						    					<td>
						    						<label for="">Logo</label>
						    						<div class="image">
			                            				<div class="image__thumbnail">
							                                <img src="{{ !empty($value->logo) ? $value->logo : __IMAGE_DEFAULT__ }}"
							                                     data-init="{{ __IMAGE_DEFAULT__ }}">
							                                <a href="javascript:void(0)" class="image__delete" onclick="urlFileDelete(this)">
							                                    <i class="fa fa-times"></i></a>
							                                <input type="hidden" value="{{ @$value->logo }}" 
							                                name="content[vi][sec_second][value][{{ $key }}][logo]"/>
							                                <div class="image__button" onclick="fileSelect(this)">
							                                	<i class="fa fa-upload"></i>
							                                    Upload
							                                </div>
							                            </div>
							                        </div>
						    					</td>
						    					<td>
						    						<div class="form-group">
						    							<label for="">Tên công ty</label>
						    							<input type="text" name="content[vi][sec_second][value][{{ $key }}][name]" class="form-control" value="{{ @$value->name }}">
						    						</div>
						    						<div class="form-group">
						    							<label for="">Mô tả</label>
						    							<textarea class="form-control" name="content[vi][sec_second][value][{{ $key }}][content]" rows="5">{{ @$value->content }}</textarea>
						    						</div>
						    					</td>
						    				</tr>
					    				@endforeach
					    			@endif
					    		</tbody>
					    	</table>
					    </div>
					</div>
				</div>
				<div class="row">
					<h4 class="text-center" style="text-transform: uppercase;">Khối nội dung thứ ba</h4>
					<div class="col-sm-4">
						<div class="form-group">
							<label for="">Tiêu đề nội dung 1</label>
							<input type="text" name="content[vi][sec_fourth][content_1][title]" value="{{ @$content->vi->sec_fourth->content_1->title }}" class="form-control">
						</div>
						<div class="form-group">
							<label for="">Nội dung 1</label>
							<textarea class="content" name="content[vi][sec_fourth][content_1][content]">{!! @$content->vi->sec_fourth->content_1->content !!}</textarea>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="form-group">
							<label for="">Tiêu đề nội dung 2</label>
							<input type="text" name="content[vi][sec_fourth][content_2][title]" value="{{ @$content->vi->sec_fourth->content_3->title }}" class="form-control">
						</div>
						<div class="form-group">
							<label for="">Nội dung 2</label>
							<textarea class="content" name="content[vi][sec_fourth][content_2][content]">{!! @$content->vi->sec_fourth->content_3->content !!}</textarea>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="form-group">
							<label for="">Tiêu đề nội dung 3</label>
							<input type="text" name="content[vi][sec_fourth][content_3][title]" value="{{ @$content->vi->sec_fourth->content_3->title }}" class="form-control">
						</div>
						<div class="form-group">
							<label for="">Nội dung 3</label>
							<textarea class="content" name="content[vi][sec_fourth][content_3][content]">{!! @$content->vi->sec_fourth->content_3->content !!}</textarea>
						</div>
					</div>
				</div>
			</div>

			<div class="tab-pane active" id="activity2">
				<div class="row">
					<div class="col-sm-12">
						<div class="form-group">
							<label for="">Liên kết Start trading</label>
							<input type="text" class="form-control" name="content[orther][link]" class="form-control" 
							value="{{ @$content->orther->link }}">
						</div>
					</div>
				</div>
			</div>

		</div>
		<div class="row" style="">
			<div class="col-sm-12">
				<button type="submit" class="btn btn-info">Lưu Lại</button>
			</div>
		</div>
	</form>
@stop