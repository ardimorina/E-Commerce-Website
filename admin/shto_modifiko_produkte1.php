<?php
include "header1.php";
?>
<?php
if(!isset($_SESSION['klienti']) || $_SESSION['klienti']['role']==0){
    header("Location: ../adaspera.php");
 }

if(isset($_POST['shtoprodukte'])){
    shtoprodukte1($_POST['emriproduktit'],$_POST['pershkrimi'],$_POST['kategoria'],$_POST['produktfoto'],$_POST['qmimi']);
}
if(isset($_POST['modifikoprodukte'])){
    modifikoprodukte1($_POST['productsid1'],$_POST['emriproduktit'],$_POST['pershkrimi'],$_POST['kategoria'],$_POST['produktfoto']
    ,$_POST['qmimi']);
}
if(isset($_GET['prid'])){
    $productsid1=$_GET['prid'];
    $produkti=merrProduktetId1($productsid1);
    $emriproduktit=$produkti['emriproduktit'];
    $pershkrimi=$produkti['pershkrimi'];
    $kategoria=$produkti['kategoria'];
    $produktfoto=$produkti['produktfoto'];
    $qmimi=$produkti['qmimi'];
}
?>


<link rel="stylesheet" href="../stylee.css">    
    <div class="forma">
        <br>
        <br>
        <h1>Forma per shtimin/modifikimin e Produkteve</h1>
        <br>
        <form method="post" id="shtokategori">
        <input type="hidden" id="productsid1" name="productsid1" 
                value="<?php if(!empty($productsid1)) echo $productsid1 ?>">
            <div class="inputAndLabels">
                <label for="emriproduktit">Emri Produktit</label> <br>
                <input required type="text" id="emriproduktit" name="emriproduktit" 
                value="<?php if(!empty($emriproduktit)) echo $emriproduktit ?>">
            </div>
            <div class="inputAndLabels">
                <label for="pershkrimi">Pershkrimi</label> <br>
                <input required type="text" id="pershkrimi" name="pershkrimi" 
                value="<?php if(!empty($pershkrimi)) echo $pershkrimi ?>">
            </div>
            <div class="inputAndLabels">
                <label for="kategoria">Kategoria</label> <br>
                <input required type="text" id="kategoria" name="kategoria"
                value="<?php if(!empty($kategoria)) echo $kategoria ?>">
            </div>
            <div class="inputAndLabels">
                <label for="produktfoto">Produkt Foto</label> <br>
                <input required type="text" id="produktfoto" name="produktfoto"
                value="<?php if(!empty($produktfoto)) echo $produktfoto ?>">
            </div>
            <div class="inputAndLabels">
                <label for="qmimi">Qmimi</label> <br>
                <input required type="text" id="qmimi" name="qmimi"
                value="<?php if(!empty($qmimi)) echo $qmimi ?>">
            </div>
            <div class="inputAndLabels">
                <div class="butonat">
                    <?php
                        if(!isset($_GET['prid'])){
                            echo "<input id='shtoprodukte' type='submit'
                            name='shtoprodukte' class='shtoModifiko' value='Shto Produkte'>";
                        }else{
                            echo "<input id='modifikoprodukte' type='submit'
                            name='modifikoprodukte' class='shtoModifiko' value='Modifiko Produkte'>"; 
                        }
                        
                    ?>
                </div>
            </div>
        </form>
    </div>
</section>

<?php
include '../inc/footer.php';
?>
</body>
</html>

