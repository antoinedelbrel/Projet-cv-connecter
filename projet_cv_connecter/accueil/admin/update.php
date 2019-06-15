<?php
    $id = intval($_POST['id']);
    $nom = $_POST['Nom'];

    $db = new PDO('mysql:host=localhost;dbname=projet-cv-connecter;charset=utf8','root','');
    $rq = $db->prepare('UPDATE compétence SET Nom = ? WHERE id=?');
    $rq->execute([$nom,$id]);

    header('location: cv.php');
    