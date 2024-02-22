<?php
// Array con las frases aleatorias
$frases = [
    "La vida es lo que nos sucede mientras hacemos otros planes.",
    "No hay camino para la verdad, la verdad es el camino.",
    "Ser feliz no es tener una vida perfecta, ser feliz es reconocer que la vida vale la pena vivir a pesar de todas las dificultades.",
    "El éxito no es la clave de la felicidad. La felicidad es la clave del éxito.",
    "El único modo de hacer un gran trabajo es amar lo que haces."
];

// Elegir una frase aleatoria del array
$fraseAleatoria = $frases[array_rand($frases)];

// Mostrar la frase
echo $fraseAleatoria;
?>
