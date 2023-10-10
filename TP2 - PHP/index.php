<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Affichage de l'heure grâce à PHP</title>
    </head>
    <body>
        <?php
            date_default_timezone_set('UTC');
            echo "<p>Il est actuellement : ", date('h:i:s'), "</p>";

            function afficher( $texte, $saut = 1 ) { echo $texte;
                for( $i = 0 ; $i < $saut ; $i++) echo "\n";
                }
                afficher("Hello", 0);
                afficher(" World !");
                
                $tab = array(5,2,5,7,4,6);
                foreach($tab as $value){
                    echo $value."\n"; }
                foreach($tab as $key => $value){
                    echo $key." : ".$value."\n"; }
        ?>
    </body>
</html>

