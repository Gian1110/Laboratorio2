<?php
include('../html/header.html');//incluyo el header para tener una pag web correcta
include('funcion.php')
?>
<main>
    <section class="centrar_Horizontal">
        <article class="centrar_Vertical">
            <?php
               $numero=mt_rand(100,100000);
               $invertido=invertir($numero);
               echo '<h3 class="espacio">'.$numero.'</h3>';
               echo '<h3 class="espacio">'.$invertido.'</h3>';
            ?>
        </article>
    </section>
</main>
<?php
include('../html/footer.html');
?>