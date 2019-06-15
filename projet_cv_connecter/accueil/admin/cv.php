<?php
    if(isset($_GET['id'])){
        $id = intval($_GET['id']);
        $db = new PDO('mysql:host=localhost;dbname=projet-cv-connecter;charset=utf8','root','');
        $rq = $db->prepare('SELECT * FROM compétence WHERE id=?');
        $rq->execute([$id]);
    }
   
   
    
    
?>

<!DOCTYPE html>
<html>
    <head>
        <title>CV</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="./css/cv.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans|Work+Sans" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">
    </head>
    <body>
        <?php
        include_once './include/header/header.php';
        ?>
        
        <div id="parent">
            
            <div id="third_block">
                <h2 class="cv">CV</h2>
                <div id="haut">
                    <div id="profile">
                        <h3>Profile</h3>
                        <p class="profil">Né le 07/11/1999</p>
                        <p class="profil">Je m'appelle Antoine Delbrel. <br>Je suis étudiant au campus d'Ynov en informatique à Bordeaux<br> et je cherche de jour en jour à développer mes connaissances et mes compétences dans ce domaine.</p>
                    </div>
                    <div id="competence">
                        <h3>Compétence</h3>
                        <div id="niveau">
                            <div id="Langage">
                            <?php
                                while($donnee = $rq->fetch()){
                                    echo '<p>'. $donnee['nom'] . '</p>';
                                    echo '<p><a href="delete_projet.php?id=' . $donnee['id'] . '">Supprimer</a></p>';
                                    echo '<p><a href="projet.php?id=' . $donnee['id'] . '">Modifier</a></p>';
                                    ?>
                                    <p>HTML5 & CSS3</p>
                                    <p>Javascript</p>
                                    <p>JQuery</p>
                                    <p>Python</p>
                                    <p>Langage C</p>
                                    <p>Langage R</p>
                                    <p>SQL</p>
                                    <p>PHP</p>
                                    <form method="POST" action="update.php">
                                        <input type="text" name="nom" value="">
                                        <input type="submit" value="Ajouter">
                                    </form>
                                    <!-- <a class="add" href="add.php">Ajouter</a> --><?php
                                }
                                ?>
                                
                            </div>
                            <div id="barre">
                                <div id="htmlcss">
                                    <div id="html"></div>                                   
                                </div>                                
                                <div id="js">
                                    <div id="djs"></div>
                                </div>                                
                                <div id="jquery">
                                    <div id="jq"></div>                                   
                                </div>
                                <div id="python">
                                    <div id="py"></div>                                  
                                </div>
                                <div id="langageC">
                                    <div id="c"></div>                                    
                                </div>
                                <div id="langageR">
                                    <div id="r"></div>                                    
                                </div>
                                <div id="langagesql">
                                    <div id="sql"></div>                                    
                                </div>
                                <div id="langagephp">
                                    <div id="php"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    

                </div>
                <div id="bas">
                    <div id="formations">
                        <h3>Formations</h3>
                        <p class="format°">Juin 2015 : Brevet des colleges</p>
                        <p class="format°">Annee 2017-2018 : Baccalaureat scientifique specialité mathematique</p>
                        <p class="format°">2018 : Formation informatique à Ynov Campus à Bordeaux</p>
                    </div>
                    <div id="exp_pro">
                        <h3>Expérience professionnelles</h3>
                        <p class="exp">Octobre 2014 : Stage de troisieme à sport 2000 à Pau</p>
                        <p class="exp">Ete 2016 : Castrage de mais dans une ferme du bearn</p>
                        <p class="exp">Juillet-aout 2019 : Stage en developpement web chez <a class="kairos" href="https://www.kairos-agency.com/" target="_blank" alt="kairos">kairos-agency</a></p>
                    </div>
                </div>
            </div>
        </div>  
        <?php
        include_once './include/footer/footer.php'
        ?>     
    </body>
</html>