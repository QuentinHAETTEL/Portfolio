window.addEventListener('DOMContentLoaded', function () {

    // Script to manage all toggle elements
    const toggleActions = document.querySelectorAll('[data-toggle]');

    if (toggleActions) {
        toggleActions.forEach(function (toggleAction) {
            toggleAction.addEventListener('click', function () {
                let dataId = toggleAction.getAttribute('data-toggle');
                if (dataId) {
                    let toggleItems = this.closest('[data-toggle-parent]').querySelectorAll('[data-toggle-id]');
                    toggleItems.forEach(function (toggleItem) {
                        if (!toggleItem.classList.contains('hide')) {
                            toggleItem.classList.add('hide');
                        }
                    });

                    let toggleItem = document.querySelector('[data-toggle-id="' + dataId + '"]');
                    if (toggleItem) {
                        toggleItem.classList.remove('hide');
                    }
                }
            });
        });
    }

});