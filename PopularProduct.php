<?php
require_once 'Database.php';

class PopularProduct extends Product
{
    protected $database;
    protected $mysqli;
    
    function __construct() {
        $this->database = new Database();
        $this->mysqli = $this->database->connect();
    }
    
    private function showProduct($id, $name, $price_euro, $category_id, $popular, $description, $mainDescription, $image) {
        echo '
            <div class="swiper-slide">
                                <div class="card c-card-1 mb-3">
                                    <img src="data:image/jpeg;base64,'.base64_encode($image).'" class="p-3 card-img-top product-img" alt="...">
                                    <div class="card-body p-0 pb-2 pt-3">
                                    <div class="mt-1 mb-1">
                                    '.$mainDescription.'
                                    </div>
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-7">
                                                    '.$name.'
                                                </div>
                                                <div class="col-5 ">
                                                    '.$price_euro.' euro
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <form action="productid.php" method="GET"> 
                                        <div class="card-footer">
                                            <input class="w-100" name="id" type="hidden" value="'.$id.'">
                                                <button class="w-100">
                                                Buy now
                                                </button>
                                            </input>
                                        </div>
                                    </form>
                                </div>
                            </div>
        ';
    }
    
    public function popularProductsTree($gender = 0) {
        $query = $this->mysqli->query("SELECT * FROM products WHERE gender = $gender AND popular = 1");
        $id = 0;
        if ($query->num_rows > 0) {
            while ($row = $query->fetch_assoc()) {
                $id = $row["id"];
                $name = $row["name"];
                $price_euro = $row["price_euro"];
                $category_id = $row["category_id"];
                $popular = $row["popular"];
                $description = $row["description"];
                $mainDescription = $row["main-description"];
                $image = $row["image"];
                $this->showProduct($id, $name, $price_euro, $category_id, $popular, $description, $mainDescription, $image);
            }
        }
    }
}
