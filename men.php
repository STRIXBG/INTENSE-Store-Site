<!DOCTYPE html>
<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
require_once 'static-pages/head.php';
require_once 'Category.php';
require_once 'Advert.php';

$category = new Category();
$advert = new Advert();

$siteCategory = 1;
?>
<html lang="en">
    <head>
        <?php
        require_once 'static-pages/head.php';
        require_once 'static-pages/cookies.php';
        ?>
        <title>INTENSE Clothing | MALE</title>
        <link rel="stylesheet" href="assets/css/cssprogress.css">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/sliders.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
        <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet"></link>
        <style>
            .splide__slide img {
                width: 100%;
                max-height: 490px;
            }
        </style>
    </head>
    <body>
        <?php require_once 'static-pages/head.php'; ?>
        <?php require_once 'static-pages/menu.php'; ?>
        <main id="men-main">
            <div id="carouselExampleIndicators" class="carousel-advert carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <?php
                    $advert->advertsTree();
                    ?>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <div class="mt-2">
                <div class="p-2 text-center">
                    <h4>Popular Male Products</h4>
                </div>
            </div>
        </main>
        <?php require_once 'static-pages/footer.php'; ?>
        <script src="assets/js/lib/typed/typed.min.js"></script>
        <script src="assets/js/main.js"></script>
        <script src="assets/js/search-bar.js"></script>
        <script src="assets/js/cookies.js"></script>
        <script src="assets/js/sliders.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <script>window.gtranslateSettings = {"default_language": "en", "languages": ["en", "bg"], "wrapper_selector": ".gtranslate_wrapper", "float_switcher_open_direction": "bottom"}</script>
        <script src="https://cdn.gtranslate.net/widgets/v1.0.1/float.js" defer></script>
        <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                var splide = new Splide('.splide', {
                    type: 'loop',
                    padding: '5rem',
                });
                splide.mount();
            });
        </script>
    </body>
</html>