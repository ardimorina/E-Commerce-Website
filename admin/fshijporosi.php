<?php
include "header1.php";
if(!isset($_SESSION['klienti']) || $_SESSION['klienti']['role']==0){
    header("Location: ../adaspera.php");
 }             
 if (isset($_GET['pid'])) {
    $porosiaid=$_GET['pid'];
    $porosia=merrPorosiaid($porosiaid);
    $telefoni=$porosia['telefoni'];
    $qyteti=$porosia['qyteti'];
    $adresa=$porosia['adresa'];
    $dataeporosis=$porosia['dataeporosis'];


}

if (isset($_POST['fshij'])) {
    fshijPorosi1($_POST['porosiaid']);
}


?>

<link rel="stylesheet" href="../stylee.css">    
    <div class="forma">
        <br>
        <br>
        <h1>Fshij  Porosin</h1>
        <br>
        <form method="post">
        <input type="hidden" id="porosiaid" name="porosiaid" 
                value="<?php if(!empty($porosiaid)) echo $porosiaid ?>">
            <div class="inputAndLabels">
                <label for="telefoni">Telefoni</label> <br>
                <input readonly type="text" id="telefoni" name="telefoni" 
                value="<?php if(!empty($telefoni)) echo $telefoni ?>">
            </div>
            <div class="inputAndLabels">
                <label for="qyteti">Qyteti</label> <br>
                <input readonly type="text" id="qyteti" name="qyteti" 
                value="<?php if(!empty($qyteti)) echo $qyteti ?>">
            </div>
            <div class="inputAndLabels">
                <label for="adresa">Adresa</label> <br>
                <input readonly type="text" id="adresa" name="adresa"
                value="<?php if(!empty($adresa)) echo $adresa ?>">
            </div>
            <div class="inputAndLabels">
                <label for="dataeporosis">Data e Porosis</label> <br>
                <input readonly type="text" id="dataeporosis" name="dataeporosis"
                value="<?php if(!empty($dataeporosis)) echo $dataeporosis ?>">
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