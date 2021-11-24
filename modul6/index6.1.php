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
    <?php

    //Include fil med passord:
    include_once "include/includeDB.php";
    
    //Lager connection til DB:
    $conn = mysqli_connect($servernavn, $brukernavn, $passord, $database);

    //Sjekker connection:
    if (!$conn) {
        die("Tilkobling misslykket: " . mysqli_connect_error());
    }
    echo "Tilkobling vellykket!";

    // Lager SQL-Querry:
    // $sql = "INSERT INTO medlemmer (Fornavn, Etternavn, Epost, Mobilnummer, Adresse, Kjønn, Fødselsdato, Interesser, Kursaktiviteter, Kontigentstatus) 
    // VALUES ('Adel', 'Hodzalari', 'jegerkul@hotmail.com', '98138405', 'Langutigokk 234', 'Mann', '29.07.1998', 'Gaming', 'Maling', 'Betalt')";

    $sql = "SELECT * FROM medlemmer";

    // Setter sammen spørringen til tilkoblingen
    $stmt = $conn->prepare( $sql );

    // Utfører spørring
    $stmt->execute();

    // Henter resultat
    $resultat = $stmt->get_result();

    ?>

    <html>

            <!-- Lager en tabell som viser medlemmene i databasen -->
            <table border="1" cellpadding="5" align="center" style="text-align:center">
            <tr>
                <th>Fornavn</th>
                <th>Etternavn</th>
                <th>Epost</th>
                <th>Mobilnummer</th>
                <th>Adresse</th>
                <th>Kjønn</th>
                <th>Fødseldato</th>
                <th>Interesser</th>
                <th>Kursaktiviteter</th>
                <th>Kontigentstatus</th>
            </tr>

    <?php 

    // Henter en rad om gangen fra databasen (dvs. ett og ett medlem)
    while( $row = $resultat->fetch_assoc() ) 
        { // Opening while

    ?>

        <tr>
            <td><?php echo $row['Fornavn']; ?></td>
            <td><?php echo $row['Etternavn']; ?></td>
            <td><?php echo $row['Epost']; ?></td>
            <td><?php echo $row['Mobilnummer']; ?></td>
            <td><?php echo $row['Adresse']; ?></td>
            <td><?php echo $row['Kjønn']; ?></td>
            <td><?php echo $row['Fødselsdato']; ?></td>
            <td><?php echo $row['Interesser']; ?></td>
            <td><?php echo $row['Kursaktiviteter']; ?></td>
            <td><?php echo $row['Kontigentstatus']; ?></td>

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