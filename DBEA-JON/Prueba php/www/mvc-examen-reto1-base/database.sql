-- Base de datos para gestión de torneos
DROP DATABASE IF EXISTS dwes_torneos;
CREATE DATABASE dwes_torneos CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE dwes_torneos;

-- Tabla de torneos
CREATE TABLE torneos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(200) NOT NULL,
    juego VARCHAR(100) NOT NULL,
    descripcion TEXT,
    fecha DATE NOT NULL,
    plazas_totales INT NOT NULL DEFAULT 16,
    estado ENUM('abierto', 'cerrado') DEFAULT 'abierto',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;

-- Insertar torneos de ejemplo
INSERT INTO torneos (titulo, juego, descripcion, fecha, plazas_totales, estado) VALUES
('Torneo Spring 2025', 'League of Legends', 'Torneo clasificatorio para la temporada primavera. Equipos de 5 jugadores.', '2025-03-15', 32, 'abierto'),
('Champions Cup', 'Valorant', 'Copa de campeones con premios en efectivo. Formato 5v5.', '2025-04-10', 16, 'abierto'),
('Masters Tournament', 'CS:GO', 'Torneo profesional con las mejores escuadras del país.', '2025-05-20', 24, 'abierto'),
('Rocket League Pro', 'Rocket League', 'Competición 3v3 para equipos profesionales.', '2025-03-25', 16, 'abierto'),
('FIFA Champions', 'FIFA 24', 'Torneo individual de FIFA. Premios para los 3 primeros.', '2025-04-05', 64, 'abierto'),
('Winter Cup', 'Fortnite', 'Copa de invierno - modo squad. Premios especiales.', '2025-02-15', 40, 'cerrado');

