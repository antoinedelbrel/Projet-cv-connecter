<?php
    $id = intval($_GET['id']);

    $db = new PDO('mysql:host=localhost;dbname=projet-cv-connecter;charset=utf8','root','');
    $rq = $db->prepare('DELETE FROM compétence WHERE id=?');
    $rq->execute([$id]);

    header('location: cv.php')

