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
?><br><br>
<?php
	include 'connection.php';
	$FN=$_POST['inputFN'];
	$LN=$_POST['inputLN'];
	$EA=$_POST['inputEA'];
	$PW=md5($_POST['inputPW1']);
	
	if ($FN==NULL or $LN==NULL or $EA==NULL or $PW==NULL){
		?>
		<div><h2><font color="#FFFFF">&nbsp;&nbsp;&nbsp;Form Incomplete!! Go Back To Enrollment Page</font></h2></div>
		<?php header('Location:signup.php');
	} else {
		mysql_query("INSERT INTO Login(`FirstName`,`LastName`,`EmailId`,`Password`)
					VALUES('$FN','$LN','$EA','$PW')") or die(mysql_error());?>
	<div><h2>Registration Success!!</h2></div>
	<?php }?>
        </div>
		<div class ="container">
        <div class="row">
            <div class="col-md-4">
                <form method="post" action="query.php">
                    <div class="form-group" id="email">
                        <label for="exampleInputEmail1" class="heading">EMAIL ADDRESS</label>
                        <input type="email" class="form-control" name="email" id="exampleInputEmail1 emailid" placeholder ="Enter email" required>
                    </div>
                    <div class="form-group" id="password">
                        <label for="exampleInputPassword1" class="heading">PASSWORD</label>
                        <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password" required>
                    </div>
                    <button type="submit" class="btn btn-default" name="submit" id="submit" ;>LOG IN</button>
                </form><br>
                <p id="signUp"><font color="#FFFFF">Not a Member?</font><br>  <a href="signup.php"><span class ="link_signin">SIGN UP</span></a><p>
            </div>
        </div>
    </div>
    </section>
</body>
</html>