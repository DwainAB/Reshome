
<?php 
    require('actions/users/securityAction.php');
    require('actions/posts/myPostsActions.php'); ?>

<!DOCTYPE html>
<html lang="fr">
<link href="../CSS/my-post.css" rel="stylesheet"/>
<?php include 'includes/head.php';?>
<body>
    <?php include 'includes/navbar.php'; ?>

    <div class="container-mypost">
    <?php 
    while($posts = $getAllMyPosts->fetch(PDO::FETCH_ASSOC)){

        ?>
            <div class="middle-second-right">
                <div class="info-post">
                    <div class="content-post">
                        <h1 class="middle-second-h1" > <?php echo $posts['titre']; ?> </h1>
                        <p class="middle-second-p" > <?php echo $posts['contenu'] ?> </p>
                    </div> 
                    <div class="profil-info">
                        <h6 class="profil-info-h6">  <?php echo $posts['pseudo_auteur'] ?> </h6>
                        <p class="profil-info-p"><?php echo $posts['date_publication'] ?></p>
                    </div> 
                </div>
                <div class="middle-second-bottom">
                        
                    <div class="middle-profil">
                    </div>
                    <a href="article.php?id=<?php echo $posts['id'] ?>">Acceder au post</a>
                    <a href="edit-posts.php?id=<?php echo $posts['id'] ?>">Modifier le post</a> 
                    <a href="actions/posts/deletePostsActions.php?id=<?php echo $posts['id'] ?>">Supprimer le post</a> 
                </div>
            </div>
        <?php
    }
    ?>
    </div> 

<script src="../JS/index.js"></script>
</body>
</html>