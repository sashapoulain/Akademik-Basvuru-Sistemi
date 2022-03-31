<?php

$Dizin = "dosyalar";

for($i=0; $i < count($_FILES['Dosya']['name']); $i++){ 
	
 if(!empty($_FILES['Dosya']['name'][$i])) 
 {
		
   move_uploaded_file($_FILES['Dosya']['tmp_name'][$i], $Dizin."/".$_FILES['Dosya']['name'][$i]);

 }
		
}

?>