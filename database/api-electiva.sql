-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-04-2024 a las 06:24:27
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `api-electiva`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(10) NOT NULL,
  `nombre` varchar(32) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `image` varchar(32) NOT NULL,
  `categoria` varchar(32) NOT NULL,
  `fecha_creacion` varchar(32) NOT NULL,
  `fecha_actualizacion` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `precio` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `image`, `categoria`, `fecha_creacion`, `fecha_actualizacion`, `precio`) VALUES
(1, 'Botines ProStrike', 'Botines de fútbol con diseño aerodinámico para máximo rendimiento.', 'imagen6.jpg', 'Calzado', '2024-04-14', '2024-04-14 05:00:00', 89.99),
(2, 'Tablet NeoPad X', 'Tablet con pantalla de alta definición y procesador rápido para multitarea.', 'imagen7.jpg', 'Electrónica', '2024-04-14', '2024-04-14 05:00:00', 299),
(3, 'Auriculares SonicBass', 'Auriculares inalámbricos con sonido envolvente y cancelación de ruido.', 'imagen8.jpg', 'Tecnología', '2024-04-14', '2024-04-14 05:00:00', 129.99),
(4, 'Libro El Secreto del Bosque', 'Novela de misterio ambientada en un bosque encantado.', 'imagen9.jpg', 'Libros', '2024-04-14', '2024-04-14 05:00:00', 18.5),
(5, 'Maleta Voyager Plus', 'Maleta con ruedas giratorias y cerradura TSA para viajes seguros.', 'imagen10.jpg', 'Equipaje', '2024-04-14', '2024-04-14 05:00:00', 75),
(6, 'Chaqueta Polar Heat', 'Chaqueta polar térmica ideal para actividades al aire libre en climas fríos.', 'imagen11.jpg', 'Ropa', '2024-04-14', '2024-04-14 05:00:00', 65.5),
(7, 'Teléfono Galaxy Zoom', 'Teléfono móvil con cámara de zoom óptico y pantalla de alta resolución.', 'imagen12.jpg', 'Tecnología', '2024-04-14', '2024-04-14 05:00:00', 699),
(8, 'Bicicleta Mountain Pro', 'Bicicleta de montaña con suspensión doble y frenos de disco para terrenos difíciles.', 'imagen13.jpg', 'Deportes', '2024-04-14', '2024-04-14 05:00:00', 550),
(9, 'Gafas de Sol SunShield', 'Gafas de sol polarizadas con protección UV y diseño moderno.', 'imagen14.jpg', 'Accesorios', '2024-04-14', '2024-04-14 05:00:00', 35.99),
(10, 'Cafetera Expresso Elite', 'Máquina de café expresso con sistema de calentamiento rápido y vaporizador.', 'imagen15.jpg', 'Electrodomésticos', '2024-04-14', '2024-04-14 05:00:00', 150);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
