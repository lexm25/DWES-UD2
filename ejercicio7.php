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
        $uno = 8;
        $dos = 3;
        printf("El valor de la primera variable en binario es: %b <br>" ,$uno);
        printf("El valor de la segunda variable en binario es: %b<br>",$dos);
        printf("El resultado de la comparación bit a bit AND es:  %b<br>",$uno & $dos);
        printf("El resultado de la comparación NOT de la primera variable es: %b<br>",~$uno);
        printf("El resultado de la comparación bit a bit OR es: %b<br>",$uno | $dos);
        printf("El resultado de la comparación bit a bit XOR es: %b",$uno ^$dos);
    ?>
</body>
</html>

