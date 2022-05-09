<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Berarducci Gianluca">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>punto 4</title>
</head>
<body>
    <section class="centrar_Horizontal"> 
        <article class="centrar_Vertical">
            <?php
               echo'<h1 class="grande">'.'Patente generada:'.'</h1>';
               define('constante','AE');
               $number=mt_rand(1,999);
               $LetraNumero1=mt_rand(70,90);
               $letra1=chr($LetraNumero1);
               $LetraNumero2=mt_rand(70,90);
               $letra2=chr($LetraNumero2);
               if ($number<=9) {
                echo '<h2>'.constante.' 00'.$number.' '.$letra1.$letra2.'</h2>';
               }
               elseif ($number>=10 && $number<=99) {
                echo '<h2>'.constante.' 0'.$number.' '.$letra1.$letra2.'</h2>';
               }
               else {
                echo '<h2>'.constante.' '.$number.' '.$letra1.$letra2.'</h2>';
               } 
            ?>
        </article>
    </section>
</body>
</html>