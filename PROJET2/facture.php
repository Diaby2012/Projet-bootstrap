<?php
  session_start();

 if(isset($_POST['envoyer'])){
	 try
    {
     $db = new PDO('mysql:host=localhost;dbname=memoire', 'root', '');
     }
     catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
	if($_FILES['facture']['error']==0){ copy( $_FILES['facture']['tmp_name'], "image/".$_FILES['facture']['name'] ); }
	
	if($_FILES['facture']['error']==0){
	$q = $db->prepare('UPDATE engagement SET facture =:facture where num_op= :num_op and nfich_eng= :nfich_eng');
	$q->execute(array('facture' =>$_FILES['facture']['name'],'num_op' =>$_POST['num_op'],'nfich_eng' =>$_POST['nfich_eng']));
	}
	 }
?>

<!DOCTYPE html>
<html>
    <head>
        <!-- En-tête de la page -->
        <meta charset="utf-8" />
		<!--<link rel="stylesheet" href="formulaire.css" /> -->
        <title>FICHE D'ENGAGEMENT DE DEPENSE</title>
    </head>
    <body>
<h1>entreprise</h1>
	<form  enctype="multipart/form-data" method="post" action="acceuil_entreprise.php">
	      <p>
		  <label for="facture">FACTURE
		  <input type="file" name="facture" id="facture" />
		  </label>
		  </p>

		  <p>
		  <label for="num_op">NUM_OP</label>
		  <input type=text name=num_op id="num_op" / >
		  </p>
		  
          <p>
		  <label for="nfich_eng">NFICH_ENG</label>
		  <input type=text name=nfich_eng  id="nfich_eng"/>
		  </p>
		  
		  <p>
          <input type="submit" name="envoyer"  value="Envoyer" />
          </p>
  
    </form>
    </body>
</html>