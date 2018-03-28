<?php
include('../libs/MyLogPHP/MyLogPHP.class.php');
$conexao = new PDO('mysql:host=127.0.0.1;port=3306;dbname=agenda','root',null);
$nome = $_POST['nome'];
$email = $_POST['email'];
$celular = $_POST['celular'];
$nascimento = $_POST['nascimento'];
$filho = $_POST['filho'];
$ps=$conexao->prepare("insert into contatos(nome, email, celular, nascimento, filho) value(?, ?, ?, ?, ?)");
$ps->execute(array($nome, $email, $celular, $nascimento, $filho));
header("Location: index.php"); 
 ?>