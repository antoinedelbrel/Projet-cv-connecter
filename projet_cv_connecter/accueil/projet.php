<!DOCTYPE html>
<html>
    <head>
        <title>PROJETS</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="./admin/css/projet.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans|Work+Sans" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">
    </head>
    <body>
        <?php
        include_once './includes/header.php';
        ?>
        
        <div id="projet">
            <h2>Portfolio</h2>
            <div id="block">
                <div id="pong">
                <a class="git" href="https://github.com/antoinedelbrel/Pong" alt="pong" target="_blank"> <div>Projet pong</div></a>      
                </div> 
                <div id="markdown">
                <a class="git" href="https://github.com/antoinedelbrel/projet-site-statique" alt="markdown" target="_blank">Projet markdown to html</a>
                </div>
                <div id="plante">
                <a class="git" href="https://github.com/tlnkorr/project_connected_plant" alt="plante" target="_blank">projet plante connectee</a>
                </div>
            </div>
        </div>
        <?php
            include_once './admin/include/footer/footer.php'
        ?>
    </body>
</html>