<?php include 'header.php' ;  ?>
<?php include 'passwordvelidation.php';  ?>
<table width="100%">
    <tr>
        <td width="15%"></td>
        <td width="70%">
         <?php
if(isset($_POST['voterlogin']))
{
    $aadh=$_POST['aadhar'];
    $pass=$_POST['password'];
    $con=  mysqli_connect("localhost","root", "","evoting");
    $q="select * from voter1 where adhaar='$aadh' and  password='$pass'";
    $result=  mysqli_query($con,$q);
if($row=mysqli_fetch_assoc($result))
{
    echo "Voter Logined";
}
else 
{
    echo"invalid aadhar or password";
   
}
mysqli_close($con);
}
?>
<html>
    <head>
        <title>Voter Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
 <script src="js/jquery-2.0.3.min.js" type="text/javascript" ></script>
     <script src="js/bootstrap.min.js" type="text/javascript" ></script>
     <!-- External CSS -->
     <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" >

    </head>
    <body>
        <div class="container-fluid">
<div class="panel panel-info">
 <div class="panel-heading">Voter Login</div>
  <div class="panel-body" >
      <form action="voterlogin.php" method="post">
          
               <div class="form-group">
                <label>Aadhar Number</label>
               <input type="text" name="aadhar" class="form-control"/>
       </div>
      
               <div class="form-group">
                <label>Password</label>
                <input type="password" id="psw" name="password" class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required/>
              
       </div>

              <div class="form-group">
      <input type="submit" class="btn btn-info" value="Login" name="voterlogin">
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