<?php
include('../html/header.html');//incluyo el header para tener una pag web correcta
?>
<main>
    <section class="centrar_Horizontal">
        <article class="centrar_Vertical">
            <?php
                 if (!empty($_POST['usuario']) && !empty($_POST['contrasenia'])) {
                    $usuario=$_POST['usuario'];
                    $password=$_POST['contrasenia'];
                    echo '<h3 class="espacio">Usuario: '.$usuario.'</h3>';
                    echo'<h3 class="espacio">Contraseña: '.$password.'</h3>';
                 }
            ?>
        </article>
    </section>
</main>
<?php
include('../html/footer.html');
?>