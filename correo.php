<?php
// incluimos la clase
require(“includes/class.phpmailer.php”);

// creamos un objeto
$mail = new PHPMailer();

// establecemos la información de contacto
$Nombre = "Pepito";
$CorreoDEnvio = "correodepepito@dominio.com";
$Mensaje = "Hola " + $Nombre + " (" + $CorreoDEnvio + ") desea contactarte";
$Asunto = "Consulta";

// desde donde enviamos el correo
$mail->From = "infocorreo@tuempresa.com";
// nombre del remitente en este caso el de la empresa
$mail->FromName = $Nombre;

// dirección del correo electrónico que recibirá el correo
$mail->AddAddress("correodestino@dominio.com");

// limitamos el número de letras
$mail->WordWrap = 50;

// establecemos el asunto del correo
$mail->Subject  =  $Asunto;

// establecemos el cuerpo del mensaje
$mail->Body     =  $Mensaje;

// para que se envíe en formato HTML
$mail->IsHTML(true);

// Datos del servidor SMTP
$mail->IsSMTP();

// Servidor de Salida de los mensajes
$mail->Host = "www.tudominio.com";

// establecemos la autenticación
$mail->SMTPAuth = true;

// acá va el correo del cuál envían desde el servidor
$mail->Username = "infocorreo@miempresa.com";
$mail->Password = "TuClaveCorreo";

// verificamos si se envía el mensaje
if ($mail->Send())
	echo "<script>alert('Mensaje Enviado');location.href ='javascript:history.back()';</script>";
else
	echo "<script>alert('Error al enviar');location.href ='javascript:history.back()';</script>";
}

?>