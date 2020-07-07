window.addEventListener('DOMContentLoaded', function () {

    const cookiesBanner = document.getElementById('cookies-banner');

    let xhrRequest = new XMLHttpRequest();
    xhrRequest.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {
            let response = JSON.parse(this.responseText);
            if (response === 0) {
                window['ga-disable-UA-171624113-1'] = true;
                let scripts = document.querySelectorAll('[data-id="cookies-script"]');
                scripts.forEach(function (script) {
                    script.parentNode.removeChild(script);
                });
                cookiesBanner.classList.add('hide');
            }
            else if (response === 1) {
                cookiesBanner.classList.add('hide');
            }
        }
    };
    xhrRequest.open('GET', './src/handlers/cookiesHandler.php?method=getCookiesPreferences', true);
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
            setCookiesPreferences(0);
        });
    }


    function setCookiesPreferences(preference) {
        let xhrRequest = new XMLHttpRequest();
        xhrRequest.onreadystatechange = function () {
            if (this.readyState === 4 && this.status === 200) {
                let response = JSON.parse(this.responseText);
                if (response) {
                    cookiesBanner.classList.add('hide');
                }
            }
        };
        xhrRequest.open('GET', './src/handlers/cookiesHandler.php?preference=' + preference, true);
        xhrRequest.send();
    }

});