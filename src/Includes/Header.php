<div class="container-header">
    <img class="img-background" src="./public/CSS/Assets/backgrounds.png" alt="">

    <h1 class="header-title">
        VICTORY PARK <span class="header-title-color">Residence</span>
    </h1>

    <div class="container-header-info">
        <img src="./public/CSS/Assets/img-info-header.png" alt="">
        <div class="header-info">
            <p class="header-info-text-color">LUXURY RESIDENCE</p>
            <P>+33 7 80 10 23 51</P>
        </div>
    </div>
</div>

<style>
    .img-background{
    width: 100%;
    height: 800px;
    object-fit: cover;
    position: absolute;
    top: 0;
    z-index: -999;
}

.header-title{
    color: white;
    position: absolute;
    left: 10%;
    width: auto;
    top: 40%;
    font-weight: 400;

}

@media screen and (max-width: 1000px) {
    .header-title {
    font-family: 'saonara';
    font-size: 9vw;
    }
}
@media screen and (max-width: 1120px) {
    .container-header-info{
        display: none;
    }
}

.header-title-color{
    font-family: var(--accent-font);
    color: var(--primary-color);
    font-weight: 400;
}

@media screen and (min-width:1120px) {
.container-header-info{
    display: flex;
    padding-left: 15px;
    position: absolute;
    top: 80%;
    right: 5%;
    background-color: white;
    width: 25%;
    height: 10%;
    padding: 5px 5px;
    align-items: center;
    border-radius: 50px;
}

.container-header-info img{
width: 20%;
height: 80%;
}

.header-info p{
   font-size: 1,5vw;
   font-family: 'poppins';
   margin: 0;
   padding: 0;
}
}

.header-info-text-color{
    color: var(--primary-color);
}

.header-info{
    margin-left: 20px;
}


</style>