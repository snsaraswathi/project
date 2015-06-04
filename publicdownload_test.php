<?php
$error = ""; 
if($_POST['submit']=='Download as Zip')
{
$post = $_POST; 
$file_folder = "publicuploads/";
if(isset($post['files']) and count($post['files']) > 0)
{
# create new zip opbject
$zip = new ZipArchive();
$zip_name = "download.zip";
if($zip->open($zip_name, ZIPARCHIVE::CREATE)!==TRUE)
{ 
 // Opening zip file to load files
$error .= "* Sorry ZIP creation failed at this time";
}

# loop through each file
foreach($post['files'] as $file)
{

   $zip->addFile($file_folder.$file);
}

$zip->close();
if(file_exists($zip_name))
{
// push to download the zip
header('Content-type: application/zip');
header('Content-Disposition: attachment; filename="'.$zip_name.'"');
readfile($zip_name);
// remove zip file is exists in temp path
unlink($zip_name);
}
}
}
?>