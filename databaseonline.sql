

CREATE TABLE `peliculas` (
  `idpeliculas` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `tipo` varchar(45) NOT NULL,
  `imagen` longtext DEFAULT NULL,
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
(4, 'Dragon ball super Broly', 'anime', 'https://vanguardia.com.mx/sites/default/files/styles/cover_feature_large_desktop_1x/public/field/image/5c3572f5dfb61.jpg', 'https://www.youtube.com/embed/dl3w10VVQj8', 'https://mega.nz/#!7sNTFABB!HxRf1B0sqh31xl5RWuzHqDSDFI2Hps6eE6m2W3IdrHk'),
(5, 'capitana marvel', 'acción', 'https://www.laprensa.hn/csp/mediapool/sites/dt.common.streams.StreamServer.cls?STREAMOID=qesnoTyWH7cGb36CX94hLM$daE2N3K4ZzOUsqbU5sYuNCn_HUtjHoC01BnBuVpBc6FB40xiOfUoExWL3M40tfzssyZqpeG_J0TFo7ZhRaDiHC9oxmioMlYVJD0A$3RbIiibgT65kY_CSDiCiUzvHvODrHApbd6ry6YGl5GGOZrs-&CONTENTTYPE=image/jpeg', 'https://www.youtube.com/embed/JfqeYqTvGBY', 'https://mega.nz/#F!rstAjIIA!tvJ4jlQWKGq41Q3zdbc37g');

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
(17, 'uli', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'uli@gmail.com'),
(19, 'Fernanda', '0a056d284190cb6ab5d19888f2d683afebfc6519', 'fdrgares@gmail.com');

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
  MODIFY `idpeliculas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `rentas`
--
ALTER TABLE `rentas`
  MODIFY `idrentas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

