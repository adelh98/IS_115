<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Oppgave 1</title>
  <meta name="description" content="Oppgave 1">
  <h1>Oppgave 1</h1>
</head>
<body>

</body>

<?php
  
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
  
require 'vendor/autoload.php';
  
$mail = new PHPMailer(true);
  
try {
    $mail->SMTPDebug = 2;                                       
    $mail->isSMTP();                                            
    $mail->Host       = 'smtp.gmail.com;';                    
    $mail->SMTPAuth   = true;                             
    $mail->Username   = 'adel.hodz98@gmail.com';                 
    $mail->Password   = 'Genser234';                        
    $mail->SMTPSecure = 'tls';                              
    $mail->Port       = 587;  
  
    $mail->setFrom('adel.hodz98@gmail.com', 'Adel');           
    $mail->addAddress('darkmaninside@hotmail.no');
       
    $mail->isHTML(true);                                  
    $mail->Subject = 'Funker du';
    $mail->Body    = 'Får du mailen min <b>Testa?</b>??? ';
    $mail->AltBody = 'ÅLøøøøøøøøøøøøøøøøøøøø';
    $mail->send();
    echo "Mail has been sent successfully!";
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
  
?>
</html>