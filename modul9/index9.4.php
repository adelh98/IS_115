<!DOCTYPE html>
<html>
    <head>
        <title>Index 4.3</title>
        <meta charset="UTF-8">     
    </head>
    <style>

    </style>
        
    <body>
        <h1>Oppgave 3</h1>
        <form enctype='multipart/form-data' action='' method='post'>
        
        <label>Upload Product CSV file Here</label>

        <input size='50' type='file' name='filename'>
        </br>
        <input type='submit' name='submit' value='Upload Products'>

        </form>
    <?php
    if (isset($_POST['submit'])) { // Sjekker om "Submit" er trykket. Hvis ikke så skjer ingenting.
        echo "<html><body><table>\n\n"; //Første del av HTML tabell.
        // Åpner filen
        $f = fopen($_FILES['filename']['tmp_name'], "r");
        // Initialsierer teller for å bruke i IF løkke senere.
        $i = 0;
        // Lager en while slik at programmet henter så lenge det er rows i DB.
        while (($line = fgetcsv($f)) !== false) {
                echo "<tr>";
                
                if ($i >= 20){ // Sjekker om $i er større eller lik 20. Hvis ja, stopp. 
                    break;
                } else { 
                foreach ($line as $cell) {          
                        echo "<td>" . htmlspecialchars($cell) . "</td>";   
                }
            }
            $i++;
                echo "</tr>\n";
        }
        fclose($f);
        echo "\n</table></body></html>";
        }
    ?>
</pre>
       
    </body>
</html>