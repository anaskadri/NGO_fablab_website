<?php
    include ("bd_connexion.php");
    
    if(isset($_POST['nom_cv'])){
        $nom_cv = $_POST['nom_cv'];
    }
    if(isset($_POST['prenom_cv'])){
            $prenom_cv = $_POST['prenom_cv'];
        }
    if(isset($_POST['adresse_cv'])){
            $adresse_cv = $_POST['adresse_cv'];
        }
    if(isset($_POST['email_cv'])){
            $email_cv = $_POST['email_cv'];
        }
    if(isset($_POST['telephone_cv'])){
            $telephone_cv = $_POST['telephone_cv'];
        }
    if(isset($_POST['fonction_cv'])){
            $fonction_cv = $_POST['fonction_cv'];
        }
    if(isset($_POST['niveau_cv'])){
            $niveau_cv = $_POST['niveau_cv'];
        }
    if(isset($_POST['experience_cv'])){
            $experience_cv = $_POST['experience_cv'];
        }

        //Ajout CV
     if(isset($_FILES['cv_lien'])){
              $errors= array();
              $file_name = $_FILES['cv_lien']['name'];
              $file_size = $_FILES['cv_lien']['size'];
              $file_tmp = $_FILES['cv_lien']['tmp_name'];
              $file_type = $_FILES['cv_lien']['type'];
            
              $file_ext = explode('.',$_FILES['cv_lien']['name']);
              $file_ext=end($file_ext);
              $file_ext=strtolower($file_ext);
               
              $expensions= array("jpeg","jpg","png", "pdf", "docx");

              if(in_array($file_ext,$expensions)=== false){
                 $errors[]="extension not allowed, please choose a JPEG or PNG file.";
              }

              if($file_size > 200097152) {
                 $errors[]='File size must be excately 2 MB';
              }
                if (!empty($file_ext)){
              $cv_lien = rand(1, 1000000).'.'.$file_ext;} else {$file_name='null';}
              if(empty($errors)==true) {
                 move_uploaded_file($file_tmp,"cv_uploaded/".$cv_lien);
            
              }else{
        
              }
        }

        //Ajout lettre
        if(isset($_FILES['lettre_lien'])){
              $errors= array();
              $file_name = $_FILES['lettre_lien']['name'];
              $file_size = $_FILES['lettre_lien']['size'];
              $file_tmp = $_FILES['lettre_lien']['tmp_name'];
              $file_type = $_FILES['lettre_lien']['type'];
            
              $file_ext = explode('.',$_FILES['lettre_lien']['name']);
              $file_ext=end($file_ext);
              $file_ext=strtolower($file_ext);
               
              $expensions= array("jpeg","jpg","png", "pdf", "docx");

              if(in_array($file_ext,$expensions)=== false){
                 $errors[]="extension not allowed, please choose a JPEG or PNG file.";
              }

              if($file_size > 200097152) {
                 $errors[]='File size must be excately 2 MB';
              }
                if (!empty($file_ext)){
              $lettre_lien = rand(1, 1000000).'.'.$file_ext;} else {$file_name='null';}
              if(empty($errors)==true) {
                 move_uploaded_file($file_tmp,"lettre_uploaded/".$lettre_lien);
            
              }else{
        
              }
            }

        
    $ajout_cv= $bdd->prepare("INSERT INTO cv(nom_cv, prenom_cv, adresse_cv, email_cv, telephone_cv, fonction_cv, niveau_cv, experience_cv, cv_lien, lettre_lien) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $ajout_cv->execute (array (
        $nom_cv,
        $prenom_cv,
        $adresse_cv,
        $email_cv, 
        $telephone_cv,
        $fonction_cv,
        $niveau_cv,
        $experience_cv,
        $cv_lien,
        $lettre_lien
    ));

    
    header('location: http://localhost/fablab/index.php');
?>