<?php
require_once('db.php');
$country_result = $conn->query('select * from countries');
?>

<select name="country" id="countries-list">
		<option value="">Select Country</option>
		<?php
		if ($country_result->num_rows > 0) {
    // output data of each row
    while($row = $country_result->fetch_assoc()) {
    	?>
        <option value="<?php echo $row["country_id"]; ?>"><?php echo $row["country_name"]; ?></option>
        <?php
    }
}
?>
		</select>
</br></br></br>
		<select name="state" id="states-list">
			<option value=''>Select State</option>
		</select>
<script src="js/jquery.min.js" type="text/javascript"></script>
		
		<script>
$('#countries-list').on('change', function(){
    var country_id = this.value;
    $.ajax({
	type: "POST",
	url: "get_states.php",
	data:'country_id='+country_id,
	success: function(result){
		$("#state").html(result);
	}
	});
});
</script>