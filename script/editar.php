<?php 
include('../include/common.php');
include('../libs/smarty/Smarty.class.php');
$smarty = new Smarty;
$smarty->template_dir = '../template';
$smarty->compile_dir = '../template_c';
$idpessoa = $_GET['id_pessoa'];
include('../include/conexao.php');
$ps=$conexao->prepare("select * from contatos where id = ?");
$arr = array($idpessoa);
$ps->execute($arr);
$contato = $ps->fetch(PDO::FETCH_ASSOC);
\MyLogPHP\MyLogPHP::out($contato, '$contato');

/*
$info = new SplFileInfo($_FILES['imagem']['name']);
move_uploaded_file($_FILES['imagem']['tmp_name'], '/wamp64/www/agenda/imagens/' . $conexao->lastInsertId() . '.' . $info->getExtension());
*/

/*$smarty->assign('imagem',$_FILES['imagem']);*/
$smarty->assign('id',$contato['id']);
$smarty->assign('nome',$contato['nome']);
$smarty->assign('email',$contato['email']);
$smarty->assign('celular',$contato['celular']);
$smarty->assign('nascimento',$contato['nascimento']);
$smarty->assign('filho',$contato['filho']);
$smarty->display('editar.tpl');
?>