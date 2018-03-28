<?php
include('../include/common.php');
include('../include/conexao.php');
$nome = $_POST['nome'];
$email = $_POST['email'];
$celular = $_POST['celular'];
$nascimento = $_POST['nascimento'];
$filho = $_POST['filho'];
$ps=$conexao->prepare("insert into contatos(nome, email, celular, nascimento, filho) value(?, ?, ?, ?, ?)");
$ps->execute(array($nome, $email, $celular, $nascimento, $filho));
header("Location: index.php"); 
 ?>