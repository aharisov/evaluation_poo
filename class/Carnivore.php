<?php
require("Herbivore.php");

class Carnivore extends Herbivore {
    public function __construct($nom, $titre, $genre = "mâle", $type = "carnivore") {
        parent::__construct($nom, $titre, $genre, $type);
    }
}