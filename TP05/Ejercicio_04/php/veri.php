1<?php
include('../html/header.html');//incluyo el header para tener una pag web correcta
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
                        header('refresh:0; url=menu.php');
                    }
                    else {
                        echo'Datos incorrectos';
                    }
                 }
            ?>
        </article>
    </section>
</main>
<?php
function comprobar ($usuario,$password)
{
    $nombreArchivo='usuarios.txt';
	$ubicacion='../txt/';
    $archivo = fopen($ubicacion.$nombreArchivo,'r');
    while (!feof($archivo)){
        $fila=fgets($archivo);
        if($fila != ''){
            $separado=explode(';',$fila);
            if($separado[0]==$usuario && $separado[1]==$password){
                $var=1;
                break;
            }
            else{
                $var=0;
            }
        }
    }
    fclose($archivo);
    return $var;
}
include('../html/footer.html');
?>