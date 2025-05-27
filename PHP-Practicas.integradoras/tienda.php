<?php
// - - Ejercicio: Arrays, bucles, operaciones, condicionales y salida de datos

// 1. Declaramos un array asociativo con productos y sus precios
$productos = [
    "mouse gamer" => 3500,
    "teclado mecánico" => 6000,
    "monitor 24 pulgadas" => 22000,
    "alfombrilla RGB" => 1500,
    "auriculares" => 4800
];

// 2. Mostramos cada producto y su precio con un foreach
echo "Lista de productos disponibles:<br>";
foreach ($productos as $producto => $precio) {
    echo "- $producto: \$$precio<br>";
}

// 3. Simulamos una compra eligiendo 3 productos
$carrito = [
    "mouse gamer",
    "auriculares",
    "alfombrilla RGB"
];

// 4. Calculamos el total de la compra
$total = 0;
foreach ($carrito as $item) {
    $total += $productos[$item];
}

// 5. Condicional para definir si tiene envío gratis
if ($total > 5000) {
    echo "<br>¡Obtenés envío gratis!<br>";
    $envio = 0;
} else {
    echo "<br>El envío cuesta \$500.<br>";
    $envio = 500;
}

// 6. Sumamos el envío al total final y lo mostramos
$totalFinal = $total + $envio;
echo "Total final de la compra: \$$totalFinal<br>";
?>
