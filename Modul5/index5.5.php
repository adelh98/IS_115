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

    echo "<br>Kryptering av strengen blir: "; 
    for($i = 0; $i < strlen($string); $i++ ) {
        $kryptert = mb_ord($string);

    }
    echo $kryptert;

    




    ?>
</body>
</html>