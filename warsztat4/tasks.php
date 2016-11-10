<?php
session_start();

if($_SERVER['REQUEST_METHOD']==='POST'){
    //var_dump($_POST);
    //$_SESSION['tasks']=[];
    if(!isset($_SESSION['tasks'])){
        $_SESSION['tasks']=[];
    }
    
    $_SESSION['tasks'][]=$_POST['task'];
    setcookie('user', serialize($_SESSION['tasks']));
}

var_dump($_SESSION);
var_dump($_COOKIE['user']);
