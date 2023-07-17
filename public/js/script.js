/*Header */
let navbar = document.querySelector('.navbar');

document.querySelector('#menu-btn').onclick = () =>{
    navbar.classList.toggle('active');
}


/*Cookies*/
const botonAceptarCookies = document.getElementById('cookies-btn');

const avisoCookies = document.getElementById('cookies-1');


if(!localStorage.getItem('cookies-aceptadas')){
    avisoCookies.classList.add('activo');
}

botonAceptarCookies.addEventListener('click', () => {
    avisoCookies.classList.remove('activo');

    

    localStorage.setItem('cookies-aceptadas', true);
});
