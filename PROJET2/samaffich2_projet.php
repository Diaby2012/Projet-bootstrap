<?php
session_start();
if(!isset($_SESSION['connexion'])){ header("location:indexe.php");} 
if(isset($_SESSION['num_proj'])){
    try
    {
        $db = new PDO('mysql:host=localhost;dbname=memoire2', 'root', '');
    }
    catch(Exception $e)
    {
        // En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
    }
    $reqe = $db->prepare('SELECT * FROM projet where num_proj= :num_proj');
    $reqe->execute(array('num_proj' => $_SESSION['num_proj']));
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
    $req = $db->prepare('DELETE FROM projet where num_proj=?');
    $req->execute(array($_SESSION['num_proj']));
    header("location:samaffich_projet.php?message=message");
}

try
{
    $db = new PDO('mysql:host=localhost;dbname=memoire2', 'root', '');
}
catch(Exception $e)
{

    die('Erreur : '.$e->getMessage());
}

$req = $db->prepare('SELECT * FROM projet where num_proj=?');
$req->execute(array($_SESSION['num_proj']));
$donnee = $req->fetch();
$_SESSION['id']=$donnee['id'];

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
                    <li role="presentation">
                        <a href="sam2_projet.php"> <span class="li_men">Ajouter</span> <i class="fa fa-plus-circle"></i>
                        </a>
                    </li>
                    <li role="presentation" class="active"><a href=""><span class="li_men">Afficher</span> <i class="fa fa-pencil-square-o"></i>
                        </a>
                    </li>
                </ul>
                <div class="panel panel-primary" id="panel_pad">
                    <div class="panel-heading">
                        <h1 class="panel-title">Projet:</h1>
                    </div>
                    <div class="panel-body">
                        <p class="policp text-justify"></div>
                        <div class="col-xs-12 padnul" >
                            <table class="table table-bordered">
                                <tr class="text-center">
                                    <td>NUM_PROJET</td>
                                    <td>LIBELLE_PROJET</td>
                                    <td>MONTANT PROJET</td>
                                    <td>MODIFIER</td>
                                    <td>SUPPRIMER</td>
                                </tr>

                                <?php if(isset($reqe) ){
    while ($donnees = $reqe->fetch()){
        echo"<form method=post action=samaffich2_projet.php>";
        echo"<tr class=text-center>";
        echo"<td>"."<input class=form-control readonly type=text name=num_proj value=".$donnees['num_proj'] ." >";echo"</td>";
        echo"<td>"."<input class=form-control readonly type=text name=libelle_proj value=".$donnees['libelle_proj'] ." >";echo"</td>";
        echo"<td>"."<input class=form-control readonly type=double name=mont_projet value=".$donnees['mont_projet'] ." >";echo"</td>";
        echo"<td>"."<a class='btn btn-success' name=modifier data-toggle='modal' data-target='#detailModal'><span class='fa fa-pencil-square-o fa-fw'></span> MODIFIER</button></a>"; echo"</td>";

        echo"<td>"."<button class='btn btn-success'  type=submit name=supprimer><span class='fa fa-trash-o fa-fw'></span> SUPPRIMER</button>"; echo"</td>";
        echo"</tr>";
        echo "</form>";
        $_SESSION['id']=$donnees['id'];
    }}?>
                            </table>

                            <?php if(isset($_SESSION['num_proj'])){
    try
    {
        $db = new PDO('mysql:host=localhost;dbname=memoire2', 'root', '');
    }
    catch(Exception $e)
    {
        // En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
    }
    $req = $db->prepare('SELECT * FROM projet where num_proj= :num_proj');
    $req->execute(array('num_proj' => $_SESSION['num_proj']));
    $donnees = $req->fetch(); ?>
                            <table class="table table-striped">

                                <tr>
                                    <td>NUM_OP</td>
                                    <td><?php echo $donnees['num_op'];?></td>
                                </tr>
                                
                                <tr>
                                    <td>ID ENTREPRISE</td>
                                    <td><?php echo $donnees['id_ent'];?></td>
                                </tr>

                                <tr>
                                    <td>NUM_PROJET</td>
                                    <td><?php echo $donnees['num_proj'];?></td>
                                </tr>

                                <tr>
                                    <td>LIBELLE PROJET</td>
                                    <td><?php echo $donnees['libelle_proj'];?></td>
                                </tr>

                                <tr>
                                    <td>RUBRIQUE1</td>
                                    <td><?php echo $donnees['rub1'];?></td>
                                </tr>

                                <tr>
                                    <td>RUBRIQUE2</td>
                                    <td><?php echo $donnees['rub2'];?></td>
                                </tr>

                                <tr>
                                    <td>MONTANT_PROJET</td>
                                    <td><?php echo $donnees['mont_projet'];?></td>
                                </tr>

                                <tr>
                                    <td>DATE D'APPROBATION</td>
                                    <td><?php echo $donnees['date_approb'];?></td>
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
                                    <td>DATE Du VERDICTE</td>
                                    <td><?php echo $donnees['date_cf'];?></td>
                                </tr>

                                <tr>
                                    <td>OBSERVATION</td>
                                    <td><?php echo $donnees['obs'];?></td>
                                </tr>

                                <?php } ?>        
                                </div>
                        </div>
                    </div>

                </div>
            <div class="modal fade" id="detailModal" role="dialog" aria-labelledby="detailModal1" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <h2 class="modal-title">Projet - Modifier</h2>
                        </div>

                        <div class="modal-body">

                            <?php 

echo"<form id='projetmodal' method=post action=modif3_projet.php >";
echo"<div class='form-group'>";
echo"<label for=noperation>N°de lopération</label> :"; 
echo"<input class=form-control type=text name=num_op id=noperation required=yes value=".$donnee['num_op']." >";
echo"</div>";

echo"<div class='form-group'>";
echo"<label for=noperation>ID entreprise</label> :"; 
echo"<input class=form-control type=text name=id_ent id=noperation required=yes value=".$donnee['id_ent']." >";
echo"</div>";

echo"<div class='form-group'>";
echo"<label for=nprojet>N°du Projet</label> :"; 
echo"<input class=form-control type=text name=num_proj id=nprojet value=".$donnee['num_proj']." >";
echo"</div>";

echo"<div class='form-group'>";
echo"<label for=lprojet>Libellé du Projet</label> : "; 
echo"<input class=form-control type=text name=libelle_proj id=lprojet value=".$donnee['libelle_proj']." >";
echo"</div>";

echo"<div class='form-group'>";
echo"<label for=r1projet>Rubrique1</label> : "; 
echo"<input class=form-control type=double name=rub1 id=r1projet value=".$donnee['rub1']." >";
echo"</div>";

echo"<div class='form-group'>";
echo"<label for=r2projet>Rubrique2</label> : "; 
echo"<input class=form-control type=double name=rub2 id=r1projet value=".$donnee['rub2']." >";
echo"</div>";

echo"<div class='form-group'>";
echo"<label for=mprojet>Montant du Projet</label> :"; 
echo"<input class=form-control type=double name=mont_projet id=mprojet value=".$donnee['mont_projet']." >";
echo"</div>";

echo"<hr/>";

echo"<div class='form-group'>";
echo"<label for=dapprobation>Date dapprobation</label> :"; 
echo"<input class=form-control type=text name=date_approb id=dapprobation value=".$donnee['date_approb']." >";
echo"</div>";

echo"<div class='form-group'>";
echo"<label for=date_demarrage>Date de demarrage (ODS)</label> :"; 
echo"<input class=form-control type=text name=date_dem id=date_demarrage value=".$donnee['date_dem']." >";
echo"</div>";


echo"<div class='form-group'>";
echo"<label for=date_cf>Date C.F</label> :"; 
echo"<input class=form-control type=text name=date_cf id=date_cf  value=".$donnee['date_cf']." >";
echo"</div>";

echo"<div class='form-group'>";
echo"<label for=date_d>Date de fin de delai</label> :"; 
echo"<input class=form-control type=text name=date_d id=date_d value=".$donnee['date_ach']." >";
echo"</div>";

echo"<div class='form-group'>";
echo"<label for=observation>Observation</label> : "; 
echo"<input class=form-control type=textarea name=obs id=observation value=".$donnee['obs']." >";
echo"</div>";
                            ?>				   
                
                
                
                            </div>
                
                            <div class="modal-footer">
                                <?php 
                echo"<button class='btn btn-success'  type=submit name=enregistrer><i class='fa fa-floppy-o'></i> ENREGISTRER
                </button>";
                            echo"<button type='button' class='btn btn-danger' data-dismiss='modal'><i class='fa fa-times'></i>
                                FERMER</button>";
                echo"</form>";
                                ?>
                        </div>
                    </div>
                </div>
            </div>
            
            </body>

        </html>