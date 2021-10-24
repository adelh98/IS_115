<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Oppgave 5</title>
  <meta name="description" content="Oppgave 5">
  <h1>Oppgave 5</h1>
</head>
<body>
    <?php
    //Lager en string som jeg skal kryptere og dekrpytere
    $string = "Jeg heter Adel";

    echo "Orignale strengen er '<b>$string</b>' \n";
    
    $arr = str_split($string);
    
    echo "<br>Den kryptertse strenger er: \n";

    $emptyArr = []; //Lager tomt array for å føre inn tallene jeg får fra loopen.

    foreach ($arr as $char) {
      $kryptert = ord($char);
      $emptyArr[] = (string)$kryptert; //Fører tallene inn i det tomme arrayet
    }

    shuffle($emptyArr);
    
    $kryptertString = implode("", $emptyArr);

    echo $kryptertString; //Printer den krypterte stringen







    




    ?>
</body>
</html>