<!DOCTYPE html>
<html>
<?php
include 'connection.php';

	$FN=$_POST['inputFN'];
	$LN=$_POST['inputLN'];
	$EA=$_POST['inputEA'];
	$PW=md5($_POST['inputPW']);
	
		$check=mysql_query("SELECT * FROM Login WHERE `EmailId`='$EA'");
		if(mysql_num_rows($check)>=1){
			?><script type="text/javascript">
			alert("Sorry!!Email Id is already registered!!")
			window.location.href="signup.php"
			</script><?php
		}
		else{
			$code=rand(1111111111, 9999999999);			
			//Send Activation email
			$to=$EA;
			$subject="Activate your account";
			$header="From: saraswathi.sorakkanatarajan@sjsu.edu";
			$body="Hello $username,\n\n Please click on the given link to activate your account.\n\nhttp://snsaraswathi.com/project/activate.php?code=$code\n\nThanks.";
			if(!mail($to,$subject,$body,$headers)){
				?><script type="text/javascript">
			alert("Sorry!Could not register for the given Email Id. Please register later.")
			window.location.href="signup.php"
			</script><?php
			}
			else{
				
				//register into database
				$register=mysql_query("INSERT INTO Login(`FirstName`,`LastName`,`EmailId`,`Password`,`code`,`active`)
					VALUES('$FN','$LN','$EA','$PW','$code','0')") or die(mysql_error());
				?><script type="text/javascript">
			alert("You have been registered!! Please Check your Registered Email for activation link!!")
			window.location.href="signin.php"
			</script><?php
			}
		}
?>
</html>