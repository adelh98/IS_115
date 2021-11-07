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
   
    $servernavn = "localhost";
    $brukernavn = "root";
    $passord = "12345678"; //Ja, jeg vet. Ikke verdens beste passord.
    $database = "test1";

    //Lager connection til DB:
    $conn = mysqli_connect($servernavn, $brukernavn, $passord, $database);

    //Sjekker connection:
    if (!$conn) {
        die("Tilkobling misslykket: " . mysqli_connect_error());
    }
    echo "Tilkobling vellykket!";

    //Lager SQL-Querry:
    //$sql = "INSERT INTO medlemmer (Fornavn, Etternavn, Epost, Mobilnummer, Adresse, Kjønn, Fødselsdato, Interesser, Kursaktiviteter, Kontigentstatus) 
    //VALUES ('Adel', 'Hodzalari', 'jegerkul@hotmail.com', '98138405', 'Langutigokk 234', 'Mann', '29.07.1998', 'Gaming', 'Maling', 'Betalt')";

    $sql = "SELECT Fornavn, Etternavn, Mobilnummer FROM medlemmer";
    $resultat = mysqli_query($conn, $sql);

    if (mysqli_num_rows($resultat) > 0) {
        //Skriver ut data
        while ($row = mysqli_fetch_assoc($resultat)) {
            echo "<br><br>Fornavn: " . $row["Fornavn"]. " <br>Etternavn: " . $row["Etternavn"]. " <br>Mobil: ". $row["Mobilnummer"]. "<br>";
        } 
    } else {
        echo "0 Results";
    }
        $conn->close();

/*
    if($conn->query($sql) === TRUE) {
        echo "Ny data lagt til"; 
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
*/

    ?>
</body>
</html>