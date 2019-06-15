<?php
    session_start();
    if(isset($_POST['username']) && !empty($_POST['username'])){
        $username = $_POST['username'];
        $mdp = $_POST['password'];
        if(isset($mdp) && !empty($mdp)){
            $database = new PDO('mysql:host=localhost;dbname=projet-cv-connecter;charset=utf8','root','');
            $requete = $database->prepare('SELECT login, mot_de_passe FROM user WHERE login=?');
            $requete->execute([$username]);
            $donnee = $requete->fetch();
            if($username == $donnee['login'] && $mdp == $donnee['mot_de_passe']){
                header('location:index.php');
                $_SESSION['is_connected'] = true;
            }else{
                echo 'Not connected';
            }
        }else{

        }
    }else{
        
    }
