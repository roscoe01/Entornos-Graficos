<?php
    echo "El $flor $color \n";
    include 'datos.php';    
    echo " El $flor $color";
?> 

<!-- En el primero print (echo) se ve que no sabe que son las variables flor o color, las toma como undefined ya que evidentemente no están definidas. 
En el segundo, en cambio, vemos que ya fueron incluidas las variables dentro de datos.php, por lo tanto las variables ya no son undefined, sino que son clavel y blanco. -->