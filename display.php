<!-- 
Coded by : Badrit Bin Imran
File info: display.php (displays all info)
 -->
 <!DOCTYPE html>
<?php session_start();


 ?>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="./styles/display_style.css?version=7">

   <!-- Showing the top icon beside the title and support for different browsers -->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="shortcut icon" href="./assets/Favicon.ico" type="image/x-icon">


  
    <title>Faujians</title>
  </head>
<body>



    <div class="topnav" id="myTopnav">
        <div class="topnav-left" id="topnav-left">
            <a>DEEDS NOT WORDS  </a><img src ="./assets/fcc.png" id="topnav-left-img" >
          </div>
             <div class="topnav-right">
             <?php if($_SESSION['username']) :?>

              <a href="logout.php"  >Logout</a>
              <?php else :?>
               <a href="index.php"  >Home</a>
              <?php endif;?>
                <?php if($_SESSION['username']) :?>

              <a href="edit.php"  >Edit Account</a>
              <?php else :?>
               <a href="https://fcc.army.mil.bd/">Official Site</a>
              <?php endif;?>
              
              <a href="#" id="btn_creds">Credits</a>
              <a href="https://en.wikipedia.org/wiki/Faujdarhat_Cadet_College">About</a>
               <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
              </div>
              
            </div> 
            
        <main>

<?php
//Initializing connection variables
$host = "host";
$user = "username";
$password_db = "pass";
$database = "db";
$query_show= "SELECT * from fcc59";


//The salt
$options = [  'cost' => 14, ];
		
//Initializing the connection object
$con = mysqli_connect($host, $user, $password_db, $database);
//Checking for successfull connections
if(mysqli_connect_errno($con)){


    //Uncomment this while testing  
    //echo "Failed to connect to MySQL:".mysqli_connect_errno($con);
    echo "<center><h1>Oops Looks Like Something Went Wrong! Please Try Again Later!</h1></center>";
	}
	else{
        if($_SESSION['username'])
         {
             echo "<center><h1>Welcome ".$_SESSION['username']."</center></h1>";
                         echo"<h4>(Please rotate for a better view)</h4> ";

//Printing the table (fullname)
  echo"<span class='display'>";
  echo'<table cellspacing="0" border="0" id="freeze">';
  echo"<thead><tr><th>Serial</th> <th> Cadet Number</th> <th> Cadet Name</th><th>Full Name</th><th>Blood Group</th><th>Contact Number</th><th>Institution</th><th>Permanent Address </th></tr></thead>";
  $xyz = mysqli_query($con, $query_show);
  while($row = mysqli_fetch_array($xyz)){
  echo"<tr>";
  echo "<td>".$row['id']."</td>";
  echo "<td>".$row['Cadet_No']."</td>";
  echo "<td>".$row['Cadet_Name']."</td>";
  echo "<td>".$row['Full_Name']."</td>";
  echo "<td>".$row['Blood_Group']."</td>";
  echo "<td>".$row['Contact_No']."</td>";
  echo "<td>".$row['Current_Institution']."</td>";
   echo "<td>".$row['Permanent_Address']."</td>";
  echo"</tr>";
  }
  echo"</table>";
  echo"</span>";

  }
      else{
	      //Printing the guest table
         echo "<center><h1>Welcome Guest</center></h1>
          <h4>(Please rotate for a better view)</h4>";
         
            echo"<span class='display'>";
            echo'<table cellspacing="0" border="0" id="freeze">';
            echo"<thead><tr><th>Serial</th> <th> Cadet Number</th> <th> Cadet Name</th><th>Full Name</th><th>Institution</th></tr></thead>";
            $xyz = mysqli_query($con, $query_show);
            while($row = mysqli_fetch_array($xyz)){
            echo"<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['Cadet_No']."</td>";
            echo "<td>".$row['Cadet_Name']."</td>";
            echo "<td>".$row['Full_Name']."</td>"; 
            echo "<td>".$row['Current_Institution']."</td>";         
            echo"</tr>";
  }
  echo"</table>";
  echo"</span>";
         


    }
  
    }

  //*************************Password Hash Function *************/
/*
  $hashedpassword="";
  $i=0;
   $pass_insert ="UPDATE fcc59 SET Password= '$hashedpassword' WHERE id='$i'";
  while($row = mysqli_fetch_array($xyz)){
   $password =$row['Cadet_No'];
    echo "$password"." ";
   
    echo "$i";
    $hashedpassword = password_hash($password, PASSWORD_DEFAULT, $options);
  
   echo "$hashedpassword"." "."";
    mysqli_query($con, $pass_insert);
 
    $i +=1;
    $pass_insert ="UPDATE fcc59 SET Password= '$hashedpassword' WHERE id='$i'";
   echo "<br>";
  }
  */

?>


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
//JS for responsive navbar

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

//JS for a modal login bar
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
