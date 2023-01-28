<?php

require_once 'Database.php';

class Product {

    protected $database;
    protected $mysqli;
    protected $id;

    function __construct($id) {
        $this->database = new Database();
        $this->mysqli = $this->database->connect();
        $this->id = $id;
    }
    
    
    private function getData($data)
    {
        $query = $this->mysqli->query("SELECT $data FROM products WHERE id = $this->id");
        $row = mysqli_fetch_row($query);
        return $row[0];
    }
    
    public function showImg()
    {
        $image = $this->getData('image');
        echo '<img src="data:image/jpeg;base64,'.base64_encode($image).'" class="p-3 card-img-top product-img" alt="...">';
    }
}
