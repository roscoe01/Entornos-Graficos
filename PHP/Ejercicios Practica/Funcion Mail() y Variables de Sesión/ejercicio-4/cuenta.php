<?php 
    session_start();
?>

<html> 
    <body> 
        <h1>Main Page</h1>
        <?php 
            if (!isset($_SESSION["contador"])){      $_SESSION["contador"] = 1;  }else{      $_SESSION["contador"]++;  } 
        ?>  
        <a href= "cant_visitas.php">Irte al contador de visitas</a> 
    </body> 
</html>