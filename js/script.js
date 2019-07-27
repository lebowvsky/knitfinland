/* Menu Sticky */
const navBar = document.body.querySelector("nav");
const navBarHeight = navBar.clientHeight;
const h2Title = document.body.querySelector("h2");

/* function scrolled() {
    navBar.className = (window.scrollY != 0) ? "nav_fixed" : "";
}

addEventListener("scroll", scrolled); */



/*  *********** Images View *********** */
const imageGallery = document.body.querySelectorAll(".image-gallery");
const imageWrapper = document.body.querySelector("#image-wrapper");
const imageWiew = document.body.querySelector("image-view");
const imageDestination = document.body.querySelector("#image-destination");

function viewTheImage(e) {
    e.preventDefault();
    imageWrapper.style.display = "flex";
    let targetElement = e.target;
    imageDestination.src = targetElement.getAttribute("src");
    imageWrapper.addEventListener("click", function(event){
        event.preventDefault();
        imageWrapper.style.display = "none";
    })
}

imageGallery.forEach((currentValue, currentIndex) => {
    imageGallery[currentIndex].addEventListener("click", viewTheImage);
});



/*  *********** Menu open/close *********** */

const openButton = document.body.querySelector("#icon-menu");
const closeButton = document.body.querySelector("#icon-menu-close");
const menu = document.body.querySelector("#menu");

function openMenu() {
    openButton.style.display = "none";
    closeButton.style.display = "block";
    menu.style.display = "block";
}

function closeMenu() {
    closeButton.style.display = "none";
    menu.style.display = "none";
    openButton.style.display = "block";
}

openButton.addEventListener("click", openMenu);
closeButton.addEventListener("click", closeMenu);



