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
pc_base::load_sys_class('form','',0);
pc_base::load_app_func('util');
pc_base::load_sys_class('format','',0);

class admin_dwzpxx extends admin{
    public $username,$cjrjbxx_db,$crjqzxx_db;
    function __construct(){
        $this->username = param::get_cookie('admin_username');
        //用人单位基本信息数据
        $this->yrdwjbxx_db = pc_base::load_model('yrdwjbxx_model');
        //单位招聘信息数据
        $this->dwzpxx_db = pc_base::load_model('dwzpxx_model');
    }
    public function init()
    {
    /*
     *  单位招聘信息列表
     * */

        /*$page = max(intval($_GET['page']), 1);*/
        $yrdwjbxx_data = $this->yrdwjbxx_db->get_one(array('id'=>$_GET['id']));
        $where = array('yrdwid'=>$_GET['id'],'scbj'=>'0');
        $dwzpxx_data = $this->dwzpxx_db->listinfo($where, '`id` DESC');
        foreach ($dwzpxx_data as $k=>$v){
            $dwzpxx_data[$k]['dwmc'] = $yrdwjbxx_data['dwmc'];
            $dwzpxx_data[$k]['yrdwid'] = $yrdwjbxx_data['id'];
            $dwzpxx_data[$k]['frdb'] = $yrdwjbxx_data['frdb'];
            $dwzpxx_data[$k]['lxdh'] = $yrdwjbxx_data['lxdh'];
        }
      /*  $big_menu = array('javascript:window.top.art.dialog({id:\'add\',iframe:\'?m=applyforjob&c=admin_cjrqzxx&a=add\', title:\''.'添加求职信息'.'\', width:\'900\', height:\'440\', lock:true}, function(){var d = window.top.art.dialog({id:\'add\'}).data.iframe;var form = d.document.getElementById(\'dosubmit\');form.click();return false;}, function(){window.top.art.dialog({id:\'add\'}).close()});void(0);','添加求职信息');*/
        include $this->admin_tpl('dwzpxx_list');
        //求职信息列表


    }

    /**
     * 添加单位招聘信息
     */
    public function add() {
        if(isset($_POST['dosubmit'])) {
            $_POST['dwzpxx']['yrdwid'] = $_GET['yrdwid'];
            $_POST['dwzpxx'] = $this->check($_POST['dwzpxx'],'add');

            $id = $this->dwzpxx_db->insert($_POST['dwzpxx'],true);
            if($id){
                $gourl ='?m=yrdwjbxx&c=admin_dwzpxx&a=init&id='.$_GET['yrdwid'];
                showmessage('添加单位招聘信息成功', $gourl);
            }

        } else {
            $yrdwjbxx_data = $this->yrdwjbxx_db->get_one(array('id'=>$_GET['yrdwid']));
            pc_base::load_sys_class('form', '', 0);
            include $this->admin_tpl('dwzpxx_add');


        }
    }
    /**
     * 修改招聘信息
     */
    public function edit(){
       $_GET['id'] = intval($_GET['id']);
       if(!$_GET['id']) showmessage(L('illegal_operation'));
        if(isset($_POST['dosubmit'])) {
            $_POST['dwzpxx'] = $this->check($_POST['dwzpxx'], 'edit');
            if($this->dwzpxx_db->update($_POST['dwzpxx'], array('id' => $_GET['id']))) showmessage('修改招聘信息成功', HTTP_REFERER, '', 'edit');
        } else {
            $where = array('id' => $_GET['id']);
            $dwzpxx = $this->dwzpxx_db->get_one($where);
            $where2 = array('id'=>$dwzpxx['yrdwid']);
            $yrdwjbxx = $this->yrdwjbxx_db->get_one($where2);
            pc_base::load_sys_class('form', '', 0);
            $show_header = $show_validator = $show_scroll = 1;
            include $this->admin_tpl('dwzpxx_edit');
        }
    }

    /**
     * 删除单位招聘信息
     */
    public function delete() {
        if(!isset($_GET['id'])) {
            showmessage(L('illegal_operation'));
            //非法操作
        } else {
            if($_GET['id']) {
                $id = intval($_GET['id']);
                //   scbj  0:未删除  1 已删除
                $dwzpxx['scbj'] = 1;
                $dwzpxx['xgr'] = $this->username;;
                $dwzpxx['xgsj'] = SYS_TIME;
                $this->dwzpxx_db->update($dwzpxx,array('id'=>$id));
                $gourl =  '?m=yrdwjbxx&c=admin_dwzpxx&id='.$_GET['yrdwid'];
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
        if($data['zpgw']=='') showmessage('招聘岗位不可为空');
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