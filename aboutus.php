<?php
session_start();
?>

<html>

  <head>
    <title> About | Foodshala </title>
  </head>

  <link rel="stylesheet" type = "text/css" href ="css/aboutus.css">
  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>

  <body>

  <!--Back to top button..................................................................................-->
    <button onclick="topFunction()" id="myBtn" title="Go to top">
      <span class="glyphicon glyphicon-chevron-up"></span>
    </button>
  <!--Javacript for back to top button....................................................................-->
    <script type="text/javascript">
      window.onscroll = function()
      {
        scrollFunction()
      };

      function scrollFunction(){
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("myBtn").style.display = "block";
        } else {
          document.getElementById("myBtn").style.display = "none";
        }
      }

      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>

    <nav class="navbar navbar-inverse navbar-fixed-top navigation-clean-search" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Foodshala</a>
        </div>

        <div class="collapse navbar-collapse " id="myNavbar">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
            <li class="active"><a href="aboutus.php">About</a></li>
            <li><a href="contactus.php">Contact Us</a></li>
          </ul>

<?php
if(isset($_SESSION['login_user1'])){

?>


          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_user1']; ?> </a></li>
            <li><a href="myrestaurant.php">MANAGER CONTROL PANEL</a></li>
            <li><a href="logout_m.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>
<?php
}
else if (isset($_SESSION['login_user2'])) {
  ?>
           <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_user2']; ?> </a></li>
            <li><a href="foodlist.php"><span class="glyphicon glyphicon-cutlery"></span> Food Zone </a></li>
            <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart 
            (<?php
              if(isset($_SESSION["cart"])){
              $count = count($_SESSION["cart"]); 
              echo "$count"; 
            }
              else
                echo "0";
              ?>)
            </a></li>
            <li><a href="logout_u.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>
  <?php        
}
else {

  ?>

<ul class="nav navbar-nav navbar-right">
            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Tap to Register As<span class="caret"></span> </a>
                <ul class="dropdown-menu">
              <li> <a href="customersignup.php"> Customer</a></li>
              <li> <a href="managersignup.php"> Resturant</a></li>
          
            </ul>
            </li>

            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-log-in"></span> Tap to Login As<span class="caret"></span></a>
              <ul class="dropdown-menu">
              <li> <a href="customerlogin.php"> Customer</a></li>
              <li> <a href="managerlogin.php"> Resturant</a></li>

            </ul>
            </li>
          </ul>

<?php
}
?>
        </div>

      </div>
    </nav>

    <div class="wide">
        
        <div class="tagline"><br><br><br><br>Food is the <font color="red"><strong>Ingredient</strong></font>, that blinds us <font color="green"><strong><em>Together</em>.</strong></font></div>
    </div>
    <div class="col-xs-12 line"><hr></div>
    <div class="paragraph1">
    <h1><strong> ABOUT US </strong></h1>
    <h3>
      <p>
      <font color="green"><strong>Foodshala</strong></font> was founded in 2020. We care about quality, craft and disciplined experimentation. We are active contributors to open source software.
        <font color="green"><strong>Foodshala</strong></font>, as described above, can lead to <font color="green"><strong>error free, secure, reliable and fast management system.</strong></font> It can assist the user to concentrate on their other activities rather to concentrate on the record keeping. Thus it will help organization in better utilization of resources. The organization can maintain computerized records without redundant entries. That means that one need not be distracted by information that is not relevant, while being able to reach the information. 
      </p>
      <p>
        <font color="green"><strong>Basically the project describes how to manage for good performance and better services for the clients.</strong></font> 
      </p>
    </h3>  
    </div>
    <div class="col-xs-12 line"><hr></div>

<div class="wide2">
    <div class="col-xs-4 box">
      <img src="images/minimumx.png" height="200px">
    </div>
    <div class="col-xs-4 box">
      <img src="images/locationx.png">
    </div>
    <div class="col-xs-4 box">
      <img src="images/deliveryx.png">
    </div>

    <div class="col-xs-4 box">
      <h2><strong>NO MINIMUM<br> ORDER <br> </strong><hr> </h2>
      <h4>Order any amount<br> you want - no<br> restrictions</h4>
    </div>
    <div class="col-xs-4 box">
      <h2><strong>LIVE ORDER<br> TRACKING <br> </strong><hr> </h2>
      <h4>Know where your<br> order is at any time</h4>
    </div>
    <div class="col-xs-4 box">
      <h2><strong>SUPERFAST<br> DELIVERY <br> </strong><hr> </h2>
      <h4>Hot food delivered to<br> your doorstep</h4>
    </div>
</div>

 <div class="col-xs-12 line"><hr></div>
    
  <div class="paragraph2">
    <div class="missionbox">
      <div class="missionfont">
      <strong>Good Friends, Good Food, Good Times</strong>
      
    </div>
     
    </div>
    
  </div>   

         </body>

  <footer class="container-fluid bg-4 text-center">
  <br>
  <p> Foodshala 2020 | &copy All Rights Reserved </p>
  <br>
  </footer>
</html>