<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Berarducci Gianluca">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>punto 3</title>
</head>
<body>
    <header class="centrar_Horizontal">
        <h1>signo del zodiaco</h1>
    </header>
    <section class="centrar_Horizontal">
        <article class="centrar_Vertical">
            <?php
                $mes=mt_rand(1,12);
                switch ($mes) {// this switch can be optimized but loses readability
                    case 1:
                        $dia=mt_rand(1,31);
                        echo '<h2>Fecha: '.$dia.'/'.$mes.'</h2>';
                        if ($dia<=19) {
                            echo '<h2>Signo zodiacal: Capricornio</h2>';
                        }
                        else {
                            echo '<h2>Signo zodiacal: Acuario</h2>';
                        }
                        break;
                    case 2:
                        $dia=mt_rand(1,28);
                        echo '<h2>Fecha: '.$dia.'/'.$mes.'</h2>';
                        if ($dia<=19) {
                            echo'<h2>Signo zodiacal: Acuario</h2>';
                        }
                        else {
                            echo'<h2>Signo zodiacal: Piscis</h2>';
                        }
                        break;
                    case 3:
                        $dia=mt_rand(1,31);
                        echo '<h2>Fecha: '.$dia.'/'.$mes.'</h2>';
                        if ($dia<=20) {
                            echo'<h2>Signo zodiacal: Piscis</h2>';
                        }
                        else {
                            echo'<h2>Signo zodiacal: Aries</h2>';
                        }
                        break;
                    case 4:
                        $dia=mt_rand(1,30);
                        echo'<h2>Fecha: '.$dia.'/'.$mes.'</h2>';
                        if ($dia<=20) {
                            echo'<h2>Signo zodiacal: Aries</h2>';
                        }
                        else {
                            echo'<h2>Signo zodiacal: Tauro</h2>';
                        }
                        break;
                    case 5:
                        $dia=mt_rand(1,31);
                        echo'<h2>Fecha: '.$dia.'/'.$mes.'</h2>';
                        if ($dia<=20) {
                            echo'<h2>Signo zodiacal: Tauro</h2>';
                        }
                        else {
                            echo'<h2>Signo zodiacal: Geminis</h2>';
                        }
                        break;
                    case 6:
                        $dia=mt_rand(1,30);
                        echo'<h2>Fecha: '.$dia.'/'.$mes.'</h2>';
                        if ($dia<=21) {
                            echo'<h2>Signo zodiacal: Geminis</h2>';
                        }
                        else {
                            echo'<h2>Signo zodiacal: Cáncer</h2>';
                        }
                        break;
                    case 7:
                        $dia=mt_rand(1,31);
                        echo'<h2>Fecha: '.$dia.'/'.$mes.'</h2>';
                        if ($dia<=22) {
                            echo'<h2>Signo zodiacal: Cáncer</h2>';
                        }
                        else {
                            echo'<h2>Signo zodiacal: Leo</h2>';
                        }
                        break;
                    case 8:
                        $dia=mt_rand(1,31);
                        echo'<h2>Fecha: '.$dia.'/'.$mes.'</h2>';
                        if ($dia<=23) {
                            echo'<h2>Signo zodiacal: Leo</h2>';
                        }
                        else {
                            echo'<h2>Signo zodiacal: Virgo</h2>';
                        }
                        break;
                    case 9:
                        $dia=mt_rand(1,30);
                        echo'<h2>Fecha: '.$dia.'/'.$mes.'</h2>';
                        if ($dia<=23) {
                            echo'<h2>Signo zodiacal: Virgo</h2>';
                        }
                        else {
                            echo'<h2>Signo zodiacal: Libra</h2>';
                        }
                        break;
                    case 10:
                        $dia=mt_rand(1,31);
                        echo'<h2>Fecha: '.$dia.'/'.$mes.'</h2>';
                        if ($dia<=22) {
                            echo'<h2>Signo zodiacal: Libra</h2>';
                        }
                        else {
                            echo'<h2>Signo zodiacal: Escorpio</h2>';
                        }
                        break;
                    case 11:
                        $dia=mt_rand(1,30);
                        echo'<h2>Fecha: '.$dia.'/'.$mes.'</h2>';
                        if ($dia<=22) {
                            echo'<h2>Signo zodiacal: Escorpio</h2>';
                        }
                        else {
                            echo'<h2>Signo zodiacal: Sagitario</h2>';
                        }
                        break;
                    default:
                        $dia=mt_rand(1,31);
                        echo'<h2>Fecha: '.$dia.'/'.$mes.'</h2>';
                        if ($dia<=21) {
                            echo'<h2>Signo zodiacal: Sagitario</h2>';
                        }
                        else {
                            echo'<h2>Signo zodiacal: Capricornio</h2>';
                        }
                        break;
                }                
            ?>
        </article>
    </section>
</body>
</html>