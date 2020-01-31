<?php $key = isset($id) ? $id : (int) round(microtime(true) * 1000); ?>
<tr>
	<td class="index"> {{ $index  }}</td>
	<td>
        <label for="">Tiêu đề</label>
       <input type="text" class="form-control" name="content[sec_tab_1][content][{{ $key }}][title]">
	</td>
	<td>
        <label for="">Nội dung</label>
        <textarea id="content-1{{ $index }}" name="content[sec_tab_1][content][{{ $key }}][content]"></textarea>
	</td>
    <td>
        <div class="form-group">
            <label for="">Tiêu đề liên kết</label>
            <input type="text" class="form-control" name="content[sec_tab_1][content][{{ $key }}][title_links]">
        </div>
        <div class="form-group">
            <label for="">Liên kết</label>
            <input type="text" class="form-control" name="content[sec_tab_1][content][{{ $key }}][links]">
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
