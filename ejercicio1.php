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
        $nombre = 'Alejandro Martín Álvarez';
        $poblacion = 'Los Palacios y Villafranca';
        $edad = 21;

        echo "Mi nombre es ",$nombre," tengo ",$edad, " años de edad y mi localidad es ", $poblacion;
        echo "<p></p>";
        printf("Mi nombre es %s, tengo %d años de edad y mi localidad es %s",$nombre,$edad,$poblacion);
    ?>
</body>
</html>

