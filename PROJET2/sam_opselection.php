<?php
session_start();
if(!isset($_SESSION['connexion'])){ header("location:indexe.php");} 
if(isset($_POST['num_op'])){
    try
    {
        $db = new PDO('mysql:host=localhost;dbname=memoire2', 'root', '');
    }
    catch(Exception $e)
    {
        // En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
    }
    $reqe = $db->prepare('SELECT * FROM operation where num_op= :num_op');
    $reqe->execute(array('num_op' => $_POST['num_op']));
}
if(isset($_POST['supprimer'])){
    try
    {
        $db = new PDO('mysql:host=localhost;dbname=memoire2', 'root', '');
    }
    catch(Exception $e)
    {
        // En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
    }
    $req = $db->prepare('DELETE FROM operation where num_op=?');
    $req->execute(array($_POST['num_op']));
    header("location:sam_afficher.php");
}

try
{
    $db = new PDO('mysql:host=localhost;dbname=memoire2', 'root', '');
}
catch(Exception $e)
{

    die('Erreur : '.$e->getMessage());
}

$req = $db->prepare('SELECT * FROM operation where num_op=?');
$req->execute(array($_POST['num_op']));
$donnee = $req->fetch();
$_SESSION['id']=$donnee['id'];

?>
<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no">
        <title>SAM - OPERATION</title>
        <?php include('plugins.php') ?>
    </head>

    <body id="operation">
        <!------------------------------------------------------   HEADER ----------------------------------------------------->
        
        <?php include('header.php')?>
        <!------------------------------------------------------   Menu 2 ----------------------------------------------------->
        <div class="container">
            <div class="row">

                <ul class="nav nav-pills nav-justified">
                    <li role="presentation">
                        <a href="sam_operation.php"> <span class="li_men">Ajouter</span> <i class="fa fa-plus-circle"></i>
                        </a>
                    </li>
                    <li role="presentation" class="active"><a href="sam_afficher.php"><span class="li_men">Afficher</span> <i class="fa fa-pencil-square-o"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="panel panel-primary" id="panel_pad">
                    <div class="panel-heading">
                        <h1 class="panel-title">OPERATION:</h1>
                    </div>
                    <div class="panel-body">
                        <p class="policp text-justify"></p>
                        <div class="col-xs-12 padnul table-responsive toggle-circle-filled" >
                            <table class="footable table table-bordered">
                                <thead>
                                    <tr class="text-center">
                                        <th data-toggle="true"><span  class="hidden-xs hidden-sm">NUM_OP</span><span  class="visible-xs visible-sm">PLUS</span></td>
                                        <th data-hide="phone">LIBELLE_OP</td>
                                        <th data-hide="phone">AUTORISATION DE PROGRAMME</td>
                                        <th>MODIFIER</td>
                                        <th>SUPPRIMER</td>
                                    </tr>
                                </thead>

                                <tbody>
                                       <?php if(isset($reqe) ){
                                        while ($donnees = $reqe->fetch()){
                                            echo"<form method=post action=sam_afficher.php>";
                                            echo"<tr class=text-center>";
                                            echo"<td>"."<input class='form-control hidden-xs hidden-sm' readonly type=text name=num_op value=".$donnees['num_op'] ." >";echo"</td>";
                                            echo"<td>"."<input class=form-control readonly type=text name=libelle_op value=".$donnees['libelle_op'] ." >";echo"</td>";
                                            echo"<td>"."<input class=form-control data-hide='phone,tablet' readonly type=text name=auto_prog value=".$donnees['auto_prog'] ." >";echo"</td>";
                                            echo"<td>"."<a class='btn btn-success' name=modifier data-toggle='modal' data-target='#detailModal' href=sam_opdelection.php><span class='fa fa-pencil-square-o fa-fw'></span> MODIFIER</button></a>"; echo"</td>";
                                    
                                            echo"<td>"."<button class='btn btn-success'  type=submit name=supprimer><span class='fa fa-trash-o fa-fw'></span> SUPPRIMER</button>"; echo"</td>";
                                            echo"</tr>";
                                            echo "</form>";
                                            $_SESSION['id']=$donnees['id'];
                                        }}?>
                                </tbody>
                            </table>

                            <?php if(isset($_POST['num_op'])){
    try
    {
        $db = new PDO('mysql:host=localhost;dbname=memoire2', 'root', '');
    }
    catch(Exception $e)
    {
        // En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
    }
    $req = $db->prepare('SELECT * FROM operation where num_op= :num_op');
    $req->execute(array('num_op' => $_POST['num_op']));
    $donnees = $req->fetch(); ?>
                            <table class="table table-striped">

                                <tr>
                                    <td>NUM_OP</td>
                                    <td><?php echo $donnees['num_op'];?></td>
                                </tr>

                                <tr>
                                    <td>LIBELLE_OP</td>
                                    <td><?php echo $donnees['libelle_op'];?></td>
                                </tr>

                                <tr>
                                    <td>AUTORISATION DE PROGRAMME</td>
                                    <td><?php echo $donnees['auto_prog'];?></td>
                                </tr>

                                <tr>
                                    <td>DATE INSCRIPTION</td>
                                    <td><?php echo $donnees['date_insc'];?></td>
                                </tr>

                                <tr>
                                    <td>DATE DE DEMARRAGE</td>
                                    <td><?php echo $donnees['date_dem'];?></td>
                                </tr>

                                <tr>
                                    <td>DATE D'ACHEVEMENT</td>
                                    <td><?php echo $donnees['date_ach'];?></td>
                                </tr>

                                <tr>
                                    <td>ETUDE</td>
                                    <td><?php echo $donnees['etude'];?></td>
                                </tr>

                                <tr>
                                    <td>BATIMENT</td>
                                    <td><?php echo $donnees['batiment'];?></td>
                                </tr>

                                <tr>
                                    <td>TRAVAUX_PUBLIC</td>
                                    <td><?php echo $donnees['travaux_public'];?></td>
                                </tr>

                                <tr>
                                    <td>MATERIEL_PROD</td>
                                    <td><?php echo $donnees['materiel_equipement_production'];?></td>
                                </tr>

                                <tr>
                                    <td>MATERIEL_TRANSPORT</td>
                                    <td><?php echo $donnees['materiel_transport'];?></td>
                                </tr>

                                <tr>
                                    <td>FORMATION</td>
                                    <td><?php echo $donnees['formation'];?></td>
                                </tr>

                                <tr>
                                    <td>PRESTATION_SERV</td>
                                    <td><?php echo $donnees['prestation_service_externe'];?></td>
                                </tr>

                                <tr>
                                    <td>AUTRE</td>
                                    <td><?php echo $donnees['autre'];?></td>
                                </tr>

                                <tr>
                                    <td>PUBLICATION</td>
                                    <td><?php echo $donnees['publication'];?></td>
                                </tr>

                                <tr>
                                    <td>CONTROLE_SUIVI</td>
                                    <td><?php echo $donnees['controle_suivi'];?></td>
                                </tr>

                                <tr>
                                    <td>MONTANT_NON_VENTILLE</td>
                                    <td><?php echo $donnees['montant_non_ventille'];?></td>
                                </tr>

                                <tr class="info">
                                    <td>TOTAL</td>
                                    <td><?php echo $donnees['total'];?></td>
                                </tr>
                            </table>
                            <?php } ?>       
                        </div>
                    </div>
                </div>
            </div>
        </div>
       <div class="container">
                <div class="row">
                <div class="modal fade " id="detailModal" role="dialog" aria-labelledby="detailModal1" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <h2 class="modal-title">Opération - Modifier</h2>
                            </div>
                
                            <div class="modal-body">
                
                                <?php 
                
                echo"<form method=post action=modif2_operation.php>";
                echo"<p>";
                echo"<label for=id>ID</label> :"; 
                echo"<input class=form-control readonly type=text name=id id=id required=yes value=".$donnee['id']." />";
                echo"</p>";
                
                echo"<p>";
                echo"<label for=noperation>N°de lopération</label> :"; 
                echo"<input class=form-control type=text name=num_op id=noperation required=yes value=".$donnee['num_op']." />";
                echo"</p>";
                
                echo"<p>";
                echo"<label for=loperation>Libellé de lopération</label> :"; 
                echo"<input class=form-control type=text name=libelle_op id=loperation required=yes value=".$donnee['libelle_op']." />";
                echo"</p>";
                
                echo"<p>";
                echo"<label for=autorisation_programme>Montant Autorisation de Programme</label> :"; 
                echo"<input class=form-control type=double name=auto_prog id=autorisation_programme required=yes value=".$donnee['auto_prog']." />";
                echo"</p>";
                
                echo"<p>";
                echo"<label for=date_inscription>Date d'Inscription</label> :"; 
                echo"<input class=form-control type=text name=date_insc id=date_inscription required=yes value=".$donnee['date_insc']." />";
                echo"</p>";
                
                echo"<p>";
                echo"<label for=date_demarrage>Date de demarrage</label> :"; 
                echo"<input class=form-control type=text name=date_dem id=date_demarrage required=yes value=".$donnee['date_dem']." />";
                echo"</p>";
                
                echo"<p>";
                echo"<label for=date_achevement>Date d'Achèvement</label> :"; 
                echo"<input class=form-control type=text name=date_ach id=date_achevement required=yes value=".$donnee['date_dem']." />";
                echo"</p>";
                
                echo"<fieldset>";
                echo"<legend></legend>";
                
                echo"<p>";
                echo"<label for=etude>Etude</label> :"; 
                echo"<input class=form-control type=double name=etude id=etude onChange=calculeTotal() value=".$donnee['etude']." />";
                echo"</p>";
                
                echo"<p>";
                echo"<label for=batiment>Batiment</label> :"; 
                echo"<input class=form-control type=double name=batiment id=batiment onChange=calculeTotal() value=".$donnee['batiment']." />";
                echo"</p>";
                
                echo"<p>";
                echo"<label for=travauxpublic>Travaux public</label> :"; 
                echo"<input class=form-control type=double name=travaux_public id=travauxpublic onChange=calculeTotal() value=".$donnee['travaux_public']." />";
                echo"</p>";
                
                echo"<p>";
                echo"<label for=mep>Machine et equipement de production</label> :"; 
                echo"<input class=form-control type=double name=materiel_equipement_production id=mep onChange=calculeTotal() value=".$donnee['materiel_equipement_production']." />";
                echo"</p>";
                
                echo"<p>";
                echo"<label for=mtransport>Matériel de transport</label> :"; 
                echo"<input class=form-control type=double name=materiel_transport id=mtransport onChange=calculeTotal() value=".$donnee['materiel_transport']." />";
                echo"</p>";
                
                echo"<p>";
                echo"<label for=formation>Formation</label> :"; 
                echo"<input class=form-control type=double name=formation id=formation onChange=calculeTotal() value=".$donnee['formation']." />";
                echo"</p>";
                
                echo"<p>";
                echo"<label for=pse>Prestation des services externes</label> :"; 
                echo"<input class=form-control type=double name=prestation_service_externe id=pse onChange=calculeTotal() value=".$donnee['prestation_service_externe']." />";
                echo"</p>";
                
                
                echo"<p>";
                echo"<label for=autres>Autres</label> :"; 
                echo"<input class=form-control type=double name=autre id=autres onChange=calculeTotal() value=".$donnee['autre']." />";
                echo"</p>";
                
                echo"<p>";
                echo"<label for=publication>Publication</label> :"; 
                echo"<input class=form-control type=double name=publication id=publication onChange=calculeTotal() value=".$donnee['publication']." />";
                echo"</p>";
                
                echo"<p>";
                echo"<label for=cs>Controle et suivi</label> :"; 
                echo"<input class=form-control type=double name=controle_suivi id=cs onChange=calculeTotal() value=".$donnee['controle_suivi']." />";
                echo"</p>";
                
                echo"<p>";
                echo"<label for=mnv>Montant non ventillé</label> :"; 
                echo"<input class=form-control type=double name=montant_non_ventille id=mnv onChange=calculeTotal() value=".$donnee['montant_non_ventille']." />";
                echo"</p>";
                
                echo"<p class='has-success'>";
                echo"<label for=total>Total </label> :";
                echo"<input class=form-control type=double name=total id=total required=yes value=".$donnee['total']." />";
                echo"</p>";
                                ?>				   
                
                
                
                            </div>
                
                            <div class="modal-footer">
                                <?php 
                echo"<button class='btn btn-success'  type=submit name=enregistrer><i class='fa fa-floppy-o'></i> ENREGISTRER
                </button>";
                echo"</form>";
                                ?>
                                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i>
                                    FERMER</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        <script src="js/script.js"></script>
        <script>
            function calculeTotal()
            {
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

                if( a== ""){ a= 0;}
                if( b== ""){ b= 0;}
                if( c== ""){ c= 0;}
                if( d== ""){ d= 0;}
                if( e== ""){ e= 0;}
                if( f== ""){ f= 0;}
                if( g== ""){ g= 0;}
                if( h== ""){ h= 0;}
                if( i== ""){ i= 0;}
                if( j== ""){ j= 0;}
                if( k== ""){ k= 0;}


                document.getElementById("total").value = parseFloat(a)+parseFloat(b)+parseFloat(c)+parseFloat(d)+parseFloat(e)+parseFloat(f)+parseFloat(g)+parseFloat(h)+parseFloat(i)+parseFloat(j)+parseFloat(k); // On fait le calcul dans le champs

            }
        </script>

    </body>

</html>