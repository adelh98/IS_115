<?php

// DENNE OPPGAVEN ER IKKE 100%!!!!

include_once "include/includeDB.php";

/* Form submit? */
if (isset($_REQUEST['upload-send'])) {
    echo "<pre>";
    echo "This script: " . $_SERVER['SCRIPT_FILENAME'] . "<br>";
    echo "Filename: " . $_FILES['upload-file']['name'] . "<br>";
    echo "Tmp location/name: " . $_FILES['upload-file']['tmp_name'] . "<br>";
    echo "Type: " . $_FILES['upload-file']['type'] . "<br>";
    echo "Size: " . $_FILES['upload-file']['size'] . " bytes<br><br>";
    echo "</pre>";
    
    /* Define array for messages */
    $messages = array();
    
    /* File upload */
    if (is_uploaded_file($_FILES['upload-file']['tmp_name'])) {
        /* Collecting information about file */
        //print_r($_FILES);
        $filetype = $_FILES['upload-file']['type'];
        $filesize = $_FILES['upload-file']['size'];
        
        /* Configurations */
        $accepted_types = array("image/jpeg",
                               "image/gif",
                               "image/png");
        $max_file_size = 1536000; // in bytes
        $directory = $_SERVER['DOCUMENT_ROOT'] . "/IS_115/modul8/bilder/";

        /* No directory with that name */
        if(!file_exists($directory)) {
            if (!mkdir($directory, 0777, true)) {
                die("Cannot create directory..." . $directory);
            }
        }
        
        /* Constructing file name */
        $pos = strrpos($_FILES['upload-file']['type'], "/");
        $suffix = substr($_FILES['upload-file']['type'], $pos+1);
        $filename = $memberID . "." . $suffix; //Lager et filnavn som tilsvarer medlemtet ID. FUNKER IKKE HELT

        
        /* Errors? */
        if (!in_array($filetype, $accepted_types)) {
            $types = implode(", ", $accepted_types);
            $messages[] = "Invalid filetype (only " . $types . " are accepted)";
        }
        if ($filesize > $max_file_size) {
            $messages[] = "The file (" . round($filesize * pow(10, -6), 2) . " MB) exceeds maximum filesize (" . round($max_file_size * pow(10, -6), 2) . " MB)";
        }
        
        $filepath = $directory . $filename;
        /*
        $memberID = $id;
        
        if(file_exists("bilder/$id.jpeg")) $filepath = "bilder/$id.jpeg";
        elseif (file_exists("bilder/$id.png")) $filepath = "bilder/$id.png";
        else $filepath = "bilder/default.jpg";
        */
        
        /* If everything is fine */
        if (count($messages) < 1) {
            /* Moving uploaded file to its new home */
            $uploaded_file = move_uploaded_file($_FILES['upload-file']['tmp_name'], $filepath);
            
            if (!$uploaded_file) {
                $messages[] = "The file could not be uploaded";
            } else {
                /* All is well */
                $messages[] = "The file was uploaded and is found here: <strong>" . $filepath . "</strong>";
            }
        }
    } else {
        $messages[] = "No file selected";
    }

    /* Output messages to user */
    echo "<strong>Message(s) to the user: </strong>";
    foreach($messages as $message) {
        echo $message . '<br>';
    }
    
    echo "Ditt nye profilbilde:<br>";
    echo "<img src='bilder/$filename' width='200'> ";

/*

    $imageDir = "C:/xampp/htdocs/IS_115/modul8/bilder";
    
   if(is_dir($imageDir)) {
    $opendirectory = opendir($imageDir);

    while (($image = readdir($opendirectory)) !== false) {
        if(($image == '.')  ($image == '..')) {
            continue;
        }

        $imgFileType = pathinfo($image, PATHINFO_EXTENSION);

        if(($imgFileType == 'jpg')  ($imgFileType == 'png') || ($imgFileType == 'jpeg')) {
            echo "<img src='bilder/".$image."' width='200'> ";
        }
    }

    closedir($opendirectory);
}
*/

}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>M8 - upload file</title>
</head>

<body>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
        <p>
            <label for="upload-file">Select file</label>
            <input name="upload-file" type="file">
        </p>
        <p>
            <button type="submit" name="upload-send">Upload file</button>
        </p>
    </form>
</body>
</html>