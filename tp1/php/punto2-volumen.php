<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Berarducci Gianluca">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>punto 2</title>
</head>
<body>
    <header class="punto2"><h1>volumen del Cono</h1></header>
<section>
    <article class="punto2">
        <?php
            $CPI=3.1415927;
            $inicio=0;
            $fin=10000;
            $radio=mt_rand($inicio,$fin);
            $altura=mt_rand($inicio,$fin);
            $volumen=($CPI*$altura*$radio**2)/3;
            echo'<p>'.'el radio es: '.$radio.'<br>'.' la altura es: '.$altura.'<br>'.' el volumen es: '.$volumen.'</p>';
        ?>
    </article>
</section>
<aside class="asi">
        <a href="../"><h2>atras</h2></a>
    </aside>
<footer>
</footer>
</body>
</html>