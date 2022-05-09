<?php
include("../html/header.html");
?>
<main>
    <section class="centrar_Horizontal">
        <article class="centrar_Vertical">
            <h2 class="space">Temperatura (en grados centigrados) del DataCenter</h2>
            <hr>
            <?php
            define('cantidad',5000);
            $sensor1=array();
            $sensor2=array();
                for ($i=0; $i <cantidad ; $i++) { 
                    $sensor1[$i]=mt_rand(15,40);
                    $sensor2[$i]=mt_rand(15,40);
                }
            $promedio1=array_sum($sensor1);
            $promedio2=array_sum($sensor2);
            $promedio1=$promedio1/cantidad;
            $promedio2=$promedio2/cantidad;
            $promedio1=number_format($promedio1,2);
            $promedio2=number_format($promedio2,2);
            $promediototal=$promedio1+$promedio2;
            $promediototal=$promediototal/2;
            $promediototal=number_format($promediototal,2);
            echo'<p class="space">Promedio de temperatura del sensor 1: '.$promedio1.'<br><br>';
            echo'Promedio de temperatura del sensor 2: '.$promedio2.'</p>';
            echo'<hr>';
            echo'<h2 class="space">Promedio de Temperatura en el DataCenter: '.$promediototal.'</h2>';
            ?>
        </article>
    </section>
</main>

<?php
include("../html/footer.html")
?>