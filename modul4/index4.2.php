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
  Fornavn: <input type="text" name="navn" placeholder="Fornavn"><br>
  Etternavn: <input type="text" name="enavn" placeholder="Etternavn"><br>
  E-post: <input type="email" name="epost" placeholder="E-post"><br>
  Telefon: <input type="tel" name="tlf" placeholder="Mobilnummer"><br>
  Fødselsdato: <input type="date" name="fdato" value="2011-05-05"><br>
  <input type="submit" name='registrer' value="Registrér">
</form>
</pre>
<body>
    <?php
        //Henter variabler fra bruker input
         if(isset($_REQUEST['registrer'])) {
            $medlemNavn = $_POST['navn'];
            $medlemEtternavn = $_REQUEST['enavn'];
            $medlemEpost = $_REQUEST['epost'];
            $medlemMobilnummer = $_REQUEST['tlf'];
            $medlemFdato = $_REQUEST['fdato'];
           
        }


        $medlemmer = array(
            $medlemNavn,
            $medlemEtternavn,
            $medlemEpost,
            $medlemMobilnummer,
            $medlemFdato
        );
        echo "Du er registrert med følgende informasjon:<br>";
        echo "<br>";
        foreach ($medlemmer as $key=>$value) {
            print_r("På index <b>'$key'</b> har vi <b>'$value'</b><br>");
        }

        







    ?>
</body>
</html>