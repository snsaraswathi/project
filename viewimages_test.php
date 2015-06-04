<?php 
session_start();
if(false){
	header("location:signin.php");
}else{
?>	
<!DOCTYPE html>
	<html>
	<head>
		<title>i-snap</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="dist/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="main1.css">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
		<link href='http://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
	<style type="text/css">
#container {
	font-family: Bradley Hand ITC;
	font-size: 72px;
	font-weight: bold;
	text-align: center;
	color: #01EFFF;
	border: 1px solid black;
    height: auto;
    width: 100%;
    margin-top: 50px;
	background-color: black;
    opacity: 0.5;
}
#container:hover{
	opacity: 1;
}
#container2{ }
#container3:hover{ }

#container2:hover{
	opacity: 1;
        font-color: yellow;
}
#container3:hover{
	opacity: 1;
}

 body
{   top: 0;
	overflow-x:auto;
    overflow-y:auto;
	background-image: url("cover.jpg");
    background-color: #1e73bc;
    width:100vw;
    height: 100vw;
	background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: top;
    background-clip: inherit;
    background-size: cover;
	z-index: 9000;

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
	<section>
			<div  id="container">
			<center>i-snap</center>
			       </div>
<div>
<br><br><br>
</div>
<div id="password_form">
           <div class="row">
               <div class="col-md-4">
       <form method="post" action="viewimage1_test.php">
                        <div class="form-group" style="padding:top=20%;font-family: Bradley Hand ITC;font-weight:bold;opacity:0.5" id="form_spacing" id="container2">
                            <input type="text" class="form-control input-lg" name="search" id="searchimg" placeholder="search your image here....">	
                       </div>
                       <table class="flex-center"  id="form_spacing" id="container3">
						<tr>
								
						<td class="inline-block-center-div">
            
                            <button style="opacity: 0.5;background-color:black" type="submit" class="btn btn-default" name="search1" id="button_heading">Search</button></form>
						</td>
						<td class="inline-block-center-div">
							  <form method="post" action="download.php">
                            <button style="opacity: 0.5;background-color:black" type="submit" class="btn btn-default" name="submit" value="Download as Zip" id="button_heading">Download as Zip</button>
							<input type="checkbox" style="text-align:right	" onClick="toggle(this)"/>
							<font color="white" size: "20px"> Select All</font>
						</td>	
						</tr>
						</table>
						</div></div></div>
	<?php
		include 'connection.php';
		$email="vsvraja@gmail.com";
		$pic=array();
		$query=mysql_query("SELECT ImgName FROM  `images` WHERE  `username` = '$email'") or die(mysql_error());
		while($row = mysql_fetch_assoc($query)){
		$pic[] = $row['ImgName'];
	}
	foreach($pic as $image) {
	
	echo "<div class=\"photo\">";
	echo "<a href='pic.php?name=".$image."'><img src='uploads/".$image."' width='200' height='200' /></a>";
	echo "<br>";
	echo "<br>";
	echo "<input type='checkbox' name='files[]' value='".$image."'>"." "." <a href=uploads/". $image . " download >".basename($image)."</a>";
	echo "                 ";
	echo "<a href='delete_test.php?name=uploads/".$image."'><img src='delete.png' border='0' width='15' height='15'/></a>";
	echo "<br>";
	echo "</div>\n";
}

	?>
	</form>	
	</body>
	</html>
<?php }?>