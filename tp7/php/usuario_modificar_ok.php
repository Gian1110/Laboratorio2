<?php
    include('../html/header.html');
    include('conexion.php');
    include('menu.php');
?>
<main class="centrar_Vertical">
    <section class="centrar_Horizontal">
        <?php
            $conexion = conectar();
            if ($conexion && isset($_POST['id'])) {
                $consulta ='UPDATE usuarios SET ';
                foreach($_POST as $clave=> $valor){
                    if(!empty($valor) && $clave != 'id'){
                        $consulta .= $clave.' = "'. $valor . '",';
                    }
                }
                if (!empty($_POST['clave'])) {
                    $clave= sha1($_POST['clave']);
                    $consulta .= 'clave="' . $clave . '",';
                }
                $id=$_POST['id'];
                $consulta .= 'WHERE id ='. $id. ';';
                $consulta = str_replace(",WHERE", " WHERE", $consulta);
                $resultado= mysqli_query($conexion,$consulta);
                if ($resultado) {
                    echo '<h4>se Actualizo con Exito</h4>';
                }
                else{
                    echo '<h4>No se Actualizo </h4>';
                }
                header('refresh:3; url=lista_usuarios.php');
            }
            desconectar($conexion);
        ?>
    </section>
    
</main>
<?php
include('../html/footer.html');
?>