<?php
require_once "config.php";
$bolum_id = $_POST["bolum_id"];
$result = mysqli_query($con,"SELECT * FROM degree where bolum_id = $bolum_id");
?>
<option value="YL derecesi seçiniz!"></option>
<?php
while($row = mysqli_fetch_array($result)) {
?>
<option value="<?php echo $row["id"];?>"><?php echo $row["uye_md"];?></option>
<?php
}
?>