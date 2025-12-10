<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>

<body>
    <?php
    $persona = array("nombre" => "Sara", "apellido" => "Martínez", "edad" => 23, "ciudad" => "Barcelona");
    $counter = 1;
    echo "<h1> EJERCICIO 1 </h1>";
    foreach ($persona as $value) {
        echo "dato " . $counter . "º: " .  "$value <br>";
        $counter++;
    }

    $persona = array("nombre" => "Sara", "apellido" => "Martínez", "edad" => 23, "ciudad" => "Barcelona");

    echo "<h1> EJERCICIO 2 </h1>";
    foreach ($persona as $key => $value) {
        echo " $key: $value <br>";
    }

    $persona = array("nombre" => "Sara", "apellido" => "Martínez", "edad" => 23, "ciudad" => "Barcelona");

    $persona["edad"] = 24;

    $counter = 1;

    echo "<h1> EJERCICIO 3 </h1>";
    foreach ($persona as $value) {
        echo "dato $counter" . "º: $value <br>";
        $counter++;
    }

    $persona = array("nombre" => "Sara", "apellido" => "Martínez", "edad" => 23, "ciudad" => "Barcelona");

    $persona["edad"] = 24;

    unset($persona["ciudad"]);

    echo "<h1> EJERCICIO 4 </h1>";

    var_dump($persona);

    echo "<h1> EJERCICIO 5 </h1>";

    $str = "a,b,c,d,e,f";
    $arr = explode(",", $str, 6);
    $reverse = array_reverse($arr);

    $counter = 6;

    foreach ($reverse as $value) {
        echo "letter $counter" . "º: $value <br>";
        $counter--;
    }
    ?>

</body>

</html>