document.addEventListener("DOMContentLoaded", function () {
    var navbarLinks = document.querySelectorAll("#myNavBar a.nav-link");

    navbarLinks.forEach(function (link) {
        link.addEventListener("click", function () {
            navbarLinks.forEach(function (innerLink) {
                innerLink.classList.remove("active");
            });
            this.classList.add("active");
            debugger;
        });
    });
});