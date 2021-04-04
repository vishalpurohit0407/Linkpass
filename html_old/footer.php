<!--Start footer-->
<footer class="footer">
    <article class="container">
        <ul class="footer-mennu">
            <li><a href="#">About </a></li>
            <li><a href="#">Terms &amp; Conditions</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Categories</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
        <!--Start Footer copyright Section-->
        <section class="copy"> &copy; 2021 LinkPasser. All Rights Reserved. </section>
        <!--End Footer copyright Section-->
    </article>
</footer>
<!--End footer-->

<div class="fixed-bottom footer-bottom">
    <article class="container">
        <div class="menu-footer">
            <?php $file = basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']); $file = $file == 'html' ? 'index.php' : $file;  ?>
            <ul class="d-flex justify-content-around">
                <?php if($file != 'index.php') {?>
                <li><a href="#interest" class="interest-form-tigger btn btn-success" data-toggle="interest-form"><img
                            src="images/settings.png" alt=""></a></li>
                <li><a href="javascript:void(0);" class="ShowFooter"><i class="fal fa-square"></i></a></li>
                <?php } ?>
                <li><a href="#search" class="search-form-tigger btn btn-success" data-toggle="search-form"><i
                            class="fal fa-search"></i></a></li>
            </ul>
            <div class="interest-form-wrapper">
                <form class="interest-form" id="" action="">
                    <div class="input-group">
                        <input type="text" name="interest" class="interest form-control" placeholder="Interest">
                        <button class="input-group-addon" id="basic-addon1"><i class="fad fa-save"></i> </button>
                        <button class="input-group-addon interest-close" id="basic-addon2"><i class="fal fa-times"></i>
                        </button>
                    </div>
                </form>
            </div>
            <div class="search-form-wrapper">
                <form class="search-form" id="" action="search-list.php">
                    <div class="input-group">
                        <input type="text" name="search" class="search form-control" placeholder="Search">
                        <button class="input-group-addon" id="basic-addon1"><i class="far fa-search"></i> </button>
                        <button class="input-group-addon search-close" id="basic-addon2"><i class="fal fa-times"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </article>
</div>
<a id="backtop"></a>
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

    $(".ShowFooter").click(function () {
        if ($('.footer').is(':hidden')) {
            $('.footer').show();
            $(this).css('color', '#fff');
        } else {
            $('.footer').hide();
            $(this).css('color', '#16408a');
        }
    });
</script>