<?php
    include('../html/header.html');//incluyo el header para tener una pag web correcta
?>
<main>
    <section class="centrar_Horizontal">
        <article class="centrar_Vertical-2">
            <?php
                $nombreArchivo='peliculas.txt';
                $ubicacion='../txt/';
                $archivo = fopen($ubicacion.$nombreArchivo,'r');
                while (!feof($archivo)){
                    $fila=fgets($archivo);
                    if($fila != ''){
                        $separado=explode(';',$fila);
                        if ($separado[3]=='Destacada'){
                            echo '<section class="centrar_Horizontal-1">';
                                echo '<img src="../img/'.$separado[4].'" alt="'.$separado[0].'" class="fot">';
                                $fecha=date_create($separado[2]);
                                echo'<section class="centrar_Vertical-1">';
                                    echo '<img src="../img/estrella.png" alt="estrella de destacado" class="ico">';
                                    echo'<h2 class="espacio">'.$separado[0].'</h2>';
                                    echo'<p class="espacio">Género: '.$separado[1].'</p>';
                                    echo'<p class="espacio">Fecha de estreno:'.date_format($fecha,'d/m/Y').'</p>';
                                echo'</section>';
                            echo'</section>';
                            echo'<hr class="espacio2">';
                        }
                    }
                }
                fclose($archivo);
            ?>
        </article>
    </section>
</main>
<?php
include('../html/footer.html');
?>