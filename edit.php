<!-- 
Coded by : Badrit Bin Imran
File info: edit.php(editaccount)
 -->


<!-- php part -->
<?php 

session_start();
require "includes/library.php";
if(isset($_SESSION['username']) && !empty($_SESSION['username'])) {
 $username= $_SESSION['username'];
$query_user= "SELECT * from fcc59 WHERE Username='$username'";
$result = mysqli_query($con, $query_user);
$row = mysqli_fetch_array($result);

//IF else statement for processing various forms
//contact
if($_REQUEST['submit']=="btn_contact")
{
    $contact= filter_var($_POST['Contact_No'], FILTER_SANITIZE_STRING);
$query_update_contact="UPDATE fcc59 SET Contact_No='$contact' WHERE Username ='$username' ";

mysqli_query($con, $query_update_contact);
header("Location: http://fcc59.epizy.com/edit.php");
   exit();

}
//address
else if($_REQUEST['submit']=="btn_address")
{ 
    $address= filter_var($_POST['Permanent_Address'], FILTER_SANITIZE_STRING);
$query_update_address="UPDATE fcc59 SET Permanent_Address='$address' WHERE Username ='$username' ";
mysqli_query($con, $query_update_address);

header("Location: http://fcc59.epizy.com/edit.php");
   exit();

}

//institution
else if($_REQUEST['submit']=="btn_instituition")
{
   $instituition=  filter_var($_POST['Current_Instituition'], FILTER_SANITIZE_STRING);
$query_update_institition="UPDATE fcc59 SET Current_Institution='$instituition' WHERE Username ='$username' ";
mysqli_query($con, $query_update_institition);

  
 header("Location: http://fcc59.epizy.com/edit.php");
   exit();
}
}
//Incase of user not logged in
else{
   
 header("Location: http://fcc59.epizy.com/");
   exit();
}



?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="./styles/edit.css?ver=5" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


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
              <a href="http://fcc59.epizy.com/">Logout</a>
              <a href="http://fcc59.epizy.com/display.php">View Data</a> 
         
              <a href="#" id="btn_creds">Credits</a>
              <a href="https://en.wikipedia.org/wiki/Faujdarhat_Cadet_College">About</a>
               <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
              </div>
              
            </div> 
   
<div  class="bg-image"></div>

<div class="bg-form">
    
<h3 class="hidden" >(Rotate for better experience)</h3>
   <div class="forms">
       <h2>Edit Info</h2>
    
<!-- FIrst login form for changing contact number -->
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="contact_no"><b> Number:</b></label>
        <div class="contact">
        <input type="text" placeholder="<?php echo $row['Contact_No']; ?>" name="Contact_No" required>
        <button type="submit" name="submit" class="btn" value="btn_contact">Save</button>
        </div>
        </form>
<!-- Second login form for changing Address -->
        <form action="" method="post">          
                <label for="Permanent_Address"><b> Address:</b></label>
                <div class="address">
                <input type="text" placeholder="<?php echo $row['Permanent_Address']; ?>" name="Permanent_Address" required>
                <button type="submit" name="submit" class="btn" value="btn_address">Save</button>
                </div>
        </form>
<!-- Third Login form for changing Instituiton -->
        <form action="" method="post">          
            <label for="Current_Instituition"><b>Instituition:</b></label>
            <div class= "instituition">
            <input type="text"  placeholder="<?php echo $row['Current_Institution']; ?>" name="Current_Instituition" required >
            <button type="submit" name="submit" class="btn"  value="btn_instituition">Save</button>
            </div></form>

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
//This part is for using the responsive nav bar
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


</body>
</html>