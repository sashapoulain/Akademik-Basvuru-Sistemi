<?php
if(isset($_POST['submit']))
{
    include 'dbs.php';

    $name = $_POST['name'];
    $location = "upload/";

    $file1 = $_FILES['file_bf']['name'];
    $file_tmp1 = $_FILES['file_bf']['tmp_name'];
    
    

    $file2 = $_FILES['file_cv']['name'];
    $file_tmp2 = $_FILES['file_cv']['tmp_name'];
    

    $file3 = $_FILES['file_nc']['name'];
    $file_tmp3 = $_FILES['file_nc']['tmp_name'];
   

    

    $file4 = $_FILES['file_ob']['name'];
    $file_tmp4 = $_FILES['file_ob']['tmp_name'];
    

    $file5 = $_FILES['file_lt']['name'];
    $file_tmp5 = $_FILES['file_lt']['tmp_name'];
    
    $file6 = $_FILES['file_ylt']['name'];
    $file_tmp6 = $_FILES['file_ylt']['tmp_name'];
   
    $file7 = $_FILES['file_a']['name'];
    $file_tmp7 = $_FILES['file_a']['tmp_name'];
    

    $file8 = $_FILES['file_ydb']['name'];
    $file_tmp8 = $_FILES['file_ydb']['tmp_name'];
    

    $file9 = $_FILES['file_ab']['name'];            
    $file_tmp9 = $_FILES['file_ab']['tmp_name'];
    

    $file10 = $_FILES['file_vf']['name'];           
    $file_tmp10 = $_FILES['file_vf']['tmp_name'];
    

  

    $data = [];
    $data = [$file1,$file2,$file3,$file4,$file5,$file6,$file7,$file8,$file9,$file10];
    $images = implode(" ",$data);

    $ayil = $_POST['ayil'];
    $ydsyil = $_POST['ydsyil'];
    if( $ydsyil == 2015){

        echo "YDS belge tarihi 5 yıldan fazla olduğu için başvurunuz geçersizdir.";
    }elseif( $ayil == 2015){

    echo "Ales belge tarihi 5 yıldan fazla olduğu için başvurunuz geçersizdir.";
    }else{
        
        $query = "INSERT INTO belgeler (name,images) VALUES ('$name','$images')";
        $fire = mysqli_query($con, $query);
        if ($fire)
        {
                move_uploaded_file($file_tmp1, $location.$file1);
                move_uploaded_file($file_tmp2, $location.$file2);
                move_uploaded_file($file_tmp3, $location.$file3);
                move_uploaded_file($file_tmp4, $location.$file4);
                move_uploaded_file($file_tmp5, $location.$file5);
                move_uploaded_file($file_tmp6, $location.$file6);
                move_uploaded_file($file_tmp7, $location.$file7);
                move_uploaded_file($file_tmp8, $location.$file8);
                move_uploaded_file($file_tmp9, $location.$file9);
                move_uploaded_file($file_tmp10, $location.$file10);
    
                echo "Dosyanız Personel Daire Başkanlığına gönderilmiştir.";   
        }
        else
        {  
            echo "gönderilmedi";    
        }
    } 
}
?>