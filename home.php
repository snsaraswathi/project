<?php 
session_start();
if(!isset($_SESSION["emailid"])){
	header("location:signin.php");
}else{
?>
<!DOCTYPE html>
<html>
<head>
       <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="dist/css/bootstrap.css">
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
			<div>
			<center class= "logo">Socket Snipers</center>
			       </div>
<div>
		<?php 
		
		
include ("nav.html");

?>
<br><br>
</div>
		<div class ="container" id="password_form">
           <div class="row">
               <div class="col-md-4">

                    <form  method="post" name="myform" onsubmit="select()" enctype="multipart/form-data">
                        <div class="form-group" id="form_spacing">
                            <label for="Browse" class="form_name">Upload Your Image</label>
                            <input type="file" name="fileToUpload" class="form-control input-lg" id="fileToUpload" onchange="readURL(this);">
                       </div>
                       <div class="form-group" id="form_spacing">
<input type="radio" id="radio1" name="colorRadio" value="private" ><font color="#FFFFF"> Private Upload </font> </input>
    <input type="radio" id="radio2" name="colorRadio" value="public"><font color="#FFFFF">Public Upload  </font></input>
</div>
<div class="form-group" id="form_spacing">
                            <div class="col-sm-offset-2 col-sm-10" id="button">
                            <button type="submit" class="btn btn-default" name="submit" id="submit">Upload</button>
                            </div>
                        </div> 
						<div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10" id="button">
							<div class="ScrollStyle">
							
						<img  id="image" src="#" alt="up image" height="100" width="100" class="ScrollStyle" />	
						</div>						
						</div>	
						</div>
                    </form>
				</div>
			</div>
		</div>
    </body>
</html>
<?php }?>