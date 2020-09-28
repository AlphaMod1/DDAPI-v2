const bars = document.querySelector(".fa-bars");
const nav = document.querySelector(".header-right");
const footer = document.querySelector("footer");
bars.onclick = () => {
    if (nav.style.display === "none" || nav.style.display === "") {
        nav.style.display = "inline-block";
    }
    else {
        nav.style.display = "none";
    }
}
window.onresize = () => {
    if (window.innerWidth > 500) {
        nav.style.display = "inline-block";
    }
}