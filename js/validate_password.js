document.addEventListener('DOMContentLoaded', function() {
    const passwordInput = document.getElementById('password');
    const confirmPasswordInput = document.getElementById('confirm_password');
    const signupButton = document.querySelector('.sign-in');
    const confirmPasswordGroup = confirmPasswordInput.parentElement;
    let passwordMatch = false;

    function validatePasswords() {
        const password = passwordInput.value;
        const confirmPassword = confirmPasswordInput.value;

        if (password === confirmPassword && password !== '' && password.length > 8) {
            passwordMatch = true;
            confirmPasswordGroup.classList.remove('error');
        } else {
            passwordMatch = false;
            confirmPasswordGroup.classList.add('error');
        }

        signupButton.disabled = !passwordMatch;
    }

    passwordInput.addEventListener('input', validatePasswords);
    confirmPasswordInput.addEventListener('input', validatePasswords);

    signupButton.disabled = true;
});