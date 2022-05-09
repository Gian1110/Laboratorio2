<?php
include('html/header.html');//incluyo el header para tener una pag web correcta
include('php/funcion.php');
?>
<main>
    <section class="centrar_Horizontal">
        <article class="centrar_Vertical-1">
            <?php
               mostrar('peliculas.txt');
            ?>
        </article>
    </section>
</main>
<?php
include('html/footer.html');
?>