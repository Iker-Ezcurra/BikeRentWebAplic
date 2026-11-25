console.log('THEME.JS SE HA CARGADO');

document.documentElement.setAttribute('data-theme', 'dark');

console.log('Tema aplicado:', document.documentElement.getAttribute('data-theme'));

// Aplicar el tema guardado
function applyTheme(theme) {
    document.documentElement.setAttribute('data-theme', theme);
}

// Obtener tema guardado
const savedTheme = localStorage.getItem('theme') || 'light';

// Aplicarlo inmediatamente
applyTheme(savedTheme);

document.addEventListener('DOMContentLoaded', () => {

    const themeToggle = document.getElementById('theme-toggle');

    updateButtonText();

    if (themeToggle) {

        themeToggle.addEventListener('click', () => {

            const currentTheme = localStorage.getItem('theme') || 'light';

            const newTheme = currentTheme === 'dark' ? 'light' : 'dark';

            localStorage.setItem('theme', newTheme);

            applyTheme(newTheme);

            updateButtonText();
        });
    }

    function updateButtonText() {

        if (!themeToggle) return;

        const currentTheme = localStorage.getItem('theme');

        themeToggle.textContent =
            currentTheme === 'dark' ? 'Modo claro' : 'Modo oscuro';
    }

});