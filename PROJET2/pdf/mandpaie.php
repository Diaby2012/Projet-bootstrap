<?php
require_once 'config.php';
$content = '<page>
<style>
    td,th
    {
        
    }
    table
    {
        empty-cells: ;
    }
</style>
   <div style="border-top: 1px solid black;  width: 960px; margin: 0 auto; ">
    <div style="width: auto; margin:auto; position:relative; ">
        <div style="width:500px; float:left; display:inline-block; margin-left:20px;">
            <h3 style="text-decoration:underline; margin-bottom:5px;">Republique Algerienne Democratique et Populaire</h3>
            <h3 style="text-decoration:underline; margin-bottom:5px; margin-top:5px;">Ministere des Ressources en Eau</h3>
            <h3 style="margin-top:0; text-decoration:underline;">Direction des Ressources en Eau de la Wilaya de Mostaganem</h3>
        </div>

        <div style="width:300px; display:inline-block; margin-left:140px; ">
            <h3 style="text-decoration:underline; margin-bottom:5px;">Mandat de paiement</h3>
            <p>de Dépense Imputable au Budget dEtat</p>
        </div>
    </div>

    <div style="text-align:center; clear:both;">
       
        <table width="100%" style="text-align:center; border-collapse:collapse;"   cellpadding="3">
          <tr>
              <td colspan="4" rowspan="5"></td>
              <th colspan="4" style="border:1px solid black;">Comptable Assignataire</th>
              <td colspan="9" rowspan="3" ></td>
          </tr>
          
          <tr>
              <td colspan="4" style="border:1px solid black;">Mr. Le Tr&eacute;sorier de la Wilaya</td>
          </tr>
          
          <tr>
              <td colspan="4" style="border:1px solid black;">Cpte &agrave; D&eacute;biter CCP N&ordm;3000.11 Cl&eacute; 36 Oran</td>
          </tr>
          
          <tr>
              <td colspan="2" style="border:1px solid black;">Ordonn</td>
              <td style="border:1px solid black;">Gestion</td>
              <td style="border:1px solid black;">Section</td>
              <td style="border:1px solid black;">Chapitre</td>
              <td colspan="8" rowspan="3"></td>
          </tr>
          
          <tr>
              <td style="border:1px solid black;">211</td>
              <td style="border:1px solid black;">127</td>
              <td style="border:1px solid black;">2014</td>
              <td style="border:1px solid black;">&nbsp;</td>
              <td style="border:1px solid black;">323</td>
          </tr>
          
          <tr>
              <td width="4%" style="border:1px solid black;">N&ordm;</td>
              <td style="border:1px solid black;">&nbsp;</td>
              <td colspan="2" style="border:1px solid black;">&nbsp;</td>
              <td colspan="3" style="border:1px solid black;">Mode de Paiement</td>
              <td colspan="2" style="border:1px solid black;">Compte Bancaire</td>
          </tr>
          
          <tr>
              <td colspan="2" rowspan="2" style="border:1px solid black;">1<br>D&eacute;signation du B&eacute;neficiere</td>
              <td rowspan="2" style="border:1px solid black;">2<br>N&ordm; du CC &agrave; Cr&eacute;diter</td>
              <td rowspan="2" width="10%" style="border:1px solid black;">3<br>Montant</td>
              <td rowspan="2" style="border:1px solid black;">4<br>Ret. Du Comptable</td>
              <td colspan="2" rowspan="2" style="border:1px solid black;">5<br>Net &agrave; Payer</td>
              <td rowspan="2" style="border:1px solid black;">6<br>N&ordm; dEngag.</td>
              <td colspan="6" style="border:1px solid black;">7<br>IDENTIFICATION</td>
              <td colspan="2" style="border:1px solid black;">8<br>N&ordm;</td>
              <td rowspan="2" style="border:1px solid black;">9<br>R&eacute;f&eacute;rences et Observations</td>
          </tr>
          
          <tr>
              <td style="border:1px solid black;">Chap.</td>
              <td style="border:1px solid black;">Art.</td>
              <td style="border:1px solid black;">Gest.</td>
              <td style="border:1px solid black;" colspan="2">Ordonn.</td>
              <td style="border:1px solid black;">Section</td>
              <td style="border:1px solid black;">Mandat</td>
              <td style="border:1px solid black;">Ligne</td>
          </tr>
          
          <tr height="100px;">
              <td colspan="2" rowspan="3" style="border:1px solid black;">&nbsp;</td>
              <td rowspan="3" style="border:1px solid black;">&nbsp;</td>
              <td rowspan="2" style="border:1px solid black;">&nbsp;</td>
              <td rowspan="3" style="border:1px solid black;">&nbsp;</td>
              <td colspan="2" rowspan="3" style="border:1px solid black;">&nbsp;</td>
              <td rowspan="3" style="border:1px solid black;">&nbsp;</td>
              <td style="border:1px solid black;">&nbsp;</td>
              <td style="border:1px solid black;">&nbsp;</td>
              <td style="border:1px solid black;">&nbsp;</td>
              <td style="border:1px solid black;">&nbsp;</td>
              <td style="border:1px solid black;">&nbsp;</td>
              <td style="border:1px solid black;">&nbsp;</td>
              <td rowspan="3" style="border:1px solid black;">&nbsp;</td>
              <td rowspan="3" style="border:1px solid black;">&nbsp;</td>
              <td rowspan="3" style="border:1px solid black;">&nbsp;</td>
          </tr>
          
         <tr height="20px">
              <td colspan="6" style="border:1px solid black;">&nbsp;</td>
          </tr>
          
         <tr height="100px">
              <td style="border:1px solid black;">&nbsp;</td>
              <td style="border:1px solid black;">&nbsp;</td>
              <td style="border:1px solid black;">&nbsp;</td>
              <td style="border:1px solid black;">&nbsp;</td>
              <td style="border:1px solid black;">&nbsp;</td>
              <td style="border:1px solid black;">&nbsp;</td>
              <td style="border:1px solid black;">&nbsp;</td>
             
          </tr>
        </table>
    </div> 
</div>
 </page>';
require_once('html2pdf_v4.03/html2pdf.class.php');
$pdf = new HTML2PDF('L','A4','fr','UTF-8');
$pdf->writeHTML($content);
$pdf->SetDisplayMode('fullpage');
ob_clean();                    // RAJOUTE CECI
$pdf->output('lista.pdf');
?>                                                    