<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function loterry() {
    $arrNumbers = [];
    while (count($arrNumbers) < 6) {
        $number = rand(1, 49);

        if (!in_array($number, $arrNumbers)) {
            $arrNumbers[] = $number;
        }
    }
    return $arrNumbers;
}

//$arr= loterry();
//echo var_dump($arr);
echo '<br>';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $arrUser = $_POST['numbers'];
    if (isset($arrUser) && count($arrUser) === 6) {
        var_dump($arrUser);
        $numbersToWin = loterry();
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
        echo 'niepoprawne';
    }
}