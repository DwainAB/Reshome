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
    margin-top: 30%;
    align-items: center;
    justify-content: space-around;
    height: 1000px;
    z-index: 10;
    flex-wrap: wrap;
}

.container-choice-img{
    position: absolute;
    width: 100%;
    z-index: -5;
    height: 100%;
    object-fit: cover;
    height: 100%;
}

.container-choice-title{
    position: absolute;
    color: var(--primary-color);
    font-family: var(--accent-font);
    font-weight: 400;
}

.choice{
    display: flex;
    flex-direction: column;
    z-index: -4;
    width: 30%;
    height: 65%;
    background-color: var(--secondary-color);
    position : relative;
}

@media screen and (max-width: 800px) {
.choice {
    height: 40%;
}
}

.choice-title{
    color: var(--primary-color);
    font-weight: 400px;
    margin: 0 auto;
}

.choice-text{
    position: absolute;
  bottom: 0;
  left: 50%;
  transform: translate(-50%, -0%);
  color: var(--primary-color);
}

.choice p {
    font-size : 2vw;
}


</style>