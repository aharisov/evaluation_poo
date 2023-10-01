<?php
require("class/Carnivore.php");

// une fonction pour génére un nombre aléatoire
function generateNum($min, $max) {
    $result = rand($min, $max);

    return $result;
}

// une fonction pour générer l'initial nombre des animaux dans le Zoo
function initialGenereAnimaux($animauxCarnivores, $animauxHerbivores) {
    $nombreCarnivore = generateNum(5, 15); // nombre des animaux pour générer
    $nombreHerbivore = generateNum(5, 15);
    $animaux = []; // un tableau pour stocker les animaux

    // génère un genre
    if (generateNum(1, 2) == 1) {
        $genre = "mâle";
    } else {
        $genre = "femelle";
    }

    // génère les carnivores
    for ($i = 1; $i <= $nombreCarnivore; $i++) {
        $animalCarnivore = new Carnivore("", $animauxCarnivores[generateNum(1, count($animauxCarnivores) - 1)], $genre);

        $animaux[] = $animalCarnivore;
    }

    // génère les herbivores
    for ($i = 1; $i <= $nombreHerbivore; $i++) {
        $animalHerbivore = new Herbivore("", $animauxHerbivores[generateNumber(1, count($animauxHerbivores) - 1)], $genre);

        $animaux[] = $animalHerbivore;
    }

    return $animaux;
}