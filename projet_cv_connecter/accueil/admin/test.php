<?php
    $id = intval($_POST['id']);
    $nom = $_POST['nom']; 

    $db = new PDO('mysql:host=localhost;dbname=projet-cv-connecter;charset=utf8','root','');
    $request = $db->prepare('UPDATE projet SET nom = ? WHERE id=?');
    $request->execute([$nom,$id]);
    
    header('location: projet.php');