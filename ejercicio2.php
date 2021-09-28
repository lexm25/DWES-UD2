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
        $base = 6;
        $altura = 9;
        $areaTriangulo = ($base * $altura) / 2;
        echo "El área del triángulo es: ", $areaTriangulo," cm <p><p>";

        $areaCuadrado = $base * $altura;
        echo "El área del cuadrado es: ", $areaCuadrado," cm <p><p>";
        
        $diagonalMayor = 7;
        $diagonalMenor = 5;
        $areaRombo = ($diagonalMayor * $diagonalMenor)/2;
        echo "El área del rombo es: ", $areaRombo," cm <p><p>";
        
        $radio = 8.2;
        define("PI",3.14159265359);
        $areaCirculo = PI * $radio * $radio;
        echo "El área del círculo es: ", $areaCirculo," cm <p><p>";
    ?>
</body>
</html>