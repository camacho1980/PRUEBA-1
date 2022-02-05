<?php

$nombre = "Jorge Arguello";
echo "<br>";

echo $nombre;

echo "<br>";

// concatena .=

$nombre .= "Soy yo";

echo "<br>";

// da mas informacion
var_dump($nombre);
echo "<br>";

// muestra el contenido solamente
print_r($nombre);


$numero1 = 15;
$numero2 = 23;
echo "<br>";
echo "La suma de los numeros da: " . ($numero1 + $numero2);
echo "<br>";
echo "La resta de los numeros da: " . ($numero1-$numero2);
echo "<br>";
echo "La multiplicacion de los numeros da: " . $numero1*$numero2;
echo "<br>";
echo "La divicion de los numeros da: " . $numero1/$numero2;
echo "<br>";
//compara si son iguales
var_dump($numero1==$numero2);
echo "<br>";
//compara si son distintos true o false
var_dump($numero1 != $numero2);
echo "<br>";

if($numero1 < $numero2 && $numero2 > 0){
        echo "no me gustan los negativos";
    } else {
        echo "La resta de los numeros da: " . $numero1-$numero2;
    }

if ($numero1<$numero2){
    echo "no me gustan los negativos";
} else {
    echo "La resta de los numeros da: " . ($numero1-$numero2);
}
echo "<br>";

//definicion de la funcion

function sumar($operando1,$operando2) {
    return $operando1+$operando2;
}
echo "<br>";
echo sumar (12,30);
echo "<br>";
echo sumar($numero1,$numero2);

function restar($operando1,$operando2) {
    return $operando1 - $operando2;
}
echo "<br>";
echo restar (12,30);
echo "<br>";
echo restar ($numero1,$numero2);

function multiplica($operando1,$operando2) {
    return $operando1 * $operando2;
}
echo "<br>";
echo multiplica (12,30);
echo "<br>";
echo multiplica ($numero1,$numero2);

function dividir($dividendo, $divisor) {
    if ($divisor == 0) {
        echo "no se puede dividir por 0";

    } else {
    
    echo "el resultado es:";
    return $dividendo / $divisor;
    }   
}
echo "<br>";
echo dividir ($numero2,$numero1);
echo "<br>";
echo dividir (10,0);
echo "<br>";


//calculadora

function calculadora($n1,$n2,$operacion) {
    return $operacion($n1,$n2);
}

echo calculadora(12,15,'sumar');

// echo "<br>";

// echo calculadora(17,3,'restar');

 













