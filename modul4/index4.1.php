<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Oppgave 1</title>
  <meta name="description" content="Oppgave 1">
  <h1>Oppgave 1</h1>
</head>
<body>
    <?php
    // Definerer Arrayen
    $arr = array();

    // Legger bestemte verdier med forhåndsbestemt index::
    $arr[0] = "Ole";
    $arr[3] = "Brum";
    $arr[5] = "Gikk";
    $arr[7] = "Med";
    $arr[8] = "En";
    $arr[15] = "Saks";

    //Lager en løkke
    foreach ($arr as $key=>$value) {
        print_r("På index <b>'$key'</b> har vi <b>'$value'</b><br>");
    }
    

    ?>
</body>
</html>