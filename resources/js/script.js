import "bootstrap";

document.addEventListener("DOMContentLoaded", () => {
    initPreloader();
});

const initPreloader = () => {
    const xPreloaderContainer = document.querySelector("#x-preloader-container");

    if (xPreloaderContainer) {
        const body = document.querySelector("body");

        setTimeout(() => {
            const xPreloaderContainerFade = xPreloaderContainer.animate([{ opacity: 1 }, { opacity: 0 }], {
                duration: 300,
                easing: "ease",
            });

            xPreloaderContainerFade.onfinish = () => {
                xPreloaderContainer.style.display = "none";
                body.style.overflow = "auto";
            };
        }, 300);
    }
};
