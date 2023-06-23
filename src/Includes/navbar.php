<div class="container-navbar">
    <ul class="info-left">
        <li class="info"><a href="http://localhost/Reshome/index.php">Home</a></li>
        <li class="info"><a href="http://localhost/Reshome/PageAppart.php">Apartment</a></li>
        <li class="info"><a href="">Contact</a></li>
        <li class=info-left-resp> <a href="http://localhost/Reshome/PageAppart.php">Apartment</a></li>
        <li class="info-left-resp li-border-resp">Search</span></li>
    </ul>

    <img class="img-nav" src="./public/CSS/Assets/logo.svg" alt="">

    <ul class="info-right">
        <li class="info"><a class="info-admin" href="http://localhost/Reshome/PageAdmin.php"></a></li>
        <li class="info li-border">Start a search <span class="img-li-border"><img src="./public/CSS/Assets/arrowdown.png" alt=""></span></li>
        <li class="info info-login"><a href="http://localhost/Reshome/PageSignup.php">Login</a></li>
        <li class="info info-logout">Logout</li>
    </ul>
</div>

<style>
    .container-navbar{
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-top: 45px;
    height: 190px;
    margin-top: 0;
    background: rgb(255,255,255);
    background: linear-gradient(0deg, rgba(255,255,255,0) 0%, rgba(0,0,0,1) 100%);
}

a{
    color: white;
    font-size: 1.5vw;
}
a:visited{
    color: white;
}

a:hover {
    color: black;
}

.info-left{
    display: flex;
    align-items: center;
    width: 100%;
    justify-content: space-between;
    margin-left: 5%;
    color: white;
    padding: 0;
}

.img-nav{
    width: 80px;
    height: 80px;
    margin-left: 130px;
}

.info-right{
    color: white;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-left: 5%;
    margin-right: 5%;
}

.li-border{
    display: flex;
    align-items: center;
    padding-left: 20px;
    height: 40px;
    border: 2px solid var(--primary-color);
    border-radius: 16px;
    width: 20%;
}

.img-li-border{
}

.li-border:hover {
    background-color: var(--primary-color);
    color: black;
}

.info-left li, .info-right li {
    margin-right: 10px;
    margin-left: 10px;
    cursor: pointer;
}

.info-left li:hover, .info-right li:hover {
    color: black;
}

.info-left-resp {
    display: flex;
    align-items: center;
    width: 100%;
    justify-content: space-between;
    margin-left: 5%;
    margin-right: 5%;
    color: white;
    padding: 0;
}

.info-right-resp {
    display: flex;
    align-items: center;
    width: 100%;
    justify-content: space-between;
    margin-left: 5%;
    margin-right: 5%;
    color: #fff;
}

@media screen and (min-width:800px) {
    .info-left-resp, .info-right-resp {
        display: none;
    }
}
@media screen and (max-width:800px) {
    .info-left-resp, .info-right-resp {
        display: block;
        color: white;
    }
    .info {
        display: none;
    }
    .li-border-resp{
    display: flex;
    align-items: center;
    justify-content: center;
    height: auto;
    border: 2px solid var(--primary-color);
    border-radius: 16px;
    width: auto
}
.li-border{
    display: none;
}
.img-nav {
    margin: 0;
    padding: 0;
    width: 40%;
    height: 40px;
}
.info-right-resp, .info-left-resp {
    padding: 0;
    margin: 0;
}
.info-left {
    padding-right: 60px;
}
.container-navbar {
    height: 10%;
}
}

.container-navbar {
    display: flex;
    flex-direction: row;
    padding-top: 2%;
}
</style>