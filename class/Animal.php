<?php
// la classe abstrait pour stocker des communes propriétés et methodes des animaux
abstract class Animal {
    // stocke le nom de l'animal s'il y a
    public $nom;

    // stocke le genre de l'animal - mâle ou femelle
    public $genre;

    // stocke le titre de l'animal - lion, zebra, etc
    public $titre;

    // stocke le type de l'animal - herbivore ou carnivore
    public $type;

    // la foction constructeur
    public function __construct($nom, $titre, $genre = "mâle", $type = "") {
        $this->nom = $nom;
        $this->titre = $titre;
        $this->genre = $genre;
        $this->type = $type;
    }

    // la methode abstait pour faire le show par un animal
    abstract protected function faireLeShow();

    // la methode abstait pour faire le naiisance par un animal femelle
    abstract protected function donnerNaissance();
}