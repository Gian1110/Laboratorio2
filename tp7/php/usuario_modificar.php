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
<main > 
    <?php
            $id = $_GET['id'];
            
            $conexion=conectar();
            if ($conexion) {
                $consulta= 'SELECT usuario, mail, fecha_alta, tipo FROM usuarios WHERE id='.$id.'';
                $resultado= mysqli_query($conexion,$consulta); 
                $fila=mysqli_fetch_array($resultado);
                desconectar($conexion);
            }
        ?>
    <section class="centrar_Horizontal">
        <form action="usuario_modificar_ok.php" method="POST" enctype="multipart/form-data" class="centrar_Vertical">
            <!--usuario-->
            <section class="espacio">
            <label for="usuario">usuario: </label>
            <?php
            echo'<input type="text" id="usuario" name="usuario" required value="'.$fila[0].'">';
            ?>
            </section>
            <!--contrasenia-->
            <section class="espacio">
            <label for="contrasenia">Contraseña: </label>
            <input type="text" id="contrasenia" name="contrasenia" required>
            </section>
            <!--mail-->
            <section class="espacio">
            <label for="mail">mail: </label>
            <?php
            echo'<input type="text" id="mail" name="mail" required value="'.$fila[1].'">';
            ?>
            </section>
            <!--fecha_alta-->
            <section class="espacio">
            <label for="fecha_alta">fecha de alta: </label>
            <?php
            echo'<input type="date" id="fecha_alta" name="fecha_alta" required value="'.$fila[2].'">';
            ?>
            </section>
            <!--tipo-->
            <section class="espacio">
            <label for="tipo">tipo: </label>
            <?php
            echo'<input type="text" id="tipo" name="tipo" required value="'.$fila[3].'">';
            ?>
            </section>
            <!--foto-->
            <section class="espacio">
            <label for="foto">foto </label>
            <input type="file" id="foto" name="foto">
            </section>
            <input type="hidden" value="<?php echo $id ?>" name="id">
            <input type="submit" value="guardar" id="guardar">
        </form>
    </section>
</main>
<?php
    include('../html/footer.html');
?>