<?php 
defined('IN_ADMIN') or exit('No permission resources.');
include $this->admin_tpl('header', 'admin');
$authkey = upload_key('1,'.$thisExt.',1');
?>
<div class="pad-10">
<form method="post" action="?m=applyforjob&c=admin_applyforjob&a=edit&id=<?php echo $_GET['id']?>" name="myform" id="myform">
<table class="table_form" width="100%" cellspacing="0">
<tbody>
    <tr>
        <th><strong>姓名</strong></th>
        <td><input name="applyforjob[xm]" id="xm" class="input-text" type="text" size="30" value="<?php echo new_html_special_chars($applyforjob_info['xm'])?>"></td>
        <th rowspan="5"><strong>照片</strong></th>
        <td rowspan="5">
            <a href="javascript:flashupload('imgurl<?php echo $i;?>_images', '<?php echo L('upload_photo')?>','imgurl<?php echo $i;?>',preview,'1,<?php echo $thisExt?>,1','poster', '', '<?php echo $authkey?>');void(0);">
                <img src="<?php echo new_html_special_chars($applyforjob_info['zp'])?>"  width="100" height="150" onerror="this.src='<?php echo IMG_PATH;?>nopic.gif'"></a>
            <input type="hidden" id="imgurl<?php echo $i;?>" name="applyforjob[zp]" value="<?php echo new_html_special_chars($applyforjob_info['zp'])?>">
        </td>
    </tr>
    <tr>
        <th><strong>性别</strong></th>
        <td>
            <select name="applyforjob[xb]" id="xb">
                <option value="男" <?php if($applyforjob_info['xb']=='男') echo 'selected';?>>男</option>
                <option value="女" <?php if($applyforjob_info['xb']=='女') echo 'selected';?>>女</option>
            </select>
            <!-- <input name="applyforjob[xb]" id="xb" class="input-text" type="text" size="30" value="男" >-->
        </td>
    </tr>
    <tr>
        <th><strong>身份证号</strong></th>
        <td><input name="applyforjob[sfzh]" id="sfzh" class="input-text" type="text" size="30" value="<?php echo new_html_special_chars($applyforjob_info['sfzh'])?>"></td>
    </tr>
    <tr>
        <th><strong>残疾证号</strong></th>
        <td><input name="applyforjob[cjzh]" id="cjzh" class="input-text" type="text" size="30" value="<?php echo new_html_special_chars($applyforjob_info['cjzh'])?>"></td>
    </tr>
	<tr>
        <th><strong>出生日期</strong></th>
        <td><?php echo form::date('applyforjob[csrq]',$applyforjob_info['csrq'], date('Y-m-d'), 1)?></td>
    </tr>
    <tr>
        <th><strong>民族</strong></th>
        <td><input name="applyforjob[mz]" id="mz" class="input-text" type="text" size="30" value="<?php echo new_html_special_chars($applyforjob_info['mz'])?>"></td>
    </tr>
    <tr>
        <th><strong>残疾类别</strong></th>
        <td><input name="applyforjob[cjlb]" id="cjlb" class="input-text" type="text" size="30" value="<?php echo new_html_special_chars($applyforjob_info['cjlb'])?>"></td>
    </tr>
    <tr>
        <th><strong>残疾等级</strong></th>
        <td><input name="applyforjob[cjdj]" id="cjdj" class="input-text" type="text" size="30" value="<?php echo new_html_special_chars($applyforjob_info['cjdj'])?>"></td>
    </tr>
    <tr>
        <th><strong>文化程度</strong></th>
        <td><input name="applyforjob[whcd]" id="whcd" class="input-text" type="text" size="30" value="<?php echo new_html_special_chars($applyforjob_info['whcd'])?>"></td>
        <th><strong>政治面貌</strong></th>
        <td><input name="applyforjob[zzmm]" id="zzmm" class="input-text" type="text" size="30" value="<?php echo new_html_special_chars($applyforjob_info['zzmm'])?>"></td>
    </tr>
    <tr>
        <th><strong>婚姻状况</strong></th>
        <td><input name="applyforjob[hyzk]" id="hyzk" class="input-text" type="text" size="30" value="<?php echo new_html_special_chars($applyforjob_info['hyzk'])?>"></td>
        <th><strong>职称等级</strong></th>
        <td><input name="applyforjob[zcdj]" id="zcdj" class="input-text" type="text" size="30" value="<?php echo new_html_special_chars($applyforjob_info['zcdj'])?>"></td>
    </tr>
    <tr>
        <th><strong>所属辖区</strong></th>
        <td><input name="applyforjob[ssxq]" id="ssxq" class="input-text" type="text" size="30" value="<?php echo new_html_special_chars($applyforjob_info['ssxq'])?>"></td>
        <th><strong>联系电话</strong></th>
        <td><input name="applyforjob[lxdh]" id="lxdh" class="input-text" type="text" size="30" value="<?php echo new_html_special_chars($applyforjob_info['lxdh'])?>"></td>
    </tr>
    <tr>
        <th><strong>家庭住址</strong></th>
        <td colspan="3"><input name="applyforjob[jtzz]" id="jtzz" class="input-text" type="text" size="80" value="<?php echo new_html_special_chars($applyforjob_info['jtzz'])?>"></td>
    </tr>
    <tr>
        <th><strong>是否有效</strong></th>
        <td colspan="3"><input name="applyforjob[sfyx]" type="radio" value="0" <?php if($applyforjob_info['sfyx']==0) {?>checked<?php }?>>&nbsp;有效&nbsp;&nbsp;<input name="applyforjob[sfyx]" type="radio" value="1" <?php if($applyforjob_info['sfyx']==1) {?>checked<?php }?>>&nbsp;无效</td>
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