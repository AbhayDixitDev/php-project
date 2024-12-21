<?php include 'header.php'?>
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
        <table width="100%">
            <tr>
                <td width="35%"></td>
                <td width="30%">
        <div class="container-info-fluid">
<div class="panel-info">
 <div class="panel-heading">Candidate Search All</div>
  <div class="panel-body" >

      <form action="cansearch1.php" method="post">
      	
          <div class="form-group">
                <label>Candidate ID</label>
               <input type="text" name="id" class="form-control"/>
       </div>		
          <div class="form-group">
                <label>Name</label>
               <input type="text" name="name" class="form-control"/>
       </div>
          <div class="form-group">
                <label>Mobile</label>
               <input type="text" name="mobile" class="form-control"/>
       </div>
          <div class="form-group">
                <label>Age</label>
               <input type="text" name="age" class="form-control"/>
       </div>
          
<div class="form-group">     
    <input type="submit" class="btn btn-info " value="Search" name="b1">
       </div>	
<?php
$sym=0;
$age=0;
if(isset($_POST['b1']))
{
    $id=$_POST['id'];
    $age=$_POST['age'];
    $nm=$_POST['name'];
    $mob=$_POST['mobile'];
    $con=  mysqli_connect("localhost", "root", "","evoting");
    $q="select * from candidate where age='$age' or mobile='$mob' or id='$id' or name='$nm'";
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

    </body>
   </html>     
   </td>
   <td width="35%"></td>
   </tr>
   </table>
 <?php include 'footer.php';?>