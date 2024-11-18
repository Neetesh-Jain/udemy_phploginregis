const togglePassword = document.querySelector('.toggle-password');
const passwordField = document.querySelector('input[name="password"]');

togglePassword.addEventListener('click', function() {
    const type = passwordField.type === 'password' ? 'text' : 'password';
    passwordField.type = type;
    this.textContent = type === 'password' ? '👁️' : '🙈';
});
