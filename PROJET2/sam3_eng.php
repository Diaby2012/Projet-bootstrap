<?php
session_start();
if(!isset($_SESSION['connexion'])){ header("location:indexe.php");} 
//$_SESSION['num_proj']=$_POST['num_proj'];

if(isset($_POST['enregistrer'])){
    try
    {
        $db = new PDO('mysql:host=localhost;dbname=memoire2', 'root', '');
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
	
	$reqe = $db->prepare('SELECT * FROM engagement where num_proj= :num_proj and nfich_eng = :nfich_eng');
    $reqe->execute(array('num_proj' => $_POST['num_proj'],'nfich_eng' => $_POST['nfich_eng']));
	$donnees = $reqe->fetch();
    
     if($donnees['nfich_eng']==""){
    try
    {
        $db = new PDO('mysql:host=localhost;dbname=memoire2', 'root', '');
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }

    $q = $db->prepare('INSERT INTO engagement SET num_proj =:num_proj, objet_eng = :objet_eng, nfich_eng = :nfich_eng, structure_eng = :structure_eng, etude = :etude,batiment = :batiment,travaux_public = :travaux_public,materiel_equipement_production = :materiel_equipement_production,materiel_transport = :materiel_transport,formation = :formation,prestation_service_externe = :prestation_service_externe,autre = :autre,publication = :publication,controle_suivi = :controle_suivi,montant_non_ventille = :montant_non_ventille,total = :total');

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
                      'total' => $_POST['total']));
                      $message="azerty";
    //$_SESSION['num_proj']=$_POST['num_proj'];
          } else{ $erreur="erreur"; }
} 
?>
<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no">
        <title>SAM - ENGAGEMENT</title>
        <?php include('plugins.php') ?>
    </head>

    <body id="engagement">
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
                    <li role="presentation"><a href="samaffich_eng.php?" ><span class="li_men">Afficher</span> <i class="fa fa-pencil-square-o"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="panel panel-primary" id="panel_pad">
                    <div class="panel-heading">
                        <h1 class="panel-title">Formulaire d'ajout de l'engagement:</h1>
                    </div>
                    <div class="panel-body">
                        <?php if(isset($message)){ ?>
						<div class="alert alert-success alert-dismissible monalert" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				   <strong>Yeah !</strong> Votre Fiche d'engagement a été créer avec succes ! <i class="fa fa-info-circle"></i>
					</div>
					<?php }?>
                        <?php if(isset($erreur)){ ?>
						<div class="alert alert-danger alert-dismissible monalert" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				   <strong>Ooooouh !</strong> la Fiche d'engagement que vous voulez créer existe déja ! <i class="fa fa-info-circle"></i>
					</div>
                        <?php }?>
                       <p class="policp text-justify"></p>
                        <div class="col-xs-6 col-xs-offset-3 form-enga">
                            <form id="engaf" method="POST" action="sam3_eng.php">
                                <h3 class="bord">Info engagement</h3>
                                <hr>
                                    <div class="form-group">
                                        <label for="num_proj">Num du projet</label> :
                                        <input class="form-control" readonly type="text" name="num_proj" id="num_proj" value="<?php echo $_SESSION['num_proj']?>" required="yes" />
                                    </div>

                                    <div class="form-group">
                                        <label for="objet_eng">Objet eng</label> :
                                        <input class="form-control" type="text" name="objet_eng" id="objet_eng"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="nfich_eng">Num fiche eng</label> :
                                        <input class="form-control" type="text" name="nfich_eng" id="nfich_eng" />
                                    </div>

                                    <div class="form-group">
                                        <label for="structure_eng">Structure d'engagement proposé</label> :
                                        <input class="form-control" type="text" name="structure_eng" id="structure_eng"  required="yes" />
                                    </div>

                                <h3 class="bord">Rubriques</h3>
                                <hr>


                                    <div class="form-group">
                                        <label for="etude">Etude</label> :
                                        <input class="form-control" type="double" name="etude" id="etude" onChange="calculeTotal()" />
                                    </div>

                                    <div class="form-group">
                                        <label for="batiment">Batiment</label> :
                                        <input class="form-control" type="double" name="batiment" id="batiment" onChange="calculeTotal()" />
                                    </div>

                                    <div class="form-group">
                                        <label for="travauxpublic">Travaux public</label> :
                                        <input class="form-control" type="double" name="travaux_public" id="travauxpublic" onChange="calculeTotal()" />
                                    </div>

                                    <div class="form-group">
                                        <label for="mep">Machine et equipement de production</label> :
                                        <input class="form-control" type="double" name="materiel_equipement_production" id="mep" onChange="calculeTotal()" />
                                    </div>


                                    <div class="form-group">
                                        <label for="mtransport">Matériel de transport</label> :
                                        <input class="form-control" type="double" name="materiel_transport" id="mtransport" onChange="calculeTotal()" />
                                    </div>
                                    <div class="form-group">
                                        <label for="formation">Formation</label> :
                                        <input class="form-control" type="double" name="formation" id="formation" onChange="calculeTotal()" />
                                    </div>

                                    <div class="form-group">
                                        <label for="pse">Prestation des services externes</label> :
                                        <input class="form-control" type="double" name="prestation_service_externe" id="pse" onChange="calculeTotal()" />
                                    </div>
                                    <div class="form-group">
                                        <label for="autres">Autres</label> :
                                        <input class="form-control" type="double" name="autre" id="autres" onChange="calculeTotal()" />
                                    </div>

                                    <div class="form-group">
                                        <label for="publication">Publication</label> :
                                        <input class="form-control" type="double" name="publication" id="publication" onChange="calculeTotal()" />
                                    </div>

                                    <div class="form-group">
                                        <label for="cs">Controle et suivi</label> :
                                        <input class="form-control" type="double" name="controle_suivi" id="cs" onChange="calculeTotal()" />
                                    </div>

                                    <div class="form-group">
                                        <label for="mnv">Montant non ventillé</label> :
                                        <input class="form-control" type="double" name="montant_non_ventille" id="mnv" onChange="calculeTotal()" />
                                    </div>

                                    <div class="form-group">
                                        <label for="total">Total </label> :
                                        <input class="form-control" type="double" name="total" id="total" />
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
        </div>
    <script>
        function calculeTotal() {
            var a = document.getElementById("etude").value;
            var b = document.getElementById("batiment").value;
            var c = document.getElementById("travauxpublic").value;
            var d = document.getElementById("mep").value;
            var e = document.getElementById("mtransport").value;
            var f = document.getElementById("formation").value;
            var g = document.getElementById("pse").value;
            var h = document.getElementById("autres").value;
            var i = document.getElementById("publication").value;
            var j = document.getElementById("cs").value;
            var k = document.getElementById("mnv").value;

            if (a == "") {
                a = 0;
            }
            if (b == "") {
                b = 0;
            }
            if (c == "") {
                c = 0;
            }
            if (d == "") {
                d = 0;
            }
            if (e == "") {
                e = 0;
            }
            if (f == "") {
                f = 0;
            }
            if (g == "") {
                g = 0;
            }
            if (h == "") {
                h = 0;
            }
            if (i == "") {
                i = 0;
            }
            if (j == "") {
                j = 0;
            }
            if (k == "") {
                k = 0;
            }


            document.getElementById("total").value = parseFloat(a) + parseFloat(b) + parseFloat(c) + parseFloat(d) + parseFloat(e) + parseFloat(f) + parseFloat(g) + parseFloat(h) + parseFloat(i) + parseFloat(j) + parseFloat(k); // On fait le calcul dans le champs

        }
    </script>
     <script type="text/javascript">
		$(document).ready(function() {
$('#engaf').bootstrapValidator({
	message: 'This value is not valid',
	feedbackIcons: {
		valid: 'glyphicon glyphicon-ok',
		invalid: 'glyphicon glyphicon-remove',
		validating: 'glyphicon glyphicon-refresh'
	},
	fields: {
		num_proj: {
			autoFocus: 'false',
			validators: {
				notEmpty: {
					message: 'Remplissez le champ Numéro du Projet '
				},
			regexp: {
					regexp: /^[a-zA-Z0-9]+$/,
					message: 'Ce champ ne peut contenir que des lettres et des chiffres'
				}
			}
		},
		objet_eng: {
			validators: {
				notEmpty: {
					message: 'Remplissez le champ Objet d\'engagement '
				},
			regexp: {
					regexp: /^[a-zA-Z0-9 ]+$/,
					message: 'Ce champ ne peut contenir que des lettres et des chiffres'
				}
			}
		},
	   nfich_eng: {
			validators: {
				notEmpty: {
					message: 'Remplissez le champ Numéro de la Fiche d\'Engagement '
				},
			regexp: {
					regexp: /^[a-zA-Z0-9]+$/,
					message: 'Ce champ ne peut contenir que des lettres et des chiffres'
				}
			}
		},
		structure_eng: {
			validators: {
				notEmpty: {
					message: 'Remplissez le champ Structure d\'Engagement '
				},
			numeric: {
					
					message: 'Ce champ ne peut contenir que des chiffres '
				}
			}
		},
		etude: {
			validators: {
			numeric: {
					message: 'Ce champ ne peut contenir que des chiffres'
				}
			}
		},
        batiment: {
			validators: {
			numeric: {
					message: 'Ce champ ne peut contenir que des chiffres'
				}
			}
		},
        travaux_public: {
			validators: {
			numeric: {
					message: 'Ce champ ne peut contenir que des chiffres'
				}
			}
		},
        materiel_equipement_production: {
			validators: {
			numeric: {
					message: 'Ce champ ne peut contenir que des chiffres'
				}
			}
		},
        materiel_transport: {
			validators: {
			numeric: {
					message: 'Ce champ ne peut contenir que des chiffres'
				}
			}
		},
        formation: {
			validators: {
			numeric: {
					message: 'Ce champ ne peut contenir que des chiffres'
				}
			}
		},
        prestation_service_externe: {
			validators: {
			numeric: {
					message: 'Ce champ ne peut contenir que des chiffres'
				}
			}
		},
        autre: {
			validators: {
			numeric: {
					message: 'Ce champ ne peut contenir que des chiffres'
				}
			}
		},
        publication: {
			validators: {
			numeric: {
					message: 'Ce champ ne peut contenir que des chiffres'
				}
			}
		},
        controle_suivi: {
			validators: {
			numeric: {
					message: 'Ce champ ne peut contenir que des chiffres'
				}
			}
		},
        montant_non_ventille: {
			validators: {
			numeric: {
					message: 'Ce champ ne peut contenir que des chiffres'
				}
			}
		},
        total: {
			validators: {
			numeric: {
					message: 'Ce champ ne peut contenir que des chiffres'
				}
			}
		},
        

	}
});
});
	</script>
    </body>

</html>