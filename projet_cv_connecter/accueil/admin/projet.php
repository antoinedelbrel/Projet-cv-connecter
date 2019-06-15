<?php
    $db = new PDO('mysql:host=localhost;dbname=projet-cv-connecter;charset=utf8','root','');
    $rq = $db->query('SELECT * FROM projet');
?>

<!DOCTYPE html>
<html>
    <head>
        <title>PROJETS</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="./css/projet.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans|Work+Sans" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">
    </head>
    <body>
        <?php
        include_once './include/header/header.php';
        ?>
    
        <div id="projet">
            <h2>Portfolio</h2>
            
            <div id="block">
                <div id="pong">
                    <a class="git" href="https://github.com/antoinedelbrel/Pong" alt="pong" target="_blank"> <div>Projet pong</div></a> 
                    
                </div>
                
                <div id="markdown">
                    <a class="git" href="https://github.com/antoinedelbrel/projet-site-statique" alt="markdown" target="_blank">Projet markdown to html</a>
                    <!-- <form action="POST" action="test.php">
                        <input type="text" name="nom" value=""/>
                        <button type="submit" value="Ajouter" >Ajouter</button>
                    </form>  -->
                </div>
                <div id="plante">
                    <a class="git" href="https://github.com/tlnkorr/project_connected_plant" alt="plante" target="_blank">projet plante connectee</a>
                    
                </div>
                <?php 
                     while($donnee = $rq->fetch()){
                        echo '<p>'. $donnee['nom'] . '</p>';
                        ?>
                        <div id="new">
                            <form action="POST" action="test.php">
                                <input type="text" name="nom" value="<?=$donnee['nom'] ?>"/>
                                <button type="submit" value="Ajouter" >Ajouter</button>
                            </form> 
                        </div>
                    <?php
                        echo '<p><a href="delete_projet.php?id=' . $donnee['id'] . '">Supprimer</a></p>';
                        echo '<p><a href="projet.php?id=' . $donnee['id'] . '">Modifier</a></p>';
                        
                    }
                ?>
                
            </div>
        </div>
        <?php
            include_once './include/footer/footer.php'
        ?>
    </body>
</html>