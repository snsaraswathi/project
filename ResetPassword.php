<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="main1.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script type="text/javascript">
function checkPasswordMatch() {
    var password = $("#Password").val();
    var confirmPassword = $("#checkpassword").val();
	var flag = false;

    if (password != confirmPassword)
	{
		var string1="Passwords do not match!";
		var success= string1.fontcolor("red");
        $("#divCheckPasswordMatch").html(success);
		flag=false;
		}
		   
    else
	{
		var string2="Passwords match!";
		var successs1= string2.fontcolor("green");
        $("#divCheckPasswordMatch").html(successs1);
		flag=true;
		}
		
		if(flag=== true)
		{
				document.getElementById("button_heading").disabled=false;
		}
		  
}
</script>
</head>

<body> 
	<?php 
	if($_GET['code']){
	$email=$_GET['emailid'];
	?>
    <section class="signin">
        <div>
        <center class= "logo">Socket Snipers</center>
        </div>
        <div>
        <?php 
        include("nav1.html");
        ?></div>
        <div class ="container" id="signin_form">
           <div class="row">
              <div class="col-lg-4">
                
                <form action="reset.php" method="post">
				<?php echo " <input type='text'  name='inputEA' id='inputEA' value='".$email."' hidden/>";?>
                   <div class="form-group" id="form_spacing">
                        <label for="password" class="form_name">NEW PASSWORD *</label>
                        <input type="password" class="form-control input-lg" name="inputPW" id="Password" placeholder="Password" />
                    </div>
                    <div class="form-group" id="form_spacing">
                        <label for="checkpassword" class="form_name" >CONFIRM PASSWORD *</label>
                        <input type="password" class="form-control input-lg" name="inputPW1" id="checkpassword" placeholder="Confirm Password" onkeyup="checkPasswordMatch();"/>
                    </div>
					
					 <div class="form-group" id="form_spacing">
                       <label for="message" class="form_name"  id="divCheckPasswordMatch" style="color:red"></label>                     
                    </div>			
                    <div class="form-group">
                       <div class="col-sm-offset-2 col-sm-10" id="button">
                       <button type="submit" class="btn btn-default" id="button_heading" disabled>Submit</button>
                       </div>
                     </div>
                  </form> 
              </div>
            </div>
          </div></section>
        <?php   }
        else {
        echo "<script>alert('no code provided');";
    		echo "window.location.href='signin.php';";
    		echo "</script>";
    		
        }?>
</body>

</html>                        