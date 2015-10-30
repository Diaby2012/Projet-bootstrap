<?php
session_start();
if(!isset($_SESSION['connexion'])){ header("location:indexe.php");} 
?>
<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no">
        <title>SAM - PAIEMENT</title>
        <?php include('plugins.php') ?>
    </head>

    <body id="virement">
        <!------------------------------------------------------   HEADER ----------------------------------------------------->
        <?php include('header.php')?>
        <!------------------------------------------------------   Menu 2 ----------------------------------------------------->
        <div class="container">
            <div class="row">

                <ul class="nav nav-pills nav-justified">
                    <li role="presentation" class="active">
                        <a href="sam_eng.php" data-toggle="tab"> <span class="li_men">Ajouter</span> <i class="fa fa-plus-circle"></i>
                        </a>
                    </li>
                 
                </ul>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="panel panel-primary" id="panel_pad">
                    <div class="panel-heading">
                        <h1 class="panel-title">Formulaire de creation d'un avis de virement:</h1>
                    </div>
                    <div class="panel-body">
                       
                        <div class="col-xs-6 col-xs-offset-3 form-enga">
                            <form id="avisf" method="POST" action="sam4_avis.php">
                                <h3 class="bord">Info Opération</h3>
                                <hr>
                                    <div class="form-group">
                                        <label for="num_op">Num operation</label> :
                                        <input class="form-control" type="text" readonly name="num_op" id="num_op" value="<?php echo $_SESSION['num_op']?>"  />
                                    </div>

                                    <div class="form-group">
                                        <label for="nom">Nom entreprise</label> :
                                        <input class="form-control" type="text" readonly name="nom" id="nom" value="<?php echo $_POST['nom']?>" />
                                    </div>
                                    <div class="form-group">
                                        <label for="num_compte">Num de compte</label> :
                                        <input class="form-control" type="text" readonly name="num_compte" id="nfich_paie" value="<?php echo $_POST['num_compte']?>" />
                                    </div>

                                    <div class="form-group">
                                        <label for="montant">Montant</label> :
                                        <input class="form-control" type="double" name="montant" id="montant"  required="yes" />
                                    </div>
                                 <div class="panel-footer text-center">
                                        <button class="btn btn-defaut btn-primary" type="submit" name="enregistrer"><i class='fa fa-floppy-o'></i> ENREGISTRER</button>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
       <script type="text/javascript">
		$(document).ready(function() {
$('#avisf').bootstrapValidator({
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
					message: 'Remplissez le champ Numéro de l\'Opération '
				},
			regexp: {
					regexp: /^[a-zA-Z0-9]+$/,
					message: 'Ce champ ne peut contenir que des lettres et des chiffres'
				}
			}
		},
		nom: {
			validators: {
				notEmpty: {
					message: 'Remplissez le champ Nom de l\'Entreprise '
				},
			regexp: {
					regexp: /^[a-zA-Z0-9 ']+$/,
					message: 'Ce champ ne peut contenir que des lettres, espaces, apostrophes et des chiffres'
				}
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
          montant: {
			validators: {
				notEmpty: {
					message: 'Remplissez le champ Montant'
				},
			numeric: {
					message: 'Ce champ ne peut contenir que des chiffres'
				}
			}
		}


        

	}
});
});
	</script>

    </body>

</html>