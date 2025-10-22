import { register } from "swiper/element/bundle";
import "swiper/css";

register();

const swiperEl = document.querySelector(".swiper-bg");
const swiperCard = document.querySelector(".swiper-card");

swiperCard.addEventListener("swiperslidechange", () => {
    const index = swiperCard.swiper.activeIndex;
    swiperEl.swiper.slideTo(index);
});
