<html lang="en">
<head>
  <title>MCC FOOD</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<?php
   include 'server.php';
   include 'Orders.php';
   include 'popup.php';
 if(isset($_SESSION['user_id'])) {
 $userData = $infoClass->userData($_SESSION['user_id']);
 if ($var>=5) {
  $hide = "hidden";
} else {
  $hide = "";
}
 }
?>
<style>
/*Simple css to style it like a toggle switch*/
.theme-switch-wrapper {
  display: flex;
  align-items: center;

  em {
    margin-left: 10px;
    font-size: 1rem;
  }
}
.theme-switch {
  display: inline-block;
  height: 34px;
  position: relative;
  width: 60px;
}

.theme-switch input {
  display:none;
}

.slider {
  background-color: #ccc;
  bottom: 0;
  cursor: pointer;
  left: 0;
  position: absolute;
  right: 0;
  top: 0;
  transition: .4s;
}

.slider:before {
  background-color: #fff;
  bottom: 4px;
  content: "";
  height: 26px;
  left: 4px;
  position: absolute;
  transition: .4s;
  width: 26px;
}

input:checked + .slider {
  background-color: #66bb6a;
}

input:checked + .slider:before {
  transform: translateX(26px);
}

.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
  body {
  padding: 25px;
  background-color: white;
  color: black;
  font-size: 25px;
}

.dark-mode {
  background-color: black;
  color: white;
}
.footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color:#2d3436;
  color: white;
  text-align: center;
}
.social ul{
    list-style-type: none;
    background-color: #2d3436;
}
.social ul li{
    display: inline;
    padding: 1%;
    background-color:#2d3436;
}
.container-fluid1 {
    padding: 60px 50px;
  }
  .navbar navbar-white navbar-fixed-top{
background-color: black;
  }
</style>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">
      <img src="logos.jpg" alt="Logo" style="width:90px; height: 35px;">
      </a>
    </div>
    <ul class="nav navbar-nav"> 
      <li class="active"><a href="php.php">ALL FOODS</a></li>
      <li class="<?=$hide?>"><a <?php 
                  echo isset($_SESSION['admin_id']) ? ' data-toggle="modal" data-target="#adminModal" ' : "";      
                ?> href="#" color:black;>Panel</a></li>
               <li class="<?=$hide?>"><a <?php 
                        echo isset($_SESSION['user_id']) ? '' : ' data-toggle="modal" data-target="#registerModal"';      
                    ?>  href="#" >Register</a></li>
               <li class="<?=$hide?>"><a <?php 
                    echo isset($_SESSION['user_id']) ? '' : ' data-toggle="modal" data-target="#loginModal"';      
                      ?> href="#"> Sign In </a></li>
                         <li><a <?php 
                  echo isset($_SESSION['user_id']) ? ' data-toggle="modal" data-target="#adminModal" ' : "";      
                ?> href="http://localhost/foodorder/about.php" >About Us</a></li>
     <li><a href="http://localhost/foodorder/PHP.php?show=modal" ><span id="cart" ><span class="glyphicon glyphicon-cutlery" id="shopcart">
                       <?php echo isset($_SESSION['order'])? count($_SESSION['order']) : ''; 
                     echo isset($_GET['show']) && isset($_SESSION['order']) ? '<script>$("#orderModal").modal("show");</script>' : '';
                      ?>
                      
                   </span>
                      </span></a></li>
                   <li><a href="#"><span class="glyphicon glyphicon-user"></span><?php
                  echo isset($userData) ? $userData->firstname : '';
                 ?></a></li>
         <li><a href="signout.php"><span class="glyphicon glyphicon-log-out"></span>Sign Out</a></li>
    </ul>
    <button onclick="myFunction()">Toggle dark mode</button>

<script>
function myFunction() {
   var element = document.body;
   element.classList.toggle("dark-mode");
}
</script>
  </div>
  </nav>
  <br><br><br>

    <li><a href= <?php
        $query = $collection_food->find([],['projection'=>['name'=>1, '_id'=>0]]);
          $distinct = $collection_food->distinct('name', $query);
        foreach($distinct as $val){
          echo "<li><a href =PHP.php?categ=$val>" . $val . "</a></li>";
       }
     ?>  </a></li>
  </ul>
</div>
<!-- Container (Portfolio Section) -->
<div id="portfolio" class="container-fluid1 text-center bg-grey">
  <h2 style="border: 2px solid WHITE;
  outline: #2d3436 solid 10px;
  margin: auto;  
  padding: 20px;
  text-align: center;">FOOD MENU</h2>
<?php
$categ = (isset($_GET['categ'])) ? $_GET['categ'] : '';
echo "<div class='row' style='margin-top: 100px;  '>";
$foodClass->display($categ);
 echo "</div>";
  ?>
 <br>
  <br>
  <script>
$(document).ready(function(){
    $('[data-toggle="popover"]').popover(); 

$(".titles").hover(
    function(){

    var fullTitle = $(this).attr("title");
    $(this).text(fullTitle);
    }, 
    function(){

    var shortTitle = $(this).text();
    if(shortTitle.length >= 16) {
      shortTitle = shortTitle.substring(0,16) + "...";

    }
    $(this).text(shortTitle);
});


});

</script>
<script src="carts.js"></script>
<script src="search.js"></script>

<div class="footer">
<section class="social">
        <div class="container text-center">
            <ul>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/50/000000/facebook-new.png"/></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/48/000000/instagram-new.png"/></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/48/000000/twitter.png"/></a>
                </li>
            </ul>
        </div>
    </section>
</div>
 </body>
</html>