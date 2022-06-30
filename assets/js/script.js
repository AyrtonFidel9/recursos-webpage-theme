const menu = document.querySelector(".nav__menu-icon"); //icono del menu desplegable
const mainMenu = document.querySelector(".menu-bar"); 
const exitMenu = document.querySelector(".menu__close");
const subMenu = document.querySelectorAll(".menu-bar .sub-menu");
const menuPrincipal = 
    document.querySelector(".menu__principal");
const menuOptions =
    document.querySelectorAll(".menu__option > li");
const principalOptions=
    document.querySelectorAll(".menu__principal > li");
const body = document.querySelector("body");
const nav = document.querySelectorAll("nav > img");
const main = document.querySelector("main");
const footer = document.querySelector("footer");
//const header = document.querySelector("header");
const navigate = document.querySelector("nav");

/**Media queries**/

const mediaQuery = window.matchMedia('(min-width: 768px)');


const openMenu = (event) => {
    nav[0].classList.add("ocult");
    nav[1].classList.add("ocult");
    main.classList.add("ocult");
    footer.classList.add("ocult");
    mainMenu.classList.remove('ocult');
    //header.classList.add("ocult");
    navigate.style.background="none";
}


const closeMenu = (event) => {
    nav[0].classList.remove('ocult');
    nav[1].classList.remove('ocult');
    main.classList.remove('ocult');
    //header.classList.remove('ocult');
    footer.classList.remove('ocult');
    mainMenu.classList.add("ocult");
    navigate.style.background="var(--yellow-soft-linear)";
}

const ocultSubMenu = () => {
    subMenu.forEach((option) => {
        option.classList.add('ocult');
    });
}

const showSubMenu = () => {
    subMenu.forEach((option) => {
        option.classList.remove('ocult');
    });
}

const displaySubItems = (option) => {
    const lista = option.querySelector('ul');
    if (lista != null) {
        if (lista.classList.contains('ocult'))
            showSubMenu(); // quita la clase ocult
        else
            ocultSubMenu(); //agrega clase ocult
    }
}

const addClickOptions = () => {
    menuOptions.forEach((option) => {
        option.addEventListener(
            "click",
            () => displaySubItems(option)
        );
    });
}

const addHoverOptions = () => {
    principalOptions.forEach((option)=>{
        option.classList.add('subitem__principal');
        const lista = option.querySelector('ul');
        if(lista != null){
            lista.classList.add("subitem__secondary");
        }
    });
}

function handleLaptopChange(e) {
    if (e.matches) {
        menu.classList.add('ocult');
        menuPrincipal.parentElement.style=`
            display: flex;
            align-items: center;
            width: 100%;
            height: 100%`;
        nav[0].classList.remove('ocult');
        nav[1].classList.remove('ocult');
        main.classList.remove('ocult');
        //header.classList.remove('ocult');
        footer.classList.remove('ocult');
        navigate.style.background="var(--yellow-soft-linear)";
        menu.classList.add('ocult');
        mainMenu.classList.add('ocult');
    }
    else{
        menuPrincipal.parentElement.style=`
            display: none;`;
        menu.classList.remove('ocult');
    }
}

/* ¡Importante! */
/* El siguiente codigo sirve para que los eventos se agreguen
    una vez que todas las etiquetas html han sido cargas
    en el DOM 
*/
document.addEventListener("DOMContentLoaded", function (event) {
    ocultSubMenu();
    menu.addEventListener('click', openMenu);
    exitMenu.addEventListener('click', closeMenu);
    mediaQuery.addListener(handleLaptopChange);
    handleLaptopChange(mediaQuery);
    addClickOptions();
    addHoverOptions();
});



