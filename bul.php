<?php
var_dump(gd_info());
?>

$ayil = $_POST['ayil'];
    $ydsyil = $_POST['ydsyil'];
    if( $ydsyil == 2015){

        echo "YDS belge tarihi 5 yıldan fazla olduğu için başvurunuz geçersizdir.";
    }elseif( $ayil == 2015){

    echo "Ales belge tarihi 5 yıldan fazla olduğu için başvurunuz geçersizdir.";