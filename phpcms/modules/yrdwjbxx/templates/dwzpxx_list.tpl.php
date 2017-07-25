<?php 
defined('IN_ADMIN') or exit('No permission resources.');
include $this->admin_tpl('header', 'admin');
?>
<div style="padding-left:20px;margin-bottom: 10px;font-size: 14px;">
    单位名称：【<?php echo $yrdwjbxx_data['dwmc']?>】,法人代表：【<?php echo $yrdwjbxx_data['frdb']?>】,联系电话：【<?php echo $yrdwjbxx_data['lxdh']?>】的求职信息管理
</div>

<div class="pad-lr-10">
<form name="myform" action="?m=yrdwjbxx&c=admin_dwzpxx&a=listorder" method="post">
<div class="table-list">
    <table width="100%" cellspacing="0">
        <thead>
            <tr>
			<th align="center" width="10%">单位名称</th>
			<th align="center" width="15%">招聘岗位</th>
			<th align="center" width="30%">任职要求</th>
			<th align="center" width="5%">招聘人数</th>
			<th align="center" width="5%">工资</th>
			<th align="center" width="20%">福利</th>
			<th align="center" width="5%">是否有效</th>
			<th align="center" width="10%">操作</th>
            </tr>
        </thead>
    <tbody>
 <?php 
if(is_array($dwzpxx_data)){
	foreach($dwzpxx_data as $data){
?>   
	<tr>
	<td align="center"><?php echo $data['dwmc']?></td>
	<td align="center"><?php echo $data['zpgw']?></td>
	<td align="center"><?php echo $data['rzyq']?></td>
	<td align="center"><?php echo $data['zprs']?></td>
	<td align="center"><?php echo $data['gz']?></td>
	<td align="center"><?php echo $data['fl']?></td>
	<td align="center">
        <?php if ($data['sfyx']==1) {?>
            <span style="color:red;"> 无效</span>
        <?php }?>
        <?php if ($data['sfyx']==0) {?>
            有效
        <?php }?>
    </td>
	<td align="center">
        <a href="?m=yrdwjbxx&c=index&a=show&id=<?php echo $data['id']?>&yrdwid=<?php echo $data['yrdwid']?>" title="<?php echo L('preview')?>"  target="_blank">前台预览</a>|
        <a href="?m=yrdwjbxx&c=admin_dwzpxx&a=delete&id=<?php echo $data['id']?>&yrdwid=<?php echo $data['yrdwid']?>" onClick="return confirm('<?php echo L('confirm', array('message' => addslashes(new_html_special_chars($data['zpgw']))))?>')">删除</a>|
        <a href="javascript:edit('<?php echo $data['id']?>','<?php echo safe_replace($data['dwmc'])?>的招聘信息');void(0);">编辑</a>
	</tr>

<?php 
	}
}
?>
</tbody>
    </table>
    <p style="text-align: right;margin-top:20px;">
        <input type="reset" value="返回招聘单位基本信息管理列表" class="button" onclick="history.go(-1)">
    </p>

</form>
</div>
</body>
</html>
<script type="text/javascript">
function edit(id, title) {
	window.top.art.dialog({id:'edit'}).close();
	window.top.art.dialog({title:'编辑招聘单位【'+title+'】的求职信息', id:'edit', iframe:'?m=yrdwjbxx&c=admin_dwzpxx&a=edit&id='+id ,width:'600px',height:'450px'}, function(){var d = window.top.art.dialog({id:'edit'}).data.iframe;
	var form = d.document.getElementById('dosubmit');form.click();return false;}, function(){window.top.art.dialog({id:'edit'}).close()});
}
</script>