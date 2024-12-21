<!DOCTYPE html>
<html>
<head>
<title>Search Box Example 2 - default placeholder text gets cleared on click</title>
<meta name="ROBOTS" content="NOINDEX, NOFOLLOW" />
<!-- JAVASCRIPT to clear search text when the field is clicked -->
<script type="text/javascript">
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
<style type="text/css">
	
	#tfnewsearch{
		float:left;
		margin-left: 5px;
                margin-right:5px;
	}
	.tftextinput2{
		margin-top: 10px;
		margin-bottom: 10px;
		padding: 5px 5px;
		font-family: Arial, Helvetica, sans-serif;
		font-size:14px;
		color:#666;
		border:1px solid #0076a3; border-right:1px;
		border-top-left-radius: 5px 5px;
		border-bottom-left-radius: 5px 5px;
                border-top-right-radius: 5px 5px;
		border-bottom-right-radius: 5px 5px;
	}
	.tfbutton2 {
        margin-top: 5px;
        margin-bottom: 5px;
        border: 0 none;
        background:  url(images/search.png) center no-repeat;
        width: 30px;
        height: 38px;
		float: right;
		padding: 0;
		text-align: center;
		
		cursor: pointer;
		
		/* padding: 5px 7px; */
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
	.tfclear{
		clear:both;
	}
</style>
</head>
<body>
	<div style="margin: 0 auto; width: 100%; text-align: center;">
		<form id="tfnewsearch" method="get" action="http://www.google.com">
		        <input type="text" id="tfq" class="tftextinput2" name="q"  maxlength="120" value="Search our website"><input type="submit" value=">" class="tfbutton2">
		</form>
		<div class="tfclear"></div>
	</div>
</body>
</html>
