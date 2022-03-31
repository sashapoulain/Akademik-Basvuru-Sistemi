<?php include('server2.php') ?>
<!doctype html>
<html lang="tr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets\plugins\bootstrapv5\css\bootstrap.min.css">
    <link rel="stylesheet" href="assets\plugins\fontawesome5.14.0\css\fontawesome.css">
    <link rel="stylesheet" href="assets\plugins\fontawesome5.14.0\css\font-awesome-animation.min.css">
    <link rel="stylesheet" href="assets\plugins\fontawesome5.14.0\css\all.css">
    <link rel="stylesheet" href="assets\academy\css\academy.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="assets\plugins\select2\css\select2.min.css">
    <link rel="stylesheet" href="assets\plugins\select2\css\select2-bootstrap.min.css">
    <link rel="shortcut icon" type="image/png" href="assets\academy\img\academy.png">
   


    <title>ACADEMY</title>



  </head>
  <body>
    <div id="wrap" class="sidebar-active">
        <div class="sidebar">
            <div class="sidebar-header">
                <a href="index.php"><strong>A</strong>CADEMY</a>
                <i class="fas fa-university"></i>
            </div> <!-- sidebarheader end -->
          
        
            <div class="sidebar-nav">
                <ul class="nav flex-column">
                    <li class="nav-item">
                      <a class="nav-link" aria-current="page" href="mevzuat.php">Mevzuat</a>
                      <i class="fas fa-book-open"></i>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="arsiv.php">Arşiv</a>
                      <i class="fas fa-archive"></i>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="destek.php">Destek ve Yardım</a>
                      <i class="fas fa-question"></i>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="gizlilikpolitikası.php">Gizlilik Politikası</a>
                        <i class="fas fa-key"></i>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="amobile.php">Academy Mobile</a>
                        <i class="fas fa-mobile-alt"></i>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="socialmedia.php">Sosyal Medya</a>
                        <i class="fas fa-hashtag"></i>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="qrcode.php">QR Code Reader</a>
                        <i class="fas fa-qrcode"></i>
                    </li>
                  </ul>
            </div> <!-- sidebar-nav end -->

            <div class="sidebar-footer">
                 
                <span> &copy; 2021 Tüm Hakları Saklıdır.</span>
                <!-- <a href="#" class="logout" data-bs-toggle="tooltip" data-bs-placement="top" title="Çıkış Yap" ><i class="fas fa-power-off fa-2x"></i></a> -->
            </div>
        </div> <!-- sidebar end -->
        <div class="header">
            <div class="float-left">
                <div class="menu-link-wrapper">
                    <div class="menu-link menu-trigger-open">
                        <span class="lines"></span>
                    </div>
                </div>
                <div class="resmi-gazete float-left"><a href="https://www.resmigazete.gov.tr/"data-bs-toggle="tooltip" data-bs-placement="right" title="Resmi Gazete"><i class="fas fa-newspaper"></i></a></div>
                <div class="full-screen full-screen-open float-left"><a href="#" data-bs-toggle="tooltip" data-bs-placement="right" title="Full Screen"><i class="fas fa-expand"></i></a></div>
                <div class="full-screen full-screen-close float-left"><a href="#" data-bs-toggle="tooltip" data-bs-placement="right" title="Normal Screen"><i class="fas fa-compress-arrows-alt"></i></a></div>

            </div> <!-- floatleft end -->
            

            <div class="float-right rightmenu">
            
                <div class="dropdown lang-dropdown menus">
                    <button class="btn butonlang dropdown-toggle togb" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-grin-tongue"></i>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <h6 class="dropdown-header">Diller</h6>
                        <li><a class="dropdown-item active" href="#"><img src="assets/academy/img/turkey.png" alt="Türkçe"></a></li>
                        <li><a class="dropdown-item" href="#"><img src="assets/academy/img/uk.png" alt="İngilizce"></a></li>
                        <li><a class="dropdown-item" href="#"><img src="assets/academy/img/italy.jpg" alt="İtalyanca"></a></li>
                    </ul>
                </div>
                
            </div>   <!-- floatright end -->
            <div class="float-end signup">
                <div class="btn-group">
                    <a href="login.php" class="btn login">Giriş Yap</a>
                    <a href="uye.php" class="btn signin">Üye Ol</a>
                </div>
            </div>
            
        </div>  <!-- header end -->
        <div class="content">
            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Academy</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Uye Olmak İstiyorum ? </li>
                </ol>
            </nav>
            <div class="container-fluid form-part">
                <div class="form-kayit">
                   <h6 class="text-center mt-1"><i class="fas fa-female"></i><strong>Academy Üye Kayıt Formu</strong><i class="fas fa-male"></i></h6>
                    <form action="" class="row required kayit-part" method="POST" accept-charset="utf-8" enctype="multipart/form-data">
                        <?php include('errors.php'); ?>
                        <div class="col-md-6 col-md-8 mx-auto form-group required">
                            <i class="fas fa-star-of-life yıldız"></i>
                            <label class="lab">İsim Soyisim</label> 
                            <input class="form-control" type="text" name="uye_adi" value="<?php echo $uye_adi; ?>" required>
                            <i class="fas fa-star-of-life yıldız"></i>
                            <label class="lab">T.C</label>
                            <input class="form-control" type="number" name="uye_tc" required>
                            <i class="fas fa-star-of-life yıldız"></i>
                            <label class="lab">Mail Adresi</label>
                            <input class="form-control" type="email" name="uye_mail" value="<?php echo $uye_mail; ?>" required>
                            <i class="fas fa-star-of-life yıldız"></i>
                            <label class="lab">Şifre</label>
                            <input class="form-control" type="password" name="uye_pass" id="password" required>
                            <i class="fas fa-star-of-life yıldız"></i>
                            <label class="lab">Şifre (Tekrar)</label>
                            <input class="form-control" type="password" name="uye_pass2" id="password" required>
                            <i class="fas fa-star-of-life yıldız"></i>
                            <label for="inputState" class="lab">Üniversite</label> 
                            <select id="uye_okul" class="form-select okul select2-okul form-control" type="text" name="uye_okul" required> 
                                <option value=""></option>
                                <?php
                                    require_once "config.php";
                                    $result = mysqli_query($con,"SELECT * FROM uni");
                                    while($row = mysqli_fetch_array($result)) {
                                    ?>
                                    <option value="<?php echo $row['id'];?>"><?php echo $row["uye_okul"];?></option>
                                    <?php
                                    }
                                ?>
                            </select>
                           
                            <i class="fas fa-star-of-life yıldız"></i>
                            <label class="lab">Bölüm</label> 
                            <select id="uye_bolum" class="form-select select2 bolum select2-bolum form-control" type="text" name="uye_bolum" required>  
                            </select>
                            <i class="fas fa-star-of-life yıldız"></i>
                            <label class="lab">Telefon</label>
                            <input class="form-control" type="number" name="uye_tel" required>
                            <label class="lab">Lisansüstü Derece</label>
                            <select id="uye_md" class="form-select select2 select2-md form-control" type="text" name="uye_md">
                            </select>
                            <button type="submit" class="btn mx-auto kayıt-ol text-center" name="reg_user" value="ekle">Kayıt Ol</button>
                        </div>
                    </form>
                    <?php mysqli_close($db);  // close connection ?>
                </div>
            </div>
            <div class="content-footer">
                <div class="float-left">
                    <span>Gizlilik, kullanım ve telif hakları bildiriminde belirtilen kurallar çerçevesinde hizmet sunulmaktadır.<span>
                </div>
                
                <div class="float-right">
                   <span>Adres: Dokuz Eylül Üniversitesi | İZMİR | Tel: 0531 345 67 89 | E-mail: info@academy.com.tr</span>
                </div>
            </div>
            

        </div> <!-- content end -->

    </div>  <!-- wrap end -->



    <script src="assets\plugins\jqueryv321\jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="assets\plugins\bootstrapv5\js\bootstrap.min.js"></script>
    <script src="assets\plugins\jqueryfullscreen\jquery.fullscreen.min.js"></script>
    <script src="assets\plugins\select2\js\select2.full.min.js"></script>
    <script src="assets\plugins\select2\js\i18n\tr.js"></script>
    <script src="assets\academy\js\academy.js"></script>
    <script>
        $(document).ready(function(){

            var p = 1;
            $('.portlet').each(function(){
                var portletid = "portlet"+p;
                $(this).attr('id', portletid);
                $('#'+portletid+' .fullscreen-portlet').attr('data-parent', portletid);
                $('#'+portletid+' .exit-portlet').attr('data-parent', portletid);
                $('#'+portletid+' .collapse-portlet').attr('data-bs-target','#collapse'+portletid);
                $('#'+portletid+' .collapse-portlet').attr('aria-controls','collapse'+portletid);
                $('#'+portletid+' .collapse').attr('id','collapse'+portletid);
                p = p+1;
            });

           
            $('.fullscreen-portlet').click(function(){
                var portlet = $(this).attr('data-parent');
                $('#'+portlet).fullscreen();
                $('#'+portlet).addClass('fullscreen');
            });
            $('.exit-portlet').click(function(){
                var portlet = $(this).attr('data-parent');
                $.fullscreen.exit();
                $('#'+portlet).removeClass('fullscreen');

            });
            $('.heart-portlet').click(function(){
                var portlet = $(this).attr('data-parent');
                alert('Favorilere Eklendi');
            });

            $('.select2').select2({
                theme: "bootstrap",
                
                
            });
            $('.select2-okul').select2({
                theme: "bootstrap",
                
                
            });
            $('.select2-bolum').select2({
                theme: "bootstrap",
                
                
            });
            
          


            $('#uye_okul').on('change', function() {
            var uni_id = this.value;
            $.ajax({
            url: "b.php",
            type: "POST",
            data: {
            uni_id: uni_id
            },
            cache: false,
            success: function(result){
            $("#uye_bolum").html(result);
            $('#uye_md').html('<option value="">Derece seçiniz!</option>'); 
            }
            });
            });    
            $('#uye_bolum').on('change', function() {
            var bolum_id = this.value;
            $.ajax({
            url: "m.php",
            type: "POST",
            data: {
            bolum_id: bolum_id
            },
            cache: false,
            success: function(result){
            $("#uye_md").html(result);
            }
            });
            });

            
            
           
        });

           
           
    </script>


    <!-- https://www.tutsmake.com/country-state-city-database-in-mysql-php-ajax/   seçme olayı kaynak -->
    
  </body>
</html>


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





