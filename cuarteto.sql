-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 20-10-2016 a las 03:20:57
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 7.0.8

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
-- Estructura de tabla para la tabla `categoriaNoticia`
--

CREATE TABLE `categoriaNoticia` (
  `id_categoriaNoticia` int(11) NOT NULL,
  `categoria` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoriaNoticia`
--

INSERT INTO `categoriaNoticia` (`id_categoriaNoticia`, `categoria`) VALUES
(9, 'Recitales'),
(10, 'Proximamente'),
(11, 'Blog');

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
  `fk_id_disco` int(11) NOT NULL,
  `path` varchar(200) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticia`
--

CREATE TABLE `noticia` (
  `id_noticia` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `contenido` varchar(1200) NOT NULL,
  `fk_id_categoriaNoticia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `noticia`
--

INSERT INTO `noticia` (`id_noticia`, `nombre`, `contenido`, `fk_id_categoriaNoticia`) VALUES
(7, '22 Noviembre ', 'Auditorio Nacional del Sodre, Montevideo, Uruguay\r\n20:00 HS', 9),
(8, '25 Noviembre', 'Luna Park, Buenos Aires, Argentina 21:00 HS', 9),
(9, '23 Noviembre', 'Luna Park, Buenos Aires, Argentina 21:00 HS', 9),
(13, 'Novedades 2016  Argentina, México, Perú, video y n', 'Mientras se desarrolla la etapa final de la gira HABLA TU ESPEJO por Latinoamérica, el Cuarteto pre produce su próximo disco. Para segunda mitad del año entrarán al estudio y para fines de año, ya habrá un nuevo single sonando.', 10),
(14, 'Estrena Sencillo', 'La banda uruguaya estrenó "No Llora", el primer sencillo de su nuevo álbum "Habla Tu Espejo", a la venta en octubre. Se trata de una balada inspirada en Federica, la pequeña hija de Roberto Musso, cantante y líder de El Cuarteto de Nos.', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `opinionUsuario`
--

CREATE TABLE `opinionUsuario` (
  `id_opinionUsuario` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `opinion` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoriaNoticia`
--
ALTER TABLE `categoriaNoticia`
  ADD PRIMARY KEY (`id_categoriaNoticia`);

--
-- Indices de la tabla `disco`
--
ALTER TABLE `disco`
  ADD PRIMARY KEY (`id_disco`);

--
-- Indices de la tabla `imagen`
--
ALTER TABLE `imagen`
  ADD PRIMARY KEY (`id_imagen`),
  ADD KEY `fk_id_disco` (`fk_id_disco`);

--
-- Indices de la tabla `noticia`
--
ALTER TABLE `noticia`
  ADD PRIMARY KEY (`id_noticia`);

--
-- Indices de la tabla `opinionUsuario`
--
ALTER TABLE `opinionUsuario`
  ADD PRIMARY KEY (`id_opinionUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoriaNoticia`
--
ALTER TABLE `categoriaNoticia`
  MODIFY `id_categoriaNoticia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `disco`
--
ALTER TABLE `disco`
  MODIFY `id_disco` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT de la tabla `imagen`
--
ALTER TABLE `imagen`
  MODIFY `id_imagen` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `noticia`
--
ALTER TABLE `noticia`
  MODIFY `id_noticia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla `opinionUsuario`
--
ALTER TABLE `opinionUsuario`
  MODIFY `id_opinionUsuario` int(11) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `imagen`
--
ALTER TABLE `imagen`
  ADD CONSTRAINT `imagen_ibfk_1` FOREIGN KEY (`fk_id_disco`) REFERENCES `disco` (`id_disco`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
