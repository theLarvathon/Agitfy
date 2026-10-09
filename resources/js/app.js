import './bootstrap';

const themeToggle = document.querySelector('#theme-toggle');
const lightIcon = document.querySelector('#theme-icon-light');
const darkIcon = document.querySelector('#theme-icon-dark');

function updateThemeIcon() {
    const isDark = document.documentElement.classList.contains('dark');

    lightIcon?.classList.toggle('hidden', !isDark);
    darkIcon?.classList.toggle('hidden', isDark);
}

updateThemeIcon();

themeToggle?.addEventListener('click', () => {
    const isDark = document.documentElement.classList.toggle('dark');

    localStorage.theme = isDark ? 'dark' : 'light';

    updateThemeIcon();
});