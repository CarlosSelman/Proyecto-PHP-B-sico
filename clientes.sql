create Database clientes;
use clientes;
-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-11-2021 a las 19:54:49
-- Versión del servidor: 8.0.27
-- Versión de PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `clientes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` mediumint NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `edad` int NOT NULL,
  `genero` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `mail` varchar(50) NOT NULL,
  `direccion` varchar(150) NOT NULL,
  `telefono` varchar(12) NOT NULL,
  `salario` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombre`, `apellido`, `edad`, `genero`, `mail`, `direccion`, `telefono`, `salario`) VALUES
(8, 'Marco', 'Salgado', 19, 'Masculino', 'ms@gmail.com', 'Z7 Guatemala', '1212-5566', '5000.00'),
(10, 'Pamela', 'Selman', 28, 'Femenino', 'ps@gmail.com', 'Zona 9 Guatemala ', '1234-9988', '8888.00'),
(11, 'Pamela', 'Selman', 28, 'Femenino', 'ps@gmail.com', 'Zona 9 Guatemala ', '1234-9988', '8888.00'),
(12, 'Juan', 'Valdez', 19, 'Masculino', 'jv@gmail.com', '25 av Guatemala z7', '2121-6655', '8005.00'),
(13, 'Marco', 'Salgado', 19, 'Masculino', 'ms@gmail.com', 'Z7 Guatemala', '1212-5566', '5000.00'),
(14, 'Fel', 'Pe', 10, 'Masculino', 'felpe@gmail.com', '25 av guate z1', '3322-6677', '1200.00'),
(15, 'Pamela', 'Selman', 28, 'Femenino', 'ps@gmail.com', 'Zona 9 Guatemala ', '1234-9988', '8888.00'),
(16, 'Pamela', 'Selman', 28, 'Femenino', 'ps@gmail.com', 'Zona 9 Guatemala ', '1234-9988', '8888.00'),
(17, 'Juan', 'Valdez', 19, 'Masculino', 'jv@gmail.com', '25 av Guatemala z7', '2121-6655', '8005.00'),
(18, 'Marco', 'Salgado', 19, 'Masculino', 'ms@gmail.com', 'Z7 Guatemala', '1212-5566', '5000.00'),
(19, 'Fel', 'Pe', 10, 'Masculino', 'felpe@gmail.com', '25 av guate z1', '3322-6677', '1200.00'),
(20, 'Pamela', 'Selman', 28, 'Femenino', 'ps@gmail.com', 'Zona 9 Guatemala ', '1234-9988', '8888.00'),
(21, 'Pamela', 'Selman', 28, 'Femenino', 'ps@gmail.com', 'Zona 9 Guatemala ', '1234-9988', '8888.00'),
(22, 'Juan', 'Valdez', 19, 'Masculino', 'jv@gmail.com', '25 av Guatemala z7', '2121-6655', '8005.00'),
(23, 'Marco', 'Salgado', 19, 'Masculino', 'ms@gmail.com', 'Z7 Guatemala', '1212-5566', '5000.00'),
(24, 'Fel', 'Pe', 10, 'Masculino', 'felpe@gmail.com', '25 av guate z1', '3322-6677', '1200.00'),
(25, 'Pamela', 'Selman', 28, 'Femenino', 'ps@gmail.com', 'Zona 9 Guatemala ', '1234-9988', '8888.00'),
(26, 'Pamela', 'Selman', 28, 'Femenino', 'ps@gmail.com', 'Zona 9 Guatemala ', '1234-9988', '8888.00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` mediumint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
