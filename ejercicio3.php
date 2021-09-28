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
        $precioPantalon = 29.99;
        $precioCamisa = 25.99;
        $numeroPantCompr = 3;
        $numeroCamCompr = 2;
        $totalSin = ($precioPantalon * $numeroPantCompr) + ($precioCamisa * $numeroCamCompr);
        define("DESCUENTO", 8);
        $totalCon = $totalSin - ($totalSin * (DESCUENTO/100));
        echo "El precio de un pantalón es de: ", $precioPantalon,"€<p></p>";
        echo "El precio de una camisa es de: ", $precioCamisa,"€<p></p>";
        echo "El precio total sin descuento es de: ", $totalSin,"€<p></p>";
        $formateado = sprintf("%01.2f", $totalCon);
        echo "El precio total con descuento del 8% es de: ", $formateado, "€<p></p>";
        // echo "El precio total con descuento del 8% es de: ", sprintf("%01.2f", $totalCon), "€<p></p>";
    ?>
</body>
</html>