	<!DOCTYPE html>
	<html>
	<head>
		<title>logout | SocketSnipers</title>
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
	background-image: url("cover.jpg");
    background-color: #1e73bc;
    width:100vw;
    height: 100vw;
	background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: top;
    background-clip: inherit;
    background-size: cover;

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
  checkboxes = document.getElementsByName('foo');
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
<div>
		<?php 
include ("nav1.html");
 session_start();
unset($_SESSION['emailid']);
session_unset();
 session_destroy();
?> <script type="text/javascript">
			window.location.href="signin.php"
			</script>
<?php
exit();
?>

</div><br><br>
<h1 align="center"><font color="#FFFFF">You have successfully logged out.</font></h1>	  
	</body>
	</html>