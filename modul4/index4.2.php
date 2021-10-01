<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Oppgave 2</title>
  <meta name="description" content="Oppgave 2">
  <h1>Oppgave 2</h1>
</head>
<pre>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<h2>Kontaktinformasjon:</h2>  
  Fornavn: <input type="text" name="navn" placeholder="Fornavn" required><br>   
  Etternavn: <input type="text" name="enavn" placeholder="Etternavn" required><br>
  E-post: <input type="email" name="epost" placeholder="email@hotmail.com" required><br>
  Telefon: <input type="tel" name="tlf" placeholder="98156123" required><br>
  Adresse: <input type="text" name="adresse" placeholder="Lolipoppveien 45" required><br>
  <h2>Annen informasjon:</h2>
  Kjønn: <input type="radio" name="kjønn" id="male" value="mann" checked> <label for="mann">Mann</label> 
         <input type="radio" name="kjønn" id="female" value="kvinne"> <label for="kvinne">Kvinne</label><br>
  Fødselsdato: <input type="date" name="fdato" value="2011-05-05" required>
  <br>
  <h2>Medlemsinformasjon:</h2>
  Interesser: <input type="radio" id="trening" name="interesser" value="Trening"> <label for="trening">Trening</label>
              <input type="radio" id="musikk" name="interesser" value="Musikk"> <label for="musikk">Musikk</label>
              <input type="radio" id="gaming" name="interesser" value="Gaming"> <label for="gaming">Gaming</label>
              <input type="radio" id="løping" name="interesser" value="Løping"> <label for="løping">Løping</label><br>
  Kursaktiviteter: 
              <input type="radio" id="maling" name="kursaktiviteter" value="Maling"> <label for="maling">Maling</label>
              <input type="radio" id="seiling" name="kursaktiviteter" value="Seiling"> <label for="seiling">Seiling</label>
              <input type="radio" id="klatring" name="kursaktiviteter" value="Klatring"> <label for="klatring">Klatring</label>
              <input type="radio" id="programmering" name="kursaktiviteter" value="Programmering"> <label for="programmering">Programmering</label><br>
  Kontigentstatus: 
              <input type="radio" name="kontigent" id="betalt" value="Betalt" checked> <label for="betalt">Betalt</label> 
              <input type="radio" name="kontigent" id="ikke betalt" value="Ikke betalt"> <label for="ikke betalt">Ikke betalt</label><br>

  <input type="submit" name='registrer' value="Registrér">
</form>
</pre>
<body>
    <?php
         if(isset($_REQUEST['registrer'])) {            
            //Data fra bruker input lagres i array $medlemmer
            $medlemmer = array(
                'Fornavn' => $_REQUEST['navn'],
                'Etternavn' => $_REQUEST['enavn'],
                'Epost' => $_REQUEST['epost'],
                'Mobilnummer' => $_REQUEST['tlf'],
                'Adresse' => $_REQUEST['adresse'],
                'Kjønn' => $_REQUEST['kjønn'],
                'Fødseldato' => $_REQUEST['fdato'],
                'Interesser' => $_REQUEST['interesser'],
                'Kursaktiviteter' => $_REQUEST['kursaktiviteter'],
                'Kontigentstatus' => $_REQUEST['kontigent']
            );

            //Setter opp en foreach lække som går gjennom hvert element i listen og printer ut med print_r
            //Bekreftelsen på registrering til bruker
            echo "Du er registrert med følgende informasjon:<br>";
            echo "<br>";
            echo "<br><strong>Inormasjon registrert:</strong><br>";
            foreach ($medlemmer as $field => $value) {
                print_r("$field : $value</b><br>");
            }
           
        }

    ?>
</body>
</html>