<?php
// config.php - Conexión a la base de datos
$host = 'localhost';
$user = 'root';
$password = ''; // XAMPP por defecto no tiene contraseña
$dbname = 'mi_portafolio';

// Crear conexión
$conn = new mysqli($host, $user, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Configurar caracteres
$conn->set_charset("utf8");

// Función para depuración (opcional)
function debug($data) {
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}
?>