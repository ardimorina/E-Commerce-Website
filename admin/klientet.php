<?php
include "header1.php";
if(!isset($_SESSION['klienti']) || $_SESSION['klienti']['role']==0){
    header("Location: ../adaspera.php");
 }
?>
    <link rel="stylesheet" href="../stylee.css">


    <?php
    if (isset($_SESSION['message2'])) {
        echo "<div id='message2'>" . $_SESSION['message2'] . "</div>";
    }
    ?>
    <table class="styled-table">
        <thead>
            <tr>
                <th>Emri </th>
                <th>Mbiemri</th>
                <th>Email</th>
                <th>Fjalekalimi</th>
                <th>Role</th>
                <th>Modifiko</th>
                <th>Fshiej</th>
            </tr>
        </thead>
        <tbody>
            <?php
           $klientet=merrKlientet();
            while ($klienti = mysqli_fetch_assoc($klientet)) {
                $klientiid = $klienti['klientiid'];
                echo "<tr>";
                echo "<td>" . $klienti['emri'] . "</td>";
                echo "<td>" . $klienti['mbiemri'] . "</td>";
                echo "<td>" . $klienti['email'] . "</td>";
                echo "<td>" . $klienti['fjalekalimi'] . "</td>";
                echo "<td>" . $klienti['role'] . "</td>";
                echo "<td><a href='shto_modifiko_klient.php?kid={$klientiid}'>
                <i class='fas fa-edit'></i></a></td>";
                echo "<td><a href='fshijklientet.php?kid={$klientiid}'>
                <i class='far fa-trash-alt'></i></a></td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</section>
<a href="shto_modifiko_klient.php" id="add_entity"><i class="fas fa-plus"></i> Shto Klient</a>
<br>
<br>

<?php
include "../inc/footer.php";

?>
