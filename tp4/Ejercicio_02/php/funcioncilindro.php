<?php
include('../html/header.html');//incluyo el header para tener una pag web correcta


define('pi',3.14);
?>
<main>
    <section class="centrar_Horizontal">
        <article class="centrar_Vertical">
            <?php
                if (!empty($_POST['altura']) && !empty($_POST['radio'])) {
                    $h=$_POST['altura'];// le doy el valor de la altura traida de la pag anterior
                    $radio=$_POST['radio'];//le doy el valor del radio tradido de la pag anterior
                    $volumen=volumenCilindro($radio,$h);
                    
                    echo '<h3 class="espacio">Radio: '.$radio.'</h3>';
                    echo'<h3 class="espacio">Altura: '.$h.'</h3>';
                    echo'<h3 class="espacio">Volumen: '.$volumen.'</h3>';
                }
            ?>
        </article>
    </section>
</main>
<?php
function volumenCilindro ($radio,$h)
{
    $volumen=$radio*$radio*$h*pi;
    return $volumen; 
}
include('../html/footer.html');
?>