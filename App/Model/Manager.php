<?php

class Manager
{
    protected function dbConnect()
    {
        require('App/Config/database.php');
       
        $db = new PDO('mysql:host=' . $dbConfig['host'] . ';dbname=' . $dbConfig['dbname'] . ';charset=utf8', $dbConfig['username'], $dbConfig['password']);

        return $db;
    }
}
