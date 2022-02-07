<?php
// ej 1
// tabla del 2 utilizando for

// for($i=0; $i <= 10; $i++) {
//     echo"2 * $i =" . (2*$i) .  "\n";
// }
// ej 2
// Un bucle while que cuente desde 100 hasta 85 (fíjate que en este caso es decreciente).

// $contador = 100;
// while($contador>85) {
//     echo $contador;
//     $contador --;
// }

// ej 3
/* Un bucle while que a partir de una variable $contador que toma valores de 1 a 5, muestre por pantalla 
el doble del valor de $contador, es decir, que muestre 2, 4, 6, 8, 10. */

// $contador = 5;
// while($contador > 0) {
//     echo ($contador*2) ."\n";
//     $contador --;
// }

//  ej 4
/*Utilizando un while haremos un programa que tire una moneda 
(seleccionará un número al azar que puede ser 0 o 1) 
hasta que saque 5 veces cara (el número 1). 
Al terminar, debe imprimir cuántos tiros de monedas llevó obtener 5 veces cara.*/


// $caras = 1;
// $intentos = 0;
// while($caras < 5){
//     $intentos ++;
//     echo "Intento: $intentos \n";
//     $dado = mt_rand(0,1);
//     if($dado){
//         echo "Es Cara \n";
//         $caras++;
//     }else {
//         echo "Cruz \n";
//     }
// }
// echo "Se tardaron $intentos intentos para lograr $caras caras";

// Otra forma:

// $moneda = 0;
// $cara = 0;
// $cruz = 0;
// $contador_moneda = 0;

// while($caras <= 5){
//     $moneda = rand(0, 1);
//     echo "Salio $moneda \n";
//     switch ($moneda) {
//         case '0':
//             $cruz++;
//             $contador_moneda++;
//             break;
//         case '1':
//             $cara++;
//             $contador_moneda++;
//             break; 
//     };
// };
// echo "Se tardaron $contador_moneda para llegar a 5 caras ";

// ej 5
/*Definir un array con 10 números aleatorios entre 0 y 10. Recorrer este array para imprimir todos los números. 
La ejecución debe terminarse si alguno de los números encontrados es un 5 (Se debe imprimir “Se encontró un 5!”) */

// $miArray = [8, 2, 3, 5, 7, 1, 9, 10 ];
// print_r($miArray);

// for ($i =1; $i <= 10; $i++){
//     if ($i == 5){
//         break;
//     }
//     echo "Se encontro un 5 \n";

// }

// ej 6
/* Definir un array con 10 números aleatorios entre 0 y 100. 
Recorrer este array contando cuantos números son pares.*/


// $miArray = [8, 2, 3, 5, 7, 1, 9, 10, 50, 30 ];



// for ($i = 1; $i <= 10; $i++) {
//     if($i%2 == 0){
    

//     }
    
// }
// echo "la suma de los numeros pares es" .  ;

// ej 7
/*Definir una variable $mascota que sea un array asociativo
    a. En el índice animal debe decir qué animal es.
    b. En el índice edad debe decir la edad.
    c. En el índice altura debe decir la altura.
    d. En el índice nombre debe decir el nombre
    e. Recorrer los valores del array con un foreach imprimiendo (como ejemplo):

         animal: perro
         edad: 5
         altura: 0,60
         nombre: Sonic
*/

$mascota = [
    'animal:' => 'perro',
    'edad:' => '10',
    'altura:' => '0,60',
    'nombre:' => 'Sonic',
];
$animal = " ";
$edad = " ";
$altura = " ";
$nombre = " ";

foreach ($mascota as $animal => $edad) {
    
    echo $animal.' '. $edad . ' ' . $altura .' ' . $nombre .' ' . "<br>";


    # code...
}











    
    






 
