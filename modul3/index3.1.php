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
<form method="post" action="#">
  <h3>Tast inn Navn og Alder:</h3>
    <label for="Navn">Navn:</label><br>
    <input type="text" id="Navn" name="Navn"><br><br>
    <label for="Alder">Alder:</label><br>
    <input type="number" id="Alder" name="Alder"><br><br>
    <input type="submit" value="Sjekk myndighet">
</form>
    <?php
        //Henter variabler fra bruker Input.
        $Navn = $_POST['Navn'];
        $Alder = $_POST['Alder'];
        
        //Sjekker om $Alder er STØRRE enn 18, hvis den er det så kjøres første Echo, hvis ikke kjøres andre.
        if($Alder > 18) {
            echo "<br><h3>$Navn er $Alder år og er dermed myndig!</h3>";
        } else {
            echo "<br><h3>$Navn er $Alder år og er dermed ikke myndig!</h3>";
        }
    ?>
</body>
</html>