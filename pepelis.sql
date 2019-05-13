-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-05-2019 a las 14:13:25
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pepelis`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peliculas`
--

CREATE TABLE `peliculas` (
  `idpeliculas` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `tipo` varchar(45) NOT NULL,
  `imagen` varchar(200) DEFAULT NULL,
  `trailer` varchar(250) DEFAULT NULL,
  `link` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `peliculas`
--

INSERT INTO `peliculas` (`idpeliculas`, `nombre`, `tipo`, `imagen`, `trailer`, `link`) VALUES
(1, 'glass', 'accion', 'https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/glass-poster-1543569732.jpg?crop=1xw:1xh;center,top&resize=480:*', 'https://www.youtube.com/embed/cKQaJeHOXuA', 'https://mega.nz/#!OUMlSa5a!xC_IA--6sHlSZLQJxjEVA4A1l3ij8Huk87FQ1D-ZlLM'),
(2, 'aquaman', 'accion', 'https://asturscore.com/wp-content/uploads/2018/12/Caratula-BSO-Aquaman-Rupert-Gregson-Williams.jpg', 'https://www.youtube.com/embed/FR1V6iRB02w', 'https://mega.nz/#!y0MQ0ITC!Zf623lBo-Vd23tz9DIGaqsL9gUKSMoKh51ntQny4Q2g'),
(3, 'Queen', 'rock', 'http://metalegun.com/wp-content/uploads/2018/05/queen-cartel-1.jpg', 'https://www.youtube.com/embed/U_Dn3SXupUg', 'https://mega.nz/#!W892kAQS!YZozNIlcC7wVdGrUzjG_6rR27lyjkQfVCE87UtuGYrY'),
(4, 'Dragon ball super Broly', 'anime', 'https://vanguardia.com.mx/sites/default/files/styles/cover_feature_large_desktop_1x/public/field/image/5c3572f5dfb61.jpg', 'https://www.youtube.com/embed/dl3w10VVQj8', 'https://mega.nz/#!7sNTFABB!HxRf1B0sqh31xl5RWuzHqDSDFI2Hps6eE6m2W3IdrHk');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rentas`
--

CREATE TABLE `rentas` (
  `idrentas` int(11) NOT NULL,
  `nombre_usuario` varchar(45) NOT NULL,
  `pelicula` varchar(150) NOT NULL,
  `fecha_renta` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `contra` varchar(150) NOT NULL,
  `correo` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idusuario`, `nombre`, `contra`, `correo`) VALUES
(1, 'marco', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'maca9608@gmail.com'),
(15, 'jose', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'jose@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  ADD PRIMARY KEY (`idpeliculas`);

--
-- Indices de la tabla `rentas`
--
ALTER TABLE `rentas`
  ADD PRIMARY KEY (`idrentas`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  MODIFY `idpeliculas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `rentas`
--
ALTER TABLE `rentas`
  MODIFY `idrentas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
