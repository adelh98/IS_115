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
    <?php
        //Her må jeg lage min egen funksjon:
        function randomPassord($length = 8) {  //Setter passord lengden på 8
            $symboler = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ01234567889!@&#%*()_-=+:;,.?"; //Alle tilgjengelige symboler som kan brukes i passordet

            $passord = substr(str_shuffle($symboler), 0, $length);
            
            return $passord; //Generer et tilfeldig passord av de symboelen i variablene $symboler  
        }
        
        $passord = randomPassord(); //Trenger ikke å oppgi lengde, i og med at det er fast satt fra før av.

        echo "Ditt nye passord er: $passord";
        
    ?>
</body>
</html>