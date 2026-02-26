// script.js - JavaScript/TypeScript functionality

// TypeScript-style interfaces (simuladas en JS)
/**
 * @typedef {Object} Proyecto
 * @property {number} id
 * @property {string} titulo
 * @property {string} descripcion
 * @property {string} tecnologias
 */

// Clase para manejar el portafolio (demostrando TS concepts)
class PortfolioManager {
    constructor() {
        this.proyectos = [];
        this.init();
    }

    init() {
        this.cargarProyectos();
        this.setupEventListeners();
        this.animarElementos();
    }

    cargarProyectos() {
        // Simulación de carga de datos (como si fuera TypeScript)
        console.log('Cargando proyectos...');
    }

    setupEventListeners() {
        // Smooth scroll para los links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', (e) => {
                e.preventDefault();
                const target = document.querySelector(anchor.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth' });
                }
            });
        });

        // Efecto hover en proyectos
        const proyectos = document.querySelectorAll('.proyecto-card');
        proyectos.forEach(card => {
            card.addEventListener('mouseenter', () => {
                card.classList.add('transform', 'scale-105', 'transition', 'duration-300');
            });
            card.addEventListener('mouseleave', () => {
                card.classList.remove('transform', 'scale-105');
            });
        });
    }

    animarElementos() {
        // Animación simple al hacer scroll
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('opacity-100', 'translate-y-0');
                    entry.target.classList.remove('opacity-0', 'translate-y-10');
                }
            });
        });

        document.querySelectorAll('.project-card').forEach(card => {
            card.classList.add('opacity-0', 'translate-y-10', 'transition', 'duration-700');
            observer.observe(card);
        });
    }
}

// Inicializar cuando el DOM esté listo
document.addEventListener('DOMContentLoaded', () => {
    new PortfolioManager();
});