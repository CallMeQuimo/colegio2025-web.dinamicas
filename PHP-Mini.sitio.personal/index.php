<?php
// - - Ejercicio: Variables, echo, condicionales y var_dump

// 1. Declaramos las variables con datos personales
$nombre = "Giliberta Anacarda";
$edad = 14;
$ciudad = "Córdoba";
$estadoCivil = "soltera";

// 2. Mostramos una frase con esos datos
echo "Hola, soy $nombre, tengo $edad años, vivo en $ciudad y estoy $estadoCivil.<br>";

// 3. Condicional para mostrar mensaje según la edad
if ($edad < 18) {
    echo "Soy menor de edad.<br>";
}
else
if($edad <= 60) {
    echo "Soy adulto.<br>";
}
else{
    echo "Soy adulto mayor.<br>";
}

// 4. Mostramos el tipo de todas las variables con var_dump()
echo "<br>Tipos de variables:<br>";

var_dump($nombre);  // string
echo "<br>";
var_dump($edad);    // int
echo "<br>";
var_dump($ciudad);  // string
echo "<br>";
var_dump($estadoCivil); // string
echo "<br><br>";

$intereses = ["Snowboarding", "Teatro", "Tejer", "Dibujar", "Skiar"];

echo "Intereses:<br>";
foreach($intereses){
    echo $intereses;
}
?>