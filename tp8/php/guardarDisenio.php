<?php
session_start();
if (!empty($_POST) && !empty($_SESSION['usuario']) ) {
    $unido = implode('-',$_POST);
    $usuario = $_SESSION['usuario'];
    $tiempo_expira = time() + 30 * 24 * 60 * 60;
    setcookie($usuario, $unido, $tiempo_expira,'/');
    header('refresh:0; url=lista_usuarios.php');
}
?>