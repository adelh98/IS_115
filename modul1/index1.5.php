<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Oppgave 5</title>
  <meta name="description" content="Oppgave 5">
  <meta name="Adel" content="SitePoint">
  <h1>Oppgave 5</h1>
</head>

<body>
    <?php
        //Lager en variabel med de angitte sekundene.
        $sekunder = 4400;
        
        $timer = (int)($sekunder / 3600); //Deler $sekunder på 3600 fordi det er 3600 sekunder i en time. Og jeg vet det HVERTFALL er 1 time i 4400 sekunder.

        $minutter = (int)(($sekunder - 3600 * $timer )/60); //Her får jeg minuttene.

        $Tot_Sekunder = $sekunder % 60; //Bruker modulo operatoren for å dividere resterende verdi av $sekunder på 60. 

        //Printer full setning med variablene flettet sammen.
        echo ' Det er '.$timer.' timer. '.$minutter.' minutter Og '.$Tot_Sekunder.' sekunder i '.$sekunder. ' sekunder';

    ?>
</body>
</html>