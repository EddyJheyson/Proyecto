-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-07-2022 a las 14:22:52
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignatura`
--

CREATE TABLE `asignatura` (
  `id_asignatura` int(20) NOT NULL,
  `nombre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `asignatura`
--

INSERT INTO `asignatura` (`id_asignatura`, `nombre`) VALUES
(1, 'Matematica'),
(2, 'Lenguaje');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ejercicios`
--

CREATE TABLE `ejercicios` (
  `id_ejercicios` int(10) NOT NULL,
  `idmateria` int(20) NOT NULL,
  `ejercicios` varchar(40) NOT NULL,
  `resultado` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ejercicios`
--

INSERT INTO `ejercicios` (`id_ejercicios`, `idmateria`, `ejercicios`, `resultado`) VALUES
(1, 1, '1+2', '3'),
(2, 1, '1+4', '5'),
(3, 1, '1-2', '-1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `iniciosesion`
--

CREATE TABLE `iniciosesion` (
  `id_profesor` int(99) NOT NULL,
  `rut` int(9) NOT NULL,
  `contraseña` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `iniciosesion`
--

INSERT INTO `iniciosesion` (`id_profesor`, `rut`, `contraseña`) VALUES
(1, 20725953, '1234'),
(2, 15008575, '1234');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materia`
--

CREATE TABLE `materia` (
  `id_materia` int(11) NOT NULL,
  `Nombre` varchar(20) NOT NULL,
  `texto` varchar(1000) DEFAULT NULL,
  `id_asignatura` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `materia`
--

INSERT INTO `materia` (`id_materia`, `Nombre`, `texto`, `id_asignatura`) VALUES
(1, 'ecuaciones', 'Una ecuación es una igualdad matemática entre dos expresiones, denominadas miembros y separadas por el signo igual, en las que aparecen elementos conocidos y datos desconocidos o incógnitas, relacionados mediante operaciones matemáticas.', 1),
(2, 'Sumatoria', 'sumatoria (también conocido como operación de suma, notación sigma o símbolo suma) es una notación matemática que permite representar sumas de varios sumandos, n o incluso infinitos sumandos, evitando el empleo de los puntos suspensivos o de una explícita notación de paso al límite.3Se expresa con la letra griega sigma mayúscula (Σ). Aunque se necesita aclarar que la palabra sumatoria o sumatorio no es aceptada entre varios matemáticos ya que la forma correcta de decirlo es suma.', 1),
(3, 'conectores', 'Los conectores son términos o expresiones que unen palabras, ideas, frases, oraciones y párrafos entre sí. Su uso es necesario, pues por medio de ellos se establece una redacción más fluida, organizada y coherente', 2),
(4, 'redaccion', 'Se denomina redacción al proceso mediante el cual se estructura un discurso escrito. La redacción es un arte, pero también una técnica. Es la medida que utiliza determinados procederes que garantizan que el texto tenga coherencia.', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asignatura`
--
ALTER TABLE `asignatura`
  ADD PRIMARY KEY (`id_asignatura`);

--
-- Indices de la tabla `ejercicios`
--
ALTER TABLE `ejercicios`
  ADD PRIMARY KEY (`id_ejercicios`);

--
-- Indices de la tabla `iniciosesion`
--
ALTER TABLE `iniciosesion`
  ADD PRIMARY KEY (`id_profesor`);

--
-- Indices de la tabla `materia`
--
ALTER TABLE `materia`
  ADD PRIMARY KEY (`id_materia`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asignatura`
--
ALTER TABLE `asignatura`
  MODIFY `id_asignatura` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `ejercicios`
--
ALTER TABLE `ejercicios`
  MODIFY `id_ejercicios` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `iniciosesion`
--
ALTER TABLE `iniciosesion`
  MODIFY `id_profesor` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `materia`
--
ALTER TABLE `materia`
  MODIFY `id_materia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
