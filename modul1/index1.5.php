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

        $sekunder = 4400;

        $timer = (int)($sekunder / 3600);
        echo "$timer";
        $minutter = (int)(($sekunder - 3600 * $timer )/60);
        echo "\n$minutter";
        $Tot_Sekunder = $sekunder % 60;
        echo "\n$Tot_Sekunder";

        //echo 'timer:'.$timer.' minutter:'.$minutter.' Tot_Sekunder:'.$Tot_Sekunder.'';

    ?>
</body>
</html>