<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Recette convertie</title>
        <link rel="stylesheet" href="style.css"/>
    </head>
    <body>
    <?php
    $adresseSite = $_POST['adresseSite'];
    if(isset($_POST['exec']))
    {
        if (preg_match('#^http://[w-]+[w.-]+.[a-zA-Z]{2,6}#i', $adresseSite)) {        

            if(isset($_GET['action']) && $_GET['action'] == 'yes')
            {
                $cmd = exec("sh FirefoxToPdf.sh $adresseSite");

                if($cmd)
                {
                   echo 'Modification Terminée';
                }
                else
                {
                   echo 'Erreur';
                }
            }
        }
        else {
            echo 'Cette URL a un format non adapté.';
        }
    }
    ?>  
    <center>
        <form>
            <input type="button" value="ajouter une autre recette" onclick="history.go(-1)">
        </form>
    </center>
    </body>
</html>