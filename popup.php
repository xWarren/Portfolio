<style>
.modal-body, .modal-header, .modal-footer {
  background-color: #34495e;
  color: #f1c40f;
}
</style>
<div id="loginModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Sign In</h4>
      </div>
      <div class="modal-body">
        <form action="" method="post">

                      <div class="form-group">
                        <label for="email">Username:</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Enter your Username">
                      </div>
                      <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" id="pwd" name="password" placeholder="Enter your Password">
                      </div>
                      <div class="checkbox">
                        <label>
                        <input type="checkbox" name="admin" value = "yes"> Login as Admin 
                        </label>
                      </div>
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-success" name ="login" value="Submit">Login</button>
        </form>
      </div>
    </div>

  </div>
</div>

<?php
include 'logs/login.php';
?>

<div id="registerModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Create Account</h4>
      </div>
      <div class="modal-body">
        <form action="" method="post">

                      <div class="form-group">
                        <label for="email">First Name:</label>
                        <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Enter your first name">
                      </div>
                      <div class="form-group">
                        <label for="email">Last Name:</label>
                        <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Enter your last name">
                      </div>
                      <div class="form-group">
                        <label for="email">Full Address:</label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="Enter your full address">
                      </div>
                      <div class="form-group">
                        <label for="email">Username:</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username">
                      </div>
                      <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" id="pwd" name="password" placeholder="Enter your password">
                      </div>
                     
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-success" name = "register" value="Submit">Register</button>
        </form>
      </div>
    </div>

  </div>
</div>

<?php
include 'logs/register.php';
 ?>
 <!--error modal-->
 <div id="error" class="modal fade" role="dialog">
 <div class="modal-dialog">
  <!-- Modal content login-->
 <div class="modal-content">
  <div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
 <h4 class="modal-title">Create Your Account</h4>
</div>
<div class="modal-body">
  <p> All fields are required !!! <p>
   </div>
<div class="modal-footer">
  <button type="button" class="btn btn-default" data-dismiss="modal">OK</button>
           </div>
         </div>
     </div>
 </div>
<!--error modal for login-->
 <div id="Errors" class="modal fade" role="dialog">
<div class="modal-dialog">
 <!-- Modal content login-->
 <div class="modal-content">
<div class="modal-header">
  <button type="button" class="close" data-dismiss="modal">&times;</button>
 <h4 class="modal-title">Login Error</h4>
    </div>
      <div class="modal-body">
     <p> All fields are required !!! <p>
    </div>
       <div class="modal-footer">
     <button type="button" class="btn btn-default" data-dismiss="modal">OK</button>
     </div>
     </div>
    </div>
  </div>
<div id="adminModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"  style="color:green;">Admin Panel</h4>
      </div>
      <div class="modal-body">
        <form action="panel.php" method="post" enctype="multipart/form-data">
                       <div class="form-group">
                        <label for="title" style="color:green;">Insert New Food:</label>
                        <input type="text" class="form-control" name="foodie">
                      </div>
                      <div class="form-group" style="color:green;">
                        <label for="category">Brand Name:</label>
                        <input type="text" class="form-control" name="name">
                      </div>
                    <div class="form-group" style="color:green;">
                        <label for="amount">Price: </label>
                        <input type="text" class="form-control" name = "price">
                      </div>
                      <div class="form-group" style="color:green;">
                        <label for="amount">Upload Images: </label>
                        <input type="file" class="form-control" name = "cover_img">
                      </div>
                  
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">CLOSE</button>
          <button type="submit" class="btn btn-success" name = "inputfood" value="Submit">INSERT</button>
        </form>
      </div>
    </div>

  </div>
</div>

<div id="orderModal" class="modal fade" role="dialog">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
 <button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title">Orders</h4>
 </div>
 <div class="modal-body">
<form action="PHP.php" method="post" enctype="multipart/form-data">
<div class="form-group"  style="overflow: scroll; height: 300px;">
<label for="title">All Items:</label><br>
  <table id="table" class="table table-hover table-fixed" >
<tr>
 <th>Title</th>
<th>Quantity</th>
   <th>Price</th>
<th>Remove</th>
   </tr>
 <?php        
   if(isset($_SESSION['order'])) {
    $TablePrice = array();
     foreach($_SESSION['order'] as $val) {
      array_push($TablePrice, $cartClass->getTotals($val[2], $val[3]));
                  echo '<tr>
                        <td>' . $val[1] . ' </td>
                        <td>'  . $val[3]   .  '</td>
                        <td> ₱ ' . $val[2]  . '.00</td>
                        <td type="button" 
                        id="'. $val[0].'"
                        price="'.$val[2].'"
                      class="remove btn btn-danger">Remove
                       </td>
                       </tr>';
                    }
                  }
              ?>
           <tr>
          <td><strong>Grand Total:</strong></td>
          <td></td>
         <td>₱<strong id="total"> 
       <?php 
       echo isset($_SESSION['order'])? array_sum($TablePrice): ''; 
   $_SESSION['totalsPrice'] = isset($_SESSION['total'])? array_sum($TablePrice) : '';

 ?>
 </strong>.00</td>
<td></td>
</tr>
 </table>
</div>
 </div>
 <div class="modal-footer">
 <button type="submit" class="btn btn-warning" name="Cancel" value="Submit" >Cancel</button>
  <button type="submit" class="btn btn-success" name = "Orders" value="Submit">Confirm Order</button>
 </form>
    </div>
      </div>
  </div>
</div>
          <script>
$(document).ready(function(){
$("#orderModal").on('hide.bs.modal', function () {
  location.replace("PHP.php");
    });
      $(".remove").click(function(){
var item_price = $(this).attr("price");
 var ItemId = $(this).attr("id");
  var total = $("#total").text();
  //update total displayed 
var total_sum = total - item_price;
   //remove the entire row (tr)
    $(this).closest("tr").remove();
  //place the new total at the total tr tag
             $("#total").text(total_sum);
 $.post('PHP.php', {remove_id: ItemId, total: total_sum}, function(data){
    });
});
    });
  </script>
  <?php 
     if(isset($_POST['remove_id'])) {
   $cartClass->removeItems($_SESSION['order'], $_POST['remove_id']);
      }
  ?>
  <?php                                  
  if(isset($_SESSION['user_id'])) {
  $test = $infoClass->userData($_SESSION['user_id']);
  }
  ?>
    <div id="confirm" class="modal fade" role="dialog">
 <div class="modal-dialog">
    <div class="modal-content">
<div class="modal-header">
 <button type="button" class="close" data-dismiss="modal">&times;</button>
  <h4 class="modal-title">Your order has been approved!</h4>
 </div>
     <div class="modal-body">
 <div class="form-group">
     <label for="test">Name:<?php echo $test->firstname; ?></label><br>
      </div>
      <div class="form-group">
<label for="test">Shipping Address: <?php echo $test->address; ?> </label><br>
 </div>
 <div class="form-group">
 <label for="date">ETA: 1 hour</label><br>
    </div>
    <div class="form-group">
 <label for="date">ModeOfPayment: Cash on Delivery</label><br>
    </div>
  <div class="form-group">
 <label for="date">Thank you for buying!</label><br>
    </div>
</div>
 <div class="modal-footer">
 <button type="button" class="btn btn-success" name ="ok" data-dismiss="modal">Accept</button>
   </div>
 </div>
</div>
</div>
 <script>
$("#confirmationModal").on('hide.bs.modal', function () {
  location.replace("cancel.php");
});
</script>
<!--error modal for login-->
<div id="loginWarning" class="modal fade" role="dialog">
 <div class="modal-dialog">
 <!-- Modal content login-->
 <div class="modal-content">
      <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
 <h4 class="modal-title">Not logged in!</h4>
    </div>
 <div class="modal-body">
  <p>You need to  logged in! <p>
   </div>
 <div class="modal-footer">
   <button type="button" class="btn btn-danger" data-dismiss="modal">Exit</button>
    </div>
    </div>
   </div>
 </div>
