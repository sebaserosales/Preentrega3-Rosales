<?php

//Conecto mi form con el server

$nombre = $_POST['introducir_nombre'];
$mail = $_POST['introducir_email'];
$telefono = $_POST['introducir_telefono'];
$website = $_POST['introducir_website'];
$asunto = $_POST['introducir_asunto'];
$mensaje = $_POST['introducir_mensaje'];

//Cuerpo del mensaje

$mensaje = "Este mensaje fue enviado por " . $nombre . " ,\r\n";
$mensaje .= "Su mail es: " . $mail . " ,\r\n";
$mensaje .= "El telefono es: " . $telefono . " \r\n";
$mensaje .= "El sitio web es " . $website . " \r\n";
$mensaje .= "El asunto es: " . $asunto . " \r\n";
$mensaje .= "Mensaje: " . $_POST["introducir_mensaje"] . " \r\n";

$destinatario = "pvita@ralf-automatizacion.com.ar";
$asunto = "Contacto desde la web';

$headers  = 'MIME-Version: 1.0' . "\r\n"
    .'Content-type: text/html; charset=utf-8' . "\r\n"
    .'From: ' . $mail . "\r\n";

//Funcion de enviar

if(mail($destinatario, $asunto, utf8_decode($mensaje), $headers)) {
    echo "<p>Gracias por contactarnos, $nombre. Recibiras una respuesta a la brevedad.</p>";
} else {
    echo '<p>Lo lamentamos pero no se pudo enviar su consulta.</p>';
}

?>
