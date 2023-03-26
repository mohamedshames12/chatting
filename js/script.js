let menuBtn = document.getElementById("menu");
let navbar = document.querySelector(".navber");

menuBtn.addEventListener("click", (eo) => {
  navbar.classList.toggle("active");
}
)
window.onscroll = () => {
    navbar.classList.remove("active");
}