import {BASE_URL, colors, popup} from './main';


const root = document.documentElement;

// Script to get cookie and apply style
let xhrRequest = new XMLHttpRequest();
xhrRequest.onreadystatechange = function () {
    if (this.readyState === 4 && this.status === 200) {
        let response = JSON.parse(this.responseText);
        changeColor(colors[response]);
    }
};
xhrRequest.open('GET', BASE_URL+'src/handlers/cookiesHandler.php?method=getColorCookie', true);
xhrRequest.send();


window.addEventListener('DOMContentLoaded', function () {

    // Script to manage toggle from settings-tab
    const tab = document.getElementById('settings-tab');
    const tabToggle = document.getElementById('settings-tab-toggle');
    let open = false;

    if (tab && tabToggle) {
        tabToggle.addEventListener('click', function (event) {
            event.stopImmediatePropagation();
            tab.classList.toggle('settings-tab--open');
            open = !open;
            if (open) {
                document.body.addEventListener('click', function (event) {
                    tab.classList.remove('settings-tab--open');
                });
            }
        });
    }


    // Script to manage colors of the website
    const colorsTogglers = document.querySelectorAll('[data-color]');

    if (colorsTogglers) {
        colorsTogglers.forEach(function (colorToggler) {
            colorToggler.addEventListener('click', function () {
                let color = this.getAttribute('data-color');
                changeColor(colors[color]);

                let xhrRequest = new XMLHttpRequest();
                xhrRequest.open('GET', BASE_URL+'src/handlers/cookiesHandler.php?method=setColorCookie&color='+color, true);
                xhrRequest.send();
            })
        });
    }

});

function changeColor(color) {
    root.style.setProperty('--main-color', color);
    root.style.setProperty('--second-color', color.slice(0, 3) + 'a' + color.slice(3, -1) + ', 0.25)');
}