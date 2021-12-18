<?php
    include("php/horaire/get_horaire.php");
    $infos_horaire=$horaire->fetch();

    include("php/event/get_event.php");
    $infos_event=$event->fetch();
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
            
            <section>
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                  </ol>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img class="d-block w-100 carousel-pic" src="images/robotique_carous.jpg" alt="First slide">
                      <div class="carousel-caption d-none d-md-block" style="background: #e5e5e5d6">
                        <h5 style="color: #3ca222;">Robotique</h5>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100 carousel-pic" src="images/auto_carous.jpg" alt="Second slide">
                      <div class="carousel-caption d-none d-md-block" style="background: #e5e5e5d6">
                        <h5 style="color: #0f1e73">Automobile</h5>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100 carousel-pic" src="images/workshop_carous.jpg" alt="Third slide">
                      <div class="carousel-caption d-none d-md-block" style="background: #e5e5e5d6">
                        <h5 style="color: #c81e1e">Workshops</h5>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100 carousel-pic" src="images/3d_carous.jpg" alt="Third slide">
                      <div class="carousel-caption d-none d-md-block" style="background: #e5e5e5d6">
                        <h5 style="color: #c81e1e">Impression 3D</h5>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100 carousel-pic" src="images/electro_carous.jpg" alt="Third slide">
                      <div class="carousel-caption d-none d-md-block" style="background: #e5e5e5d6">
                        <h5 style="color: #c81e1e">Électronique</h5>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100 carousel-pic" src="images/automobile_carous.jpg" alt="Third slide">
                      <div class="carousel-caption d-none d-md-block" style="background: #e5e5e5d6">
                        <h5 style="color: #c81e1e">Automobile</h5>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100 carousel-pic" src="images/electrique_carous.jpg" alt="Third slide">
                      <div class="carousel-caption d-none d-md-block" style="background: #e5e5e5d6">
                        <h5 style="color: #c81e1e">Electrique</h5>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100 carousel-pic" src="images/cao_carous.jpg" alt="Third slide">
                      <div class="carousel-caption d-none d-md-block" style="background: #e5e5e5d6">
                        <h5 style="color: #c81e1e">CAO</h5>
                      </div>
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
            </section>
            
            <section class="container">
                <div class="row">
                    <div class="col-8">
                        <h2 class="presentation-head">FabLab Kénitra</h2>
                        <div>
                            FabLab Kénitra est un laboratoire d'innovation et pour les nouvelles technologies et un centre de formation gratuit à Kenitra, dédié à la fois à la fabrication d'objets et le partage de connaissances et de savoir-faire. 
                        </div>
                    </div>
                    
                    <div class="col-4">
                        <img src="images/workplace.jpg" class="img-workplace" />
                    </div>
                </div>
                
                <hr />
                    
                <div class="row">
                    <div class="col-6">
                        <div class="item text-center">
                            <div class="icon">
                                <i class="fa fa-clock-o"></i>
                            </div>
                            <h3>HORAIRE DE TRAVAIL</h3>
                            <?php echo $infos_horaire['jour1']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $infos_horaire['horaire1'];?>
                            <br />
                            <hr class="item-divider" />
                            <?php echo $infos_horaire['jour2']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $infos_horaire['horaire2'];?>
                            <br />
                            <hr class="item-divider"  />
                        </div>
                    </div>
                    
                    <div class="col-6">
                        <div class="item text-center">
                            <div class="icon">
                                <i class="fa fa-calendar-o"></i>
                            </div>
                            <h3>PRENEZ UN RENDEZ-VOUS MAINTENANT</h3>
                            Appelez nous sur : 05 37 36 09 91

                            <br />
                            <hr class="item-divider" />
                            Ou visitez nous : 161, avenue mohamed 5 App 2, Kenitra

                            <br />
                            <hr class="item-divider"  />
                        </div>
                    </div>
                </div>
                
                <hr />
                
                <div class="row text-center">
                    <div class="col-12">
                        <h1 class="coworking">Espace de CoWorking</h1>
                        <p>Un espace de coworking ouvert d’environ 160 m² de superficie dédié à la création et le prototypage d’objets physiques</p>
                    </div>
                    
                    <div class="col-4">
                        <h4 class="coworking-header">Imprimantes 3D</h4>
                        <div>
                            <center>
                                <img src="images/imprimante-3d.png" class="coworking-picture" />
                            </center>
                        </div>
                    </div>
                    
                    <div class="col-4">
                        <h4 class="coworking-header">Machine CNC</h4>
                        <div>
                            <center>
                                <img src="images/machine-cnc.jpg" class="coworking-picture" />
                            </center>
                        </div>
                    </div>
                    
                    <div class="col-4">
                        <h4 class="coworking-header">Cartes et composantes électroniques</h4>
                        <div>
                            <center>
                                <img src="images/carte.jpg" class="coworking-picture" />
                            </center>
                        </div>
                    </div>
                </div>
                
                <hr />
                
                <div class="row text-center">
                    <input id="date_js" value="<?php echo $infos_event['date_event'];?>" hidden/>
                    <div class="col-6 event-title text-center">
                        <span class="event-description"><?php echo $infos_event['titre_event'];?></span>
                        <br />
                        <button href="<?php echo $infos_event['lien_event'];?>">S'enregistrer</button>
                    </div>
                    
                    <div class="col-6 text-center">
                        <h1 class="event">Prochain événement</h1>
                        <div id="countdown"></div>
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