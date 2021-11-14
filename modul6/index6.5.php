<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Oppgave 5</title>
  <h1>Oppgave 5</h1>
</head>
<body>
<form method="post" action="#">
  <h3>Hvilken interesse er det du ønsker å se etter?:</h3>
    <label for="Interesse">Interesse:</label><br>
    <input type="text" id="Interesse" name="Interesse" required><br><br>
    <input type="submit" name="Søk" value="Søk">
</form>
    <?php

    //Include fil med passord:
    include_once "include/includeDB.php";
    
    //Lager connection til DB:
    $conn = mysqli_connect($servernavn, $brukernavn, $passord, $database);

    //Sjekker connection:
    if (!$conn) {
        die("Tilkobling misslykket: " . mysqli_connect_error());
    }
    echo "<br>Tilkobling vellykket!<br><br>"; 
    
    if(isset($_REQUEST['Søk'])) {

        $interesse = $_REQUEST['Interesse']; //Henter søke paramter fra formen
        $sql = "SELECT Fornavn, Etternavn, Interesser, Interesser2 FROM medlemmer WHERE Interesser = '$interesse' OR Interesser2 = '$interesse'";
        
        // Setter sammen spørringen til tilkoblingen
        $stmt = $conn->prepare( $sql );
        
        // Utfører spørring
        $stmt->execute();
        
        // Henter resultat
        $resultat = $stmt->get_result();
        
        //Sjekker for om spørringen kommer med 0 rader tilbake.
        if (mysqli_num_rows($resultat) === 0) {
            echo "Det finnes ingen medlemmer med '<b>$interesse</b>' som interesse.<br><br>";
            exit(); //Avslutter scriptet her hvis det ikke finnes medlemmer med valgt interesse
        } else {
            // Ikke gjør noe
        }
        ?>

<html>
    
    <!-- Lager en tabell som viser medlemmene i databasen -->
    <table border="1" cellpadding="5" align="left" style="text-align:center">
        <tr>
            <th>Fornavn</th>
            <th>Etternavn</th>
            <th>Interesser</th>
            <th>Interesser2</th>
        </tr>
        
        <?php 

// Henter en rad om gangen fra databasen (dvs. ett og ett medlem)
    while( $row = $resultat->fetch_assoc() ) 
    { // Opening while
        
        ?>
    
    <tr>
        <td><?php echo $row['Fornavn']; ?></td>
        <td><?php echo $row['Etternavn']; ?></td>
        <td><?php echo $row['Interesser']; ?></td>
        <td><?php echo $row['Interesser2']; ?></td>
        
    </tr>
    
    <?php
                } // Closing while
                
                // Avslutter spørring 
                $stmt->close();
                ?>
            </table>
            
            <?php 
                // Avslutter databasetilkobling
                $conn->close();

        }
            ?>

</body>
</html>