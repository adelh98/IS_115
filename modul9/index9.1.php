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
    $mail->Username   = 'sender@eksempel.com'; //Legg til din epost adresse her             
    $mail->Password   = ''; //Legg til ditt passord her                        
    $mail->SMTPSecure = 'tls';                              
    $mail->Port       = 587;  
  
    $mail->setFrom('sender@eksempel.com', 'navn');           
    $mail->addAddress('mottaker@eksempel.com');
       
    $mail->isHTML(true);                                  
    $mail->Subject = 'Funker du';
    $mail->Body    = 'Får du mailen min <b>Testa?</b>??? ';
    $mail->AltBody = 'Funkgerer du?';
    $mail->send();
    echo "Epost har blitt sendt!";
} catch (Exception $e) {
    echo "Eposten kunne ikke sendes på grunn av: {$mail->ErrorInfo}";
}
  
?>
</html>