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

window.closeModal = closeModal;
window.deleteActivities = deleteActivities;
window.deleteNews = deleteNews;