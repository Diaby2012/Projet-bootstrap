<?php
     session_start();
					if(isset($_POST['connexion'])){
						try{ $bdd = new PDO('mysql:host=localhost;dbname=memoire2', 'root', ''); }
						catch (Exception $e){ die('Erreur : ' . $e->getMessage());}
                        $req=$bdd->prepare('SELECT categorie FROM connexion WHERE mot_de_passe = :mot_de_passe and identifiant= :identifiant');
                        $req->execute(array('mot_de_passe'=>$_POST['mot_de_passe'],'identifiant'=>$_POST['login']));
						$resultat = $req->fetch();
						 
							if ($resultat["categorie"]=="agent"){ 
							$_SESSION['connexion']="vfdssv";
							header("location:sam.php");}
							else if ($resultat["categorie"]=="cf"){ 
							$_SESSION['connexion']="vfdssv";
							header("location:cf_page.php");}
							elseif ($resultat["categorie"]=="entreprise"){ 
							$_SESSION['connexion']="vfdssv";
							header("location:acceuil_entreprise.php");}
							elseif ($resultat["categorie"]=="directeur"){ 
							$_SESSION['connexion']="vfdssv";
							header("location:directeur_page.php"); }
					        else{ $_message="ok";}
					}
					
					if(isset($_POST['envoyer'])){
						try{ $bdd = new PDO('mysql:host=localhost;dbname=memoire2', 'root', ''); }
						catch (Exception $e){ die('Erreur : ' . $e->getMessage());}
						$q = $bdd->prepare('INSERT INTO contact SET nom =:nom,sujet =:sujet,phone =:phone,email =:email,message =:message');

	$q->execute(array(  'nom' => $_POST['nom'],
						'sujet' => $_POST['sujet'],
						'phone' => $_POST['phone'],
						'email' => $_POST['email'],
						'message' => $_POST['message']));
                                                }
 
					
?>