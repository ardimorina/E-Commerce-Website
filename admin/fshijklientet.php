<?php

include "header1.php";
if(!isset($_SESSION['klienti']) || $_SESSION['klienti']['role']==0){
    header("Location: ../adaspera.php");
 }            
if (isset($_GET['kid'])) {
    $klientiid=$_GET['kid'];
    $klienti=merrKlientiId($klientiid);
    $emri=$klienti['emri'];
    $mbiemri=$klienti['mbiemri'];
    $email=$klienti['email'];
    $fjalekalimi=$klienti['fjalekalimi'];

}

if (isset($_POST['fshij'])) {
    fshijklientet($_POST['klientiid']);
}


?>

<link rel="stylesheet" href="../stylee.css">    
    <div class="forma">
        <br>
        <br>
        <h1>Forma per Fshirjen e Produkteve</h1>
        <br>
        <form method="post">
        <input type="hidden" id="klientiid" name="klientiid" 
                value="<?php if(!empty($klientiid)) echo $klientiid ?>">
            <div class="inputAndLabels">
                <label for="emri">Emri</label> <br>
                <input readonly type="text" id="emri" name="emri" 
                value="<?php if(!empty($emri)) echo $emri ?>">
            </div>
            <div class="inputAndLabels">
                <label for="mbiemri">Mbiemri</label> <br>
                <input readonly type="text" id="mbiemri" name="mbiemri" 
                value="<?php if(!empty($mbiemri)) echo $mbiemri ?>">
            </div>
            <div class="inputAndLabels">
                <label for="email">Email</label> <br>
                <input readonly type="text" id="email" name="email"
                value="<?php if(!empty($email)) echo $email ?>">
            </div>
            <div class="inputAndLabels">
                <label for="fjalekalimi">Fjalekalimi</label> <br>
                <input readonly type="text" id="fjalekalimi" name="fjalekalimi"
                value="<?php if(!empty($fjalekalimi)) echo $fjalekalimi ?>">
            </div>

            <input type="submit" name="fshij" id="fshij" value="Fshij">
                </div>
            </div>
        </form>
    </div>
</section>
<br>
<br>
<?php
include "../inc/footer.php";

?>