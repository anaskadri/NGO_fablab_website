<?php 
    include ("bd_connexion.php");

    $project = $bdd->query("SELECT * FROM projet");
    $project_description = $bdd->query("SELECT * FROM projet");
?>