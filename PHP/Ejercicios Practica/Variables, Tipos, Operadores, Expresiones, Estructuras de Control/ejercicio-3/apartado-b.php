<html>
<head><title>Documento 2</title></head>
<body>
<?php
    if (!isset($_POST['submit'])) {
?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    Edad: <input name="age" size="2">
    <input type="submit" name="submit" value="Ir">
    </form>

<?php
    }
    else {
    $age = $_POST['age'];
    if ($age >= 21) {
    echo 'Mayor de edad';
    }
    else {
    echo 'Menor de edad';
    }
    }
?>
</body></html>

<!-- Este codigo nos brinda un formulario con un solo input donde se nos pide ingresar una edad, la cual luego mediante codigo php se valida diciendonos si somos o no mayores de edad. Esto mediante un metodo POST del propio formulario. -->