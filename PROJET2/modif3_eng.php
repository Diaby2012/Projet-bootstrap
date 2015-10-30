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
			$q = $db->prepare('UPDATE engagement SET num_proj =:num_proj,
													 objet_eng = :objet_eng,
													 nfich_eng = :nfich_eng,
													 structure_eng = :structure_eng,
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

			$q->execute(array(  'num_proj' => $_POST['num_proj'],
								'objet_eng' => $_POST['objet_eng'],
								'nfich_eng' => $_POST['nfich_eng'],
								'structure_eng' => $_POST['structure_eng'],
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
								'id'=> $_SESSION['id']));
								
		header("Location:samaffich_eng.php?msg=dccddc");			
?>