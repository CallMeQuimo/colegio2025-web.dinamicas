<?php
// - - Ejercicio: switch, bucles, arrays y condicionales combinadas

// 1. Array asociativo con días de la semana y una comida favorita para cada día
$menuSemanal = [
    "lunes" => "empanadas",
    "martes" => "tarta de verduras",
    "miércoles" => "milanesas con puré",
    "jueves" => "ñoquis",
    "viernes" => "hamburguesas",
    "sábado" => "asado",
    "domingo" => "ensalada completa"
];

// 2. Variable que define el día actual (simulado)
$dia = "jueves";

// 3. Switch para mostrar la comida del día
echo "Comida para el día $dia:<br>";
switch ($dia) {
    case "lunes":
    case "martes":
    case "miércoles":
    case "jueves":
    case "viernes":
    case "sábado":
    case "domingo":
        echo $menuSemanal[$dia] . "<br>";
        break;
    default:
        echo "Día no válido<br>";
}

// 4. Foreach para listar todo el menú semanal
echo "<br>Menú semanal completo:<br>";
foreach ($menuSemanal as $diaSemana => $comida) {
    echo ucfirst($diaSemana) . ": $comida<br>";
}

// 5. For para contar cuántas comidas empiezan con vocal
$dias = array_keys($menuSemanal); // Obtenemos los días (claves)
$contadorVocal = 0;

for ($i = 0; $i < count($dias); $i++) {
    $comida = $menuSemanal[$dias[$i]];
    $primeraLetra = strtolower($comida[0]);

    if (in_array($primeraLetra, ['a', 'e', 'i', 'o', 'u'])) {
        $contadorVocal++;
    }
}

echo "<br>Cantidad de comidas que empiezan con vocal: $contadorVocal<br>";
?>
