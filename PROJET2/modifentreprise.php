<?php		
	session_start();
		
			 
			 try
			{
			 $db = new PDO('mysql:host=localhost;dbname=memoire2', 'root', '');
			 }
			 catch(Exception $e)
			{
				die('Erreur : '.$e->getMessage());
			}
			
			$q = $db->prepare('UPDATE entreprise SET nom =:nom,
                                               adresse =:adresse,
                                                num_tel =:num_tel,			
												num_compte =:num_compte,
												responsable = :responsable where id = :id');

			$q->execute(array(  'nom' => $_POST['nom'],
                              'adresse' => $_POST['adresse'],
			            'num_tel' => $_POST['num_tel'],
						'num_compte' => $_POST['num_compte'],
						'responsable' => $_POST['responsable'],
						'id'=>$_SESSION['id']));
			header("location:ajoutentreprise2.php?msg=aqzsedrf");
			
?>