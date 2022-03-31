<?php
/* $url='localhost';
$username='root';
$password='';
$dbname= 'academyvt';
$conn=mysqli_connect($url,$username,$password,"academyvt");
mysqli_query($conn,"SET CHARACTER SET 'utf8'");
if(!$conn){
    die('bağlanamadı');
} */



$con = mysqli_connect('localhost', 'root', '', 'academy');
mysqli_query($con,"SET CHARACTER SET 'utf8'");

if ($con)
{

}else{
  echo "hata";
}

?>