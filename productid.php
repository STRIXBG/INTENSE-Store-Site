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
        require_once 'Database.php';
        require_once 'Product.php';
        $database = new Database();
        $mysqli = $database->connect();
        $product = null;
        $productID = 0;
        $siteCategory = 0;
        if(isset($_GET['id']))
        {
            $productID=$_GET['id'];
            $query = $mysqli->query("SELECT * FROM products WHERE id = $productID");
            $foundProducts = mysqli_num_rows($query);
            $product = new Product($productID);
        }
        else
        {
            header('location:index.php');
        }
        ?>
        
        <title>INTENSE Clothing | Home Page</title>
        <link rel="stylesheet" href="assets/css/cssprogress.css">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <?php require_once('static-pages/head.php'); ?>
        <?php require_once('static-pages/menu.php'); ?>
        <main id="productid-main">
            <div class="wrapper" style="max-width: 1000px;">
                <div class="product-block">
                    <picture class="product-block-img">
                        <?php $product->showImg($productID); ?>
                    </picture>
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
    </body>
</html>