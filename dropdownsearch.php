<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <script src="js/jquery-2.0.3.min.js" type="text/javascript" ></script>
        <script src="js/bootstrap.min.js" type="text/javascript" ></script>
        <!-- External CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" >
        <link href="css/menuhome.css" rel="stylesheet" type="text/css" >
        <script src="css/bootstrap.js" type="text/javascript"></script>
        <script src="css/bootstrap_1.js" type="text/javascript"></script>
<style>
.dropbtn {
  background: linear-gradient(to bottom,white,skyblue);
  color: white;
  padding: 13px;
  font-size: 15px;
  border: none;
  cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
  background-color: white;
}

#myInput {
  box-sizing: border-box;
  background-image: url('images/b_search.png');
  background-position: 14px 16px;
  background-repeat: no-repeat;
  font-size: 16px;
  padding: 14px 20px 12px 45px;
  border: none;
  border-bottom: 1px solid #ddd;
}

#myInput:focus {outline: 3px solid #ddd;}

.dropdown {
  position: relative;
  display: block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background: linear-gradient(to bottom,white,skyblue);
  min-width: 230px;
  overflow: auto;
  border: 1px solid #ddd;
  z-index: 1;
}

.dropdown-content a {
  color: white;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}
.dropdown-content a:hover{
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown a:hover {background-color: white;}

.show {display: block;}
</style>
</head>
<body>
<div class="dropdown">
  <button onmouseover="myFunction()" class="dropbtn " >Search</button>
  <div id="myDropdown" class="dropdown-content">
    <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
    <a href="index.html">Home</a>
    <a href="aboutus.html">About us</a>
    <a href="adminlogin.php">Admin Login</a>
    <a href="voterlogin.php">Voter Login</a>
    <a href="candidatelogin.php">Candidate Login</a>
    <a href="contactus.php">Contact us</a>
    <a href="team.php">Team</a>
    <a href="evoting.php">What is E-voting</a>
    <a href="help.php">Help</a>
  </div>
</div>

<script>
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
} 

function filterFunction() {
  var input, filter, ul, li, a, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  div = document.getElementById("myDropdown");
  a = div.getElementsByTagName("a");
  for (i = 0; i < a.length; i++) {
    txtValue = a[i].textContent || a[i].innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      a[i].style.display = "";
    } else {
      a[i].style.display = "";
    }
  }
}
</script>

</body>
</html>
