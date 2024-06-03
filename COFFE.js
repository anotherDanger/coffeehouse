document.addEventListener('DOMContentLoaded', function() {
    const plusBtn = document.querySelector('.plus-btn');
    const minusBtn = document.querySelector('.minus-btn');
    const quantityInput = document.querySelector('.quantity-input');

    plusBtn.addEventListener('click', function() {
        quantityInput.value = parseInt(quantityInput.value) + 1;
    });

    minusBtn.addEventListener('click', function() {
        if (parseInt(quantityInput.value) > 1) {
            quantityInput.value = parseInt(quantityInput.value) - 1;
        }
    });
});