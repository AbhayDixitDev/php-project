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
 <div class="panel-heading">Candidate Search By Email</div>
  <div class="panel-body" >

      <form action="candsearchemail.php" method="post">
      	
          	
          <div class="form-group">
                <label>Enter Your Email</label>
               <input type="text" name="email" class="form-control" />
       </div>
          
          
          
<div class="form-group">     
    <input type="submit" class="btn btn-info " value="Search" name="candsearch">
       </div>	
<?php
$sym=0;
$age=0;
if(isset($_POST['candsearch']))
{
    
    $email=$_POST['email'];
    
    $con=  mysqli_connect("localhost", "root", "","evoting");
    $q="select * from candidate where email='$email'";
    $result=mysqli_query($con,$q);
   if (!empty($result))
   {
     $list=array();
     echo"<table border=3px' width=100%'>";
     echo "<tr>";
     echo "<td>ID</td>";
     echo "<td>NAME</td>";
     echo "<td>GENDER</td>";
     echo "<td>ADDRESS</td>";
     echo "<td>CITY</td>";
     echo "<td>STATE</td>";
     echo "<td>MOBILE</td>";
     echo "<td>EMAIL</td>";
     echo "<td>AGE</td>";
     echo "<td>PROPERTY</td>";
     echo "<td>SYMBOL</td>";
     echo "<td>QUALIFICATION</td>";
     echo "</tr>";
     while($row=  mysqli_fetch_assoc($result))
     {
         
          echo "<tr>";
     echo "<td>".$row['id']."</td>";
     echo "<td>".$row['name']."</td>";
     echo "<td>".$row['gender']."</td>";
     echo "<td>".$row['address']."</td>";
     echo "<td>".$row['city']."</td>";
     echo "<td>".$row['state']."</td>";
     echo "<td>".$row['mobile']."</td>";
     echo "<td>".$row['email']."</td>";
     echo "<td>".$row['age']."</td>";
     echo "<td>".$row['property']."</td>";
     echo "<td>".$row['symbol']."</td>";
     echo "<td>".$row['qualification']."</td>";
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
</td>
        <td width="15%"></td>
        </tr>
        </table>
    </body>
   </html>  
   
   
    <?php include 'footer.php';?>