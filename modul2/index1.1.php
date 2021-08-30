<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Oppgave 1</title>
  <meta name="description" content="Oppgave 4">
  <h1>Oppgave 1</h1>
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
    <input type="submit" value="Legg til">
</form>
    <?php
        //Lager dynamiske variabler. Disse blir tatt inn fra bruker og lagret i variabelen og senere brukt i logikken.
        $Etternavn = $_POST['Etternavn'];

        //Lager "logikken" for de ulike svarene:
        $Etternavn = ucfirst(strtolower($Etternavn));  //Her sørger jeg for at første bokstav blir gjort om til stor bokstav, og resten blir små uavhengig av CAPS lock eller ikke.

        $Lengde = strlen($Etternavn); //Her lager jeg en variabel som teller antall bokstaver og så bruker jeg det i echoen til slutt.

        //Printer ut resultatene i en setning ved hjelp av "Echo" i en oversiktlig tabell. Kunne ha gjort at det lagret seg ved legge det inn i en datastruktur
        //Men følte ikke det var nødvendig.
        echo "<h3>Output:</h3>";
        echo 
            "<table>
                <tr>
                    <td><b>Etternavn</b></td>
                    <td><b>Lengde (Bokstaver)</b></td>
                </tr>
                <tr>
                    <td>$Etternavn</td>
                    <td>$Lengde</td>
                </tr>
            </table>";
        
    ?>
</body>
</html>