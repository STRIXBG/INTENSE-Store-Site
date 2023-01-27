<?php

require_once 'Database.php';

class Advert
{
    private $database;
    private $mysqli;

    function __construct() {
        $this->database = new Database();
        $this->mysqli = $this->database->connect();
    }

    private function showAdvert($id, $link, $text, $image)
    {
        echo '
        <div class="carousel-item advertslide-item active">
            <img src="data:image/jpeg;base64,'.base64_encode($image).'"/>
        </div>
         ';
    }

    public function advertsTree()
    {
        $query = $this->mysqli->query("SELECT * FROM adverts");
        $id = 0;
        $name = null;
        $text = null;
        $image = null;
        if ($query->num_rows > 0) {
            while ($row = $query->fetch_assoc()) {
                $id = $row['id'];
                $link = $row['link'];
                $text = $row['text'];
                $image = $row['image'];
                $this->showAdvert($id, $link, $text, $image);
            }
        }
    }
}