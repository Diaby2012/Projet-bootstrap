<?php
session_start();
$ds = DIRECTORY_SEPARATOR;
$store_Folder = 'uploads';

if (!empty($_FILES)){
    $tempFile = $_FILES['file']['tmp_name'];
    $target_Path = dirname( __FILE__ ) .$ds.$storeFolder.$ds;
    $target_File = $target_Path. $_FILES['file']['name'];
    
    move_uploaded_file($tempFile,targetFile);
}
?>