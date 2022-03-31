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
            </div> 
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
                    <li class="nav-item active">
                        <a class="nav-link" href="qrcode.php">QR Code Reader</a>
                        <i class="fas fa-qrcode"></i>
                    </li>
                 
                   
                </ul>
            </div> <!-- sidebar-nav end -->

            <div class="sidebar-footer">
                 
                <span> &copy; 2021 Tüm Hakları Saklıdır.</span>
               
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
                    <li class="breadcrumb-item active" aria-current="page">QR Code Reader</li>
                </ol>
            </nav>

            
               
            <div class="container-fluid p-4">
            
                <div class="card who-we portlet " id="portlet1">  <!-- row and col-md-6 for 2 side -->
                    <div class="card-header baslik">
                        <strong>Academy QR Code Reader Kullanımı</strong>
                        <div class="btn-group btn-group-sm float-end" role="group" aria-label="Basic example">
                            
                            
                            <button type="button"  class="btn collapse-portlet open-button" data-bs-toggle="collapse"  aria-expanded="true">
                                <i class="fas fa-angle-double-down"></i>
                            </button>
                        
                        </div>
                    </div>
                    <div class="collapse show" >
                        <div class="card-body">
                            <figure class="figure">
                                <img class="ybsqr figure-img img-fluid rounded" src="assets/academy/img/ybsqr.png" alt="">

                                <figcaption class="figure-caption text-end"> QR Code Reader Academy' i bilgisayarlarınızda kullanmak içindir.
                                <br> Academy mobil' i indirdikten sonra  sol menüden Academy Web/Masaüstü kısmına giderek aşağıda bulunan Qr Code' u okutarak Academy' i masaüstü uygulamalarınızda kullanabilirsiniz.</figcaption>
                            </figure>
                           
                            
                        </div>
                    </div>
                </div> <!-- portlet end -->
            </div>

            <div class="content-footer">
                <div class="container-fluid footer-part">
                    <div class="div">
                        <div class="float-left">
                            <span>Gizlilik, kullanım ve telif hakları bildiriminde belirtilen kurallar 
                            çerçevesinde hizmet sunulmaktadır.<span>
                            

                        </div>
                    </div>
                    
                    <div class="div">
                        <div class="float-right">
                            <a href="#" class="btn" type="button"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="btn" type="button"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="btn" type="button"><i class="fab fa-youtube-square"></i></a>
                            <a href="#" class="btn" type="button"><i class="fab fa-facebook-square"></i></a>
                            <a href="#" class="btn" type="button"><i class="fab fa-linkedin"></i></a>
                            <a href="#" class="btn" type="button" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Bana Tıkla"><i class="fab fa-google-play"></i></a>
                            <a href="#" class="btn" type="button" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Bana Tıkla"><i class="fab fa-app-store-ios"></i></a>
                        </div>
                    </div>
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


