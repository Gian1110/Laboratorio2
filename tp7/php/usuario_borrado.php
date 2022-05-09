<?php
    include('../html/header.html');
    include('conexion.php');
    include('menu.php');
?>
<nav>
    <?php
        menu();
    ?>
</nav>
<main>
    <section class="centrar_Vertical">
        <h2 >Borrado de usuario</h2>
        <?php
            $id=$_GET['id'];
            $conexion=conectar();
            if ($conexion) {
                $consulta= 'SELECT usuario, mail, fecha_alta, tipo FROM usuarios WHERE id='.$id.'';
                $resultado= mysqli_query($conexion,$consulta); 
                desconectar($conexion);
                $fila=mysqli_fetch_array($resultado);
                echo '<p>¿Está seguro de querer eliminar al usuario '.$fila[0].'?</p>'; 
                echo '<section class="centrar_Horizontal">';
                    echo '<a href="usuario_borrado_ok.php?id='.$id.'" class="botonAyC">Aceptar</a>';
                    echo '<a href="usuario_borrado_ok.php" class="botonAyC">Cancelar</a>';
                echo '</section>';
                
            }
        ?>
    </section>
    
</main>
<?php
include('../html/footer.html');
?>