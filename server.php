<?php
    session_start();
    require  'C:\xampp\htdocs\vendor\autoload.php';
    include 'classes/Info.php';
    include 'classes/Foods.php';
    include 'classes/Cart.php';
    $connection = new MongoDB\Client;
    $db = $connection->foodorder;
    $collection_info = $db->info;
    $collection_food = $db->foods;
    $collection_carts = $db->cart;
    
    $infoClass = new Infos($collection_info);
    $foodClass = new Foods($collection_food);
    $cartClass = new Carts($collection_carts);

    $var = ['admin_id'];
?>