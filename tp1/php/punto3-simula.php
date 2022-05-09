<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Berarducci Gianluca">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>punto3</title>
</head>
<body>
    <?php
        $inicio=1;
        $fin=10000;
        $producto_1=mt_rand($inicio*10,$fin*10)/10;
        $producto_2=mt_rand($inicio*10,$fin*10)/10;
        $producto_3=mt_rand($inicio*10,$fin*10)/10;
        $suma=$producto_1+$producto_2+$producto_3;
        define('iva',21*$suma/100);
        $total_iva=round($suma+iva,1);
        define('descuento',15*$total_iva/100);
        $total_descuento=round($total_iva-descuento,1);
    ?>
    <section class="centrar">
        <article class="borde">
            <?php
                echo'<p>'.'-------SIMULACION DE COMPRAS -------'.'</p>';
                echo'<p>'.'valor de IVA: 21%'.'<br>';
                echo'valor de DESCUENTO: 15%'.'</p>';
                echo'<p>'.'valor del primer producto sin IVA: $'.$producto_1.'<br>';
                echo'valor del segundo producto sin IVA: $'.$producto_2.'<br>';
                echo'valor del tercer producto sin IVA: $'.$producto_3.'</p>';
                echo'<p>'.'Total sin IVA: $'.$suma.'<br>';
                echo'total aplicando IVA: $'.$total_iva.'</p>';
                echo'<p>'.'total aplicando despuescto del 15%: $'.$total_descuento.'</p>';
            ?>
        </article>
    </section>
    <aside class="asi">
        <a href="../"><h2>atras</h2></a>
    </aside>
</body>
</html>