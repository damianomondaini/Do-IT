<?php
require('controller/categoryGoals.php');

try
{
    if (isset($_GET['action']))
    {
        if ($_GET['action'] == 'listCategories')
        {
            listCategories();
        }
    }
    else
    {
        listCategories();
    }
}
catch(Exception $e)
{
    echo 'Error : ' . $e->getMessage();
}