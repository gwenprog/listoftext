<?php 

$sth = $db->prepare("SELECT * FROM textes");
                $sth->execute();
                
                /*Retourne un tableau associatif pour chaque entrée de notre table
                 *avec le nom des colonnes sélectionnées en clefs*/
                $resultat = $sth->fetchAll();
                
                /*print_r permet un affichage lisible des résultats,
                 *<pre> rend le tout un peu plus lisible*/
                foreach($resultat as $result) {
                ?> 
                    <div class="item"><h2><?php echo $result['title'] ?> </h2> <?php echo $result['text']; ?></p></div>
                <?php
                }
            

?>