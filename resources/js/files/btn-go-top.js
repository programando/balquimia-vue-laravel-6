// Efectos scroll
//------------------------------------------------------------
let prevScrollPos   = window.pageYOffset;
let goTop           = document.querySelector('.btn-go-top');

window.onscroll = () => {
    let arriba = window.pageYOffset;
    
    if ( arriba <= 600 ) {
        goTop.style.right       = '-100%';
        goTop.style.transition  = '2.8s';
    }else{
        goTop.style.right       = '0px';
        goTop.style.transition  = '0.8s';
    }
}
// Desplazarme hacia rriba
//--------------------------
goTop.addEventListener('click', () => {
    document.body.scrollTop            = 0;
    document.documentElement.scrollTop = 0;
})

 