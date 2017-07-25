<?php 
defined('IN_ADMIN') or exit('No permission resources.');
include $this->admin_tpl('header', 'admin');
$authkey = upload_key('1,'.$thisExt.',1');
?>
<div class="pad-10">
<form method="post" action="?m=yrdwjbxx&c=admin_dwzpxx&a=add&yrdwid=<?php echo $yrdwjbxx_data['id']?>" name="myform" id="myform">
<table class="table_form" width="100%" cellspacing="0">
<tbody>

    <tr>
        <th><strong>单位名称</strong></th>
        <td><?php echo $yrdwjbxx_data['dwmc']?></td>
    </tr>
    <tr>
        <th><strong>招聘岗位</strong></th>
        <td><input name="dwzpxx[zpgw]" id="zpgw" class="input-text" type="text" size="30" ></td>
    </tr>
    <tr>
        <th><strong>任职要求</strong></th>
        <td><textarea name="dwzpxx[rzyq]" id="rzyq" class="input-textarea" cols="45" rows="4"></textarea></td>
    </tr>
    <tr>
        <th><strong>招聘人数</strong></th>
        <td><input name="dwzpxx[zprs]" id="zprs" class="input-text" type="text" size="30" ></td>
    </tr>
    <tr>
        <th><strong>工资</strong></th>
        <td><input name="dwzpxx[gz]" id="gz" class="input-text" type="text" size="30" ></td>
    </tr>
    <tr>
        <th><strong>福利</strong></th>
        <td><textarea name="dwzpxx[fl]" id="fl" class="input-textarea" cols="45" rows="4"></textarea></td>
    </tr>

    <tr>
        <th><strong>是否有效</strong></th>
        <td><input name="dwzpxx[sfyx]" type="radio" value="0" checked>&nbsp;有效&nbsp;&nbsp;<input name="dwzpxx[sfyx]" type="radio" value="1">&nbsp;无效</td>
	</tbody>
</table>
    <div class="bk15" style="margin-left:10px; line-height:30px;height:36px;text-align: center;">
        <input type="submit" name="dosubmit" value="<?php echo L('ok')?>" class="button" >&nbsp;
        <input type="reset" value="<?php echo L('clear')?>" class="button">
    </div>
</form>
</div>
</body>
</html>
