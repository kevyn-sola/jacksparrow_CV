menuBurger = document.getElementById('menu-burger');
menuBurgerOpen = document.getElementById('menu-burger-open')
displayMenu = document.getElementById('display-menu')


menuBurger.addEventListener('click', () => {
    displayMenu.style.transform = ("translate(0)");
})

menuBurgerOpen.addEventListener('click', () => {
    displayMenu.style.transform = ("translate(100%)");
})


