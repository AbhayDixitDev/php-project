<!DOCTYPE html>
<html>
<head>
<title>Search Box Example 2 - default placeholder text gets cleared on click</title>
<meta name="ROBOTS" content="NOINDEX, NOFOLLOW" />
<!-- JAVASCRIPT to clear search text when the field is clicked -->
<script >
window.onload = function(){ 
	//Get submit button
	var submitbutton = document.getElementById("tfq");
	//Add listener to submit button
	if(submitbutton.addEventListener){
		submitbutton.addEventListener("click", function() {
			if (submitbutton.value == 'Search our website'){//Customize this text string to whatever you want
				submitbutton.value = '';
			}
		});
	}
}
</script>
<!-- CSS styles for standard search box with placeholder text-->
<style >
	#tfnewsearch{
		display: flex;
		align-items: center;
	}
	.tftextinput2{
		margin-top: 0;
		padding: 5px;
		font-family: Arial, Helvetica, sans-serif;
		font-size:14px;
		color:#666;
		border:1px solid #0076a3;
		border-radius: 5px 0px 0px 5px;
		flex: 1;
	}
	.tfbutton2 {
        border: 0 none;
        margin-top: 0;
		background:  url(images/search.png) center no-repeat;
		width: 30px;
        height: 38px;
		padding: 0;
		text-align: center;		
		cursor: pointer;
		
		font-family: Arial, Helvetica, sans-serif;
		font-size:14px;
		font-weight:bold;
		outline: none;
		cursor: pointer;
		text-align: center;
		text-decoration: none;
		
	}
	.tfbutton2:hover {
		text-decoration: none;
		background:  url(images/search.png) center no-repeat;
		background: -moz-linear-gradient(top,  #0095cc,  #00678e);
	}
	/* Fixes submit button height problem in Firefox */
	.tfbutton2::-moz-focus-inner {
	  border: 0;
	}
</style>
</head>
<body>	
		<form id="tfnewsearch" method="get" action="http://www.google.com">
		        <input type="text" id="tfq" class="tftextinput2" name="q"  maxlength="100" value="Search our website"><input type="submit" value="" class="tfbutton2">
		</form>
</body>
</html>

