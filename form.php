<?php
session_start();

if (isset($_POST['submit'])) {

    if (!isset($_SESSION['productarr'])) {
        $_SESSION['productarr'][] = array(
            'image' => $_POST['image'],
            'name' =>  $_POST['name'],
            'price' =>$_POST['price'],
            'description' => $_POST['details']
        );
    } else {
        $_SESSION['productarr'][] = array(
            'image' => $_POST['image'],
            'name' =>  $_POST['name'], 
            'description' => $_POST['details'],
            'price' =>$_POST['price'],        );
    }
    header('Location:Home.php');
}

?>