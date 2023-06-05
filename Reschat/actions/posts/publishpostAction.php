<?php
require('actions/database.php');

if(isset($_POST['validate'])){

    if(!empty($_POST['title']) AND !empty($_POST['content']) AND !empty($_POST['tag'])){
        
        $post_title = htmlspecialchars($_POST['title']);
        $post_tag = htmlspecialchars($_POST['tag']);
        $post_content = nl2br(htmlspecialchars($_POST['content']));
        $post_date = date('d/m/Y');
        $post_id_author = $_SESSION['id'];
        $post_pseudo_author = $_SESSION['pseudo'];

        $insertQuestionOnWebsite = $bdd->prepare('INSERT INTO posts(titre, tags, contenu, id_auteur, pseudo_auteur, date_publication)VALUES(?, ?, ?, ?, ?, ?)');
        $insertQuestionOnWebsite->execute(
            array(
                $post_title, 
                $post_tag,
                $post_content, 
                $post_id_author, 
                $post_pseudo_author, 
                $post_date
            )
        );
        
        $successMsg = "Votre post a bien été publié sur le site";

        header('Location: index.php');
        exit();
        
    }else{
        $errorMsg = "Veuillez compléter tous les champs...";
    }

}