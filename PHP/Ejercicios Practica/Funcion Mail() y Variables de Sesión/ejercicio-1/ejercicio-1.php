<?php
$to = "jeronatan@hotmail.com"; 
$subject = "Correo de Ejercicio 1"; 
$message = '
<html>
<head>
  <title>Ejemplo de correo electrónico HTML</title>
</head>
<body>
  <h1>¡Hola!</h1>
  <p>Este es un correo de prueba.</p>
</body>
</html>';

mail($to, $subject, $message);

?>
