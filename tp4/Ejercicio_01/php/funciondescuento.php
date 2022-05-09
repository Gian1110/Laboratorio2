<?php
include('../html/header.html');//incluyo el header para tener una pag web correcta
?>
<main>
    <section class="centrar_Horizontal">
        <article class="centrar_Vertical">
            <?php
                if (!empty($_POST['monto']) && !empty($_POST['descuento'])) {
                    $monto=$_POST['monto'];//le doy a monto el valor traido de la pag anterior
                    $descuento=$_POST['descuento'];// le doy a descuento el valor traido de la pag anterior
                    $mondoDescuento=aplicarDescuento($monto,$descuento);
                    echo '<h3 class="espacio">Monto: $'.$monto.'</h3>';
                    echo'<h3 class="espacio">Descuento: '.$descuento.'%</h3>';
                    echo'<h3 class="espacio">Monto con descuento: $'.$mondoDescuento.'</h3>';
                }
            ?>
        </article>
    </section>
</main>
<?php
function aplicarDescuento ($valor,$descuentoAplicar)
{
    $des=$valor*$descuentoAplicar/100;
    return $valor-$des; 
}
include('../html/footer.html');
?>