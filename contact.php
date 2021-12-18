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
                        <h2 class="formation-head">Contact</h2>
                    </div>
                </div>
                
                <hr />
                
                <div class="row">
                    <div class="col-6">
                        <form id="contact" action="php/contact/add_contact.php" method="post" data-parsley-validate="" class="form-horizontal form-label-left">

                          <div class="form-group">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <input type="text" id="first-name" name="nom_contact" placeholder="Nom" required="required" class="form-control col-md-12 col-xs-12 contact_input">
                            </div>
                          </div>
                            
                          <div class="form-group">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <input type="text" id="first-name" name="prenom_contact" placeholder="Prénom" required="required" class="form-control col-xs-12 contact_input">
                            </div>
                          </div>
                            
                          <div class="form-group">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <input type="email" id="first-name" name="email_contact" placeholder="Email" required="required" class="form-control col-xs-12 contact_input">
                            </div>
                          </div>
                            
                          <div class="form-group">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <input type="text" id="first-name" name="telephone_contact" placeholder="Téléphone" required="required" class="form-control col-md-12 col-xs-12 contact_input">
                            </div>
                          </div>
                            
                          <div class="form-group">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <input type="text" id="first-name" name="profession_contact" placeholder="Profession" required="required" class="form-control col-md-12 col-xs-12 contact_input">
                            </div>
                          </div>
                            
                          <div class="form-group">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <textarea class="form-control contact_input" form="contact" placeholder="Message" rows="4" name="message_contact"></textarea>
                            </div>
                          </div>
                            
                          <div class="col-md-12 col-sm-12 col-xs-12">
                              <button type="submit" form="contact"  class="btn btn-success btn-lg validate_contact" >Envoyer</button>
                          </div>
                        </form>
                    </div>
                    
                    <div class="col-6">
                        <div class="item text-center contact_rdv">
                            <div class="icon">
                                <i class="fa fa-calendar-o"></i>
                            </div>
                            <h3>PRENEZ UN RENDEZ-VOUS MAINTENANT</h3>
                            Appelez nous sur : 05 37 36 09 91

                            <br />
                            <hr class="item-divider-rdv" />
                            Ou visitez nous : 161, avenue mohamed 5 App 2, Kenitra

                            <br />
                            <hr class="item-divider-rdv"  />
                        </div>
                    </div>
                </div>
                
                <hr />
                    <div class="row-center text-center">
                    <h2 class="joinus-head">Rejoignez-nous</h2>
                    <div>
                        <p>Vous êtes différent ? votre profil nous intéresse.</p>
                    </div>
                    <div>
                        <form action="php/contact/add_cv.php" method="post" enctype="multipart/form-data" data-parsley-validate="">
                            <div>
                                <input type="text" class="email-newsletter newsletter joinus_input" name="nom_cv" placeholder="Nom" required>
                                <input type="text" class="email-newsletter newsletter joinus_input" name="prenom_cv" placeholder="Prénom" required>
                            </div>
                            <div>
                                <input type="text" class="email-newsletter newsletter joinus_input" name="adresse_cv" placeholder="Adresse" required>
                                <input type="text" class="email-newsletter newsletter joinus_input" name="email_cv" placeholder="Email" required>
                            </div> 
                            <div>
                                <input type="text" class="email-newsletter newsletter joinus_input" name="telephone_cv" placeholder="Téléphone" required>
                                <input type="text" class="email-newsletter newsletter joinus_input" name="fonction_cv" placeholder="Fonction actuelle" required>
                            </div> 
                            <div>
                                <input type="text" class="email-newsletter newsletter joinus_input" name="niveau_cv" placeholder="Niveau d'étude" required>
                                <input type="text" class="email-newsletter newsletter joinus_input" name="experience_cv" placeholder="Expériences" required>
                            </div>
                            <div>
                                <div>
                                    <label for="file_cv">CV</label>
                                    <input type="file" class="email-newsletter newsletter file_cv" name="cv_lien" placeholder="CV" required>
                                </div>
                                
                                <div>
                                    <label for="file_lettre">Letter de motivation</label>
                                    <input type="file" class="email-newsletter newsletter file_lettre" name="lettre_lien" placeholder="Lettre de motivation" required>
                                </div>
                            </div>

                            <input type="submit" value="S'abonner" class="btn btn-large subscribe-btn joinus-submit" />
                        </form>
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
</html>