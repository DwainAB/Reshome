<div class="container-nav">
            <input type="text" placeholder="Search..." />
            <ul class="links-nav">
                <li class="link-nav"><img class="active-link" src="../CSS/Assets/home.png" alt="home btn"/><a href="index.php">Home</a></li>
                <li class="link-nav"><img src="../CSS/Assets/explorer.svg" alt="explorer btn"/><a href="">Publier</a></li>
                <li class="link-nav"><img src="../CSS/Assets/friends.png" alt="friends btn"/><a href="my-posts.php">Mes posts</a></li>
                <li class="link-nav"><img src="../CSS/Assets/games.png" alt="games btn"/>Games</li>
            </ul>
            <div class="section-nav-right">
                <ul class="actions-nav">
                    <li class="action-nav"><img src="../CSS/Assets/btn-messages.png" alt="message btn"/></li>
                    <li class="action-nav"><img src="../CSS/Assets/btn-notification.png" alt="notif btn"/></li>
                </ul>
                <div class="user-nav ">
                    <p class="name-user-nav"><?php echo $_SESSION['pseudo']?></p>
                    <img class="arrowdown" src="../CSS/Assets/arrowdown.png" alt="">
                </div>

                <div class="menu-nav logout-noactive">
                    <p class="text-menu-nav"><a href="./actions/users/logoutAction.php">Logout</a></p>
                </div>
            </div>

            <div class="svg-all">
                <div class="svg-1"></div>
                <div class="svg-2"></div>
                <div class="svg-3"></div>
                <div class="svg-4"></div>
           </div>
</div>


