@extends('backend.index')
@section('controller','Mạng xã hội')
@section('action','Cập nhật')
@section('content')
@include('backend.block.error')
	<div class="nav-tabs-custom">
		<ul class="nav nav-tabs">
         	<li class="active"><a href="#activity" data-toggle="tab" aria-expanded="true">Mạng xã hội</a></li>
      	</ul>
	</div>
	<div class="tab-content">
		<div class="row" style="">
			<form action="{{ route('social.post') }}" method="POST">
				<input type="hidden" name="_token" value="{!! csrf_token() !!}">
				<div class="col-sm-12">
					<div class="repeater" id="repeater">
		                <table class="table table-bordered table-hover">
		                    <thead>
			                    <tr>
			                    	<th style="width: 30px;">STT</th>
			                    	<th>Tên mạng xã hội</th>
			                    	<th>Icon</th>
			                    	<th>Liên kết</th>
			                    	<th></th>
			                    </tr>
		                	</thead>
		                    <tbody id="sortable">
		                    	@if (!empty($data->content->social))
		                    		@foreach ($data->content->social as $key => $val)
										<tr>
											<td class="index">{{ $loop->index+1 }}</td>
											<td>
												<input type="text" class="form-control" value="{{ $val->name }}" name="content[social][{{$key}}][name]" >
											</td>
											<td>
												<input type="text" class="form-control icon-picker" name="content[social][{{$key}}][icon]" required="" value="{{ $val->icon }}">
											</td>
											<td style="position:relative">
										        <input type="text" class="form-control" required="" name="content[social][{{$key}}][link]" value="{{ $val->link }}">
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
		                    <button class="btn btn-primary" 
				            	onclick="repeater(event,this,'{{ route('get.layout') }}','.index', 'social')">Thêm
				            </button>
		                </div>

		            </div>
				</div>
				<div class="col-sm-12">
					<button type="submit" class="btn btn-info">Lưu Lại</button>
				</div>
			</form>
		</div>
	</div>
@stop