window.addEventListener('DOMContentLoaded', function () {

    // Script to manage the menu on small devices
    const menuToggle = document.getElementById('menu-toggle');
    const menu = document.getElementById('menu');
    if (menuToggle && menu) {
        menuToggle.addEventListener('click', function () {
            menu.classList.toggle('mobile-hide');
        });
    }

});
