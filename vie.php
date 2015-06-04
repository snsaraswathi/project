<!DOCTYPE html>
	<html>
	<head>
		<title>View Images | SocketSnipers</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="dist/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="main1.css">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
		<link href='http://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
	<style type="text/css">
 body
{   top: 0;
	overflow-x:auto;
    overflow-y:auto;

}
	  .photo {
		float: left;
		margin: 0.5em;
		border: 1px solid #ccc;
		padding: 1em;
		font-size: 15px;
		text-align: center;
		overflow-x:auto;
		overflow-y:auto;
	  }

	</style>
	<script language="JavaScript">
function toggle(source) {
  checkboxes = document.getElementsByName('files[]');
  for(var i=0, n=checkboxes.length;i<n;i++) {
    checkboxes[i].checked = source.checked;
  }
}
</script>
	</head>
	<body> 
	<section class="signin">
			<div>
			<center class= "logo">Socket Snipers</center>
			       </div>
				   <div class ="container" id="password_form">
           <div class="row">
               <div class="col-md-4">
       
                        <div class="form-group" id="form_spacing">
                            <input type="text" class="form-control input-lg" name="search" id="searchimg" placeholder="Type here to search your image...."/>	
                       </div>
                       <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10" id="button">
                            <button type="submit" class="btn btn-default" name="search1" id="button_heading">Search</button> 
							<input type="checkbox" style="text-align:right	" onClick="toggle(this)"/>
							<font color="white"> Select All</font>
					
<form method="post" action="delsel.php">
<input type="submit" name="submit" value="Download as Zip" />&nbsp;
<input type="reset" name="reset"  value="Reset" />
</div></div></div></div>
<?php
   
	$images =glob("uploads/*.*");
	$dir="/uploads";
	$i=0;
	foreach($images as $image){
	echo "<div class=\"photo\">";
	echo '<img src="'.$image.'"width="200" height="200" />';
	echo "<br>";
	echo "<br>";
	echo "<input type='checkbox' name='files[]' value='".basename($image)."'>"." "." <a href=". $image . ">".basename($image)."</a>";
	echo "<input type='text' name='delete' value='".$image."' hidden>";
	echo "      ";
	echo "<input type='image' name='del' src='delete.png' value='delete image'  border='0' width='15' height='15' alt='Submit' />";
	echo "<br>";
	echo "</div>\n";
}
?>
</form>
</body>
</html>

