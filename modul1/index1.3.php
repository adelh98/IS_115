<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Oppgave 3</title>
  <meta name="description" content="Oppgave 3">
  <meta name="Adel" content="SitePoint">
  <h1>Oppgave 3</h1>
</head>
<style>
    table, td {
        border: 1px solid black;
        position: relative;
        margin-left: 25px; 
    }
</style>
<body>
    <?php
        //Person 1:
            $Navn = "Adel";
            $Alder = 23;
        //Person 2
            $Navn2 = "Adrian";
            $Alder2 = 20;

        //Her printer jeg i tabell.
        echo "<h3>Vanlig tabell:</h3>";    
        echo 
            "<table>
                <tr>
                    <td>Navn:</td>
                    <td>Alder:</td>
                </tr>
                <tr>
                    <td>$Navn</td>
                    <td>$Alder</td>
                </tr>
                <tr>
                    <td>$Navn2</td>
                    <td>$Alder2</td>
                </tr>
            </table>";

        //Denne første listen punktert liste.
         //Printer listen med "echo"
         echo "<h3>\nPunktert liste:</h3>" ;
         echo 
        "<ul>
            <li>$Navn, $Alder</li>
            <li>$Navn2, $Alder2</li>
        </ul>";
 
        //Denne listen er med tall
        echo "<h3>\nNummerert liste:</h3>";
        //Printer listen med "echo"
        echo 
        "<ol>
            <li>$Navn, $Alder</li>
            <li>$Navn2, $Alder2</li>
        </ol>";

        //Her bruker jeg bare de tidligere variablene og printer ved "Echo" igjen.
        echo '<h3>Printer navn og alder i en setning under et "< p >-element":</h3>'; 
        echo "\n<p>Hei, mitt navn er $Navn og jeg er $Alder</p>";

    ?>
</body>
</html>