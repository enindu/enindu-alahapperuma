import "bootstrap";
import particles from "particles.js-es";

import.meta.glob(["../images/**"]);

document.addEventListener("DOMContentLoaded", () => {
    initPreloader();
    initParticles();
});

const initPreloader = () => {
    const xPreloaderContainer = document.querySelector("#x-preloader-container");

    if (xPreloaderContainer) {
        const body = document.querySelector("body");

        setTimeout(() => {
            xPreloaderContainer.style.display = "none";
            body.style.overflow = "auto";
        }, 1000);
    }
};

const initParticles = () => {
    const xParticlesContainer = document.querySelector("#x-particles-container");

    if (xParticlesContainer) {
        particles.init("x-particles", {
            particles: {
                number: {
                    value: 100,
                    density: {
                        enable: true,
                    },
                },
                color: {
                    value: ["#2b7fff", "#000000", "#000000", "#000000", "#000000"],
                },
                shape: {
                    type: "circle",
                    stroke: {
                        width: 0,
                    },
                },
                opacity: {
                    random: true,
                    anim: {
                        enable: false,
                    },
                },
                size: {
                    value: 100,
                    random: true,
                    anim: {
                        enable: false,
                    },
                },
                line_linked: {
                    enable: false,
                },
                move: {
                    enable: true,
                    speed: 5,
                    direction: "none",
                    random: true,
                    straight: false,
                    out_mode: "bounce",
                },
            },
            interactivity: {
                detect_on: "canvas",
                events: {
                    onhover: {
                        enable: false,
                    },
                    onclick: {
                        enable: false,
                    },
                    resize: false,
                },
            },
            retina_detect: true,
        });
    }
};
