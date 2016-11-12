<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function loterry($start, $end) {

    $arrNumbers = [];
    while (count($arrNumbers) < 6) {
        $number = rand($start, $end);

        if (!in_array($number, $arrNumbers)) {
            $arrNumbers[] = $number;
        }
    }
    return $arrNumbers;
}

function checkingNumbers() {
    $start = 1;
    $end = 49;
    if (isset($_GET)) {
        $start = $_GET['start'];
        $end = $_GET['end'];
    }
    $arrUser = $_POST['numbers'];
    if (isset($arrUser) && count($arrUser) === 6) {
        var_dump($arrUser);
        $numbersToWin = loterry($start, $end);
        echo '<br>';
        var_dump($numbersToWin);
        for ($i = 0; $i < 6; $i++) {
            if (in_array($numbersToWin[$i], $arrUser)) {
                echo $numbersToWin[$i] . '<br>';
            } else {
                echo 'pudło' . '<br>';
            }
        }
    } else {
        echo 'niepoprawna ilość liczb';
    }
    var_dump($_GET);
}

//$arr= loterry();
//echo var_dump($arr);
echo '<br>';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    checkingNumbers();

//    $arrUser = $_POST['numbers'];
//    if (isset($arrUser) && count($arrUser) === 6) {
//        var_dump($arrUser);
//        $numbersToWin = loterry(1, 49);
//        echo '<br>';
//        var_dump($numbersToWin);
//        for ($i = 0; $i < 6; $i++) {
//            if (in_array($numbersToWin[$i], $arrUser)) {
//                echo $numbersToWin[$i] . '<br>';
//            } else {
//                echo 'pudło' . '<br>';
//            }
//        }
//    } else {
//        echo 'niepoprawna ilość liczb';
//    }
} elseif ($_SERVER['REQUEST_METHOD'] === 'GET') {
    checkingNumbers();
}