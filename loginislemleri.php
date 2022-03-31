<?php
session_start();
if(isset($_POST['submit']))
{
    extract($_POST);
    include 'dbu.php';
    $sql=mysqli_query($conn, "SELECT * FROM uyekle WHERE uye_mail='$uye_mail' and uye_pass='md5($uye_pass)'");
    $row= mysqli_fetch_array($sql);
    if(is_array($row))
    {
        $_SESSION["uye_id"] = $row['uye_id'];
        $_SESSION["uye_adi"] = $row['uye_adi'];
        $_SESSION["uye_tc"]=$row['uye_tc'];
        $_SESSION["uye_mail"] = $row['uye_mail'];
        $_SESSION["uye_pass"] = $row['uye_pass'];
        $_SESSION["uye_tel"] = $row['uye_tel'];
        $_SESSION["uye_pp"] = $row['uye_pp'];
        $_SESSION["uye_okul"] = $row['uye_okul'];
        $_SESSION["uye_bolum"] = $row['uye_bolum'];
        $_SESSION["uye_md"]= $row['uye_md'];


        header("Location: profil.php");

    }
    else{
        echo "Yanlış bir şey yapmış olabilirsin. Bir kontrol et istersen?";
    }
}





?>