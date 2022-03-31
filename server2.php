<?php
session_start();
include_once 'assets\plugins\securimage-master\securimage.php'; 

define("DB_SERVER", "localhost");
define("DB_USERNAME", "root");
define("DB_PASSWORD", "");
define("DB_DATABASE", "academy");



// initializing variables
$uye_mail    = "";
$uye_adi     ="";
$uye_md      ="";
$errors = array(); 

// connect to the database
$db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
mysqli_set_charset($db, "utf8");
// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $uye_adi = mysqli_real_escape_string($db, $_POST['uye_adi']);
  $uye_tc = mysqli_real_escape_string($db, $_POST['uye_tc']);
  $uye_mail = mysqli_real_escape_string($db, $_POST['uye_mail']);
  $uye_pass = mysqli_real_escape_string($db, $_POST['uye_pass']);
  $uye_pass2 = mysqli_real_escape_string($db, $_POST['uye_pass2']);
  $uye_okul = mysqli_real_escape_string($db, $_POST['uye_okul']);
  $uye_bolum = mysqli_real_escape_string($db, $_POST['uye_bolum']);
  $uye_tel = mysqli_real_escape_string($db, $_POST['uye_tel']);
  $uye_md = mysqli_real_escape_string($db, $_POST['uye_md']);
  





  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($uye_mail)) { array_push($errors, "Email Girin!"); }
  if (empty($uye_pass)) { array_push($errors, "Password Girin!"); }
  if ($uye_pass != $uye_pass2) {
	array_push($errors, "Şifreler eşit değil");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM uyekle WHERE uye_mail='$uye_mail' OR uye_pass='$uye_pass' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists

    if ($user['uye_mail'] === $uye_mail) {
      array_push($errors, "Böyle bir e-mail var zaten!");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$uye_pass = md5($uye_pass);//encrypt the password before saving in the database

  	$query = "INSERT INTO uyekle (uye_adi, uye_tc, uye_mail, uye_pass, uye_okul, uye_bolum, uye_tel, uye_md) 
  			  VALUES( '$uye_adi', '$uye_tc', '$uye_mail', '$uye_pass' ,'$uye_okul' ,'$uye_bolum' , '$uye_tel' , '$uye_md')";
  	mysqli_query($db, $query);
  	$_SESSION['uye_mail'] = $uye_mail;
    $_SESSION['uye_adi']  = $uye_adi;
    $_SESSION['uye_md']  = $uye_md;
  	$_SESSION['success'] = "Kaydınız alınmıştır";
  	header('location: ok.php');
  }
}


if (isset($_POST['login_user'])) {
    $uye_mail = mysqli_real_escape_string($db, $_POST['uye_mail']);
    $uye_pass = mysqli_real_escape_string($db, $_POST['uye_pass']);
  
    if (empty($uye_mail)) {
        array_push($errors, "Mail Boş Olamaz");
    }
    if (empty($uye_pass)) {
        array_push($errors, "Password Boş Olamaz");
    }
    $securimage = new Securimage();
    if ($securimage->check($_POST['captcha_code']) == false) {
   
      echo "Güvenlik kodunu hatalı girdiniz.<br /><br />";
      exit;
    }else{
  
      if (count($errors) == 0) {
          $uye_pass = md5($uye_pass);
          $query = "SELECT * FROM uyekle WHERE uye_mail='$uye_mail' AND uye_pass='$uye_pass'";
          $results = mysqli_query($db, $query);
          if (mysqli_num_rows($results) == 1) {
            $_SESSION['uye_mail'] = $uye_mail;
            $_SESSION['uye_adi']  = $uye_adi;
            $_SESSION['uye_md']  = $uye_md;
            $_SESSION['success'] = "";
            header('location: profil.php');
          }else {
              array_push($errors, "Hatalı şifre yada e-mail girdiniz!");
          }
      }
    }
  }  
?>