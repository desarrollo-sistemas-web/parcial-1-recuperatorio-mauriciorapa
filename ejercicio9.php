<?php

// Ejercicio 9:  Escribe una función llamada esDivisible que tome dos números enteros como parámetros y determine si el primero es divisible por el segundo. La función debe devolver true si es divisible y false si no lo es.

// Complejidad: BAJA (1 punto)

function esDivisible($numero1,$numero2 ){
    if (($numero1%$numero2)==0) {
    echo "$numero1 es divisible por $numero2";
    }
   
}

