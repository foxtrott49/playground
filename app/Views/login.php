<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Argon Dashboard 2 by Creative Tim
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="<?= base_url('../assets/css/nucleo-icons.css')?>" rel="stylesheet" />
  <link href="<?= base_url('../assets/css/nucleo-svg.css')?>" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="<?= base_url('../assets/css/nucleo-svg.css')?>" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="<?= base_url('../assets/css/argon-dashboard.css?v=2.0.4')?>" rel="stylesheet" />
</head>

<body class="">
  <!-- MAIN SCREEN -->
  <main class="main-content  mt-0">
    <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg" style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/signup-cover.jpg'); background-position: top;">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5 text-center mx-auto">
            <h1 class="text-white mb-2 mt-5">Welcome!</h1>
            <p class="text-lead text-white">Sign in to access and interact with the website</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row mt-lg-n10 mt-md-n11 mt-n10 justify-content-center">
        <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
          <div class="card z-index-0">
            <div class="row px-xl-5 px-sm-4 px-3">
              <div class="mt-2 position-relative text-center">
              </div>
            </div>
            <div class="card-body">
              <form role="form">
                <div class="mb-3">
                  <input type="text" class="form-control" placeholder="Username" aria-label="Name">
                </div>
                <div class="mb-3">
                  <input type="password" class="form-control" placeholder="Password" aria-label="Password">
                </div>
                <div class="form-check form-check-info text-start">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                  <label class="form-check-label" for="flexCheckDefault">
                    I agree the <a href="https://youtu.be/dQw4w9WgXcQ?si=uqHflpXOd235_E0N" class="text-dark font-weight-bolder">Terms and Conditions</a>
                  </label>
                </div>
                <div class="text-center">
                  <button type="button" class="btn bg-gradient-dark w-100 my-4 mb-2"><a href="dashboard" style="color: white">Sign in</a></button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
  <footer class="footer py-3">
    <div class="container">
      <div class="row">

        <!-- SOCIAL MEDIA SHIT -->

        <div class="col-lg-8 mx-auto text-center mb-4 mt-2">
          <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
            <span class="text-lg fab fa-github"></span>
          </a>
          <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
            <span class="text-lg fab fa-twitter"></span>
          </a>
          <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
            <span class="text-lg fab fa-youtube"></span>
          </a>
          <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
            <span class="text-lg fab fa-discord"></span>
          </a>
          <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
            <span class="text-lg fab fa-steam"></span>
          </a>
        </div>

        <!-- SOCIAL MEDIA SHIT END -->

      </div>
    </div>
  </footer>
  <!-- -------- END FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
  <!--   Core JS Files   -->
  <script src="<?= base_url('../assets/js/core/popper.min.js')?>"></script>
  <script src="<?= base_url('../assets/js/core/bootstrap.min.js')?>"></script>
  <script src="<?= base_url('../assets/js/plugins/perfect-scrollbar.min.js')?>"></script>
  <script src="<?= base_url('../assets/js/plugins/smooth-scrollbar.min.js')?>"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?= base_url('../assets/js/argon-dashboard.min.js?v=2.0.4')?>"></script>
</body>

</html>