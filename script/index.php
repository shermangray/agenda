<?php
include('../include/common.php');
include('../libs/smarty/Smarty.class.php');
$smarty = new Smarty;
$smarty->template_dir = '../template';
$smarty->compile_dir = '../template_c';
include('../include/conexao.php');
if (empty($_GET['nome'])) {
    $ps=$conexao->prepare("select * from contatos order by nome");
    $ps->execute();
} else {
    $ps=$conexao->prepare("select * from contatos where nome like ?");
    $arr = array("%" . $_GET['nome'] . "%");
    $ps->execute($arr);
}
$contatos=$ps->fetchALL(PDO::FETCH_ASSOC);
$smarty->assign('contatos',$contatos);
$smarty->display('index.tpl');
?>