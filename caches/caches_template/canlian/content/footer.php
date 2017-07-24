<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>
<div class="flink">
    <div class="container">
        <div class="column-title">
            <h2 class="title title2">友情链接</h2>
        </div>
        <div class="flink-con">
            <!--<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"link\" data=\"op=link&tag_md5=3694069f497c2c5583945154152b40bf&action=type_list&typeid=4&siteid=1&linktype=1&order=listorder+DESC&num=10&return=dat\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$link_tag = pc_base::load_app_class("link_tag", "link");if (method_exists($link_tag, 'type_list')) {$dat = $link_tag->type_list(array('typeid'=>'4','siteid'=>'1','linktype'=>'1','order'=>'listorder DESC','limit'=>'10',));}?>-->
            <!--<?php $n=1;if(is_array($dat)) foreach($dat AS $v) { ?>-->
            <!--<a href="<?php echo $v['url'];?>" target="_blank"><?php echo $v['name'];?></a>-->
            <!--<?php $n++;}unset($n); ?>-->
            <!--<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>-->

            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"link\" data=\"op=link&tag_md5=7a8680490a2e5f3732866eb962c2ed58&action=lists&typeid=%24type_id&siteid=%24siteid&linktype=0&order=desc&num=10&return=dat\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$link_tag = pc_base::load_app_class("link_tag", "link");if (method_exists($link_tag, 'lists')) {$dat = $link_tag->lists(array('typeid'=>$type_id,'siteid'=>$siteid,'linktype'=>'0','order'=>'desc','limit'=>'10',));}?>
                <?php $n=1;if(is_array($dat)) foreach($dat AS $v) { ?>
                <a href="<?php echo $v['url'];?>" title="<?php echo $v['name'];?>"  target="_blank"><?php echo $v['name'];?></a>
                <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>



        </div>



    </div>
</div>
<div class="foot">
    <div class="container">
        <p>版权所有：郑州市残疾人劳动就业服务中心 备案号：豫ICP备10001745号-4</p>
        <p>河南省郑州市中原区棉纺路1号附3号</p>
    </div>
</div>