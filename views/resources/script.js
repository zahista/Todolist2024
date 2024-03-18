const passwordInput = document.getElementById('password');
const errorMessage = document.querySelector('.form__error-message');

console.log(errorMessage);

passwordInput.addEventListener('keyup', (event) => {

    let value = event.target.value;

    if (value.length < 5) {
        errorMessage.style.display = "block";
    }else{
        errorMessage.style.display = "none";
    }

});


