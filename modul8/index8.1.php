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
    <pre>

    <?php

        $kat = "../";
        $peker = opendir($kat);

            echo "<table border=\"1\">";
            echo "<tr>";
            echo "<th>Filnavn</th>";
            echo "<th>Filtype</th>";
            echo "<th>Filstr.</th>";
            echo "<th>Fildato.</th>";
            echo "<th>Readable.</th>";
            echo "<th>Executeable.</th>";
            echo "<th>Writable.</th>";
            echo "</tr>";

        while($fil = readdir($peker)) {
            echo "<tr>";
            echo "<td><a href=\"" . $kat . $fil . "\">" . $fil . "</a></td>";
            echo "<td>" . filetype($kat . $fil) . "</td>";
            echo "<td>" . filesize($kat . $fil) . "</td>";
            echo "<td>" . filemtime($kat . $fil) . "</td>";
            echo "<td>" . is_readable($kat . $fil) . "</td>";
            echo "<td>" . is_executable($kat . $fil) . "</td>";
            echo "<td>" . is_writable($kat . $fil) . "</td>";
            echo "</tr>";
        }

        closedir($peker);
        
        ?>
    </pre>

</body>
</html>