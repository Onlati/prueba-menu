document.addEventListener("DOMContentLoaded", function () {
    var hamburger = document.getElementById("nav-icon");
    var header = document.getElementById("headers-movil");

    function closeMenu() {
        header.classList.remove("is-open");
        hamburger.setAttribute("data-open", "false");
    }

    // Manejo del ícono hamburguesa (abrir/cerrar menú)
    hamburger.addEventListener("click", function (e) {
        e.stopPropagation();
        var isOpen = this.getAttribute("data-open") === "true";
        if (!isOpen) {
            header.classList.add("is-open");
            this.setAttribute("data-open", "true");
        } else {
            closeMenu();
        }
    });

    // Cerrar menú al cambiar de tamaño de pantalla (pasar de móvil a desktop)
    window.addEventListener("resize", function () {
        if (window.innerWidth >= 1024) {
            closeMenu();
        }
    });

    // Manejo de desplegables para los items de menú
    document.querySelectorAll(".headers__item").forEach(function (item) {
        item.addEventListener("click", function (e) {
            e.stopPropagation();

            // Cerrar otros submenús abiertos
            document.querySelectorAll(".headers__item.is-open-navbar").forEach(function (opened) {
                if (opened !== item) {
                    opened.classList.remove("is-open-navbar");
                    opened.querySelector(".headers__dropdown-inner").classList.remove("is-open-navbar");
                }
            });

            // Toggle para abrir/cerrar el submenú actual
            var dropdownInner = item.querySelector(".headers__dropdown-inner");
            if (dropdownInner) {
                dropdownInner.classList.toggle("is-open-navbar");
                item.classList.toggle("is-open-navbar");
            }
        });
    });

    // Cerrar desplegables al hacer click fuera
    document.addEventListener("click", function () {
        document.querySelectorAll(".headers__item.is-open-navbar").forEach(function (opened) {
            opened.classList.remove("is-open-navbar");
            opened.querySelector(".headers__dropdown-inner").classList.remove("is-open-navbar");
        });
    });
});