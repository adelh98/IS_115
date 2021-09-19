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
  Fornavn: <input type="text" name="navn" placeholder="Fornavn" required><br>
  Etternavn: <input type="text" name="enavn" placeholder="Etternavn" required><br>
  E-post: <input type="email" name="epost" placeholder="E-post" required><br>
  Telefon: <input type="tel" name="tlf" placeholder="Mobilnummer" required><br>
  Fødselsdato: <input type="date" name="fdato" value="2011-05-05" required><br>
  <input type="submit" name='registrer' value="Registrér">
</form>
</pre>
<body>
    <?php
        //Henter variabler fra bruker input
         if(isset($_REQUEST['registrer'])) {
            $medlemNavn = $_REQUEST['navn'];
            $medlemEtternavn = $_REQUEST['enavn'];
            $medlemEpost = $_REQUEST['epost'];
            $medlemMobilnummer = $_REQUEST['tlf'];
            $medlemFdato = $_REQUEST['fdato'];
            
            //Lager arrayen som variablene blir lagret it
            $medlemmer = array(
                $medlemNavn,
                $medlemEtternavn,
                $medlemEpost,
                $medlemMobilnummer,
                $medlemFdato
            );

            //Setter opp en foreach lække som går gjennom hvert element i listen og printer ut med print_r
            echo "Du er registrert med følgende informasjon:<br>";
            echo "<br>";
            foreach ($medlemmer as $value) {
                print_r("$value</b><br>");
            }
           
        }



     

        







    ?>
</body>
</html>