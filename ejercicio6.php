<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $opDiarias = "4";
        $opSemanales = "20";
        define("MAXOPDIARIAS", 6);
        define("MAXOPSEMANAS", 30);

        echo "operaciones diarias es mayor igual que el máximo: ", var_export($opDiarias >= MAXOPDIARIAS),"<br>";
        echo "operaciones semanales es mayor igual que el máximo: ", var_export($opSemanales >= MAXOPSEMANAS),"<br>";
        echo "operaciones diarias es exactamente igual al máximo: ", var_export($opDiarias === MAXOPDIARIAS),"<br>";
        echo "operaciones diarias es distinto al de operaciones semanales: ", var_export($opDiarias != MAXOPSEMANAS),"<br>";
    ?>
</body>-
</html>

