<?php
require("class/Carnivore.php");

// une fonction pour génére un nombre aléatoire
function generateNum($min, $max) {
    $result = rand($min, $max);

    return $result;
}

// une fonction pour générer l'initial nombre des animaux et nombre pendant un livraison dans le Zoo
function genereAnimaux($animauxCarnivores, $animauxHerbivores, $minNombre, $maxNombre, $titres = []) {
    $nombreCarnivore = generateNum($minNombre, $maxNombre); // nombre des animaux pour générer
    $nombreHerbivore = generateNum($minNombre, $maxNombre);
    $animaux = []; // un tableau pour stocker les animaux

    // génère un genre
    if (generateNum(1, 2) == 1) {
        $genre = "mâle";
    } else {
        $genre = "femelle";
    }

    // génère les carnivores
    for ($i = 1; $i <= $nombreCarnivore; $i++) {
        if (count($titres) > 0) {
            // génère un animal avec un nom graçe à livraison
            $animalCarnivore = new Carnivore($titres[generateNum(0, count($titres) - 1)], $animauxCarnivores[generateNum(0, count($animauxCarnivores) - 1)], $genre);    
        } else {
            $animalCarnivore = new Carnivore("", $animauxCarnivores[generateNum(0, count($animauxCarnivores) - 1)], $genre);
        }

        $animaux[] = $animalCarnivore;
    }

    // génère les herbivores
    for ($i = 1; $i <= $nombreHerbivore; $i++) {
        if (count($titres) > 0) {
            // génère un animal avec un nom graçe à livraison
            $animalHerbivore = new Herbivore($titres[generateNum(0, count($titres) - 1)], $animauxHerbivores[generateNumber(1, count($animauxHerbivores) - 1)], $genre);
        } else {
            $animalHerbivore = new Herbivore("", $animauxHerbivores[generateNumber(1, count($animauxHerbivores) - 1)], $genre);
        }

        $animaux[] = $animalHerbivore;
    }

    return $animaux;
}