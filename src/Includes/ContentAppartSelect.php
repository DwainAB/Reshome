<div class="content-appart-select">

    <div class="appart-select">
        <div class="info-appart-select">
            <h1 class="title-appart-select"></h1>
            <p class="neighborhood-appart-select"></p>
            <p class="price-appart-select"><span class="price"></span>€ / <span class="price-text">night</span></p>
            <div class="reserv-appart-select">
                <button class="btn-reserv-appart-select">CHECK AVAILABILITY</button>
                <div class="container-img-reserv-appart-select">
                    <img class="img-reserv-appart-select" src="./public/CSS/Assets/calendar.png" alt="">
                </div>
            </div>
            <ul class="list-feature-appart-select">
                <li class="feature"><img src="./public/CSS/Assets/Vector.png" alt="">Kitchen</li>
                <li class="feature"><img src="./public/CSS/Assets/Vector.png" alt="">Kitchen</li>
                <li class="feature"><img src="./public/CSS/Assets/Vector.png" alt="">Kitchen</li>
                <li class="feature"><img src="./public/CSS/Assets/Vector.png" alt="">Kitchen</li>
                <li class="feature"><img src="./public/CSS/Assets/Vector.png" alt="">Kitchen</li>
                <li class="feature"><img src="./public/CSS/Assets/Vector.png" alt="">Kitchen</li>
                <li class="feature"><img src="./public/CSS/Assets/Vector.png" alt="">Kitchen</li>
                <li class="feature"><img src="./public/CSS/Assets/Vector.png" alt="">Kitchen</li>
            </ul>
            <p class="description-appart-select"></p>
        </div>

        <div class="carousel-appart-select">
            <div class="carousel-appart-select-arrowleft"><img src="./public/CSS/Assets/arrowleft.png" alt=""></div>
            <div class="carousel-appart-select-arrowright"><img src="./public/CSS/Assets/arrowright.png" alt=""></div>
            <div class="container-img-carousel-appart">
            </div>
        </div>
    </div>

    <div class="container-btn-content-appart-select">
        <button class="btn-content-appart-select">Book</button>
    </div>

</div>

<style>
    .content-appart-select{
    padding-bottom: 5%;
}

.appart-select{
    display: flex;
    flex-direction: row;
    margin-left: 90px;
    margin-right: 90px;
}

@media screen and (max-width:900px) {
    .appart-select {
        flex-direction: column;
    }
    .carousel-appart-select, .info-appart-select {
        width: 100%;
        margin: auto;
        padding-bottom: 5%;
    }
}

.carousel-appart-select, .info-appart-select{
    width: 50%;
}

.title-appart-select{
    font-size: 2vw;
    font-weight: 400;
    font-family: var(--secondary-font);
}

.neighborhood-appart-select{
    font-size: 1vw;
    font-weight: 500;
    font-family: var(--primary-font);
}

.price-text{
    font-size: 1.25vw;
}

.price-appart-select{
    font-size: 2vw;
    font-weight: 400;
    font-family: var(--secondary-font);
}

.container-img-reserv-appart-select{
    display: flex;
    align-items: center;
    justify-content: center;
    height: 64px;
    width: 60px;
}

.reserv-appart-select{
    width: 100%;
    height: 60px;
    display: flex;
    flex-direction: row;
}

.btn-reserv-appart-select{
    width: 380px;
    background-color: #1C232C;
    font-size: 1.5vw;
    font-weight: 500;
    font-family: var(--primary-font);
    border: 0;
    border-left: 5px solid var(--primary-color);
    color: white;
    text-align: left;
}

@media screen and (max-width:900px) {
    .btn-reserv-appart-select{
        width: 100%;
    }
}

.img-reserv-appart-select{
    height: 24px;
    width: 24px;
}

.list-feature-appart-select{
    width: 75%;
    height: auto;
    display: flex;
    flex-wrap: wrap;
    flex-direction: row;
    margin-top: 2% 0 0 0;
}

@media screen and (max-width:900px) {
    .list-feature-appart-select{
        width: 100%;
    }
}

.list-feature-appart-select li img{
    width: auto;
    height: auto;
    margin-right: 10px;
}

.list-feature-appart-select li{
    font-size: 1.5vw;
    font-family: var(--primary-font);
    color: #a8a8a8;
    font-weight: 400;
    margin-right: 60px;
}

.description-appart-select{
    font-family: var(--primary-font);
    font-size: 1,5vw;
    font-weight: 500;
    color: #1C232C;
}

.carousel-appart-select{
    position: relative;
}

.carousel-appart-select-arrowleft, .carousel-appart-select-arrowright{
    position: absolute;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background-color: var(--secondary-color);
    border: 2px solid var(--primary-color);
    display: flex;
    align-items: center;
    justify-content: center;
    top: 50%;
}

.carousel-appart-select-arrowleft:hover, .carousel-appart-select-arrowright:hover{
cursor: pointer;
}

.carousel-appart-select-arrowleft{
    z-index: 9999;
    left: 40px;
}
.carousel-appart-select-arrowright{
    z-index: 9999;
    right: 40px;
}

.img-carousel-appart-select{
    width: 100%;
    height: 504px;
    object-fit: cover;
    position: absolute;
}

.btn-content-appart-select{
    width: 30%;
    height: 100%;
    background-color: var(--secondary-color);
    border: 2px solid var(--primary-color);
    font-size: 3vw;
    font-weight: 400;
    font-family: var(--secondary-font);
    color: white;
}

.btn-content-appart-select:hover{
cursor: pointer;
}

.container-btn-content-appart-select{
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto;
    margin-top: 60px;
}
</style>