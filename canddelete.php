<?php include 'header.php'?>

    <table >
        <tr >
            <td width="25%" >
                <img src="images/20171213_115805437.jpg" width="100%" />
            </td>
        <td width="60%">
<?php
            $id="";
            $nm="";
            $gen="";
            $add="";
            $city="";
            $state="";
            $mob="";
            $em="";
            $age="";
            $ppt="";
            $sym="";
            $qua="";
if(isset($_POST['b1']))
        {
            $id=$_POST['id'];
    $age=$_POST['age'];
    $nm=$_POST['name'];
    $mob=$_POST['mobile'];
    $con=  mysqli_connect("localhost", "root", "","evoting");
    $q="select * from candidate where age='$age' or mobile='$mob' or id='$id' or name='$nm'";
            $result=mysqli_query($con,$q);
            if(!empty($result))
            {
              if($row=mysqli_fetch_assoc($result))
                {
                  $id=$row['id'];
                 $mob=$row['mobile'];
                 $nm=$row['name'];
                 $gen=$row['gender'];
                 $add=$row['address'];
                 $city=$row['city'];
                 $state=$row['state'];
                 $em=$row['email'];
                 $age=$row['age'];
                 $ppt=$row['property'];
                 $sym=$row['symbol'];
                 $qua=$row['qualification'];  
                 echo"Result Found....";
                }
            }
        }
        
       
        if(isset($_POST['b3']))
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
            $con=mysqli_connect("localhost", "root","", "evoting");
            $q="delete  from candidate  where mobile='$mob'";
            mysqli_query($con,$q);
            echo"Delete Success----";
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

        <title>All Operation on Candidate</title>
    </head>
    <body>
        <div class="container-fluid">
<div class="panel panel-info">
 <div class="panel-heading">Candidate Delete</div>
  <div class="panel-body" >

      <form action="canddelete.php" method="post">
 <div class="form-group">
            <input type="submit" value="Search" class="btn btn-info " name="b1">
             <input type="submit" class="btn btn-info " value="Delete" name="b3">
 </div>
           <div class="form-group">
                <label>Candidate ID</label>
               <input type="text" name="id" class="form-control" value="<?php echo $id ; ?>"/>
       </div>	
            <div class="form-group">
                <label>Mobile</label>
               <input type="text" name="mobile" class="form-control" value="<?php echo $mob ; ?>"/>
       </div>	
          
     <div class="form-group">
                <label>Name</label>
               <input type="text" name="name" class="form-control" value="<?php echo $nm ; ?>" />
       </div>	

     <div class="form-group">
                <label>Gender</label>
               <input type="text" name="gender" class="form-control" value="<?php echo $gen ; ?>" />
       </div>	

     <div class="form-group">
                <label>Address</label>
               <input type="text" name="address" class="form-control" value="<?php echo $add ; ?>"/>
       </div>	

     <div class="form-group">
                <label>City</label>
               <input type="text" name="city" class="form-control" value="<?php echo $city ; ?>"/>
       </div>	

     <div class="form-group">
                <label>State</label>
               <input type="text" name="state" class="form-control" value="<?php echo $state ; ?>"/>
       </div>	

   
     <div class="form-group">
                <label>Email</label>
               <input type="text" name="email" class="form-control" value="<?php echo $em ; ?>"/>
       </div>	

     <div class="form-group">
                <label>Age</label>
               <input type="text" name="age" class="form-control" value="<?php echo $age ; ?>"/>
       </div>	

     <div class="form-group">
                <label>Total property</label>
               <input type="text" name="ppt" class="form-control" value="<?php echo $ppt ; ?>"/>
       </div>	
<div class="form-group">
                <label>Symbol</label>
               <input type="text" name="symb" class="form-control" value="<?php echo $sym ; ?>"/>
       </div>	
  
     <div class="form-group">
                <label>Qualification</label>
               <input type="text" name="qua" class="form-control" value="<?php echo $qua ; ?>"/>
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
   <?php include 'footer.php';?>