<?php
defined('IN_PHPCMS') or exit('No permission resources.');
class index {
    private $db;
    public $username,$cjrjbxx_db,$crjqzxx_db;
    function __construct() {

        //残疾人基本信息数据
        $this->cjrjbxx_db = pc_base::load_model('applyforjob_model');
        //残疾人求职信息数据
        $this->cjrqzxx_db = pc_base::load_model('cjrqzxx_model');
    }

    public function init() {

    }

    /**
     * 展示求职详情页面
     */
    public function show() {
    // id 求职信息id cjrid
        $cjrjbxx = $this->cjrjbxx_db->get_one(array('id'=>$_GET['cjrid']));
        $cjrqzxx = $this->cjrqzxx_db->get_one(array('id'=>$_GET['id']));
        if(!isset($_GET['id'])||!isset($_GET['cjrid'])) {
            showmessage(L('illegal_operation'));
        }
        foreach ($cjrjbxx as $v){
            $cjrjbxx['xm'] = $this->substr_cut($cjrjbxx['xm']);
        }


        if($cjrjbxx['id']) {
            $template = 'show';
            include template('applyforjob', $template,$cjrjbxx['style']);
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