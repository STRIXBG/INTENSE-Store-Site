<?php
require_once 'Database.php';
require_once 'SubCategory.php';

class Category
{
    private $database;
    private $mysqli;
    private $subCategory;

    function __construct() {
        $this->database = new Database();
        $this->subCategory = new SubCategory();
        $this->mysqli = $this->database->connect();
    }

    private function hasSubCategory($id)
    {
        $query = $this->mysqli->query("SELECT * FROM categories WHERE parent_id = $id AND NOT parent_id = -1");
        if ($query->num_rows > 0) {
            return true;
        }
        return false;
    }

    private function showCategory_Tree($id, $name)
    {
    
    }

    public function categoryTree($gender = 0)
    {
        $query = $this->mysqli->query("SELECT * FROM categories WHERE gender = $gender AND parent_id = -1 AND first_parent_id = -1");
        $id = 0;
        if ($query->num_rows > 0) {
            while ($row = $query->fetch_assoc()) {
                $id = $row["id"];
                $name = $row["category_name"];
                $this->showCategory_Tree($id, $name);
            }
        }
    }
}