<!DOCTYPE html>
<?php
session_start();
require_once('static-pages/head.php');
?>
<html lang="en">
    <head>
        <?php
        if(!defined('ORDER_PRICE'))
        {
            define('ORDER_PRICE', 0);
        }
        require_once('static-pages/head.php');
        require_once('static-pages/cookies.php');
        require_once 'Database.php';
        $database = new Database();
        $mysqli = $database->connect();
        $orderBy = ORDER_PRICE;
        if(!isset($_POST['orderBy']))
        {
            
        }
        
        
        if(isset($_GET['page']))
        {
            $page = $_GET['page'];  
        }
        else
        {
            $page = 1;
        }
        $limitArticles = 2;
        $start_from = ($page-1) * $limitArticles;

        
        if(isset($_GET['search']))
        {
            $searched=$_GET['search'];
            $query = $mysqli->query("SELECT * FROM products WHERE name LIKE '%$searched%';");
            $foundProducts = mysqli_num_rows($query);
        }
        else
        {
            header('location:index.php');
        }
        
        $siteCategory = 0;
        $results_per_page = 3; 
        ?>
        
        <title>INTENSE Clothing | <?php echo $searched ?></title>
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
                    <h4>You searched for: <strong><?php echo $searched ?></strong></h4>
                    <hr>
                </div>
                <div class="text-center">
                    <p><?php echo $foundProducts; ?> products found</p>
                </div>
                <section class="mt-2">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-2 larger-only border-2 me-2 border-end">
                                
                            </div>
                            <div class="col">
                                <div class="row">
                                <?php
                                if ($query->num_rows > 0) {
                                    while ($row = $query->fetch_assoc()) {
                                ?>
                                <div class="col-lg-2 text-center mt-2 me-4">
                                    <a class="link-dark" href="">
                                        <article class="product-box">
                                            <?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'"/>' ?>
                                            <div class="title">
                                                <?php
                                                    echo $row['name'];
                                                ?>
                                            </div>
                                            <div class="description mt-2">
                                                <?php
                                                    echo $row['main-description'];
                                                ?>
                                            </div>
                                            <div class="price mt-2">
                                                Price: <?php echo $row['price_euro']; ?> euro
                                            </div>
                                            <hr>
                                            <div class="btn btn-buy">
                                                <i class="fa fa-shopping-cart me-2" aria-hidden="true"></i>Buy now
                                            </div>
                                        </article>
                                    </a>
                                </div>
                                <?php
                                    }
                                }
                                ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <nav class="text-center mt-3">
                <?php
                $query = $mysqli->query("SELECT * FROM products WHERE name LIKE '%$searched%' "
                        . " ORDER BY price_euro DESC LIMIT $start_from, $limitArticles");
                
                $total_records = mysqli_num_rows($query);
                $total_pages = ceil($total_records / $limitArticles); 
                
                //TODO
                ?>
                    
                </nav>
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
