<?php 
 if(isset($_SESSION['order'])){
  if(isset($_POST['Cancel'])) {
   unset($_SESSION['order']);
    header("Location: http://localhost/foodorder/php.php");
     }
      if(isset($_POST['Orders'])) {
       $insert = $collection_carts->insertOne([
        "Details" => $_SESSION['order'],
		"ID-Customers" => $_SESSION['user_id'], 
		   "OrderDate" => new MongoDB\BSON\UTCDateTime()
		    ]);
             $lastInsertedId = $insert->getInsertedId();
              $updateUserProfile = $collection_info->FindOneAndUpdate(["_id"=> $_SESSION['user_id']],['$push' => ["ordersIDS" => $lastInsertedId ] ]);
             echo "<script>
		    $(document).ready(function(){
		   $('#confirm').modal('show');
 		  });
		 </script>";
        unset($_SESSION['order']);
       }
	  }
     ?>