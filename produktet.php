<?php include('inc/functions.php')?>
<?php $faqja = 'produktet';include "inc/header.php";?>
     <section id="banner2">
        <div class="bannner2">
            <a href="produktet.php"><img src="images/banner1.jpg" height="251"  width="1349"></a>
        </div>
     </section>
     <section id="produktet1">
     <div class = "products">
                    <div class = "product">
                         <div class = "product-items">



                    <?php 
                    $produktet=merrProduktet1();
                    while($produkti=mysqli_fetch_assoc($produktet)){
                        $productsid1=$produkti['productsid1'];
                        $emriproduktit=$produkti['emriproduktit'];
                        $pershkrimi=$produkti['pershkrimi'];
                        $kategoria=$produkti['kategoria'];
                        $produktfoto=$produkti['produktfoto'];
                        $qmimi=$produkti['qmimi'];
                        echo "
                        <div class = 'product-content'> 
                        <div class = 'product1'>
                            <img src = 'images1/$produktfoto' alt = 'product image'>
                        </div>
                        <div class = 'product-btns'>
                        <a href='p1.php?prid={$productsid1}'>
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
     <section id="pagination1">
        <ul id="pagination">
            <li><a href="produktet.php">Previous</a></li>
            <li><a class="active" href="produktet.php">1</a></li>
            <li><a href="produktet2.php">2</a></li>
            <li><a href="produktet2.php">Next</a></li>
    
           </ul>
     </section>
     <br/>
 
     <?php
include "inc/footer.php";
?>
</html>
