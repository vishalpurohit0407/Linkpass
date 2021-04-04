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
  <title>Linkpasser - Latest</title>

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
    <?php include_once 'header.php';?>

    <div style="position: relative">
      <div class="container">
        <!-- <div class="header-sec-link btn-receita" id="btn-receitamob" data-clicked-times="0">
          <span class="custom-scroll-link"><i class="fal fa-chevron-double-down" id="seta"></i></span>
        </div> -->
        <div id="receita-div" style="display: none; height: 250px; border: 1px solid #ccc; border-top: 0;"
          class="receita-hidden">
          <form>
            <textarea class="form-control" id=""></textarea>
          </form>
        </div>
      </div>
    </div>
    <main class="main">
      <article class="container">

        <h4>Trending</h4>

        <div class="CompanyList">
          <div class="row">
            <aside class="col-lg-3 col-md-6 col-sm-6">
              <div class="AddVideo">
                <div class="YoutubeLable"><span>YouTube</span></div>
                <h4>Video Title</h4>
                <div class="VideoUser"><img src="images/unnamed.jpg" alt=""></div>
                <div class="imgvid">
                  <iframe src="https://www.youtube.com/embed/9xwazD5SyVg" frameborder="0"></iframe>
                </div>
                <ul class="d-flex justify-content-between">
                  <li><a href="#"><i class="fal fa-check"></i> <span>647</span></a></li>
                  <li><a href="#"><i class="fal fa-times"></i> <span>99</span></a></li>
                  <li><a href="#"><i class="far fa-dot-circle"></i> <span>1.5k</span></a></li>
                  <li><a href="#"><i class="fas fa-exclamation-triangle"></i></a></li>
                </ul>
                <p class="date"><span>1,280,707 views</span> <span>16 Jan 2021</span></p>
                <p class=""><a href="other-user-account.php">John Marteen</a></p>
                <p>Lorem ipsum dolor sit amet righteous, consectetur adipiscing elit, sed is a do eiusmod is tempor
                  incididunt ut labore et dolore magna dolor aliqua ullamco tempor laboris.</p>
                <!-- Button trigger modal -->
                <div class="VideoPopup">
                  <button type="button" class="btn btn-primary" data-toggle="modal"
                    data-target=".bd-example-modal-lg"><i class="fas fa-plus-circle"></i></button>
                </div>

                <!-- Modal -->
                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
                  aria-labelledby="myLargeModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span
                            aria-hidden="true">&times;</span> </button>
                      </div>
                      <div class="modal-body">
                        <div class="row d-flex align-items-stretch">
                          <aside class="col-md-4">
                            <div class="card bg-light h-100 PopupCard">
                              <div class="card-body">
                                <ul class="RatingList d-flex justify-content-between">
                                  <li>3426 Total Ratings</li>
                                  <li class="sepreter">|</li>
                                  <li>1438 Linked Account Ratings </li>
                                </ul>
                                <form>
                                  <div class="row">
                                    <aside class="col-8">
                                      <input type="email" class="form-control" id="RatingsWords"
                                        placeholder="Enter Rating Word(s) here">
                                    </aside>
                                    <aside class="col-4">
                                      <select class="form-control" id="Score">
                                        <option>Score</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                      </select>
                                    </aside>
                                  </div>
                                </form>
                                <div class="scrollbar" id="style-1">
                                  <div class="force-overflow">
                                    <article class="PopupCardBox">
                                      <h5><a href="#">User Account</a></h5>
                                      <div class="d-flex justify-content-between">
                                        <div class="badge badge-secondary">10</div>
                                        <div class="badge badge-secondary d-flex flex-column">
                                          <p>The account owner's rating words, ratio number find emojis will appear
                                            here. <i class="fal fa-heart"></i> <i class="fal fa-smile"></i></p>
                                          <div class="d-flex justify-content-between PopupCardDC">
                                            <aside><a href="#"><span class="text-success"><i
                                                    class="far fa-arrow-up"></i></span> <span
                                                  class="PopupCardCount">1322</span></a> <a href="#"><span
                                                  class="text-danger"><i class="far fa-arrow-down"></i></span> <span
                                                  class="PopupCardCount">1322</span></a></aside>
                                            <aside><span class="PopupCardDate">jan 12 21</span><span
                                                class="PopupCardDate">10:00 PM</span></aside>
                                          </div>
                                        </div>
                                        <div> <a href="#" class="arrowud text-success"> <i class="far fa-arrow-up"></i>
                                          </a> <a href="#" class="arrowud text-danger"> <i
                                              class="far fa-arrow-down"></i> </a>
                                        </div>
                                      </div>
                                    </article>
                                    <article class="PopupCardBox">
                                      <h5><a href="#">User Account</a></h5>
                                      <div class="d-flex justify-content-between">
                                        <div class="badge badge-secondary">10</div>
                                        <div class="badge badge-secondary d-flex flex-column">
                                          <p>The account owner's rating words, ratio number find emojis will appear
                                            here. <i class="fal fa-heart"></i> <i class="fal fa-smile"></i></p>
                                          <div class="d-flex justify-content-between PopupCardDC">
                                            <aside><a href="#"><span class="text-success"><i
                                                    class="far fa-arrow-up"></i></span> <span
                                                  class="PopupCardCount">1322</span></a> <a href="#"><span
                                                  class="text-danger"><i class="far fa-arrow-down"></i></span> <span
                                                  class="PopupCardCount">1322</span></a></aside>
                                            <aside><span class="PopupCardDate">jan 12 21</span><span
                                                class="PopupCardDate">10:00 PM</span></aside>
                                          </div>
                                        </div>
                                        <div> <a href="#" class="arrowud text-success"> <i class="far fa-arrow-up"></i>
                                          </a> <a href="#" class="arrowud text-danger"> <i
                                              class="far fa-arrow-down"></i> </a>
                                        </div>
                                      </div>
                                    </article>
                                    <article class="PopupCardBox">
                                      <h5><a href="#">User Account</a></h5>
                                      <div class="d-flex justify-content-between">
                                        <div class="badge badge-secondary">10</div>
                                        <div class="badge badge-secondary d-flex flex-column">
                                          <p>The account owner's rating words, ratio number find emojis will appear
                                            here. <i class="fal fa-heart"></i> <i class="fal fa-smile"></i></p>
                                          <div class="d-flex justify-content-between PopupCardDC">
                                            <aside><a href="#"><span class="text-success"><i
                                                    class="far fa-arrow-up"></i></span> <span
                                                  class="PopupCardCount">1322</span></a> <a href="#"><span
                                                  class="text-danger"><i class="far fa-arrow-down"></i></span> <span
                                                  class="PopupCardCount">1322</span></a></aside>
                                            <aside><span class="PopupCardDate">jan 12 21</span><span
                                                class="PopupCardDate">10:00 PM</span></aside>
                                          </div>
                                        </div>
                                        <div> <a href="#" class="arrowud text-success"> <i class="far fa-arrow-up"></i>
                                          </a> <a href="#" class="arrowud text-danger"> <i
                                              class="far fa-arrow-down"></i> </a>
                                        </div>
                                      </div>
                                    </article>
                                    <article class="PopupCardBox">
                                      <h5><a href="#">User Account</a></h5>
                                      <div class="d-flex justify-content-between">
                                        <div class="badge badge-secondary">10</div>
                                        <div class="badge badge-secondary d-flex flex-column">
                                          <p>The account owner's rating words, ratio number find emojis will appear
                                            here. <i class="fal fa-heart"></i> <i class="fal fa-smile"></i></p>
                                          <div class="d-flex justify-content-between PopupCardDC">
                                            <aside><a href="#"><span class="text-success"><i
                                                    class="far fa-arrow-up"></i></span> <span
                                                  class="PopupCardCount">1322</span></a> <a href="#"><span
                                                  class="text-danger"><i class="far fa-arrow-down"></i></span> <span
                                                  class="PopupCardCount">1322</span></a></aside>
                                            <aside><span class="PopupCardDate">jan 12 21</span><span
                                                class="PopupCardDate">10:00 PM</span></aside>
                                          </div>
                                        </div>
                                        <div> <a href="#" class="arrowud text-success"> <i class="far fa-arrow-up"></i>
                                          </a> <a href="#" class="arrowud text-danger"> <i
                                              class="far fa-arrow-down"></i> </a>
                                        </div>
                                      </div>
                                    </article>
                                    <article class="PopupCardBox">
                                      <h5><a href="#">User Account</a></h5>
                                      <div class="d-flex justify-content-between">
                                        <div class="badge badge-secondary">10</div>
                                        <div class="badge badge-secondary d-flex flex-column">
                                          <p>The account owner's rating words, ratio number find emojis will appear
                                            here. <i class="fal fa-heart"></i> <i class="fal fa-smile"></i></p>
                                          <div class="d-flex justify-content-between PopupCardDC">
                                            <aside><a href="#"><span class="text-success"><i
                                                    class="far fa-arrow-up"></i></span> <span
                                                  class="PopupCardCount">1322</span></a> <a href="#"><span
                                                  class="text-danger"><i class="far fa-arrow-down"></i></span> <span
                                                  class="PopupCardCount">1322</span></a></aside>
                                            <aside><span class="PopupCardDate">jan 12 21</span><span
                                                class="PopupCardDate">10:00 PM</span></aside>
                                          </div>
                                        </div>
                                        <div> <a href="#" class="arrowud text-success"> <i class="far fa-arrow-up"></i>
                                          </a> <a href="#" class="arrowud text-danger"> <i
                                              class="far fa-arrow-down"></i> </a>
                                        </div>
                                      </div>
                                    </article>
                                    <article class="PopupCardBox">
                                      <h5><a href="#">User Account</a></h5>
                                      <div class="d-flex justify-content-between">
                                        <div class="badge badge-secondary">10</div>
                                        <div class="badge badge-secondary d-flex flex-column">
                                          <p>The account owner's rating words, ratio number find emojis will appear
                                            here. <i class="fal fa-heart"></i> <i class="fal fa-smile"></i></p>
                                          <div class="d-flex justify-content-between PopupCardDC">
                                            <aside><a href="#"><span class="text-success"><i
                                                    class="far fa-arrow-up"></i></span> <span
                                                  class="PopupCardCount">1322</span></a> <a href="#"><span
                                                  class="text-danger"><i class="far fa-arrow-down"></i></span> <span
                                                  class="PopupCardCount">1322</span></a></aside>
                                            <aside><span class="PopupCardDate">jan 12 21</span><span
                                                class="PopupCardDate">10:00 PM</span></aside>
                                          </div>
                                        </div>
                                        <div> <a href="#" class="arrowud text-success"> <i class="far fa-arrow-up"></i>
                                          </a> <a href="#" class="arrowud text-danger"> <i
                                              class="far fa-arrow-down"></i> </a>
                                        </div>
                                      </div>
                                    </article>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </aside>
                          <aside class="col-md-4">
                            <div class="AddVideo mt-0">
                              <div class="YoutubeLable"><span>YouTube</span></div>
                              <div class="CategoryName"><a href="#">Category Name</a></div>
                              <h4>Video Title</h4>
                              <div class="VideoUser"><img src="images/unnamed.jpg" alt=""></div>
                              <div class="imgvid">
                                <iframe src="https://www.youtube.com/embed/9xwazD5SyVg" frameborder="0"></iframe>
                              </div>
                              <ul class="d-flex justify-content-between">
                                <li><a href="#"><i class="fal fa-check"></i> <span>647</span></a></li>
                                <li><a href="#"><i class="fal fa-times"></i> <span>99</span></a></li>
                                <li><a href="#"><i class="far fa-dot-circle"></i> <span>1.5k</span></a></li>
                                <li><a href="#"><i class="fas fa-exclamation-triangle"></i></a></li>
                              </ul>
                              <article class="PopupCardBox">
                                <h5><a href="#">User Account</a></h5>
                                <div class="d-flex justify-content-between">
                                  <div class="badge badge-secondary">10</div>
                                  <div class="badge badge-secondary d-flex flex-column">
                                    <p>The account owner's rating words, ratio number find emojis will appear here.
                                      <i class="fal fa-heart"></i> <i class="fal fa-smile"></i></p>
                                    <div class="d-flex justify-content-between PopupCardDC">
                                      <aside><a href="#"><span class="text-success"><i
                                              class="far fa-arrow-up"></i></span> <span
                                            class="PopupCardCount">1322</span></a> <a href="#"><span
                                            class="text-danger"><i class="far fa-arrow-down"></i></span> <span
                                            class="PopupCardCount">1322</span></a></aside>
                                      <aside><span class="PopupCardDate">jan 12 21</span><span
                                          class="PopupCardDate">10:00 PM</span></aside>
                                    </div>
                                  </div>
                                  <div> <a href="#" class="arrowud text-success"> <i class="far fa-arrow-up"></i>
                                    </a> <a href="#" class="arrowud text-danger"> <i class="far fa-arrow-down"></i>
                                    </a> </div>
                                </div>
                              </article>
                              <p class="date"><span>1,280,707 views</span> <span>16 Jan 2021</span></p>
                              <p>On the other hand, we denounce with righteous from indignation and dislike men who
                                are so beguiled and demoralized by the charms of pleasure of the moment, blinded by
                                desire, that they cannot foresee the pain and trouble that are bound to ensue.
                                Dolore magna dolor aliqua ullamco laboris righteous from indignation and dislike men
                                who are so beguiled and demoralized.</p>
                            </div>
                          </aside>
                          <aside class="col-md-4">
                            <div class="card bg-light h-100 PopupCard">
                              <div class="card-body">
                                <ul class="RatingList d-flex justify-content-between">
                                  <li>3426 Total Ratings</li>
                                  <li class="sepreter">|</li>
                                  <li>1438 Linked Account Ratings </li>
                                </ul>
                                <form>
                                  <div class="row">
                                    <aside class="col-8">
                                      <input type="email" class="form-control" id="RatingsWords"
                                        placeholder="Enter Rating Word(s) here">
                                    </aside>
                                    <aside class="col-4">
                                      <select class="form-control" id="Score">
                                        <option>Score</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                      </select>
                                    </aside>
                                  </div>
                                </form>
                                <div class="scrollbar" id="style-1">
                                  <div class="force-overflow">
                                    <article class="PopupCardBox">
                                      <h5><a href="#">User Account</a></h5>
                                      <div class="d-flex justify-content-between">
                                        <div class="badge badge-secondary">10</div>
                                        <div class="badge badge-secondary d-flex flex-column">
                                          <p>The account owner's rating words, ratio number find emojis will appear
                                            here. <i class="fal fa-heart"></i> <i class="fal fa-smile"></i></p>
                                          <div class="d-flex justify-content-between PopupCardDC">
                                            <aside><a href="#"><span class="text-success"><i
                                                    class="far fa-arrow-up"></i></span> <span
                                                  class="PopupCardCount">1322</span></a> <a href="#"><span
                                                  class="text-danger"><i class="far fa-arrow-down"></i></span> <span
                                                  class="PopupCardCount">1322</span></a></aside>
                                            <aside><span class="PopupCardDate">jan 12 21</span><span
                                                class="PopupCardDate">10:00 PM</span></aside>
                                          </div>
                                        </div>
                                        <div> <a href="#" class="arrowud text-success"> <i class="far fa-arrow-up"></i>
                                          </a> <a href="#" class="arrowud text-danger"> <i
                                              class="far fa-arrow-down"></i> </a>
                                        </div>
                                      </div>
                                    </article>
                                    <article class="PopupCardBox">
                                      <h5><a href="#">User Account</a></h5>
                                      <div class="d-flex justify-content-between">
                                        <div class="badge badge-secondary">10</div>
                                        <div class="badge badge-secondary d-flex flex-column">
                                          <p>The account owner's rating words, ratio number find emojis will appear
                                            here. <i class="fal fa-heart"></i> <i class="fal fa-smile"></i></p>
                                          <div class="d-flex justify-content-between PopupCardDC">
                                            <aside><a href="#"><span class="text-success"><i
                                                    class="far fa-arrow-up"></i></span> <span
                                                  class="PopupCardCount">1322</span></a> <a href="#"><span
                                                  class="text-danger"><i class="far fa-arrow-down"></i></span> <span
                                                  class="PopupCardCount">1322</span></a></aside>
                                            <aside><span class="PopupCardDate">jan 12 21</span><span
                                                class="PopupCardDate">10:00 PM</span></aside>
                                          </div>
                                        </div>
                                        <div> <a href="#" class="arrowud text-success"> <i class="far fa-arrow-up"></i>
                                          </a> <a href="#" class="arrowud text-danger"> <i
                                              class="far fa-arrow-down"></i> </a>
                                        </div>
                                      </div>
                                    </article>
                                    <article class="PopupCardBox">
                                      <h5><a href="#">User Account</a></h5>
                                      <div class="d-flex justify-content-between">
                                        <div class="badge badge-secondary">10</div>
                                        <div class="badge badge-secondary d-flex flex-column">
                                          <p>The account owner's rating words, ratio number find emojis will appear
                                            here. <i class="fal fa-heart"></i> <i class="fal fa-smile"></i></p>
                                          <div class="d-flex justify-content-between PopupCardDC">
                                            <aside><a href="#"><span class="text-success"><i
                                                    class="far fa-arrow-up"></i></span> <span
                                                  class="PopupCardCount">1322</span></a> <a href="#"><span
                                                  class="text-danger"><i class="far fa-arrow-down"></i></span> <span
                                                  class="PopupCardCount">1322</span></a></aside>
                                            <aside><span class="PopupCardDate">jan 12 21</span><span
                                                class="PopupCardDate">10:00 PM</span></aside>
                                          </div>
                                        </div>
                                        <div> <a href="#" class="arrowud text-success"> <i class="far fa-arrow-up"></i>
                                          </a> <a href="#" class="arrowud text-danger"> <i
                                              class="far fa-arrow-down"></i> </a>
                                        </div>
                                      </div>
                                    </article>
                                    <article class="PopupCardBox">
                                      <h5><a href="#">User Account</a></h5>
                                      <div class="d-flex justify-content-between">
                                        <div class="badge badge-secondary">10</div>
                                        <div class="badge badge-secondary d-flex flex-column">
                                          <p>The account owner's rating words, ratio number find emojis will appear
                                            here. <i class="fal fa-heart"></i> <i class="fal fa-smile"></i></p>
                                          <div class="d-flex justify-content-between PopupCardDC">
                                            <aside><a href="#"><span class="text-success"><i
                                                    class="far fa-arrow-up"></i></span> <span
                                                  class="PopupCardCount">1322</span></a> <a href="#"><span
                                                  class="text-danger"><i class="far fa-arrow-down"></i></span> <span
                                                  class="PopupCardCount">1322</span></a></aside>
                                            <aside><span class="PopupCardDate">jan 12 21</span><span
                                                class="PopupCardDate">10:00 PM</span></aside>
                                          </div>
                                        </div>
                                        <div> <a href="#" class="arrowud text-success"> <i class="far fa-arrow-up"></i>
                                          </a> <a href="#" class="arrowud text-danger"> <i
                                              class="far fa-arrow-down"></i> </a>
                                        </div>
                                      </div>
                                    </article>
                                    <article class="PopupCardBox">
                                      <h5><a href="#">User Account</a></h5>
                                      <div class="d-flex justify-content-between">
                                        <div class="badge badge-secondary">10</div>
                                        <div class="badge badge-secondary d-flex flex-column">
                                          <p>The account owner's rating words, ratio number find emojis will appear
                                            here. <i class="fal fa-heart"></i> <i class="fal fa-smile"></i></p>
                                          <div class="d-flex justify-content-between PopupCardDC">
                                            <aside><a href="#"><span class="text-success"><i
                                                    class="far fa-arrow-up"></i></span> <span
                                                  class="PopupCardCount">1322</span></a> <a href="#"><span
                                                  class="text-danger"><i class="far fa-arrow-down"></i></span> <span
                                                  class="PopupCardCount">1322</span></a></aside>
                                            <aside><span class="PopupCardDate">jan 12 21</span><span
                                                class="PopupCardDate">10:00 PM</span></aside>
                                          </div>
                                        </div>
                                        <div> <a href="#" class="arrowud text-success"> <i class="far fa-arrow-up"></i>
                                          </a> <a href="#" class="arrowud text-danger"> <i
                                              class="far fa-arrow-down"></i> </a>
                                        </div>
                                      </div>
                                    </article>
                                    <article class="PopupCardBox">
                                      <h5><a href="#">User Account</a></h5>
                                      <div class="d-flex justify-content-between">
                                        <div class="badge badge-secondary">10</div>
                                        <div class="badge badge-secondary d-flex flex-column">
                                          <p>The account owner's rating words, ratio number find emojis will appear
                                            here. <i class="fal fa-heart"></i> <i class="fal fa-smile"></i></p>
                                          <div class="d-flex justify-content-between PopupCardDC">
                                            <aside><a href="#"><span class="text-success"><i
                                                    class="far fa-arrow-up"></i></span> <span
                                                  class="PopupCardCount">1322</span></a> <a href="#"><span
                                                  class="text-danger"><i class="far fa-arrow-down"></i></span> <span
                                                  class="PopupCardCount">1322</span></a></aside>
                                            <aside><span class="PopupCardDate">jan 12 21</span><span
                                                class="PopupCardDate">10:00 PM</span></aside>
                                          </div>
                                        </div>
                                        <div> <a href="#" class="arrowud text-success"> <i class="far fa-arrow-up"></i>
                                          </a> <a href="#" class="arrowud text-danger"> <i
                                              class="far fa-arrow-down"></i> </a>
                                        </div>
                                      </div>
                                    </article>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </aside>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </aside>
            <aside class="col-lg-3 col-md-6 col-sm-6">
              <div class="AddVideo">
                <div class="YoutubeLable"><span>Image</span></div>
                <h4>Image Title</h4>
                <div class="VideoUser"><img src="images/unnamed.jpg" alt=""></div>
                <div class="imgvid"> <img src="images/img011.jpg" alt=""> </div>
                <ul class="d-flex justify-content-between">
                  <li><a href="#"><i class="fal fa-check"></i> <span>647</span></a></li>
                  <li><a href="#"><i class="fal fa-times"></i> <span>99</span></a></li>
                  <li><a href="#"><i class="far fa-dot-circle"></i> <span>1.5k</span></a></li>
                  <li><a href="#"><i class="fas fa-exclamation-triangle"></i></a></li>
                </ul>
                <p class="date"><span>1,280,707 views</span> <span>16 Jan 2021</span></p>
                <p class=""><a href="other-user-account.php">John Marteen</a></p>
                <p>Lorem ipsum dolor sit amet righteous, consectetur adipiscing elit, sed is a do eiusmod is tempor
                  incididunt ut labore et dolore magna dolor aliqua ullamco tempor laboris.</p>
                <!-- Button trigger modal -->
                <div class="VideoPopup">
                  <button type="button" class="btn btn-primary" data-toggle="modal"
                    data-target=".bd-example-modal-lg2"><i class="fas fa-plus-circle"></i></button>
                </div>

                <!-- Modal -->
                <div class="modal fade bd-example-modal-lg2" tabindex="-1" role="dialog"
                  aria-labelledby="myLargeModalLabel2" aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span
                            aria-hidden="true">&times;</span> </button>
                      </div>
                      <div class="modal-body">
                        <div class="row d-flex align-items-stretch">
                          <aside class="col-md-4">
                            <div class="card bg-light h-100 PopupCard">
                              <div class="card-body">
                                <ul class="RatingList d-flex justify-content-between">
                                  <li>3426 Total Ratings</li>
                                  <li class="sepreter">|</li>
                                  <li>1438 Linked Account Ratings </li>
                                </ul>
                                <form>
                                  <div class="row">
                                    <aside class="col-8">
                                      <input type="email" class="form-control" id="RatingsWords"
                                        placeholder="Enter Rating Word(s) here">
                                    </aside>
                                    <aside class="col-4">
                                      <select class="form-control" id="Score">
                                        <option>Score</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                      </select>
                                    </aside>
                                  </div>
                                </form>
                                <div class="scrollbar" id="style-1">
                                  <div class="force-overflow">
                                    <article class="PopupCardBox">
                                      <h5><a href="#">User Account</a></h5>
                                      <div class="d-flex justify-content-between">
                                        <div class="badge badge-secondary">10</div>
                                        <div class="badge badge-secondary d-flex flex-column">
                                          <p>The account owner's rating words, ratio number find emojis will appear
                                            here. <i class="fal fa-heart"></i> <i class="fal fa-smile"></i></p>
                                          <div class="d-flex justify-content-between PopupCardDC">
                                            <aside><a href="#"><span class="text-success"><i
                                                    class="far fa-arrow-up"></i></span> <span
                                                  class="PopupCardCount">1322</span></a> <a href="#"><span
                                                  class="text-danger"><i class="far fa-arrow-down"></i></span> <span
                                                  class="PopupCardCount">1322</span></a></aside>
                                            <aside><span class="PopupCardDate">jan 12 21</span><span
                                                class="PopupCardDate">10:00 PM</span></aside>
                                          </div>
                                        </div>
                                        <div> <a href="#" class="arrowud text-success"> <i class="far fa-arrow-up"></i>
                                          </a> <a href="#" class="arrowud text-danger"> <i
                                              class="far fa-arrow-down"></i> </a>
                                        </div>
                                      </div>
                                    </article>
                                    <article class="PopupCardBox">
                                      <h5><a href="#">User Account</a></h5>
                                      <div class="d-flex justify-content-between">
                                        <div class="badge badge-secondary">10</div>
                                        <div class="badge badge-secondary d-flex flex-column">
                                          <p>The account owner's rating words, ratio number find emojis will appear
                                            here. <i class="fal fa-heart"></i> <i class="fal fa-smile"></i></p>
                                          <div class="d-flex justify-content-between PopupCardDC">
                                            <aside><a href="#"><span class="text-success"><i
                                                    class="far fa-arrow-up"></i></span> <span
                                                  class="PopupCardCount">1322</span></a> <a href="#"><span
                                                  class="text-danger"><i class="far fa-arrow-down"></i></span> <span
                                                  class="PopupCardCount">1322</span></a></aside>
                                            <aside><span class="PopupCardDate">jan 12 21</span><span
                                                class="PopupCardDate">10:00 PM</span></aside>
                                          </div>
                                        </div>
                                        <div> <a href="#" class="arrowud text-success"> <i class="far fa-arrow-up"></i>
                                          </a> <a href="#" class="arrowud text-danger"> <i
                                              class="far fa-arrow-down"></i> </a>
                                        </div>
                                      </div>
                                    </article>
                                    <article class="PopupCardBox">
                                      <h5><a href="#">User Account</a></h5>
                                      <div class="d-flex justify-content-between">
                                        <div class="badge badge-secondary">10</div>
                                        <div class="badge badge-secondary d-flex flex-column">
                                          <p>The account owner's rating words, ratio number find emojis will appear
                                            here. <i class="fal fa-heart"></i> <i class="fal fa-smile"></i></p>
                                          <div class="d-flex justify-content-between PopupCardDC">
                                            <aside><a href="#"><span class="text-success"><i
                                                    class="far fa-arrow-up"></i></span> <span
                                                  class="PopupCardCount">1322</span></a> <a href="#"><span
                                                  class="text-danger"><i class="far fa-arrow-down"></i></span> <span
                                                  class="PopupCardCount">1322</span></a></aside>
                                            <aside><span class="PopupCardDate">jan 12 21</span><span
                                                class="PopupCardDate">10:00 PM</span></aside>
                                          </div>
                                        </div>
                                        <div> <a href="#" class="arrowud text-success"> <i class="far fa-arrow-up"></i>
                                          </a> <a href="#" class="arrowud text-danger"> <i
                                              class="far fa-arrow-down"></i> </a>
                                        </div>
                                      </div>
                                    </article>
                                    <article class="PopupCardBox">
                                      <h5><a href="#">User Account</a></h5>
                                      <div class="d-flex justify-content-between">
                                        <div class="badge badge-secondary">10</div>
                                        <div class="badge badge-secondary d-flex flex-column">
                                          <p>The account owner's rating words, ratio number find emojis will appear
                                            here. <i class="fal fa-heart"></i> <i class="fal fa-smile"></i></p>
                                          <div class="d-flex justify-content-between PopupCardDC">
                                            <aside><a href="#"><span class="text-success"><i
                                                    class="far fa-arrow-up"></i></span> <span
                                                  class="PopupCardCount">1322</span></a> <a href="#"><span
                                                  class="text-danger"><i class="far fa-arrow-down"></i></span> <span
                                                  class="PopupCardCount">1322</span></a></aside>
                                            <aside><span class="PopupCardDate">jan 12 21</span><span
                                                class="PopupCardDate">10:00 PM</span></aside>
                                          </div>
                                        </div>
                                        <div> <a href="#" class="arrowud text-success"> <i class="far fa-arrow-up"></i>
                                          </a> <a href="#" class="arrowud text-danger"> <i
                                              class="far fa-arrow-down"></i> </a>
                                        </div>
                                      </div>
                                    </article>
                                    <article class="PopupCardBox">
                                      <h5><a href="#">User Account</a></h5>
                                      <div class="d-flex justify-content-between">
                                        <div class="badge badge-secondary">10</div>
                                        <div class="badge badge-secondary d-flex flex-column">
                                          <p>The account owner's rating words, ratio number find emojis will appear
                                            here. <i class="fal fa-heart"></i> <i class="fal fa-smile"></i></p>
                                          <div class="d-flex justify-content-between PopupCardDC">
                                            <aside><a href="#"><span class="text-success"><i
                                                    class="far fa-arrow-up"></i></span> <span
                                                  class="PopupCardCount">1322</span></a> <a href="#"><span
                                                  class="text-danger"><i class="far fa-arrow-down"></i></span> <span
                                                  class="PopupCardCount">1322</span></a></aside>
                                            <aside><span class="PopupCardDate">jan 12 21</span><span
                                                class="PopupCardDate">10:00 PM</span></aside>
                                          </div>
                                        </div>
                                        <div> <a href="#" class="arrowud text-success"> <i class="far fa-arrow-up"></i>
                                          </a> <a href="#" class="arrowud text-danger"> <i
                                              class="far fa-arrow-down"></i> </a>
                                        </div>
                                      </div>
                                    </article>
                                    <article class="PopupCardBox">
                                      <h5><a href="#">User Account</a></h5>
                                      <div class="d-flex justify-content-between">
                                        <div class="badge badge-secondary">10</div>
                                        <div class="badge badge-secondary d-flex flex-column">
                                          <p>The account owner's rating words, ratio number find emojis will appear
                                            here. <i class="fal fa-heart"></i> <i class="fal fa-smile"></i></p>
                                          <div class="d-flex justify-content-between PopupCardDC">
                                            <aside><a href="#"><span class="text-success"><i
                                                    class="far fa-arrow-up"></i></span> <span
                                                  class="PopupCardCount">1322</span></a> <a href="#"><span
                                                  class="text-danger"><i class="far fa-arrow-down"></i></span> <span
                                                  class="PopupCardCount">1322</span></a></aside>
                                            <aside><span class="PopupCardDate">jan 12 21</span><span
                                                class="PopupCardDate">10:00 PM</span></aside>
                                          </div>
                                        </div>
                                        <div> <a href="#" class="arrowud text-success"> <i class="far fa-arrow-up"></i>
                                          </a> <a href="#" class="arrowud text-danger"> <i
                                              class="far fa-arrow-down"></i> </a>
                                        </div>
                                      </div>
                                    </article>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </aside>
                          <aside class="col-md-4">
                            <div class="AddVideo mt-0">
                              <div class="YoutubeLable"><span>Image</span></div>
                              <h4>Image Title</h4>
                              <div class="VideoUser"><img src="images/unnamed.jpg" alt=""></div>
                              <div class="imgvid"> <img src="images/img011.jpg" alt=""> </div>
                              <ul class="d-flex justify-content-between">
                                <li><a href="#"><i class="fal fa-check"></i> <span>647</span></a></li>
                                <li><a href="#"><i class="fal fa-times"></i> <span>99</span></a></li>
                                <li><a href="#"><i class="far fa-dot-circle"></i> <span>1.5k</span></a></li>
                                <li><a href="#"><i class="fas fa-exclamation-triangle"></i></a></li>
                              </ul>
                              <article class="PopupCardBox">
                                <h5><a href="#">User Account</a></h5>
                                <div class="d-flex justify-content-between">
                                  <div class="badge badge-secondary">10</div>
                                  <div class="badge badge-secondary d-flex flex-column">
                                    <p>The account owner's rating words, ratio number find emojis will appear here.
                                      <i class="fal fa-heart"></i> <i class="fal fa-smile"></i></p>
                                    <div class="d-flex justify-content-between PopupCardDC">
                                      <aside><a href="#"><span class="text-success"><i
                                              class="far fa-arrow-up"></i></span> <span
                                            class="PopupCardCount">1322</span></a> <a href="#"><span
                                            class="text-danger"><i class="far fa-arrow-down"></i></span> <span
                                            class="PopupCardCount">1322</span></a></aside>
                                      <aside><span class="PopupCardDate">jan 12 21</span><span
                                          class="PopupCardDate">10:00 PM</span></aside>
                                    </div>
                                  </div>
                                  <div> <a href="#" class="arrowud text-success"> <i class="far fa-arrow-up"></i>
                                    </a> <a href="#" class="arrowud text-danger"> <i class="far fa-arrow-down"></i>
                                    </a> </div>
                                </div>
                              </article>
                              <p class="date"><span>1,280,707 views</span> <span>16 Jan 2021</span></p>
                              <p>On the other hand, we denounce with righteous from indignation and dislike men who
                                are so beguiled and demoralized by the charms of pleasure of the moment, blinded by
                                desire, that they cannot foresee the pain and trouble that are bound to ensue.
                                Dolore magna dolor aliqua ullamco laboris righteous from indignation and dislike men
                                who are so beguiled and demoralized.</p>
                            </div>
                          </aside>
                          <aside class="col-md-4">
                            <div class="card bg-light h-100 PopupCard">
                              <div class="card-body">
                                <ul class="RatingList d-flex justify-content-between">
                                  <li>3426 Total Ratings</li>
                                  <li class="sepreter">|</li>
                                  <li>1438 Linked Account Ratings </li>
                                </ul>
                                <form>
                                  <div class="row">
                                    <aside class="col-8">
                                      <input type="email" class="form-control" id="RatingsWords"
                                        placeholder="Enter Rating Word(s) here">
                                    </aside>
                                    <aside class="col-4">
                                      <select class="form-control" id="Score">
                                        <option>Score</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                      </select>
                                    </aside>
                                  </div>
                                </form>
                                <div class="scrollbar" id="style-1">
                                  <div class="force-overflow">
                                    <article class="PopupCardBox">
                                      <h5><a href="#">User Account</a></h5>
                                      <div class="d-flex justify-content-between">
                                        <div class="badge badge-secondary">10</div>
                                        <div class="badge badge-secondary d-flex flex-column">
                                          <p>The account owner's rating words, ratio number find emojis will appear
                                            here. <i class="fal fa-heart"></i> <i class="fal fa-smile"></i></p>
                                          <div class="d-flex justify-content-between PopupCardDC">
                                            <aside><a href="#"><span class="text-success"><i
                                                    class="far fa-arrow-up"></i></span> <span
                                                  class="PopupCardCount">1322</span></a> <a href="#"><span
                                                  class="text-danger"><i class="far fa-arrow-down"></i></span> <span
                                                  class="PopupCardCount">1322</span></a></aside>
                                            <aside><span class="PopupCardDate">jan 12 21</span><span
                                                class="PopupCardDate">10:00 PM</span></aside>
                                          </div>
                                        </div>
                                        <div> <a href="#" class="arrowud text-success"> <i class="far fa-arrow-up"></i>
                                          </a> <a href="#" class="arrowud text-danger"> <i
                                              class="far fa-arrow-down"></i> </a>
                                        </div>
                                      </div>
                                    </article>
                                    <article class="PopupCardBox">
                                      <h5><a href="#">User Account</a></h5>
                                      <div class="d-flex justify-content-between">
                                        <div class="badge badge-secondary">10</div>
                                        <div class="badge badge-secondary d-flex flex-column">
                                          <p>The account owner's rating words, ratio number find emojis will appear
                                            here. <i class="fal fa-heart"></i> <i class="fal fa-smile"></i></p>
                                          <div class="d-flex justify-content-between PopupCardDC">
                                            <aside><a href="#"><span class="text-success"><i
                                                    class="far fa-arrow-up"></i></span> <span
                                                  class="PopupCardCount">1322</span></a> <a href="#"><span
                                                  class="text-danger"><i class="far fa-arrow-down"></i></span> <span
                                                  class="PopupCardCount">1322</span></a></aside>
                                            <aside><span class="PopupCardDate">jan 12 21</span><span
                                                class="PopupCardDate">10:00 PM</span></aside>
                                          </div>
                                        </div>
                                        <div> <a href="#" class="arrowud text-success"> <i class="far fa-arrow-up"></i>
                                          </a> <a href="#" class="arrowud text-danger"> <i
                                              class="far fa-arrow-down"></i> </a>
                                        </div>
                                      </div>
                                    </article>
                                    <article class="PopupCardBox">
                                      <h5><a href="#">User Account</a></h5>
                                      <div class="d-flex justify-content-between">
                                        <div class="badge badge-secondary">10</div>
                                        <div class="badge badge-secondary d-flex flex-column">
                                          <p>The account owner's rating words, ratio number find emojis will appear
                                            here. <i class="fal fa-heart"></i> <i class="fal fa-smile"></i></p>
                                          <div class="d-flex justify-content-between PopupCardDC">
                                            <aside><a href="#"><span class="text-success"><i
                                                    class="far fa-arrow-up"></i></span> <span
                                                  class="PopupCardCount">1322</span></a> <a href="#"><span
                                                  class="text-danger"><i class="far fa-arrow-down"></i></span> <span
                                                  class="PopupCardCount">1322</span></a></aside>
                                            <aside><span class="PopupCardDate">jan 12 21</span><span
                                                class="PopupCardDate">10:00 PM</span></aside>
                                          </div>
                                        </div>
                                        <div> <a href="#" class="arrowud text-success"> <i class="far fa-arrow-up"></i>
                                          </a> <a href="#" class="arrowud text-danger"> <i
                                              class="far fa-arrow-down"></i> </a>
                                        </div>
                                      </div>
                                    </article>
                                    <article class="PopupCardBox">
                                      <h5><a href="#">User Account</a></h5>
                                      <div class="d-flex justify-content-between">
                                        <div class="badge badge-secondary">10</div>
                                        <div class="badge badge-secondary d-flex flex-column">
                                          <p>The account owner's rating words, ratio number find emojis will appear
                                            here. <i class="fal fa-heart"></i> <i class="fal fa-smile"></i></p>
                                          <div class="d-flex justify-content-between PopupCardDC">
                                            <aside><a href="#"><span class="text-success"><i
                                                    class="far fa-arrow-up"></i></span> <span
                                                  class="PopupCardCount">1322</span></a> <a href="#"><span
                                                  class="text-danger"><i class="far fa-arrow-down"></i></span> <span
                                                  class="PopupCardCount">1322</span></a></aside>
                                            <aside><span class="PopupCardDate">jan 12 21</span><span
                                                class="PopupCardDate">10:00 PM</span></aside>
                                          </div>
                                        </div>
                                        <div> <a href="#" class="arrowud text-success"> <i class="far fa-arrow-up"></i>
                                          </a> <a href="#" class="arrowud text-danger"> <i
                                              class="far fa-arrow-down"></i> </a>
                                        </div>
                                      </div>
                                    </article>
                                    <article class="PopupCardBox">
                                      <h5><a href="#">User Account</a></h5>
                                      <div class="d-flex justify-content-between">
                                        <div class="badge badge-secondary">10</div>
                                        <div class="badge badge-secondary d-flex flex-column">
                                          <p>The account owner's rating words, ratio number find emojis will appear
                                            here. <i class="fal fa-heart"></i> <i class="fal fa-smile"></i></p>
                                          <div class="d-flex justify-content-between PopupCardDC">
                                            <aside><a href="#"><span class="text-success"><i
                                                    class="far fa-arrow-up"></i></span> <span
                                                  class="PopupCardCount">1322</span></a> <a href="#"><span
                                                  class="text-danger"><i class="far fa-arrow-down"></i></span> <span
                                                  class="PopupCardCount">1322</span></a></aside>
                                            <aside><span class="PopupCardDate">jan 12 21</span><span
                                                class="PopupCardDate">10:00 PM</span></aside>
                                          </div>
                                        </div>
                                        <div> <a href="#" class="arrowud text-success"> <i class="far fa-arrow-up"></i>
                                          </a> <a href="#" class="arrowud text-danger"> <i
                                              class="far fa-arrow-down"></i> </a>
                                        </div>
                                      </div>
                                    </article>
                                    <article class="PopupCardBox">
                                      <h5><a href="#">User Account</a></h5>
                                      <div class="d-flex justify-content-between">
                                        <div class="badge badge-secondary">10</div>
                                        <div class="badge badge-secondary d-flex flex-column">
                                          <p>The account owner's rating words, ratio number find emojis will appear
                                            here. <i class="fal fa-heart"></i> <i class="fal fa-smile"></i></p>
                                          <div class="d-flex justify-content-between PopupCardDC">
                                            <aside><a href="#"><span class="text-success"><i
                                                    class="far fa-arrow-up"></i></span> <span
                                                  class="PopupCardCount">1322</span></a> <a href="#"><span
                                                  class="text-danger"><i class="far fa-arrow-down"></i></span> <span
                                                  class="PopupCardCount">1322</span></a></aside>
                                            <aside><span class="PopupCardDate">jan 12 21</span><span
                                                class="PopupCardDate">10:00 PM</span></aside>
                                          </div>
                                        </div>
                                        <div> <a href="#" class="arrowud text-success"> <i class="far fa-arrow-up"></i>
                                          </a> <a href="#" class="arrowud text-danger"> <i
                                              class="far fa-arrow-down"></i> </a>
                                        </div>
                                      </div>
                                    </article>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </aside>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </aside>
            <aside class="col-lg-3 col-md-6 col-sm-6">
              <div class="AddVideo">
                <div class="YoutubeLable"><span>YouTube</span></div>
                <h4>Video Title</h4>
                <div class="VideoUser"><img src="images/unnamed.jpg" alt=""></div>
                <div class="imgvid">
                  <iframe src="https://www.youtube.com/embed/9xwazD5SyVg" frameborder="0"></iframe>
                </div>
                <ul class="d-flex justify-content-between">
                  <li><a href="#"><i class="fal fa-check"></i> <span>647</span></a></li>
                  <li><a href="#"><i class="fal fa-times"></i> <span>99</span></a></li>
                  <li><a href="#"><i class="far fa-dot-circle"></i> <span>1.5k</span></a></li>
                  <li><a href="#"><i class="fas fa-exclamation-triangle"></i></a></li>
                </ul>
                <p class="date"><span>1,280,707 views</span> <span>16 Jan 2021</span></p>
                <p class=""><a href="other-user-account.php">John Marteen</a></p>
                <p>Lorem ipsum dolor sit amet righteous, consectetur adipiscing elit, sed is a do eiusmod is tempor
                  incididunt ut labore et dolore magna dolor aliqua ullamco tempor laboris.</p>
                <!-- Button trigger modal -->
                <div class="VideoPopup">
                  <button type="button" class="btn btn-primary" data-toggle="modal"
                    data-target=".bd-example-modal-lg3"><i class="fas fa-plus-circle"></i></button>
                </div>

                <!-- Modal -->
                <div class="modal fade bd-example-modal-lg3" tabindex="-1" role="dialog"
                  aria-labelledby="myLargeModalLabel3" aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span
                            aria-hidden="true">&times;</span> </button>
                      </div>
                      <div class="modal-body">
                        <div class="row d-flex align-items-stretch">
                          <aside class="col-md-4">
                            <div class="card bg-light h-100 PopupCard">
                              <div class="card-body">
                                <ul class="RatingList d-flex justify-content-between">
                                  <li>3426 Total Ratings</li>
                                  <li class="sepreter">|</li>
                                  <li>1438 Linked Account Ratings </li>
                                </ul>
                                <form>
                                  <div class="row">
                                    <aside class="col-8">
                                      <input type="email" class="form-control" id="RatingsWords"
                                        placeholder="Enter Rating Word(s) here">
                                    </aside>
                                    <aside class="col-4">
                                      <select class="form-control" id="Score">
                                        <option>Score</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                      </select>
                                    </aside>
                                  </div>
                                </form>
                                <div class="scrollbar" id="style-1">
                                  <div class="force-overflow">
                                    <article class="PopupCardBox">
                                      <h5><a href="#">User Account</a></h5>
                                      <div class="d-flex justify-content-between">
                                        <div class="badge badge-secondary">10</div>
                                        <div class="badge badge-secondary d-flex flex-column">
                                          <p>The account owner's rating words, ratio number find emojis will appear
                                            here. <i class="fal fa-heart"></i> <i class="fal fa-smile"></i></p>
                                          <div class="d-flex justify-content-between PopupCardDC">
                                            <aside><a href="#"><span class="text-success"><i
                                                    class="far fa-arrow-up"></i></span> <span
                                                  class="PopupCardCount">1322</span></a> <a href="#"><span
                                                  class="text-danger"><i class="far fa-arrow-down"></i></span> <span
                                                  class="PopupCardCount">1322</span></a></aside>
                                            <aside><span class="PopupCardDate">jan 12 21</span><span
                                                class="PopupCardDate">10:00 PM</span></aside>
                                          </div>
                                        </div>
                                        <div> <a href="#" class="arrowud text-success"> <i class="far fa-arrow-up"></i>
                                          </a> <a href="#" class="arrowud text-danger"> <i
                                              class="far fa-arrow-down"></i> </a>
                                        </div>
                                      </div>
                                    </article>
                                    <article class="PopupCardBox">
                                      <h5><a href="#">User Account</a></h5>
                                      <div class="d-flex justify-content-between">
                                        <div class="badge badge-secondary">10</div>
                                        <div class="badge badge-secondary d-flex flex-column">
                                          <p>The account owner's rating words, ratio number find emojis will appear
                                            here. <i class="fal fa-heart"></i> <i class="fal fa-smile"></i></p>
                                          <div class="d-flex justify-content-between PopupCardDC">
                                            <aside><a href="#"><span class="text-success"><i
                                                    class="far fa-arrow-up"></i></span> <span
                                                  class="PopupCardCount">1322</span></a> <a href="#"><span
                                                  class="text-danger"><i class="far fa-arrow-down"></i></span> <span
                                                  class="PopupCardCount">1322</span></a></aside>
                                            <aside><span class="PopupCardDate">jan 12 21</span><span
                                                class="PopupCardDate">10:00 PM</span></aside>
                                          </div>
                                        </div>
                                        <div> <a href="#" class="arrowud text-success"> <i class="far fa-arrow-up"></i>
                                          </a> <a href="#" class="arrowud text-danger"> <i
                                              class="far fa-arrow-down"></i> </a>
                                        </div>
                                      </div>
                                    </article>
                                    <article class="PopupCardBox">
                                      <h5><a href="#">User Account</a></h5>
                                      <div class="d-flex justify-content-between">
                                        <div class="badge badge-secondary">10</div>
                                        <div class="badge badge-secondary d-flex flex-column">
                                          <p>The account owner's rating words, ratio number find emojis will appear
                                            here. <i class="fal fa-heart"></i> <i class="fal fa-smile"></i></p>
                                          <div class="d-flex justify-content-between PopupCardDC">
                                            <aside><a href="#"><span class="text-success"><i
                                                    class="far fa-arrow-up"></i></span> <span
                                                  class="PopupCardCount">1322</span></a> <a href="#"><span
                                                  class="text-danger"><i class="far fa-arrow-down"></i></span> <span
                                                  class="PopupCardCount">1322</span></a></aside>
                                            <aside><span class="PopupCardDate">jan 12 21</span><span
                                                class="PopupCardDate">10:00 PM</span></aside>
                                          </div>
                                        </div>
                                        <div> <a href="#" class="arrowud text-success"> <i class="far fa-arrow-up"></i>
                                          </a> <a href="#" class="arrowud text-danger"> <i
                                              class="far fa-arrow-down"></i> </a>
                                        </div>
                                      </div>
                                    </article>
                                    <article class="PopupCardBox">
                                      <h5><a href="#">User Account</a></h5>
                                      <div class="d-flex justify-content-between">
                                        <div class="badge badge-secondary">10</div>
                                        <div class="badge badge-secondary d-flex flex-column">
                                          <p>The account owner's rating words, ratio number find emojis will appear
                                            here. <i class="fal fa-heart"></i> <i class="fal fa-smile"></i></p>
                                          <div class="d-flex justify-content-between PopupCardDC">
                                            <aside><a href="#"><span class="text-success"><i
                                                    class="far fa-arrow-up"></i></span> <span
                                                  class="PopupCardCount">1322</span></a> <a href="#"><span
                                                  class="text-danger"><i class="far fa-arrow-down"></i></span> <span
                                                  class="PopupCardCount">1322</span></a></aside>
                                            <aside><span class="PopupCardDate">jan 12 21</span><span
                                                class="PopupCardDate">10:00 PM</span></aside>
                                          </div>
                                        </div>
                                        <div> <a href="#" class="arrowud text-success"> <i class="far fa-arrow-up"></i>
                                          </a> <a href="#" class="arrowud text-danger"> <i
                                              class="far fa-arrow-down"></i> </a>
                                        </div>
                                      </div>
                                    </article>
                                    <article class="PopupCardBox">
                                      <h5><a href="#">User Account</a></h5>
                                      <div class="d-flex justify-content-between">
                                        <div class="badge badge-secondary">10</div>
                                        <div class="badge badge-secondary d-flex flex-column">
                                          <p>The account owner's rating words, ratio number find emojis will appear
                                            here. <i class="fal fa-heart"></i> <i class="fal fa-smile"></i></p>
                                          <div class="d-flex justify-content-between PopupCardDC">
                                            <aside><a href="#"><span class="text-success"><i
                                                    class="far fa-arrow-up"></i></span> <span
                                                  class="PopupCardCount">1322</span></a> <a href="#"><span
                                                  class="text-danger"><i class="far fa-arrow-down"></i></span> <span
                                                  class="PopupCardCount">1322</span></a></aside>
                                            <aside><span class="PopupCardDate">jan 12 21</span><span
                                                class="PopupCardDate">10:00 PM</span></aside>
                                          </div>
                                        </div>
                                        <div> <a href="#" class="arrowud text-success"> <i class="far fa-arrow-up"></i>
                                          </a> <a href="#" class="arrowud text-danger"> <i
                                              class="far fa-arrow-down"></i> </a>
                                        </div>
                                      </div>
                                    </article>
                                    <article class="PopupCardBox">
                                      <h5><a href="#">User Account</a></h5>
                                      <div class="d-flex justify-content-between">
                                        <div class="badge badge-secondary">10</div>
                                        <div class="badge badge-secondary d-flex flex-column">
                                          <p>The account owner's rating words, ratio number find emojis will appear
                                            here. <i class="fal fa-heart"></i> <i class="fal fa-smile"></i></p>
                                          <div class="d-flex justify-content-between PopupCardDC">
                                            <aside><a href="#"><span class="text-success"><i
                                                    class="far fa-arrow-up"></i></span> <span
                                                  class="PopupCardCount">1322</span></a> <a href="#"><span
                                                  class="text-danger"><i class="far fa-arrow-down"></i></span> <span
                                                  class="PopupCardCount">1322</span></a></aside>
                                            <aside><span class="PopupCardDate">jan 12 21</span><span
                                                class="PopupCardDate">10:00 PM</span></aside>
                                          </div>
                                        </div>
                                        <div> <a href="#" class="arrowud text-success"> <i class="far fa-arrow-up"></i>
                                          </a> <a href="#" class="arrowud text-danger"> <i
                                              class="far fa-arrow-down"></i> </a>
                                        </div>
                                      </div>
                                    </article>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </aside>
                          <aside class="col-md-4">
                            <div class="AddVideo mt-0">
                              <div class="YoutubeLable"><span>YouTube</span></div>
                              <div class="CategoryName"><a href="#">Category Name</a></div>
                              <h4>Video Title</h4>
                              <div class="VideoUser"><img src="images/unnamed.jpg" alt=""></div>
                              <div class="imgvid">
                                <iframe src="https://www.youtube.com/embed/9xwazD5SyVg" frameborder="0"></iframe>
                              </div>
                              <ul class="d-flex justify-content-between">
                                <li><a href="#"><i class="fal fa-check"></i> <span>647</span></a></li>
                                <li><a href="#"><i class="fal fa-times"></i> <span>99</span></a></li>
                                <li><a href="#"><i class="far fa-dot-circle"></i> <span>1.5k</span></a></li>
                                <li><a href="#"><i class="fas fa-exclamation-triangle"></i></a></li>
                              </ul>
                              <article class="PopupCardBox">
                                <h5><a href="#">User Account</a></h5>
                                <div class="d-flex justify-content-between">
                                  <div class="badge badge-secondary">10</div>
                                  <div class="badge badge-secondary d-flex flex-column">
                                    <p>The account owner's rating words, ratio number find emojis will appear here.
                                      <i class="fal fa-heart"></i> <i class="fal fa-smile"></i></p>
                                    <div class="d-flex justify-content-between PopupCardDC">
                                      <aside><a href="#"><span class="text-success"><i
                                              class="far fa-arrow-up"></i></span> <span
                                            class="PopupCardCount">1322</span></a> <a href="#"><span
                                            class="text-danger"><i class="far fa-arrow-down"></i></span> <span
                                            class="PopupCardCount">1322</span></a></aside>
                                      <aside><span class="PopupCardDate">jan 12 21</span><span
                                          class="PopupCardDate">10:00 PM</span></aside>
                                    </div>
                                  </div>
                                  <div> <a href="#" class="arrowud text-success"> <i class="far fa-arrow-up"></i>
                                    </a> <a href="#" class="arrowud text-danger"> <i class="far fa-arrow-down"></i>
                                    </a> </div>
                                </div>
                              </article>
                              <p class="date"><span>1,280,707 views</span> <span>16 Jan 2021</span></p>
                              <p>On the other hand, we denounce with righteous from indignation and dislike men who
                                are so beguiled and demoralized by the charms of pleasure of the moment, blinded by
                                desire, that they cannot foresee the pain and trouble that are bound to ensue.
                                Dolore magna dolor aliqua ullamco laboris righteous from indignation and dislike men
                                who are so beguiled and demoralized.</p>
                            </div>
                          </aside>
                          <aside class="col-md-4">
                            <div class="card bg-light h-100 PopupCard">
                              <div class="card-body">
                                <ul class="RatingList d-flex justify-content-between">
                                  <li>3426 Total Ratings</li>
                                  <li class="sepreter">|</li>
                                  <li>1438 Linked Account Ratings </li>
                                </ul>
                                <form>
                                  <div class="row">
                                    <aside class="col-8">
                                      <input type="email" class="form-control" id="RatingsWords"
                                        placeholder="Enter Rating Word(s) here">
                                    </aside>
                                    <aside class="col-4">
                                      <select class="form-control" id="Score">
                                        <option>Score</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                      </select>
                                    </aside>
                                  </div>
                                </form>
                                <div class="scrollbar" id="style-1">
                                  <div class="force-overflow">
                                    <article class="PopupCardBox">
                                      <h5><a href="#">User Account</a></h5>
                                      <div class="d-flex justify-content-between">
                                        <div class="badge badge-secondary">10</div>
                                        <div class="badge badge-secondary d-flex flex-column">
                                          <p>The account owner's rating words, ratio number find emojis will appear
                                            here. <i class="fal fa-heart"></i> <i class="fal fa-smile"></i></p>
                                          <div class="d-flex justify-content-between PopupCardDC">
                                            <aside><a href="#"><span class="text-success"><i
                                                    class="far fa-arrow-up"></i></span> <span
                                                  class="PopupCardCount">1322</span></a> <a href="#"><span
                                                  class="text-danger"><i class="far fa-arrow-down"></i></span> <span
                                                  class="PopupCardCount">1322</span></a></aside>
                                            <aside><span class="PopupCardDate">jan 12 21</span><span
                                                class="PopupCardDate">10:00 PM</span></aside>
                                          </div>
                                        </div>
                                        <div> <a href="#" class="arrowud text-success"> <i class="far fa-arrow-up"></i>
                                          </a> <a href="#" class="arrowud text-danger"> <i
                                              class="far fa-arrow-down"></i> </a>
                                        </div>
                                      </div>
                                    </article>
                                    <article class="PopupCardBox">
                                      <h5><a href="#">User Account</a></h5>
                                      <div class="d-flex justify-content-between">
                                        <div class="badge badge-secondary">10</div>
                                        <div class="badge badge-secondary d-flex flex-column">
                                          <p>The account owner's rating words, ratio number find emojis will appear
                                            here. <i class="fal fa-heart"></i> <i class="fal fa-smile"></i></p>
                                          <div class="d-flex justify-content-between PopupCardDC">
                                            <aside><a href="#"><span class="text-success"><i
                                                    class="far fa-arrow-up"></i></span> <span
                                                  class="PopupCardCount">1322</span></a> <a href="#"><span
                                                  class="text-danger"><i class="far fa-arrow-down"></i></span> <span
                                                  class="PopupCardCount">1322</span></a></aside>
                                            <aside><span class="PopupCardDate">jan 12 21</span><span
                                                class="PopupCardDate">10:00 PM</span></aside>
                                          </div>
                                        </div>
                                        <div> <a href="#" class="arrowud text-success"> <i class="far fa-arrow-up"></i>
                                          </a> <a href="#" class="arrowud text-danger"> <i
                                              class="far fa-arrow-down"></i> </a>
                                        </div>
                                      </div>
                                    </article>
                                    <article class="PopupCardBox">
                                      <h5><a href="#">User Account</a></h5>
                                      <div class="d-flex justify-content-between">
                                        <div class="badge badge-secondary">10</div>
                                        <div class="badge badge-secondary d-flex flex-column">
                                          <p>The account owner's rating words, ratio number find emojis will appear
                                            here. <i class="fal fa-heart"></i> <i class="fal fa-smile"></i></p>
                                          <div class="d-flex justify-content-between PopupCardDC">
                                            <aside><a href="#"><span class="text-success"><i
                                                    class="far fa-arrow-up"></i></span> <span
                                                  class="PopupCardCount">1322</span></a> <a href="#"><span
                                                  class="text-danger"><i class="far fa-arrow-down"></i></span> <span
                                                  class="PopupCardCount">1322</span></a></aside>
                                            <aside><span class="PopupCardDate">jan 12 21</span><span
                                                class="PopupCardDate">10:00 PM</span></aside>
                                          </div>
                                        </div>
                                        <div> <a href="#" class="arrowud text-success"> <i class="far fa-arrow-up"></i>
                                          </a> <a href="#" class="arrowud text-danger"> <i
                                              class="far fa-arrow-down"></i> </a>
                                        </div>
                                      </div>
                                    </article>
                                    <article class="PopupCardBox">
                                      <h5><a href="#">User Account</a></h5>
                                      <div class="d-flex justify-content-between">
                                        <div class="badge badge-secondary">10</div>
                                        <div class="badge badge-secondary d-flex flex-column">
                                          <p>The account owner's rating words, ratio number find emojis will appear
                                            here. <i class="fal fa-heart"></i> <i class="fal fa-smile"></i></p>
                                          <div class="d-flex justify-content-between PopupCardDC">
                                            <aside><a href="#"><span class="text-success"><i
                                                    class="far fa-arrow-up"></i></span> <span
                                                  class="PopupCardCount">1322</span></a> <a href="#"><span
                                                  class="text-danger"><i class="far fa-arrow-down"></i></span> <span
                                                  class="PopupCardCount">1322</span></a></aside>
                                            <aside><span class="PopupCardDate">jan 12 21</span><span
                                                class="PopupCardDate">10:00 PM</span></aside>
                                          </div>
                                        </div>
                                        <div> <a href="#" class="arrowud text-success"> <i class="far fa-arrow-up"></i>
                                          </a> <a href="#" class="arrowud text-danger"> <i
                                              class="far fa-arrow-down"></i> </a>
                                        </div>
                                      </div>
                                    </article>
                                    <article class="PopupCardBox">
                                      <h5><a href="#">User Account</a></h5>
                                      <div class="d-flex justify-content-between">
                                        <div class="badge badge-secondary">10</div>
                                        <div class="badge badge-secondary d-flex flex-column">
                                          <p>The account owner's rating words, ratio number find emojis will appear
                                            here. <i class="fal fa-heart"></i> <i class="fal fa-smile"></i></p>
                                          <div class="d-flex justify-content-between PopupCardDC">
                                            <aside><a href="#"><span class="text-success"><i
                                                    class="far fa-arrow-up"></i></span> <span
                                                  class="PopupCardCount">1322</span></a> <a href="#"><span
                                                  class="text-danger"><i class="far fa-arrow-down"></i></span> <span
                                                  class="PopupCardCount">1322</span></a></aside>
                                            <aside><span class="PopupCardDate">jan 12 21</span><span
                                                class="PopupCardDate">10:00 PM</span></aside>
                                          </div>
                                        </div>
                                        <div> <a href="#" class="arrowud text-success"> <i class="far fa-arrow-up"></i>
                                          </a> <a href="#" class="arrowud text-danger"> <i
                                              class="far fa-arrow-down"></i> </a>
                                        </div>
                                      </div>
                                    </article>
                                    <article class="PopupCardBox">
                                      <h5><a href="#">User Account</a></h5>
                                      <div class="d-flex justify-content-between">
                                        <div class="badge badge-secondary">10</div>
                                        <div class="badge badge-secondary d-flex flex-column">
                                          <p>The account owner's rating words, ratio number find emojis will appear
                                            here. <i class="fal fa-heart"></i> <i class="fal fa-smile"></i></p>
                                          <div class="d-flex justify-content-between PopupCardDC">
                                            <aside><a href="#"><span class="text-success"><i
                                                    class="far fa-arrow-up"></i></span> <span
                                                  class="PopupCardCount">1322</span></a> <a href="#"><span
                                                  class="text-danger"><i class="far fa-arrow-down"></i></span> <span
                                                  class="PopupCardCount">1322</span></a></aside>
                                            <aside><span class="PopupCardDate">jan 12 21</span><span
                                                class="PopupCardDate">10:00 PM</span></aside>
                                          </div>
                                        </div>
                                        <div> <a href="#" class="arrowud text-success"> <i class="far fa-arrow-up"></i>
                                          </a> <a href="#" class="arrowud text-danger"> <i
                                              class="far fa-arrow-down"></i> </a>
                                        </div>
                                      </div>
                                    </article>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </aside>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </aside>
            <aside class="col-lg-3 col-md-6 col-sm-6">
              <div class="AddVideo">
                <div class="YoutubeLable"><span>YouTube</span></div>
                <h4>Video Title</h4>
                <div class="VideoUser"><img src="images/unnamed.jpg" alt=""></div>
                <div class="imgvid">
                  <iframe src="https://www.youtube.com/embed/9xwazD5SyVg" frameborder="0"></iframe>
                </div>
                <ul class="d-flex justify-content-between">
                  <li><a href="#"><i class="fal fa-check"></i> <span>647</span></a></li>
                  <li><a href="#"><i class="fal fa-times"></i> <span>99</span></a></li>
                  <li><a href="#"><i class="far fa-dot-circle"></i> <span>1.5k</span></a></li>
                  <li><a href="#"><i class="fas fa-exclamation-triangle"></i></a></li>
                </ul>
                <p class="date"><span>1,280,707 views</span> <span>16 Jan 2021</span></p>
                <p class=""><a href="other-user-account.php">John Marteen</a></p>
                <p>Lorem ipsum dolor sit amet righteous, consectetur adipiscing elit, sed is a do eiusmod is tempor
                  incididunt ut labore et dolore magna dolor aliqua ullamco tempor laboris.</p>
                <!-- Button trigger modal -->
                <div class="VideoPopup">
                  <button type="button" class="btn btn-primary" data-toggle="modal"
                    data-target=".bd-example-modal-lg4"><i class="fas fa-plus-circle"></i></button>
                </div>

                <!-- Modal -->
                <div class="modal fade bd-example-modal-lg4" tabindex="-1" role="dialog"
                  aria-labelledby="myLargeModalLabel4" aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span
                            aria-hidden="true">&times;</span> </button>
                      </div>
                      <div class="modal-body">
                        <div class="row d-flex align-items-stretch">
                          <aside class="col-md-4">
                            <div class="card bg-light h-100 PopupCard">
                              <div class="card-body">
                                <ul class="RatingList d-flex justify-content-between">
                                  <li>3426 Total Ratings</li>
                                  <li class="sepreter">|</li>
                                  <li>1438 Linked Account Ratings </li>
                                </ul>
                                <form>
                                  <div class="row">
                                    <aside class="col-8">
                                      <input type="email" class="form-control" id="RatingsWords"
                                        placeholder="Enter Rating Word(s) here">
                                    </aside>
                                    <aside class="col-4">
                                      <select class="form-control" id="Score">
                                        <option>Score</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                      </select>
                                    </aside>
                                  </div>
                                </form>
                                <div class="scrollbar" id="style-1">
                                  <div class="force-overflow">
                                    <article class="PopupCardBox">
                                      <h5><a href="#">User Account</a></h5>
                                      <div class="d-flex justify-content-between">
                                        <div class="badge badge-secondary">10</div>
                                        <div class="badge badge-secondary d-flex flex-column">
                                          <p>The account owner's rating words, ratio number find emojis will appear
                                            here. <i class="fal fa-heart"></i> <i class="fal fa-smile"></i></p>
                                          <div class="d-flex justify-content-between PopupCardDC">
                                            <aside><a href="#"><span class="text-success"><i
                                                    class="far fa-arrow-up"></i></span> <span
                                                  class="PopupCardCount">1322</span></a> <a href="#"><span
                                                  class="text-danger"><i class="far fa-arrow-down"></i></span> <span
                                                  class="PopupCardCount">1322</span></a></aside>
                                            <aside><span class="PopupCardDate">jan 12 21</span><span
                                                class="PopupCardDate">10:00 PM</span></aside>
                                          </div>
                                        </div>
                                        <div> <a href="#" class="arrowud text-success"> <i class="far fa-arrow-up"></i>
                                          </a> <a href="#" class="arrowud text-danger"> <i
                                              class="far fa-arrow-down"></i> </a>
                                        </div>
                                      </div>
                                    </article>
                                    <article class="PopupCardBox">
                                      <h5><a href="#">User Account</a></h5>
                                      <div class="d-flex justify-content-between">
                                        <div class="badge badge-secondary">10</div>
                                        <div class="badge badge-secondary d-flex flex-column">
                                          <p>The account owner's rating words, ratio number find emojis will appear
                                            here. <i class="fal fa-heart"></i> <i class="fal fa-smile"></i></p>
                                          <div class="d-flex justify-content-between PopupCardDC">
                                            <aside><a href="#"><span class="text-success"><i
                                                    class="far fa-arrow-up"></i></span> <span
                                                  class="PopupCardCount">1322</span></a> <a href="#"><span
                                                  class="text-danger"><i class="far fa-arrow-down"></i></span> <span
                                                  class="PopupCardCount">1322</span></a></aside>
                                            <aside><span class="PopupCardDate">jan 12 21</span><span
                                                class="PopupCardDate">10:00 PM</span></aside>
                                          </div>
                                        </div>
                                        <div> <a href="#" class="arrowud text-success"> <i class="far fa-arrow-up"></i>
                                          </a> <a href="#" class="arrowud text-danger"> <i
                                              class="far fa-arrow-down"></i> </a>
                                        </div>
                                      </div>
                                    </article>
                                    <article class="PopupCardBox">
                                      <h5><a href="#">User Account</a></h5>
                                      <div class="d-flex justify-content-between">
                                        <div class="badge badge-secondary">10</div>
                                        <div class="badge badge-secondary d-flex flex-column">
                                          <p>The account owner's rating words, ratio number find emojis will appear
                                            here. <i class="fal fa-heart"></i> <i class="fal fa-smile"></i></p>
                                          <div class="d-flex justify-content-between PopupCardDC">
                                            <aside><a href="#"><span class="text-success"><i
                                                    class="far fa-arrow-up"></i></span> <span
                                                  class="PopupCardCount">1322</span></a> <a href="#"><span
                                                  class="text-danger"><i class="far fa-arrow-down"></i></span> <span
                                                  class="PopupCardCount">1322</span></a></aside>
                                            <aside><span class="PopupCardDate">jan 12 21</span><span
                                                class="PopupCardDate">10:00 PM</span></aside>
                                          </div>
                                        </div>
                                        <div> <a href="#" class="arrowud text-success"> <i class="far fa-arrow-up"></i>
                                          </a> <a href="#" class="arrowud text-danger"> <i
                                              class="far fa-arrow-down"></i> </a>
                                        </div>
                                      </div>
                                    </article>
                                    <article class="PopupCardBox">
                                      <h5><a href="#">User Account</a></h5>
                                      <div class="d-flex justify-content-between">
                                        <div class="badge badge-secondary">10</div>
                                        <div class="badge badge-secondary d-flex flex-column">
                                          <p>The account owner's rating words, ratio number find emojis will appear
                                            here. <i class="fal fa-heart"></i> <i class="fal fa-smile"></i></p>
                                          <div class="d-flex justify-content-between PopupCardDC">
                                            <aside><a href="#"><span class="text-success"><i
                                                    class="far fa-arrow-up"></i></span> <span
                                                  class="PopupCardCount">1322</span></a> <a href="#"><span
                                                  class="text-danger"><i class="far fa-arrow-down"></i></span> <span
                                                  class="PopupCardCount">1322</span></a></aside>
                                            <aside><span class="PopupCardDate">jan 12 21</span><span
                                                class="PopupCardDate">10:00 PM</span></aside>
                                          </div>
                                        </div>
                                        <div> <a href="#" class="arrowud text-success"> <i class="far fa-arrow-up"></i>
                                          </a> <a href="#" class="arrowud text-danger"> <i
                                              class="far fa-arrow-down"></i> </a>
                                        </div>
                                      </div>
                                    </article>
                                    <article class="PopupCardBox">
                                      <h5><a href="#">User Account</a></h5>
                                      <div class="d-flex justify-content-between">
                                        <div class="badge badge-secondary">10</div>
                                        <div class="badge badge-secondary d-flex flex-column">
                                          <p>The account owner's rating words, ratio number find emojis will appear
                                            here. <i class="fal fa-heart"></i> <i class="fal fa-smile"></i></p>
                                          <div class="d-flex justify-content-between PopupCardDC">
                                            <aside><a href="#"><span class="text-success"><i
                                                    class="far fa-arrow-up"></i></span> <span
                                                  class="PopupCardCount">1322</span></a> <a href="#"><span
                                                  class="text-danger"><i class="far fa-arrow-down"></i></span> <span
                                                  class="PopupCardCount">1322</span></a></aside>
                                            <aside><span class="PopupCardDate">jan 12 21</span><span
                                                class="PopupCardDate">10:00 PM</span></aside>
                                          </div>
                                        </div>
                                        <div> <a href="#" class="arrowud text-success"> <i class="far fa-arrow-up"></i>
                                          </a> <a href="#" class="arrowud text-danger"> <i
                                              class="far fa-arrow-down"></i> </a>
                                        </div>
                                      </div>
                                    </article>
                                    <article class="PopupCardBox">
                                      <h5><a href="#">User Account</a></h5>
                                      <div class="d-flex justify-content-between">
                                        <div class="badge badge-secondary">10</div>
                                        <div class="badge badge-secondary d-flex flex-column">
                                          <p>The account owner's rating words, ratio number find emojis will appear
                                            here. <i class="fal fa-heart"></i> <i class="fal fa-smile"></i></p>
                                          <div class="d-flex justify-content-between PopupCardDC">
                                            <aside><a href="#"><span class="text-success"><i
                                                    class="far fa-arrow-up"></i></span> <span
                                                  class="PopupCardCount">1322</span></a> <a href="#"><span
                                                  class="text-danger"><i class="far fa-arrow-down"></i></span> <span
                                                  class="PopupCardCount">1322</span></a></aside>
                                            <aside><span class="PopupCardDate">jan 12 21</span><span
                                                class="PopupCardDate">10:00 PM</span></aside>
                                          </div>
                                        </div>
                                        <div> <a href="#" class="arrowud text-success"> <i class="far fa-arrow-up"></i>
                                          </a> <a href="#" class="arrowud text-danger"> <i
                                              class="far fa-arrow-down"></i> </a>
                                        </div>
                                      </div>
                                    </article>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </aside>
                          <aside class="col-md-4">
                            <div class="AddVideo mt-0">
                              <div class="YoutubeLable"><span>YouTube</span></div>
                              <div class="CategoryName"><a href="#">Category Name</a></div>
                              <h4>Video Title</h4>
                              <div class="VideoUser"><img src="images/unnamed.jpg" alt=""></div>
                              <div class="imgvid">
                                <iframe src="https://www.youtube.com/embed/9xwazD5SyVg" frameborder="0"></iframe>
                              </div>
                              <ul class="d-flex justify-content-between">
                                <li><a href="#"><i class="fal fa-check"></i> <span>647</span></a></li>
                                <li><a href="#"><i class="fal fa-times"></i> <span>99</span></a></li>
                                <li><a href="#"><i class="far fa-dot-circle"></i> <span>1.5k</span></a></li>
                                <li><a href="#"><i class="fas fa-exclamation-triangle"></i></a></li>
                              </ul>
                              <article class="PopupCardBox">
                                <h5><a href="#">User Account</a></h5>
                                <div class="d-flex justify-content-between">
                                  <div class="badge badge-secondary">10</div>
                                  <div class="badge badge-secondary d-flex flex-column">
                                    <p>The account owner's rating words, ratio number find emojis will appear here.
                                      <i class="fal fa-heart"></i> <i class="fal fa-smile"></i></p>
                                    <div class="d-flex justify-content-between PopupCardDC">
                                      <aside><a href="#"><span class="text-success"><i
                                              class="far fa-arrow-up"></i></span> <span
                                            class="PopupCardCount">1322</span></a> <a href="#"><span
                                            class="text-danger"><i class="far fa-arrow-down"></i></span> <span
                                            class="PopupCardCount">1322</span></a></aside>
                                      <aside><span class="PopupCardDate">jan 12 21</span><span
                                          class="PopupCardDate">10:00 PM</span></aside>
                                    </div>
                                  </div>
                                  <div> <a href="#" class="arrowud text-success"> <i class="far fa-arrow-up"></i>
                                    </a> <a href="#" class="arrowud text-danger"> <i class="far fa-arrow-down"></i>
                                    </a> </div>
                                </div>
                              </article>
                              <p class="date"><span>1,280,707 views</span> <span>16 Jan 2021</span></p>
                              <p>On the other hand, we denounce with righteous from indignation and dislike men who
                                are so beguiled and demoralized by the charms of pleasure of the moment, blinded by
                                desire, that they cannot foresee the pain and trouble that are bound to ensue.
                                Dolore magna dolor aliqua ullamco laboris righteous from indignation and dislike men
                                who are so beguiled and demoralized.</p>
                            </div>
                          </aside>
                          <aside class="col-md-4">
                            <div class="card bg-light h-100 PopupCard">
                              <div class="card-body">
                                <ul class="RatingList d-flex justify-content-between">
                                  <li>3426 Total Ratings</li>
                                  <li class="sepreter">|</li>
                                  <li>1438 Linked Account Ratings </li>
                                </ul>
                                <form>
                                  <div class="row">
                                    <aside class="col-8">
                                      <input type="email" class="form-control" id="RatingsWords"
                                        placeholder="Enter Rating Word(s) here">
                                    </aside>
                                    <aside class="col-4">
                                      <select class="form-control" id="Score">
                                        <option>Score</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                      </select>
                                    </aside>
                                  </div>
                                </form>
                                <div class="scrollbar" id="style-1">
                                  <div class="force-overflow">
                                    <article class="PopupCardBox">
                                      <h5><a href="#">User Account</a></h5>
                                      <div class="d-flex justify-content-between">
                                        <div class="badge badge-secondary">10</div>
                                        <div class="badge badge-secondary d-flex flex-column">
                                          <p>The account owner's rating words, ratio number find emojis will appear
                                            here. <i class="fal fa-heart"></i> <i class="fal fa-smile"></i></p>
                                          <div class="d-flex justify-content-between PopupCardDC">
                                            <aside><a href="#"><span class="text-success"><i
                                                    class="far fa-arrow-up"></i></span> <span
                                                  class="PopupCardCount">1322</span></a> <a href="#"><span
                                                  class="text-danger"><i class="far fa-arrow-down"></i></span> <span
                                                  class="PopupCardCount">1322</span></a></aside>
                                            <aside><span class="PopupCardDate">jan 12 21</span><span
                                                class="PopupCardDate">10:00 PM</span></aside>
                                          </div>
                                        </div>
                                        <div> <a href="#" class="arrowud text-success"> <i class="far fa-arrow-up"></i>
                                          </a> <a href="#" class="arrowud text-danger"> <i
                                              class="far fa-arrow-down"></i> </a>
                                        </div>
                                      </div>
                                    </article>
                                    <article class="PopupCardBox">
                                      <h5><a href="#">User Account</a></h5>
                                      <div class="d-flex justify-content-between">
                                        <div class="badge badge-secondary">10</div>
                                        <div class="badge badge-secondary d-flex flex-column">
                                          <p>The account owner's rating words, ratio number find emojis will appear
                                            here. <i class="fal fa-heart"></i> <i class="fal fa-smile"></i></p>
                                          <div class="d-flex justify-content-between PopupCardDC">
                                            <aside><a href="#"><span class="text-success"><i
                                                    class="far fa-arrow-up"></i></span> <span
                                                  class="PopupCardCount">1322</span></a> <a href="#"><span
                                                  class="text-danger"><i class="far fa-arrow-down"></i></span> <span
                                                  class="PopupCardCount">1322</span></a></aside>
                                            <aside><span class="PopupCardDate">jan 12 21</span><span
                                                class="PopupCardDate">10:00 PM</span></aside>
                                          </div>
                                        </div>
                                        <div> <a href="#" class="arrowud text-success"> <i class="far fa-arrow-up"></i>
                                          </a> <a href="#" class="arrowud text-danger"> <i
                                              class="far fa-arrow-down"></i> </a>
                                        </div>
                                      </div>
                                    </article>
                                    <article class="PopupCardBox">
                                      <h5><a href="#">User Account</a></h5>
                                      <div class="d-flex justify-content-between">
                                        <div class="badge badge-secondary">10</div>
                                        <div class="badge badge-secondary d-flex flex-column">
                                          <p>The account owner's rating words, ratio number find emojis will appear
                                            here. <i class="fal fa-heart"></i> <i class="fal fa-smile"></i></p>
                                          <div class="d-flex justify-content-between PopupCardDC">
                                            <aside><a href="#"><span class="text-success"><i
                                                    class="far fa-arrow-up"></i></span> <span
                                                  class="PopupCardCount">1322</span></a> <a href="#"><span
                                                  class="text-danger"><i class="far fa-arrow-down"></i></span> <span
                                                  class="PopupCardCount">1322</span></a></aside>
                                            <aside><span class="PopupCardDate">jan 12 21</span><span
                                                class="PopupCardDate">10:00 PM</span></aside>
                                          </div>
                                        </div>
                                        <div> <a href="#" class="arrowud text-success"> <i class="far fa-arrow-up"></i>
                                          </a> <a href="#" class="arrowud text-danger"> <i
                                              class="far fa-arrow-down"></i> </a>
                                        </div>
                                      </div>
                                    </article>
                                    <article class="PopupCardBox">
                                      <h5><a href="#">User Account</a></h5>
                                      <div class="d-flex justify-content-between">
                                        <div class="badge badge-secondary">10</div>
                                        <div class="badge badge-secondary d-flex flex-column">
                                          <p>The account owner's rating words, ratio number find emojis will appear
                                            here. <i class="fal fa-heart"></i> <i class="fal fa-smile"></i></p>
                                          <div class="d-flex justify-content-between PopupCardDC">
                                            <aside><a href="#"><span class="text-success"><i
                                                    class="far fa-arrow-up"></i></span> <span
                                                  class="PopupCardCount">1322</span></a> <a href="#"><span
                                                  class="text-danger"><i class="far fa-arrow-down"></i></span> <span
                                                  class="PopupCardCount">1322</span></a></aside>
                                            <aside><span class="PopupCardDate">jan 12 21</span><span
                                                class="PopupCardDate">10:00 PM</span></aside>
                                          </div>
                                        </div>
                                        <div> <a href="#" class="arrowud text-success"> <i class="far fa-arrow-up"></i>
                                          </a> <a href="#" class="arrowud text-danger"> <i
                                              class="far fa-arrow-down"></i> </a>
                                        </div>
                                      </div>
                                    </article>
                                    <article class="PopupCardBox">
                                      <h5><a href="#">User Account</a></h5>
                                      <div class="d-flex justify-content-between">
                                        <div class="badge badge-secondary">10</div>
                                        <div class="badge badge-secondary d-flex flex-column">
                                          <p>The account owner's rating words, ratio number find emojis will appear
                                            here. <i class="fal fa-heart"></i> <i class="fal fa-smile"></i></p>
                                          <div class="d-flex justify-content-between PopupCardDC">
                                            <aside><a href="#"><span class="text-success"><i
                                                    class="far fa-arrow-up"></i></span> <span
                                                  class="PopupCardCount">1322</span></a> <a href="#"><span
                                                  class="text-danger"><i class="far fa-arrow-down"></i></span> <span
                                                  class="PopupCardCount">1322</span></a></aside>
                                            <aside><span class="PopupCardDate">jan 12 21</span><span
                                                class="PopupCardDate">10:00 PM</span></aside>
                                          </div>
                                        </div>
                                        <div> <a href="#" class="arrowud text-success"> <i class="far fa-arrow-up"></i>
                                          </a> <a href="#" class="arrowud text-danger"> <i
                                              class="far fa-arrow-down"></i> </a>
                                        </div>
                                      </div>
                                    </article>
                                    <article class="PopupCardBox">
                                      <h5><a href="#">User Account</a></h5>
                                      <div class="d-flex justify-content-between">
                                        <div class="badge badge-secondary">10</div>
                                        <div class="badge badge-secondary d-flex flex-column">
                                          <p>The account owner's rating words, ratio number find emojis will appear
                                            here. <i class="fal fa-heart"></i> <i class="fal fa-smile"></i></p>
                                          <div class="d-flex justify-content-between PopupCardDC">
                                            <aside><a href="#"><span class="text-success"><i
                                                    class="far fa-arrow-up"></i></span> <span
                                                  class="PopupCardCount">1322</span></a> <a href="#"><span
                                                  class="text-danger"><i class="far fa-arrow-down"></i></span> <span
                                                  class="PopupCardCount">1322</span></a></aside>
                                            <aside><span class="PopupCardDate">jan 12 21</span><span
                                                class="PopupCardDate">10:00 PM</span></aside>
                                          </div>
                                        </div>
                                        <div> <a href="#" class="arrowud text-success"> <i class="far fa-arrow-up"></i>
                                          </a> <a href="#" class="arrowud text-danger"> <i
                                              class="far fa-arrow-down"></i> </a>
                                        </div>
                                      </div>
                                    </article>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </aside>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </aside>
          </div>

          <div class="">
            <div class="row">
              <aside class="col-lg-3 col-md-6 col-sm-6">
                <div class="AddVideo">
                  <div class="YoutubeLable"><span>YouTube</span></div>
                  <h4>Video Title</h4>
                  <div class="VideoUser"><img src="images/unnamed.jpg" alt=""></div>
                  <div class="imgvid">
                    <iframe src="https://www.youtube.com/embed/9xwazD5SyVg" frameborder="0"></iframe>
                  </div>
                  <ul class="d-flex justify-content-between">
                    <li><a href="#"><i class="fal fa-check"></i> <span>647</span></a></li>
                    <li><a href="#"><i class="fal fa-times"></i> <span>99</span></a></li>
                    <li><a href="#"><i class="far fa-dot-circle"></i> <span>1.5k</span></a></li>
                    <li><a href="#"><i class="fas fa-exclamation-triangle"></i></a></li>
                  </ul>
                  <p class="date"><span>1,280,707 views</span> <span>16 Jan 2021</span></p>
                  <p class=""><a href="other-user-account.php">John Marteen</a></p>
                  <p>Lorem ipsum dolor sit amet righteous, consectetur adipiscing elit, sed is a do eiusmod is tempor
                    incididunt ut labore et dolore magna dolor aliqua ullamco tempor laboris.</p>
                  <!-- Button trigger modal -->
                  <div class="VideoPopup">
                    <button type="button" class="btn btn-primary" data-toggle="modal"
                      data-target=".bd-example-modal-lg"><i class="fas fa-plus-circle"></i></button>
                  </div>

                  <!-- Modal -->
                  <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
                    aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span
                              aria-hidden="true">&times;</span> </button>
                        </div>
                        <div class="modal-body">
                          <div class="row d-flex align-items-stretch">
                            <aside class="col-md-4">
                              <div class="card bg-light h-100 PopupCard">
                                <div class="card-body">
                                  <ul class="RatingList d-flex justify-content-between">
                                    <li>3426 Total Ratings</li>
                                    <li class="sepreter">|</li>
                                    <li>1438 Linked Account Ratings </li>
                                  </ul>
                                  <form>
                                    <div class="row">
                                      <aside class="col-8">
                                        <input type="email" class="form-control" id="RatingsWords"
                                          placeholder="Enter Rating Word(s) here">
                                      </aside>
                                      <aside class="col-4">
                                        <select class="form-control" id="Score">
                                          <option>Score</option>
                                          <option>2</option>
                                          <option>3</option>
                                          <option>4</option>
                                          <option>5</option>
                                        </select>
                                      </aside>
                                    </div>
                                  </form>
                                  <div class="scrollbar" id="style-1">
                                    <div class="force-overflow">
                                      <article class="PopupCardBox">
                                        <h5><a href="#">User Account</a></h5>
                                        <div class="d-flex justify-content-between">
                                          <div class="badge badge-secondary">10</div>
                                          <div class="badge badge-secondary d-flex flex-column">
                                            <p>The account owner's rating words, ratio number find emojis will appear
                                              here. <i class="fal fa-heart"></i> <i class="fal fa-smile"></i></p>
                                            <div class="d-flex justify-content-between PopupCardDC">
                                              <aside><a href="#"><span class="text-success"><i
                                                      class="far fa-arrow-up"></i></span> <span
                                                    class="PopupCardCount">1322</span></a> <a href="#"><span
                                                    class="text-danger"><i class="far fa-arrow-down"></i></span> <span
                                                    class="PopupCardCount">1322</span></a></aside>
                                              <aside><span class="PopupCardDate">jan 12 21</span><span
                                                  class="PopupCardDate">10:00 PM</span></aside>
                                            </div>
                                          </div>
                                          <div> <a href="#" class="arrowud text-success"> <i
                                                class="far fa-arrow-up"></i> </a> <a href="#"
                                              class="arrowud text-danger"> <i class="far fa-arrow-down"></i> </a>
                                          </div>
                                        </div>
                                      </article>
                                      <article class="PopupCardBox">
                                        <h5><a href="#">User Account</a></h5>
                                        <div class="d-flex justify-content-between">
                                          <div class="badge badge-secondary">10</div>
                                          <div class="badge badge-secondary d-flex flex-column">
                                            <p>The account owner's rating words, ratio number find emojis will appear
                                              here. <i class="fal fa-heart"></i> <i class="fal fa-smile"></i></p>
                                            <div class="d-flex justify-content-between PopupCardDC">
                                              <aside><a href="#"><span class="text-success"><i
                                                      class="far fa-arrow-up"></i></span> <span
                                                    class="PopupCardCount">1322</span></a> <a href="#"><span
                                                    class="text-danger"><i class="far fa-arrow-down"></i></span> <span
                                                    class="PopupCardCount">1322</span></a></aside>
                                              <aside><span class="PopupCardDate">jan 12 21</span><span
                                                  class="PopupCardDate">10:00 PM</span></aside>
                                            </div>
                                          </div>
                                          <div> <a href="#" class="arrowud text-success"> <i
                                                class="far fa-arrow-up"></i> </a> <a href="#"
                                              class="arrowud text-danger"> <i class="far fa-arrow-down"></i> </a>
                                          </div>
                                        </div>
                                      </article>
                                      <article class="PopupCardBox">
                                        <h5><a href="#">User Account</a></h5>
                                        <div class="d-flex justify-content-between">
                                          <div class="badge badge-secondary">10</div>
                                          <div class="badge badge-secondary d-flex flex-column">
                                            <p>The account owner's rating words, ratio number find emojis will appear
                                              here. <i class="fal fa-heart"></i> <i class="fal fa-smile"></i></p>
                                            <div class="d-flex justify-content-between PopupCardDC">
                                              <aside><a href="#"><span class="text-success"><i
                                                      class="far fa-arrow-up"></i></span> <span
                                                    class="PopupCardCount">1322</span></a> <a href="#"><span
                                                    class="text-danger"><i class="far fa-arrow-down"></i></span> <span
                                                    class="PopupCardCount">1322</span></a></aside>
                                              <aside><span class="PopupCardDate">jan 12 21</span><span
                                                  class="PopupCardDate">10:00 PM</span></aside>
                                            </div>
                                          </div>
                                          <div> <a href="#" class="arrowud text-success"> <i
                                                class="far fa-arrow-up"></i> </a> <a href="#"
                                              class="arrowud text-danger"> <i class="far fa-arrow-down"></i> </a>
                                          </div>
                                        </div>
                                      </article>
                                      <article class="PopupCardBox">
                                        <h5><a href="#">User Account</a></h5>
                                        <div class="d-flex justify-content-between">
                                          <div class="badge badge-secondary">10</div>
                                          <div class="badge badge-secondary d-flex flex-column">
                                            <p>The account owner's rating words, ratio number find emojis will appear
                                              here. <i class="fal fa-heart"></i> <i class="fal fa-smile"></i></p>
                                            <div class="d-flex justify-content-between PopupCardDC">
                                              <aside><a href="#"><span class="text-success"><i
                                                      class="far fa-arrow-up"></i></span> <span
                                                    class="PopupCardCount">1322</span></a> <a href="#"><span
                                                    class="text-danger"><i class="far fa-arrow-down"></i></span> <span
                                                    class="PopupCardCount">1322</span></a></aside>
                                              <aside><span class="PopupCardDate">jan 12 21</span><span
                                                  class="PopupCardDate">10:00 PM</span></aside>
                                            </div>
                                          </div>
                                          <div> <a href="#" class="arrowud text-success"> <i
                                                class="far fa-arrow-up"></i> </a> <a href="#"
                                              class="arrowud text-danger"> <i class="far fa-arrow-down"></i> </a>
                                          </div>
                                        </div>
                                      </article>
                                      <article class="PopupCardBox">
                                        <h5><a href="#">User Account</a></h5>
                                        <div class="d-flex justify-content-between">
                                          <div class="badge badge-secondary">10</div>
                                          <div class="badge badge-secondary d-flex flex-column">
                                            <p>The account owner's rating words, ratio number find emojis will appear
                                              here. <i class="fal fa-heart"></i> <i class="fal fa-smile"></i></p>
                                            <div class="d-flex justify-content-between PopupCardDC">
                                              <aside><a href="#"><span class="text-success"><i
                                                      class="far fa-arrow-up"></i></span> <span
                                                    class="PopupCardCount">1322</span></a> <a href="#"><span
                                                    class="text-danger"><i class="far fa-arrow-down"></i></span> <span
                                                    class="PopupCardCount">1322</span></a></aside>
                                              <aside><span class="PopupCardDate">jan 12 21</span><span
                                                  class="PopupCardDate">10:00 PM</span></aside>
                                            </div>
                                          </div>
                                          <div> <a href="#" class="arrowud text-success"> <i
                                                class="far fa-arrow-up"></i> </a> <a href="#"
                                              class="arrowud text-danger"> <i class="far fa-arrow-down"></i> </a>
                                          </div>
                                        </div>
                                      </article>
                                      <article class="PopupCardBox">
                                        <h5><a href="#">User Account</a></h5>
                                        <div class="d-flex justify-content-between">
                                          <div class="badge badge-secondary">10</div>
                                          <div class="badge badge-secondary d-flex flex-column">
                                            <p>The account owner's rating words, ratio number find emojis will appear
                                              here. <i class="fal fa-heart"></i> <i class="fal fa-smile"></i></p>
                                            <div class="d-flex justify-content-between PopupCardDC">
                                              <aside><a href="#"><span class="text-success"><i
                                                      class="far fa-arrow-up"></i></span> <span
                                                    class="PopupCardCount">1322</span></a> <a href="#"><span
                                                    class="text-danger"><i class="far fa-arrow-down"></i></span> <span
                                                    class="PopupCardCount">1322</span></a></aside>
                                              <aside><span class="PopupCardDate">jan 12 21</span><span
                                                  class="PopupCardDate">10:00 PM</span></aside>
                                            </div>
                                          </div>
                                          <div> <a href="#" class="arrowud text-success"> <i
                                                class="far fa-arrow-up"></i> </a> <a href="#"
                                              class="arrowud text-danger"> <i class="far fa-arrow-down"></i> </a>
                                          </div>
                                        </div>
                                      </article>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </aside>
                            <aside class="col-md-4">
                              <div class="AddVideo mt-0">
                                <div class="YoutubeLable"><span>YouTube</span></div>
                                <div class="CategoryName"><a href="#">Category Name</a></div>
                                <h4>Video Title</h4>
                                <div class="VideoUser"><img src="images/unnamed.jpg" alt=""></div>
                                <div class="imgvid">
                                  <iframe src="https://www.youtube.com/embed/9xwazD5SyVg" frameborder="0"></iframe>
                                </div>
                                <ul class="d-flex justify-content-between">
                                  <li><a href="#"><i class="fal fa-check"></i> <span>647</span></a></li>
                                  <li><a href="#"><i class="fal fa-times"></i> <span>99</span></a></li>
                                  <li><a href="#"><i class="far fa-dot-circle"></i> <span>1.5k</span></a></li>
                                  <li><a href="#"><i class="fas fa-exclamation-triangle"></i></a></li>
                                </ul>
                                <article class="PopupCardBox">
                                  <h5><a href="#">User Account</a></h5>
                                  <div class="d-flex justify-content-between">
                                    <div class="badge badge-secondary">10</div>
                                    <div class="badge badge-secondary d-flex flex-column">
                                      <p>The account owner's rating words, ratio number find emojis will appear here.
                                        <i class="fal fa-heart"></i> <i class="fal fa-smile"></i></p>
                                      <div class="d-flex justify-content-between PopupCardDC">
                                        <aside><a href="#"><span class="text-success"><i
                                                class="far fa-arrow-up"></i></span> <span
                                              class="PopupCardCount">1322</span></a> <a href="#"><span
                                              class="text-danger"><i class="far fa-arrow-down"></i></span> <span
                                              class="PopupCardCount">1322</span></a></aside>
                                        <aside><span class="PopupCardDate">jan 12 21</span><span
                                            class="PopupCardDate">10:00 PM</span></aside>
                                      </div>
                                    </div>
                                    <div> <a href="#" class="arrowud text-success"> <i class="far fa-arrow-up"></i>
                                      </a> <a href="#" class="arrowud text-danger"> <i class="far fa-arrow-down"></i>
                                      </a> </div>
                                  </div>
                                </article>
                                <p class="date"><span>1,280,707 views</span> <span>16 Jan 2021</span></p>
                                <p>On the other hand, we denounce with righteous from indignation and dislike men who
                                  are so beguiled and demoralized by the charms of pleasure of the moment, blinded by
                                  desire, that they cannot foresee the pain and trouble that are bound to ensue.
                                  Dolore magna dolor aliqua ullamco laboris righteous from indignation and dislike men
                                  who are so beguiled and demoralized.</p>
                              </div>
                            </aside>
                            <aside class="col-md-4">
                              <div class="card bg-light h-100 PopupCard">
                                <div class="card-body">
                                  <ul class="RatingList d-flex justify-content-between">
                                    <li>3426 Total Ratings</li>
                                    <li class="sepreter">|</li>
                                    <li>1438 Linked Account Ratings </li>
                                  </ul>
                                  <form>
                                    <div class="row">
                                      <aside class="col-8">
                                        <input type="email" class="form-control" id="RatingsWords"
                                          placeholder="Enter Rating Word(s) here">
                                      </aside>
                                      <aside class="col-4">
                                        <select class="form-control" id="Score">
                                          <option>Score</option>
                                          <option>2</option>
                                          <option>3</option>
                                          <option>4</option>
                                          <option>5</option>
                                        </select>
                                      </aside>
                                    </div>
                                  </form>
                                  <div class="scrollbar" id="style-1">
                                    <div class="force-overflow">
                                      <article class="PopupCardBox">
                                        <h5><a href="#">User Account</a></h5>
                                        <div class="d-flex justify-content-between">
                                          <div class="badge badge-secondary">10</div>
                                          <div class="badge badge-secondary d-flex flex-column">
                                            <p>The account owner's rating words, ratio number find emojis will appear
                                              here. <i class="fal fa-heart"></i> <i class="fal fa-smile"></i></p>
                                            <div class="d-flex justify-content-between PopupCardDC">
                                              <aside><a href="#"><span class="text-success"><i
                                                      class="far fa-arrow-up"></i></span> <span
                                                    class="PopupCardCount">1322</span></a> <a href="#"><span
                                                    class="text-danger"><i class="far fa-arrow-down"></i></span> <span
                                                    class="PopupCardCount">1322</span></a></aside>
                                              <aside><span class="PopupCardDate">jan 12 21</span><span
                                                  class="PopupCardDate">10:00 PM</span></aside>
                                            </div>
                                          </div>
                                          <div> <a href="#" class="arrowud text-success"> <i
                                                class="far fa-arrow-up"></i> </a> <a href="#"
                                              class="arrowud text-danger"> <i class="far fa-arrow-down"></i> </a>
                                          </div>
                                        </div>
                                      </article>
                                      <article class="PopupCardBox">
                                        <h5><a href="#">User Account</a></h5>
                                        <div class="d-flex justify-content-between">
                                          <div class="badge badge-secondary">10</div>
                                          <div class="badge badge-secondary d-flex flex-column">
                                            <p>The account owner's rating words, ratio number find emojis will appear
                                              here. <i class="fal fa-heart"></i> <i class="fal fa-smile"></i></p>
                                            <div class="d-flex justify-content-between PopupCardDC">
                                              <aside><a href="#"><span class="text-success"><i
                                                      class="far fa-arrow-up"></i></span> <span
                                                    class="PopupCardCount">1322</span></a> <a href="#"><span
                                                    class="text-danger"><i class="far fa-arrow-down"></i></span> <span
                                                    class="PopupCardCount">1322</span></a></aside>
                                              <aside><span class="PopupCardDate">jan 12 21</span><span
                                                  class="PopupCardDate">10:00 PM</span></aside>
                                            </div>
                                          </div>
                                          <div> <a href="#" class="arrowud text-success"> <i
                                                class="far fa-arrow-up"></i> </a> <a href="#"
                                              class="arrowud text-danger"> <i class="far fa-arrow-down"></i> </a>
                                          </div>
                                        </div>
                                      </article>
                                      <article class="PopupCardBox">
                                        <h5><a href="#">User Account</a></h5>
                                        <div class="d-flex justify-content-between">
                                          <div class="badge badge-secondary">10</div>
                                          <div class="badge badge-secondary d-flex flex-column">
                                            <p>The account owner's rating words, ratio number find emojis will appear
                                              here. <i class="fal fa-heart"></i> <i class="fal fa-smile"></i></p>
                                            <div class="d-flex justify-content-between PopupCardDC">
                                              <aside><a href="#"><span class="text-success"><i
                                                      class="far fa-arrow-up"></i></span> <span
                                                    class="PopupCardCount">1322</span></a> <a href="#"><span
                                                    class="text-danger"><i class="far fa-arrow-down"></i></span> <span
                                                    class="PopupCardCount">1322</span></a></aside>
                                              <aside><span class="PopupCardDate">jan 12 21</span><span
                                                  class="PopupCardDate">10:00 PM</span></aside>
                                            </div>
                                          </div>
                                          <div> <a href="#" class="arrowud text-success"> <i
                                                class="far fa-arrow-up"></i> </a> <a href="#"
                                              class="arrowud text-danger"> <i class="far fa-arrow-down"></i> </a>
                                          </div>
                                        </div>
                                      </article>
                                      <article class="PopupCardBox">
                                        <h5><a href="#">User Account</a></h5>
                                        <div class="d-flex justify-content-between">
                                          <div class="badge badge-secondary">10</div>
                                          <div class="badge badge-secondary d-flex flex-column">
                                            <p>The account owner's rating words, ratio number find emojis will appear
                                              here. <i class="fal fa-heart"></i> <i class="fal fa-smile"></i></p>
                                            <div class="d-flex justify-content-between PopupCardDC">
                                              <aside><a href="#"><span class="text-success"><i
                                                      class="far fa-arrow-up"></i></span> <span
                                                    class="PopupCardCount">1322</span></a> <a href="#"><span
                                                    class="text-danger"><i class="far fa-arrow-down"></i></span> <span
                                                    class="PopupCardCount">1322</span></a></aside>
                                              <aside><span class="PopupCardDate">jan 12 21</span><span
                                                  class="PopupCardDate">10:00 PM</span></aside>
                                            </div>
                                          </div>
                                          <div> <a href="#" class="arrowud text-success"> <i
                                                class="far fa-arrow-up"></i> </a> <a href="#"
                                              class="arrowud text-danger"> <i class="far fa-arrow-down"></i> </a>
                                          </div>
                                        </div>
                                      </article>
                                      <article class="PopupCardBox">
                                        <h5><a href="#">User Account</a></h5>
                                        <div class="d-flex justify-content-between">
                                          <div class="badge badge-secondary">10</div>
                                          <div class="badge badge-secondary d-flex flex-column">
                                            <p>The account owner's rating words, ratio number find emojis will appear
                                              here. <i class="fal fa-heart"></i> <i class="fal fa-smile"></i></p>
                                            <div class="d-flex justify-content-between PopupCardDC">
                                              <aside><a href="#"><span class="text-success"><i
                                                      class="far fa-arrow-up"></i></span> <span
                                                    class="PopupCardCount">1322</span></a> <a href="#"><span
                                                    class="text-danger"><i class="far fa-arrow-down"></i></span> <span
                                                    class="PopupCardCount">1322</span></a></aside>
                                              <aside><span class="PopupCardDate">jan 12 21</span><span
                                                  class="PopupCardDate">10:00 PM</span></aside>
                                            </div>
                                          </div>
                                          <div> <a href="#" class="arrowud text-success"> <i
                                                class="far fa-arrow-up"></i> </a> <a href="#"
                                              class="arrowud text-danger"> <i class="far fa-arrow-down"></i> </a>
                                          </div>
                                        </div>
                                      </article>
                                      <article class="PopupCardBox">
                                        <h5><a href="#">User Account</a></h5>
                                        <div class="d-flex justify-content-between">
                                          <div class="badge badge-secondary">10</div>
                                          <div class="badge badge-secondary d-flex flex-column">
                                            <p>The account owner's rating words, ratio number find emojis will appear
                                              here. <i class="fal fa-heart"></i> <i class="fal fa-smile"></i></p>
                                            <div class="d-flex justify-content-between PopupCardDC">
                                              <aside><a href="#"><span class="text-success"><i
                                                      class="far fa-arrow-up"></i></span> <span
                                                    class="PopupCardCount">1322</span></a> <a href="#"><span
                                                    class="text-danger"><i class="far fa-arrow-down"></i></span> <span
                                                    class="PopupCardCount">1322</span></a></aside>
                                              <aside><span class="PopupCardDate">jan 12 21</span><span
                                                  class="PopupCardDate">10:00 PM</span></aside>
                                            </div>
                                          </div>
                                          <div> <a href="#" class="arrowud text-success"> <i
                                                class="far fa-arrow-up"></i> </a> <a href="#"
                                              class="arrowud text-danger"> <i class="far fa-arrow-down"></i> </a>
                                          </div>
                                        </div>
                                      </article>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </aside>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </aside>
              <aside class="col-lg-3 col-md-6 col-sm-6">
                <div class="AddVideo">
                  <div class="YoutubeLable"><span>Image</span></div>
                  <h4>Image Title</h4>
                  <div class="VideoUser"><img src="images/unnamed.jpg" alt=""></div>
                  <div class="imgvid"> <img src="images/img011.jpg" alt=""> </div>
                  <ul class="d-flex justify-content-between">
                    <li><a href="#"><i class="fal fa-check"></i> <span>647</span></a></li>
                    <li><a href="#"><i class="fal fa-times"></i> <span>99</span></a></li>
                    <li><a href="#"><i class="far fa-dot-circle"></i> <span>1.5k</span></a></li>
                    <li><a href="#"><i class="fas fa-exclamation-triangle"></i></a></li>
                  </ul>
                  <p class="date"><span>1,280,707 views</span> <span>16 Jan 2021</span></p>
                  <p class=""><a href="other-user-account.php">John Marteen</a></p>
                  <p>Lorem ipsum dolor sit amet righteous, consectetur adipiscing elit, sed is a do eiusmod is tempor
                    incididunt ut labore et dolore magna dolor aliqua ullamco tempor laboris.</p>
                  <!-- Button trigger modal -->
                  <div class="VideoPopup">
                    <button type="button" class="btn btn-primary" data-toggle="modal"
                      data-target=".bd-example-modal-lg2"><i class="fas fa-plus-circle"></i></button>
                  </div>

                  <!-- Modal -->
                  <div class="modal fade bd-example-modal-lg2" tabindex="-1" role="dialog"
                    aria-labelledby="myLargeModalLabel2" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span
                              aria-hidden="true">&times;</span> </button>
                        </div>
                        <div class="modal-body">
                          <div class="row d-flex align-items-stretch">
                            <aside class="col-md-4">
                              <div class="card bg-light h-100 PopupCard">
                                <div class="card-body">
                                  <ul class="RatingList d-flex justify-content-between">
                                    <li>3426 Total Ratings</li>
                                    <li class="sepreter">|</li>
                                    <li>1438 Linked Account Ratings </li>
                                  </ul>
                                  <form>
                                    <div class="row">
                                      <aside class="col-8">
                                        <input type="email" class="form-control" id="RatingsWords"
                                          placeholder="Enter Rating Word(s) here">
                                      </aside>
                                      <aside class="col-4">
                                        <select class="form-control" id="Score">
                                          <option>Score</option>
                                          <option>2</option>
                                          <option>3</option>
                                          <option>4</option>
                                          <option>5</option>
                                        </select>
                                      </aside>
                                    </div>
                                  </form>
                                  <div class="scrollbar" id="style-1">
                                    <div class="force-overflow">
                                      <article class="PopupCardBox">
                                        <h5><a href="#">User Account</a></h5>
                                        <div class="d-flex justify-content-between">
                                          <div class="badge badge-secondary">10</div>
                                          <div class="badge badge-secondary d-flex flex-column">
                                            <p>The account owner's rating words, ratio number find emojis will appear
                                              here. <i class="fal fa-heart"></i> <i class="fal fa-smile"></i></p>
                                            <div class="d-flex justify-content-between PopupCardDC">
                                              <aside><a href="#"><span class="text-success"><i
                                                      class="far fa-arrow-up"></i></span> <span
                                                    class="PopupCardCount">1322</span></a> <a href="#"><span
                                                    class="text-danger"><i class="far fa-arrow-down"></i></span> <span
                                                    class="PopupCardCount">1322</span></a></aside>
                                              <aside><span class="PopupCardDate">jan 12 21</span><span
                                                  class="PopupCardDate">10:00 PM</span></aside>
                                            </div>
                                          </div>
                                          <div> <a href="#" class="arrowud text-success"> <i
                                                class="far fa-arrow-up"></i> </a> <a href="#"
                                              class="arrowud text-danger"> <i class="far fa-arrow-down"></i> </a>
                                          </div>
                                        </div>
                                      </article>
                                      <article class="PopupCardBox">
                                        <h5><a href="#">User Account</a></h5>
                                        <div class="d-flex justify-content-between">
                                          <div class="badge badge-secondary">10</div>
                                          <div class="badge badge-secondary d-flex flex-column">
                                            <p>The account owner's rating words, ratio number find emojis will appear
                                              here. <i class="fal fa-heart"></i> <i class="fal fa-smile"></i></p>
                                            <div class="d-flex justify-content-between PopupCardDC">
                                              <aside><a href="#"><span class="text-success"><i
                                                      class="far fa-arrow-up"></i></span> <span
                                                    class="PopupCardCount">1322</span></a> <a href="#"><span
                                                    class="text-danger"><i class="far fa-arrow-down"></i></span> <span
                                                    class="PopupCardCount">1322</span></a></aside>
                                              <aside><span class="PopupCardDate">jan 12 21</span><span
                                                  class="PopupCardDate">10:00 PM</span></aside>
                                            </div>
                                          </div>
                                          <div> <a href="#" class="arrowud text-success"> <i
                                                class="far fa-arrow-up"></i> </a> <a href="#"
                                              class="arrowud text-danger"> <i class="far fa-arrow-down"></i> </a>
                                          </div>
                                        </div>
                                      </article>
                                      <article class="PopupCardBox">
                                        <h5><a href="#">User Account</a></h5>
                                        <div class="d-flex justify-content-between">
                                          <div class="badge badge-secondary">10</div>
                                          <div class="badge badge-secondary d-flex flex-column">
                                            <p>The account owner's rating words, ratio number find emojis will appear
                                              here. <i class="fal fa-heart"></i> <i class="fal fa-smile"></i></p>
                                            <div class="d-flex justify-content-between PopupCardDC">
                                              <aside><a href="#"><span class="text-success"><i
                                                      class="far fa-arrow-up"></i></span> <span
                                                    class="PopupCardCount">1322</span></a> <a href="#"><span
                                                    class="text-danger"><i class="far fa-arrow-down"></i></span> <span
                                                    class="PopupCardCount">1322</span></a></aside>
                                              <aside><span class="PopupCardDate">jan 12 21</span><span
                                                  class="PopupCardDate">10:00 PM</span></aside>
                                            </div>
                                          </div>
                                          <div> <a href="#" class="arrowud text-success"> <i
                                                class="far fa-arrow-up"></i> </a> <a href="#"
                                              class="arrowud text-danger"> <i class="far fa-arrow-down"></i> </a>
                                          </div>
                                        </div>
                                      </article>
                                      <article class="PopupCardBox">
                                        <h5><a href="#">User Account</a></h5>
                                        <div class="d-flex justify-content-between">
                                          <div class="badge badge-secondary">10</div>
                                          <div class="badge badge-secondary d-flex flex-column">
                                            <p>The account owner's rating words, ratio number find emojis will appear
                                              here. <i class="fal fa-heart"></i> <i class="fal fa-smile"></i></p>
                                            <div class="d-flex justify-content-between PopupCardDC">
                                              <aside><a href="#"><span class="text-success"><i
                                                      class="far fa-arrow-up"></i></span> <span
                                                    class="PopupCardCount">1322</span></a> <a href="#"><span
                                                    class="text-danger"><i class="far fa-arrow-down"></i></span> <span
                                                    class="PopupCardCount">1322</span></a></aside>
                                              <aside><span class="PopupCardDate">jan 12 21</span><span
                                                  class="PopupCardDate">10:00 PM</span></aside>
                                            </div>
                                          </div>
                                          <div> <a href="#" class="arrowud text-success"> <i
                                                class="far fa-arrow-up"></i> </a> <a href="#"
                                              class="arrowud text-danger"> <i class="far fa-arrow-down"></i> </a>
                                          </div>
                                        </div>
                                      </article>
                                      <article class="PopupCardBox">
                                        <h5><a href="#">User Account</a></h5>
                                        <div class="d-flex justify-content-between">
                                          <div class="badge badge-secondary">10</div>
                                          <div class="badge badge-secondary d-flex flex-column">
                                            <p>The account owner's rating words, ratio number find emojis will appear
                                              here. <i class="fal fa-heart"></i> <i class="fal fa-smile"></i></p>
                                            <div class="d-flex justify-content-between PopupCardDC">
                                              <aside><a href="#"><span class="text-success"><i
                                                      class="far fa-arrow-up"></i></span> <span
                                                    class="PopupCardCount">1322</span></a> <a href="#"><span
                                                    class="text-danger"><i class="far fa-arrow-down"></i></span> <span
                                                    class="PopupCardCount">1322</span></a></aside>
                                              <aside><span class="PopupCardDate">jan 12 21</span><span
                                                  class="PopupCardDate">10:00 PM</span></aside>
                                            </div>
                                          </div>
                                          <div> <a href="#" class="arrowud text-success"> <i
                                                class="far fa-arrow-up"></i> </a> <a href="#"
                                              class="arrowud text-danger"> <i class="far fa-arrow-down"></i> </a>
                                          </div>
                                        </div>
                                      </article>
                                      <article class="PopupCardBox">
                                        <h5><a href="#">User Account</a></h5>
                                        <div class="d-flex justify-content-between">
                                          <div class="badge badge-secondary">10</div>
                                          <div class="badge badge-secondary d-flex flex-column">
                                            <p>The account owner's rating words, ratio number find emojis will appear
                                              here. <i class="fal fa-heart"></i> <i class="fal fa-smile"></i></p>
                                            <div class="d-flex justify-content-between PopupCardDC">
                                              <aside><a href="#"><span class="text-success"><i
                                                      class="far fa-arrow-up"></i></span> <span
                                                    class="PopupCardCount">1322</span></a> <a href="#"><span
                                                    class="text-danger"><i class="far fa-arrow-down"></i></span> <span
                                                    class="PopupCardCount">1322</span></a></aside>
                                              <aside><span class="PopupCardDate">jan 12 21</span><span
                                                  class="PopupCardDate">10:00 PM</span></aside>
                                            </div>
                                          </div>
                                          <div> <a href="#" class="arrowud text-success"> <i
                                                class="far fa-arrow-up"></i> </a> <a href="#"
                                              class="arrowud text-danger"> <i class="far fa-arrow-down"></i> </a>
                                          </div>
                                        </div>
                                      </article>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </aside>
                            <aside class="col-md-4">
                              <div class="AddVideo mt-0">
                                <div class="YoutubeLable"><span>Image</span></div>
                                <h4>Image Title</h4>
                                <div class="VideoUser"><img src="images/unnamed.jpg" alt=""></div>
                                <div class="imgvid"> <img src="images/img011.jpg" alt=""> </div>
                                <ul class="d-flex justify-content-between">
                                  <li><a href="#"><i class="fal fa-check"></i> <span>647</span></a></li>
                                  <li><a href="#"><i class="fal fa-times"></i> <span>99</span></a></li>
                                  <li><a href="#"><i class="far fa-dot-circle"></i> <span>1.5k</span></a></li>
                                  <li><a href="#"><i class="fas fa-exclamation-triangle"></i></a></li>
                                </ul>
                                <article class="PopupCardBox">
                                  <h5><a href="#">User Account</a></h5>
                                  <div class="d-flex justify-content-between">
                                    <div class="badge badge-secondary">10</div>
                                    <div class="badge badge-secondary d-flex flex-column">
                                      <p>The account owner's rating words, ratio number find emojis will appear here.
                                        <i class="fal fa-heart"></i> <i class="fal fa-smile"></i></p>
                                      <div class="d-flex justify-content-between PopupCardDC">
                                        <aside><a href="#"><span class="text-success"><i
                                                class="far fa-arrow-up"></i></span> <span
                                              class="PopupCardCount">1322</span></a> <a href="#"><span
                                              class="text-danger"><i class="far fa-arrow-down"></i></span> <span
                                              class="PopupCardCount">1322</span></a></aside>
                                        <aside><span class="PopupCardDate">jan 12 21</span><span
                                            class="PopupCardDate">10:00 PM</span></aside>
                                      </div>
                                    </div>
                                    <div> <a href="#" class="arrowud text-success"> <i class="far fa-arrow-up"></i>
                                      </a> <a href="#" class="arrowud text-danger"> <i class="far fa-arrow-down"></i>
                                      </a> </div>
                                  </div>
                                </article>
                                <p class="date"><span>1,280,707 views</span> <span>16 Jan 2021</span></p>
                                <p>On the other hand, we denounce with righteous from indignation and dislike men who
                                  are so beguiled and demoralized by the charms of pleasure of the moment, blinded by
                                  desire, that they cannot foresee the pain and trouble that are bound to ensue.
                                  Dolore magna dolor aliqua ullamco laboris righteous from indignation and dislike men
                                  who are so beguiled and demoralized.</p>
                              </div>
                            </aside>
                            <aside class="col-md-4">
                              <div class="card bg-light h-100 PopupCard">
                                <div class="card-body">
                                  <ul class="RatingList d-flex justify-content-between">
                                    <li>3426 Total Ratings</li>
                                    <li class="sepreter">|</li>
                                    <li>1438 Linked Account Ratings </li>
                                  </ul>
                                  <form>
                                    <div class="row">
                                      <aside class="col-8">
                                        <input type="email" class="form-control" id="RatingsWords"
                                          placeholder="Enter Rating Word(s) here">
                                      </aside>
                                      <aside class="col-4">
                                        <select class="form-control" id="Score">
                                          <option>Score</option>
                                          <option>2</option>
                                          <option>3</option>
                                          <option>4</option>
                                          <option>5</option>
                                        </select>
                                      </aside>
                                    </div>
                                  </form>
                                  <div class="scrollbar" id="style-1">
                                    <div class="force-overflow">
                                      <article class="PopupCardBox">
                                        <h5><a href="#">User Account</a></h5>
                                        <div class="d-flex justify-content-between">
                                          <div class="badge badge-secondary">10</div>
                                          <div class="badge badge-secondary d-flex flex-column">
                                            <p>The account owner's rating words, ratio number find emojis will appear
                                              here. <i class="fal fa-heart"></i> <i class="fal fa-smile"></i></p>
                                            <div class="d-flex justify-content-between PopupCardDC">
                                              <aside><a href="#"><span class="text-success"><i
                                                      class="far fa-arrow-up"></i></span> <span
                                                    class="PopupCardCount">1322</span></a> <a href="#"><span
                                                    class="text-danger"><i class="far fa-arrow-down"></i></span> <span
                                                    class="PopupCardCount">1322</span></a></aside>
                                              <aside><span class="PopupCardDate">jan 12 21</span><span
                                                  class="PopupCardDate">10:00 PM</span></aside>
                                            </div>
                                          </div>
                                          <div> <a href="#" class="arrowud text-success"> <i
                                                class="far fa-arrow-up"></i> </a> <a href="#"
                                              class="arrowud text-danger"> <i class="far fa-arrow-down"></i> </a>
                                          </div>
                                        </div>
                                      </article>
                                      <article class="PopupCardBox">
                                        <h5><a href="#">User Account</a></h5>
                                        <div class="d-flex justify-content-between">
                                          <div class="badge badge-secondary">10</div>
                                          <div class="badge badge-secondary d-flex flex-column">
                                            <p>The account owner's rating words, ratio number find emojis will appear
                                              here. <i class="fal fa-heart"></i> <i class="fal fa-smile"></i></p>
                                            <div class="d-flex justify-content-between PopupCardDC">
                                              <aside><a href="#"><span class="text-success"><i
                                                      class="far fa-arrow-up"></i></span> <span
                                                    class="PopupCardCount">1322</span></a> <a href="#"><span
                                                    class="text-danger"><i class="far fa-arrow-down"></i></span> <span
                                                    class="PopupCardCount">1322</span></a></aside>
                                              <aside><span class="PopupCardDate">jan 12 21</span><span
                                                  class="PopupCardDate">10:00 PM</span></aside>
                                            </div>
                                          </div>
                                          <div> <a href="#" class="arrowud text-success"> <i
                                                class="far fa-arrow-up"></i> </a> <a href="#"
                                              class="arrowud text-danger"> <i class="far fa-arrow-down"></i> </a>
                                          </div>
                                        </div>
                                      </article>
                                      <article class="PopupCardBox">
                                        <h5><a href="#">User Account</a></h5>
                                        <div class="d-flex justify-content-between">
                                          <div class="badge badge-secondary">10</div>
                                          <div class="badge badge-secondary d-flex flex-column">
                                            <p>The account owner's rating words, ratio number find emojis will appear
                                              here. <i class="fal fa-heart"></i> <i class="fal fa-smile"></i></p>
                                            <div class="d-flex justify-content-between PopupCardDC">
                                              <aside><a href="#"><span class="text-success"><i
                                                      class="far fa-arrow-up"></i></span> <span
                                                    class="PopupCardCount">1322</span></a> <a href="#"><span
                                                    class="text-danger"><i class="far fa-arrow-down"></i></span> <span
                                                    class="PopupCardCount">1322</span></a></aside>
                                              <aside><span class="PopupCardDate">jan 12 21</span><span
                                                  class="PopupCardDate">10:00 PM</span></aside>
                                            </div>
                                          </div>
                                          <div> <a href="#" class="arrowud text-success"> <i
                                                class="far fa-arrow-up"></i> </a> <a href="#"
                                              class="arrowud text-danger"> <i class="far fa-arrow-down"></i> </a>
                                          </div>
                                        </div>
                                      </article>
                                      <article class="PopupCardBox">
                                        <h5><a href="#">User Account</a></h5>
                                        <div class="d-flex justify-content-between">
                                          <div class="badge badge-secondary">10</div>
                                          <div class="badge badge-secondary d-flex flex-column">
                                            <p>The account owner's rating words, ratio number find emojis will appear
                                              here. <i class="fal fa-heart"></i> <i class="fal fa-smile"></i></p>
                                            <div class="d-flex justify-content-between PopupCardDC">
                                              <aside><a href="#"><span class="text-success"><i
                                                      class="far fa-arrow-up"></i></span> <span
                                                    class="PopupCardCount">1322</span></a> <a href="#"><span
                                                    class="text-danger"><i class="far fa-arrow-down"></i></span> <span
                                                    class="PopupCardCount">1322</span></a></aside>
                                              <aside><span class="PopupCardDate">jan 12 21</span><span
                                                  class="PopupCardDate">10:00 PM</span></aside>
                                            </div>
                                          </div>
                                          <div> <a href="#" class="arrowud text-success"> <i
                                                class="far fa-arrow-up"></i> </a> <a href="#"
                                              class="arrowud text-danger"> <i class="far fa-arrow-down"></i> </a>
                                          </div>
                                        </div>
                                      </article>
                                      <article class="PopupCardBox">
                                        <h5><a href="#">User Account</a></h5>
                                        <div class="d-flex justify-content-between">
                                          <div class="badge badge-secondary">10</div>
                                          <div class="badge badge-secondary d-flex flex-column">
                                            <p>The account owner's rating words, ratio number find emojis will appear
                                              here. <i class="fal fa-heart"></i> <i class="fal fa-smile"></i></p>
                                            <div class="d-flex justify-content-between PopupCardDC">
                                              <aside><a href="#"><span class="text-success"><i
                                                      class="far fa-arrow-up"></i></span> <span
                                                    class="PopupCardCount">1322</span></a> <a href="#"><span
                                                    class="text-danger"><i class="far fa-arrow-down"></i></span> <span
                                                    class="PopupCardCount">1322</span></a></aside>
                                              <aside><span class="PopupCardDate">jan 12 21</span><span
                                                  class="PopupCardDate">10:00 PM</span></aside>
                                            </div>
                                          </div>
                                          <div> <a href="#" class="arrowud text-success"> <i
                                                class="far fa-arrow-up"></i> </a> <a href="#"
                                              class="arrowud text-danger"> <i class="far fa-arrow-down"></i> </a>
                                          </div>
                                        </div>
                                      </article>
                                      <article class="PopupCardBox">
                                        <h5><a href="#">User Account</a></h5>
                                        <div class="d-flex justify-content-between">
                                          <div class="badge badge-secondary">10</div>
                                          <div class="badge badge-secondary d-flex flex-column">
                                            <p>The account owner's rating words, ratio number find emojis will appear
                                              here. <i class="fal fa-heart"></i> <i class="fal fa-smile"></i></p>
                                            <div class="d-flex justify-content-between PopupCardDC">
                                              <aside><a href="#"><span class="text-success"><i
                                                      class="far fa-arrow-up"></i></span> <span
                                                    class="PopupCardCount">1322</span></a> <a href="#"><span
                                                    class="text-danger"><i class="far fa-arrow-down"></i></span> <span
                                                    class="PopupCardCount">1322</span></a></aside>
                                              <aside><span class="PopupCardDate">jan 12 21</span><span
                                                  class="PopupCardDate">10:00 PM</span></aside>
                                            </div>
                                          </div>
                                          <div> <a href="#" class="arrowud text-success"> <i
                                                class="far fa-arrow-up"></i> </a> <a href="#"
                                              class="arrowud text-danger"> <i class="far fa-arrow-down"></i> </a>
                                          </div>
                                        </div>
                                      </article>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </aside>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </aside>
              <aside class="col-lg-3 col-md-6 col-sm-6">
                <div class="AddVideo">
                  <div class="YoutubeLable"><span>YouTube</span></div>
                  <h4>Video Title</h4>
                  <div class="VideoUser"><img src="images/unnamed.jpg" alt=""></div>
                  <div class="imgvid">
                    <iframe src="https://www.youtube.com/embed/9xwazD5SyVg" frameborder="0"></iframe>
                  </div>
                  <ul class="d-flex justify-content-between">
                    <li><a href="#"><i class="fal fa-check"></i> <span>647</span></a></li>
                    <li><a href="#"><i class="fal fa-times"></i> <span>99</span></a></li>
                    <li><a href="#"><i class="far fa-dot-circle"></i> <span>1.5k</span></a></li>
                    <li><a href="#"><i class="fas fa-exclamation-triangle"></i></a></li>
                  </ul>
                  <p class="date"><span>1,280,707 views</span> <span>16 Jan 2021</span></p>
                  <p class=""><a href="other-user-account.php">John Marteen</a></p>
                  <p>Lorem ipsum dolor sit amet righteous, consectetur adipiscing elit, sed is a do eiusmod is tempor
                    incididunt ut labore et dolore magna dolor aliqua ullamco tempor laboris.</p>
                  <!-- Button trigger modal -->
                  <div class="VideoPopup">
                    <button type="button" class="btn btn-primary" data-toggle="modal"
                      data-target=".bd-example-modal-lg3"><i class="fas fa-plus-circle"></i></button>
                  </div>

                  <!-- Modal -->
                  <div class="modal fade bd-example-modal-lg3" tabindex="-1" role="dialog"
                    aria-labelledby="myLargeModalLabel3" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span
                              aria-hidden="true">&times;</span> </button>
                        </div>
                        <div class="modal-body">
                          <div class="row d-flex align-items-stretch">
                            <aside class="col-md-4">
                              <div class="card bg-light h-100 PopupCard">
                                <div class="card-body">
                                  <ul class="RatingList d-flex justify-content-between">
                                    <li>3426 Total Ratings</li>
                                    <li class="sepreter">|</li>
                                    <li>1438 Linked Account Ratings </li>
                                  </ul>
                                  <form>
                                    <div class="row">
                                      <aside class="col-8">
                                        <input type="email" class="form-control" id="RatingsWords"
                                          placeholder="Enter Rating Word(s) here">
                                      </aside>
                                      <aside class="col-4">
                                        <select class="form-control" id="Score">
                                          <option>Score</option>
                                          <option>2</option>
                                          <option>3</option>
                                          <option>4</option>
                                          <option>5</option>
                                        </select>
                                      </aside>
                                    </div>
                                  </form>
                                  <div class="scrollbar" id="style-1">
                                    <div class="force-overflow">
                                      <article class="PopupCardBox">
                                        <h5><a href="#">User Account</a></h5>
                                        <div class="d-flex justify-content-between">
                                          <div class="badge badge-secondary">10</div>
                                          <div class="badge badge-secondary d-flex flex-column">
                                            <p>The account owner's rating words, ratio number find emojis will appear
                                              here. <i class="fal fa-heart"></i> <i class="fal fa-smile"></i></p>
                                            <div class="d-flex justify-content-between PopupCardDC">
                                              <aside><a href="#"><span class="text-success"><i
                                                      class="far fa-arrow-up"></i></span> <span
                                                    class="PopupCardCount">1322</span></a> <a href="#"><span
                                                    class="text-danger"><i class="far fa-arrow-down"></i></span> <span
                                                    class="PopupCardCount">1322</span></a></aside>
                                              <aside><span class="PopupCardDate">jan 12 21</span><span
                                                  class="PopupCardDate">10:00 PM</span></aside>
                                            </div>
                                          </div>
                                          <div> <a href="#" class="arrowud text-success"> <i
                                                class="far fa-arrow-up"></i> </a> <a href="#"
                                              class="arrowud text-danger"> <i class="far fa-arrow-down"></i> </a>
                                          </div>
                                        </div>
                                      </article>
                                      <article class="PopupCardBox">
                                        <h5><a href="#">User Account</a></h5>
                                        <div class="d-flex justify-content-between">
                                          <div class="badge badge-secondary">10</div>
                                          <div class="badge badge-secondary d-flex flex-column">
                                            <p>The account owner's rating words, ratio number find emojis will appear
                                              here. <i class="fal fa-heart"></i> <i class="fal fa-smile"></i></p>
                                            <div class="d-flex justify-content-between PopupCardDC">
                                              <aside><a href="#"><span class="text-success"><i
                                                      class="far fa-arrow-up"></i></span> <span
                                                    class="PopupCardCount">1322</span></a> <a href="#"><span
                                                    class="text-danger"><i class="far fa-arrow-down"></i></span> <span
                                                    class="PopupCardCount">1322</span></a></aside>
                                              <aside><span class="PopupCardDate">jan 12 21</span><span
                                                  class="PopupCardDate">10:00 PM</span></aside>
                                            </div>
                                          </div>
                                          <div> <a href="#" class="arrowud text-success"> <i
                                                class="far fa-arrow-up"></i> </a> <a href="#"
                                              class="arrowud text-danger"> <i class="far fa-arrow-down"></i> </a>
                                          </div>
                                        </div>
                                      </article>
                                      <article class="PopupCardBox">
                                        <h5><a href="#">User Account</a></h5>
                                        <div class="d-flex justify-content-between">
                                          <div class="badge badge-secondary">10</div>
                                          <div class="badge badge-secondary d-flex flex-column">
                                            <p>The account owner's rating words, ratio number find emojis will appear
                                              here. <i class="fal fa-heart"></i> <i class="fal fa-smile"></i></p>
                                            <div class="d-flex justify-content-between PopupCardDC">
                                              <aside><a href="#"><span class="text-success"><i
                                                      class="far fa-arrow-up"></i></span> <span
                                                    class="PopupCardCount">1322</span></a> <a href="#"><span
                                                    class="text-danger"><i class="far fa-arrow-down"></i></span> <span
                                                    class="PopupCardCount">1322</span></a></aside>
                                              <aside><span class="PopupCardDate">jan 12 21</span><span
                                                  class="PopupCardDate">10:00 PM</span></aside>
                                            </div>
                                          </div>
                                          <div> <a href="#" class="arrowud text-success"> <i
                                                class="far fa-arrow-up"></i> </a> <a href="#"
                                              class="arrowud text-danger"> <i class="far fa-arrow-down"></i> </a>
                                          </div>
                                        </div>
                                      </article>
                                      <article class="PopupCardBox">
                                        <h5><a href="#">User Account</a></h5>
                                        <div class="d-flex justify-content-between">
                                          <div class="badge badge-secondary">10</div>
                                          <div class="badge badge-secondary d-flex flex-column">
                                            <p>The account owner's rating words, ratio number find emojis will appear
                                              here. <i class="fal fa-heart"></i> <i class="fal fa-smile"></i></p>
                                            <div class="d-flex justify-content-between PopupCardDC">
                                              <aside><a href="#"><span class="text-success"><i
                                                      class="far fa-arrow-up"></i></span> <span
                                                    class="PopupCardCount">1322</span></a> <a href="#"><span
                                                    class="text-danger"><i class="far fa-arrow-down"></i></span> <span
                                                    class="PopupCardCount">1322</span></a></aside>
                                              <aside><span class="PopupCardDate">jan 12 21</span><span
                                                  class="PopupCardDate">10:00 PM</span></aside>
                                            </div>
                                          </div>
                                          <div> <a href="#" class="arrowud text-success"> <i
                                                class="far fa-arrow-up"></i> </a> <a href="#"
                                              class="arrowud text-danger"> <i class="far fa-arrow-down"></i> </a>
                                          </div>
                                        </div>
                                      </article>
                                      <article class="PopupCardBox">
                                        <h5><a href="#">User Account</a></h5>
                                        <div class="d-flex justify-content-between">
                                          <div class="badge badge-secondary">10</div>
                                          <div class="badge badge-secondary d-flex flex-column">
                                            <p>The account owner's rating words, ratio number find emojis will appear
                                              here. <i class="fal fa-heart"></i> <i class="fal fa-smile"></i></p>
                                            <div class="d-flex justify-content-between PopupCardDC">
                                              <aside><a href="#"><span class="text-success"><i
                                                      class="far fa-arrow-up"></i></span> <span
                                                    class="PopupCardCount">1322</span></a> <a href="#"><span
                                                    class="text-danger"><i class="far fa-arrow-down"></i></span> <span
                                                    class="PopupCardCount">1322</span></a></aside>
                                              <aside><span class="PopupCardDate">jan 12 21</span><span
                                                  class="PopupCardDate">10:00 PM</span></aside>
                                            </div>
                                          </div>
                                          <div> <a href="#" class="arrowud text-success"> <i
                                                class="far fa-arrow-up"></i> </a> <a href="#"
                                              class="arrowud text-danger"> <i class="far fa-arrow-down"></i> </a>
                                          </div>
                                        </div>
                                      </article>
                                      <article class="PopupCardBox">
                                        <h5><a href="#">User Account</a></h5>
                                        <div class="d-flex justify-content-between">
                                          <div class="badge badge-secondary">10</div>
                                          <div class="badge badge-secondary d-flex flex-column">
                                            <p>The account owner's rating words, ratio number find emojis will appear
                                              here. <i class="fal fa-heart"></i> <i class="fal fa-smile"></i></p>
                                            <div class="d-flex justify-content-between PopupCardDC">
                                              <aside><a href="#"><span class="text-success"><i
                                                      class="far fa-arrow-up"></i></span> <span
                                                    class="PopupCardCount">1322</span></a> <a href="#"><span
                                                    class="text-danger"><i class="far fa-arrow-down"></i></span> <span
                                                    class="PopupCardCount">1322</span></a></aside>
                                              <aside><span class="PopupCardDate">jan 12 21</span><span
                                                  class="PopupCardDate">10:00 PM</span></aside>
                                            </div>
                                          </div>
                                          <div> <a href="#" class="arrowud text-success"> <i
                                                class="far fa-arrow-up"></i> </a> <a href="#"
                                              class="arrowud text-danger"> <i class="far fa-arrow-down"></i> </a>
                                          </div>
                                        </div>
                                      </article>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </aside>
                            <aside class="col-md-4">
                              <div class="AddVideo mt-0">
                                <div class="YoutubeLable"><span>YouTube</span></div>
                                <div class="CategoryName"><a href="#">Category Name</a></div>
                                <h4>Video Title</h4>
                                <div class="VideoUser"><img src="images/unnamed.jpg" alt=""></div>
                                <div class="imgvid">
                                  <iframe src="https://www.youtube.com/embed/9xwazD5SyVg" frameborder="0"></iframe>
                                </div>
                                <ul class="d-flex justify-content-between">
                                  <li><a href="#"><i class="fal fa-check"></i> <span>647</span></a></li>
                                  <li><a href="#"><i class="fal fa-times"></i> <span>99</span></a></li>
                                  <li><a href="#"><i class="far fa-dot-circle"></i> <span>1.5k</span></a></li>
                                  <li><a href="#"><i class="fas fa-exclamation-triangle"></i></a></li>
                                </ul>
                                <article class="PopupCardBox">
                                  <h5><a href="#">User Account</a></h5>
                                  <div class="d-flex justify-content-between">
                                    <div class="badge badge-secondary">10</div>
                                    <div class="badge badge-secondary d-flex flex-column">
                                      <p>The account owner's rating words, ratio number find emojis will appear here.
                                        <i class="fal fa-heart"></i> <i class="fal fa-smile"></i></p>
                                      <div class="d-flex justify-content-between PopupCardDC">
                                        <aside><a href="#"><span class="text-success"><i
                                                class="far fa-arrow-up"></i></span> <span
                                              class="PopupCardCount">1322</span></a> <a href="#"><span
                                              class="text-danger"><i class="far fa-arrow-down"></i></span> <span
                                              class="PopupCardCount">1322</span></a></aside>
                                        <aside><span class="PopupCardDate">jan 12 21</span><span
                                            class="PopupCardDate">10:00 PM</span></aside>
                                      </div>
                                    </div>
                                    <div> <a href="#" class="arrowud text-success"> <i class="far fa-arrow-up"></i>
                                      </a> <a href="#" class="arrowud text-danger"> <i class="far fa-arrow-down"></i>
                                      </a> </div>
                                  </div>
                                </article>
                                <p class="date"><span>1,280,707 views</span> <span>16 Jan 2021</span></p>
                                <p>On the other hand, we denounce with righteous from indignation and dislike men who
                                  are so beguiled and demoralized by the charms of pleasure of the moment, blinded by
                                  desire, that they cannot foresee the pain and trouble that are bound to ensue.
                                  Dolore magna dolor aliqua ullamco laboris righteous from indignation and dislike men
                                  who are so beguiled and demoralized.</p>
                              </div>
                            </aside>
                            <aside class="col-md-4">
                              <div class="card bg-light h-100 PopupCard">
                                <div class="card-body">
                                  <ul class="RatingList d-flex justify-content-between">
                                    <li>3426 Total Ratings</li>
                                    <li class="sepreter">|</li>
                                    <li>1438 Linked Account Ratings </li>
                                  </ul>
                                  <form>
                                    <div class="row">
                                      <aside class="col-8">
                                        <input type="email" class="form-control" id="RatingsWords"
                                          placeholder="Enter Rating Word(s) here">
                                      </aside>
                                      <aside class="col-4">
                                        <select class="form-control" id="Score">
                                          <option>Score</option>
                                          <option>2</option>
                                          <option>3</option>
                                          <option>4</option>
                                          <option>5</option>
                                        </select>
                                      </aside>
                                    </div>
                                  </form>
                                  <div class="scrollbar" id="style-1">
                                    <div class="force-overflow">
                                      <article class="PopupCardBox">
                                        <h5><a href="#">User Account</a></h5>
                                        <div class="d-flex justify-content-between">
                                          <div class="badge badge-secondary">10</div>
                                          <div class="badge badge-secondary d-flex flex-column">
                                            <p>The account owner's rating words, ratio number find emojis will appear
                                              here. <i class="fal fa-heart"></i> <i class="fal fa-smile"></i></p>
                                            <div class="d-flex justify-content-between PopupCardDC">
                                              <aside><a href="#"><span class="text-success"><i
                                                      class="far fa-arrow-up"></i></span> <span
                                                    class="PopupCardCount">1322</span></a> <a href="#"><span
                                                    class="text-danger"><i class="far fa-arrow-down"></i></span> <span
                                                    class="PopupCardCount">1322</span></a></aside>
                                              <aside><span class="PopupCardDate">jan 12 21</span><span
                                                  class="PopupCardDate">10:00 PM</span></aside>
                                            </div>
                                          </div>
                                          <div> <a href="#" class="arrowud text-success"> <i
                                                class="far fa-arrow-up"></i> </a> <a href="#"
                                              class="arrowud text-danger"> <i class="far fa-arrow-down"></i> </a>
                                          </div>
                                        </div>
                                      </article>
                                      <article class="PopupCardBox">
                                        <h5><a href="#">User Account</a></h5>
                                        <div class="d-flex justify-content-between">
                                          <div class="badge badge-secondary">10</div>
                                          <div class="badge badge-secondary d-flex flex-column">
                                            <p>The account owner's rating words, ratio number find emojis will appear
                                              here. <i class="fal fa-heart"></i> <i class="fal fa-smile"></i></p>
                                            <div class="d-flex justify-content-between PopupCardDC">
                                              <aside><a href="#"><span class="text-success"><i
                                                      class="far fa-arrow-up"></i></span> <span
                                                    class="PopupCardCount">1322</span></a> <a href="#"><span
                                                    class="text-danger"><i class="far fa-arrow-down"></i></span> <span
                                                    class="PopupCardCount">1322</span></a></aside>
                                              <aside><span class="PopupCardDate">jan 12 21</span><span
                                                  class="PopupCardDate">10:00 PM</span></aside>
                                            </div>
                                          </div>
                                          <div> <a href="#" class="arrowud text-success"> <i
                                                class="far fa-arrow-up"></i> </a> <a href="#"
                                              class="arrowud text-danger"> <i class="far fa-arrow-down"></i> </a>
                                          </div>
                                        </div>
                                      </article>
                                      <article class="PopupCardBox">
                                        <h5><a href="#">User Account</a></h5>
                                        <div class="d-flex justify-content-between">
                                          <div class="badge badge-secondary">10</div>
                                          <div class="badge badge-secondary d-flex flex-column">
                                            <p>The account owner's rating words, ratio number find emojis will appear
                                              here. <i class="fal fa-heart"></i> <i class="fal fa-smile"></i></p>
                                            <div class="d-flex justify-content-between PopupCardDC">
                                              <aside><a href="#"><span class="text-success"><i
                                                      class="far fa-arrow-up"></i></span> <span
                                                    class="PopupCardCount">1322</span></a> <a href="#"><span
                                                    class="text-danger"><i class="far fa-arrow-down"></i></span> <span
                                                    class="PopupCardCount">1322</span></a></aside>
                                              <aside><span class="PopupCardDate">jan 12 21</span><span
                                                  class="PopupCardDate">10:00 PM</span></aside>
                                            </div>
                                          </div>
                                          <div> <a href="#" class="arrowud text-success"> <i
                                                class="far fa-arrow-up"></i> </a> <a href="#"
                                              class="arrowud text-danger"> <i class="far fa-arrow-down"></i> </a>
                                          </div>
                                        </div>
                                      </article>
                                      <article class="PopupCardBox">
                                        <h5><a href="#">User Account</a></h5>
                                        <div class="d-flex justify-content-between">
                                          <div class="badge badge-secondary">10</div>
                                          <div class="badge badge-secondary d-flex flex-column">
                                            <p>The account owner's rating words, ratio number find emojis will appear
                                              here. <i class="fal fa-heart"></i> <i class="fal fa-smile"></i></p>
                                            <div class="d-flex justify-content-between PopupCardDC">
                                              <aside><a href="#"><span class="text-success"><i
                                                      class="far fa-arrow-up"></i></span> <span
                                                    class="PopupCardCount">1322</span></a> <a href="#"><span
                                                    class="text-danger"><i class="far fa-arrow-down"></i></span> <span
                                                    class="PopupCardCount">1322</span></a></aside>
                                              <aside><span class="PopupCardDate">jan 12 21</span><span
                                                  class="PopupCardDate">10:00 PM</span></aside>
                                            </div>
                                          </div>
                                          <div> <a href="#" class="arrowud text-success"> <i
                                                class="far fa-arrow-up"></i> </a> <a href="#"
                                              class="arrowud text-danger"> <i class="far fa-arrow-down"></i> </a>
                                          </div>
                                        </div>
                                      </article>
                                      <article class="PopupCardBox">
                                        <h5><a href="#">User Account</a></h5>
                                        <div class="d-flex justify-content-between">
                                          <div class="badge badge-secondary">10</div>
                                          <div class="badge badge-secondary d-flex flex-column">
                                            <p>The account owner's rating words, ratio number find emojis will appear
                                              here. <i class="fal fa-heart"></i> <i class="fal fa-smile"></i></p>
                                            <div class="d-flex justify-content-between PopupCardDC">
                                              <aside><a href="#"><span class="text-success"><i
                                                      class="far fa-arrow-up"></i></span> <span
                                                    class="PopupCardCount">1322</span></a> <a href="#"><span
                                                    class="text-danger"><i class="far fa-arrow-down"></i></span> <span
                                                    class="PopupCardCount">1322</span></a></aside>
                                              <aside><span class="PopupCardDate">jan 12 21</span><span
                                                  class="PopupCardDate">10:00 PM</span></aside>
                                            </div>
                                          </div>
                                          <div> <a href="#" class="arrowud text-success"> <i
                                                class="far fa-arrow-up"></i> </a> <a href="#"
                                              class="arrowud text-danger"> <i class="far fa-arrow-down"></i> </a>
                                          </div>
                                        </div>
                                      </article>
                                      <article class="PopupCardBox">
                                        <h5><a href="#">User Account</a></h5>
                                        <div class="d-flex justify-content-between">
                                          <div class="badge badge-secondary">10</div>
                                          <div class="badge badge-secondary d-flex flex-column">
                                            <p>The account owner's rating words, ratio number find emojis will appear
                                              here. <i class="fal fa-heart"></i> <i class="fal fa-smile"></i></p>
                                            <div class="d-flex justify-content-between PopupCardDC">
                                              <aside><a href="#"><span class="text-success"><i
                                                      class="far fa-arrow-up"></i></span> <span
                                                    class="PopupCardCount">1322</span></a> <a href="#"><span
                                                    class="text-danger"><i class="far fa-arrow-down"></i></span> <span
                                                    class="PopupCardCount">1322</span></a></aside>
                                              <aside><span class="PopupCardDate">jan 12 21</span><span
                                                  class="PopupCardDate">10:00 PM</span></aside>
                                            </div>
                                          </div>
                                          <div> <a href="#" class="arrowud text-success"> <i
                                                class="far fa-arrow-up"></i> </a> <a href="#"
                                              class="arrowud text-danger"> <i class="far fa-arrow-down"></i> </a>
                                          </div>
                                        </div>
                                      </article>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </aside>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </aside>
              <aside class="col-lg-3 col-md-6 col-sm-6">
                <div class="AddVideo">
                  <div class="YoutubeLable"><span>YouTube</span></div>
                  <h4>Video Title</h4>
                  <div class="VideoUser"><img src="images/unnamed.jpg" alt=""></div>
                  <div class="imgvid">
                    <iframe src="https://www.youtube.com/embed/9xwazD5SyVg" frameborder="0"></iframe>
                  </div>
                  <ul class="d-flex justify-content-between">
                    <li><a href="#"><i class="fal fa-check"></i> <span>647</span></a></li>
                    <li><a href="#"><i class="fal fa-times"></i> <span>99</span></a></li>
                    <li><a href="#"><i class="far fa-dot-circle"></i> <span>1.5k</span></a></li>
                    <li><a href="#"><i class="fas fa-exclamation-triangle"></i></a></li>
                  </ul>
                  <p class="date"><span>1,280,707 views</span> <span>16 Jan 2021</span></p>
                  <p class=""><a href="other-user-account.php">John Marteen</a></p>

                  <p>Lorem ipsum dolor sit amet righteous, consectetur adipiscing elit, sed is a do eiusmod is tempor
                    incididunt ut labore et dolore magna dolor aliqua ullamco tempor laboris.</p>
                  <!-- Button trigger modal -->
                  <div class="VideoPopup">
                    <button type="button" class="btn btn-primary" data-toggle="modal"
                      data-target=".bd-example-modal-lg4"><i class="fas fa-plus-circle"></i></button>
                  </div>

                  <!-- Modal -->
                  <div class="modal fade bd-example-modal-lg4" tabindex="-1" role="dialog"
                    aria-labelledby="myLargeModalLabel4" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span
                              aria-hidden="true">&times;</span> </button>
                        </div>
                        <div class="modal-body">
                          <div class="row d-flex align-items-stretch">
                            <aside class="col-md-4">
                              <div class="card bg-light h-100 PopupCard">
                                <div class="card-body">
                                  <ul class="RatingList d-flex justify-content-between">
                                    <li>3426 Total Ratings</li>
                                    <li class="sepreter">|</li>
                                    <li>1438 Linked Account Ratings </li>
                                  </ul>
                                  <form>
                                    <div class="row">
                                      <aside class="col-8">
                                        <input type="email" class="form-control" id="RatingsWords"
                                          placeholder="Enter Rating Word(s) here">
                                      </aside>
                                      <aside class="col-4">
                                        <select class="form-control" id="Score">
                                          <option>Score</option>
                                          <option>2</option>
                                          <option>3</option>
                                          <option>4</option>
                                          <option>5</option>
                                        </select>
                                      </aside>
                                    </div>
                                  </form>
                                  <div class="scrollbar" id="style-1">
                                    <div class="force-overflow">
                                      <article class="PopupCardBox">
                                        <h5><a href="#">User Account</a></h5>
                                        <div class="d-flex justify-content-between">
                                          <div class="badge badge-secondary">10</div>
                                          <div class="badge badge-secondary d-flex flex-column">
                                            <p>The account owner's rating words, ratio number find emojis will appear
                                              here. <i class="fal fa-heart"></i> <i class="fal fa-smile"></i></p>
                                            <div class="d-flex justify-content-between PopupCardDC">
                                              <aside><a href="#"><span class="text-success"><i
                                                      class="far fa-arrow-up"></i></span> <span
                                                    class="PopupCardCount">1322</span></a> <a href="#"><span
                                                    class="text-danger"><i class="far fa-arrow-down"></i></span> <span
                                                    class="PopupCardCount">1322</span></a></aside>
                                              <aside><span class="PopupCardDate">jan 12 21</span><span
                                                  class="PopupCardDate">10:00 PM</span></aside>
                                            </div>
                                          </div>
                                          <div> <a href="#" class="arrowud text-success"> <i
                                                class="far fa-arrow-up"></i> </a> <a href="#"
                                              class="arrowud text-danger"> <i class="far fa-arrow-down"></i> </a>
                                          </div>
                                        </div>
                                      </article>
                                      <article class="PopupCardBox">
                                        <h5><a href="#">User Account</a></h5>
                                        <div class="d-flex justify-content-between">
                                          <div class="badge badge-secondary">10</div>
                                          <div class="badge badge-secondary d-flex flex-column">
                                            <p>The account owner's rating words, ratio number find emojis will appear
                                              here. <i class="fal fa-heart"></i> <i class="fal fa-smile"></i></p>
                                            <div class="d-flex justify-content-between PopupCardDC">
                                              <aside><a href="#"><span class="text-success"><i
                                                      class="far fa-arrow-up"></i></span> <span
                                                    class="PopupCardCount">1322</span></a> <a href="#"><span
                                                    class="text-danger"><i class="far fa-arrow-down"></i></span> <span
                                                    class="PopupCardCount">1322</span></a></aside>
                                              <aside><span class="PopupCardDate">jan 12 21</span><span
                                                  class="PopupCardDate">10:00 PM</span></aside>
                                            </div>
                                          </div>
                                          <div> <a href="#" class="arrowud text-success"> <i
                                                class="far fa-arrow-up"></i> </a> <a href="#"
                                              class="arrowud text-danger"> <i class="far fa-arrow-down"></i> </a>
                                          </div>
                                        </div>
                                      </article>
                                      <article class="PopupCardBox">
                                        <h5><a href="#">User Account</a></h5>
                                        <div class="d-flex justify-content-between">
                                          <div class="badge badge-secondary">10</div>
                                          <div class="badge badge-secondary d-flex flex-column">
                                            <p>The account owner's rating words, ratio number find emojis will appear
                                              here. <i class="fal fa-heart"></i> <i class="fal fa-smile"></i></p>
                                            <div class="d-flex justify-content-between PopupCardDC">
                                              <aside><a href="#"><span class="text-success"><i
                                                      class="far fa-arrow-up"></i></span> <span
                                                    class="PopupCardCount">1322</span></a> <a href="#"><span
                                                    class="text-danger"><i class="far fa-arrow-down"></i></span> <span
                                                    class="PopupCardCount">1322</span></a></aside>
                                              <aside><span class="PopupCardDate">jan 12 21</span><span
                                                  class="PopupCardDate">10:00 PM</span></aside>
                                            </div>
                                          </div>
                                          <div> <a href="#" class="arrowud text-success"> <i
                                                class="far fa-arrow-up"></i> </a> <a href="#"
                                              class="arrowud text-danger"> <i class="far fa-arrow-down"></i> </a>
                                          </div>
                                        </div>
                                      </article>
                                      <article class="PopupCardBox">
                                        <h5><a href="#">User Account</a></h5>
                                        <div class="d-flex justify-content-between">
                                          <div class="badge badge-secondary">10</div>
                                          <div class="badge badge-secondary d-flex flex-column">
                                            <p>The account owner's rating words, ratio number find emojis will appear
                                              here. <i class="fal fa-heart"></i> <i class="fal fa-smile"></i></p>
                                            <div class="d-flex justify-content-between PopupCardDC">
                                              <aside><a href="#"><span class="text-success"><i
                                                      class="far fa-arrow-up"></i></span> <span
                                                    class="PopupCardCount">1322</span></a> <a href="#"><span
                                                    class="text-danger"><i class="far fa-arrow-down"></i></span> <span
                                                    class="PopupCardCount">1322</span></a></aside>
                                              <aside><span class="PopupCardDate">jan 12 21</span><span
                                                  class="PopupCardDate">10:00 PM</span></aside>
                                            </div>
                                          </div>
                                          <div> <a href="#" class="arrowud text-success"> <i
                                                class="far fa-arrow-up"></i> </a> <a href="#"
                                              class="arrowud text-danger"> <i class="far fa-arrow-down"></i> </a>
                                          </div>
                                        </div>
                                      </article>
                                      <article class="PopupCardBox">
                                        <h5><a href="#">User Account</a></h5>
                                        <div class="d-flex justify-content-between">
                                          <div class="badge badge-secondary">10</div>
                                          <div class="badge badge-secondary d-flex flex-column">
                                            <p>The account owner's rating words, ratio number find emojis will appear
                                              here. <i class="fal fa-heart"></i> <i class="fal fa-smile"></i></p>
                                            <div class="d-flex justify-content-between PopupCardDC">
                                              <aside><a href="#"><span class="text-success"><i
                                                      class="far fa-arrow-up"></i></span> <span
                                                    class="PopupCardCount">1322</span></a> <a href="#"><span
                                                    class="text-danger"><i class="far fa-arrow-down"></i></span> <span
                                                    class="PopupCardCount">1322</span></a></aside>
                                              <aside><span class="PopupCardDate">jan 12 21</span><span
                                                  class="PopupCardDate">10:00 PM</span></aside>
                                            </div>
                                          </div>
                                          <div> <a href="#" class="arrowud text-success"> <i
                                                class="far fa-arrow-up"></i> </a> <a href="#"
                                              class="arrowud text-danger"> <i class="far fa-arrow-down"></i> </a>
                                          </div>
                                        </div>
                                      </article>
                                      <article class="PopupCardBox">
                                        <h5><a href="#">User Account</a></h5>
                                        <div class="d-flex justify-content-between">
                                          <div class="badge badge-secondary">10</div>
                                          <div class="badge badge-secondary d-flex flex-column">
                                            <p>The account owner's rating words, ratio number find emojis will appear
                                              here. <i class="fal fa-heart"></i> <i class="fal fa-smile"></i></p>
                                            <div class="d-flex justify-content-between PopupCardDC">
                                              <aside><a href="#"><span class="text-success"><i
                                                      class="far fa-arrow-up"></i></span> <span
                                                    class="PopupCardCount">1322</span></a> <a href="#"><span
                                                    class="text-danger"><i class="far fa-arrow-down"></i></span> <span
                                                    class="PopupCardCount">1322</span></a></aside>
                                              <aside><span class="PopupCardDate">jan 12 21</span><span
                                                  class="PopupCardDate">10:00 PM</span></aside>
                                            </div>
                                          </div>
                                          <div> <a href="#" class="arrowud text-success"> <i
                                                class="far fa-arrow-up"></i> </a> <a href="#"
                                              class="arrowud text-danger"> <i class="far fa-arrow-down"></i> </a>
                                          </div>
                                        </div>
                                      </article>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </aside>
                            <aside class="col-md-4">
                              <div class="AddVideo mt-0">
                                <div class="YoutubeLable"><span>YouTube</span></div>
                                <div class="CategoryName"><a href="#">Category Name</a></div>
                                <h4>Video Title</h4>
                                <div class="VideoUser"><img src="images/unnamed.jpg" alt=""></div>
                                <div class="imgvid">
                                  <iframe src="https://www.youtube.com/embed/9xwazD5SyVg" frameborder="0"></iframe>
                                </div>
                                <ul class="d-flex justify-content-between">
                                  <li><a href="#"><i class="fal fa-check"></i> <span>647</span></a></li>
                                  <li><a href="#"><i class="fal fa-times"></i> <span>99</span></a></li>
                                  <li><a href="#"><i class="far fa-dot-circle"></i> <span>1.5k</span></a></li>
                                  <li><a href="#"><i class="fas fa-exclamation-triangle"></i></a></li>
                                </ul>
                                <article class="PopupCardBox">
                                  <h5><a href="#">User Account</a></h5>
                                  <div class="d-flex justify-content-between">
                                    <div class="badge badge-secondary">10</div>
                                    <div class="badge badge-secondary d-flex flex-column">
                                      <p>The account owner's rating words, ratio number find emojis will appear here.
                                        <i class="fal fa-heart"></i> <i class="fal fa-smile"></i></p>
                                      <div class="d-flex justify-content-between PopupCardDC">
                                        <aside><a href="#"><span class="text-success"><i
                                                class="far fa-arrow-up"></i></span> <span
                                              class="PopupCardCount">1322</span></a> <a href="#"><span
                                              class="text-danger"><i class="far fa-arrow-down"></i></span> <span
                                              class="PopupCardCount">1322</span></a></aside>
                                        <aside><span class="PopupCardDate">jan 12 21</span><span
                                            class="PopupCardDate">10:00 PM</span></aside>
                                      </div>
                                    </div>
                                    <div> <a href="#" class="arrowud text-success"> <i class="far fa-arrow-up"></i>
                                      </a> <a href="#" class="arrowud text-danger"> <i class="far fa-arrow-down"></i>
                                      </a> </div>
                                  </div>
                                </article>
                                <p class="date"><span>1,280,707 views</span> <span>16 Jan 2021</span></p>
                                <p>On the other hand, we denounce with righteous from indignation and dislike men who
                                  are so beguiled and demoralized by the charms of pleasure of the moment, blinded by
                                  desire, that they cannot foresee the pain and trouble that are bound to ensue.
                                  Dolore magna dolor aliqua ullamco laboris righteous from indignation and dislike men
                                  who are so beguiled and demoralized.</p>
                              </div>
                            </aside>
                            <aside class="col-md-4">
                              <div class="card bg-light h-100 PopupCard">
                                <div class="card-body">
                                  <ul class="RatingList d-flex justify-content-between">
                                    <li>3426 Total Ratings</li>
                                    <li class="sepreter">|</li>
                                    <li>1438 Linked Account Ratings </li>
                                  </ul>
                                  <form>
                                    <div class="row">
                                      <aside class="col-8">
                                        <input type="email" class="form-control" id="RatingsWords"
                                          placeholder="Enter Rating Word(s) here">
                                      </aside>
                                      <aside class="col-4">
                                        <select class="form-control" id="Score">
                                          <option>Score</option>
                                          <option>2</option>
                                          <option>3</option>
                                          <option>4</option>
                                          <option>5</option>
                                        </select>
                                      </aside>
                                    </div>
                                  </form>
                                  <div class="scrollbar" id="style-1">
                                    <div class="force-overflow">
                                      <article class="PopupCardBox">
                                        <h5><a href="#">User Account</a></h5>
                                        <div class="d-flex justify-content-between">
                                          <div class="badge badge-secondary">10</div>
                                          <div class="badge badge-secondary d-flex flex-column">
                                            <p>The account owner's rating words, ratio number find emojis will appear
                                              here. <i class="fal fa-heart"></i> <i class="fal fa-smile"></i></p>
                                            <div class="d-flex justify-content-between PopupCardDC">
                                              <aside><a href="#"><span class="text-success"><i
                                                      class="far fa-arrow-up"></i></span> <span
                                                    class="PopupCardCount">1322</span></a> <a href="#"><span
                                                    class="text-danger"><i class="far fa-arrow-down"></i></span> <span
                                                    class="PopupCardCount">1322</span></a></aside>
                                              <aside><span class="PopupCardDate">jan 12 21</span><span
                                                  class="PopupCardDate">10:00 PM</span></aside>
                                            </div>
                                          </div>
                                          <div> <a href="#" class="arrowud text-success"> <i
                                                class="far fa-arrow-up"></i> </a> <a href="#"
                                              class="arrowud text-danger"> <i class="far fa-arrow-down"></i> </a>
                                          </div>
                                        </div>
                                      </article>
                                      <article class="PopupCardBox">
                                        <h5><a href="#">User Account</a></h5>
                                        <div class="d-flex justify-content-between">
                                          <div class="badge badge-secondary">10</div>
                                          <div class="badge badge-secondary d-flex flex-column">
                                            <p>The account owner's rating words, ratio number find emojis will appear
                                              here. <i class="fal fa-heart"></i> <i class="fal fa-smile"></i></p>
                                            <div class="d-flex justify-content-between PopupCardDC">
                                              <aside><a href="#"><span class="text-success"><i
                                                      class="far fa-arrow-up"></i></span> <span
                                                    class="PopupCardCount">1322</span></a> <a href="#"><span
                                                    class="text-danger"><i class="far fa-arrow-down"></i></span> <span
                                                    class="PopupCardCount">1322</span></a></aside>
                                              <aside><span class="PopupCardDate">jan 12 21</span><span
                                                  class="PopupCardDate">10:00 PM</span></aside>
                                            </div>
                                          </div>
                                          <div> <a href="#" class="arrowud text-success"> <i
                                                class="far fa-arrow-up"></i> </a> <a href="#"
                                              class="arrowud text-danger"> <i class="far fa-arrow-down"></i> </a>
                                          </div>
                                        </div>
                                      </article>
                                      <article class="PopupCardBox">
                                        <h5><a href="#">User Account</a></h5>
                                        <div class="d-flex justify-content-between">
                                          <div class="badge badge-secondary">10</div>
                                          <div class="badge badge-secondary d-flex flex-column">
                                            <p>The account owner's rating words, ratio number find emojis will appear
                                              here. <i class="fal fa-heart"></i> <i class="fal fa-smile"></i></p>
                                            <div class="d-flex justify-content-between PopupCardDC">
                                              <aside><a href="#"><span class="text-success"><i
                                                      class="far fa-arrow-up"></i></span> <span
                                                    class="PopupCardCount">1322</span></a> <a href="#"><span
                                                    class="text-danger"><i class="far fa-arrow-down"></i></span> <span
                                                    class="PopupCardCount">1322</span></a></aside>
                                              <aside><span class="PopupCardDate">jan 12 21</span><span
                                                  class="PopupCardDate">10:00 PM</span></aside>
                                            </div>
                                          </div>
                                          <div> <a href="#" class="arrowud text-success"> <i
                                                class="far fa-arrow-up"></i> </a> <a href="#"
                                              class="arrowud text-danger"> <i class="far fa-arrow-down"></i> </a>
                                          </div>
                                        </div>
                                      </article>
                                      <article class="PopupCardBox">
                                        <h5><a href="#">User Account</a></h5>
                                        <div class="d-flex justify-content-between">
                                          <div class="badge badge-secondary">10</div>
                                          <div class="badge badge-secondary d-flex flex-column">
                                            <p>The account owner's rating words, ratio number find emojis will appear
                                              here. <i class="fal fa-heart"></i> <i class="fal fa-smile"></i></p>
                                            <div class="d-flex justify-content-between PopupCardDC">
                                              <aside><a href="#"><span class="text-success"><i
                                                      class="far fa-arrow-up"></i></span> <span
                                                    class="PopupCardCount">1322</span></a> <a href="#"><span
                                                    class="text-danger"><i class="far fa-arrow-down"></i></span> <span
                                                    class="PopupCardCount">1322</span></a></aside>
                                              <aside><span class="PopupCardDate">jan 12 21</span><span
                                                  class="PopupCardDate">10:00 PM</span></aside>
                                            </div>
                                          </div>
                                          <div> <a href="#" class="arrowud text-success"> <i
                                                class="far fa-arrow-up"></i> </a> <a href="#"
                                              class="arrowud text-danger"> <i class="far fa-arrow-down"></i> </a>
                                          </div>
                                        </div>
                                      </article>
                                      <article class="PopupCardBox">
                                        <h5><a href="#">User Account</a></h5>
                                        <div class="d-flex justify-content-between">
                                          <div class="badge badge-secondary">10</div>
                                          <div class="badge badge-secondary d-flex flex-column">
                                            <p>The account owner's rating words, ratio number find emojis will appear
                                              here. <i class="fal fa-heart"></i> <i class="fal fa-smile"></i></p>
                                            <div class="d-flex justify-content-between PopupCardDC">
                                              <aside><a href="#"><span class="text-success"><i
                                                      class="far fa-arrow-up"></i></span> <span
                                                    class="PopupCardCount">1322</span></a> <a href="#"><span
                                                    class="text-danger"><i class="far fa-arrow-down"></i></span> <span
                                                    class="PopupCardCount">1322</span></a></aside>
                                              <aside><span class="PopupCardDate">jan 12 21</span><span
                                                  class="PopupCardDate">10:00 PM</span></aside>
                                            </div>
                                          </div>
                                          <div> <a href="#" class="arrowud text-success"> <i
                                                class="far fa-arrow-up"></i> </a> <a href="#"
                                              class="arrowud text-danger"> <i class="far fa-arrow-down"></i> </a>
                                          </div>
                                        </div>
                                      </article>
                                      <article class="PopupCardBox">
                                        <h5><a href="#">User Account</a></h5>
                                        <div class="d-flex justify-content-between">
                                          <div class="badge badge-secondary">10</div>
                                          <div class="badge badge-secondary d-flex flex-column">
                                            <p>The account owner's rating words, ratio number find emojis will appear
                                              here. <i class="fal fa-heart"></i> <i class="fal fa-smile"></i></p>
                                            <div class="d-flex justify-content-between PopupCardDC">
                                              <aside><a href="#"><span class="text-success"><i
                                                      class="far fa-arrow-up"></i></span> <span
                                                    class="PopupCardCount">1322</span></a> <a href="#"><span
                                                    class="text-danger"><i class="far fa-arrow-down"></i></span> <span
                                                    class="PopupCardCount">1322</span></a></aside>
                                              <aside><span class="PopupCardDate">jan 12 21</span><span
                                                  class="PopupCardDate">10:00 PM</span></aside>
                                            </div>
                                          </div>
                                          <div> <a href="#" class="arrowud text-success"> <i
                                                class="far fa-arrow-up"></i> </a> <a href="#"
                                              class="arrowud text-danger"> <i class="far fa-arrow-down"></i> </a>
                                          </div>
                                        </div>
                                      </article>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </aside>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </aside>
            </div>
          </div>

        </div>
  </div>
  </article>
  </main>
  <!--End main Part-->

  <!--Start footer-->
  <?php include_once 'footer.php';?>

  <!--End footer-->
  <a id="backtop"></a>
  </div>

  <!-- Setup of jquery JS -->
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