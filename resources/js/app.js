import "./bootstrap";

const img = document.getElementById("img_url");
const bgImg = document.getElementById("bg_img");
const imgPreview = document.getElementById("img-preview");
const bgImgPreview = document.getElementById("bg-img-preview");

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

const flash = document.getElementById("flash");
const btnClose = document.getElementById("btnClose");

if (flash) {
    btnClose.addEventListener("click", () => {
        flash.style.display = "none";
    });
}
