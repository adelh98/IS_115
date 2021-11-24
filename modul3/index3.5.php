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
      // Lager variabler som skal brukes
      
      $sum = 1; // Summen er der jeg skal lagre antall hvetekorn per rute senre i For løkken.
    
      // Lager en for løkke, $i er indexen som brukes til å telle. Den initaliseres til å være 0 og stopper når den har blitt 64.
      for ($i = 1; $i <= 64; $i++) {
        $filtrerNummer = filtrerNummer($sum);                 // Kaller filtrerNummer funksjonen med $sum som paramter
        echo "<br>Rute $i har $filtrerNummer hvetekorn<br>";  // Printer hver gang telleren inkrementeres
        $sum = $sum * 2;                                      // Lager logikken for dobbling for hver rute

      }
      function filtrerNummer($nummer) { 
        if($nummer > 1000000000) {                                 // Sjekker først om tallet er over en milliard
           $formatedNumber = number_format($nummer, 0, null, " "); // Re-formaterer nummeret til gruppe indeling på tusener, hundre osv
           $formatedNumber = explode(' ', $formatedNumber);        // Her deler jeg opp en string med en annen string. Optimaliserer Output meldingen
          
           /*
           * Her lager jeg logikken outputen for setningen. formatedNumber er gjort om til en array med 0, 1, 2 og 3 osv som index for hver grupering.
           * Henter da hver index, og legger til en string på enden, samtidig som jeg fletter dem sammen i en hel setning.
           * For Hundre og Ener kategorien kreves det en egen innebygd logikk for å regne om. Da har jeg laget $antallHundre og brukt modulo operatoren.
           */
          
          $nummer = ""; // Setter variabelen om til en string for ikke å få konflikt med datatyper under utregning
          
          /*
          * Sjekker om det er nødvendig å benytte "x" ved å sjekke om at det faktisk finnes en x-ende index i arrayen.
          * Dette gjøres ved å bruke funksjonen count(), hvor jeg fører inn Arrayen og teller.
          * Denne logikken blir også gjentatt hele tiden for å sjekke når "neste" seksjon må benyttes.
          */

          // "(int)" caster til int fra String, på den måten vil return valuen få INT datatype istedet for string. Hjelper for senere utregninger.
          if( count($formatedNumber) >= 7 ){
            $nummer .= (int)$formatedNumber[count($formatedNumber)-7] . ' Trillion(er), ';
            }
          if( count($formatedNumber) >= 6 ){
          $nummer .= (int)$formatedNumber[count($formatedNumber)-6] . ' Billiard(er), ';
          }
          if( count($formatedNumber) >= 5 ){
            $nummer .= (int)$formatedNumber[count($formatedNumber)-5] . ' Billion(er), ';
          }
          
          $antallHundre = (((int)($formatedNumber[3] / 100) ?: '')); // Lager en variabel for bedre leselig kode senere

          $nummer .= (int)$formatedNumber[count($formatedNumber)-4] . ' Milliard(er), ';
          $nummer .= (int)$formatedNumber[count($formatedNumber)-3] . ' Million(er), ';  // Før "?" = condition, etter "?" = true, etter ":" = else
          $nummer .= (int)$formatedNumber[count($formatedNumber)-2] . ' Tusen, ' . (($antallHundre != '' ? $antallHundre . ' Hundre, ' : ''));
          $nummer .= " og " . (int)($formatedNumber[count($formatedNumber)-1] % 100);
        }
        return $nummer;
      }
    ?>
</body>
</html>