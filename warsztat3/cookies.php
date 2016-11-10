<?php

setcookie('user', date("D M j G:i:s T Y"));

function displayCookie() {
    if (isset($_COOKIE['user'])) {
        $date = $_COOKIE['user'];
    } else {
        return 'jeszcze tu nie byłeś';
    }
    return $date;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_COOKIE['user'])) {
        setcookie('user', date('F j, Y, g:i a'), time() - 10);
        echo 'wyzerowałeś dane';
    }
}
