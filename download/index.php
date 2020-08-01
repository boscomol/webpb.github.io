<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"
    />
    <link rel="stylesheet" href="../style.css">

    <title>Point Blank - Indonesia</title>
  </head>
  <body>
    
    


<!-- Navbar -->

  <div class="my-navbar">
    <nav id="navbar-example" class="navbar navbar-expand-lg menu">
      <div class="container-fluid">
        <a class="navbar-brand text-uppercase" href="../index.php"><img src="../assets/logo_pointblank.png"> </a><span class="badge bg-success">Indonesia</span>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto animate__animated animate__fadeInDown">
            <a class="nav-link" href="../index.php">Home</a>
            <a class="nav-link" href="">Download</a>
            <a class="nav-link" href="../signin">Login</a>
          </div>
        </div>
      </div>
    </nav>
  </div>

<!-- Akhir Navbar -->




<!-- Jumbotron -->

  <div class="title text-center">
    <h1 class="display-4 text-white user-select-none wow animate__animated animate__jackInTheBox">Download</h1>
  </div>

<!-- Akhir Jumbotron -->



<!-- Konten -->

  <div class="container-fluid konten2">

    <div class="row justify-content-center">
      <div class="col-md-4 col-md-offset-2">
        <div class="pricing-table">
          <h4>Client</h4>
          <div class="pricing-table-content">
            <p class="size-box font-weight-bold">Size | <span>2.8 GB</span></p>
            <hr>
            <p>Version | <span>Latest Repack Version</span></p>
            <hr>
            <p>Last Updated | <span>1 August 2020</span></p>

            <div class="pricing-table-download">
              <a class="btn btn-outline-light">Download</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-md-offset-2">
        <div class="pricing-table">
          <h4>Launcher</h4>
          <div class="pricing-table-content">
            <p class="size-box font-weight-bold">Size | <span>1.4 MB</span></p>
            <hr>
            <p>Version | <span>0.1 Alpha</span></p>
            <hr>
            <p>Last Updated | <span>1 August 2020</span></p>

            <div class="pricing-table-download">
              <a class="btn btn-outline-light">Download</a>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Komunitas -->
  <div id="komunitas" class="row">
    <div class="row text-center">
      <div class="col-12">
        <h3 class="wow animate__animated animate__fadeInUp user-select-none">Gabung ke Komunitas Kami</h3>
        <a href="http://discord.com" target="_blank" class="wow animate__animated animate__fadeInLeft"><i class="fab fa-discord"></i></a>
        <a href="http://facebook.com" target="_blank" class="wow animate__animated animate__fadeInRight"><i class="fab fa-facebook"></i></a>
      </div>
    </div>
  </div>
  <!-- Akhir Komunitas -->

<!-- Akhir Konten -->




<!-- Footer -->

  <footer>
    <div class="copyright">
      <p>Copyright &copy; <?php echo date('Y'); ?> - All Rights Reserved </p>
    </div>
    <div class="company">
      <p>PT. Zepetto Interactive Indonesia</p>
    </div>
  </footer>

<!-- Akhir Footer -->









    <!-- Optional JavaScript -->
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="../js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>


    <!-- Custom JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js"></script>

    <script>
      var wow = new WOW(
      {
        boxClass:     'wow',      // animated element css class (default is wow)
        animateClass: 'animated', // animation css class (default is animated)
        offset:       0,          // distance to the element when triggering the animation (default is 0)
        mobile:       true,       // trigger animations on mobile devices (default is true)
        live:         true,       // act on asynchronously loaded content (default is true)
        callback:     function(box) {
          // the callback is fired every time an animation is started
          // the argument that is passed in is the DOM node being animated
        },
        scrollContainer: null,    // optional scroll container selector, otherwise use window,
        resetAnimation: true,     // reset animation on end (default is true)
      }
    );
    wow.init();
    </script>



    <script
  src="https://code.jquery.com/jquery-3.5.1.js"
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script>
  
  <script>
  $(document).ready(function(){
  $(window).scroll(function(){
  if($(window).scrollTop() > 60 ){
  $('.my-navbar').addClass('navbar-scroll');
  }
  else{
  $('.my-navbar').removeClass('navbar-scroll');
  }
  });
  });
  
  </script>

  <script src="https://kit.fontawesome.com/3f5bf5ad7b.js" crossorigin="anonymous"></script>

  </body>
</html>