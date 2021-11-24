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
    // Lager listen med deltakere uten noe "value" fordi de ikke har begynt enda
        $deltakere = array(
            "Adel" => 0,
            "Oskar" => 0,
            "Dzenet" => 0,
            "Adrian" => 0,
            "Ronald" => 0,
            "Victor" => 0,
            "Hercules" => 0,
            "Odin" => 0,
            "Felix" => 0,
            "Helikopter" => 0
        );
    // Printer listen med deltakere
        echo "<h3>Deltakerene i konkuransen er:</h3>";
        foreach ($deltakere as $key => $value) {
            print_r("Navn: $key<br>"); 
        }
        echo "--------------------- <br>";
    // Her går jeg gjennom listen igjen, og tildeler et tilfeldig tall til hver deltaker mellom 1 og 50
        foreach ($deltakere as $key => $value) {
            $deltakerTall = rand(1, 50);
            $deltakere[$key] = $deltakerTall;
        }
        arsort($deltakere); //Listen sorteres.
        
        // Lager en foreach-løkke som printer navn på deltaker med poengsum ved siden av etter at de har blitt tildelt ett tilfeldig tall.
        foreach ($deltakere as $key => $value){
            echo "Navn: $key || Score: $value<br>\n";   
        }
        // Her teller jeg antall deltakere i listen, for så sjekke om listen med deltakere er større enn 1. Da fortsetter koden
        while (count($deltakere) > 1){

            $lavesteVerdi = min($deltakere); // Bruker min() til å finne laveste verdi i $deltakere listen.
            
            // Looper gjennom listen igjen
            foreach ($deltakere as $key => $value) {
                // Sjekker for identisk verdi. Altså om $value er lik $lavesteVerdi.                                                  
                if($value === $lavesteVerdi) { 
                    // Hvis den er lik, så fjerner jeg $key som tilhører den $value.                                                        
                    unset($deltakere[$key]);
                    // Og printer en melding.                                                          
                    echo "<strong style=color:red> Slettet $key med $value poeng. </strong><br><br>"; 
                }
            }
            echo "-----------------------------------<br>";
            // Ny runde, alle deltakere fra forrige blir med videre og får nye tall bortsett fra de som ble fjernet.
            foreach ($deltakere as $key => $value) {
                $deltakerTall = rand(1, 50);
                $deltakere[$key] = $deltakerTall;
            }
            arsort($deltakere); // Sortere liste.
            
            if(count($deltakere) > 1) { // Sjekker om listen er større enn 1
                foreach ($deltakere as $key => $value){
                    echo "Navn: $key || Score: $value<br>";  // Printer listen igjen 
                }
            } else { // Hvis ikke, annonseres vinneren. For da er listen KUN 1.
                    echo "<b>Navn: $key || Score: $value<br></b>"; //Printer siste personene på listen
                    echo "<br><strong style=color:green>Vinneren er $key med $value Poeng! Gratulerer!</strong><br><br>"; //Gratulasjon!
            }
        }
            
    ?>
</body>
</html>