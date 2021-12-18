<?php
    include ("bd_connexion.php");
    
    if(isset($_POST['nom_contact'])){
        $nom_contact = $_POST['nom_contact'];
    }

    if(isset($_POST['prenom_contact'])){
            $prenom_contact = $_POST['prenom_contact'];
        }

    if(isset($_POST['email_contact'])){
            $email_contact = $_POST['email_contact'];
        }

    if(isset($_POST['telephone_contact'])){
            $telephone_contact = $_POST['telephone_contact'];
            echo $telephone_contact;
        }

    if(isset($_POST['profession_contact'])){
            $profession_contact = $_POST['profession_contact'];
        }

    if(isset($_POST['message_contact'])){
            $message_contact = $_POST['message_contact'];
        }
        
    $ajout_contact= $bdd->prepare("INSERT INTO contact(nom_contact, prenom_contact, email_contact, profession_contact, telephone_contact, message_contact) VALUES (?, ?, ?, ?, ?, ?)");
    $ajout_contact->execute (array (
        $nom_contact,
        $prenom_contact,
        $email_contact,
        $profession_contact,
        $telephone_contact,
        $message_contact
    ));

    header('location: http://localhost/fablab/index.php');
?>