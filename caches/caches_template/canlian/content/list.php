<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<div class="page-contain">
    <div class="container clearfix">
        <div class="contain-menu">
            <div class="column-title">
                <h2 class="title">网站栏目</h2>
            </div>
            <ul class="column-list">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=48b93aa2c9c7e77eb93757c1a777cbbf&action=category&catid=0&num=15&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'15',));}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <li><a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a></li>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>
        </div>
        <div class="contain-body">
            <div class="column-title">
                <h2 class="title title2"><?php echo $CATEGORYS[$catid]['catname'];?></h2>
            </div>

            <div class="article-w">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=5ab4b05e97fd14c3ed386604ee1a9399&action=lists&catid=%24catid&num=25&order=id+DESC&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 25;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
                <ul class="article-list">
                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                    <li>
                        <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"><?php echo $r['title'];?></a> <cite><?php echo date('Y-m-d',$r[inputtime]);?></cite>
                    </li>
                    <?php $n++;}unset($n); ?>

                </ul>
                <div id="pages" class="text-c"><?php echo $pages;?></div>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

            </div>
        </div>
    </div>
</div>





<?php include template("content","footer"); ?>
</body>
</html>