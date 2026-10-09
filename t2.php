<?php

$numero = rand(1,100);
echo "El numero aletaorio es: $numero" . "<br>";

if($numero <= 50){
    echo "El numero es menor de 50" . "<br>";
} elseif($numero == 50) {
echo "El numero es igual a 50";
} else{
    echo "El numero es mayor de 50";
}
?>