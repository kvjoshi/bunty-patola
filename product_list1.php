<?php
session_start();
include('connect.php');
$p_sql="SELECT * FROM `product` , `product_cat` WHERE `product`.`pc_id` = `product_cat`.`pc_id`";
$p_query=mysqli_query($con,$p_sql);
$p_count = mysqli_num_rows($p_query);
$pc_sql="SELECT * FROM `product_cat`";
$pc_query=mysqli_query($con,$pc_sql);
$pc_count = mysqli_num_rows($pc_query);

?>

<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <title>Bunty Patola</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <link href="assets/css/loaders/loader-typing.css" rel="stylesheet" type="text/css" media="all" />
    <link href="assets/css/theme.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
<div class="loader">
    <div class="loading-animation"></div>
</div>

<div class="navbar-container ">
    <nav class="navbar navbar-expand-lg justify-content-between navbar-dark"  data-overlay>
        <div class="container">
            <div class="col flex-fill px-0 d-flex justify-content-between">
                <a class="navbar-brand mr-0 fade-page" href="index.php">
                    <img src="assets/img/logo-white.svg" alt="Bunty Patola">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <img class="icon navbar-toggler-open" src="assets/img/icons/interface/menu.svg" alt="menu interface icon" data-inject-svg />
                    <img class="icon navbar-toggler-close" src="assets/img/icons/interface/cross.svg" alt="cross interface icon" data-inject-svg />
                </button>
            </div>
            <div class="collapse navbar-collapse col px-0 px-lg-2 flex-fill">
                <div class="py-2 py-lg-0">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="index.php" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item"><a href="about.html" class="nav-link">About</a>
                        </li>
                        <li class="nav-item"><a href="product_list.php" class="nav-link">Products</a>
                        </li>
                        <li class="nav-item"><a href="process.php" class="nav-link">Process</a>
                        </li>
                        <li class="nav-item"><a href="https://www.pinterest.com/kishorgm165/" class="nav-link">Gallery</a>
                        </li>
                        <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="collapse navbar-collapse justify-content-end col flex-fill px-0"><a href="tel:+919374119680" class="btn btn-white ml-lg-3">Get In Touch</a>

            </div>
        </div>
    </nav>
</div>
<section class="bg-primary-2 has-divider text-light">
    <div class="container pb-6">
        <div class="row justify-content-center text-center">
            <div class="col-xl-8 col-lg-9 col-md-10">
                <h1 class="display-3 mb-5 pt-4 mt-4">Our Products</h1>
<!--                <p class="lead">Essentially the design in a patola are based on traditional motifs called "Bhat". These designs include "narikunj", "paan", "phulwadi", "chowkdi", "raas", "chhabdi", "choktha", "navratana", "paanchphul", "sarvariya", "laheriya" etc.</p>-->
            </div>
        </div>
    </div>
    <div class="divider">
        <img src="assets/img/dividers/divider-2.svg" alt="graphical divider" data-inject-svg />
    </div>
</section>
<section class="pt-5">
    <div class="container">
        <div class="row justify-content-center mb-4">
            <div class="col col-md-auto">
                <ul data-isotope-filters data-isotope-id="products" class="nav mb-3">
                    <li class="nav-item">
                        <a href="#" class="nav-link h5 active" data-filter="*">All</a>
                    </li>
                    <?php while ($row_head=mysqli_fetch_assoc($pc_query)){ ?>
                    <li class="nav-item">
                        <a href="#" class="nav-link h5" data-filter="<?php echo $row_head['pc_id'];?>"><?php echo $row_head['pc_name'];?></a>
                    </li>
                    <?php } ?>
                    <li class="nav-item">
                        <a href="#" class="nav-link h5" data-filter="Single">Single Ikkat</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link h5" data-filter="Double">Double Ikkat</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link h5" data-filter="Duppatta">Duppatta</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row" data-isotope-collection data-isotope-id="products">
            <?php while ($row_prod=mysqli_fetch_assoc($p_query)){ ?>
            <div class="col-sm-6 col-lg-4 mb-4 text-center" data-isotope-item data-category="<?php echo $row_prod['pc_id'];?>">
                <a href="#">
                    <img src="uploads/<?php echo $row_prod['pp_img1'];?>" alt="<?php echo $row_prod['pp_name'];?>" class="rounded mb-3">
                    <h4 class="mb-0"><?php echo $row_prod['pp_name'];?></h4>
                    <div class="text-small text-muted"><?php echo $row_prod['pc_name'];?></div>
                </a>
            </div>
            <?php } ?>
            <div class="col-sm-6 col-lg-4 mb-4 text-center" data-isotope-item data-category="Single">
                <a href="#">
                    <img src="assets/img/portfolio-item-6.jpg" alt="Volkswagen Australia" class="rounded mb-3">
                    <h4 class="mb-0">Volkswagen Australia</h4>
                    <div class="text-small text-muted">Single</div>
                </a>
            </div>
            <div class="col-sm-6 col-lg-4 mb-4 text-center" data-isotope-item data-category="Duppatta">
                <a href="#">
                    <img src="assets/img/portfolio-item-5.jpg" alt="Go Commerce" class="rounded mb-3">
                    <h4 class="mb-0">Go Commerce</h4>
                    <div class="text-small text-muted">Duppatta</div>
                </a>
            </div>
            <div class="col-sm-6 col-lg-4 mb-4 text-center" data-isotope-item data-category="Double">
                <a href="#">
                    <img src="assets/img/portfolio-item-4.jpg" alt="Tribe" class="rounded mb-3">
                    <h4 class="mb-0">Tribe</h4>
                    <div class="text-small text-muted">Double</div>
                </a>
            </div>
            <div class="col-sm-6 col-lg-4 mb-4 text-center" data-isotope-item data-category="Duppatta">
                <a href="#">
                    <img src="assets/img/portfolio-item-3.jpg" alt="Beker EV" class="rounded mb-3">
                    <h4 class="mb-0">Beker EV</h4>
                    <div class="text-small text-muted">Duppatta</div>
                </a>
            </div>
            <div class="col-sm-6 col-lg-4 mb-4 text-center" data-isotope-item data-category="Single">
                <a href="#">
                    <img src="assets/img/portfolio-item-2.jpg" alt="Oculus Go" class="rounded mb-3">
                    <h4 class="mb-0">Oculus Go</h4>
                    <div class="text-small text-muted">Single</div>
                </a>
            </div>
            <div class="col-sm-6 col-lg-4 mb-4 text-center" data-isotope-item data-category="Double">
                <a href="#">
                    <img src="assets/images/Jay_pat_dis_20-1-250x313.jpg" alt="Leap iOS" class="rounded mb-3">
                    <h4 class="mb-0">Double Ikkat Patola</h4>
                    <div class="text-small text-muted">Double</div>
                </a>
            </div>
        </div>
    </div>
</section>
<footer class="pb-4 bg-primary-3 text-light" id="footer">
    <div class="container">

        <div class="row mb-5">
            <div class="col-6 col-lg-2">
                <h5>Navigate</h5>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a href="#" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Products</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Contact Us</a>
                    </li>
                </ul>
            </div>
            <div class="col-6 col-lg-4">
                <h5>Contact</h5>
                <ul class="list-unstyled">
                    <li class="mb-3 d-flex">
                        <img class="icon" src="assets/img/icons/theme/map/marker-1.svg" alt="marker-1 icon" data-inject-svg />
                        <div class="ml-3">
                            <span> 4, Dasijivanpara, Suvas society,<br /> Nana Mava Rd Rajkot, Gujarat</span>
                        </div>
                    </li>
                    <li class="mb-3 d-flex">

                        <img class="icon" src="assets/img/icons/theme/communication/call-1.svg" alt="call-1 icon" data-inject-svg />
                        <div class="ml-3">
                            <a class="no-decoration" href="tel:+919374119680">
                                <span>+91 93741 19680</span>
                            </a>
                            <span class="d-block text-muted text-small">Mon - Sat 9am - 10pm</span>
                        </div>

                    </li>
                    <li class="mb-3 d-flex">
                        <img class="icon" src="assets/img/icons/theme/communication/mail.svg" alt="mail icon" data-inject-svg />
                        <div class="ml-3">
                            <a href="#">hello@company.io</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-lg-6 col-12 mt-3 mt-lg-0">

                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14767.377261491121!2d70.7879716!3d22.2838865!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd75fb3d525f2b9a0!2sBunty%20patola%20silk%20sarees%20(patan%2FRajkotipatola%20)!5e0!3m2!1sen!2sin!4v1631056865447!5m2!1sen!2sin" style="border:0; border-radius:10px;width:100%;height:100%" allowfullscreen="" loading="lazy"></iframe>


            </div>
        </div>
        <div class="row justify-content-center mb-2">
            <div class="col-auto">
                <ul class="nav">
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <img class="icon undefined" src="assets/img/icons/social/instagram.svg" alt="instagram social icon" data-inject-svg />
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <img class="icon undefined" src="assets/img/icons/social/twitter.svg" alt="twitter social icon" data-inject-svg />
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <img class="icon undefined" src="assets/img/icons/social/youtube.svg" alt="youtube social icon" data-inject-svg />
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="https://www.pinterest.com/kishorgm165/" class="nav-link">
                            <img class="icon undefined" src="assets/img/icons/social/pinterest.svg" alt="pinterest social icon" data-inject-svg />
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="https://www.facebook.com/buntypatolasilksarees/" class="nav-link">
                            <img class="icon undefined" src="assets/img/icons/social/facebook.svg" alt="facebook social icon" data-inject-svg />
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col col-md-auto text-center">
                <!--            <small class="text-muted">&copy;2021 Karmavir Joshi</a>-->
                </small>
            </div>
        </div>
    </div>
</footer>

<!-- Required vendor scripts (Do not remove) -->
<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/popper.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.js"></script>

<!-- Optional Vendor Scripts (Remove the plugin script here and comment initializer script out of index.js if site does not use that feature) -->

<!-- AOS (Animate On Scroll - animates elements into view while scrolling down) -->
<script type="text/javascript" src="assets/js/aos.js"></script>
<!-- Clipboard (copies content from browser into OS clipboard) -->
<script type="text/javascript" src="assets/js/clipboard.js"></script>
<!-- Fancybox (handles image and video lightbox and galleries) -->
<script type="text/javascript" src="assets/js/jquery.fancybox.min.js"></script>
<!-- Flatpickr (calendar/date/time picker UI) -->
<script type="text/javascript" src="assets/js/flatpickr.min.js"></script>
<!-- Flickity (handles touch enabled carousels and sliders) -->
<script type="text/javascript" src="assets/js/flickity.pkgd.min.js"></script>
<!-- Ion rangeSlider (flexible and pretty range slider elements) -->
<script type="text/javascript" src="assets/js/ion.rangeSlider.min.js"></script>
<!-- Isotope (masonry layouts and filtering) -->
<script type="text/javascript" src="assets/js/isotope.pkgd.min.js"></script>
<!-- jarallax (parallax effect and video backgrounds) -->
<script type="text/javascript" src="assets/js/jarallax.min.js"></script>
<script type="text/javascript" src="assets/js/jarallax-video.min.js"></script>
<script type="text/javascript" src="assets/js/jarallax-element.min.js"></script>
<!-- jQuery Countdown (displays countdown text to a specified date) -->
<script type="text/javascript" src="assets/js/jquery.countdown.min.js"></script>
<!-- jQuery smartWizard facilitates steppable wizard content -->
<script type="text/javascript" src="assets/js/jquery.smartWizard.min.js"></script>
<!-- Plyr (unified player for Video, Audio, Vimeo and Youtube) -->
<script type="text/javascript" src="assets/js/plyr.polyfilled.min.js"></script>
<!-- Prism (displays formatted code boxes) -->
<script type="text/javascript" src="assets/js/prism.js"></script>
<!-- ScrollMonitor (manages events for elements scrolling in and out of view) -->
<script type="text/javascript" src="assets/js/scrollMonitor.js"></script>
<!-- Smooth scroll (animation to links in-page)-->
<script type="text/javascript" src="assets/js/smooth-scroll.polyfills.min.js"></script>
<!-- SVGInjector (replaces img tags with SVG code to allow easy inclusion of SVGs with the benefit of inheriting colors and styles)-->
<script type="text/javascript" src="assets/js/svg-injector.umd.production.js"></script>
<!-- TwitterFetcher (displays a feed of tweets from a specified account)-->
<script type="text/javascript" src="assets/js/twitterFetcher_min.js"></script>
<!-- Typed text (animated typing effect)-->
<script type="text/javascript" src="assets/js/typed.min.js"></script>
<!-- Required theme scripts (Do not remove) -->
<script type="text/javascript" src="assets/js/theme.js"></script>
<!-- Removes page load animation when window is finished loading -->
<script type="text/javascript">
    window.addEventListener("load", function () {
        document.querySelector('body').classList.add('loaded');
    });
</script>

</body>

</html>
