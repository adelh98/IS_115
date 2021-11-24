<?php

include_once "include/includeDB.php";

$sql = "SELECT * FROM sitater";
$result = mysqli_query($conn, $sql);
if ($result){
    header("Content-Type: JSON");
    $i = 0;
    while ($row = mysqli_fetch_assoc($result)) {
        $response[$i]['sitatID'] = $row ['sitatID'];
        $response[$i]['dato'] = $row ['dato'];
        $response[$i]['sitat'] = $row ['sitat'];
        $response[$i]['opphavsperson'] = $row ['opphavsperson'];
        $i++;
    }
    echo json_encode($response, JSON_PRETTY_PRINT);
}
else {
    echo "Database connection feilet";
}
?>