<!DOCTYPE html>
<html>
<head>
<style>
body {
  font-family: "Lato", sans-serif;
}

/* Fixed sidenav, full height */
.sidenav {
  height: 95%;
  width: 250px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: black;
  overflow-x:hidden;
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
  padding-left: 1px;
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
    <button class="dropdown-btn"> <a href="admin.php">Home</a></button>
    <div class="dropdown-container"></div>
    
    <button class="dropdown-btn"><a> Product</a></button>
     
        <div class="dropdown-container">
    <a href="addproduct.php">Add Product</a>
    <a href="viewproduct.php">View product</a>
  </div>
    

    <button class="dropdown-btn"><a> Users</a></button>
     
          <div class="dropdown-container">
    <a href="userview.php">View user</a>
  </div>
    
    <button class="dropdown-btn"><a>Employee</a></button>
     
           <div class="dropdown-container">
                <a href="employeeadd.php">Add Employee</a>
    <a href="employeeview.php">View Employee</a>
    <a href="editemploye.php">Edit Employee</a>
  </div>
    
    <button class="dropdown-btn"><a>Booking</a> </button>
    
  
  <div class="dropdown-container">
      <button class="dropdown-btn">  <a href="#">Test drive booking</a> </button>
       
              <div class="dropdown-container">
    <a href="newtest.php">New booking</a>
    <a href="accepttest.php">Accepted booking</a>
    <a href="notacceptedtest.php">Not Accepted booking</a>
    <a href="inprocesstest.php">Inprocess booking</a>
    <a href="finishedtest.php">Finished booking</a>
    <a href="notfinishedtest.php"> NOT Finished booking</a>
  </div>
      
      <button class="dropdown-btn">service booking</button>
     
              <div class="dropdown-container">
    <a href="newservice.php">New booking</a>
    <a href="acceptservice.php">Accepted booking</a>
     <a href="notacceptservice.php">NOT Accepted booking</a>
     <a href="inprocesservice.php">Inprocess booking</a>
     <a href="finishedservice.php">Finished booking</a>
    <a href="notfinishedservice.php"> NOT Finished booking</a>
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
