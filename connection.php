<?php

if(!defined('HOST')) define('HOST', 'localhost');
if(!defined('USER')) define('USER', 'root');
if(!defined('PRODUCT')) define('PRODUCT', 'root');
if(!defined('SENHA')) define('SENHA', '');
if(!defined('BD')) define('BD', 'orgao');

$connectionUser = mysqli_connect(HOST, USER, SENHA, BD) or die ('Não Conectou!!');
$connectionProduct = mysqli_connect(HOST, PRODUCT, SENHA, BD) or die ('Não Conectou!!');

?>