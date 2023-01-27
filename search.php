<!DOCTYPE html>
<?php
session_start();
require_once('static-pages/head.php');
?>
<html lang="en">
    <head>
        <?php
        require_once('static-pages/head.php');
        require_once('static-pages/cookies.php');
        ?>
        
        <title>INTENSE Clothing | MALE</title>
        <link rel="stylesheet" href="assets/css/cssprogress.css">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <?php require_once('static-pages/head.php'); ?>
        <?php require_once('static-pages/menu.php'); ?>
        <main id="search-main" class="mb-5">
            <div class="wrapper">
                <div class="text-center mt-3 mb-3">
                    <h4>You searched for: <strong>test</strong> </h4>
                    <hr>
                </div>
                <div class="text-center">
                    <p>11 products found</p>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="card c-card-1">
                                <img src="assets/imgs/adidas.png" class="p-3 card-img-top" alt="...">
                                <div class="card-body p-0 pb-2 pt-3">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-6">
                                                Adidas
                                            </div>
                                            <div class="col-6 text-end">
                                                200 euro
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    Buy now
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       </main>
        <?php require_once('static-pages/footer.php'); ?>
        <script src="assets/js/lib/typed/typed.min.js"></script>
        <script src="assets/js/main.js"></script>
        <script src="assets/js/search-bar.js"></script>
        <script src="assets/js/cookies.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <script>window.gtranslateSettings = {"default_language":"en","languages":["en","bg"],"wrapper_selector":".gtranslate_wrapper","float_switcher_open_direction":"bottom"}</script>
        <script src="https://cdn.gtranslate.net/widgets/v1.0.1/float.js" defer></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    </body>
</html>
