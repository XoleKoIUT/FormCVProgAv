document.addEventListener("DOMContentLoaded", function () {
    var navbarLinks = document.querySelectorAll("#myNavBar a.nav-link");

    // Fonction pour lire la valeur du cookie
    function getCookie(name) {
        var match = document.cookie.match(new RegExp(name + '=([^;]+)'));
        return match ? match[1] : null;
    }

    navbarLinks.forEach(function (link) {
        link.addEventListener("click", function (event) {
            event.preventDefault();

            // Retirer la classe "active" de tous les liens pour repartir de zéro
            navbarLinks.forEach(function (innerLink) {
                innerLink.classList.remove("active");
            });

            // Ajouter la classe "active" au lien cliqué pour l'ergonomie
            this.classList.add("active");

            // Stocker l'état actif dans un cookie
            document.cookie = "activeLink=" + encodeURIComponent(this.getAttribute("href"));

            // Naviguer vers l'URL spécifiée dans href après un bref délai (pour laisser le temps à la classe active d'être ajoutée)
            var href = this.getAttribute("href");
            setTimeout(function () {
                window.location.href = href;
            }, 100);
        });
    });

    // Lire le cookie et appliquer la classe "active" au lien approprié lors du chargement de la page
    var activeLink = getCookie("activeLink");
    if (activeLink) {
        var activeNavLink = document.querySelector("#myNavBar a.nav-link[href='" + decodeURIComponent(activeLink) + "']");
        if (activeNavLink) {
            activeNavLink.classList.add("active");
        }
    }
});
