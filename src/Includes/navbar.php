<div class="container-navbar">

        <ul class="info-left">
            <li class="info">ABOUT</li>
            <li class="info">APPARTMENT</li>
            <li class="info">CONTACT</li>
            <li class=info-left-resp> APPARTMENT</li>
            <li class="info-left-resp li-border-resp">SEARCH</span></li>

        </ul>

        <img class="img-nav" src="./public/CSS/Assets/logo.svg" alt="">

        <ul class="info-right">
            <li class="info li-border">SEARCH</span></li>
            <li class="info">LOGIN</li>
            <li class="info">REGISTER</li>
            <li class=info-right-resp> LOGIN</li>
            <li class=info-right-resp> REGISTER</li>

        </ul>
</div>


<style>
.info-left{
    display: flex;
    align-items: center;
    width: 100%;
    justify-content: space-between;
    margin-left: 5%;
    margin-right: 5%;
    color: white;
    padding: 0;
}

.img-nav{
    width: 80px;
    height: 80px;
    margin-left: 60px;
}

.info-right{
    display: flex;
    align-items: center;
    width: 100%;
    justify-content: space-between;
    margin-left: 5%;
    margin-right: 5%;
    color: white;
}

.li-border{
    display: flex;
    align-items: center;
    justify-content: center;
    height: auto;
    border: 2px solid var(--primary-color);
    border-radius: 16px;
    width: 20%;
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
    color: white;
}

@media screen and (min-width:800px) {
    .info-left-resp, .info-right-resp {
        display: none;
    }
}
@media screen and (max-width:800px) {
    .info-left-resp, .info-right-resp {
        display: block;
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
}

</style>