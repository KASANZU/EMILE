<? php

@session_start();
include("config.php");    ?>

<html>
    <?php
    $query = " select * from inscription ";
    $resultat = mysql_query($query,$connection);
    if (!$resultat) echo "la requete n'est pas excutée ... !! <br>";
    ?>
    <?php$i =0;
    while ($ligne = mysql_fetch_array($resultat))
    {
        $i = $i + 1;
        ?>
        <?php

        echo $ligne['id'];
        ?>
         echo $ligne['nom'];
         ?>
         <?php
         echo $ligne['postnom'];
          ?>
         <?php
         echo $ligne['prenom'];
          ?>
         <?php
         echo $ligne['genre'];
         echo $ligne['section'];
         echo $ligne['sciences exactes'];
         echo $ligne['lettres'];
         echo $ligne['Sciences d'appui'];
        ?>
    }


    </html>