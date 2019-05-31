<!DOCTYPE html>
<html>
    <head>
        <title>CONTACT</title>
        <meta charset = "utf-8">
        <link rel="stylesheet" href="contact.css">
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto">
        <link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">
    </head>
    <body id="container">
        <header id="tete">
            <nav id="nav">
                <ul>
                    <li><a class="lien" href="index.php" alt="index">ACCUEIL</a></li>
                    <li><a class="lien" href="cv.php" alt="cv">CV</a></li>
                    <li><a class="lien" href="projet.php" alt="projet">PROJETS</a></li>
                    <li><a class="lien" href="contact.php" alt="contact">CONTACT</a></li>
                    <li><a class="lien" href="id.php" alt="identification">S'IDENTIFIER</a></li>
                </ul>
            </nav>
            <h1><a class="titre" href="index.php" alt="titre">Antoine Delbrel</a></h1>
        </header>
        <hr>
        <h2>Contact</h2>
        <form action="/ma-page-de-traitement" method="post" id="block">
			<div id="nom">
				<label for="name">Nom :</label>
				<input type="text" id="name" name="user_name">
			</div>
			<div id="email">
				<label for="mail">e-mail :</label>
				<input type="email" id="mail" name="user_mail">
			</div>
			<div id="message">
				<label for="msg">Message :</label>
				<textarea id="msg" name="user_message"></textarea>
			</div>
			<div><input type="submit" value="Envoyer"></div>
		</form>

    </body>
</html>