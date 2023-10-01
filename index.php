<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZOO</title>

    <?php
        ini_set('display_errors', '1');
        ini_set('display_startup_errors', '1');
        error_reporting(E_ALL);

        require("class/Zoo.php");
        require("helpers.php");

        // le nombre minimum de billets qui doivent être vendus pour ouvrir le zoo
        $minBilletsVendus = 5;
        // les visiteurs par default
        $visiteurs = ["Loïc", "Yannick", "Yassine", "Enzo", "Pierre"];

        $animauxCarnivores = ["Belettes", "Cachalot", "Caracal", "Carcajou", "Céraste", "Chacal", "Chat", "Chat sauvage", "Chat viverrin", "Chaus", "Coyote", "Dauphin", "Dingo", "Elephant de mer", "Furets", "Fouines", "Glouton", "Guépard", "Hérissons", "Hermines", "Hyène", "Jaguar", "Kodiak", "Léopard", "Léopard des neiges", "Limule", "Lion", "Lion blanc", "Lion de mer", "Loup", "Loutre", "Ocelot", "Opossum", "Panthère", "Pékan", "Phoque", "Puma", "Renards", "Renard arctique", "Serval", "Suricate", "Tigre", "Visons", "Zorille"];

        $animauxHerbivores = ["Alpaga", "Antilope", "Bisons","Capybara", "Chameau", "Cheval", "Chèvre de montagne", "Chinchilla", "Dromadaires", "Écureuil", "Eléphant", "Gaufre", "Gazelle", "Girafe", "Gnou", "Gorille", "Hippopotame", "Kangourou", "Koala", "Lama", "Lapin", "Marmotte", "Mouton", "Panda", "Rhinocéros", "Tapir", "Zèbre"];

        $animauxNoms = ["LILI", "SOCCER", "NOOKIE", "METRO", "BOSKO", "BACA", "JUANI", "YOO-RI", "FANCY", "FRIZZY", "OUIZZY", "RAMSAY", "DEYSI", "CARLEY", "DARRYL", "DIVI", "DORI", "CHYLA", "NOVI", "NAKOA", "DASHEL", "BABEAR", "FOSI", "SALINA", "KYLI", "COBEY", "TITI", "WASABI", "TIBPI", "TENBY", "CUSHI", "SUZUKI", "NESSEY", "BLING", "KANCHO", "PADRIC", "CHEWEY", "CEDY", "ANKO", "LAMB"]; 

        // pour stocker les animaux
        $animaux = initialGenereAnimaux($animauxCarnivores, $animauxHerbivores);
    ?>
</head>
<body>
    <h1>Bienvenue dans notre zoo</h1>

    <main>
        <?php
            $herbivoreTest = new Herbivore("Coco", "Zebra", "femelle");
            $carnivoreTest = new Carnivore("Luc", "Lion");

            echo $herbivoreTest->faireLeShow();
            echo $carnivoreTest->faireLeShow();

            var_dump($animaux);
        ?>
    </main>
</body>
</html>