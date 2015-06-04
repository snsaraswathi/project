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
#container2 {
	font-family: Bradley Hand ITC;
	font-size: 72px;
	font-weight: bold;
	text-align: center;
	color: #01EFFF;
	border: 1px solid black;
    height: auto;
    width: 100%;
    margin-top: 50px;
	background-color: orange;
    opacity: 0.5;
}
#container2:hover{
	opacity: 1;
}
#signin_form{ 
    margin: 0 auto;
    width: 60%;
    height: 55%;
    margin-top: 10px;
	z-index: 9000;
    background-color: black;
    opacity: 0.5;
}
#signin_form:hover{ 
    opacity: 0.8;
    background-color: #FDF501
   
}
</style>
</head>

<body> 

    <section class="signin">
        <div id="container">
        <center>i-snap</center>
        </div>
		<div>
		
</div><br><br>
        <div class ="container2" id="signin_form">
           <div class="row">
              <div class="col-lg-4">
                
                <form action="register.php" method="post">
                   <div class="form-group" id="form_spacing">
                       <label for="exampleInputfirstname" class="form_name">FIRST NAME *</label>
                       <input type="text" class="form-control input-lg" name="inputFN" placeholder="First Name" required>
                    </div>
                    <div class="form-group" id="form_spacing">
                        <label for="exampleInputlastname" class="form_name" >LAST NAME *</label>
                        <input type="text" class="form-control input-lg" name="inputLN" placeholder="Last Name" required>
                    </div>
                    <div class="form-group" id="form_spacing">
                       <label for="exampleInputEmail1" class="form_name">EMAIL ADDRESS *</label>
                       <input type="email" class="form-control input-lg" name="inputEA" id="email" placeholder="Enter Email">
                    </div>
                    <div class="form-group" id="form_spacing">
                        <label for="password" class="form_name">PASSWORD *</label>
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
                       <button style="background-color:black;font-weight: bold;"type="submit" class="btn btn-default" name="signup" id="button_heading" disabled>SIGN UP</button>
                       </div>
                    </div>
                </form>
               </div>
            </div>
        </div>  
    </section>
</body>
</html>