<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>

<div class="index-column-1">
    <div class="container">
        <div class="index-column1-contain clearfix">
            <div class="slider">
                <div id="slideBox" class="slideBox">
                    <div class="hd">
                        <ul><li>1</li><li>2</li><li>3</li></ul>
                    </div>
                    <div class="bd">
                        <ul>
                            <li><a href="#" target="_blank"><img src="<?php echo IMG_PATH;?>canlian/1.jpg" /></a></li>
                            <li><a href="#" target="_blank"><img src="<?php echo IMG_PATH;?>canlian/2.jpg" /></a></li>
                            <li><a href="#" target="_blank"><img src="<?php echo IMG_PATH;?>canlian/3.JPG" /></a></li>
                        </ul>
                    </div>

                    <!-- 下面是前/后按钮代码，如果不需要删除即可 -->
                    <a class="prev" href="javascript:void(0)"></a>
                    <a class="next" href="javascript:void(0)"></a>

                </div>





            </div>
            <div class="column">
                <div class="column-title">
                    <h2 class="title"><?php echo $CATEGORYS['19']['catname'];?> </h2>
                    <a href="<?php echo $CATEGORYS['19']['url'];?>" class="more">更多+</a>
                </div>
                <div class="news-list">
                    <ul>
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=9fd0ea723db3d083fbfb5153124b2aca&sql=SELECT+%2A+from+v9_news+where+status%3D99+and+catid+in%2819%29+order+by+id+DESC&num=7&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * from v9_news where status=99 and catid in(19) order by id DESC LIMIT 7");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                    <li>
                        <a href="<?php echo $r['url'];?>" title="<?php echo str_cut($r['title'],40);?>" target="_blank">
                            <span class="title"><?php echo str_cut($r['title'],40);?></span>
                            <span class="time"><?php echo date('m-d',$r[inputtime]);?></span>
                        </a>
                    </li>
                    <?php $n++;}unset($n); ?>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                    </ul>
                </div>
            </div>

            <div class="link-contain">
                <a href="">
                    <img src="<?php echo IMG_PATH;?>canlian/btna.jpg" alt=""/>
                </a>
                <a href="">
                    <img src="<?php echo IMG_PATH;?>canlian/btn1.jpg" alt=""/>
                </a>
                <a href="" style="margin-bottom: 0">
                    <img src="<?php echo IMG_PATH;?>canlian/btn2.jpg" alt=""/>
                </a>
            </div>
        </div>

    </div>
</div>
<div class="index-column-2">
    <div class="container">
        <div class="index-column2-contain clearfix">
            <div class="column" style="margin-left:0;">
                <div class="column-title">
                    <h2 class="title"><?php echo $CATEGORYS['20']['catname'];?> </h2>
                    <a href="<?php echo $CATEGORYS['20']['url'];?>" class="more">更多+</a>
                </div>
                <div class="news-list">
                    <ul>
                        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=069ffb9dd2f40944562044a41f500a49&sql=SELECT+%2A+from+v9_news+where+status%3D99+and+catid+in%2820%29+order+by+id+DESC&num=7&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * from v9_news where status=99 and catid in(20) order by id DESC LIMIT 7");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
                        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                        <li>
                            <a href="<?php echo $r['url'];?>" title="<?php echo str_cut($r['title'],40);?>" target="_blank">
                                <span class="title"><?php echo str_cut($r['title'],40);?></span>
                                <span class="time"><?php echo date('m-d',$r[inputtime]);?></span>
                            </a>
                        </li>
                        <?php $n++;}unset($n); ?>
                        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                    </ul>
                </div>
            </div>
            <div class="column">
                <div class="column-title">
                    <h2 class="title"><?php echo $CATEGORYS['11']['catname'];?> </h2>
                    <a href="<?php echo $CATEGORYS['11']['url'];?>" class="more">更多+</a>
                </div>
                <div class="news-list">
                    <ul>
                        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=a2117f120288ac28576a3e6d981ba5d9&sql=SELECT+%2A+from+v9_news+where+status%3D99+and+catid+in%2811%29+order+by+id+DESC&num=7&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * from v9_news where status=99 and catid in(11) order by id DESC LIMIT 7");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
                        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                        <li>
                            <a href="<?php echo $r['url'];?>" title="<?php echo str_cut($r['title'],40);?>" target="_blank">
                                <span class="title"><?php echo str_cut($r['title'],40);?></span>
                                <span class="time"><?php echo date('m-d',$r[inputtime]);?></span>
                            </a>
                        </li>
                        <?php $n++;}unset($n); ?>
                        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                    </ul>
                </div>
            </div>

            <div class="link-contain">
                <a href=""> <img src="<?php echo IMG_PATH;?>canlian/btn4.jpg" alt=""/></a>
                <a href=""> <img src="<?php echo IMG_PATH;?>canlian/btn5.jpg" alt=""/></a>
                <a href="" style="margin-bottom: 0"> <img src="<?php echo IMG_PATH;?>canlian/btn6.jpg" alt=""/></a>
            </div>
        </div>
    </div>
</div>
<div class="index-special">
    <div class="container">
        <img src="<?php echo IMG_PATH;?>canlian/ad.jpg" alt=""/>
    </div>
</div>
<div class="index-column-4">
    <div class="container">
        <div class="index-column4-contain clearfix">
            <div class="column" style="margin-left:0;">
                <div class="column-title">
                    <h2 class="title"><?php echo $CATEGORYS['12']['catname'];?> </h2>
                    <a href="<?php echo $CATEGORYS['12']['url'];?>" class="more">更多+</a>
                </div>
                <div class="news-list">
                    <dl class="img-list">
                        <dt><span class="img"><img src="<?php echo $CATEGORYS['12']['image'];?>" alt=""></span></dt>
                        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=decc1ed03a63eb1db7a65543fa6302ec&sql=SELECT+%2A+from+v9_news+where+status%3D99+and+catid+in%2812%29+and+posids+in%281%29+order+by+id+DESC&num=2&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * from v9_news where status=99 and catid in(12) and posids in(1) order by id DESC LIMIT 2");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
                        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                        <dd>
                            <a href="<?php echo $r['url'];?>" title="<?php echo str_cut($r['title'],40);?>" target="_blank">
                                <span class="title"><?php echo str_cut($r['title'],40);?></span>
                            </a>
                        </dd>
                        <?php $n++;}unset($n); ?>
                        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                    </dl>
                    <ul>
                        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=ba8b47ae12ffc615b1dce94517037331&sql=SELECT+%2A+from+v9_news+where+status%3D99+and+catid+in%2812%29+and+posids+in%280%29+order+by+id+DESC&num=2&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * from v9_news where status=99 and catid in(12) and posids in(0) order by id DESC LIMIT 2");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
                        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                        <li>
                            <a href="<?php echo $r['url'];?>" title="<?php echo str_cut($r['title'],40);?>" target="_blank">
                                <span class="title"><?php echo str_cut($r['title'],40);?></span>
                                <span class="time"><?php echo date('m-d',$r[inputtime]);?></span>
                            </a>
                        </li>
                        <?php $n++;}unset($n); ?>
                        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

                    </ul>
                </div>
            </div>
            <div class="column">
                <div class="column-title">
                    <h2 class="title"><?php echo $CATEGORYS['13']['catname'];?> </h2>
                    <a href="<?php echo $CATEGORYS['13']['url'];?>" class="more">更多+</a>
                </div>
                <div class="news-list">
                    <dl class="img-list">
                        <dt><span class="img"><img src="<?php echo $CATEGORYS['13']['image'];?>" alt=""></span></dt>
                        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=d07e638013a36899933bfde9cde1eed9&sql=SELECT+%2A+from+v9_news+where+status%3D99+and+catid+in%2813%29+and+posids+in%281%29+order+by+id+DESC&num=2&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * from v9_news where status=99 and catid in(13) and posids in(1) order by id DESC LIMIT 2");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
                        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                        <dd>
                            <a href="<?php echo $r['url'];?>" title="<?php echo str_cut($r['title'],40);?>" target="_blank">
                                <span class="title"><?php echo str_cut($r['title'],40);?></span>
                            </a>
                        </dd>
                        <?php $n++;}unset($n); ?>
                        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                    </dl>
                    <ul>
                        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=21e6d08ebca2b97026a5b8d1e66bdfe0&sql=SELECT+%2A+from+v9_news+where+status%3D99+and+catid+in%2813%29+and+posids+in%280%29+order+by+id+DESC&num=2&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * from v9_news where status=99 and catid in(13) and posids in(0) order by id DESC LIMIT 2");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
                        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                        <li>
                            <a href="<?php echo $r['url'];?>" title="<?php echo str_cut($r['title'],40);?>" target="_blank">
                                <span class="title"><?php echo str_cut($r['title'],40);?></span>
                                <span class="time"><?php echo date('m-d',$r[inputtime]);?></span>
                            </a>
                        </li>
                        <?php $n++;}unset($n); ?>
                        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

                    </ul>
                </div>
            </div>

            <div class="index-file-column">
                <div class="column-title">
                    <h2 class="title title2">职业鉴定</h2>
                </div>
                <div class="file-list">
                    <a href="">
                        <span class="title">职业鉴定申请书</span>
                        <span class="down">下载</span>
                    </a>
                    <a href="">
                        <span class="title">职业鉴定表</span>
                        <span class="down">下载</span>
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="index-column-4">
    <div class="container">
        <div class="index-column4-contain clearfix">
            <div class="column" style="margin-left:0;">
                <div class="column-title">
                    <h2 class="title"><?php echo $CATEGORYS['14']['catname'];?> </h2>
                    <a href="<?php echo $CATEGORYS['14']['url'];?>" class="more">更多+</a>
                </div>
                <div class="news-list">
                    <dl class="img-list">
                        <dt><span class="img"><img src="<?php echo $CATEGORYS['14']['image'];?>" alt=""></span></dt>
                        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=85a9098b98e6b4b24baf9fe57a060e86&sql=SELECT+%2A+from+v9_news+where+status%3D99+and+catid+in%2814%29+and+posids+in%281%29+order+by+id+DESC&num=2&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * from v9_news where status=99 and catid in(14) and posids in(1) order by id DESC LIMIT 2");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
                        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                        <dd>
                            <a href="<?php echo $r['url'];?>" title="<?php echo str_cut($r['title'],40);?>" target="_blank">
                                <span class="title"><?php echo str_cut($r['title'],40);?></span>
                            </a>
                        </dd>
                        <?php $n++;}unset($n); ?>
                        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                    </dl>
                    <ul>
                        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=f772a71929edf01b22e507b12e747f80&sql=SELECT+%2A+from+v9_news+where+status%3D99+and+catid+in%2814%29+and+posids+in%280%29+order+by+id+DESC&num=2&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * from v9_news where status=99 and catid in(14) and posids in(0) order by id DESC LIMIT 2");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
                        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                        <li>
                            <a href="<?php echo $r['url'];?>" title="<?php echo str_cut($r['title'],40);?>" target="_blank">
                                <span class="title"><?php echo str_cut($r['title'],40);?></span>
                                <span class="time"><?php echo date('m-d',$r[inputtime]);?></span>
                            </a>
                        </li>
                        <?php $n++;}unset($n); ?>
                        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

                    </ul>
                </div>
            </div>
            <div class="column">
                <div class="column-title">
                    <h2 class="title"><?php echo $CATEGORYS['15']['catname'];?> </h2>
                    <a href="<?php echo $CATEGORYS['15']['url'];?>" class="more">更多+</a>
                </div>
                <div class="news-list">
                    <dl class="img-list">
                        <dt><span class="img"><img src="<?php echo $CATEGORYS['15']['image'];?>" alt=""></span></dt>
                        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=559971f7389f485ae07461b250872033&sql=SELECT+%2A+from+v9_news+where+status%3D99+and+catid+in%2815%29+and+posids+in%281%29+order+by+id+DESC&num=3&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * from v9_news where status=99 and catid in(15) and posids in(1) order by id DESC LIMIT 3");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
                        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                        <dd>
                            <a href="<?php echo $r['url'];?>" title="<?php echo str_cut($r['title'],40);?>" target="_blank">
                                <span class="title"><?php echo str_cut($r['title'],40);?></span>
                            </a>
                        </dd>
                        <?php $n++;}unset($n); ?>
                        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                    </dl>
                    <ul>
                        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=f1c729c6518493be4387f04ac26cc223&sql=SELECT+%2A+from+v9_news+where+status%3D99+and+catid+in%2815%29+and+posids+in%280%29+order+by+id+DESC&num=2&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * from v9_news where status=99 and catid in(15) and posids in(0) order by id DESC LIMIT 2");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
                        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                        <li>
                            <a href="<?php echo $r['url'];?>" title="<?php echo str_cut($r['title'],40);?>" target="_blank">
                                <span class="title"><?php echo str_cut($r['title'],40);?></span>
                                <span class="time"><?php echo date('m-d',$r[inputtime]);?></span>
                            </a>
                        </li>
                        <?php $n++;}unset($n); ?>
                        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

                    </ul>
                </div>
            </div>

            <div class="index-file-column">
                <div class="column-title">
                    <h2 class="title title2">资料下载</h2>
                </div>
                <div class="file-list">
                    <a href="">
                        <span class="title">求职申请表</span>
                        <span class="down">下载</span>
                    </a>
                    <a href="">
                        <span class="title">招聘申请表</span>
                        <span class="down">下载</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="index-column-5">
    <div class="container">
        <div class="index-column5-contain">
            <div class="column-title">
                <h2 class="title">最新求职信息</h2><!--
                <a href="" class="more">更多+</a>-->
            </div>
            <div class="table-list clearfix">
                <dl>
                    <dt>
                        <span class="name">姓名</span>
                        <span class="sex">性别</span>
                        <span class="wenhua">文化程度</span>
                        <span class="leixing">残疾类别</span>
                        <span class="zhiwei">欲求职位</span>
                        <span class="time">创建时间</span>
                    </dt>
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=bbf86dbce48abc30033c95cbe7e44b73&sql=select+%2A+from+v9_cjrjbxx%2Cv9_cjrqzxx++where+v9_cjrjbxx.id%3Dv9_cjrqzxx.cjrid+order+by+v9_cjrqzxx.xgsj+DESC&num=10&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select * from v9_cjrjbxx,v9_cjrqzxx  where v9_cjrjbxx.id=v9_cjrqzxx.cjrid order by v9_cjrqzxx.xgsj DESC LIMIT 10");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
                    <?php
                  foreach ($data as $k=>$v){
                        $data[$k]['xm'] = substr_cut($data[$k]['xm']);
                    }
                    function substr_cut($user_name){


                            //获取字符串长度
                            $strlen = mb_strlen($user_name, 'utf-8');
                            //如果字符创长度小于2，不做任何处理
                            if($strlen<2){
                                return $user_name;
                            }else{
                                //mb_substr — 获取字符串的部分
                                $firstStr = mb_substr($user_name, 0, 1, 'utf-8');
                                $lastStr = mb_substr($user_name, -1, 1, 'utf-8');
                                //str_repeat — 重复一个字符串
                                return $strlen == 2 ? $firstStr . str_repeat('*', mb_strlen($user_name, 'utf-8') - 1) : $firstStr . str_repeat("*", $strlen - 2) . $lastStr;
                            }
                    }
                   ?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                    <dd>
                        <a href="?m=applyforjob&c=index&a=show&id=<?php echo $r['id']?>&cjrid=<?php echo $r['cjrid']?>">
                            <span class="name"><?php echo $r['xm'];?></span>
                            <span class="sex"><?php echo $r['xb'];?></span>
                            <span class="wenhua"><?php echo $r['whcd'];?></span>
                            <span class="leixing"><?php echo $r['cjlb'];?></span>
                            <span class="zhiwei"><?php echo $r['qzgw'];?></span>
                            <span class="time"><?php echo date('m-d H:m',$r['xgsj']);?></span>
                        </a>
                    </dd>

                    <?php $n++;}unset($n); ?>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </dl>
            </div>
        </div>

    </div>
</div>

<!--
<div class="index-column-5">
    <div class="container">
        <div class="index-column5-contain">
            <div class="column-title">
                <h2 class="title">最新招聘信息</h2>
                <a href="" class="more">更多+</a>
            </div>
            <div class="table-list clearfix">
                <dl>
                    <dt>
                        <span class="dwmc">单位名称</span>
                        <span class="zpgw">招聘岗位</span>
                        <span class="zprs">招聘人数</span>
                        <span class="gzdy">工资待遇</span>
                        <span class="ly">来源</span>
                        <span class="fbsj">发布时间</span>
                    </dt>
                    <dd>
                        <a href="">
                            <span class="dwmc">武汉航天远景科技有限公司</span>
                            <span class="zpgw">数据作业员</span>
                            <span class="zprs">10人</span>
                            <span class="gzdy">6000</span>
                            <span class="ly">91job</span>
                            <span class="fbsj">2017-7-16 20:54</span>
                        </a>
                    </dd>
                    <dd>
                        <a href="">
                            <span class="dwmc">河南进出口物流有限公司</span>
                            <span class="zpgw">跟单员</span>
                            <span class="zprs">5人</span>
                            <span class="gzdy">4000</span>
                            <span class="ly">智联</span>
                            <span class="fbsj">2017-6-2 19:21</span>
                        </a>
                    </dd>
                    <dd>
                        <a href="">
                            <span class="dwmc">武汉航天远景科技有限公司</span>
                            <span class="zpgw">数据作业员</span>
                            <span class="zprs">10人</span>
                            <span class="gzdy">6000</span>
                            <span class="ly">91job</span>
                            <span class="fbsj">2017-7-16 20:54</span>
                        </a>
                    </dd>
                    <dd>
                        <a href="">
                            <span class="dwmc">河南进出口物流有限公司</span>
                            <span class="zpgw">跟单员</span>
                            <span class="zprs">5人</span>
                            <span class="gzdy">4000</span>
                            <span class="ly">智联</span>
                            <span class="fbsj">2017-6-2 19:21</span>
                        </a>
                    </dd>
                    <dd>
                        <a href="">
                            <span class="dwmc">武汉航天远景科技有限公司</span>
                            <span class="zpgw">数据作业员</span>
                            <span class="zprs">10人</span>
                            <span class="gzdy">6000</span>
                            <span class="ly">91job</span>
                            <span class="fbsj">2017-7-16 20:54</span>
                        </a>
                    </dd>
                    <dd>
                        <a href="">
                            <span class="dwmc">河南进出口物流有限公司</span>
                            <span class="zpgw">跟单员</span>
                            <span class="zprs">5人</span>
                            <span class="gzdy">4000</span>
                            <span class="ly">智联</span>
                            <span class="fbsj">2017-6-2 19:21</span>
                        </a>
                    </dd>
                    <dd>
                        <a href="">
                            <span class="dwmc">武汉航天远景科技有限公司</span>
                            <span class="zpgw">数据作业员</span>
                            <span class="zprs">10人</span>
                            <span class="gzdy">6000</span>
                            <span class="ly">91job</span>
                            <span class="fbsj">2017-7-16 20:54</span>
                        </a>
                    </dd>
                    <dd>
                        <a href="">
                            <span class="dwmc">河南进出口物流有限公司</span>
                            <span class="zpgw">跟单员</span>
                            <span class="zprs">5人</span>
                            <span class="gzdy">4000</span>
                            <span class="ly">智联</span>
                            <span class="fbsj">2017-6-2 19:21</span>
                        </a>
                    </dd>

                </dl>
            </div>
        </div>

    </div>
</div>

-->

<?php include template("content","footer"); ?>
</body>
<script id="jsID" type="text/javascript">

    jQuery(".slideBox").slide({mainCell:".bd ul",effect:"fold",autoPlay:true});
</script>

</html>

