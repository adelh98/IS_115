<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Oppgave 3</title>
  <meta name="description" content="Oppgave 2">
  <h1>Oppgave 3</h1>
</head>
<pre>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  Fornavn: <input type="text" name="navn" value="<?php
  if( isset($_REQUEST['navn'])) {
      echo $medlemmer['Fornavn'];
  }else {
      echo $medlemmer['Fornavn'];
  } ?>" placeholder="Fornavn" required/><br>

  Etternavn: <input type="text" name="enavn" placeholder="Etternavn" required><br>
  E-post: <input type="email" name="epost" placeholder="E-post" required><br>
  Telefon: <input type="tel" name="tlf" placeholder="Mobilnummer" required><br>
  Fødselsdato: <input type="date" name="fdato" value="2011-05-05" required><br>
  <input type="submit" name='registrer' value="Endre">
</form>
</pre>
<body>
    <?php            
        //Data fra bruker input lagres i array $medlemmer
        $medlemmer = array(
            'Fornavn' => "Adelini",
 
        );

        //Setter opp en foreach lække som går gjennom hvert element i listen og printer ut med print_r
        //Bekreftelsen på registrering til bruker
        echo "<br><strong>Ny inormasjon registrert:</strong><br>";
        foreach ($medlemmer as $field => $value) {
            print_r("$field: $value</b><br>");
        }
           


    ?>
</body>
</html>