<?php

// une fonction pour génére un nombre aléatoire
function generateNumber($min, $max) {
    $result = rand($min, $max);

    return $result;
}

class Zoo {
    // les propriétés pour stocker des animaux et visiteurs
    public $animaux = [];
    public $visiteurs = [];

    // pour stocker de status de Zoo - ouverte ou fermé
    public $ouvreStatus;

    // constructeur
    public function __construct($animaux, $visiteurs, $ouvreStatus = "false") {
        $this->animaux = $animaux;
        $this->visiteurs = $visiteurs;
        $this->ouvreStatus = $ouvreStatus;
    }

    // la methode pour vendre des billets
    // l'attribut $minNecessaire est le nombre minimum de billets qui doivent être vendus pour ouvrir le zoo
    public function vendreBillet($minNecessaire) {
        // compter le nombre de visiteurs
        $visiteursNombre = count($this->visiteurs);
        // générer le nombre de billets vendus
        $billetsVendus = generateNumber(1, $visiteursNombre);

        // si le nombre de billets vedus est suffisant, ouvre le Zoo
        if ($billetsVendus >= $minNecessaire) {
            $this->ouvreStatus = true;
        } else {
            $this->ouvreStatus = false;
        }

        return $billetsVendus;
    }

    // la methode pour faire livraison des animaux
    // l'attribut $nombreDesAnimaux est le nombre des animaux livrés
    public function livraison($nombreDesAnimaux) {
        return "<h4>Une livraison de $nombreDesAnimaux animaux a été éffectuée.</h4>";
    }

    // la methode pour afficher une message que l'animal est né
    public function naissance() {
        return "<h4>Un nouvel animal est né dans le Zoo.</h4>";
    }

    // la methode pour afficher chaque animal au visiteurs
    public function ouvrirLesPortes() {
        $html = "<h2>Le parcours commence !</h2>";

        foreach ($this->visiteurs as $visiteur) {
            $html .= "<h3>$visiteur regarde les animaux suivants :</h3>";

            $html .= "<ul>";
            foreach ($this->animaux as $animal) {
                $html .= "<li>$animal->faireLeShow()</li>";
            }
            $html .= "</ul> <br> <hr>";
        }
    }
}