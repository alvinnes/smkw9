import "./bootstrap";
import AOS from "aos";

AOS.init({
    duration: 900,
    offset: 80,
    once: true,
    throttleDelay: 50,
});

const btnDelete = document.querySelectorAll(".btn-delete");
const modalDelete = document.querySelectorAll(".modal-delete");
const modalSuccess = document.querySelector(".modal-success");
let selectedId = null;

const closeModal = () => {
    modalDelete.forEach((item) => {
        item.classList.add("opacity-0", "invisible");
    });
};

btnDelete.forEach((item, index) => {
    item.addEventListener("click", () => {
        selectedId = item.dataset.id;
        modalDelete[index].classList.remove("opacity-0", "invisible");
    });
});

const deleteActivities = () => {
    const path = `/dashboard/hapusKegiatan/${selectedId}`;
    deleteData(path);
};

const deleteNews = () => {
    const path = `/dashboard/hapusBerita/${selectedId}`;
    deleteData(path);
};

const deleteData = async (path) => {
    try {
        const csrf = document.querySelector('meta[name="csrf-token"]').content;
        const request = await fetch(path, {
            method: "DELETE",
            headers: {
                "X-CSRF-TOKEN": csrf,
                Accept: "application/json",
            },
        });
        if (request.ok) {
            modalSuccess.classList.add("visible", "opacity-100", "top-16");
            setTimeout(() => {
                window.location.reload();
            }, 800);
        }
    } catch (err) {
        console.error(err);
    }
};

window.cancelAddImg = cancelAddImg;
window.showAddImg = showAddImg;
window.closeModal = closeModal;
window.deleteActivities = deleteActivities;
window.deleteNews = deleteNews;

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

const flash = document.getElementById("flash");
const btnClose = document.getElementById("btnClose");

if (flash) {
    btnClose.addEventListener("click", () => {
        flash.style.display = "none";
    });
}
