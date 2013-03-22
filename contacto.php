<?php



$to = "ivaneric79@gmail.com";
$subject = "Contacto desde Jbandala";
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

 
$body = "Datos enviados:\n Nombre: $nombre\n Teléfono: $telefono\n E-Mail: $email\n Día:\n $dia\n Hora: $hora\n Mensaje: $mensaje\n";
$html  = "Datos enviados:<br/><br/>"; 
$html .= "Nombre: ".$nombre."<br/>";
$html .= "Tel: ".$telefono."<br/>";
$html .= "E-Mail: ".$email."<br/>";
$html .= "Mensaje: ".$mensaje."<br/>";


//mail(reserva@cava13.com, 'test', 'test');
//mail($to, $subject, $body);

include("smtp/class.phpmailer.php");
include("smtp/class.smtp.php");
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPSecure = "ssl";

$mail->Host = "smtp.gmail.com";
$mail->Port = 465;
$mail->SMTPAuth = true; 
$mail->Username = "iwsoft.mexico@gmail.com";
 $mail->Password = "iwsoftWmaster";

    $mail->From = "Jbandala";
  
      $mail->FromName = $_POST['nombre'];
   
      $mail->Subject = $subject;

      $mail->AltBody = "";
 
      $mail->MsgHTML($html);
  
      
  
 
  
    $mail->AddAddress("direccion@jbandala.com", "Destinatario");
$mail->AddCC("ivaneric79@gmail.com", "Destinatario2");

      $mail->IsHTML(true);
 
       
  
      if(!$mail->Send()) {
  
        echo "Error: " . $mail->ErrorInfo;
      //  dsm($mail->ErrorInfo);
 
      } else {
 
        echo "Mensaje enviado correctamente";
  //dsm("Mensaje enviado correctamente");
      } 

?>
