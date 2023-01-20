<!DOCTYPE html>
<html lang="en">


     <section id="header">
    <a href="adaspera.php"><img src="images/logo.png" class="logo" height="70"></a>
     </section>
<?php
include "inc/functions.php";
if(isset($_POST['login'])){
    login($_POST['email'],$_POST['fjalekalimi']);
}
?>
    <?php
    if (isset($_SESSION['message1'])) {
        echo "<div id='message1'>" . $_SESSION['message1'] . "</div>";
    }
    ?>


<link rel="stylesheet" href="style.css">

<section id="reigster">
        <div class="container1">
            <div class="forms">
                <div class="form login">
                    <span class="title">Kyçu</span>
    
                    <form id="login" method="POST">
                        <div class="input-field">
                        <input required name="email" type="text" placeholder="email"> 
               
                        </div>
                        <div class="input-field">
                        <input required name="fjalekalimi" type="password" placeholder="password">
                  
                        </div>
    
                        <div class="checkbox-text">
                            <div class="checkbox-content">
                            </div>
                            
                            <a href="#" class="text">Keni harruar Fjalekalimin?</a>
                        </div>
    
                        <div class="input-field button">
                        <input type="submit" id="login" name="login" value='Login'>
                        </div>
                    </form>
    
                    <div class="login-signup">
                        <span class="text">Nuk keni account?
                            <a href="register.php" class="text regjistrohu-link">Regjistrohuni Tani</a>
                        </span>
                    </div>
                </div>
     </section>
               <br>
<?php
include 'inc/footer.php'
?>
