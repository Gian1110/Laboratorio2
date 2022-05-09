<?php
session_start();
include('header.php');//incluyo el header para tener una pag web correcta
?>
<main>
    <section class="centrar_Horizontal">
        <article class="centrar_Vertical">
            <?php
                 if (!empty($_POST['usuario']) && !empty($_POST['contrasenia'])) {
                    $usuario=$_POST['usuario'];
                    $password=$_POST['contrasenia'];
                    $resultao=comprobar($usuario,$password);
                    if ($resultao) {
                        $cantifila=mysqli_num_rows($resultao);
                        if ($cantifila == 1) {
                            $fila = mysqli_fetch_array($resultao);
                            $_SESSION['usuario'] = $fila['usuario'];
                            $_SESSION['foto'] = $fila['foto'];
                            header('refresh:0; url=lista_usuarios.php');
                        }
                    }
                    else {
                      echo'Datos incorrectos';
                      header('refresh:3; url=../index.html');
                    }
                 }
            ?>
        </article>
    </section>
</main>
<?php
function comprobar ($user,$password)
{
    include 'conexion.php';
    $conexion=conectar();
    if ($conexion) {
        
        $clave = sha1($password);
        $consulta= "SELECT usuario, contrasenia, foto FROM usuarios WHERE usuario='$user' AND contrasenia='$clave'";
        $resultado= mysqli_query($conexion,$consulta);
        $numfila=mysqli_num_rows($resultado);
        if ($numfila) {
            echo 'entro con exito';
        }
        else {
            echo 'falloo';
            $resultado=0;
        }
        desconectar($conexion);
    }
    return $resultado;
}
include('../html/footer.html');
?>


