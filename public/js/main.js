const botaoMenu = document.getElementById("botao-menu-mobile");
const menu = document.getElementById("menu");

botaoMenu.addEventListener("click", function () {
    menu.classList.toggle("menu-ativo");
})
// script do slide
$('.owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 3
        },
        1000: {
            items: 5
        }
    }
})