document.addEventListener("DOMContentLoaded", function () {
  const t = document.getElementById("burger"),
    n = document.getElementById("close");
  document.getElementById("mobileMenu"),
    t.addEventListener("click", e),
    n.addEventListener("click", e);
  function e() {
    document.body.classList.toggle("open-menu");
  }
});
