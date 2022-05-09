<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Berarducci Gianluca">
    <?php
    if (!empty($_SESSION['usuario']) && $_COOKIE[$_SESSION['usuario']]=='model'){
        $estilo='css_moderno';
    }
    else {
        $estilo='estilo';
    }
    echo '<link rel="stylesheet" href="../css/'.$estilo.'.css">';
    ?>
    <title>punto</title>
</head>
<body class="dualbody">
