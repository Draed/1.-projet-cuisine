<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Convertir une recette</title>
        <link rel="stylesheet" href="style.css"/>
    </head>
    <header>
        <center>
            <h1>Convertir une page web en pdf</h1>
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="voirRecette.php">Bibliothèque Recette</a></li>
            </ul>
        </center>    
    </header>
    <body>
      <form method="post" action="convertir.php?action=yes">
        adresse du Site
        <input type="text" name="adresseSite"/>
        <input type="submit" name="exec" value="Executer" >
      </form>
    </body>
</html>
