<?php include("php/logo/get_logo.php"); ?>
<footer class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-9">
                            <div class="row">
                                <div class="col-6">
                                    <div class="adress">
                                        FABLAB KENITRA <br/> 
                                        20 AVENUE BAHNINI, BIR RAMI, 14090<br/> 
                                        KENITRA, MAROC, (212) 666 88 88 60 / 51 <br/> 
                                        fablab.kenitra2018@gmail.com
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div id="map"></div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-3 social-links">
                            <a href="#" class="fa fa-facebook"></a>
                            <a href="#" class="fa fa-twitter"></a>
                            <a href="#" class="fa fa-instagram"></a>
                        </div>
                    </div>
                    
                    <hr />
                    
                    <div class="row text-center">
                        <h1 class="col-12 title-part">Nos partenaires</h1>
                        <?php
                            while($infos_logo = $logo->fetch()){
                                echo '<div class="col-3"> 
                                    <div>
                                        <img src="http://localhost/fablab-admin/production/php/logo/fichier_uploaded/'.$infos_logo['lien_logo'].'" class="img-part" />
                                    </div>
                                </div>';
                            }
                        ?>
                    </div>
                </div>
            </footer>