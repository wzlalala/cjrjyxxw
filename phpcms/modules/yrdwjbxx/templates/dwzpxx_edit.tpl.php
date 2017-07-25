<?php 
defined('IN_ADMIN') or exit('No permission resources.');
include $this->admin_tpl('header', 'admin');
$authkey = upload_key('1,'.$thisExt.',1');
?>
<div class="pad-10">
<form method="post" action="?m=yrdwjbxx&c=admin_dwzpxx&a=edit&id=<?php echo $_GET['id']?>" name="myform" id="myform">
<table class="table_form" width="100%" cellspacing="0">
    <tbody>

    <tr>
        <th><strong>单位名称</strong></th>
        <td><?php echo $yrdwjbxx['dwmc']?></td>
    </tr>
    <tr>
        <th><strong>招聘岗位</strong></th>
        <td><input name="dwzpxx[zpgw]" id="zpgw" class="input-text" type="text" size="30" value="<?php echo new_html_special_chars($dwzpxx['zpgw'])?>"></td>
    </tr>
    <tr>
        <th><strong>任职要求</strong></th>
        <td><textarea name="dwzpxx[rzyq]" id="rzyq" class="input-textarea" cols="45" rows="4"><?php echo new_html_special_chars($dwzpxx['rzyq'])?></textarea></td>
    </tr>
    <tr>
        <th><strong>招聘人数</strong></th>
        <td><input name="dwzpxx[zprs]" id="zprs" class="input-text" type="text" size="30" value="<?php echo new_html_special_chars($dwzpxx['zprs'])?>"></td>
    </tr>
    <tr>
        <th><strong>工资</strong></th>
        <td><input name="dwzpxx[gz]" id="gz" class="input-text" type="text" size="30" value="<?php echo new_html_special_chars($dwzpxx['gz'])?>"></td>
    </tr>
    <tr>
        <th><strong>福利</strong></th>
        <td><textarea name="dwzpxx[fl]" id="fl" class="input-textarea" cols="45" rows="4"><?php echo new_html_special_chars($dwzpxx['fl'])?></textarea></td>
    </tr>

    <tr>
        <th><strong>是否有效</strong></th>
        <td colspan="3"><input name="dwzpxx[sfyx]" type="radio" value="0" <?php if($dwzpxx['sfyx']==0) {?>checked<?php }?>>&nbsp;有效&nbsp;&nbsp;<input name="dwzpxx[sfyx]" type="radio" value="1" <?php if($dwzpxx['sfyx']==1) {?>checked<?php }?>>&nbsp;无效</td>
    </tbody>
</table>
    <input type="submit" name="dosubmit" id="dosubmit" value=" <?php echo L('ok')?> " class="dialog">&nbsp;<input type="reset" class="dialog" value=" <?php echo L('clear')?> ">
</form>
</div>
</body>
</html>
