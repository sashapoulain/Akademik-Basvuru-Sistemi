
<?php 
include('server2.php') ?>
<!doctype html>
<html lang="tr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets\plugins\bootstrapv5\css\bootstrap.min.css">
    <link rel="stylesheet" href="assets\plugins\fontawesome5.14.0\css\fontawesome.css">
    <link rel="stylesheet" href="assets\plugins\particlejs\css\style.css">
    <link rel="stylesheet" href="assets\plugins\securimage-master\securimage.css" media="screen">
    <link rel="stylesheet"  href="assets\academy\css\academy.css">
    <link rel="shortcut icon" type="image/png" href="assets\academy\img\academy.png">
   


    <title>ACADEMY</title>



  </head>
  <body class="h-100">
    <div id="particles-js" style="position: absolute;"></div>
    <div class="container particle h-100">
        <div class="row">
            <div class="col-md-4 col-sm-4 mx-auto">
                <div class="card login-card mx-auto">
                    <img class="fotologin d-block mx-auto" src="assets/academy/img/academy.png" alt="Academy" >
                    <div class="card-header">
                        <h4 class="d-block text-center baslik"><strong><a class="home" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Anasayfa" href="index.php">ACADEMY</a></strong></h4>
                    </div>
                    <div class="card-body">
                        <form action="login.php" method="POST" enctype="multipart/form-data" required class="required loginform">
                        <?php include('errors.php'); ?>
                            <div class="form-group required">
                                <label class="mail">E-posta: </label>
                                <input type="email" name="uye_mail" class="form-control form-mail" required>
                                <label class="pass">Şifre: </label>
                                <input type="password" name="uye_pass" class="form-control form-pass" required>
                                <img id="captcha" src="assets\plugins\securimage-master\securimage_show.php" alt="CAPTCHA Image" style="width:270px; height:70px;"/>
                                <input type="text" name="captcha_code" size="10" maxlength="6" />
                                <a href="#" onclick="document.getElementById('captcha').src = 'assets/plugins/securimage-master/securimage_show.php?' + Math.random(); return false" class="captcha"> Değiştir </a>
                                <div class="form-group">
                                    <input class="grsbtn mx-auto d-block" type="submit" name="login_user" value="Giriş Yap">
                                </div>
                            </div>
                            
                        </form>
                    </div>
                    <div class="card-footer text-center">
                        <a href="#" class="btn btn-link prlnt" style="position: relative;">Parolamı Unuttum</a>
                    </div>
                </div>
            </div>
        </div>          
    </div>
    <script src="assets\plugins\jqueryv321\jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="assets\plugins\bootstrapv5\js\bootstrap.min.js"></script>
    <script src="assets\plugins\jqueryfullscreen\jquery.fullscreen.min.js"></script>
    <script src="assets\plugins\particlejs\js\particles.js"></script>
    <script src="assets\plugins\particlejs\js\particles.min.js"></script>
    <script src="assets\plugins\securimage-master\securimage.js"></script>
    <script src="assets\academy\js\academy.js"></script>
    <script>
        
        particlesJS('particles-js',
            
            {
                "particles": {
                "number": {
                    "value": 80,
                    "density": {
                    "enable": true,
                    "value_area": 800
                    }
                },
                "color": {
                    "value": "#ffffff"
                },
                "shape": {
                    "type": "circle",
                    "stroke": {
                    "width": 0,
                    "color": "#000000"
                    },
                    "polygon": {
                    "nb_sides": 5
                    },
                    "image": {
                    "src": "img/github.svg",
                    "width": 100,
                    "height": 100
                    }
                },
                "opacity": {
                    "value": 0.5,
                    "random": false,
                    "anim": {
                    "enable": false,
                    "speed": 1,
                    "opacity_min": 0.1,
                    "sync": false
                    }
                },
                "size": {
                    "value": 5,
                    "random": true,
                    "anim": {
                    "enable": false,
                    "speed": 40,
                    "size_min": 0.1,
                    "sync": false
                    }
                },
                "line_linked": {
                    "enable": true,
                    "distance": 150,
                    "color": "#ffffff",
                    "opacity": 0.4,
                    "width": 1
                },
                "move": {
                    "enable": true,
                    "speed": 6,
                    "direction": "none",
                    "random": false,
                    "straight": false,
                    "out_mode": "out",
                    "attract": {
                    "enable": false,
                    "rotateX": 600,
                    "rotateY": 1200
                    }
                }
                },
                "interactivity": {
                "detect_on": "canvas",
                "events": {
                    "onhover": {
                    "enable": true,
                    "mode": "repulse"
                    },
                    "onclick": {
                    "enable": true,
                    "mode": "push"
                    },
                    "resize": true
                },
                "modes": {
                    "grab": {
                    "distance": 400,
                    "line_linked": {
                        "opacity": 1
                    }
                    },
                    "bubble": {
                    "distance": 400,
                    "size": 40,
                    "duration": 2,
                    "opacity": 8,
                    "speed": 3
                    },
                    "repulse": {
                    "distance": 200
                    },
                    "push": {
                    "particles_nb": 4
                    },
                    "remove": {
                    "particles_nb": 2
                    }
                }
                },
                "retina_detect": true,
                "config_demo": {
                "hide_card": false,
                "background_color": "#15597e",
                "background_image": "",
                "background_position": "50% 50%",
                "background_repeat": "no-repeat",
                "background_size": "cover"
                }
            }

        );
    </script>
  </body>
</html>


