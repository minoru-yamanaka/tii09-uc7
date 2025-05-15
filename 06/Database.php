<?php


Class Database
{
    public static function getInstace()
    {
        return new PDO("mysql:host=localhost;bdname=agenda", "root", "");
    }
}
// teste para chamar e verificar se está correto 
// $bd = Database::getInstace();

// https://www.php.net/manual/pt_BR/refs.database.abstract.php
?>

