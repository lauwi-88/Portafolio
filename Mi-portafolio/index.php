<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAURIVEL VERA | Desarrolladora Web Junior</title>
    <!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<style>
    .swiper {
        width: 100%;
        padding: 20px 0 50px 0;
    }
    
    .swiper-slide {
        height: auto;
    }
    
    .swiper-button-next,
    .swiper-button-prev {
        color: #8b5cf6; /* Color morado */
        background: white;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }
    
    .swiper-button-next:after,
    .swiper-button-prev:after {
        font-size: 18px;
    }
    
    .swiper-button-next:hover,
    .swiper-button-prev:hover {
        background: #8b5cf6;
        color: white;
    }
    
    .swiper-pagination-bullet {
        background: #8b5cf6;
    }
    
    .swiper-pagination-bullet-active {
        background: #6d28d9;
    }
    
    /* Responsive */
    @media (max-width: 768px) {
        .swiper-button-next,
        .swiper-button-prev {
            display: none;
        }
    }
</style>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Animaciones AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
        * {
            font-family: 'Poppins', sans-serif;
        }
        .gradient-bg {
            background: linear-gradient(135deg, #a166ea 0%, #764ba2 100%);
        }
        .card-hover {
            transition: all 0.3s ease;
        }
        .card-hover:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
        }
        .tech-badge {
            transition: all 0.3s ease;
        }
        .tech-badge:hover {
            transform: scale(1.05);
            background: #bd46e5 !important;
            color: white !important;
        }
    </style>
</head>
<body class="bg-gray-50">
    <?php
    require_once 'config.php';
    $sql = "SELECT * FROM proyect ORDER BY fecha DESC";
    $result = $conn->query($sql);
    ?>

    <!-- Navbar -->
    <nav class="bg-white shadow-lg fixed w-full z-50">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center h-16">
                <a href="#" class="text-2xl font-bold bg-gradient-to-r from-purple-600 to-blue-600 text-transparent bg-clip-text">Lauri</a>
                <div class="hidden md:flex space-x-8">
                    <a href="#inicio" class="text-gray-700 hover:text-purple-600 transition">Inicio</a>
                    <a href="#tecnologias" class="text-gray-700 hover:text-purple-600 transition">Tecnologías</a>
                    <a href="#proyectos" class="text-gray-700 hover:text-purple-600 transition">Proyectos</a>
                    <a href="#contacto" class="text-gray-700 hover:text-purple-600 transition">Contacto</a>
                </div>
                <button class="md:hidden text-gray-700">
                    <i class="fas fa-bars text-2xl"></i>
                </button>
            </div>
        </div>
    </nav>

   <!-- Hero Section con patrón -->
<section id="inicio" class="relative pt-32 pb-20 overflow-hidden" style="background: linear-gradient(135deg, #b22af5 0%, #C850C0 46%, #FFCC70 100%);">
    <!-- Patrón de puntos -->
    <div class="absolute inset-0 opacity-20" style="background-image: radial-gradient(white 1px, transparent 1px); background-size: 30px 30px;"></div>
    
    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-4xl mx-auto text-center text-white" data-aos="fade-up">
            <!-- Círculos decorativos -->
            <div class="flex justify-center gap-2 mb-6">
                <div class="w-3 h-3 bg-white rounded-full"></div>
                <div class="w-3 h-3 bg-white rounded-full opacity-70"></div>
                <div class="w-3 h-3 bg-white rounded-full opacity-40"></div>
                <div class="w-3 h-3 bg-white rounded-full opacity-20"></div>
            </div>
            
            <h1 class="text-5xl md:text-7xl font-bold mb-4">Laurivel Vera</h1>
            <p class="text-2xl md:text-3xl mb-6 font-light">Desarrolladora Web Junior</p>
            
            <div class="h-1 w-24 bg-white mx-auto mb-8 rounded-full opacity-50"></div>
            
            <p class="text-lg mb-8 max-w-xl mx-auto opacity-90">
                Creando soluciones web con PHP, JavaScript y amor por el código limpio
            </p>
            
            <div class="flex justify-center gap-4 flex-wrap">
                <a href="#proyectos" class="bg-white text-purple-600 px-8 py-3 rounded-lg font-semibold hover:bg-opacity-90 transition shadow-lg">
                    <i class="fas fa-code mr-2"></i>Ver proyectos
                </a>
                <a href="#contacto" class="bg-transparent border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-purple-600 transition">
                    <i class="fas fa-heart mr-2"></i>Contactar
                </a>
            </div>
        </div>
    </div>
</section>

    <!-- Tecnologías -->
    <section id="tecnologias" class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-4" data-aos="fade-up">Stack Tecnológico</h2>
            <p class="text-gray-600 text-center mb-12 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="100">
                Tecnologías con las que trabajo día a día para crear aplicaciones web modernas y funcionales
            </p>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6 max-w-4xl mx-auto">
                <div class="bg-gray-50 p-6 rounded-xl text-center card-hover cursor-pointer" data-aos="flip-left" data-aos-delay="0">
                    <i class="fab fa-php text-5xl text-purple-600 mb-3"></i>
                    <p class="font-semibold">PHP</p>
                </div>
                <div class="bg-gray-50 p-6 rounded-xl text-center card-hover cursor-pointer" data-aos="flip-left" data-aos-delay="50">
                    <i class="fas fa-database text-5xl text-blue-600 mb-3"></i>
                    <p class="font-semibold">MySQL</p>
                </div>
                <div class="bg-gray-50 p-6 rounded-xl text-center card-hover cursor-pointer" data-aos="flip-left" data-aos-delay="100">
                    <i class="fab fa-js text-5xl text-yellow-500 mb-3"></i>
                    <p class="font-semibold">JavaScript</p>
                </div>
                <div class="bg-gray-50 p-6 rounded-xl text-center card-hover cursor-pointer" data-aos="flip-left" data-aos-delay="150">
                    <i class="fab fa-js text-5xl text-blue-500 mb-3"></i>
                    <p class="font-semibold">TypeScript</p>
                </div>
                <div class="bg-gray-50 p-6 rounded-xl text-center card-hover cursor-pointer" data-aos="flip-left" data-aos-delay="200">
                    <i class="fab fa-css3-alt text-5xl text-blue-600 mb-3"></i>
                    <p class="font-semibold">Tailwind</p>
                </div>
                <div class="bg-gray-50 p-6 rounded-xl text-center card-hover cursor-pointer" data-aos="flip-left" data-aos-delay="250">
                    <i class="fab fa-figma text-5xl text-pink-600 mb-3"></i>
                    <p class="font-semibold">Figma</p>
                </div>
            </div>
        </div>
    </section>

   <!-- Proyectos Destacados - CARRUSEL -->
<section id="proyectos" class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-center mb-4" data-aos="fade-up">Proyectos Destacados</h2>
        <p class="text-gray-600 text-center mb-12 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="100">
            Desliza para ver todos mis proyectos
        </p>
        
        <?php if ($result && $result->num_rows > 0): ?>
            <!-- Swiper container -->
            <div class="swiper proyectosSwiper">
                <div class="swiper-wrapper">
                    <?php 
                    // Reiniciamos el puntero del resultado por si ya se usó antes
                    $result->data_seek(0);
                    while($row = $result->fetch_assoc()): 
                    ?>
                        <div class="swiper-slide">
                            <div class="bg-white rounded-2xl shadow-lg overflow-hidden card-hover h-full mx-2">
                                <div class="h-48 bg-gradient-to-r from-purple-500 to-pink-500 relative overflow-hidden group">
                                    <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition">
                                        <span class="text-white font-semibold">Ver proyecto</span>
                                    </div>
                                    <i class="fas fa-code absolute bottom-4 right-4 text-white text-4xl opacity-30"></i>
                                </div>
                                <div class="p-6">
                                    <h3 class="text-2xl font-bold mb-2"><?php echo htmlspecialchars($row['titulo']); ?></h3>
                                    <p class="text-gray-600 mb-4"><?php echo htmlspecialchars($row['descripcion']); ?></p>
                                    <div class="mb-4 flex flex-wrap gap-2">
                                        <?php 
                                        $tecnologias = explode(',', $row['tecnologias']);
                                        foreach($tecnologias as $tech): 
                                        ?>
                                            <span class="tech-badge bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-sm font-medium">
                                                <?php echo trim($tech); ?>
                                            </span>
                                        <?php endforeach; ?>
                                    </div>
                                    <div class="flex justify-between items-center">
                                        <a href="#" class="text-purple-600 hover:text-purple-800 font-semibold inline-flex items-center group">
                                            Ver detalles 
                                            <i class="fas fa-arrow-right ml-2 group-hover:translate-x-2 transition"></i>
                                        </a>
                                        <a href="#" class="text-gray-400 hover:text-gray-600">
                                            <i class="fab fa-github text-2xl"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
                
                <!-- Paginación (puntos) -->
                <div class="swiper-pagination"></div>
                
                <!-- Botones de navegación -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        <?php else: ?>
            <p class="text-center text-gray-500">No hay proyectos cargados en la base de datos.</p>
        <?php endif; ?>
    </div>
</section>

    <!-- Estadísticas -->
    <section class="py-16 gradient-bg text-white">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-4xl mx-auto text-center">
                <div data-aos="zoom-in">
                    <div class="text-5xl font-bold mb-2">5+</div>
                    <p class="text-xl opacity-90">Proyectos Completados</p>
                </div>
                <div data-aos="zoom-in" data-aos-delay="100">
                    <div class="text-5xl font-bold mb-2">1+</div>
                    <p class="text-xl opacity-90">Año de Experiencia</p>
                </div>
                <div data-aos="zoom-in" data-aos-delay="200">
                    <div class="text-5xl font-bold mb-2">100%</div>
                    <p class="text-xl opacity-90">Dedicación y Pasión</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contacto -->
    <section id="contacto" class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-4xl font-bold text-center mb-4" data-aos="fade-up">¿Interesada en trabajar juntos?</h2>
                <p class="text-gray-600 text-center mb-12" data-aos="fade-up" data-aos-delay="100">
                    Estoy disponible para oportunidades laborales y proyectos freelance
                </p>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="bg-gray-50 p-8 rounded-2xl" data-aos="fade-right">
                        <h3 class="text-2xl font-bold mb-6">Información de Contacto</h3>
                        <div class="space-y-4">
                            <div class="flex items-center">
                                <div class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center text-purple-600 mr-4">
                                    <i class="fas fa-phone-alt text-xl"></i>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-500">Teléfono</p>
                                    <p class="font-semibold">+58 414-7358834</p>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <div class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center text-purple-600 mr-4">
                                    <i class="fas fa-envelope text-xl"></i>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-500">Email</p>
                                    <p class="font-semibold">laurivelvera4@gmail.com</p>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <div class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center text-purple-600 mr-4">
                                    <i class="fas fa-map-marker-alt text-xl"></i>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-500">Ubicación</p>
                                    <p class="font-semibold">Caracas, Venezuela</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="flex gap-4 mt-8">
                            <a href="#" class="w-10 h-10 bg-gray-200 rounded-full flex items-center justify-center text-gray-600 hover:bg-purple-600 hover:text-white transition">
                                <i class="fab fa-github"></i>
                            </a>
                            <a href="#" class="w-10 h-10 bg-gray-200 rounded-full flex items-center justify-center text-gray-600 hover:bg-blue-600 hover:text-white transition">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="#" class="w-10 h-10 bg-gray-200 rounded-full flex items-center justify-center text-gray-600 hover:bg-pink-600 hover:text-white transition">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                    
                    <div class="bg-gray-50 p-8 rounded-2xl" data-aos="fade-left">
                        <h3 class="text-2xl font-bold mb-6">Envíame un mensaje</h3>
                        <form>
                            <div class="mb-4">
                                <input type="text" placeholder="Tu nombre" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:border-purple-600">
                            </div>
                            <div class="mb-4">
                                <input type="email" placeholder="Tu email" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:border-purple-600">
                            </div>
                            <div class="mb-4">
                                <textarea rows="4" placeholder="Tu mensaje" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:border-purple-600"></textarea>
                            </div>
                            <button class="w-full gradient-bg text-white py-3 rounded-lg font-semibold hover:opacity-90 transition transform hover:scale-105">
                                Enviar mensaje <i class="fas fa-paper-plane ml-2"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="container mx-auto px-4 text-center">
            <p class="text-3xl font-bold mb-4 bg-gradient-to-r from-purple-400 to-blue-400 text-transparent bg-clip-text">Laurivel Vera</p>
            <p class="text-gray-400 mb-6">Desarrolladora Web Junior | Creando soluciones web con pasión</p>
            <p class="text-gray-500">© 2026 Todos los derechos reservados</p>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true
        });

        // Smooth scroll para los links del navbar
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Navbar transparente al hacer scroll
        window.addEventListener('scroll', function() {
            const nav = document.querySelector('nav');
            if (window.scrollY > 100) {
                nav.classList.add('shadow-lg');
                nav.classList.remove('bg-opacity-95');
            } else {
                nav.classList.remove('shadow-lg');
            }
        });
    </script>
    <script src="js/script.js"></script>
    <!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    // Inicializar Swiper
    var swiper = new Swiper(".proyectosSwiper", {
        slidesPerView: 1,
        spaceBetween: 20,
        loop: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            640: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 30,
            },
        },
    });
</script>
</body>
</html>