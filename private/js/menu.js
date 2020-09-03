const hamburger = document.querySelector('.hamburger');
const closeHamburger = document.querySelector('.hamburger-x');
const menu = document.querySelector('.menu-navegacion');

/* console.log(menu);
console.log(hamburger); */
/* console.log(closeHamburger); */

hamburger.addEventListener('click', ()=>{
  closeHamburger.classList.toggle("close");
  menu.classList.toggle("spread");
})



window.addEventListener('click', e=>{
  if(menu.classList.contains('spread')
      && e.target != menu && e.target != hamburger  ){
        menu.classList.toggle("spread");
        closeHamburger.classList.toggle("close");
  }
})