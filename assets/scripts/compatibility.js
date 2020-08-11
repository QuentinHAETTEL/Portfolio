export function webpSupport() {
    let webp = new Image();
    webp.onload = webp.onerror = function() {
        if (webp.height !== 2) {
            document.body.classList.add('no-webp');
        }
    };
    webp.src = 'data:image/webp;base64,UklGRjoAAABXRUJQVlA4IC4AAACyAgCdASoCAAIALmk0mk0iIiIiIgBoSygABc6WWgAA/veff/0PP8bA//LwYAAA';
}