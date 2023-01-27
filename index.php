<!DOCTYPE html>
<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
require_once('static-pages/head.php');
?>
<html lang="en">
    <head>
        <?php
        require_once('static-pages/head.php');
        require_once('static-pages/cookies.php');
        
        $siteCategory = 0;
        ?>
        
        <title>INTENSE Clothing | Home Page</title>
        <link rel="stylesheet" href="assets/css/cssprogress.css">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <?php require_once('static-pages/head.php'); ?>
        <?php require_once('static-pages/menu.php'); ?>
        <main id="index-main">
           <div class="wrapper">
               <div class="mb-1 mt-5">
                   <picture class="main-thumb position-relative">
                       <!-- INTENSE INTRODUCTION -->
                       <div style="background-image: url('assets/imgs/running.jpg');" class="cover">
                           <span class="wrap-text h1" style="color:black;"><strong>This is INTENSE</strong></span>
                            <div class="mt-3">
                                <span class="wrap-text" style="color:black;">INTENSE Design and 850+ brands</span>
                            </div>
                           <div class="mt-5">
                               <div class="container">
                                   <div class="row">
                                       <div class="col-md-6 mt-5 mb-5">
                                           <span class="hover-brown c-button-1">
                                            <a class="font-weight-bold text-decoration-none text-white p-3" href="men.php">
                                                SHOP MALE
                                            </a>
                                           </span>
                                       </div>
                                       <div class="col-md-6 mt-5 mb-5">
                                           <span class="hover-brown c-button-1">
                                               <a class="font-weight-bold text-decoration-none text-white p-3" href="female.php">
                                                SHOP FEMALE
                                            </a>
                                           </span>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <!-- DELIVER INFORMATION BOTTOM -->
                       <div class="p-2 w-100 d-none d-lg-block d-xl-block" style="background-color: black;">
                           <div class="row">
                               <div class="col">
                                   <a class="text-decoration-none text-white font-weight-bold" href="">EASY DELIVER WORLDWIDE</a>
                               </div>
                               <div class="col text-end">
                                   <p class="m-0 text-white font-weight-bold" href="">DISCOVER OVER 850 BRANDS</p>
                               </div>
                           </div>
                       </div>
                   </picture>
               </div>
           </div>
       </main>
        <section class="p-3 mt-5 d-none d-lg-block d-md-block d-xl-block d-xxl-block">
            <div class="wrapper" style="max-width: 900px;">
                <div class="social-payment text-center">
                    <div class="social text-center me-3 border-end border-dark">
                        <ul class="list-unstyled list-inline">
                            <li class="list-inline-item pe-3">
                                <a href="">
                                    <img class="rounded-circle" style="width:33px; height: 33px;" src="assets/imgs/facebook.png">
                                </a>
                            </li>
                            <li class="list-inline-item pe-3">
                                <a href="">
                                    <img class="rounded-circle" style="width:33px; height: 33px;" src="assets/imgs/instagram.png">
                                </a>
                            </li>
                            <li class="list-inline-item pe-3">
                                <a href="">
                                    <img class="rounded-circle" style="width:33px; height: 33px;" src="assets/imgs/twitter.png">
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="payment text-center ms-3">
                        <ul class="list-unstyled list-inline">
                            <li class="list-inline-item pe-3">
                                <a href="">
                                    <img style="width:43px; height: 33px;" src="assets/imgs/mastercard.png">
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="">
                                    <img style="width:43px; height: 33px;" src="assets/imgs/paypal.png">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <?php require_once('static-pages/footer.php'); ?>
        <script src="assets/js/lib/typed/typed.min.js"></script>
        <script src="assets/js/main.js"></script>
        <script src="assets/js/search-bar.js"></script>
        <script src="assets/js/cookies.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <script>window.gtranslateSettings = {"default_language":"en","languages":["en","bg"],"wrapper_selector":".gtranslate_wrapper","float_switcher_open_direction":"bottom"}</script>
        <script src="https://cdn.gtranslate.net/widgets/v1.0.1/float.js" defer></script>
    </body>
</html>
