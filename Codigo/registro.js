
const loginButton = document.getElementById('login');
const registerButton = document.getElementById('register');
const container = document.getElementById('container');

    // Evento para mostrar el formulario de iniciar sesión
loginButton.addEventListener('click', () => {
    container.classList.remove("active"); // Remueve la clase active para mostrar el formulario de iniciar sesión
});

    // Evento para mostrar el formulario de registro
registerButton.addEventListener('click', () => {
    container.classList.add("active"); // Añade la clase active para mostrar el formulario de registro
});





