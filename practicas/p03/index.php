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
    <br><hr>
    <h2> Ejercicio 2 </h2>
    <p>Proporcionar los valores de $a, $b, $c como sigue:</p>
    <p>
        $a = “ManejadorSQL”;<br>
        $b = 'MySQL’;<br>
        $c = &$a;<br>
    </p>
    <?php
       unset($a, $b, $c);
       $a = "ManejadorSQL";
       $b = 'MySQL';
       $c = &$a;
       echo 'Mostrando variables';
       echo '<br>';
       var_dump($a);
       var_dump($b);
       var_dump($c);
       $a = "PHP server";
       $b = &$a;
       echo '<br>';
       echo 'Mostrando variables luego de cambiar el valor:';
       echo '<br>';
       var_dump($a);
       var_dump($b);
       var_dump($c);
       echo '<br>';
       echo 'Al cambiar el valor de la variable a y las otras 2 variables tener el valor de la misma tambien se modifico su valor';
       echo '<br>';
    ?>
    <br><hr>
    <h2> Ejercicio 3 </h2>
    <p>
        Muestra el contenido de cada variable inmediatamente después de cada asignación,
        verificar la evolución del tipo de estas variables (imprime todos los componentes de los
        arreglo):
    </p>
    <ul>
        <li>$a = “PHP5”;</li>
        <li>$z[] = &$a;</li>
        <li>$b = “5a version de PHP”;</li>
        <li>$c = $b*10;</li>
        <li>$a .= $b;</li>
        <li>$b *= $c;</li>
        <li>$z[0] = “MySQL”;</li>
    </ul>
    <?php
        unset($a, $b, $c, $z);
        $a = "PHP5";
        echo 'Variable a: '.$a;
        echo '<br>';
        $z[] = &$a;
        echo 'Variable z: ';
        var_dump($z);
        echo '<br>';
        $b = "5a version de PHP";
        echo 'Variable b: '.$b;
        echo '<br>';
        @$c = $b*10;
        echo 'Variable c: '.$c;
        echo '<br>';
        $a .= $b;
        echo 'Variable a: '.$a;
        echo '<br>';
        $b *= $c;
        echo 'Variable b: '.$b;
        echo '<br>';
        $z[0] = "MySQL";
        echo 'Variable z: ';
        var_dump($z);
    ?>
</body>
</html>