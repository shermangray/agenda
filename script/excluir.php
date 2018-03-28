<?php 
include('../include/common.php');
include('../include/conexao.php');
$param = array($_GET['id']);
$ps=$conexao->prepare("delete from contatos where id=?");
$ps->execute($param);
header("Location: index.php");
?>