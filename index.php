<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZOO</title>

    <?php
        ini_set('display_errors', '1');
        ini_set('display_startup_errors', '1');
        error_reporting(E_ALL);

        // inclut les necessaires classes et fonctions
        require("class/Zoo.php");
        require("helpers.php");

        // le nombre minimum de billets qui doivent être vendus pour ouvrir le zoo
        $minBilletsVendus = 5;
        // les visiteurs par default
        $visiteurs = ["Loïc", "Yannick", "Yassine", "Enzo", "Pierre"];
        // un tableau pour générer carnivores
        $animauxCarnivores = ["Belettes", "Cachalot", "Caracal", "Carcajou", "Céraste", "Chacal", "Chat", "Chat sauvage", "Chat viverrin", "Chaus", "Coyote", "Dauphin", "Dingo", "Elephant de mer", "Furets", "Fouines", "Glouton", "Guépard", "Hérissons", "Hermines", "Hyène", "Jaguar", "Kodiak", "Léopard", "Léopard des neiges", "Limule", "Lion", "Lion blanc", "Lion de mer", "Loup", "Loutre", "Ocelot", "Opossum", "Panthère", "Pékan", "Phoque", "Puma", "Renards", "Renard arctique", "Serval", "Suricate", "Tigre", "Visons", "Zorille"];
        // un tableau pour générer herbivores
        $animauxHerbivores = ["Alpaga", "Antilope", "Bisons","Capybara", "Chameau", "Cheval", "Chèvre de montagne", "Chinchilla", "Dromadaires", "Écureuil", "Eléphant", "Gaufre", "Gazelle", "Girafe", "Gnou", "Gorille", "Hippopotame", "Kangourou", "Koala", "Lama", "Lapin", "Marmotte", "Mouton", "Panda", "Rhinocéros", "Tapir", "Zèbre"];
        // un tableau pour générer des noms pour des animaux
        $animauxNoms = ["LILI", "SOCCER", "NOOKIE", "METRO", "BOSKO", "BACA", "JUANI", "YOO-RI", "FANCY", "FRIZZY", "OUIZZY", "RAMSAY", "DEYSI", "CARLEY", "DARRYL", "DIVI", "DORI", "CHYLA", "NOVI", "NAKOA", "DASHEL", "BABEAR", "FOSI", "SALINA", "KYLI", "COBEY", "TITI", "WASABI", "TIBPI", "TENBY", "CUSHI", "SUZUKI", "NESSEY", "BLING", "KANCHO", "PADRIC", "CHEWEY", "CEDY", "ANKO", "LAMB"]; 

        // un tableau pour stocker les animaux
        $animaux = genereAnimaux($animauxCarnivores, $animauxHerbivores, 5, 15);
    ?>
</head>
<body>
    <?php 
        // crée une instance de la classe Zoo
        $zoo = new Zoo($animaux, $visiteurs);
        //var_dump($zoo);
        // vendre des billets
        $billetsVendus = $zoo->vendreBillet($minBilletsVendus);
        // génère nombre des animaux après la livraison
        $animauxLivres = genereAnimaux($animauxCarnivores, $animauxHerbivores, 2, 5, $animauxNoms);
        // obtien nombre des animaux livrés
        $nombreLivres = count($animauxLivres);
        // ajoute les nouvaux animaux dans tableau
        $animaux = array_merge($animaux, $animauxLivres);
        // change le tableau des animaux dans le Zoo
        $zoo->animaux = $animaux;
    ?>

    <main>
        <?php
            if ($zoo->ouvreStatus === true) {
                echo "<h1>Bienvenue dans notre zoo !</h1>";
                echo $zoo->livraison($nombreLivres);
            } else {
                echo "<h1>Le Zoo est fermé maintenant.<br>Malheureusement, nous avons vendu juste $billetsVendus billet(s).<br>Reviens une autre fois, s'il vous plaît.</h1>";
            }
            

            var_dump($zoo);
        ?>
    </main>
</body>
</html>