<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="./admin/css/id.css">
        <link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans|Work+Sans" rel="stylesheet">
        <title>Connexion</title>
    </head>
    <body>

        <?php
        include_once './admin/include/header/header.php';
        ?>
        
        <div id="container">
            <!-- zone de connexion -->
            
            <form action="./admin/test_co.php" method="POST">
                <h1>Connexion</h1>
                
                <label><b>Nom d'utilisateur</b></label>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="password" required>

                <input type="submit" id='submit' value='LOGIN' >
                
            </form>
        </div>
    </body>
</html>