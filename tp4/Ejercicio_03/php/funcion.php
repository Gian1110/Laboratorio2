<?php
function invertir($numero)
{
    $numero2=0;
    while ($numero>1) {
        $aux=$numero%10;
        $numero2=$numero2*10+$aux;
        $numero=$numero/10;
    }
    return $numero2;
}
?>