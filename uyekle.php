<?php
error_reporting(0);
extract($_POST);
include 'dbu.php';
$sql=mysqli_query($con, "SELECT * FROM uyekle WHERE uye_mail='$uye_mail'");
if(mysqli_num_rows($sql)>0)
{
    echo "Böyle bir e-mail zaten var";
    exit;
}else
{
    
    if(isset($_POST['submit'])){
        $uye_adi= $_POST['uye_adi'];
        $uye_mail= $_POST['uye_mail'];
        $uye_pass= $_POST['uye_pass'];
        $uye_tel= $_POST['uye_tel'];
        $uye_md=$_POST['uye_md'];
        $uye_okul=$_POST['uye_okul'];
        $uye_bolum=$_POST['uye_bolum'];
       

       
        $sql="INSERT INTO uyekle(uye_adi, uye_mail, uye_pass, uye_tel, uye_md, uye_okul, uye_bolum ) VALUES ('$uye_adi', '$uye_mail',
        'md5($uye_pass)', '$uye_tel', '$uye_md' , '$uye_okul', '$uye_bolum')";
        if(mysqli_query($con,$sql)){
            echo "Üye kaydınız oluşturulmuştur.";
        }else{
            echo "hata: " . $sql . "
            " . mysqli_error($con);
        }
        mysqli_close($con);
    
    }

    
}


