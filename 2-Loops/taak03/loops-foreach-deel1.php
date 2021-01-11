<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $dagen = array("maandag", "dinsadg", "woensdag", "donderdag", "vrijdag", "zaterdag", "zondag");

        foreach ($dagen as $value) {
            echo "<li>Het is vandaag $value</li>";
        }
    ?>
</body>
</html>