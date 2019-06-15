<?php
    if(isset($_POST['nom']) && !empty($_POST['nom'])){
        $nom = $_POST['nom'];
        
        $db = new PDO('mysql:host=localhost;dbname=projet-cv-connecter;charset=utf8','root','');
        $rq = $db->prepare('INSERT INTO projet(nom) VALUE(?, ?)');
        $rq->execute([$nom]);

        header('location: projet.php');
    }