<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Parámetros del correo electrónico
    $destinatario = $_POST['destinatario'];
    $asunto = $_POST['asunto'];
    $cuerpo = $_POST['cuerpo'];

    // Cabeceras del correo
    $cabeceras = 'From: prueba@prueba.com' . "\r\n" .
        'Reply-To: prueba@prueba.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    // Envío del correo
    if (mail($destinatario, $asunto, $cuerpo, $cabeceras)) {
        echo 'El correo se ha enviado correctamente.';
    } else {
        echo 'Ha ocurrido un error al enviar el correo.';
    }
}
?>
