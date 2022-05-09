<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" const="Berarducci Gianluca">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>punto 4</title>
</head>
<body>
    <?php
        $name='Berarducci Gianluca';
        define('APORTE_JUBILATORIO',13); //variable to calculate aporte jubilatorio to discount
        define('OBRA_SOCIAL',3.5);//variable to calculate obra social to discount
        $sueldoBruto=mt_rand(20000,50000); //sueldo random
        $aporteJubilatorioDescontar=$sueldoBruto*APORTE_JUBILATORIO/100;//calculate aporte jubilatorio
        $obraSocialDescontar=$sueldoBruto*OBRA_SOCIAL/100;//calculate obra social
        $sueldoNeto=$sueldoBruto-$aporteJubilatorioDescontar-$obraSocialDescontar;//calculate sueldo neto
    ?>
    <section class="centrar">
        <article class="borde">
                <?php //open php
                    echo'<h1>'.'RECIBO DE SUELDO'.'</h1>';
                    echo'<h4>Empleado/a '.$name.'</h4>';
                    echo'<hr>';
                    echo'<p>'.'Sueldo Bruto: $'.$sueldoBruto.'</p>';
                    echo'<p>'.'Aporte Jubilatorio: $'.$aporteJubilatorioDescontar.'</p>';
                    echo'<p>'.'Obra Social: $'.$obraSocialDescontar.'</p>';
                    echo'<hr>';
                    echo'Sueldo Neto: $'.$sueldoNeto;
                ?> <!--close php-->
        </article>
    </section>
    <aside class="asi">
        <a href="../"><h2>atras</h2></a>
    </aside>
</body>
</html>