<?php

class Manager
{
    protected function dbConnect()
    {
        $db = new PDO('mysql:host=localhost;dbname=do-it-v1;charset=utf8', 'root', '');
        
        return $db;
    }
}