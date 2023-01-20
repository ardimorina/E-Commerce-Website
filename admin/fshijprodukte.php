<?php
include "header1.php";
if(!isset($_SESSION['klienti']) || $_SESSION['klienti']['role']==0){
    header("Location: ../adaspera.php");
 }             
if (isset($_GET['prid'])) {
    $productsid=$_GET['prid'];
    $produkti=merrProduktetId($productsid);
    $emriproduktit=$produkti['emriproduktit'];
    $pershkrimi=$produkti['pershkrimi'];
    $kategoria=$produkti['kategoria'];
    $produktfoto=$produkti['produktfoto'];
    $qmimi=$produkti['qmimi'];
}

if (isset($_POST['fshij'])) {
    fshijprodukte($_POST['productsid']);
}


?>

<link rel="stylesheet" href="../stylee.css">    
    <div class="forma">
        <br>
        <br>
        <h1>Forma per Fshirjen e Produkteve</h1>
        <br>
        <form method="post">
        <input type="hidden" id="productsid" name="productsid" 
                value="<?php if(!empty($productsid)) echo $productsid ?>">
            <div class="inputAndLabels">
                <label for="emriproduktit">Emri Produktit</label> <br>
                <input readonly type="text" id="emriproduktit" name="emriproduktit" 
                value="<?php if(!empty($emriproduktit)) echo $emriproduktit ?>">
            </div>
            <div class="inputAndLabels">
                <label for="pershkrimi">Pershkrimi</label> <br>
                <input readonly type="text" id="pershkrimi" name="pershkrimi" 
                value="<?php if(!empty($pershkrimi)) echo $pershkrimi ?>">
            </div>
            <div class="inputAndLabels">
                <label for="kategoria">Kategoria</label> <br>
                <input readonly type="text" id="kategoria" name="kategoria"
                value="<?php if(!empty($kategoria)) echo $kategoria ?>">
            </div>
            <div class="inputAndLabels">
                <label for="produktfoto">Produkt Foto</label> <br>
                <input readonly type="text" id="produktfoto" name="produktfoto"
                value="<?php if(!empty($produktfoto)) echo $produktfoto ?>">
            </div>
            <div class="inputAndLabels">
                <label for="qmimi">Qmimi</label> <br>
                <input readonly type="text" id="qmimi" name="qmimi"
                value="<?php if(!empty($qmimi)) echo $qmimi ?>">
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