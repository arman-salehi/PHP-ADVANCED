<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
    body {
        background-color: <?php echo $_POST["achtergrondkleur"]; ?>;
        color: <?php echo $_POST["tekstkleur"]; ?>;
    }

    td, th {
        border: <?php echo $_POST["tabeldikte"]; ?> solid <?php echo $_POST["tekstkleur"]; ?>;
        padding: <?php echo $_POST["tabelpadding"]; ?>;
    }
</style>
</head>

<body>
    <table>


        <tr>


            <th>Naam</th>
            <th>Leeftijd</th>
            <th>Klas</th>
            <th>Opleiding</th>

        </tr>
        <tr>
        <?php 
            $arr = array("naam" => "Arman", "leeftijd" => "17", "Klas" => "LCTAOO0D", "Opleiding" => "Software Developer");
            foreach($arr as $key => $value){
                echo "<td>$value</td>"; 
            }
        ?>
        </tr>
    </table>

</body>
</html>