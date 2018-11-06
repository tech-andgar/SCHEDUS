<?php

use PHPMailer\PHPMailer\PHPMailer;

function sendemail($mail_addAddress, $email_subject)
{
    $mail = new PHPMailer();

    // Establecer el correo electronico para utilizar SMTP
    $mail->isSMTP();

   // Especificar el servidor de correo a utilizar
    $mail->Host = 'smtp.gmail.com';

    // Habilitar la autenticacion con SMTP
    $mail->SMTPAuth = true;

    // Habilitar encriptación, 'ssl' es aceptada
    $mail->SMTPSecure = 'tls';

    // Puerto TCP para conectarse
    $mail->Port = 587;

    /* Configuracion de variables para enviar el correo */
    $mail_setFromName = 'Soporte SCHEDUS';
    // $mail_setFromEmail = '8807c37c627601';
    // $mail_setFromPassword = 'd5671c9d3ee424';
    $mail_setFromEmail = 'soportenewreset@gmail.com';
    $mail_setFromPassword = 'AG40DA48CT41';


    // Correo electronico saliente ejemplo: tucorreo@email.com
    $mail->Username = $mail_setFromEmail;

    // Contraseña de correo saliente
    $mail->Password = $mail_setFromPassword;

    //Introduzca la direccion de la que debe aparecer el correo electronico. Puede utilizar cualquier direccion que el servidor SMTP acepte como valida. El segundo parametro opcional para esta funcion es el nombre que se mostrara com el remitente en lugar de la direccion de correo electronico en si.
    $mail->setFrom($mail_setFromEmail, $mail_setFromName);

    // Agregar quien recibe el email enviado
    $mail->addAddress($mail_addAddress);

    // Activo condificacción utf-8
    $mail->CharSet = 'UTF-8';

    //$message = $txt_message;
    $mail->Subject = 'Restablecer de contraseña SCHEDUS';
    $message = 'Puede ingresar al aplicativo en el siguiente enlace solo en la sede Barrio Colombia: http://localhost/schedus?c=inicio&m=fromEmail <br> Su Contraseña Es: 8XRXYVH3';
    //$message+= file_get_contents($template);
    //$message = str_replace('{{first_name}}', $mail_setFromName, $message);
    //$message = str_replace('{{customer_email}}', $mail_setFromEmail, $message);

    //Establecer el formato de correo electronico en HTML
    $mail->isHTML(true);

    //$mail->Subject = $email_subject;
    $mail->msgHTML($message);
    //$mail->Body    = 'This is the HTML message body <b>in bold!</b><br>';
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    // To load the Spanish version
    $mail->setLanguage('es', '../../assets/Framework/PHPMailer/');

    if (!$mail->send()) {
        echo '<p style="color:red"> No se pudo enviar el mensaje..';
        echo '<br>Error de correo:' . $mail->ErrorInfo;
        echo '</p>';
    } else {
        echo '<p style="color:green">Tu mensaje ha sido enviado!</p>';
    }
}
