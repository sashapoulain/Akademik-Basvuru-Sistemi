<!doctype html>
<html lang="tr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets\plugins\bootstrapv5\css\bootstrap.min.css">
    <link rel="stylesheet" href="assets\plugins\fontawesome5.14.0\css\fontawesome.css">
    <link rel="stylesheet" href="assets\plugins\particlejs\css\style.css">
    <link rel="stylesheet"  href="assets\academy\css\academy.css">
    <link rel="shortcut icon" type="image/png" href="assets\academy\img\academy.png">
   


    <title>ACADEMY</title>



  </head>
  <body class="h-100">
    <div id="particles-js" style="position: absolute;"></div>
    <div class="container h-100">
        <div class="row modal-dialog-centered">
            
            
                <div class="col-sm-10 col-md-4 mx-auto" style="position: relative">
                    
                    <img src="assets/academy/img/m11.jpg" class="foto-me col-md-6 mb-2" style="width:120px; height:120px;">
                    <div class="clearfix">
                       
                        
                        <strong class="text-white mb-2" style="font-size: 16px;">Şeyma YILMAZ</strong>
                        <h5 class="text-white" style="font-size: 15px;">DEU || YBS</h5>
                       

                        <p class="define text-white" style="font-size: 13px;">
                            Bu uygulama Şeyma YILMAZ tarafından Dokuz Eylül Üniversitesi <br>
                            Yönetim Bilişim Sistemleri Yüksek Lisans tezi kapsamında hazırlanmıştır.
                        </p>

                       

                        <p class="link-t">
                            <a href="https://twitter.com/SashaPoulain">Ş.Y.Twitter</a>
                        </p>
                        <p class="link-i">
                            <a href="https://www.instagram.com/sashapoulain/">Ş.Y.Instagram</a>
                        </p>
                        <p class="link-l">
                            <a href="https://www.linkedin.com/in/%C5%9Feyma-y%C4%B1lmaz-613bb5186/">Ş.Y.LinkedIn</a>
                        </p>
                        <p class="link-a">
                            <a href="index.php">Academy</a>
                        </p>
                        <div class="div">
                            <a href="https://ybs.deu.edu.tr/"><img src="assets/academy/img/ybs.png" class="foto-me col-md-6 mt-2" style="width:70px; height:70px;"></a>

                        </div>
                        
                       
                    </div>

                </div>
               
                    
        </div>
                    
    </div>
    

    <script src="assets\plugins\jqueryv321\jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="assets\plugins\bootstrapv5\js\bootstrap.min.js"></script>
    <script src="assets\plugins\particlejs\js\particles.min.js"></script>
    <script src="assets\academy\js\academy.js"></script>

    <!-- <script>
        var count_particles, stats, update;
        stats = new Stats;
        stats.setMode(0);
        stats.domElement.style.position = 'absolute';
        stats.domElement.style.left = '0px';
        stats.domElement.style.top = '0px';
        document.body.appendChild(stats.domElement);
        count_particles = document.querySelector('.js-count-particles');
        update = function() {
            stats.begin();
            stats.end();
            if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) {
            count_particles.innerText = window.pJSDom[0].pJS.particles.array.length;
            }
            requestAnimationFrame(update);
        };
        requestAnimationFrame(update);
    </script> -->
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


