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
                <h2 class="title title2">招聘信息</h2>
            </div>
            <div class="zp-content">
                <table class="applyforjob-table" width="100%" cellspacing="0" border="0">
                    <tbody>
                    <tr>

                        <td width="110"><strong>单位名称</strong></td>
                        <td><?php echo $yrdwjbxx['dwmc']?></td>
                    </tr>
                    <tr>
                        <td><strong>所属残联</strong></td>
                        <td><?php echo $yrdwjbxx['sscl']?></td>
                    </tr>
                    <tr>
                        <td><strong>所属辖区</strong></td>
                        <td><?php echo $yrdwjbxx['ssxq']?></td>
                    </tr>
                    <tr>
                        <td><strong>机构类型</strong></td>
                        <td><?php echo $yrdwjbxx['jglx']?></td>
                    </tr>
                    <tr>
                        <td><strong>登记注册类型</strong></td>
                        <td><?php echo $yrdwjbxx['djzclx']?></td>
                    </tr>
                    <tr>
                        <td><strong>成立日期</strong></td>
                        <td><?php echo $yrdwjbxx['clrq']?></td>
                    </tr>
                    <tr>
                        <td><strong>法人代表</strong></td>
                        <td><?php echo $yrdwjbxx['frdb']?></td>
                    </tr>
                    <tr>
                        <td><strong>联系电话</strong></td>
                        <td><?php echo $yrdwjbxx['lxdh']?></td>
                    </tr>
                    <tr>
                        <td><strong>官网网址</strong></td>
                        <td><?php echo $yrdwjbxx['wz']?></td>
                    </tr>
                    <tr>
                        <td><strong>单位地址</strong></td>
                        <td><?php echo $yrdwjbxx['dwdz']?></td>
                    </tr>
                    </tbody>
                </table>
                <table class="qzxx-table" width="100%">
                    <caption>招聘信息</caption>
                    <tr>
                        <td width="110"><strong>招聘岗位</strong></td>
                        <td><?php echo $dwzpxx['zpgw']?></td>
                    </tr>
                    <tr>
                        <td><strong>任职要求</strong></td>
                        <td><?php echo $dwzpxx['rzyq']?></td>
                    </tr>
                    <tr>
                        <td><strong>招聘人数</strong></td>
                        <td><?php echo $dwzpxx['zprs']?></td>
                    </tr>
                    <tr>
                        <td><strong>工资</strong></td>
                        <td><?php echo $dwzpxx['gz']?></td>
                    </tr>
                    <tr>
                        <td><strong>福利</strong></td>
                        <td><?php echo $dwzpxx['fl']?></td>
                    </tr>
                </table>
            </div>

        </div>
    </div>
</div>


<?php include template("content","footer"); ?>
</body>
</html>