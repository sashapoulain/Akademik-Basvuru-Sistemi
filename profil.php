<?php 
  session_start(); 
  include 'uyeklendi.php';

  if (!isset($_SESSION['uye_mail'])) {
  	$_SESSION['msg'] = "Lütfen Giriş Yapın!";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['uye_mail']);
  	header("location: login.php");
  }
?>


<!doctype html>
<html lang="tr">
  <head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets\plugins\bootstrapv5\css\bootstrap.min.css">
    <link rel="stylesheet" href="assets\plugins\fontawesome5.14.0\css\fontawesome.css">
    <link rel="stylesheet" href="assets\plugins\fontawesome5.14.0\css\font-awesome-animation.min.css">
    <link rel="stylesheet" href="assets\plugins\fontawesome5.14.0\css\all.css">
    <link rel="stylesheet"  href="assets\academy\css\academy.css">
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
            <!-- notification message -->
            
            <div class="sidebar-profile text-center">
                <img src="assets/academy/img/m11.jpg" class="img-fluid mx-auto d-block circle">

                

            
                <?php if (isset($_SESSION['success'])) : ?>
                    <div class="error success" >
                            <h3>
                            <?php 
                                echo $_SESSION['success']; 
                                unset($_SESSION['success']);
                            ?>
                            </h3>
                    </div>
  	            <?php endif ?>



                
                <?php  if (isset($_SESSION['uye_mail'])) : ?>
               

                    <div class="uye_adi"><strong><?php echo $_SESSION['uye_mail']; ?></strong></div>
                    
                    
                <?php endif ?>

                
                
                <div class="btn-group btn-group-sm mt-1" role="group" aria-label="Basic example">
                    <a href="#" class="btn parola" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Parola İşlemleri"><i class="fas fa-unlock"></i></a>
                    <a href="#" class="btn profil" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Profil İşlemleri"><i class="fas fa-user"></i></a>
                    
                </div>
            </div>   <!-- sidebar-profile end -->
            <div class="sidebar-nav nav-profil">
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
                    <li class="nav-item">
                        <a class="nav-link" href="#">Favori İlanlarım</a>
                        <i class="fas fa-heart"></i>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Başvurularım</a>
                        <i class="fas fa-paper-plane"></i>
                    </li>

                 
                   
                </ul>
                
            </div> <!-- sidebar-nav end -->

           
           
           
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
            
                
                <div class="menu">
                    <button class="btn" type="button">
                    <a class="logoutpart" href="logout.php?logout='1' " data-bs-toggle="tooltip" data-bs-placement="top" title="Çıkış Yap"><i class="fas fa-power-off"></i></a> 
                    </button>
                    
                </div>
                
               

                
            </div>   <!-- floatright end -->
            <div class="float-end signup">
                <div class="btn-group">
                    

                </div>
            </div> 
            
        </div>  <!-- header end -->


        

        <div class="content">
            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Academy</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Profil</li>
                </ol>
            </nav>

            
               
            <div class="container-fluid p-4">
              <!--   <div class="form-kayit">
                   <h6 class="text-center mt-1"><i class="fas fa-female"></i><strong>Academy Başvuru Formu</strong><i class="fas fa-male"></i></h6>

                    <form action="fileislemleri.php" class="row required kayit-part" method="POST" accept-charset="utf-8" enctype="multipart/form-data">    
                        <div class="col-md-6 col-md-8 mx-auto form-group required">

                            <i class="fas fa-star-of-life yıldız"></i>
                            <label class="lab">İsim-Soyisim</label> 
                            <input class="form-control" type="text" name="name" id="fileUpload" required>


                            <i class="fas fa-star-of-life yıldız"></i>
                            <label class="lab">Dilekçe (Başvuru Formu)</label> 
                            <input class="form-control" type="file" name="file_bf" id="fileUpload" required>

                            
                            <i class="fas fa-star-of-life yıldız"></i>
                            <label class="lab">Cv ve Projeler</label>
                            <input class="form-control" type="file" name="file_cv" id="fileUpload" required>

                            <i class="fas fa-star-of-life yıldız"></i>
                            <label class="lab">Nufus Cüzdan Fotokopisi</label>
                            <input class="form-control" type="file" name="file_nc" id="fileUpload" required>

                            <i class="fas fa-star-of-life yıldız"></i>
                            <label class="lab">Öğrenci Belgesi</label>
                            <input class="form-control" type="file" name="file_ob" id="fileUpload" required>

                            <i class="fas fa-star-of-life yıldız"></i>
                            <label class="lab">Lisans Transkript</label>
                            <input class="form-control" type="file" name="file_lt" id="fileUpload" required>

                            <i class="fas fa-star-of-life yıldız"></i>
                            <label class="lab">Yüksek Lisans Transkript</label>
                            <input class="form-control" type="file" name="file_ylt" id="fileUpload" required>

                            <i class="fas fa-star-of-life yıldız"></i>
                            <label class="lab">Ales Belgesi</label>
                            <input class="form-control" type="file" name="file_a" id="fileUpload" required>

                            <i class="fas fa-star-of-life yıldız"></i>
                            <label class="lab">Yabancı Dil Sınav Belgesi</label>
                            <input class="form-control" type="file" name="file_ydb" id="fileUpload" required>

                            <label class="lab">Askerlik Durum Belgesi</label>
                            <input class="form-control" type="file" name="file_ab" id="fileUpload" >

                            <i class="fas fa-star-of-life yıldız"></i>
                            <label class="lab">Vesikalık Fotoğraf</label>
                            <input class="form-control" type="file" name="file_vf" id="fileUpload" required >

                            



                           

                            <input type="submit" class="btn mx-auto kayıt-ol text-center" value="Başvur" name="submit" >
                        </div>
                    </form>                    


                </div> -->
            </div>


                
            

            
        
            

            <div class="content-footer float-left">
                
                <div class="float-left">
                    <span> &copy; 2021 Tüm Hakları Saklıdır. Gizlilik, kullanım ve telif hakları bildiriminde belirtilen kurallar çerçevesinde hizmet sunulmaktadır.<span>
                </div>
                
               
            </div>
            
            


        </div> <!-- content end -->

    </div>  <!-- wrap end -->



    <script src="assets\plugins\jqueryv321\jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="assets\plugins\bootstrapv5\js\bootstrap.min.js"></script>
    <script src="assets\plugins\jqueryfullscreen\jquery.fullscreen.min.js"></script>
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
           
            
           
        });
    </script>
     
  </body>


</html>


