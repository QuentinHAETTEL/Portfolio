import { webpSupport } from "./compatibility";

export let BASE_URL = '/portfolio/';

export let colors = {
    'lightgreen': 'rgb(101, 153, 46)',
    'green': 'rgb(0, 116, 0)',
    'lightblue': 'rgb(8, 178, 227)',
    'blue': 'rgb(30, 60, 113)',
    'brown': 'rgb(118, 66, 72)',
    'orange': 'rgb(237, 93, 49)',
    'yellow': 'rgb(253, 186, 53)',
    'purple': 'rgb(190, 130, 185)'
};

export function popup(type, message) {
    let popup = document.getElementById('popup');
    if (popup) {
        let popupIcon = popup.querySelector('img');
        let popupTitle = popup.querySelector('p');

        if (popupIcon && popupTitle) {
            if (type === 'success') {
                let src = popupIcon.getAttribute('src');
                popupIcon.setAttribute('src', src+'assets/images/icons/correct.svg');
                popupIcon.setAttribute('alt', 'Icône succès');
            }
            else if (type === 'error') {
                let src = popupIcon.getAttribute('src');
                popupIcon.setAttribute('src', src+'assets/images/icons/incorrect.svg');
                popupIcon.setAttribute('alt', 'Icône échec');
            }

            popupTitle.innerHTML = message;
        }

        popup.classList.add('visible');
        setTimeout(function () {
            popup.classList.remove('visible');
        }, 5000)
    }
}

webpSupport();