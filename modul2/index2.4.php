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
        $today = new Datetime(date('m.d.y'));
        /* Lager logikken for differanse utreg. Bruker også "->" object operatoren som kaller en metode på en instanse og "diff" funksjonen som returnerer
        /* differeansen mellom to "Datetime" objekter. Disse er $dateOfBirth og $today ^
        */
        $diff = $today->diff($dateOfBirth);
        printf(' Alderen er : %d år og %d dager', $diff->y, $diff->m, $diff->d);
        printf("\n");

    ?>
</body>
</html>