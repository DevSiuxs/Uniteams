-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-01-2023 a las 19:43:53
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `unteams-lainuz-final`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso_arboles`
--

CREATE TABLE `curso_arboles` (
  `email_user` varchar(255) NOT NULL,
  `star_rate` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso_colas`
--

CREATE TABLE `curso_colas` (
  `email_user` varchar(255) NOT NULL,
  `star_rate` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso_grafos`
--

CREATE TABLE `curso_grafos` (
  `email_user` varchar(255) NOT NULL,
  `star_rate` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso_html`
--

CREATE TABLE `curso_html` (
  `email_user` varchar(255) NOT NULL,
  `star_rate` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso_js`
--

CREATE TABLE `curso_js` (
  `email_user` varchar(255) NOT NULL,
  `star_rate` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso_listas`
--

CREATE TABLE `curso_listas` (
  `email_user` varchar(255) NOT NULL,
  `star_rate` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso_pilas`
--

CREATE TABLE `curso_pilas` (
  `email_user` varchar(255) NOT NULL,
  `star_rate` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso_sass`
--

CREATE TABLE `curso_sass` (
  `email_user` varchar(255) NOT NULL,
  `star_rate` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `curso_arboles`
--
ALTER TABLE `curso_arboles`
  ADD KEY `email_user` (`email_user`);

--
-- Indices de la tabla `curso_colas`
--
ALTER TABLE `curso_colas`
  ADD KEY `email_user` (`email_user`);

--
-- Indices de la tabla `curso_grafos`
--
ALTER TABLE `curso_grafos`
  ADD KEY `email_user` (`email_user`);

--
-- Indices de la tabla `curso_html`
--
ALTER TABLE `curso_html`
  ADD KEY `email_user` (`email_user`);

--
-- Indices de la tabla `curso_js`
--
ALTER TABLE `curso_js`
  ADD KEY `email_user` (`email_user`);

--
-- Indices de la tabla `curso_listas`
--
ALTER TABLE `curso_listas`
  ADD KEY `email_user` (`email_user`);

--
-- Indices de la tabla `curso_pilas`
--
ALTER TABLE `curso_pilas`
  ADD KEY `email_user` (`email_user`);

--
-- Indices de la tabla `curso_sass`
--
ALTER TABLE `curso_sass`
  ADD KEY `email_user` (`email_user`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `curso_arboles`
--
ALTER TABLE `curso_arboles`
  ADD CONSTRAINT `curso_arboles_ibfk_1` FOREIGN KEY (`email_user`) REFERENCES `users` (`email`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `curso_colas`
--
ALTER TABLE `curso_colas`
  ADD CONSTRAINT `curso_colas_ibfk_1` FOREIGN KEY (`email_user`) REFERENCES `users` (`email`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `curso_grafos`
--
ALTER TABLE `curso_grafos`
  ADD CONSTRAINT `curso_grafos_ibfk_1` FOREIGN KEY (`email_user`) REFERENCES `users` (`email`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `curso_html`
--
ALTER TABLE `curso_html`
  ADD CONSTRAINT `curso_html_ibfk_1` FOREIGN KEY (`email_user`) REFERENCES `users` (`email`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `curso_js`
--
ALTER TABLE `curso_js`
  ADD CONSTRAINT `curso_js_ibfk_1` FOREIGN KEY (`email_user`) REFERENCES `users` (`email`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `curso_listas`
--
ALTER TABLE `curso_listas`
  ADD CONSTRAINT `curso_listas_ibfk_1` FOREIGN KEY (`email_user`) REFERENCES `users` (`email`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `curso_pilas`
--
ALTER TABLE `curso_pilas`
  ADD CONSTRAINT `curso_pilas_ibfk_1` FOREIGN KEY (`email_user`) REFERENCES `users` (`email`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `curso_sass`
--
ALTER TABLE `curso_sass`
  ADD CONSTRAINT `curso_sass_ibfk_1` FOREIGN KEY (`email_user`) REFERENCES `users` (`email`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
