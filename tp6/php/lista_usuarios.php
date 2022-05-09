<?php
    include('../html/header.html');
    include('conexion.php');
    include('menu.php');
?>
<main class="acomodar">
    <?php
        menu();
    ?>
    <section class="centrar_Vertical">
    <h2 class="centro">Listado de usuarios</h2>
        <table id="tabla">
            <tr>
                <td>Usuario</td>
                <td>Mail</td>
                <td>fecha alta</td>
                <td>Tipo</td>
            </tr>
            <?php
                $conexion=conectar();
                if ($conexion) {
                    $consulta= "SELECT usuario, mail, fecha_alta, tipo FROM usuarios WHERE 1";
                    $resultado= mysqli_query($conexion,$consulta);
                    $numfila=mysqli_num_rows($resultado); 
                    while ($fila=mysqli_fetch_array($resultado)) {
                        echo'<tr>';
                            echo'<td>'.$fila[0].'</td>';
                            echo'<td>'.$fila[1].'</td>';
                            echo'<td>'.$fila[2].'</td>';
                            echo'<td>'.$fila[3].'</td>';
                        echo'</tr>';
                    }
                    desconectar($conexion);
                }
            ?>    
        </table>
    </section>
                
</main>
<?php
include('../html/footer.html');
?>