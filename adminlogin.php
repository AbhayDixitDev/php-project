<div class="form" id="myForm">
    <form action="adminlogin.php" method="post" class="form-container">
    <h1>Login</h1>
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
    <button type="submit" class="btn" name="login">Login</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>
<?php
if(isset($_POST['login']))
{
    $email=$_POST['email'];
    $pass=$_POST['psw'];
    $con=  mysqli_connect("localhost","root", "","evoting");
    $q="select * from admin where email='$email' and  password='$pass'";
    $result=mysqli_query($con,$q);
if($row=mysqli_fetch_assoc($result))
{ 
    header('location: welcomeforvoting.php');
    return;
}
else 
{
    echo"invalid aadhar or password";
}
mysqli_close($con);
} ?>