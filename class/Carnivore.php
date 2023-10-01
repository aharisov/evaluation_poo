<?php
require("Herbivore.php");

// hérite toutes les propriétés et methodes des classes Animal et Herbivore
class Carnivore extends Herbivore {
    public function __construct($nom, $titre, $genre = "mâle", $type = "carnivore") {
        parent::__construct($nom, $titre, $genre, $type);
    }
}