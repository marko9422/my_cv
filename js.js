'use strict';
// arrow Up
const arrowUp = document.getElementById('arrowUp')
window.addEventListener('scroll',function(){
    let scrolled = window.scrollY
    if (scrolled > 569) {
        arrowUp.style.display = 'block'
    } else if(scrolled == 0 ){
        arrowUp.style.display = 'none'
    }
})




