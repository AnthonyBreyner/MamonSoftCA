<?php
include("datos/conexion.php");
require_once ("inc/PHPMail/class.phpmailer.php");
$inserta = "INSERT into sugerencias(nombres,cedula,correo,telefono,mensaje)
            VALUES ('".$_POST['nombres']."','".$_POST['cedula']."','".$_POST['correo']."','".$_POST['telefono']."','".$_POST['mensaje']."')";
$resultado = mysql_query($inserta);
if($resultado) {
    $ruta = "Bienvenido(a).
             <br>
             <br>
			La Familia de MamonSoft le  agradece su interés por ingresar a nuestra base de datos, nos comunicaremos con usted a la brevedad posible. 
		    
			";

    $mail = new PHPMailer ();

    $body = '<body style="margin: 10px;">Prueba de Envio<br /></body>'; // file_get_contents('');
    // $body = preg_replace('/[\]/','',$body);
    $mail->IsSMTP (); // telling the class to use SMTP

    $mail->SMTPDebug = 0;
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPSecure = "tls";
    $mail->SMTPAuth = true; // enable SMTP authentication $mail->SMTPKeepAlive = true; // SMTP connection will not close after each email sent

    $mail->Port = 587;
    $mail->Username = "mamonsoft.ca@gmail.com"; // SMTP account username
    $mail->Password = "Za63qj2p"; // SMTP account password
    $mail->SetFrom ( 'mamonsoft.ca@gmail.com', 'MamonSoft' );
    $mail->AddReplyTo ( 'mamonsoft.ca@gmail.com', 'Confirmacion de Curso' );
    $cuerpo = '<br>' . $ruta;
    $mail->AltBody = "Texto Alternativo"; // optional, comment out and test
    $mail->MsgHTML ( $cuerpo );
    $address = $_POST['correo'];
    $name = $_POST['nombres'];
    $mail->AddAddress ( $address, $name );

    if (! $mail->Send ()) {
        echo "Error al enviar: " . $mail->ErrorInfo;
    } else {
        echo "Mensaje enviado a:  " . $address . "!";
    }
}else echo $inserta;
?>
