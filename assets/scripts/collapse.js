window.addEventListener('DOMContentLoaded', function () {

    // Script to manage all collapse elements
    const collapseToggles = document.querySelectorAll('[data-collapse]');

    if (collapseToggles) {
        collapseToggles.forEach(function (collapseToggle) {
            collapseToggle.addEventListener('click', function () {
                let dataId = collapseToggle.getAttribute('data-collapse');
                if (dataId) {
                    let collapseItem = document.querySelector('[data-id="' + dataId + '"]');
                    if (collapseItem) {
                        collapseItem.classList.toggle('hide');
                        collapseToggle.classList.toggle('rotate-180');
                    }
                }
            });
        });
    }


});
