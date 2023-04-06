-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-04-2023 a las 03:23:03
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `farmacia_ya_app`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_alumnos`
--

CREATE TABLE `tbl_alumnos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(35) NOT NULL,
  `apellido` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_alumnos`
--

INSERT INTO `tbl_alumnos` (`id`, `nombre`, `apellido`) VALUES
(2, 'Victor', 'Fernandez'),
(6, 'victor_2', 'apellido_2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_asignatura`
--

CREATE TABLE `tbl_asignatura` (
  `id` int(11) NOT NULL,
  `nombre` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_asignatura`
--

INSERT INTO `tbl_asignatura` (`id`, `nombre`) VALUES
(1, 'matematicas'),
(2, 'biologia'),
(3, 'calculo'),
(4, 'analisis de sistemas'),
(5, 'base de datos'),
(6, 'defensa integral'),
(7, 'deporte'),
(8, 'programacion');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_calificaciones`
--

CREATE TABLE `tbl_calificaciones` (
  `id` int(11) NOT NULL,
  `id_alumno` int(11) NOT NULL,
  `id_asignatura` int(11) NOT NULL,
  `calificacion` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_calificaciones`
--

INSERT INTO `tbl_calificaciones` (`id`, `id_alumno`, `id_asignatura`, `calificacion`) VALUES
(2, 6, 2, 15);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_alumnos`
--
ALTER TABLE `tbl_alumnos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_asignatura`
--
ALTER TABLE `tbl_asignatura`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_calificaciones`
--
ALTER TABLE `tbl_calificaciones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_asignatura` (`id_asignatura`),
  ADD KEY `id_alumno` (`id_alumno`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_alumnos`
--
ALTER TABLE `tbl_alumnos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tbl_asignatura`
--
ALTER TABLE `tbl_asignatura`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `tbl_calificaciones`
--
ALTER TABLE `tbl_calificaciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_calificaciones`
--
ALTER TABLE `tbl_calificaciones`
  ADD CONSTRAINT `tbl_calificaciones_ibfk_1` FOREIGN KEY (`id_asignatura`) REFERENCES `tbl_asignatura` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_calificaciones_ibfk_2` FOREIGN KEY (`id_alumno`) REFERENCES `tbl_alumnos` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
