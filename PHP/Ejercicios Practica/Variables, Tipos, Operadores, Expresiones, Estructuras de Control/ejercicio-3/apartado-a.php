<html>
<head>
    <title>Documento 1</title>
</head>
<body>
    <?php
    echo "<table width = 90% border = '1' >";
    $row = 5;
    $col = 2;
    for ($r = 1; $r <= $row; $r++) {
    echo "<tr>";
    for ($c = 1; $c <= $col;$c++) {
    echo "<td>&nbsp;</td>\n";
    } echo "</tr>\n";
    }
    echo "</table>\n";
    ?>
</body>
</html>

<!-- Este codigo se utiliza para crear una tabla de manera que para añadirle nuevas columnas o nuevas filas, solo haya que cambiar el valor dentro de las variables row y col dentro del codigo php.  -->