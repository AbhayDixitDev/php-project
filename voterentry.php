<?php include 'header.php'?>
<?php include 'passwordvelidation.php'?>
  <table >
        <tr >
            <td width="20%" >
                <img src="images/20171213_115805437.jpg" width="100%" />
            </td>
        <td width="60%">
        <?php
        if(isset($_POST['b1']))
        {
            $nm=$_POST['name'];
            $mob=$_POST['mobile'];
            $aadh=$_POST['aadh'];
            $gen=$_POST['gender'];
            $state=$_POST['state'];
            $dis=$_POST['dis'];
            $vil=$_POST['vil'];
            $ward=$_POST['ward'];
            $dob=$_POST['dob'];
            $age=$_POST['age'];
            $fn=$_POST['fn'];
            $mn=$_POST['mn'];
            $em=$_POST['em'];
            $photo=$_POST['photo'];
            $pass=$_POST['password'];
            $con=  mysqli_connect("localhost", "root","", "evoting");
            $q="insert into voter1 values('','$nm','$fn','$mn','$age','$dob','$em','$aadh','$mob','$gen','$state','$dis','$vil','$ward','$photo','$pass')";
            mysqli_query($con, $q);
            echo"voter registration Success----";
        }
        ?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
 <script src="js/jquery-2.0.3.min.js" type="text/javascript" ></script>
     <script src="js/bootstrap.min.js" type="text/javascript" ></script>
     <!-- External CSS -->
     <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" >
        <title>Voter Registration</title>
    </head>
    <body>
        <div class="container-fluid">
<div class="panel panel-info">
 <div class="panel-heading">Voter Registration</div>
  <div class="panel-body" >

      <form action="voterentry.php" method="post">
     

     <div class="form-group">
                <label>Name</label>
               <input type="text" name="name" class="form-control" />
       </div>	

     <div class="form-group">
                <label>Mobile</label>
                <input type="text" name="mobile" maxlength="10" class="form-control" />
       </div>	

                          <div class="form-group">
                            <label>Gender</label>
                            <select class="form-control" name="gender">
                                <option value="">----select--</option>
                                <option value="female">Female</option>
                                <option value="male">Male</option>
                                <option value="other">other</option>
                            </select>
                       </div>
	

     <div class="form-group">
                <label>Aadhar Number</label>
                <input type="text" name="aadh" maxlength="12" class="form-control" />
       </div>	

     <div class="form-group">
                <label>State</label>
               
                            <select class="form-control" name="state">
                                <option value="">----select--</option>
                                <option value="MADHYA PRADESH">MADHYA PRADESH</option>
                                <option value="RAJSTHAN">RAJSTHAN</option>
                                <option value="UTTAR PRADESDH">UTTAR PRADESDH</option>
                                <option value="CHHATISHGARH">CHHATISHGARH</option>
                                <option value="MAHARASTRA">MAHARASTRA</option>
                                <option value="DELHI">DELHI</option>
                                <option value="GUJRAT">GUJRAT</option>
                                

                            </select>
                       

       </div>	

     <div class="form-group">
                            <label>District</label>
                            <select class="form-control" name="dis">
                                <option value="">----select--</option>
                                <option value="Sagar">Sagar</option>
                                <option value="Damoh">Damoh</option>
                                <option value="Bhopal">Bhopal</option>
                                <option value="Seoni">seoni</option>
                                <option value="Jabalpur">Jabalpur</option>
                                <option value="Vidisha">Vidisha</option>
                                <option value="Gwalior">Gwalior</option>
                                <option value="Indore">Indore</option>
                                <option value="Mandla">Mandla</option>
                            </select>
                       </div>	

     <div class="form-group">
                <label>Village</label>
               <input type="text" name="vil" class="form-control"/>
       </div>	

     <div class="form-group">
                <label>Ward</label>
               <input type="text" name="ward" class="form-control"/>
       </div>	

     <div class="form-group">
                <label>DOB</label>
               <input type="date" name="dob" class="form-control"/>
       </div>	

     <div class="form-group">
                <label>Age</label>
                <input type="text" name="age" class="form-control"/>
       </div>	

     <div class="form-group">
                <label>Father Name</label>
               <input type="text" name="fn" class="form-control"/>
       </div>
    <div class="form-group">
                <label>Mother Name</label>
               <input type="text" name="mn" class="form-control"/>
       </div>
    <div class="form-group">
                <label>Email</label>
               <input type="text" name="em" class="form-control"/>
       </div>
          
    <div class="form-group">
                <label>Photo</label>
               <input type="file" name="photo" class="form-control"/>
       </div>
          
          <div class="form-group">
                <label>Password</label>
                <input type="password" id="psw" name="password" class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required/>
       </div>

        <div class="form-group">
            <input type="submit" class="btn btn-info btn-lg" name="b1">
 </div>


</form>

</div>
</div>
</div>
    </body>
</html>
    
    </td>
    <td width="20%"></td>
  </tr>
  </table>
    <?php include 'footer.php'?>

