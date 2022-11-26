<?php

class db
{
public static function dbConnection(){
    $db=mysqli_connect('localhost','root','','shop');
    return $db;
}
}