<?php 
defined('IN_ADMIN') or exit('No permission resources.');
include $this->admin_tpl('header', 'admin');
$authkey = upload_key('1,'.$thisExt.',1');
?>
<div class="pad-10">
<form method="post" action="?m=applyforjob&c=admin_cjrqzxx&a=edit&id=<?php echo $qzxx['id']?>" name="myform" id="myform">
<table class="table_form" width="100%" cellspacing="0">
<tbody>
	<tr>
		<th width="80"><strong>姓名</strong></th>
		<td><?php echo $jbxx['xm']?></td>
        <th><strong>性别</strong></th>
        <td><?php echo $jbxx['xb']?></td>
    </tr>
    <tr>
        <th><strong>身份证号</strong></th>
        <td><?php echo $jbxx['sfzh']?></td>
        <th><strong>残疾证号</strong></th>
        <td><?php echo $jbxx['cjzh']?></td>
    </tr>
	<tr>
        <th><strong>求职岗位</strong></th>
        <td colspan="3"><input name="qzxx[qzgw]" id="qzgw" class="input-text" type="text" size="30"  value="<?php echo $qzxx['qzgw']?>"></td>

    </tr>
    <tr>
        <th><strong>工作经验</strong></th>
        <td colspan="3"><textarea name="qzxx[gzjy]" id="gzjy" class="input-textarea" cols="45" rows="4"><?php echo $qzxx['gzjy']?></textarea></td>
    </tr>
    <tr>
        <th><strong>教育经历</strong></th>
        <td colspan="3"><textarea name="qzxx[jyjl]" id="jyjl" class="input-textarea" cols="45" rows="4"><?php echo $qzxx['jyjl']?></textarea></td>
    </tr>
    <tr>
        <th><strong>专业技能</strong></th>
        <td colspan="3"><textarea name="qzxx[zyjn]" id="zyjn" class="input-textarea" cols="45" rows="4"><?php echo $qzxx['zyjn']?></textarea></td>
    </tr>
    <tr>
        <th><strong>兴趣爱好</strong></th>
        <td colspan="3"><textarea name="$qzxx[xqah]" id="zyjn" class="input-textarea" cols="45" rows="4"><?php echo $qzxx['xqah']?></textarea></td>
    </tr>
    <tr>
        <th><strong>是否有效</strong></th>
        <td colspan="3"><input name="qzxx[sfyx]" type="radio" value="0" <?php if($qzxx['sfyx']==0) {?>checked<?php }?>>&nbsp;有效&nbsp;&nbsp;<input name="qzxx[sfyx]" type="radio" value="1" <?php if($qzxx['sfyx']==1) {?>checked<?php }?>>&nbsp;无效</td>

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