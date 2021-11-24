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
    while (($line = fgetcsv($f)) !== false) {
            echo "<tr>";
            $i = 0;
            foreach ($line as $cell) {
                $i++;
                    if ($i === 20){
                        break;
                    } else {
                        echo "<td>" . htmlspecialchars($cell) . "</td>";
                    }
                }
            echo "</tr>\n";
    }
    fclose($f);
    echo "\n</table></body></html>";
    }
    ?>
</pre>
       
    </body>
</html>