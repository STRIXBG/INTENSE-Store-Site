<?php
require_once 'Database.php';
require_once 'Category.php';

class SubCategory extends Category
{
    private $database;
    private $mysqli;

    function __construct() {
        $this->database = new Database();
        $this->mysqli = $this->database->connect(); //TODO PROBLEM
    }

    //SUB CATEGORY FUNCTIONS:
    private function showCategory($id) //showCategory($id, $name, $subCategories)
    {
        $name = $this->getCategoryName($id);
            echo '
                <a href="" class="text-start mt-1 w-100">
                <div class="w-100 dropup category">' .
                    $name .
                    '
                </div>
                </a>
            ';
    }
    
    protected function subCategoryTree($id)
    {
        $query = $this->mysqli->query("SELECT * FROM categories WHERE parent_id = $id");
        $id = 0;
        if ($query->num_rows > 0) {
            while ($row = $query->fetch_assoc()) {
                $id = $row["id"];
                $this->showCategory($id);
            }
        }
    }

    //DATABASE:
    private function getCategoryName($id)
    {
        $result = $this->mysqli->query("SELECT category_name FROM categories WHERE id = $id");
        $row = mysqli_fetch_row($result);

        return $row['0'];
    }
}