<?php
    session_start();
    include('header.php');
    include('menu.php');
?>
<nav class="dualnav">
    <?php
        menu(); 
     ?>
</nav>
<main class="dualmain"> 
    <section class="centrar_Horizontal">
        <form action="cargar.php" method="POST" enctype="multipart/form-data" class="centrar_Vertical">
            <!--usuario-->
            <section class="espacio">
            <label for="usuario">usuario: </label>
            <input type="text" id="usuarion" name="usuario" maxlength="60" required>
            </section>
            <!--contrasenia-->
            <section class="espacio">
            <label for="contrasenia">Contraseña: </label>
            <input type="text" id="contrasenian" name="contrasenia" maxlength="40" required>
            </section>
            <!--mail-->
            <section class="espacio">
            <label for="mail">mail: </label>
            <input type="text" id="mail" name="mail" maxlength="80" required>
            </section>
            <!--fecha_alta-->
            <section class="espacio">
            <label for="fecha_alta">fecha de alta: </label>
            <input type="date" id="fecha_alta" name="fecha_alta" required>
            </section>
            <!--tipo-->
            <section class="espacio">
            <label for="tipo">tipo: </label>
            <input type="text" id="tipo" name="tipo" maxlength="15" required>
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