<?php  
    session_start(); 
?> 

<html> 
    <body> 
        <a href="cuenta.php"></a>  
        <?php 
        echo "Has visitado " . ($_SESSION["contador"]) . " páginas";  
        ?>  
        <br>  
        <br>  
        <a href="cuenta.php">Volver a la Main Page</a>  
    </body>  
</html>
