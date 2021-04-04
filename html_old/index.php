<!doctype html>
<!--[if IE 8]> <html class="no-js lt-ie9 ie8" lang="en"> <![endif]-->
<!--[if IE 9]> <html class="ie9" lang="en"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->

<head>
  <meta charset="utf-8">
  <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <meta name="author" content="">
  <meta name="description" content="">
  <title>Linkpasser - Home</title>

  <!-- Owl Stylesheets -->
  <link rel="stylesheet" type="text/css" href="css/slick.css">
  <link rel="stylesheet" type="text/css" href="css/slick-theme.css">
  <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
  <link rel="stylesheet" type="text/css" href="css/owl.theme.default.css">

  <!-- Fonts Fontawesome -->
  <link rel="stylesheet" type="text/css" href="css/fontawesome-all.css">

  <!-- CSS bootstrap Plugin  -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link href="css/bootstrap-switch-button.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" media="all" href="css/stellarnav.css">
  <!-- Animation STYLESHEETS-->

  <!-- Style -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/responsive.css">

  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <script src="js/ie10-viewport-bug-workaround.js"></script>

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

  <!-- HEADER SCRIPTS	-->

</head>

<body>
  <div id="wrapper">

    <!--Start Header-->
    <?php include_once 'header.php' ?>
    <main class="main">
      <article class="container">
        <div class="Trding">
          <ul class="LinkVerb d-flex justify-content-center">
            <li><a href="trending.php">Trading</a></li>
            <li><a href="latest.php">Latest</a></li>
          </ul>
        </div>
        <div class="row d-flex align-items-stretch">
          <aside class="col-lg-6">
            <div class="row">
              <aside class="col-lg-10">
                <div class="login-box text-center">
                  <h3>LinkPasser</h3>
                  <form action="user-account.php" method="get">
                    <div class="form-group">
                      <input type="text" class="form-control" id="UserName" placeholder="Username">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control" id="password" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-switch">
                        <input name="LoginUC" id="switch-one" type="checkbox" data-toggle="switchbutton"
                          data-onlabel="Login as a User" data-offlabel="Login as a Creator"
                          class="custom-control-input condition-trigger">
                      </div>
                    </div>
                    <div class="form-group login-btn">
                      <button type="submit" class="btn btn-primary rounded-30 text-uppercase w-100">Login</button>
                    </div>
                    <a href="#">Forgot Password?</a>
                    <h5 class="text-light mt-4">Want an account? <a href="#">Sign Up</a></h5>
                    <div class="or">
                      <p>Or</p>
                    </div>
                    <h5 class="text-light mt-4">Want to sign Up as a Creator? <a href="#">Sign Up</a></h5>
                  </form>
                </div>
              </aside>
            </div>
          </aside>
          <aside class="col-lg-6">
            <div class="bg-login d-flex align-items-center"
              style="background: url(images/bg01.png); background-size: cover; background-repeat: no-repeat;">
              <div>
                <div data-condition="LoginUC" data-condition-value="0">
                  <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                    pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                    anim id est laborum.</p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
                <div data-condition="LoginUC" data-condition-value="1">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat.</p>
                  <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                    pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                    anim id est laborum.</p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat.</p>
                </div>
              </div>
            </div>
          </aside>
        </div>
      </article>
    </main>
    <!--End main Part-->

    <!--Start footer-->
    <?php include_once 'footer.php';?>
    <!--End footer-->

    <a id="backtop"></a>
  </div>
  <div class="loader-wrapper">
    <span class="loader"><img src="images/logo.svg" alt=""></span>
  </div>

  <style>
    .loader-wrapper {
      width: 100%;
      height: 100%;
      position: absolute;
      top: 0;
      left: 0;
      background-color: #EEE;
      display: flex;
      justify-content: center;
      align-items: center;
      background: white;
      opacity: 0.75;
    }

    .loader {
      display: inline-block;
      width: 150px;
      height: 150px;
      position: relative;
      top: 10%;
      animation: loader 2s infinite ease;
    }
  </style>
  <script>
    $(window).on("load", function () {
      $(".loader-wrapper").fadeOut("slow");
    });
  </script>
  <!-- Setup of jquery JS -->
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/moment.min.js"></script>
  <script src="js/popper.min.js"></script>

  <!-- Setup of Bootstrap JS -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script src="js/bootstrap-switch-button.min.js"></script>
  <script src="js/jquery.conditional-fields.js"></script>
  <!-- Setup of Slider JS -->
  <script src="js/slick.min.js" type="text/javascript"></script>
  <script src="js/owl.carousel.js" type="text/javascript"></script>
  <!-- Setup of Menu JS -->
  <script type="text/javascript" src="js/stellarnav.js"></script>

  <!-- Setup of Custom JS -->
  <script type="text/javascript" src="js/custom.js"></script>
  <script>
    var btn = $('#backtop');

    $(window).scroll(function () {
      if ($(window).scrollTop() > 300) {
        btn.addClass('show');
      } else {
        btn.removeClass('show');
      }
    });

    btn.on('click', function (e) {
      e.preventDefault();
      $('html, body').animate({
        scrollTop: 0
      }, '300');
    });
  </script>
  <script>
    var btnn = $('.footer-bottom');

    $(window).scroll(function () {
      if ($(window).scrollTop() >= $(document).height() - $(window).height() - 0) {
        btnn.addClass('show');
      } else {
        btnn.removeClass('show');
      }
    });
  </script>
</body>

</html>