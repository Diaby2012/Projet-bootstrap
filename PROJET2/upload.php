<?php
session_start();

		
			/* 
			 try
			{
			 $db = new PDO('mysql:host=localhost;dbname=memoire2', 'root', '');
			 }
			 catch(Exception $e)
			{
				die('Erreur : '.$e->getMessage());
			}
 
       if(isset($_FILES['photo']['error'])){
           
           copy( $_FILES['photo']['tmp_name'] , "uploads/".$_FILES['photo']['name']);
       }	
			$q = $db->prepare('UPDATE projet SET facture =:facture where num_proj=:num_proj');
			$q->execute(array(  'facture' => $_FILES['photo']['name'],
                                'num_proj' => $_POST['num_proj']));
    header('location:entreprise_fac.php')*/
 

$ds = DIRECTORY_SEPARATOR;  // 1
 
$StoreFolder = 'uploads' ;   // 2
 
if (!empty($_FILES)){
     
    $tempFile = $_FILES['file']['tmp_name'];          // 3             
      
    $targetPath = dirname(__FILE__) . $ds . $storeFolder . $ds ;  // 4
     
    $targetFile  =  $targetPath. $_FILES['file']['name'];  // 5
 
    move_uploaded_file($tempFile,$TargetFile); // 6
     
}
 
?> 