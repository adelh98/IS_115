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
    //Lager listen med deltakere uten noe "value" fordi de ikke har begynt enda
        $deltakere = array(
            "Adel" => 0,
            "Oskar" => 0,
            "Dzenet" => 0,
            "Adrian" => 0,
            "Ronald" => 0,
            "Petter" => 0,
            "Hercules" => 0,
            "Odin" => 0,
            "Felix" => 0,
            "Rolf" => 0
        );
    //Printer listen med deltakere
        echo "<h3>Deltakerene i konkuransen er:</h3>";
        foreach ($deltakere as $key => $value) {
            print_r("Navn: $key<br>"); 
        }
        echo "<br>";

    //Lager ny liste med samme deltakere som tar in rand() funksjonen for å gi et tilfeldig tall til hver av deltakerne
        foreach ($deltakere as $key => $value) {
            $deltakerTall = rand(1, 50);
            $deltakere[$key] = $deltakerTall;
        }
        arsort($deltakere); //Sortere liste.

    //Lager en foreach-løkke som printer navn med poengsum ved siden av.
    foreach ($deltakere as $key => $value){
        echo "Navn: $key || Score: $value<br>";   
        }   
        while (count($deltakere) > 1){
        echo "<br>";
            $key = array_search(min($deltakere), $deltakere);
            if  ($key !== false) {
                unset($deltakere[$key]);
                echo "<br>Slettet $key <br><br>";
            } else {
                echo "Error";
            }
        foreach ($deltakere as $key => $value) {
            $deltakerTall = rand(1, 50);
            $deltakere[$key] = $deltakerTall;
         }
            arsort($deltakere); //Sortere liste.
            foreach ($deltakere as $key => $value){
                echo "Navn: $key || Score: $value<br>";   
            }
    }

 

    ?>
</body>
</html>