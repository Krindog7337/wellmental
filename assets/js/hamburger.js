const hamburger = document.querySelector(".hamburger");
const nav = document.getElementById("navigation");

hamburger.addEventListener("click", () => {
  nav.classList.toggle("hidden");
});
