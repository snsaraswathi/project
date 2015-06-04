
<!DOCTYPE html>
<html>
<head>
       <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
    <link rel="stylesheet" type="text/css" href="main2.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
	<link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
	<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
<script type="text/javascript">
     function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader(); 

                reader.onload = function (e) {
                    $('#image')
                        .attr('src', e.target.result)
                        .width(550)
                        .height(550);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
 function select()
    {
     var1=document.getElementById("radio1");
     var2=document.getElementById("radio2");
     if(var1.checked==true)
     {
        document.myform.action="upload.php";
     }
     else
     {
        document.myform.action="uploadcurl.php";
     }
   }
</script>
	<style type="text/css">
	#img_bg {
	width:100%; height: 600px; position:fixed; top: 0px; left: 0px; z-index: -100; min-height: 100%; min-width: 1040px;  
}

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
	background-color: yellow;
    opacity: 0.5;
}
#container2:hover{
	opacity: 1;
}
#container3 {
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
#container3:hover{
	opacity: 1;
}
#btnn{
	width: 100px;
	height: 90px;
	margin-top: 50px;
	background-color: royalblue;
	opacity: 0.5;
}
#btnn:hover{
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
</head>

     <body> 
		<div id="container">
			<center >i-snap</center>
			       </div>
		<img id="img_bg" src="homephp.jpg">
		<div>
						<div class="row">
							<form method="post" action="upload_test.php">
								
								<table class="flex-center">
								<tr>
								
								<td class="inline-block-center-div" id="email">
									<div class="form-group" id="container2" id="form_spacing">
									<label for="Browse" class="form_name">Upload Your Image</label>
									<input type="file" name="fileToUpload" class="form-control input-lg" id="fileToUpload" onchange="readURL(this);">
									</div>
								</td>
								<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
								<td class="inline-block-center-div" id="password">
									<div class="form-group" id="form_spacing">
									<div class="col-sm-offset-2 col-sm-10" id="button">
									<button type="submit" class="btn btn-default" name="submit"  id="btnn">Upload</button>
									</div>
									</div> 
								</td>
								</tr>
								</table>
								
								
							</form>
							
			
						</div>
					</div>
		<div id="container3" class="form-group">
                            <div class="col-sm-offset-2 col-sm-10" id="button">
							<div class="ScrollStyle">
							
						<img  id="image" src="#" alt="up image" height="100" width="100" class="ScrollStyle" />	
						    </div>						
		        			</div>	
		</div>
		
    </body>
</html>
