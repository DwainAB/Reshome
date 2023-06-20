<footer>
    <p class="choice-lang">FR <img src="./public/CSS/Assets/arrowdown.png" alt=""></p>
    <div class="info-footer">
        <div class="info-footer-img">
            <img src="./public/CSS/Assets/logo.svg" alt="">
        </div>
        <h2>+ 33 01 81 93 38 27</h2>
        <p>SAINT GERMAIN DES PRES 6 PARIS</p>
    </div>
    <div class="container-social">
        <div class="social">
            <img src="./public/CSS/Assets/facebook.svg" alt="">
        </div>
        <div class="social">
            <img src="./public/CSS/Assets/instagram.svg" alt="">
        </div>
        <div class="social">
            <img src="./public/CSS/Assets/youtube.svg" alt="">
        </div>
    </div>
    <div class="mention">
        <div class="mention-doc">
            <p>2023 @ RESHOME RESIDENCE COMPAGNY<br>
           <span>DOCUMENTATION</span></p>
        </div>
        <div class="websiteBy">
            <p>SITE BY<br>
            <span>RESHOME</span></p>
        </div>
    </div>
</footer>

<style>
    footer{
    padding-top: 5%;
    background-color: var(--secondary-color);
}

.info-footer-img img{
    width: 80px;
    height: 80px;
}

.info-footer-img{
    width: 80px;
    margin: 0 auto;
}

.info-footer h2{
    color: var(--primary-color);
    text-align: center;
    margin-bottom: 10px;
}

.info-footer p{
    color: white;
    font-family: var(--primary-font);
    font-size: 2vw;
    font-weight: 500;
    width: 20%;
    margin: 0 auto;
    text-align: center;
}

.container-social{
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    margin: 5% auto;
    height: 20%;
}

.social{
    display: flex;
    align-items: center;
    justify-content: center;
    width: 4.5rem;
    height: 4.5rem;
    border-radius: 50%;
    border: 2px solid var(--primary-color);
    margin-right: 20px;
}

.container-social img{
    width: 40%;
    height: 40%;
}

.mention{
    display: flex;
    justify-content: space-between;
    margin: 5%;
}

.mention p {
    color: rgba(107, 107, 107, 1);
    font-size: 2vw;
    font-family: var(--primary-font);
    font-weight: 500;
    margin-left: 10%;
    margin-top: 60px;
}
.mention-doc p{
    margin-left: 10%;
}

.mention-doc p span{
    color: white;
}

.websiteBy p{
    text-align: end;
    margin-right: 10%;
}

.websiteBy p span{
    color: white;
}

.choice-lang{
    font-family: var(--primary-font);
    font-weight: 500;
    font-size: 1rem;
    color: white;
    margin-left: 90px;
    display: flex;
    align-items: center;
    margin-bottom: -10px;
}

.choice-lang img{
margin-left: 10px;
}
</style>