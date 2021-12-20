<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 2</title>
</head>
<body>
    
    <?php

        $name = $_GET["name"];
        $email = $_GET["email"];
        $age = $_GET["age"];
        
        $nameOk = strlen($name) > 3;
        $hasAt = strpos($email, "@");
        $hasDot = strpos($email, ".");
        $emailOk = $hasAt !== false && $hasDot !== false;
        $isNumber = is_numeric($age);
    ?>


    <div>
        <?php

            if ($nameOk && $emailOk && $isNumber) {
                echo "ACCESSO RIUSCITO";
            } else {
                echo "ACCESSO NEGATO";
            }

        ?>
    </div>
</body>
</html>