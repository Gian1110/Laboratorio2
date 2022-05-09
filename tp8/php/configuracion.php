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
    <section class="centrar_Vertical">
        <h2 class="centro">Configuracion</h2>
        <form action="guardarDisenio.php" method="POST" class="centro">
           <label for="clasic" > <input type="radio" name="disenio" value="clasic"> Clasico </label>
           <img src="../fotos/clasico.jpg" alt="" class="miniatura">
           <label for="moderno"> <input type="radio" name="disenio" value="model">Moderno</label>
           <img src="../fotos/moderno.jpg" alt="" class="miniatura">
            <section class="centrar_Horizontal">
                <input type="submit" value="Guardar cambios" id="guardarCambio">
                <a href="lista_usuarios.php" id="cancelar"> Cancelar</a>
            </section>
           
        </form>
    </section>
</main>
<?php
    include('../html/footer.html');
?>