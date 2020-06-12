window.addEventListener('DOMContentLoaded', function () {

    // Script to manage all progress elements
    const progressBars = document.querySelectorAll('[data-progress]');

    if (progressBars) {
        progressBars.forEach(function (progressBar) {
            let level = progressBar.getAttribute('data-progress');
            if (!level) {
                level = 75;
            }
            progressBar.classList.add('progress-bar-right-'+level);
        });
    }

});