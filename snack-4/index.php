<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 4</title>
</head>
<body>
    
    <?php
        $randomNumbers = [];

        while(count($randomNumbers) < 15) {

            $number = rand(1, 100);

            if (!in_array($number, $randomNumbers)) {
                $randomNumbers[] = $number;
            };
        };

        
        for ($i = 0; $i < count($randomNumbers); $i++) {
            echo $randomNumbers[$i] . "<br>";
        }
        
    ?>


</body>
</html>