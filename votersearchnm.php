<?php include 'header.php'?>

 <table >
        <tr >
            <td width="25%" >
                <img src="images/20171213_115805437.jpg" width="100%" />
            </td>
        <td width="60%">
<html>
    <head><title></title>
     <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
 <script src="js/jquery-2.0.3.min.js" type="text/javascript" ></script>
     <script src="js/bootstrap.min.js" type="text/javascript" ></script>
     <!-- External CSS -->
     <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" >
    </head>    
    <body>
   <div class="container-fluid">
<div class="panel panel-info">
 <div class="panel-heading">Voter Search By Voter Name</div>
  <div class="panel-body" >

      <form action="votersearchnm.php" method="post">
      	
          	
          <div class="form-group">
                <label>Enter Voter Name</label>
               <input type="text" name="vnm" class="form-control"/>
       </div>
          
          
          
<div class="form-group">     
    <input type="submit" class="btn btn-info " value="Search" name="votersearch">
       </div>	
<?php
$sym=0;
$age=0;
if(isset($_POST['votersearch']))
{
    
    $vnm=$_POST['vnm'];
    
    $con=  mysqli_connect("localhost", "root", "","evoting");
    $q="select * from voter1 where name='$vnm'";
    $result=mysqli_query($con,$q);
   if (!empty($result))
   {
     $list=array();
     echo"<table border=3px' width=100%'>";
     echo "<tr>";
     echo "<td>Vote ID</td>";
     echo "<td>NAME</td>";
     echo "<td>FATHER NAME</td>";
     echo "<td>MOTHER NAME</td>";
     echo "<td>AGE</td>";
     echo "<td>D.O.B</td>";
     echo "<td>EMAIL</td>";
     echo "<td>AADHAR ID</td>";
     echo "<td>MOBILE</td>";
     echo "<td>GENDER</td>";
     echo "<td>STATE</td>";
     echo "<td>DISTRICT</td>";
     echo "<td>VILLAGE</td>";
     echo "<td>WARD</td>";
     echo "<td>PHOTO</td>";
     echo "</tr>";
     while($row=  mysqli_fetch_assoc($result))
     {
         
          echo "<tr>";
     echo "<td>".$row['voterid']."</td>";
     echo "<td>".$row['name']."</td>";
     echo "<td>".$row['fathername']."</td>";
     echo "<td>".$row['mothername']."</td>";
     echo "<td>".$row['age']."</td>";
     echo "<td>".$row['dob']."</td>";
     echo "<td>".$row['email']."</td>";
     echo "<td>".$row['adhaar']."</td>";
     echo "<td>".$row['mobile']."</td>";
     echo "<td>".$row['gender']."</td>";
     echo "<td>".$row['state']."</td>";
     echo "<td>".$row['district']."</td>";
     echo "<td>".$row['village']."</td>";
     echo "<td>".$row['ward']."</td>";
     echo "<td>".$row['photo']."</td>";
     echo "</tr>";
     }
     echo"</table '>";
} 
}
?>
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
