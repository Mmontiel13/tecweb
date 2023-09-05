<!DOCTYPE html PUBLIC “-//W3C//DTD XHTML 1.1//EN”
“http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd”>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 3</title>
</head>
<body>
    <h2> Ejercicio 1 </h2>
    <p>Determina cuál de las siguientes variables son válidas y explica por qué:</p>
    <p>$_myvar, $_7var, myvar, $myvar, $var7, $_element1, $house*5</p>
    <?php
        $_myvar;
        $_7var;
        //myvar; Invalida
        $myvar;
        $var7;
        $_element1; 
        //$house*5 Invalida

        echo '<ul>';
        echo '<li>$_myvar es valida por que inicia con guion bajo.';
        echo '<li>$_7var es valida por que inicia con guion bajo.';
        echo '<li>myvar es invalida por que no tiene el signo de dolar.';
        echo '<li>$myvar es valida por que inicia una letra.';
        echo '<li>$var7 es valida por que inicia una letra.';
        echo '<li>$_element1 es valida por que inicia con guion bajo.';
        echo '</ul>';
    ?>

</body>
</html>