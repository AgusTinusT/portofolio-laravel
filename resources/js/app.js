import "./bootstrap";

document.addEventListener("DOMContentLoaded", () => {
    const hamburgerButton = document.getElementById("hamburger-button");
    const mobileMenu = document.getElementById("mobile-menu");

    if (hamburgerButton && mobileMenu) {
        hamburgerButton.addEventListener("click", () => {
            mobileMenu.classList.toggle("hidden");
        });
    }

    const htmlElement = document.documentElement;
    const themeToggleButtons = document.querySelectorAll(".dark-mode-toggler");

    const applyTheme = () => {
        if (
            localStorage.theme === "dark" ||
            (!("theme" in localStorage) &&
                window.matchMedia("(prefers-color-scheme: dark)").matches)
        ) {
            htmlElement.classList.add("dark");
        } else {
            htmlElement.classList.remove("dark");
        }
    };

    const toggleTheme = () => {
        const isDarkMode = htmlElement.classList.toggle("dark");
        if (isDarkMode) {
            localStorage.theme = "dark";
        } else {
            localStorage.theme = "light";
        }
    };

    applyTheme();

    themeToggleButtons.forEach((btn) => {
        btn.addEventListener("click", toggleTheme);
    });

    // ==============================================
    // ANIMASI FADE-IN ON SCROLL
    // ==============================================

    // 1. Pilih semua elemen yang ingin dianimasikan
    const elementsToAnimate = document.querySelectorAll(".fade-in-element");

    // 2. Buat observer
    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                // Jika elemen masuk ke viewport
                if (entry.isIntersecting) {
                    // Tambahkan class animasi yang sesuai
                    if (entry.target.dataset.animation === "up") {
                        entry.target.classList.add("animate-fade-in-up");
                    } else if (entry.target.dataset.animation === "left") {
                        entry.target.classList.add("animate-fade-in-left");
                    } else if (entry.target.dataset.animation === "right") {
                        entry.target.classList.add("animate-fade-in-right");
                    } else {
                        // Default animasi
                        entry.target.classList.add("animate-fade-in-up");
                    }

                    // Hentikan observasi elemen ini setelah animasi berjalan sekali
                    observer.unobserve(entry.target);
                }
            });
        },
        {
            threshold: 0.1, // Picu animasi saat 10% elemen terlihat
        }
    );

    // 3. Mulai observasi setiap elemen
    elementsToAnimate.forEach((element) => {
        observer.observe(element);
    });
});
