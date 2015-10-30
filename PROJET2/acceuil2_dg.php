<?php
  session_start();

  $date = date("d/m/Y");

  $approuv='approuver';

 if(isset($_POST['approuver'])){
	 try
    {
     $db = new PDO('mysql:host=localhost;dbname=memoire2', 'root', '');
     }
     catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
	$q = $db->prepare('UPDATE engagement SET approbation =:approbation,date_approbation =:date_approbation where id =:id');
	$q->execute(array('approbation' =>$approuv,'date_approbation' =>$date,'id' =>$_POST['id']));
	header('location:directeur_page.php?message=message');
	 }
?>
