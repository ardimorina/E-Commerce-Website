<?php
include "header1.php";
if(!isset($_SESSION['klienti']) || $_SESSION['klienti']['role']==0){
    header("Location: ../adaspera.php");
 }



if(isset($_POST['modifikoporosi'])){
    modifikoPorosi($_POST['porosiaid'],$_POST['telefoni'],$_POST['qyteti'],$_POST['adresa'],$_POST['dataeporosis']);
}
if(isset($_GET['pid'])){
    $porosiaid=$_GET['pid'];
    $porosia=merrPorosiaid($porosiaid);
    $telefoni=$porosia['telefoni'];
    $qyteti=$porosia['qyteti'];
    $adresa=$porosia['adresa'];
    $dataeporosis=$porosia['adresa'];
}
?>


<link rel="stylesheet" href="../stylee.css">    
    <div class="forma">
        <br>
        <h1>Forma per modifikimin e Porosive</h1>
        <br>
        <br>
        <form method="post" id="shtokategori">
        <input type="hidden" id="porosiaid" name="porosiaid" 
                value="<?php if(!empty($porosiaid)) echo $porosiaid ?>">
          <div class="inputAndLabels">
                <label for="telefoni">Telefoni</label> <br>
                <input required type="text" id="telefoni" name="telefoni" 
                value="<?php if(!empty($telefoni)) echo $telefoni ?>">
            </div>
            <div class="inputAndLabels">
                <label for="qyteti">Qyteti</label> <br>
                <input required type="text" id="qyteti" name="qyteti" 
                value="<?php if(!empty($qyteti)) echo $qyteti ?>">
            </div>
            <div class="inputAndLabels">
                <label for="adresa">Adresa</label> <br>
                <input required type="text" id="adresa" name="adresa" 
                value="<?php if(!empty($adresa)) echo $adresa ?>">
            </div>
            <div class="inputAndLabels">
                <label for="dataeporosis">Data e Porosis</label> <br>
                <input required type="date" id="dataeporosis" name="dataeporosis" 
                value="<?php if(!empty($dataeporosis)) echo $dataeporosis ?>">
            </div>
            <div class="inputAndLabels">
                <div class="butonat">
                    <?php
                        if(!isset($_GET['pid'])){
                            echo "<input id='shtoprodukte' type='submit'
                            name='shtoprodukte' class='shtoModifiko' value='Shto Produkte'>";
                        }else{
                            echo "<input id='modifikoporosi' type='submit'
                            name='modifikoporosi' class='shtoModifiko' value='Modifiko Porosi'>"; 
                        }
                        
                    ?>
                </div>
            </div>
        </form>
        <br>
    </div>
</section>

<?php
include '../inc/footer.php';
?>
</body>
</html>

