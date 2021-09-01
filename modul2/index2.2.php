<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Oppgave 2</title>
  <meta name="description" content="Oppgave 4">
  <h1>Oppgave 2</h1>
</head>
<style>
    table, td {
        border: 1px solid black;
        position: relative;
        margin-left: 25px; 
    }
</style>
<body>
<form method="post" action="#">
  <h3>Tast inn etternavn:</h3>
    <label for="Etternavn">Etternavn:</label><br>
    <input type="text" id="Etternavn" name="Etternavn"><br><br>
    <input type="submit" value="Legg Til">
</form>
    <?php
        //Lager dynamiske variabler. Disse blir tatt inn fra bruker og lagret i variabelen og senere brukt i logikken.
        $Etternavn = $_POST['Etternavn'];

        $Stripped = strip_tags($Etternavn); //Her stripper jeg for mulig HTML syntax og legger det inn i ny variabel.

        $Etternavn = ucfirst(strtolower($Stripped));
        //Bruker $Stripped variabel for så å re-definere $Etternavn med den nye versjonen.

        //Printer ut resultatene i en setning ved hjelp av "Echo" i en oversiktlig tabell.
        echo "<h3>Output:</h3>";
        echo 
            "<table>
                <tr>
                    <td><b>Etternavn</b></td>
                </tr>
                <tr>
                    <td>$Etternavn</t>
                </tr>
            </table>";
        
    ?>
</body>
</html>