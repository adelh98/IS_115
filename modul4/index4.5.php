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
        
        echo "Runde tall her?<br><br>";
        foreach ($deltakere as $key => $value) {
            $deltakerTall = rand(1, 5);
            $deltakere[$key] = $deltakerTall;
        }
        arsort($deltakere); //Sortere liste.

    //Lager en foreach-løkke som printer navn med poengsum ved siden av.
    foreach ($deltakere as $key => $value){
        echo "Navn: $key || Score: $value<br>\n";   
        }   
        while (count($deltakere) > 1){
            echo "<br>";
            $lavesteVerdi = array_search(min($deltakere), $deltakere);
            unset($deltakere[$lavesteVerdi]);
            echo "Slettet $lavesteVerdi <br><br>";
            
        foreach ($deltakere as $key => $value) {
            $deltakerTall = rand(1, 5);
            $deltakere[$key] = $deltakerTall;
         }
            arsort($deltakere); //Sortere liste.
        
        if(count($deltakere) > 1) {
            foreach ($deltakere as $key => $value){
                echo "Navn: $key || Score: $value<br>";   
            }
        } else {
            echo "Vinneren er $key med en score på $value!";
        }
    }
            

 

    ?>
</body>
</html>