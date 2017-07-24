<?php 
defined('IN_ADMIN') or exit('No permission resources.');
include $this->admin_tpl('header', 'admin');
?>
<div style="padding-left:20px;margin-bottom: 10px;font-size: 14px;">
    姓名：【<?php echo $jbxx_data['xm']?>】,身份证号：【<?php echo $jbxx_data['sfzh']?>】,联系电话：【<?php echo $jbxx_data['lxdh']?>】的求职信息管理
</div>

<div class="pad-lr-10">
<form name="myform" action="?m=applyforjob&c=admin_applyforjob&a=listorder" method="post">
<div class="table-list">
    <table width="100%" cellspacing="0">
        <thead>
            <tr>
			<th align="center">姓名</th>
			<th align="center">求职岗位</th>
			<th align="center">教育经历</th>
			<th align="center">工作经验</th>
			<th align="center">专业技能</th>
			<th align="center">兴趣爱好</th>
			<th align="center">是否有效</th>
			<th align="center">创建时间</th>
			<th align="center">操作</th>
            </tr>
        </thead>
    <tbody>
 <?php 
if(is_array($qzxx_data)){
	foreach($qzxx_data as $data){
?>   
	<tr>
	<td align="center"><?php echo $data['xm']?></td>
	<td align="center"><?php echo $data['qzgw']?></td>
	<td align="center" width="20%"><?php echo $data['jyjl']?></td>
	<td align="center" width="40%"><?php echo $data['gzjy']?></td>
	<td align="center"><?php echo $data['zyjn']?></td>
	<td align="center"><?php echo $data['xqah']?></td>
	<td align="center">
        <?php if ($data['sfyx']==1) {?>
            <span style="color:red;"> 无效</span>
        <?php }?>
        <?php if ($data['sfyx']==0) {?>
            有效
        <?php }?>
    </td>
        <td align="center">
            <?php echo format::date($data['cjsj'],1);?>
            </td>
	<td align="center">
        <a href="?m=applyforjob&c=index&a=show&id=<?php echo $data['id']?>&cjrid=<?php echo $data['cjrid']?>" title="<?php echo L('preview')?>"  target="_blank">前台预览</a>|
        <a href="?m=applyforjob&c=admin_cjrqzxx&a=delete&id=<?php echo $data['id']?>&cjrid=<?php echo $data['cjrid']?>" onClick="return confirm('<?php echo L('confirm', array('message' => addslashes(new_html_special_chars($data['xm']))))?>')">删除</a>|
        <a href="javascript:edit('<?php echo $data['id']?>','<?php echo safe_replace($data['xm'])?>的求职信息');void(0);">编辑</a>
	</tr>

<?php 
	}
}
?>
</tbody>
    </table>
    <p style="text-align: right;margin-top:20px;">
        <input type="reset" value="返回残疾人基本信息管理列表" class="button" onclick="history.go(-1)">
    </p>

</form>
</div>
</body>
</html>
<script type="text/javascript">
function edit(id, title) {
	window.top.art.dialog({id:'edit'}).close();
	window.top.art.dialog({title:'编辑残疾人【'+title+'】的求职信息', id:'edit', iframe:'?m=applyforjob&c=admin_cjrqzxx&a=edit&id='+id ,width:'800px',height:'500px'}, function(){var d = window.top.art.dialog({id:'edit'}).data.iframe;
	var form = d.document.getElementById('dosubmit');form.click();return false;}, function(){window.top.art.dialog({id:'edit'}).close()});
}
</script>