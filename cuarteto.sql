-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-11-2016 a las 21:33:35
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cuarteto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorianoticia`
--

CREATE TABLE `categorianoticia` (
  `id_categoriaNoticia` int(11) NOT NULL,
  `categoria` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categorianoticia`
--

INSERT INTO `categorianoticia` (`id_categoriaNoticia`, `categoria`) VALUES
(9, 'Recitales'),
(10, 'Proximamente'),
(11, 'Blog');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE `comentario` (
  `id_comentario` int(11) NOT NULL,
  `comentario` varchar(500) NOT NULL,
  `id_noticia` decimal(10,0) NOT NULL,
  `valoracion` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comentario`
--

INSERT INTO `comentario` (`id_comentario`, `comentario`, `id_noticia`, `valoracion`) VALUES
(29, 'oh que buena pagina, por dios nuca vi nada mejor programado!', '7', '5'),
(30, 'oh voy a a agregar', '7', '2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `disco`
--

CREATE TABLE `disco` (
  `id_disco` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `anio` varchar(4) NOT NULL,
  `discografica` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `disco`
--

INSERT INTO `disco` (`id_disco`, `nombre`, `anio`, `discografica`) VALUES
(4, 'Habla Tu Espejo', '2014', 'Warner'),
(5, 'Porfiado', '2012', 'Warner'),
(6, 'Bipolar', '2009', 'Warner'),
(7, 'Raro', '2006', 'Bizzaro Records'),
(8, 'El Cuarteto De Nos', '2004', 'Bizarro Records'),
(9, 'Cortamambo', '2000', ' Koala'),
(10, 'Revista...¡¡ÉSTA!!', '1998', 'BMG'),
(11, 'El Tren Bala', '1996', 'Manzana Verde'),
(12, 'Barranca Abajo', '1995', 'Ayuí'),
(13, 'Otra Navidad En Las Trincheras', '1994', 'Ayuí'),
(14, 'Canciones Del Corazon', '1991', 'Orfeo'),
(15, 'Emilio Garcia', '1988', 'Orfeo'),
(16, 'Soy Una Arveja', '1986', 'Orfeo'),
(17, 'El Cuarteto De Nos Alberto Wolf', '1984', 'Ayuí');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagen`
--

CREATE TABLE `imagen` (
  `id_imagen` int(11) NOT NULL,
  `path` varchar(200) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `imagen`
--

INSERT INTO `imagen` (`id_imagen`, `path`, `nombre`) VALUES
(2, 'upload/580e9ccb294efimagen-no-disponible.jpg', 'imagen por defecto'),
(3, 'upload/580ea7d367f09wolf.jpg', 'El Cuarteto De Nos Alberto Wolf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticia`
--

CREATE TABLE `noticia` (
  `id_noticia` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `subTitulo` varchar(300) NOT NULL,
  `fk_id_categoriaNoticia` int(11) NOT NULL,
  `contenido` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `noticia`
--

INSERT INTO `noticia` (`id_noticia`, `nombre`, `subTitulo`, `fk_id_categoriaNoticia`, `contenido`) VALUES
(7, '22 Noviembre ', 'Auditorio Nacional del Sodre, Montevideo, Uruguay\r\n20:00 HS', 9, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vestibulum velit odio, at vestibulum erat dignissim vel. Integer lacinia odio quis justo molestie pretium. Proin nibh mi, fringilla eu mollis et, semper in ante. Morbi posuere massa eget purus luctus, et fermentum ligula ultrices. Mauris eu dolor in arcu aliquam malesuada. Curabitur convallis ipsum ac turpis consequat faucibus. Phasellus lacinia mollis lorem vel maximus. Pellentesque cursus nulla id dignissim porta. Nullam vestibulum pretium ligula quis pulvinar. Donec molestie feugiat magna, vel condimentum orci varius at. Praesent bibendum accumsan massa at convallis. Suspendisse at leo porttitor, facilisis dui quis, maximus eros. Integer eu arcu ut purus egestas lobortis at a augue. Nulla eget feugiat turpis. Praesent quis fringilla diam.'),
(8, '25 Noviembre', 'Luna Park, Buenos Aires, Argentina 21:00 HS', 9, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vestibulum velit odio, at vestibulum erat dignissim vel. Integer lacinia odio quis justo molestie pretium. Proin nibh mi, fringilla eu mollis et, semper in ante. Morbi posuere massa eget purus luctus, et fermentum ligula ultrices. Mauris eu dolor in arcu aliquam malesuada. Curabitur convallis ipsum ac turpis consequat faucibus. Phasellus lacinia mollis lorem vel maximus. Pellentesque cursus nulla id dignissim porta. Nullam vestibulum pretium ligula quis pulvinar. Donec molestie feugiat magna, vel condimentum orci varius at. Praesent bibendum accumsan massa at convallis. Suspendisse at leo porttitor, facilisis dui quis, maximus eros. Integer eu arcu ut purus egestas lobortis at a augue. Nulla eget feugiat turpis. Praesent quis fringilla diam.'),
(13, 'Novedades 2016  Argentina, México, Perú, video y n', 'Mientras se desarrolla la etapa final de la gira HABLA TU ESPEJO por Latinoamérica, el Cuarteto pre produce su próximo disco. Para segunda mitad del año entrarán al estudio y para fines de año, ya habrá un nuevo single sonando.', 10, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vestibulum velit odio, at vestibulum erat dignissim vel. Integer lacinia odio quis justo molestie pretium. Proin nibh mi, fringilla eu mollis et, semper in ante. Morbi posuere massa eget purus luctus, et fermentum ligula ultrices. Mauris eu dolor in arcu aliquam malesuada. Curabitur convallis ipsum ac turpis consequat faucibus. Phasellus lacinia mollis lorem vel maximus. Pellentesque cursus nulla id dignissim porta. Nullam vestibulum pretium ligula quis pulvinar. Donec molestie feugiat magna, vel condimentum orci varius at. Praesent bibendum accumsan massa at convallis. Suspendisse at leo porttitor, facilisis dui quis, maximus eros. Integer eu arcu ut purus egestas lobortis at a augue. Nulla eget feugiat turpis. Praesent quis fringilla diam.'),
(14, 'Estrena Sencillo', 'La banda uruguaya estrenó "No Llora", el primer sencillo de su nuevo álbum "Habla Tu Espejo", a la venta en octubre. Se trata de una balada inspirada en Federica, la pequeña hija de Roberto Musso, cantante y líder de El Cuarteto de Nos.', 10, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vestibulum velit odio, at vestibulum erat dignissim vel. Integer lacinia odio quis justo molestie pretium. Proin nibh mi, fringilla eu mollis et, semper in ante. Morbi posuere massa eget purus luctus, et fermentum ligula ultrices. Mauris eu dolor in arcu aliquam malesuada. Curabitur convallis ipsum ac turpis consequat faucibus. Phasellus lacinia mollis lorem vel maximus. Pellentesque cursus nulla id dignissim porta. Nullam vestibulum pretium ligula quis pulvinar. Donec molestie feugiat magna, vel condimentum orci varius at. Praesent bibendum accumsan massa at convallis. Suspendisse at leo porttitor, facilisis dui quis, maximus eros. Integer eu arcu ut purus egestas lobortis at a augue. Nulla eget feugiat turpis. Praesent quis fringilla diam.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `opinionusuario`
--

CREATE TABLE `opinionusuario` (
  `id_opinionUsuario` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `opinion` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `opinionusuario`
--

INSERT INTO `opinionusuario` (`id_opinionUsuario`, `nombre`, `email`, `opinion`) VALUES
(2, 'leo', 'prueba@gmail.com', 'opinion de prueba'),
(3, '', '', ''),
(4, 'asdasdasdasd', 'dasdas@dasda.casc', 'adsda'),
(5, '', '', ''),
(6, 'dasdasm', 'manu@gagsgag.com', 'sdasdas'),
(7, 'undefined', 'undefined', 'dasdasd'),
(8, 'undefined', 'undefined', 'undefined'),
(9, 'undefined', 'undefined', 'undefined'),
(10, 'undefined', 'undefined', 'undefined');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `tipo` decimal(10,0) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `email`, `password`, `tipo`) VALUES
(1, 'manucobianco@gmail.com', '$2a$12$KX5wagI1ZYGdUSt1ZVagZu90qCnJSlwOEGmJi5IkQ8dMh95aWPg9S', '0'),
(2, 'admin@gmail.com', '$2y$10$6hXrhTmMqYVB72lNB2JmZ.NT9iVZYIVbseYSFGeOKHpUK/ONtdG8m', '1');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorianoticia`
--
ALTER TABLE `categorianoticia`
  ADD PRIMARY KEY (`id_categoriaNoticia`);

--
-- Indices de la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`id_comentario`);

--
-- Indices de la tabla `disco`
--
ALTER TABLE `disco`
  ADD PRIMARY KEY (`id_disco`);

--
-- Indices de la tabla `imagen`
--
ALTER TABLE `imagen`
  ADD PRIMARY KEY (`id_imagen`);

--
-- Indices de la tabla `noticia`
--
ALTER TABLE `noticia`
  ADD PRIMARY KEY (`id_noticia`);

--
-- Indices de la tabla `opinionusuario`
--
ALTER TABLE `opinionusuario`
  ADD PRIMARY KEY (`id_opinionUsuario`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorianoticia`
--
ALTER TABLE `categorianoticia`
  MODIFY `id_categoriaNoticia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `comentario`
--
ALTER TABLE `comentario`
  MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT de la tabla `disco`
--
ALTER TABLE `disco`
  MODIFY `id_disco` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT de la tabla `imagen`
--
ALTER TABLE `imagen`
  MODIFY `id_imagen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `noticia`
--
ALTER TABLE `noticia`
  MODIFY `id_noticia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla `opinionusuario`
--
ALTER TABLE `opinionusuario`
  MODIFY `id_opinionUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
