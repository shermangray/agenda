<?php
/*
print_r($_POST);
die();
*/
$conexao = new PDO('mysql:host=127.0.0.1;port=3306;dbname=agenda','root',null);
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

 