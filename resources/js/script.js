import hljs from "highlight.js/lib/core";
import go from "highlight.js/lib/languages/go";
import http from "highlight.js/lib/languages/http";
import php from "highlight.js/lib/languages/php";
import "bootstrap";
document.addEventListener("DOMContentLoaded", () => {
    initPreloader();
    initTop();
    initHighlightJS();
});
const initPreloader = () => {
    const preloader = document.getElementById("preloader-section");
    if (preloader) {
        setTimeout(() => {
            preloader.style.opacity = 0;
            preloader.style.visibility = "hidden";
        }, 800);
    }
};
const initTop = () => {
    const top = document.getElementById("top-section");
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
const initHighlightJS = () => {
    hljs.registerLanguage("go", go);
    hljs.registerLanguage("http", http);
    hljs.registerLanguage("php", php);
    hljs.highlightAll();
};
