<?php
require_once('Manager.php');

class CategoryManager extends Manager
{
    public function getCategories()
    {
        $db = $this->dbConnect();
        $categories = $db->query('SELECT * FROM categories');

        return $categories;
    }
}