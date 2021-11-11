<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Oppgave 4</title>
  <meta name="description" content="Oppgave 1">
  <h1>Oppgave 1</h1>
</head>
<body>
    <?php

    //Include fil med passord:
    include_once "include/includeDB.php";
    
    //Lager connection til DB:
    $conn = mysqli_connect($servernavn, $brukernavn, $passord, $database);

    //Sjekker connection:
    if (!$conn) {
        die("Tilkobling misslykket: " . mysqli_connect_error());
    }
    echo "Tilkobling vellykket!<br><br>"; //Denne printer jeg for å vite at alt er i orden eller ikke.
    
    //Lager SQL spørringen som jeg skal bruke i $sql variablen.
    $sql = "SELECT * FROM aktiviteter WHERE dato > CURRENT_DATE ORDER BY dato ASC";

    // Setter sammen spørringen til tilkoblingen
    $stmt = $conn->prepare( $sql );

    // Utfører spørring
    $stmt->execute();

    // Henter resultat
    $resultat = $stmt->get_result();

    ?>

    <html>
            <!-- Lager en tabell som viser de aktuelle konkuransene -->
            <table border="1" cellpadding="5" align="center" style="text-align:center">
            <tr>
                <th>Aktivitet</th>
                <th>Ansvarlig</th>
                <th>Starttid</th>
                <th>Sluttid</th>
                <th>Dato</th>
            </tr>

    <?php 

    // Henter en rad om gangen fra databasen (dvs. ett og ett medlem)
    while( $row = $resultat->fetch_assoc() ) 
        { // Opening while

    ?>

        <tr>
            <td><?php echo $row['Aktivitet']; ?></td>
            <td><?php echo $row['Ansvarlig']; ?></td>
            <td><?php echo $row['Starttid']; ?></td>
            <td><?php echo $row['Sluttid']; ?></td>
            <td><?php echo $row['Dato']; ?></td>

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
        ?>

</body>
</html>