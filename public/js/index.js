

//-----------------------------toggle password-----------------------------------------
const togglePasswordButtons = document.querySelectorAll('.togglePasswordButton');

    togglePasswordButtons.forEach(button => {
    button.addEventListener('click', function() {
        const passwordInput = this.parentElement.querySelector('.passwordInput');
        const eyeIconOpen = this.querySelector('.eyeIconOpen');
        const eyeIconClosed = this.querySelector('.eyeIconClosed');

        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            eyeIconClosed.classList.remove('hidden');
            eyeIconOpen.classList.add('hidden');
        } else {
            passwordInput.type = 'password';
            eyeIconClosed.classList.add('hidden');
            eyeIconOpen.classList.remove('hidden');
        }
    });
});
//-------------------------------photo script----------------------------------------------
