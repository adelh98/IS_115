<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Oppgave 1</title>
  <meta name="description" content="Oppgave 1">
  <h1>Oppgave 1</h1>

  <h3>Trykk linken under for å laste ned PDF-filen:</h3>
  <form action="index8.4.php" method="get">
    <input type="hidden" name="act" value="run">
    <input type="submit" value="Last Ned">
  </form>

<body>
    <?php
        // Sjekker om knappen "Last Ned" er trykket, hvis ikke så skjer ingenting.
        if (!empty($_REQUEST['act'])) {
          lastNed('filer/Test.pdf');
        }

      function lastNed($filepath) {
        
        // Sjekker om filen eksisterer
        if(file_exists($filepath)) {
          
          // Definerer "Header" informasjon
          header('Content-Description: File Transfer');
          header('Content-Type: application/octet-stream');
          header("Cache-Control: no-cache, must-revalidate");
          header("Expires: 0");
          header('Content-Disposition: attachment; filename="'.basename($filepath).'"');
          header('Content-Length: ' . filesize($filepath));
          header('Pragma: public');
          
          //Renser (sletter) output bufferet
          ob_clean();
          
          // Fjerner output bufferet fra systemet. 
          flush();
          
          // Leser filstørrelsen
          readfile($filepath);
          
          // Terminerer scriptet.
          exit();
        }
      }
        
        ?>

</body>
</html>