import "./bootstrap";
import AOS from "aos";

AOS.init({
    duration: 700,
    offset: 80,
    once: true,
});

const img = document.getElementById("img_url");
const bgImg = document.getElementById("bg_img");
const imgPreview = document.getElementById("img-preview");
const bgImgPreview = document.getElementById("bg-img-preview");

const modalWarn = document.querySelectorAll(".modal-warn");
const btnDelete = document.querySelectorAll(".btn-delete");
const btnCancel = document.querySelectorAll(".cancel");

btnDelete.forEach((item,index) => {
    item.addEventListener("click", () => {
        modalWarn[index].style.opacity = "100";
    });
});

btnCancel.forEach((btn,index) => {
    btn.addEventListener("click", () => {
        modalWarn[index].style.opacity = "0";
    });
});

const deleteActivity = async (id) => {
    alert(id)
    const request = await fetch("/dashboard/admin/kegiatan/" + id, {
        method: "POST"
    })
}

window.deleteActivity = deleteActivity

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
