<?php 
defined('IN_ADMIN') or exit('No permission resources.');
include $this->admin_tpl('header', 'admin');
?>
<div class="pad-lr-10">
<form name="myform" action="?m=applyforjob&c=admin_applyforjob&a=listorder" method="post">
<div class="table-list">
    <table width="100%" cellspacing="0">
        <thead>
            <tr>
			<th align="center">姓名</th>
			<th align="center">性别</th>
			<th align="center">身份账号</th>
			<th align="center">残疾证号</th>
			<th align="center">联系电话</th>
			<th align="center">创建人</th>
			<th align="center">是否有效</th>
			<th align="center">操作</th>
            </tr>
        </thead>
    <tbody>
 <?php 
if(is_array($data)){
	foreach($data as $applyforjob){
?>   
	<tr>
	<td align="center"><?php echo $applyforjob['xm']?></td>
	<td align="center"><?php echo $applyforjob['xb']?></td>
	<td align="center"><?php echo $applyforjob['sfzh']?></td>
	<td align="center"><?php echo $applyforjob['cjzh']?></td>
	<td align="center"><?php echo $applyforjob['lxdh']?></td>
	<td align="center"><?php echo $applyforjob['cjr']?></td>
	<td align="center">
        <?php if ($applyforjob['sfyx']==1) {?>
            <span style="color:red;"> 无效</span>
        <?php }?>
        <?php if ($applyforjob['sfyx']==0) {?>
            有效
        <?php }?>
    </td>

	<td align="center">
        <!--<a href="?m=applyforjob&c=index&a=show&id=<?php /*echo $applyforjob['id']*/?>" title="<?php /*echo L('preview')*/?>"  target="_blank">前台预览</a>|-->
        <a href="?m=applyforjob&c=admin_applyforjob&a=delete&id=<?php echo $applyforjob['id']?>" onClick="return confirm('<?php echo L('confirm', array('message' => addslashes(new_html_special_chars($applyforjob['xm']))))?>')">删除</a>|
        <a href="javascript:edit('<?php echo $applyforjob['id']?>','<?php echo safe_replace($applyforjob['xm'])?>');void(0);">编辑</a>|
        <a href="?m=applyforjob&c=admin_cjrqzxx&id=<?php echo $applyforjob['id']?>" title="求职信息管理">求职信息管理</a>|
        <a href="?m=applyforjob&c=admin_cjrqzxx&a=add&cjrid=<?php echo $applyforjob['id']?>" title="添加求职信息">添加求职信息</a>
	</tr>
<?php 
	}
}
?>
</tbody>
    </table>
  
</div><!--
 <div id="pages"><?php /*echo $this->db->pages;*/?></div>-->
</form>
</div>
</body>
</html>
<script type="text/javascript">
function edit(id, title) {
	window.top.art.dialog({id:'edit'}).close();
	window.top.art.dialog({title:'编辑残疾人【'+title+'】的基本信息', id:'edit', iframe:'?m=applyforjob&c=admin_applyforjob&a=edit&id='+id ,width:'700px',height:'500px'}, function(){var d = window.top.art.dialog({id:'edit'}).data.iframe;
	var form = d.document.getElementById('dosubmit');form.click();return false;}, function(){window.top.art.dialog({id:'edit'}).close()});
}
</script>