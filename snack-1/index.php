<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
</head>
<body>

    <?php
        $matches = [
            [
                "home" => "Olimpia Milano",
                "guests" => "Cantù",
                "homeScore" => 55,
                "guestsScore" => 60,
            ],
            [
                "home" => "Brindisi",
                "guests" => "Brescia",
                "homeScore" => 10,
                "guestsScore" => 90,
            ],
            [
                "home" => "Trieste",
                "guests" => "Zenit",
                "homeScore" => 50,
                "guestsScore" => 40,
            ]         
        ];
    ?>

    <div>
        <?php
            for ($i = 0; $i < count($matches); $i++) {
                echo $matches[$i]["home"] . " - " . $matches[$i]["guests"] . " | " . $matches[$i]["homeScore"] . " - " . $matches[$i]["guestsScore"] . "<br>";
            }
        ?>
    </div>

</body>
</html>