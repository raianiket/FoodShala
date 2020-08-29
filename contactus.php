<?php
session_start();
?>

<html>

  <head>
    <title> Contact | Foodshala </title>
  </head>

  <link rel="stylesheet" type = "text/css" href ="css/contactus.css">
  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>

  <body>


    <button onclick="topFunction()" id="myBtn" title="Go to top">
      <span class="glyphicon glyphicon-chevron-up"></span>
    </button>
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
            <li><a href="aboutus.php">About</a></li>
            <li class="active"><a href="contactus.php">Contact Us</a></li>
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
            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Tap to Register As <span class="caret"></span> </a>
                <ul class="dropdown-menu">
                <li> <a href="customersignup.php"> Customer </a></li>
              <li> <a href="managersignup.php"> Resturant </a></li>
            
            </ul>
            </li>

            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-log-in"></span> Tap to Login As <span class="caret"></span></a>
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
    <br>

    <div class="col-xs-12 line"><hr></div>

    <div class="container" >
    <div class="col-md-5" style="float: none; margin: 0 auto;">
      <div class="form-area" ">
        <form role="form">
        <br style="clear: both">
          <h3 style="margin-bottom: 25px; text-align: center; font-size: 30px;"> Contact Form</h3>

          <div class="form-group">
            <input type="text" class="form-control" id="name" name="name" placeholder="Name" required autofocus="">
          </div>

          <div class="form-group">
            <input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
          </div>     

          <div class="form-group">
            <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile Number" required>
          </div>

          <div class="form-group">
            <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
          </div>

          <div class="form-group">
           <textarea class="form-control" type="textarea" id="message" placeholder="Message" maxlength="140" rows="7"></textarea>
           <span class="help-block"><p id="characterLeft" class="help-block">Max Character length : 140 </p></span>
          </div> 
          <button type="button" id="submit" name="submit" class="btn btn-primary pull-right"> Submit Form</button>    
        </form>

        
      </div>
    </div>
      
    </div>

<div class="paragraph1">

    <p><h3>Please do let us know, We are here to answer any queries you may have about our <font color="green"><strong>Foodshala</strong></font> experiences. Reach out to us and we will respond as soon as we can.</h3></p>
        <p><b><h3>Contact Details of FoodShala are given below.</h3></b></p>
        <p class="edit2">
        
        <strong>Email      :</strong>  <a href="rai078945@gmail.com">rai078945@gmail.com</a>
        |
        <strong>Phone-mo  :</strong>  7668514255
        
        </p>
        <p class="edit2"><strong>Get in touch with us on Social Media.</strong></p>
        <pre><a href="https://www.facebook.com/" target="_blank"><img src="images/facebook.jpg" width="50px" height="50px"></a>  <a href="https://twitter.com/login" target="_blank"><img src="images/googleplus.png" width="50px" height="50px"></a>  <a href="https://www.instagram.com/accounts/login/" target="_blank"><img src="images/twitter.jpg" width="50px" height="50px"></a>  <a href="https://www.facebook.com/" target="_blank"><img src="images/insta.jpg" width="50px" height="50px"></a></pre>
        <p class="edit2">Share your food experiences and Feedback by mailing it to us at <a href="rai078945@gmail.com">foodshala@gmail.com</a> </p>
      

</div>
     </body>

  <footer class="container-fluid bg-4 text-center">
  <br>
  <p> Foodshala 2020 | &copy All Rights Reserved </p>
  <br>
  </footer>
</html>