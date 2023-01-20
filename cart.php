<?php
include "inc/functions.php";
if(!isset($_SESSION['klienti']) || $_SESSION['klienti']['role']==1){
    header("Location: adaspera.php");
 }
?>
<body>
<section id="header">
<a href="adaspera.php"><img src="images/logo.png" class="logo" height="70"></a>

<div>
   <ul id="navbar">
       <li><a href="adaspera.php">Ballina</a></li>
       <li><a href="produktet.php">Produktet</a></li>
       <li><a href="rrethnesh.php">Rreth Nesh</a></li>
       <li><a class="active" href="cart.php"><i class = "fas fa-shopping-cart"></i></a></li>

   </ul>
</div>
</section>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous">
    <link rel="stylesheet" href="stylee.css">


    <?php
    if (isset($_SESSION['message5'])) {
        echo "<div id='message5'>" . $_SESSION['message5'] . "</div>";
    }
    ?>
    <table class="styled-table">
        <thead>
            <br>
            <br>
        <h3 class="tekstiproduktet">Porosit e Juaja<h3>
            <tr>
                <th>Emri Produktit </th>
                <th>Pershkrimi</th>
                <th>Kategoria</th>
                <th>Telefoni</th>
                <th>Qyteti</th>
                <th>Adresa</th>
                <th>Data e Porosis</th>
                <th>Qmimi</th>
                <th>Fshij</th>
            </tr>
        </thead>
        <tbody>
            <?php
             $porosit=merrPorosit();
             if($porosit){
                 $i=0;
                 while ($porosia = mysqli_fetch_assoc($porosit)) {
                     $pid=$porosia['porosiaid'];
                     if($i%2==0){
                         echo "<tr>";
                     }else {
                         echo "<tr class='alt'>";
                     }
                     $i++;
                     if($i==16) break;
                     echo "<tr>";
                     echo "<td>" . $porosia['emriproduktit'] . "</td>";
                     echo "<td>" . $porosia['pershkrimi'] . "</td>";
                     echo "<td>" . $porosia['kategoria'] . "</td>";
                     echo "<td>" . $porosia['telefoni'] . "</td>";
                     echo "<td>" . $porosia['qyteti'] . "</td>";
                     echo "<td>" . $porosia['adresa'] . "</td>";
                     echo "<td>" . $porosia['dataeporosis'] . "</td>";
                     echo "<td>" . $porosia['qmimi'] . "</td>";
                     echo "<td><a href='anuloni.php?pid=$pid'>Anuloni Porosin</a></td>";
                     echo "</tr>";
             }
         }
             
            ?>
        </tbody>
    </table>
</section>

<?php
include "inc/footer.php";

?>
