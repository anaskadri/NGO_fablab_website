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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <link href="https://fonts.googleapis.com/css?family=Roboto+Mono" rel="stylesheet">
    </head>
    
    <body>
        <div>
            <?php include("header.php"); ?>
            
            <section class="container">
                <div class="row-center text-center coaching-head">
                    <h3>Coaching d’entreprise : Un accompagnement sur-mesure</h3>
                    <h4>Par Dr Raddad El Okbani , Coach certifié </h4>
                </div>
                
                <div class="row text-center" style="padding: 10px;">
                    <div class="card" style="width: 70rem;">
                      <img class="card-img-top" src="images/coaching.jpg" alt="Card image cap">
                      <div class="card-body">
                        <div class="card-text" style="text-align: justify;">
                             <ul>
                                <li>Les personnes concernées sont les cadres et les dirigeants d’entreprises soumis à un stress et une exigence croissante de performance.</li>
                                 <li>Accompagner professionnellement et de façon personnalisée un dirigeant, une équipe ou toute une organisation.</li>
                                 <li>L'objectif est d'atteindre des résultats concrets et identifiables, de consolider les connaissances et d'augmenter l’efficacité.</li>
                                 <li>Le coaching d’entreprise est spécifiquement adapté aux périodes de changements professionnels forts : Apporter une réponse à trois sortes de difficultés : une situation de conflit, l'accès à une nouvelle fonction ou l'adaptation au changement.</li>
                                 <li>Motiver ses salariés pour une meilleure atteinte des objectifs en respectant l’écologie de la personne, gage de sa performance à long terme.</li>
                            </ul> 
                            Les principaux terrains d’intervention :<br /><br />
                            <strong>En entreprise: </strong>la communication et ses techniques, la gestion du temps et de priorités, la gestion des conflits, la gestion d’équipe et leadership, l’équilibre des domaines de vie du dirigeant, le développement des équipes, l’efficacité personnelle et professionnelle, la gestion du stress en situation difficile, blocages relationnels, la cohésion d'équipe ou Team building, Travailler sur une situation conflictuelle de management, résoudre une situation problématique en termes de communication, de management général, augmenter la motivation au travail Plus généralement, le coaching va porter sur les questions de maitrise opérationnelle suivantes :<br /><br />
                            La restructuration organisationnelle, la planification stratégique, les évaluations de gestion de performance, le développement d’initiatives nouvelles, la mise en place d’approches dans la gestion de la résistance au changement, identification des problèmes cruciaux au sein de l’organisation, l’amélioration de l’atmosphère de travail et du « moral des troupes », le travail avec les individus et les équipes durant une transition.<br /><br />
                            <strong>Focus client: </strong>Préoccupation constante de la satisfaction des attentes du client.<br/>
                            Le coach d’entreprise utilise un large éventail de méthodes pour aider le manager à atteindre ses objectifs.<br />
                            Cette liste est loin d’être exhaustive.
                        </div>
                      </div>
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