<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Berarducci Gianluca">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>punto1</title>
</head>
<body>
    <section class="centrar_Horizontal">
        <article class="centrar_Vertical">
        <?php
                $name="Gianluca";
                $age=23;
                echo '<h1> !Hola '.$name.'!</h1>';
                if($age>=18){
                    echo '<h1>Tienes '.$age.' años, eres mayor de edad</h1>';
                }
                else{
                    echo '<h1>Tienes '.$age.' años, eres menor de edad</h1>';
                }

            ?>
        </article>
    </section>
</body>
</html>