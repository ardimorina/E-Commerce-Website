<?php
include "inc/functions.php";
if(isset($_SESSION['klienti'])){
    // unset($_SESSION['user']);
    session_destroy();
    header("Location: adaspera.php");
}
?>
