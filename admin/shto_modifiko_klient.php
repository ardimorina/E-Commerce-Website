<?php
include "header1.php";

if(!isset($_SESSION['klienti']) || $_SESSION['klienti']['role']==0){
    header("Location: ../adaspera.php");
 }
if(isset($_POST['shtoklient'])){
    shtoKlientet($_POST['emri'],$_POST['mbiemri'],$_POST['email'],$_POST['fjalekalimi'],$_POST['role']);
}
if(isset($_POST['modifikoklient'])){
    modifikoKlientet($_POST['klientiid'],$_POST['emri'],$_POST['mbiemri'],$_POST['email'],$_POST['fjalekalimi']
    ,$_POST['role']);
}

if(isset($_GET['kid'])){
    $klientiid=$_GET['kid'];
    $klienti=merrKlientiId($klientiid);
    $emri=$klienti['emri'];
    $mbiemri=$klienti['mbiemri'];
    $email=$klienti['email'];
    $fjalekalimi=$klienti['fjalekalimi'];
    $role=$klienti['role'];
}


?>


<link rel="stylesheet" href="../stylee.css">    
    <div class="forma">
        <br>
        <br>
        <h1>Forma per shtimin/modifikimin e Klienteve</h1>
        <br>
        <form method="post" id="shtokategori">
        <input type="hidden" id="klientiid" name="klientiid" 
                value="<?php if(!empty($klientiid)) echo $klientiid ?>">
            <div class="inputAndLabels">
                <label for="emri">Emri</label> <br>
                <input required type="text" id="emri" name="emri" 
                value="<?php if(!empty($emri)) echo $emri ?>">
            </div>
            <div class="inputAndLabels">
                <label for="mbiemri">Mbiemri</label> <br>
                <input required type="text" id="mbiemri" name="mbiemri" 
                value="<?php if(!empty($mbiemri)) echo $mbiemri ?>">
            </div>
            <div class="inputAndLabels">
                <label for="email">Email</label> <br>
                <input required type="text" id="email" name="email"
                value="<?php if(!empty($email)) echo $email ?>">
            </div>
            <div class="inputAndLabels">
                <label for="fjalekalimi">Fjalekalimi</label> <br>
                <input required type="password" id="fjalekalimi" name="fjalekalimi"
                value="<?php if(!empty($fjalekalimi)) echo $fjalekalimi ?>">
            </div>
            <div class="inputAndLabels">
                <label for="role">Role</label> <br>
                <input required type="text" id="role" name="role"
                value="<?php if(!empty($role)) echo $role ?>">
            </div>
            
            <div class="inputAndLabels">
                <div class="butonat">
                    <?php
                        if(!isset($_GET['kid'])){
                            echo "<input id='shtoklient' type='submit'
                            name='shtoklient' class='shtoModifiko' value='Shto Klient'>";
                        }else{
                            echo "<input id='modifikoklient' type='submit'
                            name='modifikoklient' class='shtoModifiko' value='Modifiko Klient'>"; 
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

