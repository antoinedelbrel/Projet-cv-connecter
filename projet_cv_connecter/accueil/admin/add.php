<?php
    if(isset($_POST['Nom']) && !empty($_POST['Nom'])){
        $nom = $_POST['Nom'];

        $db = new PDO('mysql:host=localhost;dbname=projet-cv-connecter;charset=utf8','root','');
        $req = $db->prepare('INSERT INTO compétence(Nom) VALUES(?, ?)');
        $req->execute([$nom]);

        header('location: cv.php');
    }