<?php
    include('../html/header.html');
    include('conexion.php');
    include('menu.php');
?>
<main class="centrar_Vertical">
    <section class="centrar_Horizontal">
        <?php
            $id=$_GET['id'];
            $conexion=conectar();
            if ($conexion && !empty($_GET['id'])) {
                $consulta= 'DELETE FROM usuarios WHERE id='.$id.'';
                $resultado= mysqli_query($conexion,$consulta); 
                desconectar($conexion);
                if ($resultado) {
                    echo'<p>se elimino con exito</p>';
                } 
                else {
                    echo'<p>no se pudo eliminar</p>';
                }
            }
            else {
                echo '<p>no se pudo por error de conexion o el id incorrecto</p>';
            }
            header('refresh:3; url=lista_usuarios.php');
        ?>
    </section>
    
</main>
<?php
include('../html/footer.html');
?>