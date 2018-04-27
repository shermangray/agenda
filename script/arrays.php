<?php
include('../include/common.php');

$a = array('nome' => 'dfgnbdfgb', 'imagem' => null, 'email' => 'shermangray@hotmail.com');
\MyLogPHP\MyLogPHP::out($a, '$a');

/*echo $a['nome']; */

$b = array(
    'imagem' => array('name' => 'SafariIco.exe', 'type' => 'application/x-msdownload', 'tmp_name' => 'C:\wamp64\tmp\phpA3B6.tmp'),
    'imagem2' => array('1','2','3')
);

/*echo $b['imagem']['name'];*/

echo $b['imagem2']['2'];

\MyLogPHP\MyLogPHP::out($b, '$b');
?>