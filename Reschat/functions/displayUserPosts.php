<?php

function displayUserPosts($posts) {
$output = '<div class="container-mypost">';
    while($post = $posts->fetch(PDO::FETCH_ASSOC)){
    $output .= '
    <div class="middle-second-right">
        <div class="info-post">
            <div class="content-post">
                <h1 class="middle-second-h1">' . $post['titre'] . '</h1>
                <p class="middle-second-p">' . $post['contenu'] . '</p>
            </div>
            <div class="profil-info">
                <h6 class="profil-info-h6">' . $post['pseudo_auteur'] . '</h6>
                <p class="profil-info-p">' . $post['date_publication'] . '</p>
            </div>
        </div>
        <div class="middle-second-bottom">
            <div class="middle-profil"></div>
            <a href="article.php?id=' . $post['id'] . '">Acceder au post</a>
            <a href="edit-posts.php?id=' . $post['id'] . '">Modifier le post</a>
            <a href="actions/posts/deletePostsActions.php?id=' . $post['id'] . '">Supprimer le post</a>
        </div>
    </div>';
    }
    $output .= '</div>';
return $output;
}
