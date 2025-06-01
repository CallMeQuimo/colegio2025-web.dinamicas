<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Perfil Web</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="container">
        <?php
        // - - 1. Variables personales
        $nombre     = "Julieta Anacarda";
        $edad       = 14;
        $ciudad     = "Buenos Aires";
        $estadoCiv  = "soltera";

        // 2. Mostrar la frase de presentación
        echo "<h1>Hola, soy $nombre, tengo $edad años, vivo en $ciudad y estoy $estadoCiv.</h1>";

        // 3. Condicional según la edad
        if ($edad < 18) {
            echo "<p class=\"mensaje-edad\">Soy menor de edad.</p>";
        } elseif ($edad <= 60) {
            echo "<p class=\"mensaje-edad\">Soy adulto.</p>";
        } else {
            echo "<p class=\"mensaje-edad\">Soy adulto mayor.</p>";
        }

        // 4. Array de intereses personales
        $intereses = [
            "leer novelas",
            "tocar la guitarra",
            "dibujar",
            "Hacer ski",
            "caminar al aire libre"
        ];

        // 5. Array asociativo del menú semanal (día => comida)
        $menuSemanal = [
            "lunes"     => "empanadas",
            "martes"    => "tarta de verduras",
            "miércoles" => "milanesas con puré",
            "jueves"    => "ñoquis",
            "viernes"   => "hamburguesas",
            "sábado"    => "asado",
            "domingo"   => "ensalada completa"
        ];

        // 6. Contar cuántas comidas empiezan con vocal
        $diasClave      = array_keys($menuSemanal);
        $contadorVocal  = 0;

        for ($i = 0; $i < count($diasClave); $i++) {
            $comida       = $menuSemanal[$diasClave[$i]];
            $primeraLetra = strtolower($comida[0]);

            if (in_array($primeraLetra, ['a','e','i','o','u'])) {
                $contadorVocal++;
            }
        }
        ?>
        
        <!-- 7. Mostrar lista de intereses -->
        <section>
            <h2>Mis intereses personales</h2>
            <ul class="lista-intereses">
                <?php foreach ($intereses as $interes): ?>
                    <li><?php echo $interes; ?></li>
                <?php endforeach; ?>
            </ul>
        </section>

        <!-- 8. Mostrar menú semanal completo -->
        <section>
            <h2>Menú Semanal</h2>
            <ul class="lista-menu">
                <?php foreach ($menuSemanal as $diaSemana => $comida): ?>
                    <li>
                        <strong><?php echo ucfirst($diaSemana); ?>:</strong>
                        <?php echo $comida; ?>
                    </li>
                <?php endforeach; ?>
            </ul>
            <p class="cantidad-vocales">
                Cantidad de comidas que empiezan con vocal: <?php echo $contadorVocal; ?>
            </p>
        </section>

        <!-- 9. Mostrar tipos de todas las variables con var_dump() -->
        <section>
            <h2>Tipos de Variables (var_dump)</h2>
            <div class="var-dump">
                <p><strong>$nombre</strong> => <?php var_dump($nombre); ?></p>
                <p><strong>$edad</strong>   => <?php var_dump($edad); ?></p>
                <p><strong>$ciudad</strong> => <?php var_dump($ciudad); ?></p>
                <p><strong>$estadoCiv</strong> => <?php var_dump($estadoCiv); ?></p>
                <p><strong>$intereses</strong>  => <?php var_dump($intereses); ?></p>
                <p><strong>$menuSemanal</strong> => <?php var_dump($menuSemanal); ?></p>
                <p><strong>$contadorVocal</strong> => <?php var_dump($contadorVocal); ?></p>
            </div>
        </section>

        <!-- 10. Botón para JavaScript -->
        <button id="btnSaludo" class="btn-saludo">Hazme clic</button>
    </div>

    <script src="script.js"></script>
</body>
</html>
