<?php
include('../include/common.php');
include('../include/conexao.php');
$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$celular = $_POST['celular'];
$nascimento = $_POST['nascimento'];
$filho = $_POST['filho'];
$ps=$conexao->prepare("update contatos set nome = ?, email = ?, celular = ?, nascimento = ?, filho = ? where id = ?");
$ps->execute(array($nome, $email, $celular, $nascimento, $filho, $id));
header("Location: index.php"); 
?>