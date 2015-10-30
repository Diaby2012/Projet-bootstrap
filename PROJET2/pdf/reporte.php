<?php
require_once 'config.php';
$content = '<page> 
<div style="border-top: 1px solid black; position:relative; width: 960px ; margin: 0 auto; ">
    <div style="width: auto; margin:auto; position:relative; ">
        <div style="width:500px; float:left; display:inline-block; margin-left:20px;">
            <h3 style="text-decoration:underline; margin-bottom:5px;">Ministere des Ressources en Eau</h3>
            <h3 style="margin-top:0;">Direction des Ressources en Eau de la Wilaya de Mostaganem</h3>
        </div>

        <div style="width:300px; display:inline-block; margin-left:140px; ">
            <h3 style="text-decoration:underline; margin-bottom:5px;">Avis de virement à C/Fp du Tresor</h3>
            <p>de Dépense Imputable au Budget dEtat</p>
        </div>
    </div>

    <div style="text-align:center;">
        <h2>Comptable Assignataire</h2>
        <p>Mr. Le Tr&eacute;sorier de la Wilaya</p>
        <p>Cpte à D&eacute;biter CCP N°3000.11 Clé</p>
    </div>
    <table style="clear:both; width:100%; margin:auto; border-collapse: collapse;">
        <tr>
            <th rowspan="2" style="border:1px solid black;">Designation du beneficiere</th>
            <th rowspan="2" style="border:1px solid black;">N° du CC à créditer</th>
            <th rowspan="2" style="border:1px solid black;">Montant</th>
            <th style="border:1px solid black;">Ret. Du</th>
            <th rowspan="2" style="border:1px solid black;">Net à Payer</th>
            <th style="border:1px solid black;">N°</th>
            <th colspan="5" style="border:1px solid black;">IDENTIFICATION</th>
            <th colspan="2" style="border:1px solid black;">N°</th>
            <th style="border:1px solid black;">Références et Observations</th>
        </tr>

        <tr>
            <th style="border:1px solid black;">Comptable</th>
            <th style="border:1px solid black;">dEngag.</th>
            <th style="border:1px solid black;">Chap.</th>
            <th style="border:1px solid black;">Art.</th>
            <th style="border:1px solid black;">Gest.</th>
            <th style="border:1px solid black;">Ordonn.</th>
            <th style="border:1px solid black;">Section</th>
            <th style="border:1px solid black;">Mandat</th>
            <th style="border:1px solid black;">Ligne</th>
            <th style="border:1px solid black;">&nbsp;</th>
        </tr>

        <tr height="200px" style="vertical-align:top;">
            <td style="border:1px solid black;">&nbsp;</td>
            <td style="border:1px solid black;">&nbsp;</td>
            <td style="border:1px solid black;">&nbsp;</td>
            <td style="border:1px solid black;">&nbsp;</td>
            <td style="border:1px solid black;">&nbsp;</td>
            <td style="border:1px solid black;">&nbsp;</td>
            <td colspan="5" style="border:1px solid black;">&nbsp;</td>
            <td style="border:1px solid black;">&nbsp;</td>
            <td style="border:1px solid black;">&nbsp;</td>
            <td style="border:1px solid black;">&nbsp;</td>
        </tr>
    </table>
</div>                                                                                                         </page>';
require_once('html2pdf_v4.03/html2pdf.class.php');
$pdf = new HTML2PDF('L','A4','fr','UTF-8');
$pdf->writeHTML($content);
ob_clean();                    // RAJOUTE CECI
$pdf->output('lista.pdf');
?>