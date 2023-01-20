<?php
include "inc/functions.php";
if(isset($_POST['regjistrohu'])){
    regjistrohu($_POST['emri'],$_POST['mbiemri'],$_POST['email'],$_POST['fjalekalimi'],$_POST['role']);
}
?>
<!DOCTYPE html>
<html lang="en">


     <section id="header">
    <a href="adaspera.php"><img src="images/logo.png" class="logo" height="70"></a>
     </section>

<link rel="stylesheet" href="style.css">
<div class="container4">
    <div class="form signup1">
                    <h2>Regjistrohuni</h2>
    
                    <form method="post" id="shtoklient">
                        <div class="input-field">
                        <label for="emri">Emri</label> <br>
                        <input required type="text" id="emri" name="emri">
                        </div>
                        <div class="input-field">
                        <label for="mbiemri">Mbiemri</label> <br>
                        <input required type="text" id="mbiemri" name="mbiemri">
                        </div>
                        <div class="input-field">
                        <label for="email">Email</label> <br>
                        <input required type="text" id="email" name="email">
                        </div>
                        <div class="input-field">
                        <label for="fjalekalimi">Fjalekalimi</label> <br>
                        <input required type="password" id="fjalekalimi" name="fjalekalimi">
                        </div>
                        
                        <div class="checkbox-text">
                            <div class="checkbox-content">
                               
                            </div>
                        </div>
    
                        <div class="input-field button">
                        <input type="submit" name="regjistrohu" id="regjistrohu" value="Regjistrohu">
                        </div>
                    </form>
    
                    <div class="login-signup">
                        <span class="text">Keni Account?
                            <a href="login.php" class="text kyqu-link">Kyçu Tani</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
