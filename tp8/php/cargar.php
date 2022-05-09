<?php
     session_start();
     include('header.php');
    if(!empty($_POST['usuario']) && !empty($_POST['contrasenia']) && !empty($_POST['mail']) && !empty($_POST['fecha_alta']) && !empty($_POST['tipo'])){
        include 'conexion.php';
        $conexion=conectar();
        if ($conexion) {
            $user = $_POST['usuario'];
            $clave = sha1($_POST['contrasenia']);
            $mail = $_POST['mail'];
            $fecha = $_POST['fecha_alta'];
            $TIPO =  $_POST['tipo'];
            if (!empty($_FILES['foto']['size'])) {
                $foto=$user.'.jpg'; 
                $fot='../fotos/'.$foto;
                $rutaOrigen=$_FILES['foto']['tmp_name'];
                $move=move_uploaded_file($rutaOrigen,$fot);
            }
            else {
                $foto='avatar_default.png';
            }
            if(strlen($user)<=80 && strlen($_POST['contrasenia'])<=40 && strlen($mail)<=80 && strlen($TIPO)<=15  && strlen($foto)<=40){
                $consulta= "INSERT INTO usuarios (usuario,contrasenia, mail, fecha_alta,tipo,foto) VALUES ('$user','$clave','$mail','$fecha','$TIPO','$foto')";
                $resultado= mysqli_query($conexion,$consulta);
            }
            else{
                $resultado=0;
            }
            if ($resultado) {
                echo 'guarado con exito';
            }
            else {
                echo 'fallo al guardar';
            }
            desconectar($conexion);
        }
    }
    else {
        echo 'fallo al guardar';
    }
    header('refresh:3; url=lista_usuarios.php');
    include('../html/footer.html');
?>