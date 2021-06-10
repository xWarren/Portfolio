<?php
 include 'server.php';
  if(isset($_POST['items'])) {  
   if(isset($_SESSION['user_id'])) {
    $val = $foodClass->findFoodById($_POST['items']);
     if(!isset($_SESSION['order'])) { 
      $_SESSION['order']= array(); 
       array_push($_SESSION['order'], $val);
      } else {
     array_push($_SESSION['order'], $val);
    }
   echo count($_SESSION['order']);    
  } else {
 echo "unregistered";
}
 }
  ?>