<?php
include('../html/header.html');
?>
<main>
    <section class="centrar_Horizontal">
        <article class="centrar_Vertical">
            <?php
                $numero=mt_rand(100,100000);
                echo'<h2>Número: '.$numero.'</h2>';
                $pares=0;
                $impares=0;
                while (1<$numero ) {
                    $digito=$numero%10;
                    $numero=$numero/10; 
                    if ($digito%2==0) {
                        $pares++;
                    }
                    else {
                        $impares++;
                    }                
                }
                $total=$impares+$pares;
                echo'<h2>Cantidad de dígitos: '.$total.'</h2>';
                echo'<h2>Cantidad pares: '.$pares.'</h2>';
                echo'<h2>Cantidad impares '.$impares.'</h2>';
            ?>
        </article>
    </section>
</main>
<?php
include('../html/footer.html');
?>