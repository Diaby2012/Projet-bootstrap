<?php
session_start();
if(!isset($_SESSION['connexion'])){ header("location:indexe.php");} 
try
{
    $db = new PDO('mysql:host=localhost;dbname=memoire2', 'root', '');
}
catch(Exception $e)
{
    // En cas d'erreur, on affiche un message et on arrête tout
    die('Erreur : '.$e->getMessage());
}
$reqe = $db->prepare('SELECT * FROM engagement where id=?');
$reqe->execute(array($_SESSION['id']));
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
    $req = $db->prepare('DELETE FROM engagement where id=?');
    $req->execute(array($_SESSION['id']));
    header("location:samaffich_eng.php?message=message");

}
try
{
    $db = new PDO('mysql:host=localhost;dbname=memoire2', 'root', '');
}
catch(Exception $e)
{

    die('Erreur : '.$e->getMessage());
}

$req = $db->prepare('SELECT * FROM engagement where id=?');
$req->execute(array($_SESSION['id']));
$donnee = $req->fetch();
//$_SESSION['id']=$donnee['id'];
?>

<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no">
        <title>SAM - ENGAGEMENT</title>
        <!-- Bootstrap -->
        <link href="bootstrap-3.3.2-dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="styles/style_operation.css">
        <link href="styles/animate.css" rel="stylesheet">
        <link href="styles/hover.css" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

    </head>

    <body id="engagement">
         <!------------------------------------------------------   HEADER ----------------------------------------------------->
        <?php include('header.php')?>
        <!------------------------------------------------------   Menu 2 ----------------------------------------------------->
        <div class="container">
            <div class="row">

                <ul class="nav nav-pills nav-justified">
                    <li role="presentation">
                        <a href="sam3_eng.php"> <span class="li_men">Ajouter</span> <i class="fa fa-plus-circle"></i>
                        </a>
                    </li>
                    <li role="presentation" class="active"><a href="samaffich_eng.php"><span class="li_men">Afficher</span> <i class="fa fa-pencil-square-o"></i>
                        </a>
                    </li>
                </ul>
                <div class="panel panel-primary" id="panel_pad">
                    <div class="panel-heading">
                        <h1 class="panel-title">engagement:</h1>
                    </div>
                    <div class="panel-body">
                        <p class="policp text-justify"></p>
                        <div class="col-xs-12 padnul" >
                            <table class="table table-bordered">
                                <tr class="text-center">
                                    <td>ID</td>
                                    <td>OBJET ENG</td>
                                    <td>NUM FICHE ENG</td>
                                    <td>MODIFIER</td>
                                    <td>SUPPRIMER</td>
                                </tr>

                                <?php if(isset($reqe) ){
    while ($donnees = $reqe->fetch()){
        echo"<form method=post action=samaffich2_eng.php>";
        echo"<tr class=text-center>";
        echo"<td>"."<input class=form-control readonly type=text name=id value=".$donnees['id'] ." >";echo"</td>";
        echo"<td>"."<input class=form-control readonly type=text name=objet_eng value=".$donnees['objet_eng'] ." >";echo"</td>";
        echo"<td>"."<input class=form-control readonly type=double name=nfich_eng value=".$donnees['nfich_eng'] ." >";echo"</td>";
        echo"<td>"."<a class='btn btn-success' name=modifier data-toggle='modal' data-target='#detailModal'><span class='fa fa-pencil-square-o fa-fw'></span> MODIFIER</button></a>"; echo"</td>";

        echo"<td>"."<button class='btn btn-success'  type=submit name=supprimer><span class='fa fa-trash-o fa-fw'></span> SUPPRIMER</button>"; echo"</td>";
        echo"</tr>";
        echo "</form>";
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
    $req = $db->prepare('SELECT * FROM engagement where id= :id');
    $req->execute(array('id' => $_SESSION['id']));
    $donnees = $req->fetch(); ?>
                            <table class="table table-striped">

                                <tr>
                                    <td>NUM_PORJ</td>
                                    <td><?php echo $donnees['num_proj'];?></td>
                                </tr>

                                <tr>
                                    <td>OBJET ENG</td>
                                    <td><?php echo $donnees['objet_eng'];?></td>
                                </tr>

                                <tr>
                                    <td>NUM FICHE ENG</td>
                                    <td><?php echo $donnees['nfich_eng'];?></td>
                                </tr>

                                <tr>
                                    <td>STRUCTURE ENG</td>
                                    <td><?php echo $donnees['structure_eng'];?></td>
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
        <div class="modal fade" id="detailModal" role="dialog" aria-labelledby="detailModal1" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h2 class="modal-title">ENGAGEMENT - MODIFIER</h2>
                    </div>

                    <div class="modal-body">
                        <?php 

echo"<form method=post action=modif3_eng.php>";
echo"<p>";
echo"<label for=id_proj>Num du projet</label> :"; 
echo"<input class=form-control type=text name=num_proj id=num_proj required=yes value=".$donnee['num_proj']." >";
echo"</p>";

echo"<p>";
echo"<label for=ooperation>Objet de lengagement</label> :"; 
echo"<input class=form-control type=text name=objet_eng id=ooperation required=yes value=".$donnee['objet_eng']." >";
echo"</p>";

echo"<p>";
echo"<label for=nengagement>N°fiche engagement</label> :"; 
echo"<input class=form-control type=number name=nfich_eng id=nengagement required=yes value=".$donnee['nfich_eng']." >";
echo"</p>";

echo"<p>";
echo"<label for=sengagement>Structure dengagement proposé</label> :"; 
echo"<input class=form-control type=text name=structure_eng id=sengagement required=yes value=".$donnee['structure_eng']." >";
echo"</p>";

echo"<fieldset>";
echo"<legend></legend>";

echo"<p>";
echo"<label for=etude>Etude</label> :"; 
echo"<input class=form-control type=double name=etude id=etude onChange=calculeTotal() value=".$donnee['etude']." >";
echo"</p>";

echo"<p>";
echo"<label for=batiment>Batiment</label> :"; 
echo"<input class=form-control type=double name=batiment id=batiment onChange=calculeTotal() value=".$donnee['batiment']." >";
echo"</p>";

echo"<p>";
echo"<label for=travauxpublic>Travaux public</label> :"; 
echo"<input class=form-control type=double name=travaux_public id=travauxpublic onChange=calculeTotal() value=".$donnee['travaux_public']." >";
echo"</p>";

echo"<p>";
echo"<label for=mep>Machine et equipement de production</label> :"; 
echo"<input class=form-control type=double name=materiel_equipement_production id=mep onChange=calculeTotal() value=".$donnee['materiel_equipement_production']." >";
echo"</p>";

echo"<p>";
echo"<label for=mtransport>Matériel de transport</label> :"; 
echo"<input class=form-control type=double name=materiel_transport id=mtransport onChange=calculeTotal() value=".$donnee['materiel_transport']." >";
echo"</p>";

echo"<p>";
echo"<label for=formation>Formation</label> :"; 
echo"<input class=form-control type=double name=formation id=formation onChange=calculeTotal() value=".$donnee['formation']." >";
echo"</p>";

echo"<p>";
echo"<label for=pse>Prestation des services externes</label> :"; 
echo"<input class=form-control type=double name=prestation_service_externe id=pse onChange=calculeTotal() value=".$donnee['prestation_service_externe']." >";
echo"</p>";


echo"<p>";
echo"<label for=autres>Autres</label> :"; 
echo"<input class=form-control type=double name=autre id=autres onChange=calculeTotal() value=".$donnee['autre']." >";
echo"</p>";

echo"<p>";
echo"<label for=publication>Publication</label> :"; 
echo"<input class=form-control type=double name=publication id=publication onChange=calculeTotal() value=".$donnee['publication']." >";
echo"</p>";

echo"<p>";
echo"<label for=cs>Controle et suivi</label> :"; 
echo"<input class=form-control type=double name=controle_suivi id=cs onChange=calculeTotal() value=".$donnee['controle_suivi']." >";
echo"</p>";

echo"<p>";
echo"<label for=mnv>Montant non ventillé</label> :"; 
echo"<input class=form-control type=double name=montant_non_ventille id=mnv onChange=calculeTotal() value=".$donnee['montant_non_ventille']." >";
echo"</p>";

echo"<p class='has-success'>";
echo"<label for=total>Total </label> :";
echo"<input class=form-control type=double name=total id=total required=yes value=".$donnee['total']." >";
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

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery-2.1.3.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="bootstrap-3.3.2-dist/js/bootstrap.min.js"></script>





<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-2.1.3.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="bootstrap-3.3.2-dist/js/bootstrap.min.js"></script>
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

<!--------------------------------------------- PAGINATE --------------------------------------------->

<script src="js/footable.paginate.js" type="text/javascript"></script>
</body>

</html>