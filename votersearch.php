<?php include 'header.php'?>
<div class="container-fluid">
    <div class="row" >
    <div class="col-md-3"></div>
     <div class="col-md-7">
         <?php
                   $vi="";
                   $nm="";
                   $mob="";
                   $gen="";
                   $aadh="";
                   $state="";
                   $dis="";
                   $vil="";
                   $ward="";
                   $dob="";
                   $age="";
                   $fn="";
                   $mn="";
                   $em="";
                   $pass="";
                   $photo="";
        if(isset($_POST['b1']))
        {
           $aadh=$_POST['aadhar'];
            
            $con=  mysqli_connect("localhost", "root","", "evoting");
            $q="select * from voter1 where adhaar='$aadh'";
            $result=mysqli_query($con, $q);
            if(!empty($result))
            {
              if($row=mysqli_fetch_assoc($result))
                {
                   $vi=$row['voterid'];
                   $nm=$row['name'];
                   $mob=$row['mobile'];
                   $gen=$row['gender'];
                   $aadh=$row['adhaar'];
                   $state=$row['state'];
                   $dis=$row['district'];
                   $vil=$row['village'];
                   $ward=$row['ward'];
                   $dob=$row['dob'];
                   $age=$row['age'];
                   $fn=$row['fathername'];
                   $mn=$row['mothername'];
                   $em=$row['email'];
                   $photo=$row['photo'];
                   echo"Result Found....";
                }         
            } 
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

        <title>Voter Search</title>
    </head>
    <body>
     
<div class="panel panel-info">
 <div class="panel-heading">Voter Search</div>
  <div class="panel-body" >

      <form action="votersearch.php" method="post">
          <div class="form-group">
            <input type="submit" class="btn btn-info " value="Search" name="b1" >
       </div>  
     
          <div class="form-group">
                <label>Aadhar Number</label>
                <input type="text" name="aadhar" maxlength="12" class="form-control" value="<?php echo $aadh ; ?>"/>
       </div>

     <div class="form-group">
                <label>Voter Name</label>
               <input type="text" name="vi" class="form-control" value="<?php echo $nm ; ?>" />
       </div>	
          
          <div class="form-group">
                <label>Voter ID</label>
               <input type="text" name="voterid" class="form-control" value="<?php echo $vi ; ?>" />
       </div>

     <div class="form-group">
                <label>Mobile</label>
                <input type="text" name="mobile" maxlength="10" class="form-control" value="<?php echo $mob ; ?>"/>
       </div>	

                          
                            
       <div class="form-group">
                <label>Gender</label>
               <input type="text" name="gen" class="form-control" value="<?php echo $gen ; ?>"/>
       </div>
	

     	

     <div class="form-group">
                <label>State</label>
               <input type="text" name="state" class="form-control" value="<?php echo $state ; ?>"/>
       </div>	

     <div class="form-group">
                <label>District</label>
               <input type="text" name="dis" class="form-control" value="<?php echo $dis ; ?>"/>
       </div>	

     <div class="form-group">
                <label>Village</label>
               <input type="text" name="vil" class="form-control" value="<?php echo $vil ; ?>"/>
       </div>	

     <div class="form-group">
                <label>Ward</label>
               <input type="text" name="ward" class="form-control" value="<?php echo $ward ; ?>"/>
       </div>	

     <div class="form-group">
                <label>DOB</label>
               <input type="text" name="dob" class="form-control" value="<?php echo $dob ; ?>"/>
       </div>	

     <div class="form-group">
                <label>Age</label>
                <input type="text" name="age" class="form-control" value="<?php echo $age ; ?>"/>
       </div>	

     <div class="form-group">
                <label>Father Name</label>
               <input type="text" name="fn" class="form-control" value="<?php echo $fn ; ?>"/>
       </div>
    <div class="form-group">
                <label>Mother Name</label>
               <input type="text" name="mn" class="form-control" value="<?php echo $mn ; ?>"/>
       </div>
    <div class="form-group">
                <label>Email</label>
               <input type="text" name="em" class="form-control" value="<?php echo $em ; ?>"/>
       </div>
          
    <div class="form-group">
                <label>Photo</label>
               <input type="text" name="photo" class="form-control" value="<?php echo $photo ; ?>"/>
       </div>

        


</form>

</div>
</div>
</div>

    </body>
</html>
<div class="col-md-2"></div>
</div>
    </div>
    <?php include 'footer.php'?>