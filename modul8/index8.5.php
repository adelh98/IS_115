<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Oppgave 5</title>
  <meta name="description" content="Oppgave 1">
  <h1>Oppgave 5</h1>
</head>
<body>
    <?php
    use setasign\Fpdi\Fpdi;
    use setasign\Fpdi\PdfReader;

    require_once 'PDF/fpdf/fpdf.php';
    require_once 'PDF/fpdi/src/autoload.php';

    // Sjekker om knappen er trykket, hvis ikke så skjer ingenting.
    if (!empty($_REQUEST['act'])) {
      registrer();
    }
    
    function registrer() {
      // Lager variabler, ikke fult dynamiske.
      $medlem = "Petrus";
      $date = date("Y/m/d");
      $town = "Kristiansand";
      $image = "bilder/default.jpg";
      
      // Skrur på output buffering for ikke å forvirre output
      ob_start();
      
      // Initialiserer PDF'en.
      $pdf = new FPDI();
      // Legger til siden
      $pdf->AddPage();
      // Legger til kilde filen
      $pdf->setSourceFile('filer/velkomstbrev.pdf');
      
      // Henter første side.
      $tplIdx = $pdf->importPage(1);  
      
      // Bruker første side og plaserer den på punkt 10, 10, med bredde på 100 mm
      $pdf->useTemplate($tplIdx, 10, 10, 200);
      
      // Her definerer jeg text, text type, text farge, text størrelse og plassering
      $pdf->SetFont('Arial');
      $pdf->SetFontSize(10);
      $pdf->SetTextColor(0,0,0);
      $pdf->SetXY(43, 107); // Her plassering for navn ved siden av "kjære"
      $pdf->Write(0, "$medlem");
      $pdf->SetXY(178, 30); // Her er plassering for by oppe i høyre
      $pdf->Write(0, $town);
      $pdf->SetXY(180, 35); //Her er plassering for date oppe i høyre
      $pdf->Write(0, $date);

      // Legger bilde på midten nede
      $pdf->Image($image, 80, 222, 60, 70); // Kordinater for bildet.
      
      // Når alt er gjort, lages det en ny fil med det nye outputet.
      $pdf->Output('newpdf1.pdf', 'D');
      
      // Sender output bufferet og skrur av output buffering.
      ob_end_flush();
    }
      ?>

<h3>Trykk "Registrer" for å simulere en fullført registrering.</h3>
<form action="index8.5.php" method="get">
    <input type="hidden" name="act" value="run">
    <input type="submit" value="Registrer">
  </form>

</body>
</html>