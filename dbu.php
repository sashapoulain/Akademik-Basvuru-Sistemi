<?php

$con = mysqli_connect('localhost', 'root', '', 'academy');
mysqli_query($con,"SET CHARACTER SET 'utf8'");

if ($con)
{

}else{
  echo "hata";
}




?>