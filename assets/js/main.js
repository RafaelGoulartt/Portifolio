/* ======================================================
   MAIN JS – PORTFÓLIO
====================================================== */

document.addEventListener('DOMContentLoaded', () => {

  /* --------------------------------------------------
     EFEITO DE NAVBAR AO SCROLL
  -------------------------------------------------- */
  const navbar = document.querySelector('.custom-navbar');

  window.addEventListener('scroll', () => {
    if (window.scrollY > 50) {
      navbar.classList.add('scrolled');
    } else {
      navbar.classList.remove('scrolled');
    }
  });

  /* --------------------------------------------------
     ANIMAÇÃO DE ENTRADA 
  -------------------------------------------------- */
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('show');
      }
    });
  }, {
    threshold: 0.15
  });

  document.querySelectorAll('.section-padding').forEach(section => {
    observer.observe(section);
  });

});

/* --------------------------------------------------
     Mudança do Tema Escuro para o tema claro
  -------------------------------------------------- */

document.addEventListener('DOMContentLoaded', () => {

  const toggleBtn = document.getElementById('themeToggle');
  const html = document.documentElement;

  const savedTheme = localStorage.getItem('theme');
  if (savedTheme) {
    html.setAttribute('data-theme', savedTheme);
    toggleBtn.textContent = savedTheme === 'light' ? '🌙' : '☀️';
  }

  toggleBtn.addEventListener('click', () => {
    const currentTheme = html.getAttribute('data-theme') || 'dark';
    const newTheme = currentTheme === 'dark' ? 'light' : 'dark';

    html.setAttribute('data-theme', newTheme);
    localStorage.setItem('theme', newTheme);
    toggleBtn.textContent = newTheme === 'light' ? '🌙' : '☀️';
  });

});

/* --------------------------------------------------
     Mudança do idioma 
  -------------------------------------------------- */

const supportedLanguages = ['pt', 'en'];
const defaultLanguage = 'pt';

async function loadLanguage(lang) {
  if (!supportedLanguages.includes(lang)) return;

  const response = await fetch(`assets/i18n/${lang}.json`);
  const translations = await response.json();

  document.querySelectorAll('[data-i18n]').forEach(el => {
    const key = el.getAttribute('data-i18n');
    if (translations[key]) {
      el.textContent = translations[key];
    }
  });

  localStorage.setItem('lang', lang);

  const langBtn = document.getElementById('langToggle');
  langBtn.textContent = lang === 'pt' ? 'EN' : 'PT';
}

document.addEventListener('DOMContentLoaded', () => {
  const savedLang = localStorage.getItem('lang') || defaultLanguage;
  loadLanguage(savedLang);

  document.getElementById('langToggle').addEventListener('click', () => {
    const currentLang = localStorage.getItem('lang') || defaultLanguage;
    const newLang = currentLang === 'pt' ? 'en' : 'pt';
    loadLanguage(newLang);
  });
});


/* ======================================================
   ANIMAÇÕES AO SCROLL
====================================================== */

document.addEventListener('DOMContentLoaded', () => {

  const animatedElements = document.querySelectorAll('[data-animate]');

  const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('show');
        observer.unobserve(entry.target);
      }
    });
  }, {
    threshold: 0.15
  });

  animatedElements.forEach(el => observer.observe(el));

});

