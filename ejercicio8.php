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
        $var="Hola";
        echo $var,"<br>";
        echo "Tipo de variable: ", gettype($var),"<br>";
        echo "¿Es la variable boleana? ",var_export(is_bool($var)),"<br>";
        echo "¿Es la variable nula? ",var_export(is_null($var)),"<br>";
        echo "¿Es la variable de tipo scalar? ",var_export(is_scalar($var)),"<br>";
        echo "<p></p>";
        
        $var2=12.23;
        echo $var2, "<br>";
        echo "Tipo de variable: ", gettype($var2),"<br>";
        echo "¿Es la variable de tipo string? ",var_export(is_string($var2)),"<br>";
        echo "¿Es la variable de tipo float? ",var_export(is_float($var)),"<br>";
        echo "¿Es la variable un objeto? ",var_export(is_object($var)),"<br>";
        echo "<p></p>";
        
        $var2 = (integer)$var2;
        echo $var2,"<br>";
        $var3 = "56asdfasdf <br>";
        echo $var3;
        $var3 = (integer)$var3;
        echo $var3;
    ?>
</body>
</html>