<?php
session_start();
if(isset($_SESSION['name'])==true){
    echo "val: ".$_SESSION['name'];
    setcookie('myFirstCookie',$_SESSION['name'],time()+3600);
    unset($_SESSION['name']);
}
else{
    echo "not set";
}
/**
 * Created by PhpStorm.
 * User: daniel donevski
 * Date: 19.7.2016 г.
 * Time: 12:10
 */