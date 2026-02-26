// script.ts - Versión funcional

// Esperar a que el DOM cargue
document.addEventListener('DOMContentLoaded', () => {
    console.log('🔥 TypeScript cargado correctamente');
    
    // Buscar el contenedor
    const contenedor = document.getElementById('proyectos-container');
    
    if (contenedor) {
        console.log('✅ Contenedor encontrado, insertando proyectos...');
        
        // Datos de ejemplo
        const proyectosTS = [
            {
                titulo: 'App de Tareas con TypeScript',
                descripcion: 'Gestor de tareas usando TypeScript, clases e interfaces',
                tecnologias: ['TypeScript', 'JavaScript', 'Tailwind']
            },
            {
                titulo: 'Validador de Formularios',
                descripcion: 'Validación en tiempo real con tipos personalizados',
                tecnologias: ['TypeScript', 'HTML5', 'CSS']
            }
        ];
        
        // Generar HTML
        let html = '';
        for (let i = 0; i < proyectosTS.length; i++) {
            const p = proyectosTS[i];
            html += `
                <div class="bg-white p-6 rounded-lg shadow-md border border-gray-200">
                    <h3 class="text-xl font-bold mb-2 text-blue-600">${p.titulo}</h3>
                    <p class="text-gray-600 mb-4">${p.descripcion}</p>
                    <div class="mb-4">
                        ${p.tecnologias.map(tech => `<span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">${tech}</span>`).join('')}
                    </div>
                    <button class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded transition ts-btn">
                        Ver demo
                    </button>
                </div>
            `;
        }
        
        contenedor.innerHTML = html;
        
        // Agregar eventos a los botones
        const botones = document.querySelectorAll('.ts-btn');
        for (let j = 0; j < botones.length; j++) {
            botones[j].addEventListener('click', () => {
                alert('Proyecto desarrollado con TypeScript puro');
            });
        }
    } else {
        console.error('❌ No se encontró el contenedor #proyectos-container');
    }
});