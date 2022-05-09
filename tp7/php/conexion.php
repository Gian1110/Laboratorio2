<?php
    function conectar()
    {
        $servidor= 'localhost';
        $usuario= 'root';
        $clave='123456';//cambiar la contraseña caso de no tener
        $db='peliculas';
        $conexion= mysqli_connect($servidor,$usuario,$clave,$db);
        if(!$conexion){
            echo'<h2>conexion fallida</h2>';
        }
        else{
            return $conexion;
        }
    }
    function desconectar($conexion)
    {
        if ($conexion) {
            $desconectar= mysqli_close($conexion);
           /* if ($desconectar) {
                echo'<h2>Desconexion exitosa</h2>';
            }
            else{
                echo'<h2>Error al intentar desconectar</h2>';
            }*/
        }
        else {
            echo'<h2>no se puede desconectar, ya que no existe conexion</h2>';
        }
    }
?>