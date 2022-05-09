<?php
    include('../html/header.html');
    include('menu.php');
?>
<nav>
    <?php 
        menu(); 
     ?>
</nav>
<main > 
    <section class="centrar_Horizontal">
        <form action="cargar.php" method="POST" enctype="multipart/form-data" class="centrar_Vertical">
            <!--usuario-->
            <section class="espacio">
            <label for="usuario">usuario: </label>
            <input type="text" id="usuario" name="usuario" required>
            </section>
            <!--contrasenia-->
            <section class="espacio">
            <label for="contrasenia">Contraseña: </label>
            <input type="text" id="contrasenia" name="contrasenia" required>
            </section>
            <!--mail-->
            <section class="espacio">
            <label for="mail">mail: </label>
            <input type="text" id="mail" name="mail" required>
            </section>
            <!--fecha_alta-->
            <section class="espacio">
            <label for="fecha_alta">fecha de alta: </label>
            <input type="date" id="fecha_alta" name="fecha_alta" required>
            </section>
            <!--tipo-->
            <section class="espacio">
            <label for="tipo">tipo: </label>
            <input type="text" id="tipo" name="tipo" required>
            </section>
            <!--foto-->
            <section class="espacio">
            <label for="foto">foto </label>
            <input type="file" id="foto" name="foto">
            </section>
            <input type="submit" value="guardar" id="guardar">
        </form>
    </section>
</main>
<?php
    include('../html/footer.html');
?>