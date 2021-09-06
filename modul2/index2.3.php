<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Oppgave 3</title>
  <meta name="description" content="Oppgave 4">
  <h1>Oppgave 3</h1>
</head>
<body>
<form method="post" action="#">
    <?php
        //Lager variabel med settningen som skal brukes.
        $myString = "Thereses familie skulle ha ris til middag. Hun ville heller ha en is å spise.";

        echo "<h3>$myString</h3>"; //Printer setningen

        //Lager variabel for det ordet som skal finnes i settningen $myString.
        $word = "is";

        //Kaller funksjonen som teller antall ganger ordet "is" går i settningen.
        $amount = substr_count($myString, $word);

        //Printer fullstendig svar i en settning.
        echo "Ordet ''<b>$word</b>'' dukker opp <b>$amount</b> ganger i settningen ''<b>$myString</b>''";
    ?>
</body>
</html>