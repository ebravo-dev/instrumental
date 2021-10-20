<?php

require 'includes/Exception.php';
require 'includes/PHPMailer.php';
require 'includes/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$contacto_nombre = $_POST['nombre'];
$contacto_correo = $_POST['correo'];
$contacto_negocio = $_POST['negocio'];
$contacto_celular = $_POST['celular'];
$contacto_mensaje = $_POST['mensaje'];

require '../templates/mailbody.php';

$mail = new PHPMailer(true);
$mail->IsSMTP();
$mail->IsHtml = true;
$mail->CharSet = 'UTF-8';
$mail->From = 'mailertestcl@gmail.com';
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls';
$mail->Host = 'smtp.gmail.com';
$mail->Port = "587";
$mail->Username = 'mailertestcl@gmail.com';
$mail->Password = '1qaz"WSX3edc';
// $mail->FromName = 'Walalaaaaa';
$mail->AddAddress('ederjgb94@gmail.com');
$mail->Subject = 'Instrumental Mensaje';
$mail->header = '"Content-Type: text/html; charset=UTF-8\r\n"';
$mail->Body = $msgbody;
$mail->AltBody = $msgbody;
// $mail->Body = "Nombre: $contacto_nombre
// Correo: $contacto_correo
// Compañía: $contacto_negocio
// Número Celular: $contacto_celular
// Mensaje: $contacto_mensaje";
// $mail->addAttachment('pdf/Salida.pdf');

if ($mail->Send()) {
    echo '<script type="text/javascript">
           alert("Enviado Correctamente");
        </script>';
} else {
    echo '<script type="text/javascript">
           alert("NO ENVIADO, intentar de nuevo");
        </script>';
}

$mail->smtpClose();

// header('Location: /');
