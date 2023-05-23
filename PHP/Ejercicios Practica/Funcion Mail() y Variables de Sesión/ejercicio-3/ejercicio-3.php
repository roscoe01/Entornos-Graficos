<?php
$destinatario = "maildeamigojaja@gmail.com";
$asunto = "Recomendación";
$mensaje = "Hey amigo! Tenés que visitar este sitio!";

if (mail($destinatario, $asunto, $mensaje)){
    echo "Su recomendación fué enviada! Muchas gracias por visitar este sitio :)";
} else {
    echo "No se ha podido recomendar el sitio :(";
}
?>