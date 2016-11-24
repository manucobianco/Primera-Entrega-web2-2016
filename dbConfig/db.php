<?php
class DataBase{
  private static $QUERY=array();
  public static function queries(){
    $QUERY[]="CREATE TABLE `categorianoticia` (
      `id_categoriaNoticia` int(11) NOT NULL,
      `categoria` varchar(30) NOT NULL
    )";
    $QUERY[]="INSERT INTO `categorianoticia` (`id_categoriaNoticia`, `categoria`) VALUES
    (9, 'Recitales'),
    (10, 'Proximamente'),
    (11, 'Blog')";
    $QUERY[]="CREATE TABLE `comentario` (
      `id_comentario` int(11) NOT NULL,
      `comentario` varchar(500) NOT NULL,
      `id_noticia` decimal(10,0) NOT NULL,
      `valoracion` decimal(10,0) DEFAULT NULL
    )";
    $QUERY[]="INSERT INTO `comentario` (`id_comentario`, `comentario`, `id_noticia`, `valoracion`) VALUES
    (29, 'oh que buena pagina, por dios nuca vi nada mejor programado!', '7', '5'),
    (30, 'oh voy a a agregar un comentario', '7', '2')";
    $QUERY[]="CREATE TABLE `disco` (
      `id_disco` int(11) NOT NULL,
      `nombre` varchar(50) NOT NULL,
      `anio` varchar(4) NOT NULL,
      `discografica` varchar(50) NOT NULL
    )";
    $QUERY[]="INSERT INTO `disco` (`id_disco`, `nombre`, `anio`, `discografica`) VALUES
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
    (17, 'El Cuarteto De Nos Alberto Wolf', '1984', 'Ayuí')";
    $QUERY[]="CREATE TABLE `imagendenoticia` (
      `id_imagendenoticia` int(11) NOT NULL,
      `path` varchar(255) NOT NULL,
      `nombre` varchar(50) NOT NULL,
      `fk_id_noticia` int(11) NOT NULL
    )";
    $QUERY[]="CREATE TABLE `noticia` (
      `id_noticia` int(11) NOT NULL,
      `nombre` varchar(50) NOT NULL,
      `subTitulo` varchar(300) NOT NULL,
      `fk_id_categoriaNoticia` int(11) NOT NULL,
      `contenido` varchar(1000) NOT NULL
    )";
    $QUERY[]="INSERT INTO `noticia` (`id_noticia`, `nombre`, `subTitulo`, `fk_id_categoriaNoticia`, `contenido`) VALUES
    (7, '22 Noviembre ', 'Auditorio Nacional del Sodre, Montevideo, Uruguay\r\n20:00 HS', 9, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vestibulum velit odio, at vestibulum erat dignissim vel. Integer lacinia odio quis justo molestie pretium. Proin nibh mi, fringilla eu mollis et, semper in ante. Morbi posuere massa eget purus luctus, et fermentum ligula ultrices. Mauris eu dolor in arcu aliquam malesuada. Curabitur convallis ipsum ac turpis consequat faucibus. Phasellus lacinia mollis lorem vel maximus. Pellentesque cursus nulla id dignissim porta. Nullam vestibulum pretium ligula quis pulvinar. Donec molestie feugiat magna, vel condimentum orci varius at. Praesent bibendum accumsan massa at convallis. Suspendisse at leo porttitor, facilisis dui quis, maximus eros. Integer eu arcu ut purus egestas lobortis at a augue. Nulla eget feugiat turpis. Praesent quis fringilla diam.'),
    (8, '25 Noviembre', 'Luna Park, Buenos Aires, Argentina 21:00 HS', 9, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vestibulum velit odio, at vestibulum erat dignissim vel. Integer lacinia odio quis justo molestie pretium. Proin nibh mi, fringilla eu mollis et, semper in ante. Morbi posuere massa eget purus luctus, et fermentum ligula ultrices. Mauris eu dolor in arcu aliquam malesuada. Curabitur convallis ipsum ac turpis consequat faucibus. Phasellus lacinia mollis lorem vel maximus. Pellentesque cursus nulla id dignissim porta. Nullam vestibulum pretium ligula quis pulvinar. Donec molestie feugiat magna, vel condimentum orci varius at. Praesent bibendum accumsan massa at convallis. Suspendisse at leo porttitor, facilisis dui quis, maximus eros. Integer eu arcu ut purus egestas lobortis at a augue. Nulla eget feugiat turpis. Praesent quis fringilla diam.'),
    (13, 'Novedades 2016  Argentina, México, Perú, video y n', 'Mientras se desarrolla la etapa final de la gira HABLA TU ESPEJO por Latinoamérica, el Cuarteto pre produce su próximo disco. Para segunda mitad del año entrarán al estudio y para fines de año, ya habrá un nuevo single sonando.', 10, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vestibulum velit odio, at vestibulum erat dignissim vel. Integer lacinia odio quis justo molestie pretium. Proin nibh mi, fringilla eu mollis et, semper in ante. Morbi posuere massa eget purus luctus, et fermentum ligula ultrices. Mauris eu dolor in arcu aliquam malesuada. Curabitur convallis ipsum ac turpis consequat faucibus. Phasellus lacinia mollis lorem vel maximus. Pellentesque cursus nulla id dignissim porta. Nullam vestibulum pretium ligula quis pulvinar. Donec molestie feugiat magna, vel condimentum orci varius at. Praesent bibendum accumsan massa at convallis. Suspendisse at leo porttitor, facilisis dui quis, maximus eros. Integer eu arcu ut purus egestas lobortis at a augue. Nulla eget feugiat turpis. Praesent quis fringilla diam.'),
    (14, 'Estrena Sencillo', 'La banda uruguaya estrenó -No Llora-, el primer sencillo de su nuevo álbum -Habla Tu Espejo-, a la venta en octubre. Se trata de una balada inspirada en Federica, la pequeña hija de Roberto Musso, cantante y líder de El Cuarteto de Nos.', 10, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vestibulum velit odio, at vestibulum erat dignissim vel. Integer lacinia odio quis justo molestie pretium. Proin nibh mi, fringilla eu mollis et, semper in ante. Morbi posuere massa eget purus luctus, et fermentum ligula ultrices. Mauris eu dolor in arcu aliquam malesuada. Curabitur convallis ipsum ac turpis consequat faucibus. Phasellus lacinia mollis lorem vel maximus. Pellentesque cursus nulla id dignissim porta. Nullam vestibulum pretium ligula quis pulvinar. Donec molestie feugiat magna, vel condimentum orci varius at. Praesent bibendum accumsan massa at convallis. Suspendisse at leo porttitor, facilisis dui quis, maximus eros. Integer eu arcu ut purus egestas lobortis at a augue. Nulla eget feugiat turpis. Praesent quis fringilla diam.');";
    $QUERY[]="CREATE TABLE `opinionusuario` (
      `id_opinionUsuario` int(11) NOT NULL,
      `nombre` varchar(50) NOT NULL,
      `email` varchar(50) NOT NULL,
      `opinion` varchar(500) NOT NULL
    )";
    $QUERY[]="INSERT INTO `opinionusuario` (`id_opinionUsuario`, `nombre`, `email`, `opinion`) VALUES
    (2, 'leo', 'prueba@gmail.com', 'opinion de prueba'),
    (4, 'asdasdasdasd', 'dasdas@dasda.casc', 'adsda'),
    (6, 'dasdasm', 'manu@gagsgag.com', 'sdasdas')
    ";
    $QUERY[]="CREATE TABLE `usuario` (
      `id_usuario` int(11) NOT NULL,
      `email` varchar(50) NOT NULL,
      `password` varchar(255) NOT NULL,
      `tipo` decimal(10,0) NOT NULL DEFAULT '0'
    )";
    $QUERY[]="ALTER TABLE `categorianoticia` ADD PRIMARY KEY (`id_categoriaNoticia`)";
    $QUERY[]="ALTER TABLE `comentario` ADD PRIMARY KEY (`id_comentario`)";
    $QUERY[]="ALTER TABLE `disco` ADD PRIMARY KEY (`id_disco`)";
    $QUERY[]="ALTER TABLE `imagendenoticia` ADD PRIMARY KEY (`id_imagendenoticia`)";
    $QUERY[]="ALTER TABLE `noticia` ADD PRIMARY KEY (`id_noticia`)";
    $QUERY[]="ALTER TABLE `opinionusuario` ADD PRIMARY KEY (`id_opinionUsuario`)";
    $QUERY[]="ALTER TABLE `usuario` ADD PRIMARY KEY (`id_usuario`)";
    $QUERY[]="ALTER TABLE `categorianoticia` MODIFY `id_categoriaNoticia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12";
    $QUERY[]="ALTER TABLE `comentario` MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20";
    $QUERY[]="ALTER TABLE `disco` MODIFY `id_disco` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18";
    $QUERY[]="ALTER TABLE `imagendenoticia` MODIFY `id_imagendenoticia` int(11) NOT NULL AUTO_INCREMENT";
    $QUERY[]="ALTER TABLE `noticia` MODIFY `id_noticia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16";
    $QUERY[]="ALTER TABLE `opinionusuario` MODIFY `id_opinionUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11";
    $QUERY[]="ALTER TABLE `usuario` MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6";
    return $QUERY;
  }




}

 ?>
