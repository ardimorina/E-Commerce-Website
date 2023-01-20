<?php
include "header1.php";
if(!isset($_SESSION['klienti']) || $_SESSION['klienti']['role']==0){
    header("Location: ../adaspera.php");
 }
?>
    <link rel="stylesheet" href="../stylee.css">


    <?php
    if (isset($_SESSION['message3'])) {
        echo "<div id='message3'>" . $_SESSION['message3'] . "</div>";
    }
    ?>
    <table class="styled-table">
        <thead>
            <br>
        <h3 class="tekstiproduktet">Produktet tek faqja adaspera.php<h3>
            <tr>
                <th>Emri Produktit</th>
                <th>Pershkrimi</th>
                <th>Kategoria</th>
                <th>Foto</th>
                <th>Qmimi</th>
                <th>Modifiko</th>
                <th>Fshiej</th>
            </tr>
        </thead>
        <tbody>
            <?php
           $produktet=merrProduktet();
            while ($produkti = mysqli_fetch_assoc($produktet)) {
                $productsid = $produkti['productsid'];
                echo "<tr>";
                echo "<td>" . $produkti['emriproduktit'] . "</td>";
                echo "<td>" . $produkti['pershkrimi'] . "</td>";
                echo "<td>" . $produkti['kategoria'] . "</td>";
                echo "<td>" . $produkti['produktfoto'] . "</td>";
                echo "<td>" . $produkti['qmimi'] . "</td>";
                echo "<td><a href='shto_modifiko_produkte.php?prid={$productsid}'>
                <i class='fas fa-edit'></i></a></td>";
                echo "<td><a href='fshijprodukte.php?prid={$productsid}'>
                <i class='far fa-trash-alt'></i></a></td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</section>
<a href="shto_modifiko_produkte.php" id="add_entity"><i class="fas fa-plus"></i> Shto Produkte</a>
<br>
<br>
<table class="styled-table">
        <thead>
            <br>
        <h3 class="tekstiproduktet">Produktet tek faqja produktet.php<h3>
            <tr>
                <th>Emri Produktit</th>
                <th>Pershkrimi</th>
                <th>Kategoria</th>
                <th>Foto</th>
                <th>Qmimi</th>
                <th>Modifiko</th>
                <th>Fshiej</th>
            </tr>
        </thead>
        <tbody>
            <?php
           $produktet1=merrProduktet1();
            while ($produkti1 = mysqli_fetch_assoc($produktet1)) {
                $productsid1 = $produkti1['productsid1'];
                echo "<tr>";
                echo "<td>" . $produkti1['emriproduktit'] . "</td>";
                echo "<td>" . $produkti1['pershkrimi'] . "</td>";
                echo "<td>" . $produkti1['kategoria'] . "</td>";
                echo "<td>" . $produkti1['produktfoto'] . "</td>";
                echo "<td>" . $produkti1['qmimi'] . "</td>";
                echo "<td><a href='shto_modifiko_produkte1.php?prid={$productsid1}'>
                <i class='fas fa-edit'></i></a></td>";
                echo "<td><a href='fshijprodukte1.php?prid={$productsid1}'>
                <i class='far fa-trash-alt'></i></a></td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    <a href="shto_modifiko_produkte1.php" id="add_entity"><i class="fas fa-plus"></i> Shto Produkte</a>
    <br>
    <br>
    <table class="styled-table">
        <thead>
            <br>
        <h3 class="tekstiproduktet">Produktet tek faqja produktet1.php<h3>
            <tr>
                <th>Emri Produktit</th>
                <th>Pershkrimi</th>
                <th>Kategoria</th>
                <th>Foto</th>
                <th>Qmimi</th>
                <th>Modifiko</th>
                <th>Fshiej</th>
            </tr>
        </thead>
        <tbody>
            <?php
           $produktet2=merrProduktet2();
            while ($produkti2 = mysqli_fetch_assoc($produktet2)) {
                $productsid2 = $produkti2['productsid2'];
                echo "<tr>";
                echo "<td>" . $produkti2['emriproduktit'] . "</td>";
                echo "<td>" . $produkti2['pershkrimi'] . "</td>";
                echo "<td>" . $produkti2['kategoria'] . "</td>";
                echo "<td>" . $produkti2['produktfoto'] . "</td>";
                echo "<td>" . $produkti2['qmimi'] . "</td>";
                echo "<td><a href='shto_modifiko_produkte2.php?prid={$productsid2}'>
                <i class='fas fa-edit'></i></a></td>";
                echo "<td><a href='fshijprodukte1.php?prid={$productsid2}'>
                <i class='far fa-trash-alt'></i></a></td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    <a href="shto_modifiko_produkte1.php" id="add_entity"><i class="fas fa-plus"></i> Shto Produkte</a>
    <br>
    <br>
<?php
include "../inc/footer.php";

?>
