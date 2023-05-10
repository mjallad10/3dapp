<?php

//includes
require 'view/load.php';
require 'model/model.php';
require 'controller/controller.php';

$PageURI = $_SERVER['REQUEST_URI'];
$PageURI =  substr($PageURI,strrpos($PageURI,'index.php')+10);
    if(!$PageURI){
        new Controller('home');
    }
    else{
        new Controller($PageURI);
    }
?>

