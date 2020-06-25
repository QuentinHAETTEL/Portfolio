window.addEventListener('DOMContentLoaded', function () {

    // Script to manage all labels-inputs elements
    const inputContainers = document.querySelectorAll('[data-input-container]');

    if (inputContainers) {
        inputContainers.forEach(function (inputContainer) {
            let input = inputContainer.querySelector('input, textarea, select');
            let label = inputContainer.querySelector('label');
            if (input && label) {
                input.addEventListener('focus', function () {
                    label.classList.add('contact__field--label--visible');
                    input.placeholder = '';
                });

                input.addEventListener('blur', function () {
                    if (input.value.length !== 0) {
                        label.classList.add('contact__field--label--visible');
                        input.placeholder = '';
                    }
                    else {
                        label.classList.remove('contact__field--label--visible');
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
            input.classList.remove('input--success');
            input.classList.add('input--error');
        }
        else {
            input.classList.remove('input--error');
            input.classList.add('input--success');
        }
    }

    function checkTextarea(textarea) {
        if (textarea.value.length < 20 || textarea.value.length > 2000) {
            textarea.classList.remove('textarea--success');
            textarea.classList.add('textarea--error');
        }
        else {
            textarea.classList.remove('textarea--error');
            textarea.classList.add('textarea--success');
        }
    }

});
