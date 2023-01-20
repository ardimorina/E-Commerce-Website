<?php
session_start();
$dbconn;
dbConnection();
function dbConnection()
{
    global $dbconn;
    $dbconn = mysqli_connect("localhost", 'root', '', 'projekti');
    if (!$dbconn) {
        die("Deshtoi lidhja me DB" . mysqli_error($dbconn));
    }
}
function login($email,$fjalekalimi){
    global $dbconn;
    $sql = "SELECT klientiid,emri,mbiemri,role FROM klientet";
    $sql .=" WHERE email='$email' AND fjalekalimi='$fjalekalimi'"; 
    $klientiData = mysqli_query($dbconn, $sql);
    $klienti=array();
    if(mysqli_num_rows($klientiData)==1){
        $klientiInfo=mysqli_fetch_assoc($klientiData);
        $klienti['klientiid']=$klientiInfo['klientiid'];
        $klienti['emrimbiemri']=$klientiInfo['emri'] . " " . $klientiInfo['mbiemri'];
        $klienti['role']=$klientiInfo['role'];
        $_SESSION['klienti']= $klienti;
        header("Location: adaspera.php");
    }else{
        echo "Klienti nuk ekziston ose ka ndonje gabim nga sistemi";
    }
}
// FUNKSIONET PER PRODUKTE tek adaspera.php
function merrProduktet()
{
    global $dbconn;
    $sql = "SELECT * FROM products";
    return mysqli_query($dbconn, $sql);

}
function merrProduktetId($pid)
{
    global $dbconn;
    $sql = "SELECT productsid, emriproduktit, pershkrimi, kategoria, produktfoto, qmimi  FROM products";
    $sql .= " WHERE productsid=$pid";
    $res = mysqli_query($dbconn, $sql);
    return mysqli_fetch_assoc($res);
}
function shtoprodukte($emriproduktit,$pershkrimi, $kategoria, $produktfoto, $qmimi)
{
    global $dbconn;
    $sql = "INSERT INTO products(emriproduktit, pershkrimi, kategoria, produktfoto, qmimi) VALUES ";
    $sql .= "('$emriproduktit','$pershkrimi', '$kategoria', '$produktfoto', '$qmimi')";
    $res = mysqli_query($dbconn, $sql);
    if ($res) {
        $_SESSION['message3'] = "Produkti u shtua me sukses";
        header("Location: products.php");
    } else {
        die("Deshtoi shtimi i Produktit" . mysqli_error($dbconn));
    }
}
function modifikoprodukte($productsid, $emriproduktit, $pershkrimi, $kategoria, $produktfoto, $qmimi)
{
    global $dbconn;
    $sql = "UPDATE products SET emriproduktit='$emriproduktit', pershkrimi='$pershkrimi', kategoria='$kategoria', produktfoto='$produktfoto', ";
    $sql .= " qmimi='$qmimi' WHERE productsid=$productsid ";
    $res = mysqli_query($dbconn, $sql);
    if ($res) {
        $_SESSION['message3'] = "Produkti u modifiku me sukses";
        header("Location: products.php");
    } else {
        die("Deshtoi modifikimi i Produktit" . mysqli_error($dbconn));
    }
}
function fshijprodukte($productsid)
{
    global $dbconn;
    $sql = "DELETE FROM products WHERE productsid=$productsid";
    $produktet = mysqli_query($dbconn, $sql);
    if ($produktet) {
        $_SESSION['message3'] ="Produkti u fshi me sukses";
        header("Location: products.php");
    } else {
        die("Deshtoi fshirja e Produktit " . mysqli_error($dbconn));
    }
}

// FUNKSIONET PER KLIENT
function merrKlientet()
{
    global $dbconn;
    $sql = "SELECT klientiid, emri, mbiemri, email, fjalekalimi, role FROM klientet";
    return mysqli_query($dbconn, $sql);
}
function merrKlientiId($kid)
{
    global $dbconn;
    $sql = "SELECT klientiid, emri, mbiemri, email, fjalekalimi, role  FROM klientet";
    $sql .= " WHERE klientiid=$kid";
    $res = mysqli_query($dbconn, $sql);
    return mysqli_fetch_assoc($res);
}
function shtoKlientet($emri, $mbiemri, $email, $fjalekalimi)
{
    global $dbconn;
    $sql = "INSERT INTO klientet(emri, mbiemri, email, fjalekalimi, role) VALUES ";
    $sql .= "('$emri','$mbiemri', '$email', '$fjalekalimi', '$role')";
    $res = mysqli_query($dbconn, $sql);
    if ($res) {
        $_SESSION['message2'] = "Klienti u shtua me sukses";
        header("Location: klientet.php");
    } else {
        die("Deshtoi shtimi i Klienti" . mysqli_error($dbconn));
    }
}
function regjistrohu($emri, $mbiemri, $email, $fjalekalimi)
{
    global $dbconn;
    $sql = "INSERT INTO klientet(emri, mbiemri, email, fjalekalimi, role) VALUES ";
    $sql .= "('$emri','$mbiemri', '$email', '$fjalekalimi', '$role')";
    $res = mysqli_query($dbconn, $sql);
    if ($res) {
        $_SESSION['message1'] = "Jeni regjistruar me sukses";
        header("Location: login.php");
    } else {
        die("Deshtoi regjistrimi " . mysqli_error($dbconn));
    }
}
function modifikoKlientet($klientiid, $emri, $mbiemri, $email, $fjalekalimi, $role)
{
    global $dbconn;
    $sql = "UPDATE klientet SET emri='$emri', mbiemri='$mbiemri', email='$email', ";
    $sql .= " fjalekalimi='$fjalekalimi', role='$role' WHERE klientiid=$klientiid ";
    $res = mysqli_query($dbconn, $sql);
    if ($res) {
        $_SESSION['message2'] = "Klienti u modifiku me sukses";
        header("Location: klientet.php");
    } else {
        die("Deshtoi modifikimi i Klientit" . mysqli_error($dbconn));
    }
}
function fshijklientet($klientiid)
{
    global $dbconn;
    $sql = "DELETE FROM klientet WHERE klientiid=$klientiid";
    $produktet = mysqli_query($dbconn, $sql);
    if ($produktet) {
        $_SESSION['message2'] ="Klienti u fshi me sukses";
        header("Location: klientet.php");
    } else {
        die("Deshtoi fshirja e Klienti " . mysqli_error($dbconn));
    }
}


// FUNKSIONET PER POROSI

// POROSIT TEK cart.php
function merrPorosit()
{
    global $dbconn;
    $sql = "SELECT p.porosiaid, pr.produktfoto, pr.emriproduktit, pr.pershkrimi, pr.kategoria, pr.qmimi,
    p.telefoni,p.qyteti,p.adresa,p.dataeporosis "; 
    $sql.=" FROM porosit p INNER JOIN products pr ON p.productsid=pr.productsid";
    $klientiid=$_SESSION['klienti']['klientiid'];
    if($_SESSION['klienti']['role']!=1){
        $sql.=" WHERE klientiid=$klientiid";
    }
    return mysqli_query($dbconn, $sql);
}
// FUNKSIONET E POROSIS NE FAQE TJERA
function merrPorosit1()
{
    global $dbconn;
    $sql="SELECT p.porosiaid, CONCAT(k.emri,' ',k.mbiemri) AS emrimbiemri,pr.emriproduktit,pr.qmimi,p.telefoni,p.qyteti,k.email,p.adresa,
    p.dataeporosis
    FROM porosit p INNER JOIN products pr ON p.productsid=pr.productsid INNER JOIN klientet k ON p.klientiid=k.klientiid";
    return mysqli_query($dbconn, $sql);
}

function merrPorosiaid($porosiaid)
{
    global $dbconn;
    $sql = "SELECT p.porosiaid, pr.produktfoto, pr.emriproduktit, pr.pershkrimi, pr.kategoria, pr.qmimi,
    p.telefoni,p.qyteti,p.adresa,p.dataeporosis "; 
    $sql.=" FROM porosit p INNER JOIN products pr ON p.productsid=pr.productsid"; 
    $sql.=" WHERE porosiaid=$porosiaid";
    $res=mysqli_query($dbconn, $sql);
    return mysqli_fetch_assoc($res);
}

function shtoPorosi($productsid, $telefoni,$qyteti,$adresa,$dataeporosis)
{
    global $dbconn;
    $klientiid=$_SESSION['klienti']['klientiid'];
    $sql = "INSERT INTO porosit (klientiid,productsid,telefoni,qyteti,adresa,dataeporosis) VALUES ";
    $sql .= " ('$klientiid','$productsid','$telefoni','$qyteti','$adresa','$dataeporosis')";
    $klient = mysqli_query($dbconn, $sql);
    if ($klient) {
        $_SESSION['message4'] ="Porosia u be me sukses";
        header("Location: adaspera.php");
    } else {
        die("Porosia Deshtoi " . mysqli_error($dbconn));
    }
}
function modifikoPorosi($porosiaid, $telefoni,$qyteti, $adresa, $dataeporosis)
{
    global $dbconn;
    $sql = "UPDATE porosit SET telefoni='$telefoni', qyteti='$qyteti', adresa='$adresa', dataeporosis='$dataeporosis' WHERE porosiaid=$porosiaid";
    $res = mysqli_query($dbconn, $sql);
    if ($res) {
        $_SESSION['message'] = "Porosia u modifikua me sukses";
        header("Location: porosit.php");
    } else {
        die("Deshtoi modifikimi i porosis" . mysqli_error($dbconn));
    }
}
function fshijPorosi1($porosiaid)
{
    global $dbconn;
    $sql = "DELETE FROM porosit WHERE porosiaid= $porosiaid ";
    $res = mysqli_query($dbconn, $sql);
    if ($res) {
        $_SESSION['message'] = "Porosia u fshi me sukses";
        header("Location: porosit.php");
    } else {
        die("Deshtoi fshirja e Porosis" . mysqli_error($dbconn));
    }
}
// FUNKSIONI PER ANULIMIN E POROSIS
function fshijPorosi($porosiaid)
{
    global $dbconn;
    $sql = "DELETE FROM porosit WHERE porosiaid= $porosiaid ";
    $res = mysqli_query($dbconn, $sql);
    if ($res) {
        $_SESSION['message4'] = "Porosia u Anulua me sukses";
        header("Location: adaspera.php");
    } else {
        die("Deshtoi Anulimi i Porosis" . mysqli_error($dbconn));
    }
}

// FUNKSIONET PER PRODUKTET tek faqet produktet.php dhe produktet2.php
function merrProduktet1()
{
    global $dbconn;
    $sql = "SELECT * FROM products1";
    return mysqli_query($dbconn, $sql);

}
function merrProduktetId1($pid)
{
    global $dbconn;
    $sql = "SELECT productsid1, emriproduktit, pershkrimi, kategoria, produktfoto, qmimi  FROM products1";
    $sql .= " WHERE productsid1=$pid";
    $res = mysqli_query($dbconn, $sql);
    return mysqli_fetch_assoc($res);
}
function shtoprodukte1($emriproduktit,$pershkrimi, $kategoria, $produktfoto, $qmimi)
{
    global $dbconn;
    $sql = "INSERT INTO products1(emriproduktit, pershkrimi, kategoria, produktfoto, qmimi) VALUES ";
    $sql .= "('$emriproduktit','$pershkrimi', '$kategoria', '$produktfoto', '$qmimi')";
    $res = mysqli_query($dbconn, $sql);
    if ($res) {
        $_SESSION['message'] = "Produkti u shtua me sukses";
        header("Location: products.php");
    } else {
        die("Deshtoi shtimi i Produktit" . mysqli_error($dbconn));
    }
}
function modifikoprodukte1($productsid1, $emriproduktit, $pershkrimi, $kategoria, $produktfoto, $qmimi)
{
    global $dbconn;
    $sql = "UPDATE products1 SET emriproduktit='$emriproduktit', pershkrimi='$pershkrimi', kategoria='$kategoria', produktfoto='$produktfoto', ";
    $sql .= " qmimi='$qmimi' WHERE productsid1=$productsid1 ";
    $res = mysqli_query($dbconn, $sql);
    if ($res) {
        $_SESSION['message'] = "Produkti u modifiku me sukses";
        header("Location: products.php");
    } else {
        die("Deshtoi modifikimi i Produktit" . mysqli_error($dbconn));
    }
}
function fshijprodukte1($productsid1)
{
    global $dbconn;
    $sql = "DELETE FROM products1 WHERE productsid1=$productsid1";
    $produktet = mysqli_query($dbconn, $sql);
    if ($produktet) {
        $_SESSION['mesazhi'] ="Produkti u fshi me sukses";
        header("Location: products.php");
    } else {
        die("Deshtoi fshirja e Produktit " . mysqli_error($dbconn));
    }
}
// FUNKSIONET PER PRODUKTET 2  

function merrProduktet2()
{
    global $dbconn;
    $sql = "SELECT * FROM products2";
    return mysqli_query($dbconn, $sql);

}
function merrProduktetId2($pid)
{
    global $dbconn;
    $sql = "SELECT productsid2, emriproduktit, pershkrimi, kategoria, produktfoto, qmimi  FROM products2";
    $sql .= " WHERE productsid2=$pid";
    $res = mysqli_query($dbconn, $sql);
    return mysqli_fetch_assoc($res);
}
function shtoprodukte2($emriproduktit,$pershkrimi, $kategoria, $produktfoto, $qmimi)
{
    global $dbconn;
    $sql = "INSERT INTO products2(emriproduktit, pershkrimi, kategoria, produktfoto, qmimi) VALUES ";
    $sql .= "('$emriproduktit','$pershkrimi', '$kategoria', '$produktfoto', '$qmimi')";
    $res = mysqli_query($dbconn, $sql);
    if ($res) {
        $_SESSION['message'] = "Produkti u shtua me sukses";
        header("Location: products.php");
    } else {
        die("Deshtoi shtimi i Produktit" . mysqli_error($dbconn));
    }
}
function modifikoprodukte2($productsid2, $emriproduktit, $pershkrimi, $kategoria, $produktfoto, $qmimi)
{
    global $dbconn;
    $sql = "UPDATE products2 SET emriproduktit='$emriproduktit', pershkrimi='$pershkrimi', kategoria='$kategoria', produktfoto='$produktfoto', ";
    $sql .= " qmimi='$qmimi' WHERE productsid2=$productsid2 ";
    $res = mysqli_query($dbconn, $sql);
    if ($res) {
        $_SESSION['message'] = "Produkti u modifiku me sukses";
        header("Location: products.php");
    } else {
        die("Deshtoi modifikimi i Produktit" . mysqli_error($dbconn));
    }
}
function fshijprodukte2($productsid2)
{
    global $dbconn;
    $sql = "DELETE FROM products2 WHERE productsid2=$productsid2";
    $produktet = mysqli_query($dbconn, $sql);
    if ($produktet) {
        $_SESSION['mesazhi'] ="Produkti u fshi me sukses";
        header("Location: products.php");
    } else {
        die("Deshtoi fshirja e Produktit " . mysqli_error($dbconn));
    }
}