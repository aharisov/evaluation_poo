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

        require("class/Carnivore.php");
        require("class/Zoo.php");
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

        ?>
    </main>
</body>
</html>