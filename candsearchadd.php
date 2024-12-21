<?php include 'header.php'?>
<?php include 'ajaxData.php' ?>
<script src="js/jquery.min.js" type="text/javascript"></script>
<?php 
if(isset($_POST['submit'])){ 
    echo 'Selected Country ID: '.$_POST['country']; 
    echo 'Selected State ID: '.$_POST['state']; 
    echo 'Selected City ID: '.$_POST['city']; 
} 
?>
<div class="container-fluid">
<div class="row" >
    <div class="col-md-3"></div>
     <div class="col-md-7">
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
        
        
<div class="panel panel-info">
 <div class="panel-heading">Candidate Search By Location</div>
  <div class="panel-body" >

     <form action="" method="post">
    <!-- Country dropdown -->
    <select id="country" name="country">
        <option value="">Select Country</option>
    </select>
	
    <!-- State dropdown -->
    <select id="state" name="state">
        <option value="">Select state</option>
    </select>
	
    <!-- City dropdown -->
    <select id="city" name="city">
        <option value="">Select city</option>
    </select>
	
    <input type="submit" name="submit" value="Submit"/>
</form>

</div>
</div>


    </body>
   </html> 
   </div>
    <div class="col-md-2"></div>
     </div>
    </div>
    
   
    
    <?php include 'footer.php';?>