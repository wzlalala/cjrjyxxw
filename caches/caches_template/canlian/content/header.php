<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
    <meta name="keywords" content="<?php echo $SEO['keyword'];?>">
    <meta name="description" content="<?php echo $SEO['description'];?>">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>canlian/reset.css"/>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>canlian/style.css"/>
    <script src="<?php echo JS_PATH;?>canlian/jquery1.42.min.js"></script>
    <script src="<?php echo JS_PATH;?>canlian/jquery.SuperSlide.2.1.1.js"></script>
</head>
<body>
<div class="head"></div>
<div class="menu">
    <div class="container">
        <ul>
            <li><a href="<?php echo siteurl($siteid);?>">网站首页</a></li>
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=48b93aa2c9c7e77eb93757c1a777cbbf&action=category&catid=0&num=15&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'15',));}?>
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
             <li><a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a></li>
            <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </ul>
    </div>
</div>
<div class="neck">
    <div class="container">
        <div class="neck-container">
            <div class="welcome"> 您好，欢迎来到郑州市残疾人劳动就业服务中心官方站</div>
            <div class="time"><iframe name="weather_inc" src="http://i.tianqi.com/index.php?c=code&id=1" width="330" height="25" frameborder="0" marginwidth="0" marginheight="0" scrolling="no"></iframe></div>
            <div class="search">
                <form action="<?php echo APP_PATH;?>index.php" method="get" target="_blank">
                    <input type="hidden" name="m" value="search"/>
                    <input type="hidden" name="c" value="index"/>
                    <input type="hidden" name="a" value="init"/>
                    <input type="hidden" name="typeid" value="<?php echo $typeid;?>" id="typeid"/>
                    <input type="hidden" name="siteid" value="<?php echo $siteid;?>" id="siteid"/>
                    <input type="submit" value="搜 索" class="search-btn" />
                    <input type="text" class="search-text" name="q" id="q"/>
                </form>
            </div>
        </div>

    </div>
</div>