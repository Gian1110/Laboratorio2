<?php
    if(!empty($_POST['usuario']) && !empty($_POST['contrasenia']) && !empty($_POST['mail']) && !empty($_POST['fecha_alta']) && !empty($_POST['tipo']) && !empty($_FILES['foto']['size'])){
        include 'conexion.php';
        $conexion=conectar();
        if ($conexion) {
            $user = $_POST['usuario'];
            $clave = sha1($_POST['contrasenia']);
            $mail = $_POST['mail'];
            $fecha = $_POST['fecha_alta'];
            $TIPO =  $_POST['tipo'];
            $rutaOrigen=$_FILES['foto']['tmp_name'];
            $foto=$user.'.jpg';
            $fot='../fotos/'.$foto;
            $move=move_uploaded_file($rutaOrigen,$fot);
            $consulta= "INSERT INTO usuarios (usuario,contrasenia, mail, fecha_alta,tipo,foto) VALUES ('$user','$clave','$mail','$fecha','$TIPO','$foto')";
            $resultado= mysqli_query($conexion,$consulta);
            if ($resultado && $move) {
                echo 'guarado con exito';
            }
            else {
                echo 'fallo al guardar';
            }
            desconectar($conexion);
        }
    }




?>