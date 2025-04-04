const emailInput = document.getElementById('email');
const emailError = document.getElementById('emailError');
const signInForm = document.getElementById('signInForm');
function validateEmail(email) {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}
emailInput.addEventListener('input', function() {
    if (emailInput.value.trim() === '') {
        emailError.textContent = 'Email is required.';
        emailInput.classList.remove('valid-input');
        emailInput.classList.add('invalid-input');
    } else if (!validateEmail(emailInput.value)) {
        emailError.textContent = 'Invalid email format.';
        emailInput.classList.remove('valid-input');
        emailInput.classList.add('invalid-input');
    } else {
        emailError.textContent = '';
        emailInput.classList.remove('invalid-input');
        emailInput.classList.add('valid-input');
    }
});
signInForm.addEventListener('submit', function(event) {
    if (emailInput.value.trim() === '' || !validateEmail(emailInput.value)) {
        event.preventDefault();
        emailError.textContent = emailInput.value.trim() === '' ? 'Email is required.' : 'Invalid email format.';
        emailInput.classList.add('invalid-input');
    }
});
