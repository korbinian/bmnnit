var toggleMenu = document.querySelector(".nav-main__toggle");
var menu = document.querySelector(".nav-main");

toggleMenu.addEventListener("click", function () {
    var open = JSON.parse(toggleMenu.getAttribute("aria-expanded"));
    toggleMenu.setAttribute("aria-expanded", !open);
    menu.hidden = !menu.hidden;
});
