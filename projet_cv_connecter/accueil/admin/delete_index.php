<?php
    $id = intval($_GET['id']);

    $db = new PDO('mysql:host=localhost;dbname=projet-cv-connecter;charset=utf8','root','');
    $rq = $db->prepare('DELETE FROM user WHERE id=?');
    $rq->execute([$id]);

    header('location: index.php');