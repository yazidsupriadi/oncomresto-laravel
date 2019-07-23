
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{asset('homepage/vendor/bootstrap/css/bootstrap.min.css')}}">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{asset('homepage/vendor/font-awesome/css/font-awesome.min.css')}}">
    <!-- Google fonts - Roboto-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,700">
    <!-- Bootstrap Select-->
    <link rel="stylesheet" href="{{asset('homepage/vendor/bootstrap-select/css/bootstrap-select.min.css')}}">
    <!-- owl carousel-->
    <link rel="stylesheet" href="{{asset('homepage/vendor/owl.carousel/assets/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('homepage/vendor/owl.carousel/assets/owl.theme.default.css')}}">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{asset('homepage/css/style.default.css')}}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{asset('homepage/css/custom.css')}}">
    @yield('header')
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <div id="all">
      <!-- Top bar-->
      <div class="top-bar">
        <div class="container">
          <div class="row d-flex align-items-center">
            <div class="col-md-6 d-md-block d-none">
              <p>Contact us on +08190728199 or hello@oncomshop.com.</p>
            </div>
            <div class="col-md-6">
              <div class="d-flex justify-content-md-end justify-content-between">
                <ul class="list-inline contact-info d-block d-md-none">
                  <li class="list-inline-item"><a href="#"><i class="fa fa-phone"></i></a></li>
                  <li class="list-inline-item"><a href="#"><i class="fa fa-envelope"></i></a></li>
                </ul>
                <ul class="social-custom list-inline">
                  <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li class="list-inline-item"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li class="list-inline-item"><a href="#"><i class="fa fa-envelope"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Top bar end-->
      <!-- Login Modal-->
      <!-- Login modal end-->
      <!-- Navbar Start-->
    @yield('navbar')
      <!-- Navbar End-->
      
     @yield('slider')
     @yield('content')
      <!-- GET IT-->
  
      <!-- FOOTER -->
      <footer class="main-footer">
        <div class="container">
          <div class="row">
            <div class="col-lg-3">
              <h4 class="h6">About Us</h4>
              <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
              <hr>
              <h4 class="h6">Join Our Monthly Newsletter</h4>
              <form>
                <div class="input-group">
                  <input type="text" class="form-control">
                  <div class="input-group-append">
                    <button type="button" class="btn btn-secondary"><i class="fa fa-send"></i></button>
                  </div>
                </div>
              </form>
              <hr class="d-block d-lg-none">
            </div>
         
            <div class="col-lg-3">
              <h4 class="h6">Contact</h4>
              <p class="text-uppercase"><strong>Universal Ltd.</strong><br>13/25 New Avenue <br>Newtown upon River <br>45Y 73J <br>England <br><strong>Great Britain</strong></p><a href="contact.html" class="btn btn-template-main">Go to contact page</a>
              <hr class="d-block d-lg-none">
            </div>
           
          </div>
        </div>
        <div class="copyrights">
          <div class="container">
            <div class="row">
              <div class="col-lg-4 text-center-md">
                <p>&copy; 2019. Your company / name goes here</p>
              </div>
              <div class="col-lg-8 text-right text-center-md">
                <p>Template design by <a href="https://bootstrapious.com/p/big-bootstrap-tutorial">Bootstrapious </a>& <a href="https://fity.cz/ostrava">Fity</a></p>
                <!-- Please do not remove the backlink to us unless you purchase the Attribution-free License at https://bootstrapious.com/donate. Thank you. -->
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- Javascript files-->
    <script src="{{asset('homepage/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('homepage/vendor/popper.js/umd/popper.min.js')}}"> </script>
    <script src="{{asset('homepage/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('homepage/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{asset('homepage/vendor/waypoints/lib/jquery.waypoints.min.js')}}"> </script>
    <script src="{{asset('homepage/vendor/jquery.counterup/jquery.counterup.min.js')}}"> </script>
    <script src="{{asset('homepage/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('homepage/vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.min.js')}}"></script>
    <script src="{{asset('homepage/js/jquery.parallax-1.1.3.js')}}"></script>
    <script src="{{asset('homepage/vendor/bootstrap-select/js/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('homepage/vendor/jquery.scrollto/jquery.scrollTo.min.js')}}"></script>
    <script src="{{asset('homepage/js/front.js')}}"></script>

    @yield('footer')
  </body>
</html>