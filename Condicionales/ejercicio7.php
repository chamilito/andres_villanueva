<?php

echo "Elija la temperatura de entrada:\n";
echo "1. Fahrenheit\n";
echo "2. Celsius\n";
echo "3. Kelvin\n";
echo "4. Rankine\n";    
echo "5. Réaumur\n";
$opcionEntrada = readline("Ingrese el número de opción: ");

$temperatura = readline("Ingrese la temperatura a convertir: ");

echo "Elija la temperatura de salida:\n";
echo "1. Fahrenheit\n";
echo "2. Celsius\n";
echo "3. Kelvin\n";
echo "4. Rankine\n";
echo "5. Réaumur\n";
$opcionSalida = readline("Ingrese el número de opción: ");

if ($opcionEntrada == $opcionSalida) {
    echo "La temperatura es la misma después de la conversión: $temperatura\n";
} else {
    if ($opcionEntrada == 1) { // Fahrenheit
        $tempCelsius = ($temperatura - 32) * 5 / 9;
    } elseif ($opcionEntrada == 2) { // Celsius
        $tempCelsius = $temperatura;
    } elseif ($opcionEntrada == 3) { // Kelvin
        $tempCelsius = $temperatura - 273.15;
    } elseif ($opcionEntrada == 4) { // Rankine
        $tempCelsius = ($temperatura - 491.67) * 5 / 9;
    } elseif ($opcionEntrada == 5) { // Réaumur
        $tempCelsius = $temperatura * 5 / 4;
    } else {
        echo "Opción de temperatura de entrada no válida\n";
        exit;
    }

    if ($opcionSalida == 1) { // Fahrenheit
        $temperaturaFinal = $tempCelsius * 9 / 5 + 32;
    } elseif ($opcionSalida == 2) { // Celsius
        $temperaturaFinal = $tempCelsius;
    } elseif ($opcionSalida == 3) { // Kelvin
        $temperaturaFinal = $tempCelsius + 273.15;
    } elseif ($opcionSalida == 4) { // Rankine
        $temperaturaFinal = ($tempCelsius + 273.15) * 9 / 5;
    } elseif ($opcionSalida == 5) { // Réaumur
        $temperaturaFinal = $tempCelsius * 4 / 5;
    } else {
        echo "Opción de temperatura de salida no válida\n";
        exit;
    }

    echo "La temperatura después de la conversión es: $temperaturaFinal\n";
}
?>