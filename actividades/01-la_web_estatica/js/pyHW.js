const btnDmode = document.querySelector('#Dmode');
const btnDmodeON = document.querySelector('#DmodeON');
const btnDmodeOF = document.querySelector('#DmodeOF');
const cPrincipal = document.querySelector('#cPrincipal');
const body = document.querySelector('body');

btnDmode.addEventListener('click',() => {
	body.classList.toggle('dark');
	btnDmodeON.classList.toggle('DmodeON');
	btnDmodeOF.classList.toggle('DmodeOF');
	cPrincipal.classList.toggle('dark');
	carrusel1.classList.toggle('fondoCarruselProducts');
	carrusel1.classList.toggle('fondoCarruselProductsDark');
})

// Carrito