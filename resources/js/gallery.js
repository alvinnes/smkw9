const sizeImg = document.querySelectorAll("#options li");
const placeholderImg = document.querySelector("#img-size");
const sizeImgInput = document.querySelector("#size_img");

sizeImg.forEach((item) => {
    item.addEventListener("click", () => {
        const value = item.dataset.value;
        placeholderImg.textContent = value;
        sizeImgInput.value = value;
        alert(sizeImgInput.value);
    });
});
