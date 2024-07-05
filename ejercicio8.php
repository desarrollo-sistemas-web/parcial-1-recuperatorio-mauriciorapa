<?php

// Ejercicio 8:  Crea una función llamada calcularPromedio que tome un arreglo de números como parámetro y devuelva el promedio de esos números.
// Complejidad: BAJA (1 punto)

function calcularPromedio($numeros){
   $cantidad= count($numeros);
   $suma =array_sum($numeros);
echo $suma/$cantidad;
}

calcularPromedio([2,4]);