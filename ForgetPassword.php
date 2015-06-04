<!DOCTYPE html>
<html>
<head>
    <title>Log In | SocketSnipers</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="main.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
 </head>

<body>
    <section class ="front_page">
        <div class= "logo">
        Socket Snipers
    </div>
		<?php 
include ("nav1.html");
?>
    <div class ="container">
        <div class="row">
            <div class="col-md-4">
                <form method="post" action="#">
                    <div class="form-group" id="email">
                        <label for="exampleInputEmail1" class="heading">Enter Your Email Address</label>
                        <input type="email" class="form-control" name="email" id="exampleInputEmail1 emailid" placeholder ="Enter email" required>
                    </div>
                    <button type="submit" class="btn btn-default" name="submit" id="submit" ;>Submit</button>
                    </form>
                 </div>
               </div>
            </div>
            <?php 
            if(isset($_POST["submit"])){
            include 'connection.php';
			$Email=$_POST['email'];
			$query1=mysql_query("SELECT FirstName FROM  `Login` WHERE  `EmailId` = '$Email'") or die(mysql_error());
		$row = mysql_result($query1,0);
			$query=mysql_query("SELECT * FROM `Login` WHERE `EmailId` ='$Email'") or die(mysql_error());
			if(mysql_num_rows($query)==1){
				$code=rand(1111111111, 9999999999);
				$check=mysql_query("UPDATE Login SET code='$code' WHERE `EmailId`='$Email'");
			//Send Activation email
				$to=$Email;
				$subject="Reset your Password";
				$header="From: vsvraja@gmail.com";
				$body="Hello $row,\n\n Please click on the given link to change your password.\n\nhttp://veerappanraja.com/project/ResetPassword.php?code=$code&emailid=$Email\n\nThanks.";
			if(!mail($to,$subject,$body,$headers)){
					?><script type="text/javascript">
					alert("Sorry!Could not send you the link now. Try later.")
					window.location.href="signin.php"
					</script><?php
				}else{
					?><script type="text/javascript">
					alert("Link has been sent to your Email Address!!")
					window.location.href="signin.php"
					</script><?php
					}
			}
			else{
				?><script type="text/javascript">
				alert("Invalid Email Address!!")
				window.location.href="signin.php"
				</script><?php
				}
            }
            ?>
          </body>
          </html>