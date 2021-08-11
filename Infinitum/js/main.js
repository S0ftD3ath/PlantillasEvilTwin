'use strict'

window.addEventListener('load', () => {
    let checkClave = document.querySelector("#showPassword");

    // errors
    let error = document.querySelector(".error");
    let error_message = document.querySelector("#error_message");
    error.style.display = "none";

    // Passwords
    let password1 = document.querySelector("#password1");
    let password2 = document.querySelector("#password2");

    // Submit
    let form = document.querySelector(".form");
    let submit = document.querySelector("#submit");

    checkClave.addEventListener('change', (event) => {
        let checked = checkClave.checked;

        if ( checked === true ) {
            password1.type = "text";
            password2.type = "text";
        } else {
            password1.type = "password";
            password2.type = "password";
        }
    });

    form.addEventListener("submit", (e) => {
        if ( password1.value === password2.value ) {
            return;
        }

        password1.style = "border: 1px solid red;";
        password2.style = "border: 1px solid red;";
        error.style.display = "flex";
        error_message.innerHTML = "Las contraseñas no coinciden.";     
        e.preventDefault();
        return false;
    });
});