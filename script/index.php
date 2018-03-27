<?php

include('../libs/smarty/Smarty.class.php');
$smarty = new Smarty;
$smarty->template_dir = '../template';
$smarty->compile_dir = '../template_c';
$conexao = new PDO('mysql:host=127.0.0.1;port=3306;dbname=agenda','root',null);
if (empty($_GET['nome'])) {
    $ps=$conexao->prepare("select * from contatos");
    //$arr = array("shermasn", "shermsdssdan@lalalal");
    $ps->execute();
} else {
    $ps=$conexao->prepare("select * from contatos where nome like ?");
    $arr = array("%" . $_GET['nome'] . "%");
    $ps->execute($arr);
}
$contatos=$ps->fetchALL();

$smarty->assign('contatos',$contatos);

$smarty->display('index.tpl');

?>
<br/><br/><a href="index.php" class="botao" value="voltar"><h3>Voltar</h3></a>
