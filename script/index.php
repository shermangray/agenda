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
    $ps=$conexao->prepare("select * from contatos where nome like ? order by nome");
    $arr = array("%" . $_GET['nome'] . "%");
    $ps->execute($arr);
}
$contatos=$ps->fetchALL(PDO::FETCH_ASSOC);
$fim = count($contatos);
for ($a = 0; $a < $fim; $a++) {
    if ( file_exists("../imagens/" . $contatos[$a]['id'])){
        $foto = true;
    }else{
        $foto = false;
    }
    $contatos[$a]['foto'] = $foto;
}
$smarty->assign('contatos',$contatos);
$smarty->display('index.tpl');
?>