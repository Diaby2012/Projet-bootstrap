<?php
session_start();
if(!isset($_SESSION['connexion'])){ header("location:indexe.php");} 

if(isset($_POST['enregistrer'])){ 
try
    {
        $db = new PDO('mysql:host=localhost;dbname=memoire2', 'root', '');
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
	
	$reqe = $db->prepare('SELECT * FROM entreprise where nom= :nom and adresse= :adresse');
    $reqe->execute(array('nom' => $_POST['nom'],'adresse' => $_POST['adresse']));
	$donnees = $reqe->fetch();
    
     if($donnees['nom']=="" && $donnees['adresse']=="" ){

if(isset($_POST['enregistrer'])){
   
     try
    {
        $db = new PDO('mysql:host=localhost;dbname=memoire2', 'root', '');
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }

    $q = $db->prepare('INSERT INTO entreprise SET nom =:nom,adresse =:adresse,num_tel = :num_tel,num_compte = :num_compte,responsable = :responsable');
    $q->execute(array(  'nom' => $_POST['nom'],'adresse' => $_POST['adresse'],'num_tel' => $_POST['num_tel'],'num_compte' => $_POST['num_compte'],'responsable' => $_POST['responsable']));
	
	$cat="entreprise";
	$q = $db->prepare('INSERT INTO connexion SET mot_de_passe =:mot_de_passe,identifiant =:identifiant,categorie = :categorie');
	$q->execute(array(  'mot_de_passe' => $_POST['mot_de_passe'],'identifiant' => $_POST['responsable'],'categorie' => $cat));
	$message="message";
}else{ $erreur="erreur"; } }}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no">
<title>SAM - PROJET</title>
 <?php include('plugins.php') ?>
</head>
<body id="entreprise">
<!------------------------------------------------------   HEADER ----------------------------------------------------->
<?php include('header.php')?>
<!------------------------------------------------------   Menu 2 ----------------------------------------------------->
<div class="container">
	<div class="row">
	<ul class="nav nav-pills nav-justified">
			<li role="presentation" class="active">
				<a href="ajoutentreprise.php" data-toggle="tab"> <span class="li_men">Ajouter</span> <i class="fa fa-plus-circle"></i>
				</a>
			</li>
			<li role="presentation"><a href="ajoutentreprise2.php" ><span class="li_men">Afficher</span> <i class="fa fa-pencil-square-o"></i>
			</a>
			</li>
		</ul>
		
				<div class="panel panel-primary" id="panel_pad">
					<div class="panel-heading">
						<h1 class="panel-title">Formulaire d'ajout d'une entreprise:</h1>
					</div>
					<div class="panel-body">
					<?php if(isset($message)){ ?>
						<div class="alert alert-success alert-dismissible monalert" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				   <strong>Yeah !</strong> Votre Entreprise a été créer avec succes ! <i class="fa fa-info-circle"></i>
					</div>
					<?php }?>
                        <?php if(isset($erreur)){ ?>
						<div class="alert alert-danger alert-dismissible monalert" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				   <strong>Ooooouh !</strong> l'Entreprise que vous voulez insérer existe déja ! <i class="fa fa-info-circle"></i>
					</div>
					<?php }?>
						<p class="policp text-justify"></p>
						<div class="col-xs-6 col-xs-offset-3 form-enga">
							<form id="entreprisef" method="POST" action="ajoutentreprise.php">
								<h3 class="bord">Info Entreprise</h3>
								<hr>
									<div class="form-group">
										<label for="nom">Nom</label> :
										<input class="form-control" type="text" name="nom" id="nom"  />
									</div>
									<div class="form-group">
										<label for="adresse">Adresse</label> :
										<input class="form-control" type="text" name="adresse" id="adresse"  />
									</div>
                                    <div class="form-group">
										<label for="num_tel">Numéro de téléphone</label> :
										<input class="form-control" type="text" name="num_tel" id="num_tel"   />
									</div>
									<div class="form-group">
										<label for="num_compte">Numéro du compte</label> :
										<input class="form-control" type="text" name="num_compte" id="num_compte"  />
									</div>
									<div class="form-group">
										<label for="responsable">Responsable</label> :
										<input class="form-control" type="text" name="responsable" id="responsable"  />
									</div>
                                    <div class="form-group">
										<label for="mot_de_passe">Mot de Passe</label> :
										<input class="form-control" type="password" name="mot_de_passe" id="mot_de_passe"  />
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
	</body>
	        <script type="text/javascript">
            $(document).ready(function() {

    $('#entreprisef').bootstrapValidator({
        message: 'This value is not valid',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },

        fields: {
            nom: {
                
                validators: {
                    notEmpty: {
                        message: 'Remplisser le champ Nom '
                    },
                regexp: {
                        regexp: /^[a-zA-Z0-9 ']+$/,
                        message: 'Ce champ ne peut contenir que des lettres, espaces, apostrophes et des chiffres'
                    },

                }
            },
            adresse: {
                
                validators: {
                    notEmpty: {
                        message: 'Remplisser le champ Adresse '
                    },
                regexp: {
                        regexp: /^[a-zA-Z0-9 ]+$/,
                        message: 'Ce champ ne peut contenir que des lettres, espaces et des chiffres'
                    },

                }
            },
            num_tel: {
                
                validators: {
                    notEmpty: {
                        message: 'Remplisser le champ Numéro de téléphone '
                    },
                digits: {
                        message: 'Ce champ ne peut contenir que des chiffres'
                    },

                }
            },
            num_compte: {
			validators: {
				notEmpty: {
					message: 'Remplissez le champ Numéro de compte '
				},
			regexp: {
					regexp: /^[a-zA-Z0-9]+$/,
					message: 'Ce champ ne peut contenir que des lettres et des chiffres'
				}
			}
            },
            mot_de_passe: {
			validators: {
				notEmpty: {
					message: 'Remplissez le champ Mot de Passe'
				}
			}
		},
            responsable: {
                validators: {
                    notEmpty: {
                        message: 'Remplisser le champ Responsable '
                    },
                regexp: {
                        regexp: /^[a-zA-Z0-9 ]+$/,
                        message: 'Ce champ ne peut contenir que des lettres et des chiffres'
                    },

                }
            },
        

        }
    });

});
        </script>
</html>