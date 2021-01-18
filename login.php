<!DOCTYPE html>
<html dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/mode/images/favicon.png">
    <title>BODJ Ranap - Login Page</title>
    <link href="assets/mode/dist/css/style.min.css" rel="stylesheet">
</head>
<style type="text/css">
  @import url('https://fonts.googleapis.com/css?family=Nunito');
  @import url('https://fonts.googleapis.com/css?family=Poiret+One');

  body, html {
    height: 100%;
    background-repeat: no-repeat;    /*background-image: linear-gradient(rgb(12, 97, 33),rgb(104, 145, 162));*/
    background:#ff4f70;
    position: relative;
}
#login-box {
    position: absolute;
    top: 0px;
    left: 50%;
    transform: translateX(-50%);
    /*width: 350px;
    margin: 0 auto;
    border: 1px solid black;
    background: rgba(48, 46, 45, 1);
    min-height: 250px;
    padding: 20px;*/
    z-index: 9999;
}
#login-box .logo .logo-caption {
    font-family: 'Poiret One', cursive;
    color: white;
    text-align: center;
    margin-bottom: 0px;
}
#login-box .logo .tweak {
    color: #ff5252;
}
#login-box .controls {
    padding-top: 30px;
}
#login-box .controls input {
    border-radius: 0px;
    background: rgb(98, 96, 96);
    border: 0px;
    color: white;
    font-family: 'Nunito', sans-serif;
}
#login-box .controls input:focus {
    box-shadow: none;
}
#login-box .controls input:first-child {
    border-top-left-radius: 2px;
    border-top-right-radius: 2px;
}
#login-box .controls input:last-child {
    border-bottom-left-radius: 2px;
    border-bottom-right-radius: 2px;
}
#login-box button.btn-custom {
    border-radius: 2px;
    margin-top: 8px;
    background:#ff5252;
    border-color: rgba(48, 46, 45, 1);
    color: white;
    font-family: 'Nunito', sans-serif;
}
#login-box button.btn-custom:hover{
    -webkit-transition: all 500ms ease;
    -moz-transition: all 500ms ease;
    -ms-transition: all 500ms ease;
    -o-transition: all 500ms ease;
    transition: all 500ms ease;
    background: rgba(48, 46, 45, 1);
    border-color: #ff5252;
}
#particles-js{
    width: 100%;
    height: 100%;
    background-size: cover;
    background-position: 50% 50%;
    position: fixed;
    top: 0px;
    z-index:1;
}
</style>
<body onload="typeWriter()">
    <div class="main-wrapper">
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
        <!-- <div class="auth-wrapper d-flex no-block justify-content-center align-items-center position-relative" style="background:url(assets/mode/images/big/auth-bg.jpg) no-repeat center center;"> -->
            <div id="login-box">
                <div class="auth-wrapper d-flex no-block justify-content-center align-items-center position-relative">
                    <div class="auth-box row">
                        <!-- <div class="col-lg-7 col-md-5 modal-bg-img" style="background-image: url(assets/mode/images/big/BG.png);">
                        </div> -->
                        <div class="col-lg-12 col-md-12 bg-white">
                            <div class="p-3">
                                <div class="text-center">
                                    <img src="assets/mode/images/logo-icon.png" alt="wrapkit">
                                </div>
                                <h2 class="mt-3 text-center">Sign In</h2>
                                <p class="text-center" id="demo"></p>
                                <div align="center">
                                    <small class="text-center">RS. Khusus Ginjal Ny.R.A. Habibie</small>
                                </div>
                                <form action="logedin.php" method="POST" class="mt-4">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="text-dark" for="uname">Username</label>
                                                <input class="form-control" name="username" type="text"
                                                placeholder="enter your username">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="text-dark" for="pwd">Password</label>
                                                <input class="form-control" name="password" type="password"
                                                placeholder="enter your password">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 text-center">
                                            <button type="submit" class="btn btn-block btn-dark">Sign In</button>
                                        </div>
                                        <div class="col-lg-12 text-center mt-5">
                                            Powered by <a href="#" class="text-danger">Teknologi Informasi</a> <?php echo date('Y') ?>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="particles-js"></div>
        <script src="assets/mode/libs/jquery/dist/jquery.min.js "></script>
        <script src="assets/mode/libs/popper.js/dist/umd/popper.min.js "></script>
        <script src="assets/mode/libs/bootstrap/dist/js/bootstrap.min.js "></script>
        <script type="text/javascript">
            $(".preloader ").fadeOut();

            $.getScript("https://cdnjs.cloudflare.com/ajax/libs/particles.js/2.0.0/particles.min.js", function(){
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
  "background_color": "#b61924",
  "background_image": "",
  "background_position": "50% 50%",
  "background_repeat": "no-repeat",
  "background_size": "cover"
}
}
);
          });
      </script>
      <script>
        var i = 0;
        var txt = 'Buku Operan Dokter Rawat Inap.';
        var speed = 50;

        function typeWriter() {
          if (i < txt.length) {
            document.getElementById("demo").innerHTML += txt.charAt(i);
            i++;
            setTimeout(typeWriter, speed);
        }
    }
</script>
</body>
</html>