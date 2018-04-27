<?php
include('../include/common.php');
include('../include/conexao.php');
$id = $_POST['id'];
$info = $_FILES['arquivo'];
MyLogPHP\MyLogPHP::out($_FILES,'FILES');
$nome = $_POST['nome'];
$email = $_POST['email'];
$celular = $_POST['celular'];
$nascimento = $_POST['nascimento'];
$filho = $_POST['filho'];
$ps=$conexao->prepare("update contatos set nome = ?, email = ?, celular = ?, nascimento = ?, filho = ? where id = ?");
$ps->execute(array($nome, $email, $celular, $nascimento, $filho, $id));
$info = new SplFileInfo($_FILES['arquivo']['name']);
move_uploaded_file($_FILES['arquivo']['tmp_name'], '/wamp64/www/agenda/imagens/' . $_POST['id']);
header("Location: index.php"); 
?>