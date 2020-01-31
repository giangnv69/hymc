@extends('backend.index')
@section('controller','Phát Triển')
@section('action','CK Finder')
@section('content')
	<div class="row">
		
		<div class="col-lg-2">
           <div class="form-group">
               <label>Hình ảnh</label>
               <div class="image">
                   <div class="image__thumbnail">
                       <img src="{{ __IMAGE_DEFAULT__ }}"  data-init="{{ __IMAGE_DEFAULT__ }}">
                       <a href="javascript:void(0)" class="image__delete" onclick="urlFileDelete(this)">
                       	<i class="fa fa-times"></i></a>
                       <input type="hidden" value="" name="image"  />
                       <div class="image__button" onclick="fileSelect(this)"><i class="fa fa-upload"></i> Upload</div>
                   </div>
               </div>
           </div>
       </div>
       <div class="col-lg-10">
			<form>
				<fieldset class="form-group">
					<label for="formGroupExampleInput">Soạn thảo văn bản:</label>
					<textarea class="content" name="content"></textarea>
				</fieldset>
			</form>
		</div>
		<div class="col-sm-12 image">
			<button type="button" class="btn btn-success" onclick="fileMultiSelect(this)"><i class="fa fa-upload"></i> 	
				Chọn hình ảnh
			</button>
			<br><br>
			<div class="image__gallery"></div>
		</div>
		<div class="col-lg-12">
            <label>Nội thất</label>
            <div class="repeater" id="repeater">
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr><th style="width: 30px;">No.</th>
                    <th style="width: 70px;">Nổi bật</th>
                    <th>Nội dung</th>

                    </tr></thead>
                    <tbody id="sortable">

					           </tbody>
                </table>
                <div class="text-right">
                    <button class="btn btn-primary" onclick="repeater(event,this,'{{ route('developer.get-row') }}','.index')">Thêm</button>
                </div>
            </div>
        </div>
	</div>
@stop