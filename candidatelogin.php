<?php include 'header.php' ;  ?>
<?php include 'passwordvelidation.php';  ?>
<table width="100%">
    <tr>
        <td width="15%"></td>
        <td width="70%">
         <?php
if(isset($_POST['candidatelogin']))
{
    $email=$_POST['email'];
    $pass=$_POST['password'];
    $con=  mysqli_connect("localhost","root", "","evoting");
    $q="select * from candidate where email='$email' and  password='$pass'";
    $result=  mysqli_query($con,$q);
if($row=mysqli_fetch_assoc($result))
{
    echo "Voter LoggedIn";
}
else 
{
    echo"Invalid Email or Password";
   
}
mysqli_close($con);
}
?>
<html>
    <head>
        <title>Candidate Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
 <script src="js/jquery-2.0.3.min.js" type="text/javascript" ></script>
     <script src="js/bootstrap.min.js" type="text/javascript" ></script>
     <!-- External CSS -->
     <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" >

    </head>
    <body>
        <div class="container-fluid">
<div class="panel panel-info">
 <div class="panel-heading">Candidate Login</div>
  <div class="panel-body" >
      <form action="candidatelogin.php" method="post">
          
               <div class="form-group">
                <label>Email Id</label>
               <input type="text" name="email" class="form-control"/>
       </div>
      
               <div class="form-group">
                <label>Password</label>
                <input type="password" id="psw" name="password" class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required/>
              
       </div>

              <div class="form-group">
      <input type="submit" class="btn btn-info" value="Login" name="candidatelogin">
 </div>
    </form>
   </div>
  </div>
 </div>
    </body>
</html>
</td>
<td width="15%"></td>
</tr>
</table>
<?php include 'footer.php'?>