<?php 

$sth = $db->prepare("SELECT * FROM textes");
                $sth->execute();
                
                /*Retourne un tableau associatif pour chaque entrée de notre table
                 *avec le nom des colonnes sélectionnées en clefs*/
                $resultat = $sth->fetchAll();
                
                
                foreach($resultat as $result) {
                ?> 
                    <div onclick="twPleinEcran(this)" class="item">
                    <h2><?php echo nl2br($result['title']) ?> </h2> <?php echo nl2br($result['text']) ?>

                    </div>
                <?php
                }
            

?>