<?php
session_start();
$image = $_POST['image'];
if (isset($_POST['submit'])) {

    if (isset($_SESSION['productarr'])) {
        $_SESSION['productarr'][] = array(
            'image' => empty($_POST['image']) ? 'https://images.pexels.com/photos/1598505/pexels-photo-1598505.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1' : $_POST['image'],
            'name' => $_POST['name'],
            'price' => $_POST['price'],
            'description' => $_POST['details']
        );
    } else {
        $_SESSION['productarr'][] = array(
            'image' => empty($_POST['image']) ? 'https://images.pexels.com/photos/1598505/pexels-photo-1598505.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1' : $_POST['image'],
            'name' => $_POST['name'],
            'price' => $_POST['price'],
            'description' => $_POST['details']
        );
    }

    header('Location: Home.php');
}

?>