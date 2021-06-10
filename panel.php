<?php
   include 'server.php';
  if(isset($_POST['inputfood'])) {

    if(!empty($_POST['foodie']) && !empty($_POST['name'])  && !empty($_POST['price'])  && !empty($_FILES['cover_img'])) {

        $foodClass->foodlist(
        $_POST['foodie'],
        $_POST['name'],
        $_POST['price'],
        $_FILES['cover_img']['tmp_name']
       );   
    }
    header('Location: php.php');
  }
?>