<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Oppgave 5</title>
  <meta name="description" content="Oppgave 4">
  <h1>Oppgave 5</h1>
</head>

<body>
<form action="index2.5.php" method="get">
  <input type="hidden" name="act" value="run">
  <input type="submit" value="Generer passord">
</form>
    <?php
    // Lager min egen funksjon som skal være passord generatoren.
    function passordGenerator($lengde){
            $passord = ''; //Tom string
            $passordSets = ['1234567890', 'ABCDEFGHJKLMNPQRSTUVWXYZ', 'abcdefghjkmnpqrstuvwxyz']; //Lager set for tilgjengelige symboler

    // Henter en tilfeldig symboler fra array listen
    foreach ($passordSets as $passordSet) {                          //Lager en foreach løkke som går gjennom hvert element i listen $passordSets
        $passord .= $passordSet[array_rand(str_split($passordSet))]; //Bruker funksjonen "array_rand" som velger tilfedlige symboler fra listen
                                                                     //Og jeg bruker funksjonen "str_split" som gjør en string til en array.
    }   
    // Sjekker at lengden er riktig
    while (strlen($passord) < $lengde) {
        $randomSet = $passordSets[array_rand($passordSets)];
        $passord .= $randomSet[array_rand(str_split($randomSet))];
    }
    // Printer passordet.
    echo "<br>\nDitt nye passord er: $passord";
    }

    // Kaller funksjonen med angitt lengde(8):
    if (!empty($_GET['act'])) {
        passordGenerator(8);
    }
         
    ?>
</body>
</html>