<?php
// - - Introducción a PHP
/* 
1- Investigar qué significa que PHP sea un lenguaje del lado del servidor.
Quiere decir que el código de PHP sólo se ejecuta en el servidor, no en el cliente. Esto permite mayor privacidad y seguridad sobre la información que maneja el servidor en sí.

2- Escribir un comentario explicando para qué sirve PHP.
Similar a JS. Es una parte dinámica de la página web que puede comunicarse con el servidor, hacer formularios, Etc.
Se diferencian principalmente por cómo funciona. PHP al ejecutarse en el servidor es más seguro, y eso lo hace capaz de conectarse directamente con una base de datos. Aparte se suele usar para cargar los datos de una página principalmente, después para cosas interactivas se suele usar JS.

Más concretamente, PHP se usa para la gestión de formularios, comunicarse con bases de datos, autenticación/sesiones, APIs y automatización de tareas(como enviar un mail).

3- Buscar ejemplos de sitios conocidos que usan PHP.
* Wordpress.
* Wikipedia.
* Facebook.
* Tumblr.

4- Instalar XAMPP o similar y ejecutar un archivo PHP con el texto Hola mundo.
*/

echo "hola mundo!<br>";
echo "<br>";    
?>

<?php
// - - Ejercicios de sintáxis básica
// 1. Escribir un script que muestre tu nombre usando echo.
echo "Quimey Ocampo<br>";
echo "<br>";

// 2. Crear un archivo PHP con tres instrucciones simples (echo, comentario, variable).

$prof = "Martinez";

echo "Hola $prof!<br>";
echo "<br>";

// 4. Probar qué sucede si omitís el punto y coma.
?>


<?php
// 1. Crear tres variables: nombre, edad y ciudad.
$nombre = "Quimo";
$edad = 18;
$ciudad = "Buenos Aires";
echo "<br>";

// 2. Mostrar un mensaje usando esas variables.
echo "Hola! Me llamo $nombre, tengo $edad años y vivo en $ciudad.<br>";
echo "<br>";

// 3. Cambiar el valor de una variable y volver a mostrar el mensaje.
$nombre = "Quimey D. Leguizamón Ocampo";
echo "Hola! Me llamo $nombre, tengo $edad años y vivo en $ciudad.<br>";
echo "<br>";

// 4. Concatenar dos variables en un solo echo.
$saludo = "Bienvenido, ";

echo "<br>",$saludo,$prof;
echo "<br>";
?>

<?php
// - - Ejercicios de Echo / Print

// 1. Mostrar tu nombre y edad usando echo.
echo "Nombre: Quimey Ocampo<br>";
echo "Edad: 18<br>";
echo "<br>";

// 2. Mostrar una frase usando print.
print "Lorem ipsum dolor sit amet<br>";
echo "<br>";

// 3. Combinar texto y variables en una sola línea con echo.
echo "Hola, me llamo $nombre y tengo $edad años.<br>";
echo "<br>";

// 4. Mostrar múltiples líneas de texto con echo.
echo "Línea 1<br>Línea 2<br>Línea 3<br>";
echo "<br>";
?>

<?php
// - - Ejercicios de Tipos de datos

// 1. Crear una variable de cada tipo y mostrarla.
$string = "texto";
$integer = 10;
$float = 3.14;
$boolean = true;
$array = ["uno", "dos", "tres"];
echo "<br>";

// 2. Usar var_dump() para ver los tipos de cada variable.
var_dump($string);
echo "<br>";
var_dump($integer);
echo "<br>";
var_dump($float);
echo "<br>";
var_dump($boolean);
echo "<br>";
var_dump($array);
echo "<br>";
echo "<br>";

// 3. Convertir un número en string y viceversa.
$num = 123;
$str = (string)$num;
$num2 = (int)$str;
echo "<br>";

// 4. Probar sumar un número entero y un decimal.
$suma = $integer + $float;
echo "Suma entero con decimal: $suma<br>";
echo "<br>";
?>

<?php
// - - Ejercicios de Strings, Números y Arrays

// 1. Crear un string y mostrar su longitud con strlen().
$frase = "Hola mundo";
echo "Longitud de 'hola mundo': " . strlen($frase) . "<br>";

// 2. Crear una operación matemática con variables numéricas.
$a = 10;
$b = 5;
$resultado = $a * $b;
echo "Multiplicación: $resultado<br>";
echo "<br>";

// 3. Crear un array con tus 5 comidas favoritas.
$comidas = ["pizza", "sushi", "empanadas", "pollo", "asado"];
echo "Mis comidas favoritas on:<br>";
for($i=0 ; $i<5 ; $i++){
    echo $comidas[$i]."<br>";
}
echo "<br>";

// 4. Mostrar el segundo elemento del array.
echo "Segunda comida favorita: " . $comidas[1] . "<br>";
echo "<br>";
?>

<?php
// - - Ejercicios de Condicionales

// 1. Escribir un script que diga si sos mayor o menor de edad.
if ($edad >= 18) {
    echo "Soy mayor de edad; ";
} else {
    echo "Soy menor de edad; ";
}

// 2. Crear una condición con else if para diferentes rangos de edad.
if($edad < 13) {
    echo "un niño.<br>";
}
else
if($edad < 18) {
    echo "un adolescente.<br>";
}
else{
    echo "un adulto.<br>";
}
echo "<br>";


// 3. Usar switch para mostrar un mensaje según el día de la semana.
$dia = "lunes";

switch ($dia) {
    case "lunes":
        echo "Es lunes, inicio de semana.<br>";
        break;
    case "viernes":
        echo "Es viernes, casi finde.<br>";
        break;
    case "domingo":
        echo "Es domingo, a descansar.<br>";
        break;
    default:
        echo "Es un día normal.<br>";
}
echo "<br>";

// 4. Combinar condiciones con && y ||.
$esEstudiante = true;
$tieneDescuento = false;

if ($esEstudiante && !$tieneDescuento) {
    echo "Tenés que pedir tu descuento.<br>";
}

if ($esEstudiante || $tieneDescuento) {
    echo "Tenés algún beneficio.<br>";
}
echo "<br>";
?>

<?php
// - - Ejercicios de Bucles

// 1. Crear un bucle while que cuente del 1 al 10.
$i = 1;
while ($i <= 10) {
    echo "Número: $i<br>";
    $i++;
}
echo "<br>";

// 2. Crear un bucle for que muestre los números pares del 2 al 20.
for ($j = 2; $j <= 20; $j += 2) {
    echo "$j ";
}
echo "<br><br>";

// 3. Recorrer un array de nombres con foreach.
$nombres = ["Ana", "Juan", "Luis", "Carla"];
foreach ($nombres as $nombre) {
    echo "Hola, $nombre!<br>";
}

// 4. Usar break y continue dentro de un bucle.
for ($k = 1; $k <= 10; $k++) {
    if ($k == 5) {
        continue; // salta el 5
    }
    if ($k == 8) {
        break; // corta en 8
    }
    echo "Valor: $k<br>";
}
?>

