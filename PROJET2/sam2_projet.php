<?php
session_start();
if(!isset($_SESSION['connexion'])){ header("location:indexe.php");} 

//$_SESSION['num_op']=$_POST['num_op'];

if(isset($_POST['enregistrer'])){ 
try
    {
        $db = new PDO('mysql:host=localhost;dbname=memoire2', 'root', '');
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
	
	$reqe = $db->prepare('SELECT * FROM projet where num_proj= :num_proj');
    $reqe->execute(array('num_proj' => $_POST['num_proj']));
	$donnees = $reqe->fetch();
    
     if($donnees['libelle_proj']==""){
 try
{
 $db = new PDO('mysql:host=localhost;dbname=memoire2', 'root', '');
 }
 catch(Exception $e)
{
	die('Erreur : '.$e->getMessage());
}	
$q = $db->prepare('INSERT INTO projet (num_op,id_ent,num_proj,libelle_proj,rub1,rub2,mont_projet,date_dem,date_ach,obs) VALUES (:num_op,:id_ent,:num_proj,:libelle_proj,:rub1,:rub2,:mont_projet,:date_dem,:date_ach,:obs)');
$q->execute(array(  'num_op' => $_POST['num_op'],
                    'id_ent' => $_POST['id_ent'],
					'num_proj' => $_POST['num_proj'],
					'libelle_proj' => $_POST['libelle_proj'],
					'rub1' => $_POST['rub1'],
					'rub2' => $_POST['rub2'],
					'mont_projet' => $_POST['mont_projet'],
					'date_dem' => $_POST['date_dem'],
					'date_ach' => $_POST['date_ach'],
					'obs' => $_POST['obs']));
					$message="message";
         } else{ $erreur="erreur"; }

}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no">
<title>SAM - PROJET</title>
 <?php include('plugins.php') ?>
</head>
<body id="projet">
<!------------------------------------------------------   HEADER ----------------------------------------------------->
<?php include('header.php')?>
<!------------------------------------------------------   Menu 2 ----------------------------------------------------->
<div class="container">
	<div class="row">
		<ul class="nav nav-pills nav-justified">
			<li role="presentation" class="active">
				<a href="sam_projet.php" data-toggle="tab"> <span class="li_men">Ajouter</span> <i class="fa fa-plus-circle"></i>
				</a>
			</li>
			<li role="presentation"><a href="samaffich_projet.php" ><span class="li_men">Afficher</span> <i class="fa fa-pencil-square-o"></i>
			</a>
			</li>
		</ul>
				<div class="panel panel-primary" id="panel_pad">
					<div class="panel-heading">
						<h1 class="panel-title">Formulaire d'ajout de Projet:</h1>
					</div>
					<div class="panel-body">
					<?php if(isset($message)){ ?>
						<div class="alert alert-success alert-dismissible monalert" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				   <strong>Yeah !</strong> Votre Projet a été créer avec succes ! <i class="fa fa-info-circle"></i>
					</div>
					<?php }?>
                        <?php if(isset($erreur)){ ?>
						<div class="alert alert-danger alert-dismissible monalert" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				   <strong>Ooooouh !</strong> le Projet que vous voulez créer existe déja ! <i class="fa fa-info-circle"></i>
					</div>
					<?php }?>
						<p class="policp text-justify"></p>
						<div class="col-xs-6 col-xs-offset-3 form-enga">
							<form id="projetf" method="POST" action="sam2_projet.php">
								<h3 class="bord">Info Projet</h3>
								<hr>
									<div class="form-group">
										<label for="noperation">N°de l'opération</label> :
										<input class="form-control" readonly type="text" name="num_op" id="noperation" value="<?php echo $_SESSION['num_op']?>"  />
									</div>
                                    <div class="form-group">
										<label for="noperation">ID de l'entreprise</label> :
										<input class="form-control" readonly type="text" name="id_ent" id="noperation" value="<?php echo $_SESSION['id_entreprise']?>"  />
									</div>
									<div class="form-group">
										<label for="Num_proj">Numéro du projet</label> :
										<input class="form-control" type="text" name="num_proj" id="Num_proj"  />
									</div>
									<div class="form-group">
										<label for="libelle_proj">Libelle du projet</label> :
										<input class="form-control" type="text" name="libelle_proj" id="libelle_proj"  />
									</div>
                                        
									<div class="form-group">
										<label for="rub1">Rubrique 1</label> :
                                        <select class="form-control" name="rub1" >
                                            <option value="" >Selectionner une rubrique</option>
                                            <option value="etud" >Etude</option>
                                            <option value="batiment">Batiment</option>
                                            <option value="traveaux_public">Travaux Public</option>
                                            <option value="machine_equipement_production">Machine et equipement de production</option>
                                            <option value="materiel_transport">Matériel de transport</option>
                                            <option value="formation">Formation</option>
                                            <option value="prestation_service_externe">Prestation des services externes</option>
                                            <option value="autre">Autres</option>
                                            <option value="publication">Publication</option>
                                            <option value="controle_suivi">Controle et suivi</option>
                                            <option value="montant_non_ventille">Montant non ventillé</option>
                                        </select>
									</div>
									<div class="form-group">
										<label for="rub1">Rubrique 2</label> :
                                        <select class="form-control" name="rub2">
                                            <option value="" >Selectionner une rubrique</option>
                                            <option value="etud" >Etude</option>
                                            <option value="batiment">Batiment</option>
                                            <option value="traveaux_public">Travaux Public</option>
                                            <option value="machine_equipement_production">Machine et equipement de production</option>
                                            <option value="materiel_transport">Matériel de transport</option>
                                            <option value="formation">Formation</option>
                                            <option value="prestation_service_externe">Prestation des services externes</option>
                                            <option value="autre">Autres</option>
                                            <option value="publication">Publication</option>
                                            <option value="controle_suivi">Controle et suivi</option>
                                            <option value="montant_non_ventille">Montant non ventillé</option>
                                        </select>
									</div>
                                        <div class="form-group">
										<label for="mont_projet">Montant du projet</label> :
										<input class="form-control" type="double" name="mont_projet" id="mont_projet"  />
									</div>
									<div class="form-group">
										<label for="date_dem">Date de demarrage</label> :
										<input class="form-control" type="text" name="date_dem" id="date_dem" placeholder="JJ/MM/AAAA" required="yes" />
									</div>
									<div class="form-group">
										<label for="date_ach">Date d'Achèvement</label> :
										<input class="form-control" type="text" name="date_ach" id="date_ach" placeholder="JJ/MM/AAAA" required="yes" />
									</div>
									<div class="form-group">
										<label for="obs">Observation</label> :
										<input class="form-control" type="text" name="obs" id="obs"  />
									</div>
								 <div class="form-group">
                                    <div class="panel-footer text-center">
                                        <button class="btn btn-defaut btn-primary" type="submit" name="enregistrer"><i class='fa fa-floppy-o'></i> ENREGISTRER</button>
                                    </div>
                                </div>
							</form>
				</div>
	</div>
	</div>
	</div>
	</div>
 <script type="text/javascript">
		$(document).ready(function() {
$('#projetf').bootstrapValidator({
	message: 'This value is not valid',
	feedbackIcons: {
		valid: 'glyphicon glyphicon-ok',
		invalid: 'glyphicon glyphicon-remove',
		validating: 'glyphicon glyphicon-refresh'
	},
	fields: {
		num_op: {
			autoFocus: 'false',
			validators: {
				notEmpty: {
					message: 'Remplissez le champ Operation '
				},
			regexp: {
					regexp: /^[a-zA-Z0-9]+$/,
					message: 'Ce champ ne peut contenir que des lettres et des chiffres'
				}
			}
		},
		num_proj: {
			validators: {
				notEmpty: {
					message: 'Remplissez le champ Numéro du projet '
				},
			regexp: {
					regexp: /^[a-zA-Z0-9]+$/,
					message: 'Ce champ ne peut contenir que des lettres et des chiffres'
				}
			}
		},
	   libelle_proj: {
			validators: {
				notEmpty: {
					message: 'Remplissez le champ Libellé '
				},
			regexp: {
					regexp: /^[a-zA-Z0-9 ']+$/,
					message: 'Ce champ ne peut contenir que des lettres et des chiffres'
				}
			}
		},
		rub1: {
			validators: {
				notEmpty: {
					message: 'Remplissez le champ Rubrique 1 '
				},
			regexp: {
					regexp: /^[a-zA-Z _]+$/,
					message: 'Ce champ ne peut contenir que des lettres '
				}
			}
		},
        rub2: {
        validators: {
        regexp: {
                regexp: /^[a-zA-Z ]+$/,
                message: 'Ce champ ne peut contenir que des lettres '
            }
        }
		},
		mont_projet: {
			validators: {
				notEmpty: {
					message: 'Remplissez le champ montant du projet '
				},
			numeric: {
					message: 'Ce champ ne peut contenir que des chiffres'
				}
			}
		},
		date_dem:{
			validators: {
				notEmpty: {
					message: 'Remplissez le champ Date de demarrage' 
				},
				date: {
					format: 'DD/MM/YYYY',
					message: 'La date n\'est pas valide'
				}
			}
		},
		date_ach:{
			message: 'Le format de la date est incorrect',
			validators: {
				notEmpty: {
					message: 'Remplissez le champ Date d\'Achèvement' 
				},
                different: {
                        field: 'date_dem',
                        message: 'La date d\'Achèvement doit être supérieure à la date de Demarrage'
                    },
				date: {
					format: 'DD/MM/YYYY',
					min: 'date_dem',
					message: 'La date d\'Achèvement doit être supérieure à la date de Demarrage'
				},
				callback: {
					message: 'Le format de la date est incorrect ! Utiliser ce format JJ/MM/AAAA',
					callback: function(value, validator) {
						var m = new moment(value, 'DD/MM/YYYY', true);
						if (!m.isValid()) {
							return false;
						}
						return m.isAfter('01/01/2000') && m.isBefore('12/30/2020');
					}
				}
			}
		},
        obs: {
        validators: {
        regexp: {
                regexp: /^[a-zA-Z ']+$/,
                message: 'Ce champ ne peut contenir que des lettres, apostrophes, espaces et les chiffres'
            }
        }
		},
	}
});
});
	</script>
</body>
</html>