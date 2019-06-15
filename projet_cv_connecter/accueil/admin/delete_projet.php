<?php
    $id = intval($_GET['id']);

    $database = new PDO('mysql:host=localhost;dbname=projet-cv-connecter;charset=utf8','root','');
    $rq = $database->prepare('DELETE FROM projet WHERE id=?');
    $rq->execute([$id]);

    header('location: projet.php');