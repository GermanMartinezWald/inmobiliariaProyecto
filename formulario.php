<?php
$destino = "gmartinezwald@gmail.com"; // Email del Sitio Web info@krak.com.ar
$nombre = $_POST["nombre"];
$email = $_POST["email"];
$telefono = $_POST["telefono"];
$consulta = $_POST["mensaje"];
$asunto = "Consulta :: Pagina Krak Inmobiliaria";

$mensaje = "<html>\n";
$mensaje .= "<body style='font-family:arial; font-size:14px;'>\n";
$mensaje .= "<p style='background-color:#EEEEEE; padding:5px;'><b>" .$asunto ."</b></p>";
$mensaje .= "<p><b>Nombre y Apellido:</b> " .$nombre ."<br>\n";
$mensaje .= "<b>Email:</b> " .$email ."<br>\n";
$mensaje .= "<b>Tel&eacute;fono/Celular:</b> " .$telefono ."<br>\n";
$mensaje .= "<b>Consulta:</b> " .$consulta ."</p>\n";
$mensaje .= "</body>\n";
$mensaje .= "</html>\n";
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
$headers .= "From: " .$nombre ." <" .$email .">\r\n";
$headers .= "Reply-To: " .$email ."\r\n";

if (($nombre != "") && ($email != "")) {
    mail($destino, $asunto, $mensaje, $headers);
    header('Location: gracias.html');
} else {
	header('Location: error.html');
}
?>