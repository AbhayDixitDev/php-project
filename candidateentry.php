<?php include 'header.php'?>
<div class="container-fluid">
 <table >
        <tr >
            <td width="25%" >
                <img src="images/20171213_115805437.jpg" width="100%" />
            </td>
        <td width="60%">
<?php
        if(isset($_POST['b1']))
        {
            $nm=$_POST['name'];
            $gen=$_POST['gender'];
            $add=$_POST['address'];
            $city=$_POST['city'];
            $state=$_POST['state'];
            $mob=$_POST['mobile'];
            $em=$_POST['email'];
            $age=$_POST['age'];
            $ppt=$_POST['ppt'];
            $sym=$_POST['symb'];
            $qua=$_POST['qua'];
            $con=  mysqli_connect("localhost", "root","", "evoting");
            $q="insert into candidate values('$nm','$gen','$add','$city','$state','$mob','$em','$age','$ppt','$sym','$qua','')";
            mysqli_query($con, $q);
            echo"Registration Success----";
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

        <title>Candidate Registration</title>
    </head>
    <body>
        <div class="container-fluid">
<div class="panel panel-info">
 <div class="panel-heading">Candidate Registration</div>
  <div class="panel-body" >

<form action="candidateentry.php" method="post">

     <div class="form-group">
                <label>Name</label>
               <input type="text" name="name" class="form-control" />
       </div>	

     <div class="form-group">
                <label>Gender</label>
               <input type="text" name="gender" class="form-control" />
       </div>	

     <div class="form-group">
                <label>Address</label>
               <input type="text" name="address" class="form-control"/>
       </div>	

     <div class="form-group">
                <label>City</label>
               <input type="text" name="city" class="form-control"/>
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
                <label>Mobile</label>
               <input type="text" name="mobile" class="form-control"/>
       </div>	

     <div class="form-group">
                <label>Email</label>
               <input type="text" name="email" class="form-control"/>
       </div>	

     <div class="form-group">
                <label>Age</label>
               <input type="text" name="age" class="form-control"/>
       </div>	

     <div class="form-group">
                <label>Total property</label>
               <input type="text" name="ppt" class="form-control"/>
       </div>	

     <div class="form-group">
                <label>Symbol</label>
                <input type="file" name="symb" class="form-control"/>
       </div>	

     <div class="form-group">
                <label>Qualification</label>
               <input type="text" name="qua" class="form-control"/>
       </div>	

        <div class="form-group">
            <input type="submit" class="btn btn-info " name="b1">
 </div>


</form>

</div>
</div>
</div>
</td>
        <td width="15%"></td>
        </tr>
        </table>
    </body>
</html>

    


<?php include 'footer.php'?>