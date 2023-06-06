<?php 
session_start();
require('actions/posts/showArticleContentAction.php');
require('actions/posts/postAnswerAction.php');
require('actions/posts/showAllAnswersOfPostAction.php')
?>

<!DOCTYPE html>
<html lang="en">
<link href="../CSS/article.css" rel="stylesheet"/>
<?php include 'includes/head.php' ?>
<body>

    <?php include 'includes/navbar.php' ?>

    <div class="container">

    <?php
        

        if(isset($errorMsg)){
            echo $errorMsg;
        }

        if(isset($Post_publication_date)){
            ?>
                <section class="container-post">
                    <h1> <?= $Post_title ;?> </h1>
                    <h3 class="tags-post"> <?= $Post_tag ;?> </h3>
                    <p> <?= $Post_content ;?> </p>
                    <small> <?= $Post_pseudo_author ;?> </small>
                    <small> <?= $Post_publication_date ;?> </small>
                </section>

                <section>
                     <form class="form-post" method="POST">
                        <label for="">Réponse</label>
                        <textarea name="answer"></textarea>
                        <button type="submit" name="validate" >Répondre</button>
                     </form>

                    <?php
                        while($answer = $getAllAnswersOfThisPost->fetch()){
                            ?>
                                <div class="comment-post">
                                    <div>
                                        <h3> <?= $answer['pseudo_auteur'] ;?> </h3>
                                    </div>
                                    <div>
                                        <p> <?= $answer['contenu'] ;?> </p>
                                    </div>
                                    <a class="sup" href="actions/posts/deleteAnswerAction.php?id=<?php echo $answer['id']; ?>"> Supprimer</a> 
                                </div>
        
                            <?php
                        }
                    ?>

                </section>


            <?php
        }

    ?>
    </div>

</body>
</html>