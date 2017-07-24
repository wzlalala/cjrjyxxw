<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2017/7/20
 * Time: 16:11
 * //求职信息后台管理控制器
 */
defined('IN_PHPCMS') or exit('No permission resources.');
pc_base::load_app_class('admin','admin',0);
pc_base::load_sys_class('form','',0);
pc_base::load_app_func('util');
pc_base::load_sys_class('format','',0);

class admin_cjrqzxx extends admin{
    private $db;
    public $username,$cjrjbxx_db,$crjqzxx_db;
    function __construct(){
        $this->username = param::get_cookie('admin_username');
        //残疾人基本信息数据
        $this->cjrjbxx_db = pc_base::load_model('applyforjob_model');
        //残疾人求职信息数据
        $this->cjrqzxx_db = pc_base::load_model('cjrqzxx_model');
    }
    public function init()
    {
    /*
     *  残疾人求职信息列表
     * */

        /*$page = max(intval($_GET['page']), 1);*/
        $jbxx_data = $this->cjrjbxx_db->get_one(array('id'=>$_GET['id']));
        $where = array('cjrid'=>$_GET['id']);
        $qzxx_data = $this->cjrqzxx_db->listinfo($where, '`id` DESC', $page);
        foreach ($qzxx_data as $k=>$v){
            $qzxx_data[$k]['xm'] = $jbxx_data['xm'];
            $qzxx_data[$k]['cjrid'] = $jbxx_data['id'];
            $qzxx_data[$k]['sfzh'] = $jbxx_data['sfzh'];
            $qzxx_data[$k]['lxdh'] = $jbxx_data['lxdh'];
        }
      /*  $big_menu = array('javascript:window.top.art.dialog({id:\'add\',iframe:\'?m=applyforjob&c=admin_cjrqzxx&a=add\', title:\''.'添加求职信息'.'\', width:\'900\', height:\'440\', lock:true}, function(){var d = window.top.art.dialog({id:\'add\'}).data.iframe;var form = d.document.getElementById(\'dosubmit\');form.click();return false;}, function(){window.top.art.dialog({id:\'add\'}).close()});void(0);','添加求职信息');*/


        include $this->admin_tpl('cjrqzxx_list');
        //求职信息列表


    }

    /**
     * 添加求职信息
     */
    public function add() {
        if(isset($_POST['dosubmit'])) {
            $_POST['jbxx']['cjrid'] = $_GET['cjrid'];
            $_POST['jbxx'] = $this->check($_POST['jbxx'],'add');

            $id = $this->cjrqzxx_db->insert($_POST['jbxx'],true);
            if($id){
                $gourl =  '?m=applyforjob&c=admin_cjrqzxx&id='.$_GET['cjrid'];
                showmessage('添加求职信息成功', $gourl);
            }

        } else {
            $jbxx_data = $this->cjrjbxx_db->get_one(array('id'=>$_GET['cjrid']));
            pc_base::load_sys_class('form', '', 0);
            include $this->admin_tpl('cjrqzxx_add');


        }
    }
    /**
     * 修改求职信息
     */
    public function edit(){
       $_GET['id'] = intval($_GET['id']);
       if(!$_GET['id']) showmessage(L('illegal_operation'));
        if(isset($_POST['dosubmit'])) {
            $_POST['qzxx'] = $this->check($_POST['qzxx'], 'edit');
            if($this->cjrqzxx_db->update($_POST['qzxx'], array('id' => $_GET['id']))) showmessage('编辑求职信息成功', HTTP_REFERER, '', 'edit');
        } else {
            $where = array('id' => $_GET['id']);
            $qzxx = $this->cjrqzxx_db->get_one($where);
            $where2 = array('id'=>$qzxx['cjrid']);
            $jbxx = $this->cjrjbxx_db->get_one($where2);
            pc_base::load_sys_class('form', '', 0);
            $show_header = $show_validator = $show_scroll = 1;
            include $this->admin_tpl('cjrqzxx_edit');
        }
    }

    /**
     * 删除求职信息
     */
    public function delete() {
        if(!isset($_GET['id'])) {
            showmessage(L('illegal_operation'));
            //非法操作
        } else {
            if($_GET['id']) {
                $id = intval($_GET['id']);
                //   scbj  0:未删除  1 已删除
                $qzxx['scbj'] = 1;
                $qzxx['xgsj'] = SYS_TIME;
                $this->cjrqzxx_db->update($qzxx,array('id'=>$id));
                $gourl =  '?m=applyforjob&c=admin_cjrqzxx&id='.$_GET['cjrid'];
                showmessage('删除求职信息成功', $gourl);
            }
        }
    }

    /*
     * 求职信息管理
     * */
    public function admin_cjrqzxx(){
        if(isset($_GET['id'])){
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
        if($data['qzgw']=='') showmessage('求职岗位不可为空');
        if ($a=='add') {
            $data['cjr'] = $this->username;
            $data['cjsj'] = SYS_TIME;
        }
        if($a == 'edit'){
            $data['xgr'] = $this->username;
            $data['xgsj'] = SYS_TIME;
        }
        return $data;
    }


}