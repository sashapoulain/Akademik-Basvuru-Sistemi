<?php
require_once "config.php";
$uni_id = $_POST["uni_id"];
$result = mysqli_query($con,"SELECT * FROM uni_bolum where uni_id = $uni_id");
?>
<option value="">Bölüm Seçiniz!</option>
<?php
while($row = mysqli_fetch_array($result)) {
?>
<option value="<?php echo $row["id"];?>"><?php echo $row["uye_bolum"];?></option>
<?php
}
?>