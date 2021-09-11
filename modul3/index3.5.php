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
      //Lager variabler som skal brukes
      
      $sum = 1; //Summen er der jeg skal lagre antall hvetekorn per rute senre i For løkken.
    
      //Lager en for løkke, $i er indexen som brukes til å telle. Den initaliseres til å være 0 og stopper når den har blitt 70.
  
      for ($i = 1; $i <= 64; $i++) {
        $filtrerNummer = filtrerNummer($sum);
        echo "<br>Rute $i har $filtrerNummer hvetekorn<br>"; //Printer hver gang telleren inkrementeres
        $sum = $sum * 2; //Lager logikken for dobbling for hver rute

      }
      function filtrerNummer($nummer) { 
        if($nummer > 1000000000) {
           $formatedNumber = number_format($nummer, 0, null, " ");
           $formatedNumber = explode(' ', $formatedNumber);
          //(int) caster til int fra String
          $antallHundre = (((int)($formatedNumber[3] / 100) ?: ''));

          $nummer = $formatedNumber[0] . ' Milliard(er), ' . 
                    (int)$formatedNumber[1] . ' Million(er), ' .  //Før "?" = condition, etter "?" = true, etter ":" = else
                    $formatedNumber[2] . ' Tusen, ' . (($antallHundre != '' ? $antallHundre . ' Hundre, ' : '') . " og " . (int)($formatedNumber[3] % 100));
        }
        return $nummer;
      }
    ?>
</body>
</html>