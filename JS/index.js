//section navbar

let menuNav = document.querySelector('.menu-nav')
let arrowDown = document.querySelector('.arrowdown')

arrowDown.addEventListener('click', ()=>{
   if(menuNav.classList.contains('logout-noactive')){
      menuNav.classList.remove('logout-noactive')  
   }else{
      menuNav.classList.add('logout-noactive')
   }
})

