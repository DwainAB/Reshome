<div class="container-choice">
    <img class="container-choice-img" src="./public/CSS/Assets/backgroundChoice.png" alt="">
    <h1 class="container-choice-title">Make your choice</h1>
    <div class="choice">
        <h2 class="choice-title">13</h2>
        <p class="choice-text">SPACIOUS<br>APARTEMENTS</p>
    </div>
    <div class="choice">
        <h2 class="choice-title">26</h2>
        <p class="choice-text">RESIDENCES<br>WITH A PRIVATE PATIO</p>
    </div>
    <div class="choice">
        <h2 class="choice-title">07</h2>
        <p class="choice-text">PENTHOUSE<br>WITH A PRIVATE<br>TERRACE</p>
    </div>
</div>

<style>
    .container-choice{
    display: flex;
    position: relative;
    margin-top: 948px;
    align-items: center;
    justify-content: space-around;
    height: 1000px;
    z-index: 10;
}

.container-choice-img{
    position: absolute;
    width: 100%;
    z-index: -5;
    height: 1000px;
    object-fit: cover;
    height: 100%;
}

.container-choice-title{
    position: absolute;
    /* top: 300px; */ 
    color: var(--primary-color);
    font-family: var(--accent-font);
    font-weight: 400;
}

.choice{
    z-index: -4;
    position: relative;
    width: 381px;
    height: 488px;
    background-color: var(--secondary-color);
}

.choice-title{
    position: absolute;
    top: -50px;
    left: 50px;
    color: var(--primary-color);
    font-weight: 400px;
}

.choice-text{
    position: absolute;
    bottom: 30px;
    left: 50px;
    color: var(--primary-color);
}


</style>