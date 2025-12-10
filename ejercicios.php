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
    /** Fin de ejercicio 1 */

    $persona = array("nombre" => "Sara", "apellido" => "Martínez", "edad" => 23, "ciudad" => "Barcelona");

    echo "<h1> EJERCICIO 2 </h1>";
    foreach ($persona as $key => $value) {
        echo " $key: $value <br>";
    }

    $persona = array("nombre" => "Sara", "apellido" => "Martínez", "edad" => 23, "ciudad" => "Barcelona");

    $persona["edad"] = 24;

    /** Fin de ejercicio 2 */

    $counter = 1;

    echo "<h1> EJERCICIO 3 </h1>";
    foreach ($persona as $value) {
        echo "dato $counter" . "º: $value <br>";
        $counter++;
    }

    $persona = array("nombre" => "Sara", "apellido" => "Martínez", "edad" => 23, "ciudad" => "Barcelona");

    $persona["edad"] = 24;

    /** Fin de ejercicio 3 */
    unset($persona["ciudad"]);

    echo "<h1> EJERCICIO 4 </h1>";

    var_dump($persona);


    /** Fin de ejercicio 5 */
    echo "<h1> EJERCICIO 5 </h1>";

    $str = "a,b,c,d,e,f";
    $arr = explode(",", $str, 6);
    $reverse = array_reverse($arr);

    $counter = 6;

    foreach ($reverse as $value) {
        echo "letter $counter" . "º: $value <br>";
        $counter--;
    }

    /**Fin de ejercicio 5 */

    echo "<h1> EJERCICIO 6 </h1>";

    $notas = array("Miguel" => 5, "Luis" => 7, "Marta" => 10, "Isabel" => 8, "Aitor" => 4, "Pepe" => 1);

    arsort($notas);

    echo "Notas de los estudiantes: ";
    foreach ($notas as $x => $value) {
        echo $x . ": " . $value . " ";
    }

    /** Fin de ejercicio 6 */

    echo "<h1> EJERCICIO 7 </h1>";

    $notas = array("Miguel" => 5, "Luis" => 7, "Marta" => 10, "Isabel" => 8, "Aitor" => 4, "Pepe" => 1);

    $media = 0;

    foreach ($notas as $key => $value) {
        $media += $value;
    }

    $media = $media / count($notas);
$formattedMedia = 

    echo $media;

    ?>

</body>

</html>