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
            "Adel" => "",
            "Oskar" => "",
            "Dzenet" => "",
            "Adrian" => "",
            "Ronald" => "",
            "Petter" => "",
            "Hercules" => "",
            "Odin" => "",
            "Felix" => "",
            "Rolf" => ""
        );
    //Printer listen med deltakere
        echo "<h3>Deltakerene i konkuransen er:</h3>";
        foreach ($deltakere as $key => $value) {
            print_r("Navn: $key<br>"); 
        }
        echo "<br>";
    
    //Setter opp random funksjonen
        $max = 50;
        $min = 1;
        rand($min, $max);
    //Lager ny liste med samme deltakere som tar in rand() funksjonen for å gi et tilfeldig tall til hver av deltakerne
        $rand = array(
            "Adel" => rand($min, $max),
            "Oskar" => rand($min, $max),
            "Dzenet" => rand($min, $max),
            "Adrian" => rand($min, $max),
            "Ronald" => rand($min, $max),
            "Petter" => rand($min, $max),
            "Hercules" => rand($min, $max),
            "Odin" => rand($min, $max),
            "Felix" => rand($min, $max),
            "Rolf" => rand($min, $max)
        );
        
    //Den nye listen spleises med den gamle for å få oppdatert tall og sorteres
        $oppdatertListe = array_replace($deltakere, $rand);
        arsort($oppdatertListe);
     

        
        //Lager en foreach-løkke som printer navn med poengsum ved siden av.
        foreach ($oppdatertListe as $key => $value){
            echo "Navn: $key || Score: $value<br>";
            
        }
        
        while (count($oppdatertListe) > 1){
        echo "<br>";
        
            $key = array_search(min($oppdatertListe), $oppdatertListe);
            if  ($key !== false) {
                unset($oppdatertListe[$key]);
                echo "<br>Slettet $key <br>";
            } else {
                echo "Vinneren er $key!";
            }
        
            foreach ($oppdatertListe as $key => $value){
                echo "Navn: $key || Score: $value<br>";   
            }
    }

 

    ?>
</body>
</html>