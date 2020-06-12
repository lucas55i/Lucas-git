<?php
define('HOST', 'localhost: 3306');
define('USUARIO', 'root');
define('SENHA', 'lucash963');
define('DB', 'login');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi posivel conectar');