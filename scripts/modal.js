
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


