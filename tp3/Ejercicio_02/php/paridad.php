<?php
include('../html/header.html');
?>
<main>
    <section class="centrar_Horizontal">
        <article class="centrar_Vertical">
            <h1 class="salto">Valores generados</h1>
            <?php
            $par=0;
            $impar=0;
                for ($i=0; $i <10 ; $i++) { 
                    $num=mt_rand(1,500);
                    echo $num.'<br>';
                    if ($num%2===0) {
                       $par++;
                    }
                    else {
                        $impar++;
                    }
                }
                echo'<p class="salto">Cantidad pares: '.$par.'<br>';
                echo'Cantidad impares: '.$impar.'</p>';
            ?>
        </article>
    </section>
</main>
<?php
include('../html/footer.html');
?>