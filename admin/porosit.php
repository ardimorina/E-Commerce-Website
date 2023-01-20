<?php
include "header1.php";
if(!isset($_SESSION['klienti']) || $_SESSION['klienti']['role']==0){
    header("Location: ../adaspera.php");
 }
?>
<link rel="stylesheet" href="../stylee.css">
    <?php
    if (isset($_SESSION['message4'])) {
        echo "<div id='message4'>" . $_SESSION['message4'] . "</div>";
    }
    ?>
    <table class="styled-table">
        <thead>
            <tr>
                <th>Emri Mbiemri</th>
                <th>Produkti</th>
                <th>Telefoni</th>
                <th>Qyteti</th>
                <th>Adresa</th>
                <th>Qmimi</th>
                <th>Data e Porosis</th>
                <th>Modifiko</th>
                <th>Fshiej</th>

            </tr>
        </thead>
        <tbody>
            <?php
             $porosit=merrPorosit1();
             while ($porosia = mysqli_fetch_assoc($porosit)) {
                 $porosiaid = $porosia['porosiaid'];
                 echo "<tr>";
                    echo "<td>" . $porosia['emrimbiemri'] ."</td>";
                    echo "<td>" . $porosia['emriproduktit'] . "</td>";
                    echo "<td>" . $porosia['telefoni'] . "</td>";
                    echo "<td>" . $porosia['qyteti'] . "</td>";
                    echo "<td>" . $porosia['adresa'] . "</td>";
                    echo "<td>" . $porosia['qmimi'] . "</td>";
                    echo "<td>" . $porosia['dataeporosis'] . "</td>";
                    echo "<td><a href='shto_modifiko_porosi.php?pid={$porosiaid}'>
                    <i class='fas fa-edit'></i></a></td>";
                    echo "<td><a href='fshijporosi.php?pid={$porosiaid}'>
                    <i class='far fa-trash-alt'></i></a></td>";
                    echo "</tr>";
             }
            
        ?>
        </tbody>
    </table>
</section>



<?php
include "../inc/footer.php";

?>