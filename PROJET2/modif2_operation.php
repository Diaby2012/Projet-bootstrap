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
			
			$q = $db->prepare('UPDATE operation SET num_op =:num_op,
													libelle_op =:libelle_op,
													auto_prog = :auto_prog,
													date_insc = :date_insc,
													date_dem = :date_dem,
													date_ach = :date_ach,
													etude = :etude,
													batiment = :batiment,
													travaux_public = :travaux_public,
													materiel_equipement_production = :materiel_equipement_production,
													materiel_transport = :materiel_transport,
													formation = :formation,
													prestation_service_externe = :prestation_service_externe,
													autre = :autre,publication = :publication,
													controle_suivi = :controle_suivi,
													montant_non_ventille = :montant_non_ventille,
													total = :total where id = :id');

			$q->execute(array(  'num_op' => $_POST['num_op'],
								'libelle_op' => $_POST['libelle_op'],
								'auto_prog' => $_POST['auto_prog'],
						        'date_insc' => $_POST['date_insc'],
						        'date_dem' => $_POST['date_dem'],
						        'date_ach' => $_POST['date_ach'],
								'etude' => $_POST['etude'],
								'batiment' => $_POST['batiment'],
								'travaux_public' => $_POST['travaux_public'],
								'materiel_equipement_production' => $_POST['materiel_equipement_production'],
								'materiel_transport' => $_POST['materiel_transport'],
								'formation' => $_POST['formation'],
								'prestation_service_externe' => $_POST['prestation_service_externe'],
								'autre' => $_POST['autre'],
								'publication' => $_POST['publication'],
								'controle_suivi' => $_POST['controle_suivi'],
								'montant_non_ventille' => $_POST['montant_non_ventille'],
								'total' => $_POST['total'],
								'id'=>$_SESSION['id']));
		header("location:sam_afficher.php?msg=message");
			
?>