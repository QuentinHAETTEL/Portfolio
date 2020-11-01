import { BASE_URL } from "./main";
import { popup } from './main';

window.addEventListener('DOMContentLoaded', function () {

    // Script to manage all labels-inputs elements
    const inputContainers = document.querySelectorAll('[data-input-container]');

    if (inputContainers) {
        inputContainers.forEach(function (inputContainer) {
            let input = inputContainer.querySelector('input, textarea, select');
            let label = inputContainer.querySelector('label');
            if (input && label) {
                input.addEventListener('focus', function () {
                    label.classList.add('form__label--visible');
                    input.placeholder = '';
                });

                input.addEventListener('blur', function () {
                    if (input.value.length === 0) {
                        label.classList.remove('form__label--visible');
                        input.placeholder = input.getAttribute('data-placeholder');
                    }
                    if (input.nodeName === 'TEXTAREA') {
                        checkTextarea(input);
                    }
                    else {
                        checkInput(input);
                    }
                });
            }
        });
    }


    // Script to check if form is correctly completed and execute it
    const contactForm = document.getElementById('contact-form');

    if (contactForm) {
        contactForm.addEventListener('submit', function(event) {
            event.preventDefault();

            let inputs = contactForm.querySelectorAll('input');
            inputs.forEach(function (input) {
                checkInput(input);
            });
            let textareas = contactForm.querySelectorAll('textarea');
            textareas.forEach(function (textarea) {
                checkTextarea(textarea);
            });

            let xhrRequest = new XMLHttpRequest();
            xhrRequest.onreadystatechange = function () {
                if (this.readyState === 4 && this.status === 200) {
                    let response = JSON.parse(this.responseText);
                    if (response) {
                        contactForm.reset();
                        let validInputs = contactForm.querySelectorAll('.input--success');
                        if (validInputs) {
                            validInputs.forEach(function (validInput) {
                                validInput.classList.remove('input--success');
                            });
                        }
                        popup('success', 'Votre message a été envoyé avec succès');
                    }
                    else {
                        popup('error', 'Une erreur est survenue, veuillez réessayer ou envoyer un mail directement');
                    }
                }
            };
            xhrRequest.open('POST', BASE_URL+'src/handlers/contactHandler.php', true);
            xhrRequest.send(new FormData(contactForm));
        });
    }


    // Functions
    function checkInput(input) {
        let error = false;

        if (input.value.length < 2 || input.value.length > 100) {
            error = true;
        }
        else {
            error = false;
        }

        if (input.type === 'email') {
            let regex = /\S+@\S+\.\S+/;
            if (regex.test(input.value)) {
                error = false;
            }
            else {
                error = true;
            }
        }

        if (error) {
            input.classList.remove('form__field--input-success');
            input.classList.add('form__field--input-error');
        }
        else {
            input.classList.remove('form__field--input-error');
            input.classList.add('form__field--input-success');
        }
    }

    function checkTextarea(textarea) {
        if (textarea.value.length < 20 || textarea.value.length > 2000) {
            textarea.classList.remove('form__fiels--textarea-success');
            textarea.classList.add('form__field--textarea-error');
        }
        else {
            textarea.classList.remove('form__field--textarea-error');
            textarea.classList.add('form__field--textarea-success');
        }
    }

});
