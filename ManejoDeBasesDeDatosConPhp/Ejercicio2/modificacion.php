<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificacion de ciudad</title>
</head>
<body>
    <?php   
    include("conexion.php");
    $vid = $_POST['id'];
    // armar instruccion sql + ejecutarla
    $vsql = "SELECT * FROM ciudades WHERE id ='$vid'";
    $vResultado = mysqli_query($link,$vsql) or die(mysqli_error($link));
    $fila = mysqli_fetch_array($vResultado);
    
    if(mysqli_num_rows($vResultado)==0) {
        echo ("ERROR: Ciudad Inexistente! <br>");
        echo ("<a href='/Formularios/formularioModificacion.html'>Continuar</a>");
    } else {
    ?>
        <form action="updateBaseDeDatos.php" method="post" name="formModificacion">
            <table width='356'>
            
                <tr>
                    <td width="103">Ciudad: </td>
                    <td width="243"> 
                        <input type="text" name="ciudad" value="<?php echo($fila['ciudad']);?>">
                    </td>
                </tr>
                <tr>
                    <td width="103">Pais: </td>
                    <td width="243"> 
                        <input type="text" name="pais" value="<?php echo($fila['pais']);?>">
                    </td>
                </tr>
                <tr>
                    <td width="103">Habitantes: </td>
                    <td width="243"> 
                        <input type="number" name="habitantes" value="<?php echo($fila['habitantes']);?>">
                    </td>
                </tr>
                <tr>
                    <td width="103">Superficie: </td>
                    <td width="243"> 
                        <input type="number" name="superficie" value="<?php echo($fila['superficie']);?>">
                    </td>
                </tr>
                <tr>
                    <td width="103">Tiene metro?: </td>
                    <td width="243"> 
                        <input type="checkbox" name="tienemetro" value="<?php echo(isset($fila['tienemetro']))?1:0;?>">
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center"> <input type="SUBMIT" name="Submit" value="Modificar">   
                </tr>
            </table>
        </form>
    <?php
    }
    mysqli_free_result($vResultado); 
    mysqli_close($link);
    ?>
</body>
</html>