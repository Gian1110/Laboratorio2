<?php
    session_start();
    include('header.php');
    if (!empty($_SESSION['usuario'])) {
        session_destroy();
    }
    header('refresh:0; ../index.html');
?>