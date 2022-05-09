<?php
function mostrar ($nombreArchivo)
{
	$ubicacion='txt/';
    $archivo = fopen($ubicacion.$nombreArchivo,'r');
    while (!feof($archivo)){
        $fila=fgets($archivo);
        $fechaActual=date('d');
        if($fila != ''){
            $separado=explode(';',$fila);
            $fecha=date_create($separado[3]);
            $mes=mes(date_format($fecha,'m'));
            $fechaNac=date_format($fecha,'d').' de '.$mes.' de '.date_format($fecha,'Y');
            if (date_format($fecha,'m')==date('m') && date_format($fecha,'d')==date('d')) {
                echo'<img class="torta" src="img/torta.png" alt="torta">';
            }
            echo '<h2 class="espacio">'.$separado[1].','.$separado[0].'</h2>';
            echo'<p class="espacio">Mail:'.$separado[2].'</p>';
            echo'<p class="espacio">Fecha de Nacimiento: '.$fechaNac.'</p><hr>';
        }
    }
    fclose($archivo);
}
function mes ($numbMes)
{
    switch ($numbMes) {
        case '1':
            $dia='enero';
            break;
        case '2':
            $dia='febrero';
            break;
        case '3':
            $dia='marzo';
            break;
        case '4':
            $dia='abril';
            break;
        case '5':
            $dia='mayo';
            break;
        case '6':
            $dia='junio';
            break;
        case '7':
            $dia='julio';
            break;
        case '8':
            $dia='agosto';
            break;            
        case '9':
            $dia='septiembre';
            break;
        case '10':
            $dia='octubre';
            break;
        case '11':
            $dia='noviembre';
            break;
        case '12':
            $dia='diciembre';
            break;
        default:
            $dia='no cargo un mes entre 1 y 12';
            break;
    }
    return $dia;
}
?>