<?php
    include('php/mot/get_mot.php');
    $infos_mot=$mot->fetch();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>FAB LAB KENITRA</title>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/fonts.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <link href="https://fonts.googleapis.com/css?family=Roboto+Mono" rel="stylesheet">
    </head>
    
    <body>
        <div>
            <?php include("header.php"); ?>
            
            <section class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="media">
                          <img class="mr-3 img-president" src="images/president_pic.jpg" alt="image-president">
                          <div class="media-body mot_president">
                            <h5 class="mt-0 title_resident">Mot du president</h5>
                            Le concept de FabLab (contraction de l'anglais Fabrication Laboratory, « laboratoire de fabrication ») a été initié aux Etats-Unis.<br /><br />
                            La maîtrise des compétences est à la base de l'amélioration de la compétitivité industrielle.<br/><br/>
                            FabLab Kenitra propose et conçoit des formations inter et intra-entreprises, pour l'acquisition de compétences reconnues par les professionnels selon 2 axes : <br />
                            <ul>
                                <li><span>Promotion de l’innovation à tout acteur de Kenitra et de sa région (universitaires, étudiants, porteurs de projet et d’idée …)</span></li>
                                <li><span>Soutien au développement de la Zone Industrielle de Kenitra (Atlantic Free Zone) : Il apportera une valeur ajoutée en termes de soutien à la recherche et à la formation.</span></li>
                            </ul>
                            FabLab Kenitra sera aussi et surtout un lieu collaboratif de fabrication, ouvert à tous, qui aidera les créateurs à s’approprier des technologies utiles pour leurs projets.<br /><br />
                            Enfin, FabLab Kenitra sera une franchise de formation entrepreneuriale, qui favorisera la rencontre des compétences pour partager, créer et réaliser des objets et des systèmes. Il constituera un outil pour l’innovation et la concrétisation des idées.<br /><br />
                            FabLab Kenitra devra fonctionner avec une multitude d’acteurs de son écosystème.<br /><br />
                            Sur Kenitra et sa région, les acteurs identifiés de l’écosystème sont:
                            <ul>
                                <li><span>Les étudiants et professeurs de Kenitra souhaitant développer des projets innovants</span></li>
                                <li><span>Les laboratoires, et chercheurs désireux de développer des équipements nécessaires pour leurs travaux de recherche</span></li>
                                <li><span>Les entreprises de la zone industrielle</span></li>
                                <li><span>Les inventeurs individuels</span></li>
                                <li><span>Collectivités : réalisation de produits pour les collectivités</span></li>
                                <li><span>Les jeunes promoteurs, …</span></li>
                                <li><span>Les porteurs de projets</span></li>
                                <li><span>Partenariats avec les centres de formation</span></li>
                            </ul>
                              <center>
                                <span class="president_signature">Abdelali Acha <br/>
                                 Ingénieur d´affaires , expert consultant, Ingénieur en génie      électronique et Informatique Industrielle, Bochum, Allemagne.   </span>
                              </center>
                          </div>
                        </div>
                    </div>
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
    
    <!--CountDown -->
   <script type="text/javascript" src="js/countdown.js"></script> 
</html>