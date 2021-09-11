<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Oppgave 3</title>
  <meta name="description" content="Oppgave 3">
  <h1>Oppgave 3</h1>
</head>
<body>
    <?php
        //Lager dynamiske variabler. Disse blir tatt inn fra bruker og lagret i variabelen og senere brukt i logikken.
        $tall1 = 50; //Denne variablene må være en int i og med at den skal inkrementeres med 1 for hver utregning som blir gjort.
        $tall2 = "100"; //I og med at $tall2 ikke brukes til noe annet, så kan $tall2 være en string også mtp at det ikke skal endres.

        for ($i = 0; $i < 10; $i++) { //Setter opp en for løkke som starter fra 0, og teller seg opp til 10. Alt inni løkken blir gjort 10 ganger.
        //Lager "logikken" for de ulike svarene:
        $sum = $tall1 + $tall2; //Legger sammen tallene
        $diff = abs($tall1 - $tall2); //Subtraherer tallene og tar hensyn til potensielle negative verdier ved hjelp av abs() funksjon.
        $gjenn = $tall1 + $tall2 / 2; //Regner ut gjennomsnitt

        $tall1++; //For hver gjennomføring så inkrementeres tallet med 1

                //Printer ut resultatene i en setning ved hjelp av "Echo" og litt HTML "pynt":
                echo 
                "<h4>
                Summen av $tall1 og $tall2 = $sum. <br> 
                Differansen mellom $tall1 og $tall2 = $diff<br>
                Og gjennomsnittet for $tall1 og $tall2 = $gjenn
                </h4>";
        }
        
    ?>
</body>
</html>