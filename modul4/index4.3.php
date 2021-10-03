<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Oppgave 3</title>
  <meta name="description" content="Oppgave 2">
  <h1>Oppgave 3</h1>
</head>
<?php            
        //Lager det forhånd fylte arrayet som brukes videre
        $medlemmer = array(
            'Fornavn' => "Adelini",
            'Etternavn' => "Hodzalari",
            'Epost' => "dmi@hotmail.no",
            'Mobilnummer' => 98138405,
            'Kjønn' => "Mann",
            'Fødseldato' => '1998-07-29',
            'Kjønn' => 'Mann',
            'Interesser' => "Trening",
            'Kursaktiviteter' => 'Maling',
            'Kontigentstatus' => 'Betalt'
        );
    ?>
<pre>
    <h2>Medlemsinformasjon:</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Fornavn: <input type="text" name="navn" value="<?php 
            if (empty( $_REQUEST['navn'])) { //Sjekker om input fra bruker er tom eller ikke
                echo $medlemmer['Fornavn']; //Hvis den er tom, tar jeg fra listen
            } else {
                echo $_REQUEST['navn']; //Hvis ikke, tar jeg inputen og bruker den som valuen.
    }?>" placeholder="Fornavn" required/><br>

        Etternavn: <input type="text" name="enavn" value= <?php 
            if (empty( $_REQUEST['enavn'])) {
                echo $medlemmer['Etternavn'];
            } else {
                echo $_REQUEST['enavn'];
    }?> placeholder="Etternavn" required><br>

         E-post: <input type="email" name="epost"  value= <?php 
            if (empty( $_REQUEST['epost'])) {
                echo $medlemmer['Epost'];
            } else {
                echo $_REQUEST['epost'];
    }?> placeholder="E-post" required><br>

        Telefon: <input type="tel" name="tlf"  value= <?php 
            if (empty( $_REQUEST['tlf'])) {
                echo $medlemmer['Mobilnummer'];
            } else {
                echo $_REQUEST['tlf'];
    }?> placeholder="Mobilnummer" required><br>
    <h2>Annen Informasjon:</h2>
    Kjønn: <input type="radio" name="kjønn" id="male" value=<?php 
            if (empty( $_REQUEST['kjønn'])) {
                echo $medlemmer['Kjønn'];
            } else {
                echo $_REQUEST['kjønn'];
    }?> checked> <label for="mann">Mann</label> 
           <input type="radio" name="kjønn" id="female" value=<?php 
            if (empty( $_REQUEST['kjønn'])) {
                echo $medlemmer['Kjønn'];
            } else {
                echo $_REQUEST['kjønn'];
    }?> > <label for="kvinne">Kvinne</label><br>
        Fødselsdato: <input type="date" name="fdato"  value= <?php 
            if (empty( $_REQUEST['fdato'])) {
                echo $medlemmer['Fødseldato'];
            } else {
                echo $_REQUEST['fdato'];
    }?> required><br>
    <h2>Medlemsinformasjon:</h2>
    Interesser: <input type="radio" id="trening" name="interesser" value= <?php 
            if (empty( $_REQUEST['interesser'])) {
                echo $medlemmer['Interesser'];
            } else {
                echo $_REQUEST['interesser'];
    }?>> <label for="trening">Trening</label>
                <input type="radio" id="musikk" name="interesser" value=<?php 
            if (empty( $_REQUEST['interesser'])) {
                echo $medlemmer['Interesser'];
            } else {
                echo $_REQUEST['interesser'];
    }?>> <label for="musikk">Musikk</label>
                <input type="radio" id="gaming" name="interesser" value=<?php 
            if (empty( $_REQUEST['interesser'])) {
                echo $medlemmer['Interesser'];
            } else {
                echo $_REQUEST['interesser'];
    }?>> <label for="gaming">Gaming</label>
                <input type="radio" id="løping" name="interesser" value=<?php 
            if (empty( $_REQUEST['interesser'])) {
                echo $medlemmer['Interesser'];
            } else {
                echo $_REQUEST['interesser'];
    }?>> <label for="løping">Løping</label><br>
    Kursaktiviteter: 
              <input type="radio" id="maling" name="kursaktiviteter" value=<?php 
            if (empty( $_REQUEST['kursaktiviteter'])) {
                echo $medlemmer['Kursaktiviteter'];
            } else {
                echo $_REQUEST['kursaktiviteter'];
    }?>> <label for="maling">Maling</label>
              <input type="radio" id="seiling" name="kursaktiviteter" value=<?php 
            if (empty( $_REQUEST['kursaktiviteter'])) {
                echo $medlemmer['Kursaktiviteter'];
            } else {
                echo $_REQUEST['kursaktiviteter'];
    }?>> <label for="seiling">Seiling</label>
              <input type="radio" id="klatring" name="kursaktiviteter" value=<?php 
            if (empty( $_REQUEST['kursaktiviteter'])) {
                echo $medlemmer['Kursaktiviteter'];
            } else {
                echo $_REQUEST['kursaktiviteter'];
    }?>> <label for="klatring">Klatring</label>
              <input type="radio" id="programmering" name="kursaktiviteter" value=<?php 
            if (empty( $_REQUEST['kursaktiviteter'])) {
                echo $medlemmer['Kursaktiviteter'];
            } else {
                echo $_REQUEST['kursaktiviteter'];
    }?>> <label for="programmering">Programmering</label><br>
    Kontigentstatus: 
              <input type="radio" name="kontigent" id="betalt" value=<?php 
            if (empty( $_REQUEST['kontigent'])) {
                echo $medlemmer['Kontigentstatus'];
            } else {
                echo $_REQUEST['kontigent'];
    }?>> <label for="betalt">Betalt</label> 
              <input type="radio" name="kontigent" id="ikke betalt" value=<?php 
            if (empty( $_REQUEST['kontigent'])) {
                echo $medlemmer['Kontigentstatus'];
            } else {
                echo $_REQUEST['kontigent'];
    }?>> <label for="ikke betalt">Ikke betalt</label><br>

        <input type="submit" name='endre' value="Endre">
    </form>
</pre>
<body>
    <?php 
        //Her vil den listen som er forhåndsfylt bli endret etter knappen "Endre" er trykket.
        //Helt undøvendig akkurat nå, men gir en mer elegant og dynamisk løsning.
        if (isset($_REQUEST['endre'])) {
        $medlemmer = array(
            'Fornavn' => $_REQUEST['navn'],
            'Etternavn' => $_REQUEST['enavn'],
            'Epost' => $_REQUEST['epost'],
            'Mobilnummer' => $_REQUEST['tlf'],
            'Fødseldato' => $_REQUEST['fdato'],
            'Kjønn' => $_REQUEST['kjønn'],
            'Interesser' => $_REQUEST['interesser'],
            'Kursaktiviteter' => $_REQUEST['kursaktiviteter'],
            'Kontigentstatus' => $_REQUEST['kontigent']
        );

        //Setter opp en foreach lække som går gjennom hvert element i listen og printer ut med print_r
        //Bekreftelsen på endring av informasjon til bruker
        echo "<h3>Ny inormasjon registrert:</h3>";
        foreach ($medlemmer as $field => $value) {
            print_r("<b>$field</b>: $value</b><br>");
        }
    }
    ?>
</body>
</html>