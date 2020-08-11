import { webpSupport } from "./compatibility";

export let BASE_URL = '/portfolio/';

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