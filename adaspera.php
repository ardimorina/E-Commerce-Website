<?php include 'inc/functions.php'?>
<?php $faqja = 'ballina';include "inc/header.php";?>

     <section id="banner">
        <div class="box">
            <img id="image" height="300"  width="1349">
        </div>
        <script src="javascript.js">
        </script>
     </section>

     <section id="teksti">
        <h1 class = "lg-title">Produktet me te reja ne Treg</h1>
        <p class = "text-light">Ketu gjeni produkte rreth teknologjis</p>

     </section>
     <?php
    if (isset($_SESSION['message4'])) {
        echo "<div id='message4'>" . $_SESSION['message4'] . "</div>";
    }
    ?>
     <section id="produktet">

        <div class = "products">
                    <div class = "product">
                         <div class = "product-items">



                    <?php 
                    $produktet=merrProduktet();
                    while($produkti=mysqli_fetch_assoc($produktet)){
                        $productsid=$produkti['productsid'];
                        $emriproduktit=$produkti['emriproduktit'];
                        $pershkrimi=$produkti['pershkrimi'];
                        $kategoria=$produkti['kategoria'];
                        $produktfoto=$produkti['produktfoto'];
                        $qmimi=$produkti['qmimi'];
                        echo "
                        <div class = 'product-content'> 
                        <div class = 'product1'>
                            <img src = 'images/$produktfoto' alt = 'product image'>
                        </div>
                        <div class = 'product-btns'>
                        <a href='p.php?prid={$productsid}'>
                        <button type = 'button' class = 'btn-buy'> Bleje Tani
                                <span><i class = 'fas fa-shopping-cart'></i></span>
                            </button>
                            </a>
                        </div>
                        <div class = 'product-info'>
                        <div class = 'product-info-top'>
                            <div class = 'rating'>
                                <span><i class = 'fas fa-star'></i></span>
                                <span><i class = 'fas fa-star'></i></span>
                                <span><i class = 'fas fa-star'></i></span>
                                <span><i class = 'fas fa-star'></i></span>
                                <span><i class = 'far fa-star'></i></span>
                            </div>
                        </div>
                        <div class = 'product-name'>$emriproduktit</div></p>
                        <p class = 'product-price'>$qmimi</p>
                        </div>
                        </div>";
                        }
                    ?>
    
                    </div>
            </div>
        </div>

     </section>
     <?php
include "inc/footer.php";
?>
</body>
</html>
