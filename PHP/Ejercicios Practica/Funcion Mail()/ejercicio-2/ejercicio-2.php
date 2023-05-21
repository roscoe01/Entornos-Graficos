<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $fecha = date("d-m-Y");
    $hora = date("H:i:s");
    $destino = "danyelisabet@gmail.com";
    $asunto = "Comentario";
    $desde = 'From: ' . htmlspecialchars($_POST['email']);
    $comentario = "
    \n
    Nombre: " . htmlspecialchars($_POST['nombre']) . "\n
    Email: " . htmlspecialchars($_POST['email']) . "\n
    Consulta: " . htmlspecialchars($_POST['texto']) . "\n
    Enviado: $fecha a las $hora\n
    \n
    ";
    mail($destino, $asunto, $comentario, $desde);
    echo "Su consulta ha sido enviada. En breve recibirá nuestra respuesta.";
}
?>