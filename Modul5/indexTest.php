<?php
//Dette er bare en test fil som jeg bruker til å tulle rundt med kode jeg ikke er sikker på om jeg vil bruke
$passord = "Nissefjompen er teit";

echo "md5-kryptert streng av <strong/>'$passord'</strong> blir:  " . md5($passord);
echo "<br>";
echo "<br>";

echo "Hashing av passord <strong/>$passord</strong> ved bruk av innebygd funksjon: ";
echo "<br>";

//Ved generering og lagring av passord er det alltid best å bruke "password_hash()" og "password_verify()" istedet for MD5!
$hash = password_hash($passord, PASSWORD_DEFAULT);
echo "hash: $hash<br>";

if(password_verify($passord, $hash)) {
    echo "Dette er gyldig passord";
    session_start();
    $_SESSION['bruker'] = "Adel";
    unset($_SESSION['bruker']);
}

?>