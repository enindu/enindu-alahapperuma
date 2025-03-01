import "bootstrap";
import PSJ from "particles.js-es";

import.meta.glob(["../images/**"]);

PSJ.init("particles", {
    particles: {
        number: {
            value: 50,
            density: {
                enable: false,
            },
        },
        color: {
            value: ["#2b7fff"],
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
