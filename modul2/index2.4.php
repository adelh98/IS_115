<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Oppgave 4</title>
  <meta name="description" content="Oppgave 4">
  <h1>Oppgave 4</h1>
</head>
<body>
<form method="post" action="#">
    <?php
        //Variabel for fødseldatoen
        $dateOfBirth = new DateTime('29.7.1998'); // Min egen fødseldato.
        //Henter system datoen ved hjelp av funksjonen "Datetime"
        $thisDayOfBirth = new DateTime('29.7.2021'); //Fødselsdagen min i år

        $today = new Datetime(date('m.d.y'));
        /* Lager logikken for differanse utreg. Bruker også "->" object operatoren som kaller en metode på en instanse og "diff" funksjonen som returnerer
        /* differeansen mellom to "Datetime" objekter. Disse er $dateOfBirth, $thisDateOfBirth og $today ^
        */
        $diffYear = $dateOfBirth->diff($thisDayOfBirth); //Differansen mellom fødselsdagen og fødselsdagen i år, antall år.
        $diffDays = $thisDayOfBirth->diff($today)->format("%a"); // Differansen mellom system dato(i dag) og fødselsdag i år, antall dager.

        printf('Din alder er : %d år og %d dager', $diffYear->y, $diffDays);


    ?>
</body>
</html>