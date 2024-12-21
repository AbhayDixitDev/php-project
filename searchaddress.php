<script src="js/jquery.min.js" type="text/javascript"></script>
<?php 
    // Include the database config file 
     
// Database configuration 

 
// Create database connection 
$db =  mysqli_connect("localhost", "root", "","evoting");
 
// Check connection 
if ($db->connect_error) { 
    die("Connection failed: " . $db->connect_error); 
}
     
    // Fetch all the country data 
    $query = "SELECT * FROM countries WHERE status = 1 ORDER BY country_name ASC"; 
    $result = $db->query($query); 

<!-- Country dropdown -->
<select id="country">
    <option value="">Select Country</option>
    <?php 
    if($result->num_rows > 0){ 
        while($row = $result->fetch_assoc()){  
            echo '<option value="'.$row['country_id'].'">'.$row['country_name'].'</option>'; 
        } 
    }else{ 
        echo '<option value="">Country not available</option>'; 
    } 
    ?>
</select>

<!-- State dropdown -->
<select id="state">
    <option value="">Select country first</option>
</select>

<!-- City dropdown -->
<select id="city">
    <option value="">Select state first</option>
</select>