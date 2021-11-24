<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Oppgave 5</title>
  <meta name="description" content="Oppgave 5">
  <h1>Oppgave 5</h1>
</head>
<body>
    <?php
    //Lager en string som jeg skal kryptere og dekrpytere
    $string = "Jeg heter Adel";
    echo "Orignale strengen er '<b>$string</b>' \n"; //Printer den originale strenger
    
    $krypter = encrypt($string); // Kaller på første funksjonen, som krypterer originale strengen
    
    $dekrypter = decrypt($krypter); // La inn kall for dekrpyterings funksjonen for å få den til å kjøre automatisk etter krypteringen.
    
    function encrypt($stringInput) {
      
      $arr = str_split($stringInput); // Splitter opp strengen, og fører inn hver bokstav i en index i en array.
      
      $tempArr = []; // Lager tomt array for å føre inn tallene jeg får fra loopen.
      
      // Looper gjennom arrayen, og krypterer hver bokstav og fører inn i et nytt og tomt array.
      foreach ($arr as $char) {
        $kryptert = ord($char); // ord() krypterer til ASCII
        $tempArr[] = (string)$kryptert; //Fører tallene inn i det tomme arrayet, og caster til "string" for å få riktig datatype
      }
      
      $kryptertString = implode("", $tempArr); // Setter sammen arrayet om til en string
      
      echo "<br>Den krypterte strengen er: <b>'$kryptertString'</b>"; // Printer den krypterte stringen

      return $tempArr;
      
    }
    
    
    // Denne funksjonene tar inn det nye arrayet fra den encrypt() og dekrypterer.
    function decrypt($input) {
      $tempArr = []; // Lager nok et nytt array for å føre inn alle bokstavene igjen etter de-kryptering
      
      // Looper gjennom arrayet, og dekrypterer og fører inn i nytt array.
      foreach ($input as $char) {
        $dekrypt = chr($char); // chr() de-krypterer og gjør om fra ASCII til tekst
        $tempArr[] = (string)$dekrypt;
      }
      
      $dekrypterString = implode("", $tempArr); // Setter sammen til en String igjen
      
      echo "<br>Den de-krypterte strenger er: <b>'$dekrypterString'</b>";
    }

    ?>
</body>
</html>