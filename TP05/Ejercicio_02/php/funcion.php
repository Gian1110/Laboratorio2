<?php
include('../html/header.html');//incluyo el header para tener una pag web correcta

?>
<main>
    <section class="centrar_Horizontal">
        <article class="centrar_Vertical">
            <?php
                $nombrArchivo='peliculas.txt';
                $datos=array();
              if (!empty($_POST['Titulo']) &&!empty($_POST['genero']) &&!empty($_POST['fecha']) && !empty($_FILES['caratula']['size'])){
                $datos[0]=$_POST['Titulo'];
                $datos[1]=$_POST['genero'];
                $datos[2]=$_POST['fecha'];  
                if (empty($_POST['destacado'])) { 
                   $datos[3]='No';
                  }
                else {
                    $datos[3]='Destacada';
                }
                  var_dump($_FILES);
                   $nombre=$_FILES['caratula']['name'];
                   $ext=explode('.',$nombre);
                   $rutaOrigen=$_FILES['caratula']['tmp_name'];
                   $datos[4]=$datos[0].'.jpg'.PHP_EOL;
                   $fot='../img/'.$datos[0].'.jpg';
                   $respuesta=move_uploaded_file($rutaOrigen,$fot);
                   $envio=implode(';',$datos);
                   $ubica='../txt/';
                   if ($respuesta) {
                    echo'<h2>subida exitosa</h2>';
                   }
                   if (!file_exists($ubica)) {
                       mkdir($ubica);
                   }
                   $archivo=fopen($ubica.$nombrArchivo,'a');
                   fputs($archivo,$envio);
                   fclose($archivo);
              }
            ?>
        </article>
    </section>
</main>
<?php
include('../html/footer.html');
?>