<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Oppgave 1</title>
  <meta name="description" content="Oppgave 1">
  <h1>Oppgave 1</h1>

  <h3>Trykk linken under for å laste ned PDF-filen:</h3>
  <form action="<?php echo  $_SERVER['PHP_SELF']; ?>" method="post">
  <input type="submit" name="lastned "value="Last ned">
  </form>

<body>
    <?php

      $filepath = 'filer/Test.pdf';
         
         //Check the file exists or not
         if(file_exists($filepath)) {
           
           //Define header information
           header('Content-Description: File Transfer');
           header('Content-Type: application/pdf');
           header("Cache-Control: no-cache, must-revalidate");
           header("Expires: 0");
           header('Content-Disposition: attachment; filename="'.basename($filepath).'"');
           header('Content-Length: ' . filesize($filepath));
           header('Pragma: public');
           
           //Clear system output buffer
           flush();
           
           //Read the size of the file
           readfile($filepath);
           
           //Terminate from the script
           die();
          }
          
    ?>

</body>
</html>