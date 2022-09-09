const brgrOpenBtns = document.querySelectorAll('.open-burger');
const brgrCloseBtns = document.querySelectorAll('.close-burger');
const burgerMenu = document.querySelector('.burger-menu');

brgrOpenBtns.forEach( element => {
	element.addEventListener('click', openBurger);
});
brgrCloseBtns.forEach( element => {
	element.addEventListener('click', closeBurger);
});

function openBurger () {
	burgerMenu.style.right = '0';
}

function closeBurger () {
	burgerMenu.style.right = "-100%";
}