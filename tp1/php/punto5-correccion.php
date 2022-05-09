<!--falta el <!DOCTYPE html>,<meta name="viewport" content="width=device-width, initial-scale=1.0">,
falta ' en define, 
falta una a en la variable ValorDolarNcion;
falta punto y coma en echo '$valorPesos y en echo number_format($valordolarnacio,11,',','.') y en lugar de 11 va 2, 
asiga a una variable si misma (valortursita),
falta la letra o en valortustita en echo numer_formt($valrTusita,2,',','.'),
no respoeta tabuulacion-->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Berarducci Gianluca">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>punto5</title>
</head>
<body>
    <section class="centrar">
        <article class="borde">
            <?php
                define('DOLAR',78.13);
                define('IMPUESTO',30);
                echo'------ CAMBIO DE MONEDAS -----';
                echo'<br>';
                echo'<br>';
                echo'pesos a cambiar: $';
                $valorPesos= mt_rand(500,50000);
                echo $valorPesos;
                echo'<br>';
                echo'<br>';
                echo'Dolar BANCO NACION: U$S'; 
                $valorDolarNacion=$valorPesos/DOLAR;
                echo number_format($valorDolarNacion,2,',','.');
                echo'<br>';
                echo'dolar TURISTA: U$S ';
                $valorTurista=($valorPesos*(1-(IMPUESTO/100)))/DOLAR;
                echo number_format($valorTurista,2,',','.');
                echo'<br>';
            ?>
        </article>
    </section>
    <aside class="asi">
        <a href="../"><h2>atras</h2></a>
    </aside>
</body>
</html>