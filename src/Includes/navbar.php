
<div class="navbar-menu">
    <img src=".Reshome/public/CSS/Assets/menu.svg" id="btn-menu">
</div>
<img class="img-nav2" src="./public/CSS/Assets/logo.svg" alt="" id="img-menu">


<div class="container-navbar">

        <ul class="info-left">
            <li class="info">ABOUT</li>
            <li class="info">APPARTMENT</li>
            <li class="info">CONTACT</li>
        </ul>

        <img class="img-nav" src="./public/CSS/Assets/logo.svg" alt="">

        <ul class="info-right">
            <li class="info li-border">SEARCH</span></li>
            <li class="info">LOGIN</li>
            <li class="info">REGISTER</li>
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
    width:100%;
}

.navbar-menu, .img-nav2 {
    display: none;
} 


/* @media screen and (max-width: 950px) {
    .container-navbar {
        left: 0;
        display: block;
        position: fixed;
        left: -200px;
        top: 0;
        height: 100%;
        width: 200px;
        background-color: #f1f1f1;
        transition: left 0.3s ease;
        z-index: 1;
      }

      .info-left, .info-right {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        padding: 0;
        margin-left: 0;
        margin-right: 0;
      }

      .info-left li, .info-right li {
        margin-top: 30px;
      }
      
      .container-navbar.open {
        left: 0;
        display: block;
        position: fixed;
        left: -200px;
        top: 0;
        height: 100%;
        width: 200px;
        background-color: #f1f1f1;
        transition: left 0.3s ease;
      }
  
    .navbar-menu, .img-nav2 {
      display: block;
    }

    .img-nav {
        display: none;
    }
    .li-border {
        width: 100px;
    }
  } */ 

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
}

.img-nav2{
    width: 80px;
    height: 80px;
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

</style>