<?php 
$conexao = new PDO('mysql:host=127.0.0.1;port=3306;dbname=agenda','root',null);
$param = array($_GET['id']);
$ps=$conexao->prepare("delete from contatos where id=?");
$ps->execute($param);
header("Location: index.php");
?>