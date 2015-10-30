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
			
			$q = $db->prepare('UPDATE projet SET num_op =:num_op,
                                               id_ent =:id_ent,
                                                num_proj =:num_proj,			
												libelle_proj =:libelle_proj,
												rub1 = :rub1,
												rub2 = :rub2,
												mont_projet = :mont_projet,
												date_approb = :date_approb,
												date_dem = :date_dem,
												date_cf = :date_cf,
												date_ach = :date_ach,
												obs = :obs where id = :id');

			$q->execute(array(  'num_op' => $_POST['num_op'],
                              'id_ent' => $_POST['id_ent'],
			            'num_proj' => $_POST['num_proj'],
						'libelle_proj' => $_POST['libelle_proj'],
						'rub1' => $_POST['rub1'],
						'rub2' => $_POST['rub2'],
						'mont_projet' => $_POST['mont_projet'],
						'date_approb' => $_POST['date_approb'],
						'date_dem' => $_POST['date_dem'],
						'date_cf' => $_POST['date_cf'],
						'date_ach' => $_POST['date_ach'],
						'obs' => $_POST['obs'],
						'id'=>$_SESSION['id']));
			header("location:samaffich_projet.php?msg=aqzsedrf");
			
?>