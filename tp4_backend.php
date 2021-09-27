<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1 style="color: #2C5364; font-family: Helvetica; text-align: center">Trabajo Práctico Número 4</h1>
<hr>
<h2 style="color: #2C5364; font-family: Helvetica">Ejercicio número 1</h2>
<?php

$numeros = [2, 4, 6, 8, 10, 12, 14, 16, 18, 20];
     print "<p> $numeros[0] </p>\n";
     print "<p> $numeros[1] </p>\n";
     print "<p> $numeros[2] </p>\n";
     print "<p> $numeros[3] </p>\n";
     print "<p> $numeros[4] </p>\n";
     print "<p> $numeros[5] </p>\n";
     print "<p> $numeros[6] </p>\n";
     print "<p> $numeros[7] </p>\n";
     print "<p> $numeros[8] </p>\n";
     print "<p> $numeros[9] </p>\n";

?>
<hr>
<h2 style="color: #2C5364; font-family: Helvetica">Ejercicio número 2</h2>
<?php

$datos = ["Pedro", "Ana", "34", "1"];
    print_r($datos);
?>
<hr>
<h2 style="color: #2C5364; font-family: Helvetica">Ejercicio número 3</h2>
<?php

$datos = ["Nombre" => "Pedro", "Apellido" => "Torres", "Direccion" => "Av. Mayor 3703","Telefono" => 1122334455];

    foreach ($datos as $valor) {
        print "<p> $valor </p>\n";
        
    }
?>

<hr>
<h2 style="color: #2C5364; font-family: Helvetica">Ejercicio número 4</h2>

<?php

$datos = ["Madrid", "Barcelona", "Londres", "New York", "Los Angeles", "Chicago"];
    print "<p> La ciudad con el indice 0 tiene el nombre $datos[0] </p>\n";
    print "<p> La ciudad con el indice 1 tiene el nombre $datos[1] </p>\n";
    print "<p> La ciudad con el indice 2 tiene el nombre $datos[2] </p>\n";
    print "<p> La ciudad con el indice 3 tiene el nombre $datos[3] </p>\n";
    print "<p> La ciudad con el indice 4 tiene el nombre $datos[4] </p>\n";
    print "<p> La ciudad con el indice 5 tiene el nombre $datos[5] </p>\n";


?>

<hr>
<h2 style="color: #2C5364; font-family: Helvetica">Ejercicio número 5</h2>
<?php

$datos = ["Madrid" => "MD", "Barcelona" => "BCL", "Londres" => "LD", "NewYork" => "NY", "LosAngeles" => "LA", "Chicago" => "CCG"];
    print "<p> El indice de Madrid es $datos[Madrid]</p>\n";
    print "<p> El indice de Barcelona es $datos[Barcelona]</p>\n";
    print "<p> El indice de Londres es $datos[Londres]</p>\n";
    print "<p> El indice de New York es $datos[NewYork]</p>\n";
    print "<p> El indice de Los Angeles es $datos[LosAngeles]</p>\n";
    print "<p> El indice de Chicago es $datos[Chicago]</p>\n";

    
?>

</body>
</html>