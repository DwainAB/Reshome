<?php 
require('actions/users/securityAction.php');
require('actions/posts/ShowAllPostsAction.php');
?>
<!DOCTYPE html>
<html lang="fr"> 
<?php include 'includes/head.php'; ?>
<body>
    <?php include 'includes/navbar.php'; ?>
    <div class="container-index">

        <?php include 'menu-left.php'?>

        <div class="container-central">
            <div class="container-search">
                <?php include 'publish-post.php';?>

                <form method="GET" >
                    <h3>Recherche par tag</h3>
                    <input class="bar-search-tag" type="search" name="search">
                    <button class="btn-search-tag" type="submit" >Valider</button>
                </form>
            </div>

            <br>

            <div class="container-allpost">
                <?php
                    while($post = $getAllPosts->fetch()){
                ?>
                    <div class="middle-second-right">
                        <h1 class="middle-second-h1" > <?php echo $post['titre']; ?> </h1>
                        <p class="middle-second-p" > <?php echo $post['tags'] ?> </p>
                        <p class="middle-second-p" > <?php echo $post['contenu'] ?> </p>
                        <div class="middle-second-bottom">
                                
                            <div class="middle-profil">
                                    <div class="profil-info">
                                        <h6 class="profil-info-h6"> Publié par <?php echo $post['pseudo_auteur'] ?> </h6>
                                        <p class="profil-info-p"><?php echo $post['date_publication'] ?></p>
                                        <a class="btn-post" href="article.php?id=<?php echo $post['id']; ?>">Accéder à la question</a>
                                        <?php
                                            if($_SESSION['id'] == 5 || $_SESSION['id'] == $post['id_auteur']){
                                                ?>
                                                     <a class="btn-post sup" href="actions/posts/deletePostsActions.php?id=<?php echo $post['id'] ?>">Supprimer le post</a> 
                                                <?php
                                                
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    </div>
                <?php
                    }
                ?>
            </div>
       
        </div>
        
        <?php include 'menu-right.php'?>
    
    </div>


<script src="../JS/index.js"></script>    
</body>
</html>