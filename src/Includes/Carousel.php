<div class="container-carousel">
    <div class="carousel-text">
        <div>
            <h3 class="carousel-text-color">LUXURY FAMILY RESIDENCES WITH A WELL DEVELOPED INFRASTRUCTURE WITHIN A MINUTE OF VICTORY PARK</h3>
            <h4 class="carousel-text-no-color">APARTEMENTS FROM 64 TO 301 50.M. WITH TERRACES AND PATIOS IN A CLOSED TERRITORY, IN ONE OF THE BEST RESIDENTIAL AREAS IN PARIS</h4>
        </div>
    </div>

    <div class="container-all-carousel">
        <div class="carousel">
            <div class="carousel-inner">
                <img src="./public/CSS/Assets/appart.png" data="1" alt="Image 1">
                <img src="./public/CSS/Assets/appart.png" data="2" alt="Image 2">
                <img src="./public/CSS/Assets/appart.png" data="3" alt="Image 3">
                <img src="./public/CSS/Assets/appart.png" data="4" alt="Image 4">
                <img src="./public/CSS/Assets/appart.png" data="5" alt="Image 5">
                <img src="./public/CSS/Assets/appart.png" data="6" alt="Image 6">
                <img src="./public/CSS/Assets/appart.png" data="7" alt="Image 7">
                <img src="./public/CSS/Assets/appart.png" data="8" alt="Image 8">
                <img src="./public/CSS/Assets/appart.png" data="9" alt="Image 9">
                <img src="./public/CSS/Assets/appart.png" data="10" alt="Image 10">
            </div>
            <button class="arrowleft"><img src="./public/CSS/Assets/arrowleft.png" alt="arrow"></button>
            <h1 class="title-carousel">Elegant Design</h1>
            <button class="arrowright"><img src="./public/CSS/Assets/arrowright.png" alt="arrow"></button>
        </div>
        <button class="btn-learn-more">LEARN MORE</button>
    </div>
</div>

<style>
    .carousel-text{
  display: flex;
  align-items: end;
  justify-content: center;
  flex-direction: column;
  margin-top: 50%;
  margin-right: 10%;
}

.carousel-text-color{
  color: var(--primary-color);
right: 30%;
width: 500px;
}

.carousel-text-no-color{  
  color: white;
  font-weight: 500;
width: 500px;
}

.carousel {
  display: flex;
  overflow: hidden;
  width: 100%;
  height: 100%;
  margin-top: 50px;
  position: relative;
}

.carousel-inner {
  display: flex;
  transition: transform 0.5s;
}

.carousel-inner img {
  width: 650px;
  height: 100%;
  margin-right: 20px;
  object-fit: cover;
}

.prev-button,
.next-button {
  margin-top: 10px;
}

.prev-button {
  margin-right: 10px;
}

.next-button {
  margin-left: 10px;
}

.arrowleft{
  position: absolute;
  left: 86px;
  width: 82px;
  height: 82px;
  border: 0;
  background-color: var(--secondary-color);
  border-radius: 50%;
  top: 340px;
}

.arrowright{
  position: absolute;
  right: 86px;
  width: 82px;
  height: 82px;
  border: 0;
  background-color: var(--secondary-color);
  border-radius: 50%;
  top: 340px;
}

@media screen and (max-width: 700px) {
  .arrowright {
      right: 10%;
      width: 35px;
      height: 35px;
  }
  .arrowleft {
      left: 10%;
      width: 35px;
      height: 35px;
  }
  .arrowright img, .arrowleft img {
      width: 10px;
      height: 10px;
  }
}

.title-carousel{
  font-weight: 400;
  font-family: var(--accent-font);
  position: absolute;
  top: 15%;
  left: 36%;
  color: white;
}

@media screen and (max-width: 1000px) {
  .title-carousel {
      top: 35%;
  }
}

.btn-learn-more{
font-size: 1.5vw;
color: white;
top: 80%;
left: 45%;
width: 10%;
margin: 0 auto;
background-color: var(--secondary-color);
border: 2px solid var(--primary-color);
border-radius: 50px;
height: 5%;
margin-top: 50px;
font-family: var(--primary-font);
font-weight: 500;
margin-bottom: 5%;
display: flex;
align-self: center;
justify-content: center;
}


.container-all-carousel{
position: relative;
}

@media screen and (max-width:1000px) {
.carousel-text-color  {
  font-size: 3vw;
}
.carousel-text-no-color {
  font-size: 2vw;
}
}

.btn-learn-more h4 {
  padding: 0;
  margin: auto;
}
</style>