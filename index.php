<!-- 
Coded by : Badrit Bin Imran
File info: index.php(homepage)
 -->


<!-- php part -->

<?php

session_start();
unset($_SESSION["username"]);
require "includes/library.php";

 if (isset($_POST['submit'])) {

 
  $username=filter_var($_POST['username'],FILTER_SANITIZE_STRING) ;
 $password=filter_var($_POST['password'],FILTER_SANITIZE_STRING) ;
 $query_user= "SELECT * from fcc59 WHERE Username='$username'";
$result = mysqli_query($con, $query_user);

// Associative array
$row = mysqli_fetch_array($result);

 if(password_verify($password,$row['Password'])){
   $_SESSION['username']="$username";
   

   header("Location: http://fcc59.epizy.com/display.php");
   exit();
 
   }
   else{
       echo '<script>alert("Sorry your records do not match anyone in our database!")
       var username =document.getElementById(username);
       var password =document.getElementById(password);
       username.value="";
       password.value="";
    </script>'; 
       
   }
 }


?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src= "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">  </script> 
  <script src="https://kit.fontawesome.com/7677547a12.js" crossorigin="anonymous"></script>

<link rel="stylesheet" href="./styles/style.css?ver=2" />
<script src="./scripts/script.js"></script>



 <!-- Showing the top icon beside the title and support for different browsers -->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="shortcut icon" href="./assets/Favicon.ico" type="image/x-icon">


</head>
<body>


    <div class="topnav" id="myTopnav">
        <div class="topnav-left" id="topnav-left">
            <a>DEEDS NOT WORDS  </a><img src ="./assets/fcc.png" id="topnav-left-img" >
          </div>
             <div class="topnav-right">
              <a href="" id="login_a" data-toggle="modal" data-target="#myModal" >Login</a>
              <a href="https://fcc.army.mil.bd/">Official Site</a>
              <a href="#" id="btn_creds">Credits</a>
              <a href="https://en.wikipedia.org/wiki/Faujdarhat_Cadet_College">About</a>
               <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
              </div>
              
            </div> 
   
<main>

    <div class= "image_text">
    
<img src="./assets/bg.jpg">
<div class="paragraph">
<p>

  With the majestic Bay of Bengal kissing her toes and the lush forests enshrouding her, Faujdarhat Cadet College stands tall, basking in the glory of the 2,875 fine souls that she has produced over 62 long years. 

To unassuming eyes, it was a school designed to ensure a steady pipeline of future leaders for Bangladesh and beyond borders. But to us, FCC was not only an arcadia of knowledge but a beloved guide, a devoted teacher, a magical wisp, and mostly, the  Mother who ignited in us 55 ordinary boys the ever-kindling light of honesty, peace, and prosperity.
</p>
<div class="finisher"><p><i><bold>"Proud to be a Cadet <br> Proud to be a Faujian"</bold></i></p>
</div>

</div>

    </div>
    <div class="container">
     
        <!-- Trigger the modal with a button -->
        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">User Login</button>
       <a href="http://fcc59.epizy.com/display.php"> <button class="guest" >View as Guest</button></a>
  
    </div>
      
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
        
          <!-- Modal content-->
          <div class="modal-content">
            <div class="non-blurry-content">
            <div class="modal-content_background"></div>
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><i class="fas fa-times"></i></button>
              <h4 class="modal-title"> Welcome Back!</h4>
            </div>
            <div class="modal-body">
             <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    
        <div class = "input_username">
            <label for="username"><b>Username :</b></label>
            <input type="text" placeholder="Cadet Name" id="username" name="username" required>
            </div>
        
            <div class="input_password"> 
            <label for="password"><b>Password:</b></label>
            <input type="password" placeholder="Cadet No" id="password" name="password" required>
            </div> 
             <button type="submit"name="submit" id="submit">Login</button>
     </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal" id="close">Close</button>
            </div>
          </div>
        </div>
          
        </div>
      </div>
      </div>


<!-- Trigger/Open The credits -->


<!-- The credits -->
<div id="myCredits" class="credits">

  <!-- Modal content -->
  <div class="credits-content">
    <span class="close_creds">&times;</span>
    <h5>Credits</h5>
    <p>Designed and built by: Badrit(3017) <br>
    Contributors: Ashraf(3023) and Sibbir(3016)
    </p>
   
  </div>

</div>
<script>
   var z=1;
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
  z=z*(-1);
  var y= document.getElementById("topnav-left-img");
  if(z==-1){
      y.style.visibility="hidden";
  }
  else{
      y.style.visibility="visible";
  }
}



// Get the modal
var credits = document.getElementById("myCredits");

// Get the button that opens the modal
var btn = document.getElementById("btn_creds");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close_creds")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  credits.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  credits.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == credits) {
    credits.style.display = "none";
  }
}



</script>





</main>
</body>
</html>