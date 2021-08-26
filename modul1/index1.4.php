<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Oppgave 4</title>
  <meta name="description" content="Oppgave 4">
  <meta name="Adel" content="SitePoint">
  <h1>Oppgave 4</h1>
</head>

<body>
    <?php
        //Lager variablene
        $tall1 = 250;
        $tall2 = 500;

        //Lager "logikken" for de ulike svarene:
        $sum = $tall1 + $tall2;
        $diff = $tall1 - $tall2; //Det skal sies at dersom dette hadde vært dynamisk og ikke statisk måtte jeg ha gjort en litt grunidgere løsning...
            if($diff > 0) {
              $diff = $tall1 - $tall2;
            } elseif($diff < 0) {
              $diff = "negativt";
            }

        $gjenn = $tall1 + $tall2 / 2; //Det samme gjelder her.

        //Printer ut resultatene i en setning ved hjelp av "Echo" og litt HTML "pynt":
        echo 
        "<h2>
        Summen av $tall1 og $tall2 = $sum. <br> 
        Differansen mellom $tall1 og $tall2 = $diff<br>
        Og gjennomsnittet for $tall1 og $tall2 = $gjenn
        </h2>";
        
    ?>
</body>
</html>