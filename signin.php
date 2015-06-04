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
                <form method="post" action="signin.php">
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
                <p id="signUp"><font color="#FFFFF"><a href="ForgetPassword.php">forgot password?</a></font><br> 
				<p id="signUp"><font color="#FFFFF"><a href="signup.php">Sign Up</a></form><p><br>
            </div>
        </div>
    </div>
    </section>
    <?php 
    if (isset($_POST["submit"])){
    include 'connection.php';
	$Email=$_POST['email'];
	$PWD=md5($_POST['password']);
	$query=mysql_query("SELECT * FROM `Login` WHERE `EmailId` ='$Email' AND `Password` = '$PWD'") or die(mysql_error());
	if (mysql_num_rows($query)==1){
	$count=mysql_query("SELECT * FROM `Login` WHERE `EmailId` ='$Email' AND `Password` = '$PWD' AND `active`='1'") or die(mysql_error());
	if(mysql_num_rows($count)==1){
		session_start();
		$_SESSION["emailid"]=$Email;
		?> <script type="text/javascript">
                alert("Passed")
		window.location.href="firstpage.php"
			</script>
		<?php 
		}
		else{
			?><script type="text/javascript">
			alert("Your account has not yet been activated!! Please check your Registered Email")
			window.location.href="signin.php"
			</script>
		<?php 
		} 
	}else{
		?><script type="text/javascript">
			alert("Invalid Username and Password!!")
			window.location.href="signin.php"
			</script>
			<?php
	}
    }
    
    ?>
</body>
</html>
