<?php
  session_start();

  $date = date("d/m/Y");

 if(isset($_POST['envoyer'])){
	 try
    {
     $db = new PDO('mysql:host=localhost;dbname=memoire2', 'root', '');
     }
     catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
	$q = $db->prepare('UPDATE engagement SET verdict =:verdict,date_verdict =:date_verdict where id =:id');
	$q->execute(array('verdict' =>$_POST['verdict'],'date_verdict' =>$date,'id' =>$_POST['id']));
	header('location:cf_page.php?message=message');
	 }
?>
