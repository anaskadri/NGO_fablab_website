<?php
    include ("bd_connexion.php");
    
    if(isset($_POST['nom_user'])){
        $nom_user = $_POST['nom_user'];
    }
    if(isset($_POST['prenom_user'])){
            $prenom_user = $_POST['prenom_user'];
        }
    if(isset($_POST['email_user'])){
            $email_user = $_POST['email_user'];
        }
if(isset($_POST['profession_user'])){
            $profession_user = $_POST['profession_user'];
        }
        
    $ajout_user= $bdd->prepare("INSERT INTO user(email_user, nom_user, prenom_user, profession_user) VALUES (?, ?, ?, ?)");
    $ajout_user->execute (array (
        $nom_user,
        $prenom_user,
        $email_user,
        $profession_user
    ));

    header('location: http://localhost/fablab/index.php');
?>