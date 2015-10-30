<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no">
        <title>SAM - OPERATION</title>
 <link rel="stylesheet" href="bootstrap-3.3.2-dist/css/bootstrap.css"/>
    <link rel="stylesheet" href="styles/bootstrapValidator.css"/>

    <!-- Include the FontAwesome CSS if you want to use feedback icons provided by FontAwesome -->
    <!--<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" />-->

    <script type="text/javascript" src="js/jquery-2.1.3.min.js"></script>
    <script type="text/javascript" src="bootstrap-3.3.2-dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/bootstrapValidator.js"></script>

    </head>

    <body>


        <div class="container">
            <div class="row">
                <div class="panel panel-primary" id="panel_pad">
                    <div class="panel-heading">
                        <h1 class="panel-title">Formulaire d'ajout de l'opération:</h1>
                    </div>
                    <div class="panel-body">
                        <div class="col-xs-6 col-xs-offset-3 form-enga">
                            <form id="operationf" method="POST" action="#" class="form-horizontal">
                                <h3 class="bord">Info Opération</h3>
                                <hr>
                                <div class="left-col">
                                    <div class="form-group">
                                        <label for="noperation">N°de l'opération</label> :
                                        <input class="form-control" type="text"  name="num_op" id="noperation"  />
                                    </div>

                                    <div class="form-group ">
                                        <label for="loperation">Libellé de l'opération</label> :
                                        <input class="form-control" type="text" name="libelle_op" id="loperation"  />
                                    </div>

                                    <div class="form-group ">
                                        <label for="autorisation_programme">Montant Autorisation de Programme</label> :
                                        <input class="form-control" type="double" name="auto_prog" id="autorisation_programme"  />
                                    </div>

                                    <div class="form-group ">
                                        <label for="date_inscription">Date d'Inscription</label> :
                                        <input class="form-control" type="text" name="date_insc" id="date_inscription" placeholder="JJ/MM/AAAA"  />
                                    </div>

                                    <div class="form-group  ">
                                        <label for="date_demarrage">Date de demarrage</label> :
                                        <input class="form-control" type="text" name="date_dem" id="date_demarrage" placeholder="JJ/MM/AAAA"  />
                                    </div>

                                    <div class="form-group ">
                                        <label for="date_achevement">Date d'Achèvement</label> :
                                        <input class="form-control" type="text" name="date_ach" id="date_achevement" placeholder="JJ/MM/AAAA"  />
                                    </div>
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

    $('#operationf').bootstrapValidator({

        fields: {
            num_op: {
                validators: {
                    notEmpty: {
                        message: 'The first name is required and cannot be empty'
                    }
                }
            },

        }
    });

});

        </script>
    </body>

</html>