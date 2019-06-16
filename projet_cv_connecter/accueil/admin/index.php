<?php
    $db = new PDO('mysql:host=localhost;dbname=projet-cv-connecter;charset=utf8','root','');
    $rq = $db->query('SELECT * FROM user');
?>
<!DOCTYPE html>
<html>
	<head>
        <title>Antoine Delbrel</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="./css/style.css"> 
        <link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans|Work+Sans" rel="stylesheet">
	</head>
	<body>
        <div id="first_block">
                <nav id="nav">
                    <ul>
                        <li><a class="lien" href="index.php" alt="index">ACCUEIL</a></li>
                        <li><a class="lien" href="cv.php" alt="cv">CV</a></li>
                        <li><a class="lien" href="projet.php" alt="projet">PORTFOLIO</a></li>
                        <li><a class="lien" href="contact.php" alt="contact">CONTACT</a></li>
                        <li><a class="lien" href="deconnexion.php" alt="deco">DECONNEXION</a></li>
                    </ul>
                </nav>
                <h1><a class="titre" href="index.php" alt="titre">Antoine Delbrel</a></h1>
            </div>
        <div id="second">
            <div id="third">
                <h2 class="titre">Bienvenue sur mon site web.</h2> 
                <p class="info">Vous trouverez sur ce site toutes les informations me concernant. Mon CV, 
                mes passions ainsi que mes projets professionnels et personnels.</p>
                <?php
            while($donnee = $rq->fetch()){
                echo '<p>'.$donnee['id'] .'</p>';
                echo '<p><a href="delete_index.php?id=' . $donnee['id'] .'">Supprimer</a></p>';
            
            
                 echo '<p><a href="add_index.php?id=' . $donnee['id'] .'">Modifier</a></p>';
            }
            ?>
            
                
            </div>
        </div>
        <?php
            include_once './include/footer/footer.php'
        ?>     
        
	</body>
</html>