const openMenu = () => {
    displayMenu.style.transform = ("translate(0)");
}
const closeMenu = () => {
    displayMenu.style.transform = ("translate(100%)");
}

const menuBurger = document.getElementById('menu-burger');
const menuBurgerOpen = document.getElementById('menu-burger-open');
const displayMenu = document.getElementById('display-menu');
let menuLinks = document.querySelectorAll('a');

menuBurger.addEventListener('click', () => {
    openMenu();
})

menuBurgerOpen.addEventListener('click', () => {
    closeMenu();
})

menuLinks.forEach(element => {
    element.addEventListener('click', () => {
        closeMenu();
    })
});
