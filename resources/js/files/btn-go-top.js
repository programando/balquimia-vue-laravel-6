// Efectos scroll
//------------------------------------------------------------
let enlaces       = document.querySelectorAll('.lists li a');
let goTop         = document.querySelector('.btn-go-top');
let menu          = document.querySelector('.menu');
let logoMenu      = document.querySelector('.logo-menu');
let prevScrollPos = window.pageYOffset;

window.onscroll = () => {
    let arriba = window.pageYOffset;
    
    if ( arriba <= 600 ) {
        //Botón de ir arriba
        goTop.style.right       = '-100%';
        goTop.style.transition  = '2.8s';
        //Contenedor del menu
        menu.style.background ='none';
        // Logo del menu
        logoMenu.style.display = 'none'
        menu.style.transition ='0.9s';
        
    }else{
        //Boton de subir arriba
        goTop.style.right       = '0px';
        goTop.style.transition  = '0.8s';
        //Contenedor del menu
        menu.style.top = '0';
        menu.style.background ='#ff5733';
        menu.style.opacity    = '1';
        menu.style.transition ='0.9s';
        //Logo del lado izquierdo del menu
        logoMenu.style.display = 'inline';

    }
}
// Desplazarme hacia rriba
//--------------------------
goTop.addEventListener('click', () => {
    document.body.scrollTop            = 0;
    document.documentElement.scrollTop = 0;
})

/**========================================================== */
/** Intercambio de la clase activo en el menu */
/**========================================================== */
enlaces.forEach (( element) => {
    element.addEventListener( 'click', ( event )=> {
         enlaces.forEach( (link) => {
            link.classList.remove('activo');
         }) ;
       event.target.classList.add('activo') ;
   })
});
/**========================================================== */
/** Intercambio de la clase activo en el menu */
/**========================================================== */