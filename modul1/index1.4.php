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
<form method="post" action="#">
  <h3>Tast inn tallene du ønsker å sjekke:</h3>
    <label for="tall1">Tall 1:</label><br>
    <input type="number" id="tall1" name="tall1"><br>
    <label for="tall2">Tall 2:</label><br>
    <input type="number" id="tall2" name="tall2"><br><br>
    <input type="submit" value="Submit">
</form>
    <?php
        //Lager dynamiske variabler. Disse blir tatt inn fra bruker og lagret i variabelen og senere brukt i logikken.
        $tall1 = $_POST['tall1'];
        $tall2 = $_POST['tall2'];

        //Lager "logikken" for de ulike svarene:
        $sum = $tall1 + $tall2; //Legger sammen tallene
        $diff = abs($tall1 - $tall2); //Subtraherer tallene og tar hensyn til potensielle negative verdier ved hjelp av abs() funksjon.
        $gjenn = $tall1 + $tall2 / 2; //Regner ut gjennomsnitt

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