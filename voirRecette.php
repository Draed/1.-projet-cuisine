<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Recettes</title>
        <link rel="stylesheet" href="style.css"/>                       
    </head>
        <header>
        <center>
            <h1>Liste des recettes</h1>
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="voirRecette.php">Bibliothèque Recette</a></li>
            </ul>
        </center>    
    </header>
    <body>
        <p>------ cliquez sur le les icones pour accéder aux recettes  ------</p>
        <?php
        $nb_fichier = 0;
        echo '<ul>';
        if($dossier = opendir('./recette')) {
            while(false !== ($fichier = readdir($dossier))){
                if($fichier != '.' && $fichier != '..' && $fichier != 'index.php'){                    
                    $nb_fichier++; // On incrémente le compteur de 1
                    $nomFichier = substr($fichier, 0, -4);
                    echo '<div id="recette"><a href="recette/'.$fichier.'"><li>' . $nomFichier . '</a></li></div>';
                }            
            }      
            echo '</ul><br/><br/><div id="footer">';
            echo 'Il y a <strong>' . $nb_fichier .'</strong> recette(s) dans la bibliothèque</div>';

            closedir($dossier);
 
        }
 
        else
        echo 'Le dossier n\' a pas pu être ouvert';
        
        ?>
        
    </body>    
</html>
