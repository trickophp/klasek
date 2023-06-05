//Mobile - show navigation on burger click
let burger = document.querySelector(".burger")
let navMobile = document.querySelector(".nav-mobile-modal")
burger.onclick = function () {
    navMobile.classList.toggle("nav-mobile-active");
    burger.classList.toggle("open");
};

// open submenu on mobile submenu item holder click, can't work with css hover option, there were bugs
let submenuItemHolder = document.querySelector('.nav-mobile-modal .item-has-child')
let submenu = document.querySelector('.nav-mobile-modal .item-has-child ul')

submenuItemHolder.addEventListener('click', () => {
    submenu.classList.toggle("active")
    submenuItemHolder.querySelector('a > img').classList.toggle('rotate')
})
