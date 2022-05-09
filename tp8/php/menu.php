<?php
function menu()
{
    if (!empty($_SESSION['usuario'])) {
        echo '<section class="centrar_acceso">';
            echo '<img src="../fotos/'.$_SESSION['foto'].'" alt="imagen de perfil" class="fotoPerfil">';
            echo '<p>'.$_SESSION['usuario'].'</p>';
            echo '<a href="cerrar.php">cerrar sesion</a>';
            echo '<hr class="linea">';
        echo'</section>';
    }
    else {
        header('refresh:3; url=../index.html');
    }
    echo'<section class="centrar_Vertical">';
        echo '<h2>Usuario</h2>';
        echo '<a href="alta_usuario.php" class="boton">Nuevo usuario</a>';
        echo '<a href="lista_usuarios.php" class="boton">Lista usuarios</a>';
        echo '<h2>Opciones</h2>';
        echo '<a href="configuracion.php" class="boton">Configuracion</a>';
    echo'</section>';
}
?>
