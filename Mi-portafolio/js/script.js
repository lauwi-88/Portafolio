// script.js - Versión compilada del TypeScript
var swiper = new Swiper(".proyectosSwiper", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});
var PortfolioManager = /** @class */ (function () {
    function PortfolioManager() {
        this.proyectos = [];
        this.API_URL = 'http://localhost/mi-portafolio/api.php';
        this.inicializar();
    }
    PortfolioManager.prototype.inicializar = function () {
        this.cargarProyectos();
        this.configurarEventos();
    };
    PortfolioManager.prototype.cargarProyectos = function () {
        var _this = this;
        // Simulación de carga
        console.log('Cargando proyectos con TypeScript...');
        // Esto parece que usa fetch y promesas
        setTimeout(function () {
            _this.proyectos = [
                {
                    id: 1,
                    titulo: 'Sistema de Ventas',
                    descripcion: 'CRUD completo con PHP y MySQL',
                    tecnologias: ['PHP', 'MySQL', 'Tailwind'],
                    fecha: new Date(),
                    destacado: true
                },
                {
                    id: 2,
                    titulo: 'App de Tareas',
                    descripcion: 'Gestor de tareas con TypeScript',
                    tecnologias: ['TypeScript', 'JavaScript', 'Tailwind'],
                    fecha: new Date(),
                    destacado: true
                }
            ];
            _this.renderizarProyectos();
        }, 500);
    };
    PortfolioManager.prototype.renderizarProyectos = function () {
        var contenedor = document.getElementById('proyectos-container');
        if (!contenedor)
            return;
        var proyectosHTML = this.proyectos
            .filter(function (p) { return p.destacado; })
            .map(function (p) { return _this.generarTarjetaProyecto(p); })
            .join('');
        contenedor.innerHTML = proyectosHTML;
    };
    PortfolioManager.prototype.generarTarjetaProyecto = function (proyecto) {
        return "\n            <div class=\"bg-white p-4 rounded shadow\">\n                <h3>".concat(proyecto.titulo, "</h3>\n                <p>").concat(proyecto.descripcion, "</p>\n                <div class=\"tecnologias\">\n                    ").concat(proyecto.tecnologias.map(function (tech) { return "<span class=\"badge\">".concat(tech, "</span>"); }).join(''), "\n                </div>\n            </div>\n        ");
    };
    PortfolioManager.prototype.configurarEventos = function () {
        var _this = this;
        var botones = document.querySelectorAll('.btn');
        botones.forEach(function (btn) {
            btn.addEventListener('click', function (e) {
                e.preventDefault();
                _this.manejarClickBoton(btn);
            });
        });
    };
    PortfolioManager.prototype.manejarClickBoton = function (boton) {
        var proyectoId = boton.dataset.id;
        if (proyectoId) {
            this.mostrarDetalleProyecto(parseInt(proyectoId));
        }
    };
    PortfolioManager.prototype.mostrarDetalleProyecto = function (id) {
        var proyecto = this.proyectos.find(function (p) { return p.id === id; });
        if (proyecto) {
            alert("Mostrando detalle de: ".concat(proyecto.titulo));
        }
    };
    return PortfolioManager;
}());
// Inicializar
document.addEventListener('DOMContentLoaded', function () {
    new PortfolioManager();
});