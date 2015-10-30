<?php
     session_start();
					if(isset($_POST['connexion'])){
						try{ $bdd = new PDO('mysql:host=localhost;dbname=memoire2', 'root', ''); }
						catch (Exception $e){ die('Erreur : ' . $e->getMessage());}
                        $req=$bdd->prepare('SELECT * FROM connexion WHERE mot_de_passe = :mot_de_passe and identifiant= :identifiant');
                        $req->execute(array('mot_de_passe'=>$_POST['mot_de_passe'],'identifiant'=>$_POST['login']));
						$resultat = $req->fetch();
						 
							if ($resultat["categorie"]=="agent"){ 
							    $_SESSION['connexion']="vfdssv";
							    header("location:sam.php");}
                        
							else {if ($resultat["categorie"]=="cf"){ 
								      $_SESSION['connexion']="vfdssv";
								      header("location:cf_page.php");}
                                  
								  else {if ($resultat["categorie"]=="entreprise"){ 
									        $_SESSION['connexion']=$resultat["identifiant"];
									        header("location:entreprise.php");}
                                        
									    else {if ($resultat["categorie"]=="directeur"){ 
										          $_SESSION['connexion']="vfdssv";
										          header("location:directeur_page.php"); }
                                              
										      else{ $message="le mot de passe ou lidentifiant ne sont pas valide";
											        header("location:#connexion_ancre");
													}}}}
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
<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no">
        <title>Direction des Ressources en Eau</title>
        <!-- Bootstrap -->
        <link href="bootstrap-3.3.2-dist/css/bootstrap.min.css" rel="stylesheet">
        
        <!-- Others Plugins -->
        <link href="styles/half-slider.css" rel="stylesheet">
        <link href="styles/scrolling-nav.css" rel="stylesheet">
        <link href="styles/animate.css" rel="stylesheet">
        <link href="styles/hover.css" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
        
        <!-- Bootflat -->
        <link rel="stylesheet" href="styles/bootflat.css">
        
        <!-- Custom CSS -->
        <link rel="stylesheet" href="styles/style.css">
        
        <!-- FormValidation CSS file -->
        <link rel="stylesheet" href="styles/formValidation.css">
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery-2.1.3.min.js"></script>
        
        <!-- Bootstrap JS -->
        <script src="bootstrap-3.3.2-dist/js/bootstrap.min.js"></script>
        
        
        <!-- FormValidation plugin and the class supports validating Bootstrap form -->
        <script src="js/formValidation.js"></script>
        <script src="js/framework/bootstrap.min.js"></script>
        <script src="js/language/fr_FR.js"></script>
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
    </head>

    <body id="acceuil_ancre" data-target=".navbar-fixed-top" data-spy="scroll">

        <!------------------------------------------------------   Menu de Navigation ----------------------------------------------------->
        <nav class="navbar navbar-default navbar-fixed-top nav-index" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">DRE</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-collapse">
                    <ul class="nav navbar-nav navbar-right text-center">
                        <li class="">
                            <a href="#acceuil_ancre" class="page-scroll">
                                <span class="glyphicon glyphicon-home" aria-hidden="true"></span> Accueil
                            </a>
                        </li>
                        <li class="">
                            <a  href="#historique_ancre" class="page-scroll">
                                <span class="glyphicon glyphicon-time" aria-hidden="true"></span> Historique
                            </a>
                        </li>
                        <li class="">
                            <a href="#connexion_ancre" class="page-scroll">
                                <span class="glyphicon glyphicon-user" aria-hidden="true"></span> Connexion
                            </a>
                        </li>
                        <li class="">
                            <a href="#contact_ancre" class="contact page-scroll">
                                <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> Contact
                            </a>
                        </li>
                        <li class="">
                            <a href="#footer" class="page-scroll">
                                <span class="glyphicon glyphicon-education" aria-hidden="true"></span> A propos
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
        <!------------------------------------------------------   /Menu de Navigation ----------------------------------------------------->

        <!------------------------------------------------------   Carousel ----------------------------------------------------->
        <section class="intro" id="carousel">
            <div class="intro_msg col-lg-12 animated fadeInUp">
                <h1 class="welcome_msg">Gestion des Marchés de la Direction des Ressources en Eau de Mostaganem</h1>
                <a class="btn btn-success hvr-buzz page-scroll animated flipInX" href="#connexion_ancre">CONNEXION</a>
            </div>

            <div id="myCarousel" class="carousel slide" data-ride="carousel">

                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="item active">
                        <div class="fill" style="background-image:url('img/slid2.jpg');"></div>
                    </div>
                    <div class="item">
                        <div class="fill" style="background-image:url('img/slid4.jpg');"></div>
                    </div>
                    <div class="item">
                        <div class="fill" style="background-image:url('img/slid5.jpg');"></div>
                    </div>
                </div>
                <!-- nav -->
                <a class="carousel-control left" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control right" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <div class="etc"></div>
        </section>

        <!------------------------------------------------------   /Carousel ----------------------------------------------------->

        <!------------------------------------------------------   Historique ----------------------------------------------------->
        <section class="histo" id="historique_ancre">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="media">
                            <div class="media-left hidden-xs">
                                <a href="#">
                                    <img class="media-object thumbnail" src="img/dre1.jpg" alt="...">
                                </a>
                            </div>
                            <div class="media-body">
                                <h2 class="histo_titre media-heading">HISTORIQUE</h2>
                        <div class="histop">
                            <p >La Direction des Ressources en Eau (DRE) a été créé en 1959 sous le nom de la Direction de l’Hydraulique, elle englobait les wilayas Mostaganem, Mascar, Chlef et Tiaret. Son rôle est de superviser tous les travaux dans l’exploitation agricole ainsi que l’utilisation des eaux, des barrages et réservoirs.</p>

                            <p>L’arrêt interministériel du 02 Juin 1991 a déterminé l’organisation interne de la Direction de l’Hydraulique de la Wilaya de Mostaganem. Elle est située à la cité Zaghloul (ex cité bourris) Mostaganem. Les services de la DRE sont dirigés par un Directeur nommé par le Ministre des Ressources en Eau, il oriente et coordonne les travaux de ces services, il rend compte de son travail et de ces décisions au Ministre.</p>
                            </div>
                        </div>
                    </div>
                    <div class="media hidden-xs">
                            <div class="media-left hidden-xs">
                                <a href="#">
                                    <img class="media-object thumbnail" src="img/dre2.jpg" alt="...">
                                </a>
                            </div>
                            <div class="media-body">
                                <h2 class="histo_titre media-heading">SERVICES</h2>
                        <div class="histop">
                            <p>
                                Les services de la DRE sont dirigés par un Directeur nommé par le Ministre des Ressources en Eau, il oriente et coordonne les travaux de ces services, il rend compte de son travail et de ces décisions au Ministre.
                            </p>
                        </div>
                    </div>
                </div>
                </section>

            <!------------------------------------------------------   /Historique ----------------------------------------------------->

            <!------------------------------------------------------   Connexion ----------------------------------------------------->

            <section class="sec_deux_connexion" id="connexion_ancre">

                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                            <h3 class="text-right text_connexion">CONNEXION</h3>
                            <form id="connexionf" class="connexion" action="indexe.php" method="post">
                                <div class="form-group">
                                    <div class="input-group ">
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
                                        <input type="text" class="form-control" name="login" id="login" placeholder="Taper votre login">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group ">
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></span>
                                        <input type="password" class="form-control" name="mot_de_passe" id="password" placeholder="Taper votre mot de passe">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <span class="fa-stack fa-4x">
                                        <i class="fa fa-circle fa-5x fa-stack-2x"></i>
                                        <i class="fa fa fa-user fa-stack-1x text-primary"></i>
                                    </span>
                                </div>

                                <div class="form-group">
                                    <button type="submit" name="connexion" class=" btn btn-lg btn-info col-xs-6 col-xs-offset-3">CONNEXION

                                    </button>
                                </div>
                            </form>
                                <div id="con_va" class="alert alert-warning alert-dismissible alertconn hidden" role="alert" >
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <strong>Oups!</strong>  Votre login est incorrect
                                </div>
                        </div>
                    </div>
                </div>
            </section>

            <!------------------------------------------------------ /Connexion ----------------------------------------------------->

            <!------------------------------------------------------ Contact ------------------------------------------------------>

            <section class="sec_trois" id="contact_ancre">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h3 class="text-left text_contact">CONTACT</h3>
                            <form id="cont-mes" class="contact_form" action="indexe.php" method="post">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="input-group ">
                                            <span class="input-group-addon"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
                                            <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="input-group ">
                                            <span class="input-group-addon"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></span>
                                            <input type="text" class="form-control" name="sujet" id="sujet" placeholder="Sujet">
                                        </div>
                                    </div>

                                   <div class="form-group">
                                         <div class="input-group ">
                                            <span class="input-group-addon"><span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span></span>
                                            <input type="tel" class="form-control" name="phone" id="phone" placeholder="Téléphone">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="input-group ">
                                            <span class="input-group-addon"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></span>
                                            <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group col-lg-6">
                                    <div class="input-group ">
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-comment" aria-hidden="true"></span></span>
                                        <textarea class="form-control message" name="message" id="message" placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" name="envoyer" class=" btn_connexion btn  btn-primary pull-right col-lg-12">ENVOYER  <i class="fa fa-share-square"></i>
                                    </button>

                                </div>
                            </form>
                                <div id="xx" class="alert alert-success alert-dismissible hidden" role="alert" >
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <strong>Yeah !</strong>  Votre message a été bien envoyé !
                                </div>
                        </div>
                    </div>
                </div>
            </section>
            <!------------------------------------------------------ /Contact ---------------------------------------------------->

            <!------------------------------------------------------ Footer ------------------------------------------------------>
            <!------------------------------------------------------        ------------------------------------------------------>
            <!------------------------------------------------------        ------------------------------------------------------>
            <!------------------------------------------------------        ------------------------------------------------------>
            <!------------------------------------------------------        ------------------------------------------------------>
            <!------------------------------------------------------        ------------------------------------------------------>

            <section class="sec-quatre" id="footer">
                <div class="container">
                    <div class="row text-center reseau_s">
                        <div class="col-xs-12 col-sm-12">
                            <a href="#"><img src="img/twitter.png" alt="Twitter">
                            </a>
                            <a href="#"><img src="img/fb.png" alt="Facebook">
                            </a>
                            <a href="#"><img src="img/rss.png" alt="Rss">
                            </a>
                            <a href="#"><img src="img/google.png" alt="Google+">
                            </a>
                        </div>
                    </div>
                </div>

                <footer class="sec_cinq">
                    <div class="container">
                        <div class="row nous text-center">
                            <div class="col-lg-12">
                                <h3>A propos des developpeurs</h3>
                                <hr class="small">
                                <div class="col-lg-6">

                                    <a href="#" class="hvr-wobble-vertical"><img alt="Diaby" src="img/diaby.jpg" class="img-circle">
                                    </a><br/>
                                    <p>
                                    </p>
                                    <a href="#" class="btn btn-light hvr-sweep-to-top">En Savoir Plus</a>

                                </div>

                                <div class="col-lg-6">
                                    <a href="https/www.facebook.com/diabysouleymane" target="_blank" class="hvr-wobble-vertical"><img alt="Fabrice" src="img/fab.jpg" class="img-circle">
                                    </a>
                                    <p>
                                    </p>
                                    <a href="https://www.facebook.com/dhouphouet" target="_blank" class="btn btn-light hvr-bounce-to-right ">En Savoir Plus</a>
                                </div>
                            </div>
                        </div>
                        <hr class="small hr_bottom">
                        <div class="row">
                            <div class="col-lg-12 text-center contact_element">
                                <ul class="list-unstyled">
                                    <li><span class="fa fa-phone fa-fw"></span>+213(0)555770330</li>
                                    <li><span class="fa fa-fax   fa-fw"></span>+213(0)45202081</li>
                                    <li><span class="fa fa-envelope fa-fw"></span>dre@dremosta.com</li>
                                    <li>Copyright <span class="fa fa-copyright fa-fw"></span> 2015. All Rights Reserved</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </footer>
            </section>

            <!------------------------------------------------------ /Footer ----------------------------------------------------->
            <!------------------------------------------------------        ------------------------------------------------------>
            <!------------------------------------------------------        ------------------------------------------------------>
            <!------------------------------------------------------        ------------------------------------------------------>
            <!------------------------------------------------------        ------------------------------------------------------>
            <!------------------------------------------------------        ------------------------------------------------------>
            <!------------------------------------------------------        ------------------------------------------------------>



            <!-- Include all compiled plugins (below), or include individual files as needed -->

            <script type="text/javascript" src="js/jquery.onepage-scroll.js"></script>
            <script>
                $('.carousel').carousel({
                    interval: 7000,
                    pause: 'paused'
                });
            </script>

            <!-- Custom Jquery Plugins -->
            <!-- Scrolling Nav JavaScript -->
            <script src="js/jquery.easing.min.js"></script>
            <script src="js/scrolling-nav.js"></script>
            <script>
                $(document).ready(function() {

                    var validator = $('#connexionf').formValidation({
                        // Indication du framework
                        framework: 'bootstrap',
                        message: 'This value is not valid',
                        
                        //Icone d'alerte
                        icon: {
                            valid: 'glyphicon glyphicon-ok',
                            invalid: 'glyphicon glyphicon-remove',
                            validating: 'glyphicon glyphicon-refresh'
                        },
                        
                        //Liste des champs et leurs regles de validation

                        fields: {
                            login: {
                                validators: {
                                    notEmpty: {
                                        message: 'Remplisser le Login SVP'
                                    },
                                    regexp: {
                                        regexp: /^[a-zA-Z0-9_\.]+$/,
                                        message: 'Ce champ ne peut contenir que des lettres et des chiffres'
                                    }
                                }
                            },
                            mot_de_passe: {
                                validators: {
                                    notEmpty: {
                                        message: 'Remplisser le champ Mot de Passe SVP' 
                                    }
                                }
                            }

                        }

                    });     /////////////////////////////////////////////////////////////////   Fin de formValidation
 
                });         /////////////////////////////////////////////////////////////////   Fin de la fonction
                    
            </script>       
        <script type="text/javascript">
	$(document).ready(function () {
		var validator = $("#cont-mes").bootstrapValidator({
			feedbackIcons: {
				valid: "glyphicon glyphicon-ok",
				invalid: "glyphicon glyphicon-remove", 
				validating: "glyphicon glyphicon-refresh"
			}, 
			fields : {
				nom :{
					message : "Email address is required",
					validators : {
						notEmpty : {
							message : "Please provide an email address"
						}, 
						stringLength: {
							min : 6, 
							max: 35,
							message: "Email address must be between 6 and 35 characters long"
						},
						emailAddress: {
							message: "Email address was invalid"
						}
					}
				}, 
				sujet : {
					validators: {
						notEmpty : {
							message : "Password is required"
						},
						stringLength : {
							min: 8,
							message: "Password must be 8 characters long"
						}, 
						different : {
							field : "email", 
							message: "Email address and password can not match"
						}
					}
				}, 
				confirmpassword : {
					validators: {
						notEmpty : {
							message: "Confirm password field is required"
						}, 
						identical : {
							field: "password", 
							message : "Password and confirmation must match"
						}
					}
				}, 
				membership : {
					validators : {
						greaterThan : {
							value: 1,
							message: "Membership is required"
						}
					}
				}
			}
		});
	
		validator.on("success.form.bv", function (e) {
			e.preventDefault();
			$("#xx").removeClass("hidden");
		});
		
	});
</script>
            </body>

        </html>