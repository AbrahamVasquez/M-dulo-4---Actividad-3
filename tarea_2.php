<?php 

/* 1. Problema de Lista Invertida:
Escribe un programa que tome un array de números 
y devuelva una nueva lista que contenga los mismos elementos en orden inverso. */

function invertedList($arr) {

 return array_reverse($arr); // We use array_reverse 
}

$example = array( 1, 2, 3, 4, 5, 6, 7, 8, 9, 10 ); // Input
$result = invertedList($example); // We create a varibale to save the final array rerverte

 print_r($result);

 /* 2. Problema de Suma de Números Pares:
Crea un script que sume todos los números pares en un array de números enteros. */

function sumarPares($array) {

    $sum = 0; // Inicia una variable "sum" en 0 que almacenara la suma final de los num pares

    foreach ($array as $number) { // En cada iteración, el valor del elemento actual se almacena en la variable $number

        if ($number % 2 == 0) { // Uso la formula para sacar los num enteros y devuelvo el valor de $sum
             $sum += $number;
        }
    }

    return $sum;

}

$enteros = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10); // Ejemplo de uso
$result = sumarPares($enteros); 

echo($result);

/* 3. Problema de Frecuencia de Caracteres:
Implementa una función que tome una cadena de texto 
y devuelva un array asociativo que muestre la frecuencia de cada carácter en la cadena. */

function frecuenciaCaracteres($text) { // Lo habia hecho usando forEach primero pero encontre una forma mejor para simplificar el codigo

    // Convertir la cadena a minúsculas
    $text = strtolower($text);

    $array = str_split($text); // Separamos la cadena en un array de caracteres

    $frecuencia = array_count_values($array); // Cuenta la frecuencia de cada caracter

    return $frecuencia;

}

echo "<pre>"; 
print_r(frecuenciaCaracteres('Si señor, vamos los pibes!'));
echo "</pre>";


/* 4.Problema de Bucle Anidado:
Escribe un programa que utilice bucles anidados para imprimir un patrón de asteriscos en forma de pirámide. */

function drawPyramid($height) {

    for ($i = 1; $i <= $height; $i++) {
        for ($space = $height - $i; $space > 0; $space--) { // Print blank spaces for each of the lines between
            echo " ";
        }
        for($pointers = 1; $pointers <= 2 * $i - 1; $pointers++ ) { // Will draw asterisks by multiplying $i * 2 
            echo "*";
        }
            echo "\n"; // Salto de linea/Line break" to draw final Pyramid
    }
}

drawPyramid(15);


?>
