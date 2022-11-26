<?php
include ("../registration/db.php");
class Polzovatel
{
    public static  function sign($login,$password){
        $db=db::dbConnection();
        $sql="select * from user where login='$login' and password='$password'";
        $result=$db->query($sql)->fetch_assoc();
        if ($result<>NULL){
            session_start();
            $_SESSION['user']=['name'=>$result['name']];

            return $result['name'];
        }else{
            return null;
        }
    }

    public static function registration($name,$login,$password){
        $db=db::dbConnection();
//        $pi=$_POST['password'];
//        for ($i=0;$i<strlen($pi);$i++){
//            if ($pi[$i]%2<>0){
//                require_once "../registration/errorRegistration.php";
//                break;
//            }else{
                $sql="INSERT INTO user (id, name, login, password) VALUES (NULL, '$name', '$login', '$password');";
                $result=$db->query($sql);
                return $result;
            }
//        }
//
//
//    }
}