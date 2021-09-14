<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Oppgave 2</title>
  <meta name="description" content="Oppgave 2">
  <h1>Oppgave 2</h1>
</head>
<body>
    <?php
      //Lager variabler som skal brukes
      $start = 0; //Definerer start punktet, som er 0
      $stop = 9; //Definerer slutt punktet for når telleren skal slutte å telle. Det vil si, den teller til start har kommet til 9.

      $sum = 0; //Summen er der jeg skal lagre summen av telleren senre i For løkken.

      for ($i = $start; $i <= $stop; $i++) { //For løkke som bruker Start/Stop variablene for å definere start punkt og stop punkt.
        echo "<br>Telleren er nå $i"; //Printer hver gang telleren inkrementeres
        $sum += $i; //Lagrer telleren i $sum som jeg senere bruker
      }
      echo "<br><br>Telleren har fullført, den totale summen er $sum"; //Skriver ut til skjerm, med dobbel "<br>"-tag for å separere output på fin måte.
    ?>
</body>
</html>