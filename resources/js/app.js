import "./bootstrap";
import AOS from "aos";

AOS.init({
    duration: 900,
    offset: 80,
    once: true,
    throttleDelay: 50,
});

const navbar = document.getElementById("navbar");
console.log(navbar);
window.addEventListener("scroll", () => {
    if (window.scrollY >= 200) {
        navbar.classList.remove("bg-transparent");
        navbar.classList.add("bg-primary");
    } else {
        navbar.classList.add("bg-transparent");
        navbar.classList.remove("bg-primary");
    }
});

const formAddImg = document.querySelector(".form-img");
const img = document.getElementById("img_url");
const bgImg = document.getElementById("bg_img");
const imgPreview = document.getElementById("img-preview");
const bgImgPreview = document.getElementById("bg-img-preview");

const showAddImg = () => {
    formAddImg.classList.add("mt-0", "opacity-100", "visible");
};

const cancelAddImg = () => {
    formAddImg.classList.remove("mt-0", "opacity-100", "visible");
};

if (img) {
    img.addEventListener("change", () => {
        const blob = URL.createObjectURL(img.files[0]);
        imgPreview.setAttribute("src", blob);
    });
}

if (bgImg) {
    bgImg.addEventListener("change", () => {
        const blob = URL.createObjectURL(bgImg.files[0]);
        bgImgPreview.setAttribute("src", blob);
    });
}


window.cancelAddImg = cancelAddImg;
window.showAddImg = showAddImg;

const flash = document.getElementById("flash");
const btnClose = document.getElementById("btnClose");

if (flash) {
    btnClose.addEventListener("click", () => {
        flash.style.display = "none";
    });
}
