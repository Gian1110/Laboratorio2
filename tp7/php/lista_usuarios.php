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
    <h2 class="centro">Listado de usuarios</h2>
        <table id="tabla">
            <tr>
                <td>Usuario</td>
                <td>Mail</td>
                <td>fecha alta</td>
                <td>Tipo</td>
                <td>modificar</td>
                <td>eliminar</td>
            </tr>
            <?php
                $conexion=conectar();
                if ($conexion) {
                    $consulta= "SELECT usuario, mail, fecha_alta, tipo,id FROM usuarios WHERE 1";
                    $resultado= mysqli_query($conexion,$consulta);
                    $numfila=mysqli_num_rows($resultado); 
                    while ($fila=mysqli_fetch_array($resultado)) {
                        echo'<tr>';
                            echo'<td>'.$fila[0].'</td>';
                            echo'<td>'.$fila[1].'</td>';
                            $fecha = date_create($fila[2]);
                            $fecha = date_format($fecha,'d-m-Y');
                            echo'<td>'.$fecha.'</td>';
                            echo'<td>'.$fila[3].'</td>';
                            echo'<td><a href="usuario_modificar.php?id=' .$fila['id'].'"><img src="../fotos/edit_pencil.png" alt="lapiz para modificar el usuario" id="fotoModificar"></a></td>';
                            echo'<td><a href="usuario_borrado.php?id=' .$fila['id'].'"><img src="../fotos/trash_empty.png" alt="lapiz para modificar el usuario" id="fotoBorrar"></a></td>';
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