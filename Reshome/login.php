<?php require('actions/users/loginAction.php');
require ('actions/users/signupAction.php') ;?>

<!DOCTYPE html>
<html lang="en">
<link href="../CSS/login.css" rel="stylesheet">    
<?php include 'includes/head.php'; ?>
<body>

    <div class="container-form">
        <form class="form-signup" method="POST">
            <?php if(isset($errorMsg)){echo '<p>'.$errorMsg.'</p>';} ?>
            <h1>Connexion</h1>
            <input type="email" placeholder="Adresse mail" name="email"  />
            <input type="password" placeholder="Mot de passe" name="password" />
            <button type="submit" class="btn-form" name="validate" >Se connecter</button>
        </form>
        <form class="form-login flip-active" method="POST">
            <?php if(isset($errorMsg)){echo '<p>'.$errorMsg.'</p>';} ?>
            <h1>Inscription</h1>
            <input type="text" placeholder="Nom d'utilisateur" name="pseudo"/>
            <input type="email" placeholder="Adresse mail" name="email"  />
            <input type="password" placeholder="Mot de passe" name="password" />
            <input type="password" placeholder="Confirmez votre mot de passe" name="confirmation" />
            <button type="submit" class="btn-form" name="validate" >S'inscrire</button>
        </form>
        <p class="flip-text"><img src="../CSS/Assets/line.svg" alt="" />Nouveau chez Reschat<img src="../CSS/Assets/line.svg" alt="" /></p>
        <button class="flip-button">je n'ai pas de compte je m'inscris</button>
    </div>
        <div class="svg-all">
          <div class="svg-1"></div>
          <div class="svg-2"></div>
          <div class="svg-3"></div>
          <div class="svg-4"></div>
        </div>

<script src="../JS/log.js"></script>
</body>
</html>