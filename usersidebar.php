<!DOCTYPE html>
<html>
<head>
<style>
body {
  font-family: "Lato", sans-serif;
}

/* Fixed sidenav, full height */
.sidenav {
  height: 100%;
  width: 230px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: black;
  overflow-x: hidden;
  padding-top: 40px;
    
}

/* Style the sidenav links and the dropdown button */
.sidenav a, .dropdown-btn {
  padding: 20px 20px 20px 20px;
  text-decoration: none;
  font-size: 20px;
  color: ghostwhite;
  display: block;
  border: none;
  background: none;
  width: 100%;
  text-align: left;
  cursor: pointer;
  outline: none;
    
}

/* On mouse-over */
.sidenav a:hover, .dropdown-btn:hover {
  color: white;
}

/* Main content */

/* Add an active class to the active dropdown button */
.active {
  background-color: lightgray;
  color: black;
}

/* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
.dropdown-container {
  display: none;
  background-color: grey;
  padding-left: 5px;
    color: black;
}

/* Optional: Style the caret down icon */
.fa-caret-down {
  float: right;
  padding-right: 10px;
}

</style>
    </head>
<body>

<div class="sidenav">
    <button class="dropdown-btn"> <a>Home</a></button>
        <div class="dropdown-container">
             <a href="user.php">DASHBOARD</a>
    <a href="updateuser.php">UPDATE PROFILE</a>
    </div>
    <button class="dropdown-btn"><a href="ubrands.php"> BIKES</a></button>
    
  
    <button class="dropdown-btn"> <a>BOOK YOUR TEST DRIVE</a> </button>
       
              <div class="dropdown-container">
    <a href="testdrivebooking.php">New booking</a>
     <a href="statustest.php">View status</a>
    <a href="viewtestbooking.php">View earlier bookings</a>
  </div>
      
    <button class="dropdown-btn"><a>BOOK YOUR SERVICE DATE</a></button>
     
              <div class="dropdown-container">
    <a href="servicebooking.php">New booking</a>
    <a href="statservice.php">View status</a>
    <a href="viewservicebooking.php">view earlier bookings</a>
  </div>
      


<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}
</script>

</body>
</html> 
