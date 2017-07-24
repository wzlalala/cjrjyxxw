<?php 
defined('IN_ADMIN') or exit('No permission resources.');
include $this->admin_tpl('header', 'admin');
$authkey = upload_key('1,'.$thisExt.',1');
?>
<div class="pad-10">
<form method="post" action="?m=applyforjob&c=admin_applyforjob&a=add" name="myform" id="myform">
<table class="table_form" width="100%" cellspacing="0">
<tbody>
	<tr>
		<th><strong>姓名</strong></th>
		<td><input name="applyforjob[xm]" id="xm" class="input-text" type="text" size="30" ></td>
        <th rowspan="5"><strong>头像照片</strong></th>
        <td rowspan="5">
            <a href="javascript:flashupload('imgurl<?php echo $i;?>_images', '<?php echo L('upload_photo')?>','imgurl<?php echo $i;?>',preview,'1,<?php echo $thisExt?>,1','poster', '', '<?php echo $authkey?>');void(0);">
                <img src="<?php echo IMG_PATH;?>icon/upload-face.jpg" id="imgurl<?php echo $i;?>_s" width="100" height="150">
            </a>
            <input type="hidden" id="imgurl<?php echo $i;?>" name="applyforjob[zp]">
        </td>
    </tr>
    <tr>
        <th><strong>性别</strong></th>
        <td>
            <select name="applyforjob[xb]" id="xb">
                <option value="男">男</option>
                <option value="女">女</option>
            </select>
           <!-- <input name="applyforjob[xb]" id="xb" class="input-text" type="text" size="30" value="男" >-->
        </td>
    </tr>
    <tr>
        <th><strong>身份证号</strong></th>
        <td><input name="applyforjob[sfzh]" id="sfzh" class="input-text" type="text" size="30" ></td>
    </tr>
    <tr>
        <th><strong>残疾证号</strong></th>
        <td><input name="applyforjob[cjzh]" id="cjzh" class="input-text" type="text" size="30" ></td>
    </tr>

	<tr>
        <th><strong>出生日期</strong></th>
        <td><?php echo form::date('applyforjob[csrq]', date('Y-m-d'), 1)?></td>
    </tr>
    <tr>
        <th><strong>民族</strong></th>
        <td><input name="applyforjob[mz]" id="mz" class="input-text" type="text" size="30" ></td>
    </tr>
    <tr>
        <th><strong>残疾类别</strong></th>
        <td><input name="applyforjob[cjlb]" id="cjlb" class="input-text" type="text" size="30" ></td>

        <th><strong>残疾等级</strong></th>
        <td><input name="applyforjob[cjdj]" id="cjdj" class="input-text" type="text" size="30" ></td>
    </tr>
    <tr>
        <th><strong>文化程度</strong></th>
        <td><input name="applyforjob[whcd]" id="whcd" class="input-text" type="text" size="30" ></td>
        <th><strong>政治面貌</strong></th>
        <td><input name="applyforjob[zzmm]" id="zzmm" class="input-text" type="text" size="30" ></td>
    </tr>
    <tr>
        <th><strong>婚姻状况</strong></th>
        <td><input name="applyforjob[hyzk]" id="hyzk" class="input-text" type="text" size="30" ></td>
        <th><strong>职称等级</strong></th>
        <td><input name="applyforjob[zcdj]" id="zcdj" class="input-text" type="text" size="30" ></td>
    </tr>
    <tr>
        <th><strong>所属辖区</strong></th>
        <td><input name="applyforjob[ssxq]" id="ssxq" class="input-text" type="text" size="30" ></td>
        <th><strong>联系电话</strong></th>
        <td><input name="applyforjob[lxdh]" id="lxdh" class="input-text" type="text" size="30" ></td>
    </tr>
    <tr>
        <th><strong>家庭住址</strong></th>
        <td colspan="3"><input name="applyforjob[jtzz]" id="jtzz" class="input-text" type="text" size="80" ></td>
    </tr>

    <tr>
        <th><strong>是否有效</strong></th>
        <td colspan="3"><input name="applyforjob[sfyx]" type="radio" value="0" checked>&nbsp;有效&nbsp;&nbsp;<input name="applyforjob[sfyx]" type="radio" value="1">&nbsp;无效</td>
	</tbody>
</table>
<input type="submit" name="dosubmit" id="dosubmit" value=" <?php echo L('ok')?> " class="dialog">&nbsp;<input type="reset" class="dialog" value=" <?php echo L('clear')?> ">
</form>
</div>
</body>
</html>
<script type="text/javascript">
    function preview(uploadid,returnid){
        var d = window.top.art.dialog({id:uploadid}).data.iframe;
        var in_content = d.$("#att-status").html().substring(1);
        $('#'+returnid).val(in_content);
        $('#'+returnid+'_s').attr('src', in_content);
    }
</script>
 <script type="text/javascript" src="<?php echo JS_PATH?>swfupload/swf2ckeditor.js"></script>