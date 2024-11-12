-- Volcando estructura de base de datos para tienda_online
DROP DATABASE IF EXISTS tienda_online;
CREATE DATABASE IF NOT EXISTS tienda_online /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE tienda_online;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-11-2024 a las 01:30:32
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
-- Base de datos: `tienda_online`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `fecha_alta` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nombre`, `apellido`, `email`, `telefono`, `direccion`, `fecha_alta`) VALUES
(1, 'Romina', 'Sosa', 'rominasosatreguer@gmail.com', '+541155432310', 'Lala 897 7b', NULL),
(2, 'Karen', 'Bermúdez', 'Karen@gmail.com', '+541157614613', 'OHiggins 4679 8 87 Nuñez', NULL),
(3, 'Priscila', 'Lera', 'pri@gmail.com', '+541190854312', 'Sarmiento 4679', NULL),
(14, 'Pepito', 'Alvarez', 'pepitoalvarez@outlook.com', '1587900203', 'Avellaneda 855, CABA', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_pedido`
--

CREATE TABLE `detalle_pedido` (
  `id_detalle` int(11) NOT NULL,
  `id_producto` int(11) DEFAULT NULL,
  `id_pedido` int(11) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `precio` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `detalle_pedido`
--

INSERT INTO `detalle_pedido` (`id_detalle`, `id_producto`, `id_pedido`, `cantidad`, `precio`) VALUES
(2, 1, 12, 1, 4500),
(3, 2, 13, 3, 4000),
(4, 1, 15, 1, 4500);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `id_pedido` int(11) NOT NULL,
  `id_cliente` int(11) DEFAULT NULL,
  `fecha_pedido` datetime DEFAULT current_timestamp(),
  `monto_total` decimal(10,2) NOT NULL,
  `estado` enum('pendiente','completado') DEFAULT 'pendiente',
  `metodo_pago` enum('efectivo') DEFAULT 'efectivo',
  `delivery` int(11) DEFAULT NULL,
  `direccion_envio` text DEFAULT NULL,
  `contacto` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`id_pedido`, `id_cliente`, `fecha_pedido`, `monto_total`, `estado`, `metodo_pago`, `delivery`, `direccion_envio`, `contacto`) VALUES
(5, 1, '2024-11-10 17:34:58', 4000.00, 'pendiente', 'efectivo', 1, 'Avenida San Martín 3411', 'rominasosa@blabla.com'),
(6, 1, '2024-11-10 17:35:30', 0.00, 'pendiente', 'efectivo', 1, 'Avenida San Martín 3411', 'rominasosa@blabla.com'),
(7, 1, '2024-11-10 17:38:34', 0.00, 'pendiente', 'efectivo', 1, 'Av. San Martín 3411', 'rominasosa@blabla.com'),
(8, 1, '2024-11-10 18:42:37', 0.00, 'pendiente', 'efectivo', 1, 'bla bla', '11111'),
(9, 1, '2024-11-10 18:44:21', 0.00, 'pendiente', 'efectivo', 1, 'bla bla', '11111'),
(10, 1, '2024-11-10 18:44:25', 0.00, 'pendiente', 'efectivo', 1, 'bla bla', '11111'),
(11, 1, '2024-11-10 18:45:07', 0.00, 'completado', 'efectivo', 1, 'bla bla', '11111'),
(12, 1, '2024-11-10 18:46:38', 4500.00, 'pendiente', 'efectivo', 1, 'bla bla', '11111'),
(13, 1, '2024-11-10 18:49:02', 12000.00, 'completado', '', 0, 'Calle falsa 123', 'rominasosa@blabla.com'),
(14, 1, '2024-11-10 20:02:13', 0.00, 'pendiente', 'efectivo', 1, 'calle falsa 123', 'rominasosa@blabla.com'),
(15, 1, '2024-11-10 20:02:48', 4500.00, 'pendiente', 'efectivo', 1, 'calle falsa 123', 'rominasosa@blabla.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id_producto` int(11) NOT NULL,
  `nombre_producto` varchar(100) NOT NULL,
  `descripcion` text DEFAULT NULL,
  `imagen` text DEFAULT NULL,
  `tipo_torta` enum('entera','mediana','porción') NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `disponible` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_producto`, `nombre_producto`, `descripcion`, `imagen`, `tipo_torta`, `precio`, `disponible`) VALUES
(1, 'Tarta de frutilla con crema', 'Porción de torta de frutillas, azúcar en una base de masa quebrada con gelatina y crema.', '/public/img/tarta_frutilla.png', 'entera', 4500.00, 1),
(2, 'Budín de limón', 'Porción de un delicioso budín esponjoso impregnado con jugo de limón fresco y ralladura de limón, coronado con un glaseado de limón para un sabor cítrico irresistible.', '/public/img/budin_limon.png', 'entera', 4000.00, 1),
(3, 'Tarta de arándanos', 'Porción de una deliciosa combinación de arándanos frescos, endulzados con un toque de azúcar y envueltos en una crujiente masa de tarta.', '/public/img/tarta_arandanos.png', 'entera', 4200.00, 1),
(4, 'Arrollado de frutos rojos', 'Porción de una exquisita mezcla de frutos rojos frescos envueltos en una suave masa de bizcocho.', '/public/img/arrollado.png', 'entera', 3100.00, 1),
(5, 'Lemon Pie', 'Porción de masa quebrada rellena con una suave y cremosa mezcla de limón, adornada con ralladura de limón y merengue italiano.', '/public/img/lemon_pie.png', 'entera', 4500.00, 1),
(6, 'Té Clásico Earl Grey', 'Una taza reconfortante de té negro tradicional, infusionado con agua caliente para liberar su aroma y sabor distintivos, perfecto para acompañar cualquier momento del día.', '/public/img/te_clasico.png', 'entera', 2900.00, 1),
(7, 'Té de Hierbas', 'Una taza de hierbas naturales, cuidadosamente seleccionadas para crear una bebida relajante y reconfortante que te transportará a un estado de serenidad.', '/public/img/te_manzanilla.png', 'entera', 3000.00, 1),
(8, 'Té helado con limón', 'Una taza refrescante de té helado con un toque de limón fresco, perfectamente equilibrado para ofrecerte una bebida fría y revitalizante.', '/public/img/te_helado.png', 'entera', 3600.00, 1),
(9, 'Té Verde', 'Una taza de té verde ligero y refrescante, lleno de antioxidantes y con un sabor suave y herbáceo.', '/public/img/te_verde.png', 'entera', 3200.00, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nombre_usuario` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contraseña` varchar(255) NOT NULL,
  `tipo_usuario` enum('Administrador') DEFAULT 'Administrador'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre_usuario`, `email`, `contraseña`, `tipo_usuario`) VALUES
(1, 'milena', 'milena@hotmail.com', '123', 'Administrador'),
(2, 'ignacio', 'ignacio@hotmail.com', '123', 'Administrador');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`) USING BTREE;

--
-- Indices de la tabla `detalle_pedido`
--
ALTER TABLE `detalle_pedido`
  ADD PRIMARY KEY (`id_detalle`),
  ADD KEY `id_producto` (`id_producto`),
  ADD KEY `id_pedido` (`id_pedido`);


--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`id_pedido`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `detalle_pedido`
--
ALTER TABLE `detalle_pedido`
  MODIFY `id_detalle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;


--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `id_pedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
