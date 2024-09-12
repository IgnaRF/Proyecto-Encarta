// Obtenemos los elementos de la página
const title = document.getElementById('title');
const content = document.getElementById('content');

// Definimos el contenido de cada sección
const pages = {
    home: {
        title: "Bienvenido a la Página de Inicio",
        content: "Este es el contenido de la página de inicio. Aquí encontrarás información general."
    },
    about: {
        title: "Acerca de Nosotros",
        content: "Somos una empresa dedicada a ofrecer soluciones web innovadoras. Nuestra misión es ayudarte a tener presencia en línea."
    },
    services: {
        title: "Nuestros Servicios",
        content: "Ofrecemos una variedad de servicios que incluyen desarrollo web, marketing digital y diseño gráfico."
    },
    contact: {
        title: "Contáctanos",
        content: "Si tienes alguna pregunta o quieres saber más sobre nosotros, no dudes en contactarnos a través de este formulario."
    }
};

// Función que cambia el contenido según el enlace seleccionado
function loadPage(page) {
    title.innerText = pages[page].title;
    content.innerText = pages[page].content;
}

// Agregar los eventos de clic a los enlaces del menú
document.getElementById('introduccion').addEventListener('click', () => loadPage('home'));
document.getElementById('historia').addEventListener('click', () => loadPage('about'));
document.getElementById('estructura').addEventListener('click', () => loadPage('services'));
document.getElementById('contact').addEventListener('click', () => loadPage('contact'));