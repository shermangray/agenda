<?php 
include('../include/common.php');
include('../libs/smarty/Smarty.class.php');
$smarty = new Smarty;
$smarty->template_dir = '../template';
$smarty->compile_dir = '../template_c';
$smarty->display('novocontato.tpl');
?>