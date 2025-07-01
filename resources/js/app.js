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
        if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            htmlElement.classList.add('dark');
        } else {
            htmlElement.classList.remove('dark');
        }
    };

    const toggleTheme = () => {
        const isDarkMode = htmlElement.classList.toggle('dark');
        if (isDarkMode) {
            localStorage.theme = 'dark';
        } else {
            localStorage.theme = 'light';
        }
    };

    applyTheme();

    themeToggleButtons.forEach((btn) => {
        btn.addEventListener("click", toggleTheme);
    });
});
