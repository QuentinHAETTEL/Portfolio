window.addEventListener('DOMContentLoaded', function () {

    // Script to manage all cards elements
    const cards = document.querySelectorAll('[data-card]');

    if (cards) {
        cards.forEach(function (card) {
            card.addEventListener('mouseover', function () {
                let cardDetails = card.querySelector('[data-card-details]');
                cardDetails.classList.add('project__details--visible');
            });
            card.addEventListener('mouseout', function () {
                let cardDetails = card.querySelector('[data-card-details]');
                cardDetails.classList.remove('project__details--visible');
            });

            card.addEventListener('click', function () {
                let cardDetails = card.querySelector('[data-card-details]');
                cardDetails.classList.toggle('project__details--visible');
            });
        });
    }


});
