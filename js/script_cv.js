// Get the modal
var modal0 = document.getElementById("myModal0");
var modal1 = document.getElementById("myModal1");
var modal2 = document.getElementById("myModal2");

// Get the button that opens the modal
var btn0 = document.getElementById("myBtn0");
var btn1 = document.getElementById("myBtn1");
var btn2 = document.getElementById("myBtn2");

// Get the <span> element that closes the modal
var close0 = document.getElementsByClassName("close")[0];
var close1 = document.getElementsByClassName("close")[1];
var close2 = document.getElementsByClassName("close")[2];

// When the user clicks on the button, open the modal
btn0.onclick = function() {
  modal0.style.display = "block";
}

btn1.onclick = function() {
  modal1.style.display = "block";
}

btn2.onclick = function() {
    modal2.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
close0.onclick = function() {
  modal0.style.display = "none";
}

close1.onclick = function() {
  modal1.style.display = "none";
}

close2.onclick = function() {
  modal2.style.display = "none";
}


// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal0) {
    modal0.style.display = "none";
  } else if (event.target == modal1) {
    modal1.style.display = "none";
  } else if (event.target == modal2) {
    modal2.style.display = "none";
  }
}