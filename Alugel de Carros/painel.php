<?php
session_start();
include('verifica_login.php');

if(!$_SESSION['usuario']){
    header('Location: index.php');
    exit;
}
?>

<h2>Olá, <?php echo $_SESSION['usuario'];?></h2>