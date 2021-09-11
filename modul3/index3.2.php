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
      $stop = 10; //Definerer slutt punktet for når telleren skal slutte å telle. Det vil si, den teller til start har kommet til 10.

      $sum = 0; //Summen er der jeg skal lagre summen av telleren senre i For løkken.

      //Lager en for løkke, $i er indexen som brukes til å telle. Den initaliseres til å være 0 og stopper når den har blitt 10.
      //I og med at jeg har sagt at "$start = 0" så vil den da stoppe etter 10 tellinger, men siden den begynner på 0, så er blir siste tallet 9. (0 + 10 = 9)

      for ($i = $start; $i < $stop; $i++) {
        echo "<br>Telleren er nå $i"; //Printer hver gang telleren inkrementeres
        $sum += $i; //Lagrer telleren i $sum som jeg senere bruker
      }
      echo "<br><br>Telleren har fullført, den totale summen er $sum"; //Skriver ut til skjerm, med dobbel "<br>"-tag for å separere output på fin måte.
    ?>
</body>
</html>