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
include "inc/functions.php";
             
if (isset($_GET['pid'])) {
    $porosiaid=$_GET['pid'];
    $porosia=merrPorosiaid($porosiaid);
    $telefoni=$porosia['telefoni'];
    $qyteti=$porosia['qyteti'];
    $adresa=$porosia['adresa'];
    $dataeporosis=$porosia['dataeporosis'];


}

if (isset($_POST['fshij'])) {
    fshijPorosi($_POST['porosiaid']);
}


?>

<link rel="stylesheet" href="stylee.css">    
    <div class="forma">
        <br>
        <br>
        <h1>Anuloni Porosin</h1>
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

            <input type="submit" name="fshij" id="fshij" value="Anulo">
                </div>
            </div>
        </form>
    </div>
</section>
<br>
<br>
<?php
include "inc/footer.php";

?>