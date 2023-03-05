document.addEventListener("DOMContentLoaded", function () {
  const burger = document.getElementById("burger");
  const closeBtn = document.getElementById("close");
  const menu = document.getElementById("mobileMenu");

  burger.addEventListener("click", toggleMenu);
  closeBtn.addEventListener("click", toggleMenu);

  function toggleMenu() {
    document.body.classList.toggle("open-menu");
  }
});
