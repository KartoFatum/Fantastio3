<?php
include("../registration/Polzovatel.php");
session_start();
if (isset($_SESSION['user']) and isset($_POST['logout'])){
    session_destroy();
    header('Location:/');
}else{
    $login=$_POST['login'];
    $password=$_POST['password'];
    if (isset($_POST['name'])){
        $name=$_POST['name'];
        $result=Polzovatel::registration($name,$login,$password);
        if ($result==false){
            require_once("../registration/errorRegistration.php");
        }
        else{
            header("Location:/");
        }
    }else{
        $result=Polzovatel::sign($login,$password);
        if ($result==null){
            require_once("../registration/errorLogin.php");
        }else{

            $user['name']=$result;
            header("Location:/");
        }
    }
}


