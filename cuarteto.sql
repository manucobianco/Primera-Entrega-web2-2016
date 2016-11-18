-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-11-2016 a las 22:29:09
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.5.37

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
  `fk_id_usuario` int(11) NOT NULL,
  `fk_id_noticia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comentario`
--

INSERT INTO `comentario` (`id_comentario`, `comentario`, `fk_id_usuario`, `fk_id_noticia`) VALUES
(1, 'este es un comentario de test', 1, 7),
(2, 'este tambien', 2, 7),
(3, 'dadasdas', 1, 13),
(4, 'dadasdas', 2, 14);

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
-- Estructura de tabla para la tabla `imagendenoticia`
--

CREATE TABLE `imagendenoticia` (
  `id_imagendenoticia` int(11) NOT NULL,
  `path` varchar(100) NOT NULL,
  `nombre` int(50) NOT NULL,
  `fk_id_noticia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticia`
--

CREATE TABLE `noticia` (
  `id_noticia` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `contenido` varchar(1200) NOT NULL,
  `puntaje` int(11) NOT NULL,
  `cantidadvotos` int(11) NOT NULL,
  `fk_id_categoriaNoticia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `noticia`
--

INSERT INTO `noticia` (`id_noticia`, `nombre`, `contenido`, `puntaje`, `cantidadvotos`, `fk_id_categoriaNoticia`) VALUES
(7, '22 Noviembre ', 'Auditorio Nacional del Sodre, Montevideo, Uruguay\r\n20:00 HS', 0, 0, 9),
(8, '25 Noviembre', 'Luna Park, Buenos Aires, Argentina 21:00 HS', 0, 0, 9),
(13, 'Novedades 2016  Argentina, México, Perú, video y n', 'Mientras se desarrolla la etapa final de la gira HABLA TU ESPEJO por Latinoamérica, el Cuarteto pre produce su próximo disco. Para segunda mitad del año entrarán al estudio y para fines de año, ya habrá un nuevo single sonando.', 0, 0, 10),
(14, 'Estrena Sencillo', 'La banda uruguaya estrenó "No Llora", el primer sencillo de su nuevo álbum "Habla Tu Espejo", a la venta en octubre. Se trata de una balada inspirada en Federica, la pequeña hija de Roberto Musso, cantante y líder de El Cuarteto de Nos.', 0, 0, 10);

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
  `id_usuario` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `tipo` decimal(10,0) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `email`, `password`, `tipo`) VALUES
(1, 'manucobianco@gmail.com', '$2a$12$KX5wagI1ZYGdUSt1ZVagZu90qCnJSlwOEGmJi5IkQ8dMh95aWPg9S', '2'),
(2, 'admin@gmail.com', '$2y$10$ISh7ofvxWqGDHxCRl3ApWOwjlInsNPccIxiLM4TDEMZ5o.fE.mN2C', '2'),
(3, 'l@gmail.com', '$2y$10$mRI0TbljlrVzSmGH7GhXsOC7KSei3Tdv7K6yaHpof5rqBERUwXCju', '0');

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
-- Indices de la tabla `imagendenoticia`
--
ALTER TABLE `imagendenoticia`
  ADD PRIMARY KEY (`id_imagendenoticia`);

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
  ADD PRIMARY KEY (`id_usuario`);

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
  MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
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
-- AUTO_INCREMENT de la tabla `imagendenoticia`
--
ALTER TABLE `imagendenoticia`
  MODIFY `id_imagendenoticia` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `noticia`
--
ALTER TABLE `noticia`
  MODIFY `id_noticia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `opinionusuario`
--
ALTER TABLE `opinionusuario`
  MODIFY `id_opinionUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
