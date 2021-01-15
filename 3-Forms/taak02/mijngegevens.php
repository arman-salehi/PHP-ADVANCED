<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: <?php echo $_POST["kleuren"]; ?>
        }
    </style>
</head>
<body>
    <?php
        echo "Voornaam: " . $_POST["Voornaam"];
    ?>
    <br>
    <?php
        echo "Achternaam: " . $_POST["Achternaam"];
    ?>
    <br>
    <?php
        echo "Leeftijd: " . $_POST["Leeftijd"];
    ?>
    <br>
    <?php
        echo "Klas: " . $_POST["Klas"];
    ?>
    <br>
    <?php
        echo "Adres: " . $_POST["Adres"];
    ?>
    <br>
    <?php
        echo "Plaatsnaam: " . $_POST["Plaatsnaam"];
    ?>
    <br>
    <?php
        echo "Favoriete muziekband: " . $_POST["Favmusic"];
    ?>
    <br>
    <?php
        echo "Geslacht: " . $_POST["geslacht"];
    ?>
    <br>
    <?php
        echo "Gekozen kleur: " . $_POST["kleuren"];
    ?>


    
</body>
</html>