<?php

define('HOST', 'localhost');
define('VOLUNTARIOEVENTO', 'root');
define('SENHA', '');
define('BD', 'voluntario');

$conexaoEvento = mysqli_connect(HOST, VOLUNTARIOEVENTO, SENHA, BD) or die ('Não Conectou!!');
?>