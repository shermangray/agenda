<?php 
$conexao = new PDO('mysql:host=127.0.0.1;port=3306;dbname=agenda','root',null);
$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>