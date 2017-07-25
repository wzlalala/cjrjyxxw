<?php
defined('IN_PHPCMS') or exit('No permission resources.');
class index {
    public $username,$yrdwjbxx_db,$dwzpxx_db;
    function __construct() {

        //用人单位基本信息数据
        $this->yrdwjbxx_db = pc_base::load_model('yrdwjbxx_model');
        //单位招聘信息数据
        $this->dwzpxx_db = pc_base::load_model('dwzpxx_model');
    }

    public function init() {

    }

    /**
     * 展示求职详情页面
     */
    public function show() {
    // id 求职信息id cjrid
        $yrdwjbxx = $this->yrdwjbxx_db->get_one(array('id'=>$_GET['yrdwid']));
        $dwzpxx = $this->dwzpxx_db->get_one(array('id'=>$_GET['id']));
        if(!isset($_GET['id'])||!isset($_GET['yrdwid'])) {
            showmessage(L('illegal_operation'));
        }
       /* foreach ($cjrjbxx as $v){
            $cjrjbxx['xm'] = $this->substr_cut($cjrjbxx['xm']);
        }*/


        if($yrdwjbxx['id']) {
            $template = 'show';
            include template('yrdwjbxx', $template,$yrdwjbxx['style']);
        } else {
            showmessage(L('no_exists'));
        }
    }

    private function substr_cut($user_name){
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
}
?>