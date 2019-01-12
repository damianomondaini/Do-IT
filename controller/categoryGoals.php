<?php

require_once('./model/CategoryManager.php');

function listCategories()
{
    $categoriesManager = new CategoryManager();
    $categories = $categoriesManager->getCategories();

    require('./view/listCategoriesView.php');
}