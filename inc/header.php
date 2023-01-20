<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adaspera</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous">

</head>

<body>
     <section id="header">
    <a href="adaspera.php"><img src="images/logo.png" class="logo" height="70"></a>

    <div>
        <ul id="navbar">
        <li><a class="<?php if($faqja=='ballina'){echo 'active';} ?>" href="adaspera.php">Ballina</a></li>
                     <?php
                    if(isset($_SESSION['klienti'])){
                        echo "<li> <a  href='produktet.php'>Produktet</a></li>";
                        echo "<li><a href='rrethnesh.php'>Rreth Nesh</a></li>";
                        echo "<li><a href='cart.php'><i class = 'fas fa-shopping-cart'></i></a></li>";
                        if($_SESSION['klienti']['role']==1){
                            echo "<li><a href='./admin/index.php'><i class='fas fa-user-alt'></i></a></li>";

                        }
                    }
                ?>
                    <?php
                        if(isset($_SESSION['klienti'])){
                            echo "<li><a href='logout.php'>Logout</a></li>";
                        }else{
                            echo "<li> <a href='produktet.php'>Produktet</a></li>";
                            echo "<li><a href='rrethnesh.php'>Rreth Nesh</a></li>";
                            echo "<li><a href='login.php'>Login</a></li>";
                        }
                    ?>
                </ul>
    </div>
     </section>