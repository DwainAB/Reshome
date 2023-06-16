<div class="container-discovery">
   
<img class="filter-discovery" src="./public/CSS/Assets/background-filtrer.png" alt="">
    <img class="img-discovery" src="./public/CSS/Assets/image 6.png" alt="">
   
    <div class="info-discovery"> 
        <h2 class="title-discovery">LIFE<br> <span class="title-discovery-color">AMONG PARKS AND ICONIC</span> PARIS SIGHTS</h2>
        <button class="btn-discovery"><h4>LEARN MORE</h4></button>
    </div>
</div>


<style>
    .filter-discovery{
    position: absolute;
    z-index: -980;
    width: 100%;
}

.img-discovery{
    width: 100%;
    position: absolute;
    z-index: -999;
}

.title-discovery{
    margin: 0 auto;
   display: flex;
   flex-direction: column;
   justify-content: center;
   align-items: center;
    color: white;
    z-index: 888;
    text-align: center;
    width: clamp(106px, 55%, 840px);
    padding-top: 30%;
    font-weight: 400;
  }

  .title-discovery-color{
    color: var(--primary-color);
  }

  .btn-discovery{
    width: 10%;
    margin: 0 auto;
    background-color: var(--secondary-color);
    border: 2px solid var(--primary-color);
    border-radius: 50px;
    color: white;
    height: 5%;
    margin-top: 50px;
    font-family: var(--primary-font);
    font-weight: 500;
    margin-bottom: 5%;
  }

  .info-discovery{
    display: flex;
    flex-direction: column;
    justify-content: center;
  }

</style>