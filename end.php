<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Stijn Papier Schaar</h1>
    <hr>
    <?php
        // if (!isset($_GET["Player1"]) || !isset($GET["Player2"])) {
        //     header("Location: game.php");
        // }
        $speler1 = $_GET["p1c"];
        $speler2 = $_GET["p2c"];
        echo "<h1>Speler 1 koos " . $speler1 . ".</h1>";
        echo "<h1>Speler 2 koos " . $speler2 . ".</h1>";
    ?>
</body>
</html>