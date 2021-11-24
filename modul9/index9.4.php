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
    if (isset($_POST['submit'])) { 
        echo "<html><body><table>\n\n";
        $f = fopen($_FILES['filename']['tmp_name'], "r");
        $i = 0;
        while (($line = fgetcsv($f)) !== false) {
                echo "<tr>";
                
                if ($i >= 20){
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