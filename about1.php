	<!DOCTYPE html>
	<html>
	<head>
		<title>About | SocketSnipers</title>
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
	  .para {
    margin-left: auto;
    margin-right: auto;
    width: 70%;
	}

	</style>
	</head>
	<body> 
			<div>
			<center class= "logo">Socket Snipers</center>
			       </div>
<div>
		<?php 
include ("nav1.html");
?>
</div>
<br><br>
<div class="para">
<h1 align="center"> <font color="Blue">I-Snap</font></h1><br>
<font color="#FFFFF">
<p align="justify">
The project aims at implementing client server interaction and uploading files to the server from the client and also incorporates some additional functionalities. There are six pairs of client and servers. The backend server side has been designed using PHP, so as to enable the client to upload multiple photos to it. cURL is used to establish an interdomain communication which ensures that a file or image that is uploaded in one server is reflected in all the remaining servers and the image is saved in the database of the remaining servers.
<br><br>
The project involves the implementation of additional features like android, desktop and web clients, viewing the uploaded images, downloading the photos uploaded to the server, downloading the selected photos in a zip format, deleting files, email validation, navigation, sign in to the server using facebook API, session management, password encryption forgot password and change password, account activation and authentication through email and sms message notification for uploads.
<br><br>
For detailed information, Please download our report.</p>
<br><br>
<p align="center"><a href="report.pdf" download><img src="pdf.png" height="20" width="20">&nbsp;&nbsp;Report</a></p>
</font>
</div>
	</body>
	</html>