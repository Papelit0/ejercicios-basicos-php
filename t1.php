<?php

declare(strict_types=1);

$a = rand(1, 100);
$b = rand(1, 100);
$c = rand(1, 100);

echo " A = $a , A = $b, C = $c";
echo "<br>";

if ($a === $b && $b == $c) {
    echo "Todos los numeros son iguales";
} else if ($a === $b) {
    if ($c > $a) {
        echo "A y B: $b son iguales, C:$c es mayor";
    } else echo "A y B: $b son iguales, C:$c es menor";
} else if ($a === $c) {
    if ($b > $c) {
        echo "A y C: $c son iguales, B:$b es mayor";
    } else echo "A y C: $c son iguales, B: $b es menor";
} else if ($b === $c) {
    if ($a > $b) {
        echo " B y C: $c son iguales, A: $a es mayor";
    } else echo "B y C: $c son iguales, A: $a es menor";
} else {
    if ($a > $b && $b > $c) {
        echo "El numero mayor es A: $a, el numero intermedio es B: $b y el ultimo numero es menor es C: $c";
    } else if ($b > $c && $c > $a) {
        echo "El numero mayor es B: $b, el numero intermedio es C: $c y el ultimo numero es menor es A: $a ";
    } else if ($c > $a && $a > $b) {
        echo "El numero mayor es C: $c, el numero intermedio es A: $a y el ultimo numero es menor es B: $b";
    } else if ($b > $a && $a > $c) {
        echo "El numero mayor es B: $b, el numero intermedio es A: $a y el ultimo numero es menor es C: $c";
    } else if ($c > $b && $b > $a) {
        echo "El numero mayor es C: $c, el numero intermedio es B: $b y el ultimo numero es menor es A: $a";
    } else if ($a > $c && $c > $b) {
        echo "El numero mayor es A: $a, el numero intermedio es C: $c y el ultimo numero es menor es B: $b";
    }
}
