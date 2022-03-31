<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "Dosyanız başarıyla gönderildi - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "Dosya doğru formatta değil.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "Bu dosyayı zaten yüklemişsin!";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "Bu dosya çok büyük!";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "pdf" ) {
  echo "Sorry, only JPG, JPEG, PNG & PDF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Dosyanız yüklenemedi!";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "Dosya gönderimi ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " başarılı.";
  } else {
    echo "Dosya yüklenirken bir sorun oldu!";
  }
}




// https://www.w3schools.com/php/php_file_upload.asp //



?>



