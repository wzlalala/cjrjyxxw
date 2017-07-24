<?php
defined('IN_PHPCMS') or exit('Access Denied');
defined('INSTALL') or exit('Access Denied');

$parentid = $menu_db->insert(array('name'=>'applyforjob', 'parentid'=>29, 'm'=>'applyforjob', 'c'=>'admin_applyforjob', 'a'=>'init', 'data'=>'s=1', 'listorder'=>0, 'display'=>'1'), true);
$menu_db->insert(array('name'=>'applyforjob_add', 'parentid'=>$parentid, 'm'=>'applyforjob', 'c'=>'admin_applyforjob', 'a'=>'add', 'data'=>'', 'listorder'=>0, 'display'=>'0'));
$menu_db->insert(array('name'=>'edit_applyforjob', 'parentid'=>$parentid, 'm'=>'applyforjob', 'c'=>'admin_applyforjob', 'a'=>'edit', 'data'=>'s=1', 'listorder'=>0, 'display'=>'0'));
$menu_db->insert(array('name'=>'check_applyforjob', 'parentid'=>$parentid, 'm'=>'applyforjob', 'c'=>'admin_applyforjob', 'a'=>'init', 'data'=>'s=2', 'listorder'=>0, 'display'=>'1'));
$menu_db->insert(array('name'=>'overdue', 'parentid'=>$parentid, 'm'=>'applyforjob', 'c'=>'admin_applyforjob', 'a'=>'init', 'data'=>'s=3', 'listorder'=>0, 'display'=>'1'));
$menu_db->insert(array('name'=>'del_applyforjob', 'parentid'=>$parentid, 'm'=>'applyforjob', 'c'=>'admin_applyforjob', 'a'=>'delete', 'data'=>'', 'listorder'=>0, 'display'=>'0'));

$language = array('applyforjob'=>'公告', 'applyforjob_add'=>'添加公告', 'edit_applyforjob'=>'编辑公告', 'check_applyforjob'=>'审核公告', 'overdue'=>'过期公告', 'del_applyforjob'=>'删除公告');
?>