<?php
include "header1.php";
if(!isset($_SESSION['klienti']) || $_SESSION['klienti']['role']==0){
   header("Location: ../adaspera.php");
}
?>

     <section id="admin">
        <img src="../images1/admin.jpg" class="admin" height="500">
     </section>