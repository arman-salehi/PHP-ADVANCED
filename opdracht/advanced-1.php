<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <style>
        body {
            background-color: #141432;
            color: white;
        }

        .tekstkleur {
            background-color: #1B1A43;
            border-radius: 50px;
            padding: 50px;
            margin: 10px;
        }

        select {
            background-color: #524EEE;
            outline: none;
            border: 2px solid transparent;
            border-radius: 100px;
            padding: 10px;
            color: white;
        }

        input {
            background-color: #524EEE;
            outline: none;
            border: 2px solid transparent;
            padding: 10px;
            border-radius: 100px;
        }

        input {
            color: white;
        }

        ::placeholder {
            color: white;
        }

        * {
            font-family: arial;
        }

        #button {
            margin: 10px;
        }

        #title {
            margin: 10px;
        }

    </style>



</head>
<body>
    <div id="title">
    <h1>Dashboard</h1>
    </div>
    <div class="tekstkleur">
    <h1>Kies de tekstkleur</h1>
    <form action="advanced-2.php" method="POST">
        <select name="tekstkleur" id="tekstkleur">
            <?php
                $kleuren = array("red", "blue", "green", "black", "brown");
                foreach ($kleuren as $value) {
            ?>
            <option value="<?php echo $value ?>"><?php echo $value ?></option>
                <?php } ?>
        </select>
        </div>
        <div class="tekstkleur">
        <h1>Kies de achtergrondkleur</h1>



        <select name="achtergrondkleur" id="achtergrondkleur">
            <?php
                $kleuren = array("red", "blue", "green", "black", "brown");
                foreach ($kleuren as $value) {
            ?>
            <option value="<?php echo $value ?>"><?php echo $value ?></option>
                <?php } ?>
        </select>
        </div>


        <div class="tekstkleur">
        <h1>Vul een tabelranddikte in naar keus (px)</h1>
        <input type="text" id="tabeldikte" name="tabeldikte" placeholder="Bijv. 20px">
        <h1>Padding van tabel (px)</h1>
        <input type="text" id="tabelpadding" name="tabelpadding" placeholder="Bijv. 20px">
        </div>
        <br><br><input type="submit" name="submit" id="button" value="verstuur">
    </form>

</body>
</html>