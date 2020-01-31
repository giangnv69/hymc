<?php $id = isset($id) ? $id : (int) round(microtime(true) * 1000); ?>
<tr>
	<td class="index">{{ $index }}</td>
	<td><input type="text" class="form-control" name="content[social][{{$id}}][name]" ></td>
	<td><input type="text" class="form-control" name="content[social][{{$id}}][icon]" required=""></td>
	<td>
        <input type="text" class="form-control" required="" name="content[social][{{$id}}][link]">
    </td>
    <td style="text-align: center;">
        <a style="
                position: relative;
                top: 40%;
                border:1px solid #ccc;
                display: inline-block;
                border-radius:15px;
                width: 15px;
                height: 15px;
                font-size: 10px;
                text-align: center;
                background-color: #fff;"
           href="javascript:void(0);" onclick="$(this).closest('tr').remove()" class="text-danger" title="Xóa">
            <i class="fa fa-minus"></i>
        </a>
    </td>
</tr>