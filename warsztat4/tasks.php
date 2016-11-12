<?php

session_start();
if (!isset($_COOKIE['user'])) {
    setcookie('user', 'tasks');
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    //var_dump($_POST);
    //$_SESSION['tasks']=[];
    if (!isset($_SESSION['tasks'])) {
        if ($_COOKIE['user']) {
            $_SESSION['tasks'] = unserialize($_COOKIE['user']);
        }
    }

    $_SESSION['tasks'][] = $_POST['task'];
    setcookie('user', serialize($_SESSION['tasks']), time() + 3600);
}

//var_dump($_SESSION);
//var_dump($_COOKIE['user']);

function displayTasks() {
    if (isset($_SESSION['tasks'])) {
        echo 'Twoje zadania na dziś'.'<br>';
        foreach ($_SESSION['tasks'] as $key => $value) {
            
            echo ($key + 1) . '. ' . $value . '<br>';
        }
    } else {
        return;
    }
}
echo displayTasks();
