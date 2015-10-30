<?php
  session_start();
 
  $approuv='ok';

	 try
    {
     $db = new PDO('mysql:host=localhost;dbname=memoire2', 'root', '');
     }
     catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
	$q = $db->prepare('UPDATE engagement SET ods =:ods where id =:id');
	$q->execute(array('ods' =>$approuv,'id' =>$_SESSION['id_eng']));
	header('location:sam_ods.php?message="message');
	 
?>
