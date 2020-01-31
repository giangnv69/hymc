<?php $key = isset($id) ? $id : (int) round(microtime(true) * 1000); ?>
<tr>
	<td class="index"> {{ $index  }}</td>
	<td>
        <div class="image">
           <div class="image__thumbnail">
               <img src="{{  __IMAGE_DEFAULT__ }}"  
               data-init="{{ __IMAGE_DEFAULT__ }}">
               <a href="javascript:void(0)" class="image__delete" onclick="urlFileDelete(this)">
                <i class="fa fa-times"></i></a>
               <input type="hidden" value="" name="content[sec_tab_3][list_content][{{ $key }}][image]"  />
               <div class="image__button" onclick="fileSelect(this)"><i class="fa fa-upload"></i> Upload</div>
           </div>
       </div>
	</td>
	<td>
        <div class="form-group">
            <label for="">Tiêu đề</label>
            <input type="text" class="form-control" name="content[sec_tab_3][list_content][{{ $key }}][title]">
        </div>
        <div class="form-group">
            <label for="">Nội dung</label>
            <textarea id="content-1{{ $index }}" name="content[sec_tab_3][list_content][{{ $key }}][content]"></textarea>
        </div>
	</td>
    <td style="text-align: center;">
        <a href="javascript:void(0);" onclick="$(this).closest('tr').remove()" class="text-danger buttonremovetable" title="Xóa">
            <i class="fa fa-minus"></i>
        </a>
    </td>
</tr>
<script>
    editor = CKEDITOR.replace( 'content-1{{ $index }}' );
    CKFinder.setupCKEditor(editor);
</script>
