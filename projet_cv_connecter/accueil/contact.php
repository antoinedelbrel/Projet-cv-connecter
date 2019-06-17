<!DOCTYPE html>
<html>
    <head>
        <title>CONTACT</title>
        <meta charset = "utf-8">
        <link rel="stylesheet" href="./admin/css/contact.css">
        <link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans|Work+Sans" rel="stylesheet">
    </head>
    <body>
        <?php
        include_once './includes/header.php';
        ?>
       
        <h2>Contact</h2>
        <div id="parent">
            <div id="contact">
                
                <!--<form action="./admin/traitement_formulaire.php" method="post" id="block">-->
                <form method="post" action="./admin/traitement_formulaire.php">  
                    <div id="nom">
                        <label for="name">Nom :</label>
                        <input type="text" class="name" name="user_name">
                    </div>
                    <div id="prenom">
                        <label for="name">Prénom :</label>
                        <input type="text" class="surname" name="prenom">
                    </div>
                    <div id="email">
                        <label for="mail">E-mail :</label>
                        <input type="email" class="mail" name="user_mail">
                    </div>
                    <div id="objet">
                        <label for="object">Objet :</label>
                        <input type="text" class="object" name="objet">
                    </div>
                    <div id="message">
                        <label for="msg">Message :</label>
                        <textarea class="msg" placeholder="Entrez votre message" name="user_message" cols="50" rows="10"></textarea>
                    </div>
                    <div id="button">
                        <input type="submit" value="Envoyer">
                    </div>
                </form>
            </div>
            
            <div id="second_block">
                
                <h2 class="coor">Coordonées</h2>
                <div id="coordonees">
                    <div class="gauche">
                        <p>Adresse :</p>
                        <p>Ville :</p>
                        <p>Téléphone :</p>
                        <p>Adresse email :</p>
                        <p>Adresse email pro :</p>
                    </div>
                    <div class="droite">
                        <p>10 rue du cloître</p>
                        <p>33000 Bordeaux</p>
                        <p>06-76-06-21-25</p>
                        <p>antoinedelbrel@gmail.com</p>
                        <p>antoine.delbrel@ynov.com</p>
                    </div>
                </div>
                <div id="loisir">
                    <h2 class="lois">Loisir</h2>
                    <p>Crossfit</p>
                    <p>Football</p>
                    <p>Ski</p>
                    <p>Sport de combat</p>
                </div>
            </div>
        </div>
        <?php 
            include_once './admin/include/footer/footer.php'
        ?>    
        
    </body>
</html>