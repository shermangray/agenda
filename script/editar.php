<?php 
include('../libs/smarty/Smarty.class.php');
$smarty = new Smarty;
$smarty->template_dir = '../template';
$smarty->compile_dir = '../template_c';
$idpessoa = $_GET['id_pessoa'];
$conexao = new PDO('mysql:host=127.0.0.1;port=3306;dbname=agenda','root',null);
$ps=$conexao->prepare("select * from contatos where id = ?");
$arr = array($idpessoa);
$ps->execute($arr);
$contato = $ps->fetch(PDO::FETCH_ASSOC);
$smarty->assign('id',$contato['id']);
$smarty->assign('nome',$contato['nome']);
$smarty->assign('email',$contato['email']);
$smarty->assign('celular',$contato['celular']);
$smarty->assign('nascimento',$contato['nascimento']);
$smarty->assign('filho',$contato['filho']);
$smarty->display('editar.tpl');
?>