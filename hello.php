<?php
if($_SERVER['REQUEST_METHOD']==='POST'){
    if(!empty($_POST['name'])){
        echo 'Witaj' . ' ' . $_POST['name'];
    }
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

