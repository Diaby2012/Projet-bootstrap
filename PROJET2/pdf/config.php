<?php
try
{
$db = new PDO('mysql:host=localhost;dbname=naruto', 'root', '');
}
catch(Exception $e)
{

        die('Erreur : '.$e->getMessage());
}		
?>