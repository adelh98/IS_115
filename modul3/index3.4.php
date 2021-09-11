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
<form method="post" action="#">
  <h3>Tast inn Kommune:</h3>
    <label for="Kommune">Kommune:</label><br>
    <input type="text" id="Kommune" name="Kommune"><br><br>

    <input type="submit" value="Finn fylke">
</form>
    <?php
        //Henter variabler fra bruker Input.
        $Kommune = $_POST['Kommune'];

        //Bruker 
        $i = ucfirst(strtolower($Kommune)); //Lager en ny variabel for å sørge for at alle bokstaver blir gjort til små, bortsett fra første, for å samsvare med Switchen

        $Kommune = $i; //Re-definerer $Kommune med den nye behandlede Stringen fra $i

        //Lager en "Switch" for å sjekke hvilket fylke som skal printes til hvilken kommune:
        switch ($Kommune) {
            case "Kristiansand":
                echo "<br><b>$Kommune</b> ligger i <b>Agder</b> fylke";
            break;
            case "Lillesand":
                echo "<br><b>$Kommune</b> ligger i <b>Agder</b> fylke";
            break;
            case "Birkenes":
                echo "<br><b>$Kommune</b> ligger i <b>Agder</b> fylke";
            break;
            case "Harstad":
                echo "<br><b>$Kommune</b> ligger i <b>Troms og Finnmark</b>fylke";
            break;
            case "Kvæfjord":
                echo "<br><b>$Kommune</b> ligger i <b>Troms og Finnmark</b> fylke";
            break;
            case "Tromsø":
                echo "<br><b>$Kommune</b> ligger i <b>Troms og Finnmark</b> fylke";
            break;
            case "Bergen":
                echo "<br><b>$Kommune</b> ligger i <b>Vestland</b> fylke";
            break;
            case "Trondheim":
                echo "<br><b>$Kommune</b> ligger i <b>Trøndelag</b> fylke";
            break;
            case "Bodø":
                echo "<br><b>$Kommune</b> ligger i <b>Nordland</b> fylke";
            break;
            case "Alta":
                echo "<br><b>$Kommune</b> ligger i <b>Troms og Finnmark</b> fylke";
            break;
            default:
                echo "<br>Kommunen '<b>$Kommune</b>' er enda ikke registrert i systemet. Prøv igjen om 3-5 år :)";
        }

    ?>
</body>
</html>