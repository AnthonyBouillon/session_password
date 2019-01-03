var submit = document.getElementById('submit');

submit.addEventListener("click", function () {
    var name = document.getElementById('name');
    var firstname = document.getElementById('firstname');
    var email = document.getElementById('email');
    var login = document.getElementById('login');
    if (name.value.length > 255) {
        document.getElementById('n_error').innerText = 'Limitation à 255 caractères';
    } else {
        document.getElementById('n_error').innerText = '';
    }
    if (firstname.value.length > 255) {
        document.getElementById('f_error').innerText = 'Limitation à 255 caractères';
    } else {
        document.getElementById('f_error').innerText = '';
    }
    if (email.value.length > 255) {
        document.getElementById('e_error').innerText = 'Limitation à 255 caractères';
    } else {
        document.getElementById('e_error').innerText = '';
    }
    if (login.value.length > 255) {
        document.getElementById('l_error').innerText = 'Limitation à 255 caractères';
    } else {
        document.getElementById('l_error').innerText = '';
    }
    if (document.getElementById('password').value != document.getElementById('confirm_password').value) {
        document.getElementById('password_not_c').innerText = 'The two passwords are not identical';
    } else {
        document.getElementById('password_not_c').innerText = '';
    }
});
