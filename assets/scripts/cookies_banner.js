import { BASE_URL } from './main';

window.addEventListener('DOMContentLoaded', function () {

    const cookiesBanner = document.getElementById('cookies-banner');

    let xhrRequest = new XMLHttpRequest();
    xhrRequest.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {
            let response = JSON.parse(this.responseText);
            if (response === '0') {
                window['ga-disable-UA-171624113-1'] = true;
                cookiesBanner.classList.add('hide');
            }
            else if (response === '1') {
                cookiesBanner.classList.add('hide');
            }
        }
    };
    xhrRequest.open('GET', BASE_URL+'src/handlers/cookiesHandler.php?method=getCookiesPreference', true);
    xhrRequest.send();


    const cookiesAccept = document.getElementById('cookies-accept');
    const cookiesDecline = document.getElementById('cookies-decline');

    if (cookiesAccept) {
        cookiesAccept.addEventListener('click', function () {
            setCookiesPreferences(1);
        });
    }

    if (cookiesDecline) {
        cookiesDecline.addEventListener('click', function () {
            window['ga-disable-UA-171624113-1'] = true;
            setCookiesPreferences(0);
        });
    }


    function setCookiesPreferences(preference) {
        let xhrRequest = new XMLHttpRequest();
        xhrRequest.onreadystatechange = function () {
            if (this.readyState === 4 && this.status === 200) {
                let response = JSON.parse(this.responseText);
                if (response) {
                    if (cookiesBanner) {
                        cookiesBanner.classList.add('hide');
                    }
                }
            }
        };
        xhrRequest.open('GET', BASE_URL+'src/handlers/cookiesHandler.php?method=setCookiesPreference&preference=' + preference, true);
        xhrRequest.send();
    }

});