<?php
include('../html/header.html');
?>
<main>
    <section class="centrar_Horizontal">
        <article class="centrar_Vertical">
            <h2 class="salto">Informe de Recaudación de Peaje</h2>
            <hr>
            <?php
                $tarifa = array('motos' => 35,'autos' => 60,'camionetas' => 85,'pesados' => 120);
                $CantidadMoto=0;
                $CantidadAuto=0;
                $CantidadCamioneta=0;
                $CantidadPesado=0;
                for ($i=0; $i <2500 ; $i++) { 
                    $vehiculo=mt_rand(0,3);// 0 para moto,1 para auto, 2 para camioneta, 3 para pesados
                    switch ($vehiculo) {
                        case 0:
                            $CantidadMoto++;
                            break;
                        case 1:
                            $CantidadAuto++;
                            break;
                        case 2:
                            $CantidadCamioneta++;
                            break;
                        default:
                            $CantidadPesado++;
                            break;
                    }
                }
                $recaudoMoto=$CantidadMoto*$tarifa['motos'];
                $recaudoAuto=$CantidadAuto*$tarifa['autos'];
                $recaudoCamioneta=$CantidadCamioneta*$tarifa['camionetas'];
                $recaudoPesado=$CantidadPesado*$tarifa['pesados'];
                $recaudacionTotal=$recaudoMoto+$recaudoAuto+$recaudoCamioneta+$recaudoPesado;
                echo '<p class="space">Cantidad de Motos: '.$CantidadMoto.' y recaudo: $'.$recaudoMoto.'</p>';
                echo '<p class="space">Cantidad de autos: '.$CantidadAuto.' y recaudo: $'.$recaudoAuto.'</p>'; 
                echo '<p class="space">Cantidad de camioneta: '.$CantidadCamioneta.' y recaudo: $'.$recaudoCamioneta.'</p>';
                echo '<p class="salto">Cantidad de pesados: '.$CantidadPesado.' y recaudo: $'.$recaudoPesado.'</p>';
                echo '<hr>';
                echo  '<h3 class="salto">Total de vehiculos: 2500</h3>';
                echo  '<h3 class="espacio">Recaudacion del dia: $'.$recaudacionTotal.'</h3>';
            ?>
        </article>
    </section>
</main>
<?php
include('../html/footer.html');
?>