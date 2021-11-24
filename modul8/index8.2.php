<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Oppgave 2</title>
  <meta name="description" content="Oppgave 1">
  <h1>Oppgave 2</h1>
</head>

<body>
    <?php
   
   function wh_log($log_msg)
   {
       $log_filename = "log";
       if (!file_exists($log_filename)) 
       {
           // create directory/folder uploads.
           mkdir($log_filename, 0777, true);
       }
       $log_file_data = $log_filename.'/log_' . date('d-M-Y') . '.log';
       // if you don't add `FILE_APPEND`, the file will be erased each time you add a log
       file_put_contents($log_file_data, $log_msg . "\n", FILE_APPEND);
   } 
   
   // call to function
   wh_log("Ny hendelse..");

   // Path er ikke relativ til modulen, så stor sannsynlighet for at du må endre på pathen for at dette skal fungere. Gjelder også filnavn.
      $data = file("C:/xampp/htdocs/IS_115/modul8/log/log_23-Nov-2021.log",FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES); //read the entire file to array by ignoring new lines and spaces
        echo "<pre/>"; // print output of the above line
      
      print_r(array_slice($data, -10));


   
    ?>

</body>
</html>