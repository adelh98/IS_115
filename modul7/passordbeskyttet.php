<?php
    session_start();
    if(isset($_SESSION["Fornavn"]) !== true) {
        header("Location: index7.1.php");
        exit();
    } else{
        echo "Dersom du kan lese dette, så er du logget inn<br><br>";
    }

    if (isset($_REQUEST['loggut'])) {
        session_start();
        session_unset();
        session_destroy();
        header("Location: index7.1.php");
        exit();
    }
?>

<form action ="<?php echo $_SERVER['PHP_SELF'];?>" method="request">
<input type="submit" name="loggut" value="Logg Ut">
</form>