<?php
include('../include/common.php');
include('../include/conexao.php');
$nome = $_POST['nome'];
$email = $_POST['email'];
$celular = $_POST['celular'];
$nascimento = $_POST['nascimento'];
$filho = $_POST['filho'];
$ps=$conexao->prepare("insert into contatos(nome, email, celular, nascimento, filho) values (?, ?, ?, ?, ?)");
$ps->execute(array($nome, $email, $celular, $nascimento, $filho));
if(!empty($_FILES['imagem']['name'])){
    MyLogPHP\MyLogPHP::out($_FILES,'FILES');
    $info = new SplFileInfo($_FILES['imagem']['name']);
    move_uploaded_file($_FILES['imagem']['tmp_name'], '/wamp64/www/agenda/imagens/' . $conexao->lastInsertId() . '.' . $info->getExtension());
}
header("Location: index.php");
?>