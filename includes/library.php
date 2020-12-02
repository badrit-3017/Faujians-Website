

<?php
//Initializing connection variables
$host = "sql107.epizy.com";
$user = "epiz_27183802";
$password_db = "WODdwohllH";
$database = "epiz_27183802_fcc59";
$connectionOkay= false;
//Initializing the connection object
$con = mysqli_connect($host, $user, $password_db, $database);
//Checking for successfull connections
if(mysqli_connect_errno($con)){
    //Uncomment this while testing to see actual error 
    //echo "Failed to connect to MySQL:".mysqli_connect_errno($con);
    echo "<center><h1>Sorry our servers are down! Please Try Again Later!</h1></center>";
	}
	else{
       
    $connectionOkay=true;
    }
?>