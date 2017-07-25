<?php 
defined('IN_ADMIN') or exit('No permission resources.');
include $this->admin_tpl('header', 'admin');
?>
<div class="pad-lr-10">
<form name="myform" action="?m=yrdwjbxx&c=admin_yrdwjbxx&a=listorder" method="post">
<div class="table-list">
    <table width="100%" cellspacing="0">
        <thead>
            <tr>
			<th align="center">单位名称</th>
			<th align="center">所属残联</th>
			<th align="center">所属辖区</th>
			<th align="center">法人代表</th>
			<th align="center">联系电话</th>
			<th align="center">创建人</th>
			<th align="center">是否有效</th>
			<th align="center">操作</th>
            </tr>
        </thead>
    <tbody>
 <?php 
if(is_array($data)){
	foreach($data as $yrdwjbxx){
?>   
	<tr>
	<td align="center"><?php echo $yrdwjbxx['dwmc']?></td>
	<td align="center"><?php echo $yrdwjbxx['sscl']?></td>
	<td align="center"><?php echo $yrdwjbxx['ssxq']?></td>
	<td align="center"><?php echo $yrdwjbxx['frdb']?></td>
	<td align="center"><?php echo $yrdwjbxx['lxdh']?></td>
	<td align="center"><?php echo $yrdwjbxx['cjr']?></td>
	<td align="center">
        <?php if ($yrdwjbxx['sfyx']==1) {?>
            <span style="color:red;"> 无效</span>
        <?php }?>
        <?php if ($yrdwjbxx['sfyx']==0) {?>
            有效
        <?php }?>
    </td>

	<td align="center">
        <!--<a href="?m=yrdwjbxx&c=index&a=show&id=<?php /*echo $yrdwjbxx['id']*/?>" title="<?php /*echo L('preview')*/?>"  target="_blank">前台预览</a>|-->
        <a href="?m=yrdwjbxx&c=admin_yrdwjbxx&a=delete&id=<?php echo $yrdwjbxx['id']?>" onClick="return confirm('<?php echo L('confirm', array('message' => addslashes(new_html_special_chars($yrdwjbxx['dwmc']))))?>')">删除</a>|
        <a href="javascript:edit('<?php echo $yrdwjbxx['id']?>','<?php echo safe_replace($yrdwjbxx['dwmc'])?>');void(0);">编辑</a>|
        <a href="?m=yrdwjbxx&c=admin_dwzpxx&id=<?php echo $yrdwjbxx['id']?>" title="招聘信息管理">招聘信息管理</a>|
        <a href="?m=yrdwjbxx&c=admin_dwzpxx&a=add&yrdwid=<?php echo $yrdwjbxx['id']?>" title="添加招聘信息">添加招聘信息</a>
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
	window.top.art.dialog({title:'编辑用人单位【'+title+'】的基本信息', id:'edit', iframe:'?m=yrdwjbxx&c=admin_yrdwjbxx&a=edit&id='+id ,width:'500px',height:'440px'}, function(){var d = window.top.art.dialog({id:'edit'}).data.iframe;
	var form = d.document.getElementById('dosubmit');form.click();return false;}, function(){window.top.art.dialog({id:'edit'}).close()});
}
</script>