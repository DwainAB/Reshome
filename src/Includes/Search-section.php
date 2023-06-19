<div class="container-search">
    <div class="container-slide1">
        <h2 class="title-search">
         SPECIFY <br>THE NUMBER <br> OF BEDROOMS
        </h2>
        <div class="container-btn-search">
            <button class="btn-search btn-bedrooms"><h2>1</h2></button>
            <button class="btn-search btn-bedrooms"><h2>2</h2></button>
            <button class="btn-search btn-bedrooms"><h2>3</h2></button>
            <button class="btn-search btn-bedrooms"><h2>4</h2></button>
            <button class="btn-search btn-bedrooms"><h2>+</h2></button>
        </div>
        <div class="container-btn-slide">
            <div class="slide slide-color"></div>
            <div class="slide"></div>
            <div class="slide"></div>
            <div class="slide"></div>
        </div>
    </div>

    <div class="container-slide2">
        <h2 class="title-search title-search2">
            SPECIFY <br>THE AREA OF THE <br> APARTEMENT
        </h2>
        <div class="container-btn-search">
            <button class="btn-search btn-area"><h2>60</h2> <span class="m-carre"><br><h3>M²</h3></span></button>
            <button class="btn-search btn-area"><h2>100</h2><span class="m-carre"><br><h3>M²</h3></span></button>
            <button class="btn-search btn-area"><h2>140</h2><span class="m-carre"><br><h3>M²</h3></span></button>
            <button class="btn-search btn-area"><h2>200</h2><span class="m-carre"><br><h3>M²</h3></span></button>
        </div>
        <div class="container-btn-slide">
            <div class="slide"></div>
            <div class="slide slide-color"></div>
            <div class="slide"></div>
            <div class="slide"></div>
        </div>
    </div>

    <div class="container-slide3">
        <h2 class="title-search title-search3">
            SPECIFY <br>THE APPROXIMATE <br> COSTS
        </h2>
        <div class="container-btn-search">
            <button class="btn-search btn-price"><h2>200</h2> <span class="m-carre"><br><h3>€</h3></span></button>
            <button class="btn-search btn-price"><h2>300</h2>  <span class="m-carre"><br><h3>€</h3></span></button>
            <button class="btn-search btn-price"><h2>400</h2>  <span class="m-carre"><br><h3>€</h3></span></button>
            <button class="btn-search btn-price"><h2>420</h2>  <span class="m-carre"><br><h3>€</h3></span></button>
        </div>
        <div class="container-btn-slide">
            <div class="slide"></div>
            <div class="slide"></div>
            <div class="slide slide-color"></div>
            <div class="slide"></div>
        </div>
    </div>

    <div class="container-slide4">
        <h2 class="title-search title-search4">
            SPECIFY <br>THE APPROXIMATE <br> DISTRICT
        </h2>
        <div class="container-btn-search">
            <button class="btn-search btn-arr"><h2>7</h2><span class="m-carre"><br><h3>ARR</h3></span></button>
            <button class="btn-search btn-arr"><h2>8</h2><span class="m-carre"><br><h3>ARR</h3></span></button>
            <button class="btn-search btn-arr"><h2>10</h2><span class="m-carre"><br><h3>ARR</h3></span></button>
            <button class="btn-search btn-arr"><h2>16</h2><span class="m-carre"><br><h3>ARR</h3></span></button>
        </div>
        <div class="container-btn-slide">
            <div class="slide"></div>
            <div class="slide"></div>
            <div class="slide"></div>
            <div class="slide slide-color"></div>
        </div>
    </div>

    <div class="container-slide5">
        <h2 class="title-search title-search5">
            <span class="number-appart">25</span> APARTEMENTS <br><span class="title-color">FOUND</span> 
        </h2>
        <div class="container-btn-search container-btn-search5">
            <button class="btn-search btn-apart"><h2><img src="./public/CSS/Assets/Arrow 1.png" alt="arrow"></h2></button>
        </div>
        <div class="container-btn-slide">
            <button class="btn-slide-retry"><img src="./public/CSS/Assets/arrowrotateleft.png" alt="retry"> Restart</button>
        </div>
    </div>
</div>

<style>

.container-search{
    position: relative;
    height: 100vh;
    }
    
    .title-search{
        width: 100%;
        display: flex;
        text-align: center;
        justify-content: center;
        color:rgba(28, 35, 44, 1);
        position: absolute;
        top: 10%;
        z-index: 1;
    }
    
    .container-btn-search{
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: center;
        z-index: 2;
        margin-top: 10%;
        width: 100%;
        position: relative;
    }
    
    .btn-search{
        color: white;
        width: 15vw;
        height: 15vw;
        border: 2px solid var(--primary-color);
        border-radius: 50%;
        background-color: transparent;
        font-size: 5.5rem ;
        font-family: 'saonara';
        cursor: pointer;
        line-height: 0;
    }
    
    .btn-search:hover{
        background-color: var(--primary-color);
    }
    
    .container-btn-slide{
        display: flex;
        justify-content: center;
        margin-top: 50px;
    }
    
    .slide{
        margin-right: 10px;
        width: 10px;
        height: 10px;
        border-radius: 50%;
        background-color: rgba(28, 35, 44, 1);
    }
    
    .slide-color{
        background-color: var(--primary-color);
    }
    
    .container-slide1, .container-slide2, .container-slide3, .container-slide4,.container-slide5{
        background-color: var(--accent-color);
        width: 100%;
        padding-top: 788px;
        padding-bottom: 100px;
        position: absolute;
    }
    
    .container-slide2{
        z-index: 5;
        width: 0px;
        right: 0;
        overflow: hidden;
        transition: all 0.7s;
    }
    
    .m-carre{
        font-size: 1rem;
        color: var(--primary-color);
    }
    
    .title-search2{
        width: clamp(200px, 55%, 950px);
        left: 25%;
    }
    
    .title-search3{
        width: clamp(200px, 55%, 950px);
        left: 25%;
    }
    .title-search4{
        width: clamp(200px, 55%, 950px);
        left: 25%;
    }
    .title-search5{
        width: clamp(200px, 55%, 950px);
        left: 25%;
        color: var(--primary-color);
    }
    .title-color{
        color:rgba(28, 35, 44, 1);
    }
    
    .container-slide3{
        z-index: 6;
        width: 0px;
        right: 0;
        overflow: hidden;
        transition: all 0.7s;
    }
    
    .container-slide4{
        right: 0;
        overflow: hidden;
        z-index: 7;
        width: 0px;
        transition: all 0.7s;
    }
    
    .container-slide5{
        z-index: 7;
        width: 0;
        overflow: hidden;
        transition: all 0.7s;
    }
    
    .container-btn-search5{
        justify-content: center;
        width: 100%;
        left: 0;
    }
    
    .btn-slide-retry{
        color: var(--primary-color);
        display: flex;
        align-items: center;
        background-color: transparent;
        border: 0;
        cursor: pointer;
    }
    
    .btn-slide-retry img{
      margin-right: 10px;
    }
    
    .container-btn-search  h2 {
        margin: 10px;
        padding: 0;
    }
    .container-btn-search  h3 {
        margin: 0;
        padding: 0;
    }
</style>