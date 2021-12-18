<?php
    include('php/workshop/get_workshop.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>FAB LAB KENITRA</title>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <link href="https://fonts.googleapis.com/css?family=Roboto+Mono" rel="stylesheet">
    </head>
    
    <body>
        <div>
            <?php include("header.php"); ?>
            
            <section class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="formation-head">WorkShops</h2>
                    </div>
                </div>
                
                <hr />
                
                <div class="row">
                    <?php
                        while($infos=$workshop->fetch()){
                            
                        echo '<div class="col-12 arduino-workshop">
                            <h4>'.$infos['titre_workshop'].'</h4>
                            <h5>'.$infos['sous_titre_workshop'].'</h5>
                            <br>
                            <p><strong>100 %</strong> ateliers pratiques
                                <br/><strong>Offre : </strong>'.$infos['offre_workshop'].' 
                                <br/><strong>Durée de la formation : </strong>'.$infos['duree_workshop'].'
                                <br/><strong>Horaire : </strong>'.$infos['horaire_workshop'].'
                                <br/><strong>Lieu : </strong>'.$infos['lieu_workshop'].'
                                <br/><strong>Formation en groupe : </strong>PACK</p>
                        </div>';
                            
                        }
                    ?>
                </div>
                
                <hr />
                
                <div class="row-center text-center">
                    <h2 class="newsletter-head">Abonnez-vous à notre newsletter</h2>
                    <div>
                        <p>Des événements et des projets intéressants.</p>
                    </div>
                    <div>
                        <form action="php/user/add_user.php" method="post">
                            <div>
                                <input type="text" class="email-newsletter newsletter newsletter_input" name="nom_user" placeholder="Nom" required>
                                <input type="text" class="email-newsletter newsletter newsletter_input" name="prenom_user" placeholder="Prénom" required>
                                <input type="text" class="email-newsletter newsletter newsletter_input" name="profession_user" placeholder="Profession" required>
                            </div>  
                            <div>
                                <input type="text" class="email-newsletter newsletter_input" name="email_user" placeholder="email@fablab.com" required>
                            </div>

                            <input type="submit" value="S'abonner" class="btn btn-large subscribe-btn" />
                        </form>
                    </div>
                </div>
            </section>
            
            <?php include("footer.php"); ?>
        </div>
    </body>
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <!-- MAP API KEY -->
    <script src="js/map.js"></script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRxkIYIk6oqSQD4asPnJH0R7lYOC7yGik&callback=initMap">
    </script>
</html>