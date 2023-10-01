<?php
// inclut la classe parent
require("Animal.php");

class Herbivore extends Animal {
    
    // herite des propriétés de la classe Animal
    public function __construct($nom, $titre, $genre = "mâle", $type = "herbivore") {
        parent::__construct($nom, $titre, $genre, $type);
    }

    // herite de la methode de la classe Animal
    // retourne le show
    public function faireLeShow() {
        // s'il y a le nom
        if ($this->nom != "") {
            return "<p>Cet animal $this->type qui est $this->titre et qui s'appelle $this->nom.</p>";
        }

        // s'il n'y a pas de nom
        return "<p>Cet animal $this->type qui est $this->titre.</p>";
    }

    // herite de la methode de la classe Animal
    // retourne un nouvel animal si c'est possible
    public function donnerNaissance() {
        // génère genre du nouvel animal
        $newGenre = "";
        $randomNum = rand(0, 1);

        if ($randomNum == 0) {
            $newGenre = "mâle";
        } else {
            $newGenre = "femelle";
        }

        // retourne un nouvel animal
        if ($this->genre === "femelle") {
            $nouvelAnimal = new Herbivore("", $this->titre, $this->type, $newGenre);
            return "<p>$nouvelAnimal->titre, $nouvelAnimal->type, $nouvelAnimal->genre</p>";
        }
    }
}