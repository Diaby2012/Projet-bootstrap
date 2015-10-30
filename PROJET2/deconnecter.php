<?php
  session_start();

 unset($_SESSION['connexion']);
 header("location:indexe.php");
 
 ?>