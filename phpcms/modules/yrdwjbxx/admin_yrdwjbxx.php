<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2017/7/20
 * Time: 16:11
 * //单位招聘信息后台管理控制器
 */
defined('IN_PHPCMS') or exit('No permission resources.');
pc_base::load_app_class('admin','admin',0);

class admin_yrdwjbxx extends admin{
    private $db;
    public $username;
    function __construct(){
        $this->username = param::get_cookie('admin_username');
        $this->db = pc_base::load_model('yrdwjbxx_model'); //加载数据库模型
    }
    /*
     * 残疾人基本信息列表
     * */
    public function init()
        {
          /*  echo SYS_TIME;*/
        /*
         * scbj  删除标记；0：未删除。1：已删除
         * */
        $where = array('scbj'=>'0');
       $data = $this->db->listinfo($where, '`id` DESC');
        $big_menu = array('javascript:window.top.art.dialog({id:\'add\',iframe:\'?m=yrdwjbxx&c=admin_yrdwjbxx&a=add\', title:\''.'添加招聘单位基本信息'.'\', width:\'500\', height:\'440\', lock:true}, function(){var d = window.top.art.dialog({id:\'add\'}).data.iframe;var form = d.document.getElementById(\'dosubmit\');form.click();return false;}, function(){window.top.art.dialog({id:\'add\'}).close()});void(0);','添加招聘单位基本信息');
        include $this->admin_tpl('yrdwjbxx_list');
    }

    /*
     * 添加用人单位基本信息
     * */
    public function add() {
        if(isset($_POST['dosubmit'])) {
             $_POST['yrdwjbxx'] = $this->check($_POST['yrdwjbxx'],'add');
            $id = $this->db->insert($_POST['yrdwjbxx'],true);
            if($id){
                showmessage('添加用人单位基本信息成功', HTTP_REFERER, '', 'add');
            }

        } else {
            //获取站点模板信息
            pc_base::load_app_func('global', 'admin');
            $siteid = $this->get_siteid();
            $template_list = template_list($siteid, 0);
            $site = pc_base::load_app_class('sites','admin');
            $info = $site->get_by_id($siteid);
            foreach ($template_list as $k=>$v) {
                $template_list[$v['dirname']] = $v['name'] ? $v['name'] : $v['dirname'];
                unset($template_list[$k]);
            }
            $show_header = $show_validator = $show_scroll = 1;

            pc_base::load_sys_class('form', '', 0);
            include $this->admin_tpl('yrdwjbxx_add');


        }
    }
    /**
     * 修改用人单位基本信息
     */
    public function edit(){
       $_GET['id'] = intval($_GET['id']);
       if(!$_GET['id']) showmessage(L('illegal_operation'));
        if(isset($_POST['dosubmit'])) {
            $_POST['yrdwjbxx'] = $this->check($_POST['yrdwjbxx'], 'edit');
            if($this->db->update($_POST['yrdwjbxx'], array('id' => $_GET['id']))) showmessage(L('announced_a'), HTTP_REFERER, '', 'edit');
        } else {
            $where = array('id' => $_GET['id']);
            $yrdwjbxx = $this->db->get_one($where);
            pc_base::load_sys_class('form', '', 0);
            $show_header = $show_validator = $show_scroll = 1;
            include $this->admin_tpl('yrdwjbxx_edit');
        }
    }

    /**
     * 删除用人单位基本信息
     */
    public function delete() {
        if(!isset($_GET['id'])) {
            showmessage(L('illegal_operation'));
            //非法操作
        } else {
            if($_GET['id']) {
                $id = intval($_GET['id']);
                $applyforjob['scbj'] = 1;
                $applyforjob['xgr'] = $this->username;
                $applyforjob['xgsj'] = SYS_TIME;
                $this->db->update($applyforjob,array('id'=>$id));
                showmessage('删除用人单位基本信息成功', 'index.php?m=yrdwjbxx&c=admin_yrdwjbxx&a=init');
            }
        }
    }

    /*
     * 求职信息管理
     * */
    public function admin_cjrqzxx(){
        if(isset($_GET['id'])){
            $big_menu = array('javascript:window.top.art.dialog({id:\'add\',iframe:\'?m=applyforjob&c=admin_applyforjob&a=add\', title:\''.'添加求职信息'.'\', width:\'900\', height:\'440\', lock:true}, function(){var d = window.top.art.dialog({id:\'add\'}).data.iframe;var form = d.document.getElementById(\'dosubmit\');form.click();return false;}, function(){window.top.art.dialog({id:\'add\'}).close()});void(0);','添加求职信息');
            include $this->admin_tpl('cjrqzxx_list');
        }
    }

    /**
     * 验证表单数据
     * @param  		array 		$data 表单数组数据
     * @param  		string 		$a 当表单为添加数据时，自动补上缺失的数据。
     * @return 		array 		验证后的数据
     */
    private function check($data = array(), $a) {
        if($data['dwmc']=='') showmessage('单位名称不可为空');
        if($data['frdb']=='') showmessage('法人代表不可为空');
        if($data['lxdh']=='') showmessage('联系电话不可为空');
        if ($a=='add') {
            $data['cjr'] = $this->username;
            $data['cjsj'] = SYS_TIME;
        }
        if ($a=='edit') {
            $data['xgr'] = $this->username;
            $data['xgsj'] = SYS_TIME;
        }

        return $data;
    }


}