<?php
include "inc/functions.php";
if(!isset($_SESSION['klienti']) || $_SESSION['klienti']['role']===1){
    header("Location: login.php");
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
       <li><a href="cart.php"><i class = "fas fa-shopping-cart"></i></a></li>

   </ul>
</div>
</section>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous">
    <link rel="stylesheet" href="stylee.css">

<?php



if (isset($_POST['porosit'])) {
    shtoPorosi($_POST['productsid'],$_POST['telefoni'],$_POST['qyteti'],$_POST['adresa'],$_POST['dataeporosis']);
}


if(isset($_GET['prid'])){
    $productsid=$_GET['prid'];
    $produkti=merrProduktetId($productsid);
    $klientiid=$_GET['prid'];
    $klienti=merrKlientiId($klientiid);
    $emriproduktit=$produkti['emriproduktit'];
    $pershkrimi=$produkti['pershkrimi'];
    $kategoria=$produkti['kategoria'];
    $produktfoto=$produkti['produktfoto'];
    $qmimi=$produkti['qmimi'];
}
?>


<link rel="stylesheet" href="stylee.css">    
    <div class="forma">
        <br>
        <br>
        <br>
        <form method="post" id="shtokategori">
        <input type="hidden" id="productsid" name="productsid" 
                value="<?php if(!empty($productsid)) echo $productsid ?>">
                <img src="images/<?php echo $produkti['produktfoto']; ?>"><br>
          <strong>  <?php if(!empty($emriproduktit)) echo $emriproduktit ?>
            <br>
            <hr>
            <?php if(!empty($pershkrimi)) echo $pershkrimi ?>
            <br>
            <hr>
            <?php if(!empty($kategoria)) echo $kategoria ?>
            <br>
            <hr>
            <?php if(!empty($qmimi)) echo $qmimi ?>
            <br>
            <hr>
          </strong><input type="hidden" id="klientiid" name="klientiid" 
                value="<?php if(!empty($klientiid)) echo $klientiid ?>">
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
            <input type="submit" name="porosit" id="porosit" value="Porosit">
        </form>
        <br>
    </div>
</section>

<?php
include 'inc/footer.php';
?>
</body>
</html>

