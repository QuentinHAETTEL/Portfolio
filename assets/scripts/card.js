window.addEventListener('DOMContentLoaded', function () {

    // Script to manage all cards elements
    const cards = document.querySelectorAll('[data-card]');

    if (cards) {
        cards.forEach(function (card) {
            card.addEventListener('mouseover', function () {
                let cardDetails = card.querySelector('[data-card-details]');
                cardDetails.classList.add('card__description--visible');
            });
            card.addEventListener('mouseout', function () {
                let cardDetails = card.querySelector('[data-card-details]');
                cardDetails.classList.remove('card__description--visible');
            });

            card.addEventListener('click', function () {
                let cardDetails = card.querySelector('[data-card-details]');
                cardDetails.classList.toggle('card__description--visible');
            });
        });
    }


});
