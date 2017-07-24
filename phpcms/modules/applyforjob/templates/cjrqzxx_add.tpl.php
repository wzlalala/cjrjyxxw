<?php 
defined('IN_ADMIN') or exit('No permission resources.');
include $this->admin_tpl('header', 'admin');
$authkey = upload_key('1,'.$thisExt.',1');
?>
<div class="pad-10">
<form method="post" action="?m=applyforjob&c=admin_cjrqzxx&a=add&cjrid=<?php echo $jbxx_data['id']?>" name="myform" id="myform">
<table class="table_form" width="100%" cellspacing="0">
<tbody>
	<tr>
		<th width="80"><strong>姓名</strong></th>
		<td><?php echo $jbxx_data['xm']?></td>
        <th><strong>性别</strong></th>
        <td><?php echo $jbxx_data['xb']?></td>
    </tr>
    <tr>
        <th><strong>身份证号</strong></th>
        <td><?php echo $jbxx_data['sfzh']?></td>
        <th><strong>残疾证号</strong></th>
        <td><?php echo $jbxx_data['cjzh']?></td>
    </tr>
	<tr>
        <th><strong>求职岗位</strong></th>
        <td colspan="3"><input name="jbxx[qzgw]" id="qzgw" class="input-text" type="text" size="30" ></td>

    </tr>
    <tr>
        <th><strong>工作经验</strong></th>
        <td><textarea name="jbxx[gzjy]" id="gzjy" class="input-textarea" cols="45" rows="4"></textarea></td>
        <th><strong>教育经历</strong></th>
        <td><textarea name="jbxx[jyjl]" id="jyjl" class="input-textarea" cols="45" rows="4"></textarea></td>
    </tr>
    <tr>
        <th><strong>专业技能</strong></th>
        <td><textarea name="jbxx[zyjn]" id="zyjn" class="input-textarea" cols="45" rows="4"></textarea></td>
        <th><strong>兴趣爱好</strong></th>
        <td><textarea name="jbxx[xqah]" id="zyjn" class="input-textarea" cols="45" rows="4"></textarea></td>
    </tr>
    <tr>
        <th><strong>是否有效</strong></th>
        <td colspan="3"><input name="jbxx[sfyx]" type="radio" value="0" checked>&nbsp;有效&nbsp;&nbsp;<input name="jbxx[sfyx]" type="radio" value="1">&nbsp;无效</td>
	</tbody>
</table>
    <div class="bk15" style="margin-left:10px; line-height:30px;height:36px;text-align: center;">
        <input type="submit" name="dosubmit" id="dosubmit" value="提交" class="button">
        &nbsp;<input type="reset" value="返回" class="button" onclick="history.go(-1)">
    </div>
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