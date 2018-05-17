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
    if ( file_exists( "../imagens/" . $contato['id'])){
        $foto = true;
    }else{
        $foto = false;
    }
    $contato['foto'] = $foto;
/*MyLogPHP\MyLogPHP::out($contato,'contatos');*/

$smarty->assign('foto',$contato['foto']);
$smarty->assign('id',$contato['id']);
$smarty->assign('nome',$contato['nome']);
$smarty->assign('email',$contato['email']);
$smarty->assign('celular',$contato['celular']);
$smarty->assign('nascimento',$contato['nascimento']);
$smarty->assign('filho',$contato['filho']);
$smarty->display('editar.tpl');
?>