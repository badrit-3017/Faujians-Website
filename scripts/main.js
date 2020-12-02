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
