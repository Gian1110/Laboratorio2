<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Berarducci Gianluca">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>punto 2</title>
</head>
<body>
    <section class="centrar_Horizontal">
        <article class="centrar_Vertical">
            <?php
                $nota1=mt_rand(1,10);
                $nota2=mt_rand(1,10);
                $promedio=($nota1+$nota2)/2;
                echo '<h2>la nota del primer parcial es: '.$nota1.'</h2>';
                echo '<h2>la nota del segundo parcial es: '.$nota2.'</h2>';
                echo '<h2>el promedo es:'.$promedio.'<h2>';
                if ($promedio<4) {
                    echo 'codicion final: Desaprobado';
                }
                elseif ($promedio>=4 && $promedio<7) {
                    echo'condicion final: Regular';
                }
                elseif($promedio>=7) {
                    echo'condicion final: Promocionado';
                }
            ?>
        </article>
    </section>
</body>
</html>