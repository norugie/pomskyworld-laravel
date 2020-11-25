(function () {
    'use strict';

    // Validating inputs
    window.addEventListener('load', function () {
        const form = $('.needs-validation');
        // Loop over forms and prevent submission
        Array.prototype.filter.call(form, function (form) {
            form.addEventListener('submit', function (event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    }, false);

    // Function for preventing negative signs and decimals
    function noNegativeValue(keyPressed) {
        if (!((
                    keyPressed.keyCode > 95 && keyPressed.keyCode < 106) ||
                (keyPressed.keyCode > 47 && keyPressed.keyCode < 58) ||
                keyPressed.keyCode == 8 ||
                keyPressed.keyCode == 9 ||
                keyPressed.keyCode == 38 ||
                keyPressed.keyCode == 40)) return false;
    }

    $('#parent_age_years').keydown(noNegativeValue);
    $('#parent_age_months').keydown(noNegativeValue);
})();
