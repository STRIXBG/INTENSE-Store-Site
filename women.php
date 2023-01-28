<!DOCTYPE html>
<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
require_once 'static-pages/head.php';
require_once 'Category.php';
require_once 'Advert.php';
require_once 'Product.php';
require_once 'PopularProduct.php';

$category = new Category();
$advert = new Advert();
$popularProduct = new PopularProduct();

$siteCategory = 2;
?>
<html lang="en">
    <head>
        <?php
        require_once 'static-pages/head.php';
        require_once 'static-pages/cookies.php';
        ?>
        <title>INTENSE Clothing | WOMEN</title>
        <link rel="stylesheet" href="assets/css/cssprogress.css">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/sliders.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
        <style>
            .swiper {
                width: 100%;
                height: 100%;
            }

            .swiper-slide {
                text-align: center;
                font-size: 18px;
                background: #fff;

                /* Center slide text vertically */
                display: -webkit-box;
                display: -ms-flexbox;
                display: -webkit-flex;
                display: flex;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-justify-content: center;
                justify-content: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                -webkit-align-items: center;
                align-items: center;
            }

            .swiper-slide img {
                display: block;
                height: 110px !important;
                object-fit: cover;
            }

            .swiper-pagination-bullet {
                width: 20px;
                height: 20px;
                text-align: center;
                line-height: 20px;
                font-size: 12px;
                color: #000;
                opacity: 1;
                background: rgba(0, 0, 0, 0.2);
            }

            .swiper-pagination-bullet-active {
                color: #fff;
                background: #007aff;
            }
        </style>
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
            <section class="mt-1 popular-women-products">
                <div class="p-2 text-center">
                    <h4>Popular Female Products</h4>
                    <div class="container">
                        <div class="swiper mySwiper">
                            <div class="swiper-wrapper">
                                <?php
                                $popularProduct->popularProductsTree(1);
                                ?>
                            </div>
                            <div class="mt-4 swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="mt-1 mb-2">
                
            </section>
        </div>
    </main>
    
    <?php require_once 'static-pages/footer.php'; ?>
    <script src="assets/js/lib/typed/typed.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/search-bar.js"></script>
    <script src="assets/js/cookies.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script>window.gtranslateSettings = {"default_language": "en", "languages": ["en", "bg"], "wrapper_selector": ".gtranslate_wrapper", "float_switcher_open_direction": "bottom"}</script>
    <script src="https://cdn.gtranslate.net/widgets/v1.0.1/float.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
        slidesPerView: 3,
        spaceBetween: 30,
        freeMode: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
    });
    </script>
</body>
</html>