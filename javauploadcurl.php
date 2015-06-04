<?php
$target_dir = "publicuploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
echo "Upload Success!!";
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";

}else
{
	move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
echo "File uploaded successfully!!";
	$data=array('myimage' =>'@'.realpath( $target_file));
	$ch=curl_init();
$url1="http://suganyakanagavel.com/curlupload.php";
	curl_setopt($ch, CURLOPT_URL, $url1);
	curl_setopt($ch, CURLOPT_POST,true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	
	$response=curl_exec($ch);

	if($response==true){
		echo "File Uploaded!! SUCCESSFULLY to ".$url1."<br>";
		$subject="Socket Snipers";
		$to="4086440409@tmomail.net";
		$from="www.veerappanraja.com";
		$message="File has been uploaded to your server from $from";
		if (!mail($to, $subject,"From: ".$from, $message)){
			echo "Failed to send SMS"."<br>";
		}else{
			echo "SMS success"."<br>";
		}
	}else{
		echo "Error!!".curl_error($ch);
	}
$url2="http://hemanth-kumar.com/curlupload.php";
curl_setopt($ch, CURLOPT_URL,$url2 );
	curl_setopt($ch, CURLOPT_POST,true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	
	$response=curl_exec($ch);

	
	if($response==true){
		echo "File Uploaded!! SUCCESSFULLY to ".$url2."<br>";
		$subject="Socket Snipers";
		$to="4084555744@tmomail.net";
		$from="www.veerappanraja.com";
		$message="File has been uploaded to your server from $from";
		if (!mail($to, $subject,"From: ".$from, $message)){
			echo "Failed to send SMS"."<br>";
		}else{
			echo "SMS success"."<br>";
		}
	}else{
		echo "Error!!".curl_error($ch);
	}
$url3="http://archana24.com/curlupload.php";
	curl_setopt($ch, CURLOPT_URL, $url3);
	curl_setopt($ch, CURLOPT_POST,true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	
	$response=curl_exec($ch);

	
	if($response==true){
		echo "File Uploaded!! SUCCESSFULLY to ".$url3;
		$subject="Socket Snipers";
		$to="3522787565@txt.att.net";
		$from="www.veerappanraja.com";
		$message="File has been uploaded to your server from $from";
		if (!mail($to, $subject,"From: ".$from, $message)){
			echo "Failed to send SMS"."<br>";
		}else{
			echo "SMS success"."<br>";
		}
	}else{
		echo "Error!!".curl_error($ch);
	}
$url4="http://rahul207.com/curlupload.php";
	curl_setopt($ch, CURLOPT_URL, $url4);
	curl_setopt($ch, CURLOPT_POST,true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	
	$response=curl_exec($ch);

	
	if($response==true){
		echo "File Uploaded!! SUCCESSFULLY to ".$url4."<br>";
		$subject="Socket Snipers";
		$to="5105567311@tmomail.net";
		$from="www.veerappanraja.com";
		$message="File has been uploaded to your server from $from";
		if (!mail($to, $subject,"From: ".$from, $message)){
			echo "Failed to send SMS"."<br>";
		}else{
		echo "SMS success"."<br>";
		
		}
		
	}else{
		echo "Error!!".curl_error($ch);
	}
}


?>