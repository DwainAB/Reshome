<?php
 require('actions/posts/publishpostAction.php');

?>
<!DOCTYPE html>
<html lang="fr">
    
<?php include 'includes/head.php'; ?>
<body>
    <form className="form-signup" method="POST">
        <?php if(isset($errorMsg)){
            echo '<p>'.$errorMsg.'</p>';
            }elseif(isset($successMsg))
            echo '<p>'.$successMsg.'</p>';
             ?>
        <label for="">Titre du post</label>
        <input class="post post-title" type="text" name="title"/>
        <label for="">Tags du post</label>
        <input class="post post-title" type="text" name="tag"/>
        <label for="">Le post</label>
        <textarea class="post post-text" name="content"></textarea>
        <button class="btn-post" type="submit" class="btn-form" name="validate" >Poster</button>
    </form>
    
<script src="../JS/index.js"></script>
</body>
</html>