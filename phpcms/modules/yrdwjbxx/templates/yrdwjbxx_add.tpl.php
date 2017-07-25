<?php 
defined('IN_ADMIN') or exit('No permission resources.');
include $this->admin_tpl('header', 'admin');
$authkey = upload_key('1,'.$thisExt.',1');
?>
<div class="pad-10">
<form method="post" action="?m=yrdwjbxx&c=admin_yrdwjbxx&a=add" name="myform" id="myform">
<table class="table_form" width="100%" cellspacing="0">
<tbody>

    <tr>
        <th><strong>单位名称</strong></th>
        <td><input name="yrdwjbxx[dwmc]" id="dwmc" class="input-text" type="text" size="30" ></td>
    </tr>
    <tr>
        <th><strong>税务机关代码</strong></th>
        <td><input name="yrdwjbxx[swjgdm]" id="swjgdm" class="input-text" type="text" size="30" ></td>
    </tr>
    <tr>
        <th><strong>所属残联</strong></th>
        <td><input name="yrdwjbxx[sscl]" id="sscl" class="input-text" type="text" size="30" ></td>
    </tr>
    <tr>
        <th><strong>所属辖区</strong></th>
        <td><input name="yrdwjbxx[ssxq]" id="ssxq" class="input-text" type="text" size="30" ></td>
    </tr>
    <tr>
        <th><strong>机构类型</strong></th>
        <td><input name="yrdwjbxx[jglx]" id="jglx" class="input-text" type="text" size="30" ></td>
    </tr>
    <tr>
        <th><strong>登记注册类型</strong></th>
        <td><input name="yrdwjbxx[djzclx]" id="djzclx" class="input-text" type="text" size="30" ></td>
    </tr>
    <tr>
        <th><strong>成立日期</strong></th>
        <td><?php echo form::date('yrdwjbxx[clrq]', date('Y-m-d'), 1)?></td>
    </tr>
    <tr>
        <th><strong>法人代表</strong></th>
        <td><input name="yrdwjbxx[frdb]" id="frdb" class="input-text" type="text" size="30" ></td>
    </tr>
    <tr>
        <th><strong>联系电话</strong></th>
        <td><input name="yrdwjbxx[lxdh]" id="lxdh" class="input-text" type="text" size="30" ></td>
    </tr>
    <tr>
        <th><strong>官网网址</strong></th>
        <td><input name="yrdwjbxx[wz]" id="wz" class="input-text" type="text" size="30" ></td>
    </tr>
    <tr>
        <th><strong>单位地址</strong></th>
        <td><input name="yrdwjbxx[dwdz]" id="dwdz" class="input-text" type="text" size="50" ></td>
    </tr>

    <tr>
        <th><strong>是否有效</strong></th>
        <td><input name="yrdwjbxx[sfyx]" type="radio" value="0" checked>&nbsp;有效&nbsp;&nbsp;<input name="yrdwjbxx[sfyx]" type="radio" value="1">&nbsp;无效</td>
	</tbody>
</table>
<input type="submit" name="dosubmit" id="dosubmit" value=" <?php echo L('ok')?> " class="dialog">&nbsp;<input type="reset" class="dialog" value=" <?php echo L('clear')?> ">
</form>
</div>
</body>
</html>
