<?php
if (isset($_FILES['fileToUpload']['tmp_name'])){
	$filepath=$_FILES['fileToUpload']['tmp_name'];
	$target_dir = "publicuploads/";
	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
        echo "Upload Success!!";
	$data=array('myimage' =>'@'.realpath( $target_file));
	$ch=curl_init();


$url3="http://archana24.com/curlupload.php";
	curl_setopt($ch, CURLOPT_URL, $url3);
	curl_setopt($ch, CURLOPT_POST,true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	$response=curl_exec($ch);	
	if($response==true){
		echo "File Uploaded!! SUCCESSFULLY to ".$url3;
		
               //uncomment below lines for message feature
               /* 
                $subject="Socket Snipers";
		$to="3522787565@txt.att.net";
		$from="www.snsaraswathi.com";
		$message="File has been uploaded to your server from $from";
		if (!mail($to, $subject,"From: ".$from, $message)){
			echo "Failed to send SMS"."<br>";
		}else{
			echo "SMS success"."<br>";
		}
        */

	}
        else{
		echo "Error!!".curl_error($ch);
	}
}
echo "<script>window.location.href='uploadsuccess.php'</script>";

?>