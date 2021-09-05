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
    <?php
        //Variabel for fødseldatoen
        $dateOfBirth = new DateTime('29.7.1998'); // Min egen fødseldato.
        //Henter system datoen ved hjelp av funksjonen "Datetime"
        $thisDateOfBirth = new DateTime('29.7.2021'); //Fødselsdagen min i år (Altså 2021)

        $today = new Datetime(date('m.d.y'));
        /* Lager logikken for differanse utreg. Bruker også "->" object operatoren som kaller en metode på en instanse og "diff" funksjonen som returnerer
        /* differeansen mellom to "Datetime" objekter. Disse er $dateOfBirth, $thisDateOfBirth og $today ^
        */
        $diffYear = $dateOfBirth->diff($thisDateOfBirth); //Differansen mellom fødselsdagen og fødselsdagen i år, antall år.
        $diffDays = $thisDateOfBirth->diff($today)->format("%a"); // Differansen mellom system dato(i dag) og fødselsdag i år, antall dager.
        //$diffDays blir re-formatert til dager i String form, og brukt i printf linjen

        printf('Din alder er : %d år og %d dager', $diffYear->y, $diffDays);

    ?>
</body>
</html>