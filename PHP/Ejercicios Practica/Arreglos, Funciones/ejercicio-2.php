<?php
    $matriz = array("x" => "bar", 12 => true);
    echo $matriz["x"];
    echo $matriz[12];
?>

<!-- En el primer codigo, la salida son bar y 1. Ya que en la primera linea se le asigna a la key "x" el valor de "bar" y en la key "12" se le asigna el valor true, esto es porque en php los booleanos se muestran con 1 para verdadero y 0 para falso. -->

<?php
    $matriz = array("unamatriz" => array(6 => 5, 13 => 9, "a" => 42));
    echo $matriz["unamatriz"][6];
    echo $matriz["unamatriz"][13];
    echo $matriz["unamatriz"]["a"];
?>

<!-- En este segundo código, matriz es un array bidimensional donde en su key "unamatriz" se asigna otro array el cual tiene 3 keys (6, 13, y "a"). 
Se imprime el contenido de el array "unamatriz". -->

<?php
    $matriz = array(5 => 1, 12 => 2);
    $matriz[] = 56;
    $matriz["x"] = 42; 
    unset($matriz[5]); 
    unset($matriz);
?>

<!-- Este ultimo y tercer codigo, asigna valores a distintas keys. 
Primero en la key 5 le asigna un 1, en la key 12 le asigna un 2. 
Después, al final del array (en la ultima posicion conocida por las keys) se le asigna un 56, por lo tanto ese 56 tendrá como key un 13.
Luego se le agrega otra key cuyo valor es "x" y su contenido es 42.

Finalmente a la matriz se le borra el contenido en la key 5 para después borrar todo el contenido de la matriz. -->



