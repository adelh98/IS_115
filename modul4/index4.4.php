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
    <?php 
        // Her vil den listen som er forhåndsfylt bli endret etter knappen "Endre" er trykket.
        // Helt undøvendig akkurat nå, men gir en mer elegant og dynamisk løsning.

        $arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

        // Setter opp en foreach lække som går gjennom hvert element i listen og printer ut med print_r
        // Bekreftelsen på endring av informasjon til bruker
        echo "<h3>Listen før element erstattning:</h3>";
        foreach ($arr as $key => $value) {
            print_r("<b>Index: $key</b> = $value<br>");
        }
        echo "<h3>Ferdig!</h3>";
       
        echo "<h3>Listen etter element erstattning:</h3>";
        foreach ($arr as $key => $value) {
            $deltakerTall = rand(1,100); //Gir random tall for hver index i listen
            $arr[$key] = $deltakerTall;
        }
        foreach($arr as $key => $value) {
            print_r("<b>Index: $key</b> = $value<br>");
        }
        echo "<h3>Ferdig!</h3>";
        
        // Her lager jeg logikk og variabler for å starte indexen høyere:
        $nyIndexStart = 10;
  
        $arr = array_combine(range($nyIndexStart, 
                count($arr) + ($nyIndexStart-1)),
                array_values($arr));
  
        echo "<h3>Listen etter Re-Indexing:</h3>";
        
        foreach ($arr as $key => $value) {
            print_r("<b>Index: $key</b> = $value<br>"); 
        }
        echo "<h3>Ferdig!</h3>";

  
    ?>
</body>
</html>