new Swiper(".heroSwiper", {
    pagination:{ el:".swiper-pagination" },
    autoplay:{ delay:5000 }
});

new Swiper(".categoriesSwiper", {
    slidesPerView:6,
    spaceBetween:20,
    breakpoints:{
        0:{ slidesPerView:2 },
        768:{ slidesPerView:4 },
        1200:{ slidesPerView:6 }
    }
});

new Swiper(".offersSwiper", {
    slidesPerView:3,
    spaceBetween:20,
    breakpoints:{
        0:{ slidesPerView:1 },
        768:{ slidesPerView:2 },
        1200:{ slidesPerView:3 }
    }
});




