import "bootstrap";
document.addEventListener("DOMContentLoaded", () => {
    initPreloader();
    initTop();
});
const initPreloader = () => {
    const preloader = document.getElementById("preloader");
    if (preloader) {
        setTimeout(() => {
            preloader.style.opacity = 0;
            preloader.style.visibility = "hidden";
        }, 800);
    }
};
const initTop = () => {
    const top = document.getElementById("top");
    if (top) {
        window.addEventListener("scroll", () => {
            const bottom = window.innerHeight + window.scrollY >= document.documentElement.scrollHeight - 5;
            const threshold = window.scrollY > 300;
            if (!bottom && threshold) {
                top.style.opacity = 1;
                top.style.visibility = "visible";
            } else {
                top.style.opacity = 0;
                top.style.visibility = "hidden";
            }
        });
        top.addEventListener("click", () => {
            window.scrollTo({
                top: 0,
                behavior: "smooth",
            });
        });
    }
};
