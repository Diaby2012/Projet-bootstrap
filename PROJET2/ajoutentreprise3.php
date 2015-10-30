<?php
session_start();
if(!isset($_SESSION['connexion'])){ header("location:indexe.php");} 
if(isset($_SESSION['id'])){
    try
    {
        $db = new PDO('mysql:host=localhost;dbname=memoire2', 'root', '');
    }
    catch(Exception $e)
    {
        // En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
    }
    $reqe = $db->prepare('SELECT * FROM entreprise where id= :id');
    $reqe->execute(array('id' => $_SESSION['id']));
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
    $req = $db->prepare('DELETE FROM entreprise where id=?');
    $req->execute(array($_SESSION['id']));
    header("location:ajoutentreprise2.php?message=message");
}

try
{
    $db = new PDO('mysql:host=localhost;dbname=memoire2', 'root', '');
}
catch(Exception $e)
{

    die('Erreur : '.$e->getMessage());
}

$req = $db->prepare('SELECT * FROM entreprise where id=?');
$req->execute(array($_SESSION['id']));
$donnee = $req->fetch();
//$_SESSION['id']=$donnee['id'];

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
                    <li role="presentation">
                        <a href="ajoutentreprise.php"> <span class="li_men">Ajouter</span> <i class="fa fa-plus-circle"></i>
                        </a>
                    </li>
                    <li role="presentation" class="active"><a href="ajoutentreprise2.php"><span class="li_men">Afficher</span> <i class="fa fa-pencil-square-o"></i>
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
                                    <td>ID</td>
									<td>NOM</td>
                                    <td>ADRESSE</td>
                                    <td>NUMERO DE TELEPHONE</td>
                                    <td>MODIFIER</td>
                                    <td>SUPPRIMER</td>
                                </tr>

                                <?php if(isset($reqe) ){
    while ($donnees = $reqe->fetch()){
        echo"<form method=post action=ajoutentreprise3.php>";
        echo"<tr class=text-center>";
        echo"<td>"."<input class=form-control readonly type=text name=id value=".$donnees['id'] ." >";echo"</td>";
		echo"<td>"."<input class=form-control readonly type=text name=nom value=".$donnees['nom'] ." >";echo"</td>";
        echo"<td>"."<input class=form-control readonly type=text name=adresse value=".$donnees['adresse'] ." >";echo"</td>";
        echo"<td>"."<input class=form-control readonly type=double name=num_tel value=".$donnees['num_tel'] ." >";echo"</td>";
        echo"<td>"."<a class='btn btn-success' name=modifier data-toggle='modal' data-target='#detailModal'><span class='fa fa-pencil-square-o fa-fw'></span> MODIFIER</button></a>"; echo"</td>";

        echo"<td>"."<button class='btn btn-success'  type=submit name=supprimer><span class='fa fa-trash-o fa-fw'></span> SUPPRIMER</button>"; echo"</td>";
        echo"</tr>";
        echo "</form>";
        //$_SESSION['id']=$donnees['id'];
    }}?>
                            </table>

                            <?php if(isset($_SESSION['id'])){
    try
    {
        $db = new PDO('mysql:host=localhost;dbname=memoire2', 'root', '');
    }
    catch(Exception $e)
    {
        // En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
    }
    $req = $db->prepare('SELECT * FROM entreprise where id= :id');
    $req->execute(array('id' => $_SESSION['id']));
    $donnees = $req->fetch(); ?>
                            <table class="table table-striped">

                                <tr>
                                    <td>NOM</td>
                                    <td><?php echo $donnees['nom'];?></td>
                                </tr>
                                
                                <tr>
                                    <td>ADRESSE</td>
                                    <td><?php echo $donnees['adresse'];?></td>
                                </tr>

                                <tr>
                                    <td>NUMERO DE TELEPHONE</td>
                                    <td><?php echo $donnees['num_tel'];?></td>
                                </tr>

                                <tr>
                                    <td>NUMERO DE COMPTE</td>
                                    <td><?php echo $donnees['num_compte'];?></td>
                                </tr>

                                <tr>
                                    <td>RESPONSABLE</td>
                                    <td><?php echo $donnees['responsable'];?></td>
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

echo"<form id='projetmodal' method=post action=modifentreprise.php >";
echo"<div class='form-group'>";
echo"<label for=noperation>Nom</label> :"; 
echo"<input class=form-control type=text name=nom id=noperation required=yes value=".$donnee['nom']." >";
echo"</div>";

echo"<div class='form-group'>";
echo"<label for=noperation>Adresse</label> :"; 
echo"<input class=form-control type=text name=adresse id=noperation required=yes value=".$donnee['adresse']." >";
echo"</div>";

echo"<div class='form-group'>";
echo"<label for=nprojet>Num telephone</label> :"; 
echo"<input class=form-control type=text name=num_tel id=nprojet value=".$donnee['num_tel']." >";
echo"</div>";

echo"<div class='form-group'>";
echo"<label for=lprojet>Num_compte</label> : "; 
echo"<input class=form-control type=text name=num_compte id=lprojet value=".$donnee['num_compte']." >";
echo"</div>";

echo"<div class='form-group'>";
echo"<label for=r1projet>Responsable</label> : "; 
echo"<input class=form-control type=double name=responsable id=r1projet value=".$donnee['responsable']." >";
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