
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";



CREATE TABLE `peliculas` (
  `idpeliculas` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `tipo` varchar(45) NOT NULL,
  `imagen` longtext,
  `trailer` varchar(250) DEFAULT NULL,
  `link` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `peliculas` (`idpeliculas`, `nombre`, `tipo`, `imagen`, `trailer`, `link`) VALUES
(1, 'glass', 'accion', 'https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/glass-poster-1543569732.jpg?crop=1xw:1xh;center,top&resize=480:*', 'https://www.youtube.com/embed/cKQaJeHOXuA', 'https://mega.nz/#!OUMlSa5a!xC_IA--6sHlSZLQJxjEVA4A1l3ij8Huk87FQ1D-ZlLM'),
(2, 'aquaman', 'accion', 'https://asturscore.com/wp-content/uploads/2018/12/Caratula-BSO-Aquaman-Rupert-Gregson-Williams.jpg', 'https://www.youtube.com/embed/FR1V6iRB02w', 'https://mega.nz/#!y0MQ0ITC!Zf623lBo-Vd23tz9DIGaqsL9gUKSMoKh51ntQny4Q2g'),
(3, 'Queen', 'rock', 'http://metalegun.com/wp-content/uploads/2018/05/queen-cartel-1.jpg', 'https://www.youtube.com/embed/U_Dn3SXupUg', 'https://mega.nz/#!W892kAQS!YZozNIlcC7wVdGrUzjG_6rR27lyjkQfVCE87UtuGYrY'),
(4, 'Dragon ball super Broly', 'anime', 'https://img.depor.com/files/article_content_ec_fotos/uploads/2018/12/09/5c0dc084e98a6.jpeg', 'https://www.youtube.com/embed/dl3w10VVQj8', 'https://mega.nz/#!7sNTFABB!HxRf1B0sqh31xl5RWuzHqDSDFI2Hps6eE6m2W3IdrHk'),
(5, 'capitana marvel', 'acción', 'https://vignette.wikia.nocookie.net/marvelcinematicuniverse/images/b/b2/Captain_Marvel_-_Logo_Trailer.png/revision/latest?cb=20181124211459&path-prefix=es', 'https://www.youtube.com/embed/JfqeYqTvGBY', 'https://mega.nz/#F!rstAjIIA!tvJ4jlQWKGq41Q3zdbc37g'),
(6, 'Como entrenar a tu dragon 3', 'infantil', 'https://www.informador.mx/__export/1549023453866/sites/elinformador/img/2019/02/01/49671109_374887036649047_5966481023284805632_n_crop1549023307703.jpg_1970638775.jpg', 'https://www.youtube.com/embed/DWXJdezkThk', 'https://mega.nz/#F!PlFGgSCS!xSv10b7lCsvbYVxHZQNZug'),
(7, 'HellBoy 2019', 'acción', 'https://vignette.wikia.nocookie.net/doblaje/images/e/e3/Hellboy_2019_poster_LA.png/revision/latest?cb=20190412034354&path-prefix=es', 'https://www.youtube.com/embed/ZsBO4b3tyZg', 'https://mega.nz/#F!GwMUnaRa!zFeqllGBL8p9fXUA8vbs9Q'),
(8, 'Detective pikachu', 'anime', 'https://larepublica.pe/resizer/HaEe-9Htv8WGkSSfPYNed0n5c7c=/646x380/smart/arc-anglerfish-arc2-prod-gruporepublica.s3.amazonaws.com/public/2LC6CNB72RBURNY43FL3KEWV3A.jpg', 'https://www.youtube.com/embed/bILE5BEyhdo', 'https://mega.nz/#F!HtclWQxZ!e32sarfk_WuumO45b4GAug'),
(9, 'Shazam', 'accion', 'https://www.eltiempo.com/files/article_main/uploads/2019/04/03/5ca4b94de9dbc.jpeg', 'https://www.youtube.com/embed/AU1L6TdRPK0', 'https://mega.nz/#F!P9MXGIKB!-gM9xBHBjIEVVGaz_rRoCw'),
(10, 'Cementerio Maldito', 'terror', 'https://pics.filmaffinity.com/pet_sematary-289818809-large.jpg', 'https://www.youtube.com/embed/8PQ5kdXuVUs', 'https://mega.nz/#F!3pUFzAKR!37olufItd4D3voPBUbn3tQ'),
(11, 'Avengers EndGame', 'accion', 'https://is3-ssl.mzstatic.com/image/thumb/Video113/v4/6e/47/f6/6e47f680-ac54-21ff-a37a-3aab1a9970b0/DIS_AV_ENDGAME_FINAL_ENGLISH_US_WW_WW_ARTWORK_EN_2000x3000_1OWPBJ00000GQ6.lsr/268x0w.jpg', 'https://www.youtube.com/embed/9hpWz0ZMFAo', 'https://mega.nz/#F!O4sBHYRY!-2s3U34FovfmUSLxGQG46g'),
(12, 'plan de escape 3', 'acción', 'https://repelisgo.com/_images/posters/YCckTBb9o3N2LETmZMZseHv/280x420.jpg', 'https://www.youtube.com/embed/eBrPYlleNmk', 'https://mega.nz/#F!H0sXhaqK!a7e8aebYBkxLxYJhhRzZ1Q'),
(13, 'La razon de estar contigo 2', 'familiar', 'http://bajalogratis.com/wp-content/uploads/2019/08/La_raz_n_de_estar.jpg', 'https://www.youtube.com/embed/7mljHYAgE1M', 'https://mega.nz/#F!asNmGQDT!UEexaOZ7wDPbYbMvsj5RaA'),
(14, 'la vida secreta de tus mascotas 2', 'familiar', 'https://cineplanechitstatic.azureedge.net/CDN/media/entity/get/FilmPosterGraphic/HO00000452?referenceScheme=HeadOffice&allowPlaceHolder=true', 'https://www.youtube.com/embed/mRbjAXjOcKg', 'https://mega.nz/#F!mtUymALR!nG9C4VziXg-aegfp3dW_3A'),
(15, 'john wick 3 pelicula', 'accion', 'https://www-cinemascomics-com.exactdn.com/wp-content/uploads/2018/04/john-wick-3.jpg?strip=all&lossy=1&ssl=1', 'https://www.youtube.com/embed/9CHmEHBKuyE', 'https://mega.nz/#F!CgEyQYpZ!Nc61usNdWwlqTZ4BvuU6-g'),
(16, 'Aladdin', 'familiar', 'https://www.dodmagazine.es/wp-content/uploads/2019/05/aladdin-2019-banda-sonora.jpg', 'https://www.youtube.com/embed/foyufD52aog', 'https://mega.nz/#F!TlMxRQwR!SUaSBTqnAVznwrl4e1iaxA'),
(17, 'xmen dark fenix', 'acción', 'https://repelisgo.com/_images/posters/ZhFysqgjPj5KUCjcbYpeasH/280x420.jpg', 'https://www.youtube.com/embed/Nly3-14vLh0', 'https://mega.nz/#F!T89BnYQR!q_Uc5CPjX165KhAfYFnHyg'),
(18, 'Los muertos no mueren', 'terror', 'https://pics.filmaffinity.com/Los_muertos_no_mueren-429140432-large.jpg', 'https://www.youtube.com/embed/5ZCVhFmbAY0', 'https://mega.nz/#F!Xt1nEI5J!kbaVWMUKM8XUnkc40X1Njg'),
(19, 'Anabell 3', 'terror', 'https://static.pelisplus.co/movie/cover/original/72c5cf022700110838c6a9238f7698eb.jpg', 'https://www.youtube.com/embed/KUnKWjeQA9A', 'https://mega.nz/#F!a5sHzahR!05U44GTOP-xqapDnHNntzg'),
(20, 'Spider-man lejos de casa', 'accion', 'https://pics.filmaffinity.com/Spider_Man_Lejos_de_casa-339542528-large.jpg', 'https://www.youtube.com/embed/m4DVLBdHiG0', 'https://mega.nz/#F!i40FxACK!39UqBG6d_MNKQaWDg1w2sg');


CREATE TABLE `rentas` (
  `idrentas` int(11) NOT NULL,
  `nombre_usuario` varchar(45) NOT NULL,
  `pelicula` varchar(150) NOT NULL,
  `fecha_renta` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `contra` varchar(150) NOT NULL,
  `correo` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `usuario` (`idusuario`, `nombre`, `contra`, `correo`) VALUES
(1, 'marco', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'maca9608@gmail.com'),
(17, 'uli', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'uli@gmail.com'),
(19, 'Fernanda', '0a056d284190cb6ab5d19888f2d683afebfc6519', 'fdrgares@gmail.com'),
(20, 'jose', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'josejiji@gmail.com'),
(23, 'beto', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'beto@gmail.com'),
(24, 'Gabriel', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'angelmolinagranados@gmail.com');

ALTER TABLE `peliculas`
  ADD PRIMARY KEY (`idpeliculas`);

ALTER TABLE `rentas`
  ADD PRIMARY KEY (`idrentas`);

ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`),
  ADD UNIQUE KEY `nombre` (`nombre`),
  ADD UNIQUE KEY `nombre_2` (`nombre`);


ALTER TABLE `peliculas`
  MODIFY `idpeliculas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

ALTER TABLE `rentas`
  MODIFY `idrentas` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;
