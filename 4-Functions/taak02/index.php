<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function rekenUit($getal1, $getal2, $getal3) {
            return $getal1 + $getal2 + $getal3;   
        }
    ?>

    Als ik 4, 2 en 9 bij elkaar optel krijg ik: <?php echo rekenUit(4, 2, 9); ?><br>
    Als ik 1, 2 en 2 bij elkaar optel krijg ik: <?php echo rekenUit(1, 2, 3); ?><br>
    Als ik 40, 21 en 92 bij elkaar optel krijg ik: <?php echo rekenUit(40, 21, 92); ?>
</body>
</html>