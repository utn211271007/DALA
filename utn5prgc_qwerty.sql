-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 30-11-2021 a las 12:15:55
-- Versión del servidor: 5.6.41-84.1
-- Versión de PHP: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `utn5prgc_qwerty`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`utn5prgc`@`localhost` PROCEDURE `ActualizarNiveles` (IN `clave_niv` INT ZEROFILL, IN `descrip` VARCHAR(60), IN `puntuaje_niv` INT ZEROFILL)  NO SQL
UPDATE niveles
SET descripcion= descrip,puntuaje_nivel= puntuaje_niv
WHERE clave_nivel= clave_niv$$

CREATE DEFINER=`utn5prgc`@`localhost` PROCEDURE `ActualizarPreguntas` (IN `clave_preg` INT ZEROFILL, IN `pregun` VARCHAR(60), IN `clasi` VARCHAR(60), IN `resp1` VARCHAR(60), IN `resp2` VARCHAR(60), IN `resp3` VARCHAR(60), IN `resp4` VARCHAR(60), IN `respuesta_correc` VARCHAR(60))  NO SQL
UPDATE preguntas 
SET pregunta= pregun, clasificacion= clasi,respuesta1= resp1, respuesta2= resp2, respuesta3= resp3, respuesta4= resp4, respuesta_correcta= respuesta_correc
WHERE clave_pregunta= clave_preg$$

CREATE DEFINER=`utn5prgc`@`localhost` PROCEDURE `ActualizarPruebasEjercicios` (IN `foli` VARCHAR(30), IN `fech` DATE, IN `hor` VARCHAR(30), IN `puntuaje_pru` INT ZEROFILL, IN `calif` INT ZEROFILL, IN `clave_usu` INT ZEROFILL, IN `clave_niv` INT ZEROFILL)  NO SQL
UPDATE pruebas_o_ejercicios
SET fecha=fech,hora=hor,puntuaje_prueba=puntuaje_pru,calificacion=calif,clave_usuario=clave_usu, clave_nivel=clave_niv
WHERE folio= foli$$

CREATE DEFINER=`utn5prgc`@`localhost` PROCEDURE `ActualizarUsuarios` (IN `clave_usu` INT ZEROFILL, IN `nom` VARCHAR(30), IN `apellido_pat` VARCHAR(30), IN `apellido_mat` VARCHAR(30), IN `gene` VARCHAR(30), IN `fecha_naci` DATE, IN `correo_elec` VARCHAR(50), IN `escol` VARCHAR(30), IN `contra` VARCHAR(30))  NO SQL
update usuarios
set nombre = nom, apellido_paterno = apellido_pat, apellido_materno = apellido_mat, genero = gene, fecha_nacimiento = fecha_naci, correo_electronico = correo_elec, escolaridad = escol, contrasenia = contra
where clave_usuario = clave_usu$$

CREATE DEFINER=`utn5prgc`@`localhost` PROCEDURE `EliminarNiveles` (IN `clave_niv` INT ZEROFILL)  NO SQL
DELETE FROM niveles
WHERE clave_nivel= clave_niv$$

CREATE DEFINER=`utn5prgc`@`localhost` PROCEDURE `EliminarPreguntas` (IN `clave_preg` INT ZEROFILL)  NO SQL
DELETE FROM preguntas
WHERE clave_pregunta= clave_preg$$

CREATE DEFINER=`utn5prgc`@`localhost` PROCEDURE `EliminarPruebasEjercicios` (IN `foli` VARCHAR(30))  NO SQL
DELETE FROM pruebas_o_ejercicios
WHERE folio=foli$$

CREATE DEFINER=`utn5prgc`@`localhost` PROCEDURE `EliminarUsuario` (IN `clave` INT ZEROFILL)  NO SQL
DELETE FROM usuarios 
where clave_usuario= clave$$

CREATE DEFINER=`utn5prgc`@`localhost` PROCEDURE `InsertarNiveles` (IN `clave_nivel` INT ZEROFILL, IN `descripcion` VARCHAR(60), IN `puntuaje_nivel` INT ZEROFILL)  NO SQL
INSERT niveles (clave_nivel, descripcion, puntuaje_nivel)
VALUES (clave_nivel, descripcion, puntuaje_nivel)$$

CREATE DEFINER=`utn5prgc`@`localhost` PROCEDURE `InsertarPreguntas` (IN `id_pregunta` INT ZEROFILL, IN `clasificacion` VARCHAR(60), IN `pregunta` LONGTEXT, IN `respuesta1` VARCHAR(60), IN `respuesta2` VARCHAR(60), IN `respuesta3` VARCHAR(60), IN `respuesta4` VARCHAR(60), IN `respuesta_correcta` INT(60))  NO SQL
INSERT preguntas (clave_pregunta, clasificacion, pregunta ,  respuesta1, respuesta2, respuesta3, respuesta4,respuesta_correcta)
VALUES (id_pregunta, clasificacion, pregunta,  respuesta1, respuesta2, respuesta3, respuesta4,respuesta_correcta)$$

CREATE DEFINER=`utn5prgc`@`localhost` PROCEDURE `InsertarPruebasEjercicios` (IN `folio` VARCHAR(30), IN `fecha` DATE, IN `hora` VARCHAR(30), IN `puntuaje_prueba` INT ZEROFILL, IN `calificacion` INT ZEROFILL, IN `clave_usuario` INT ZEROFILL, IN `clave_nivel` INT ZEROFILL)  NO SQL
INSERT pruebas_o_ejercicios (folio, fecha, hora, puntuaje_prueba, calificacion, clave_usuario, clave_nivel)
VALUES (folio, fecha, hora, puntuaje_prueba, calificacion, clave_usuario, clave_nivel)$$

CREATE DEFINER=`utn5prgc`@`localhost` PROCEDURE `InsertarUsuarios` (IN `clave_usuario` INT ZEROFILL, IN `nombre` VARCHAR(30), IN `apellido_paterno` VARCHAR(30), IN `apellido_materno` VARCHAR(30), IN `genero` VARCHAR(30), IN `fecha_nacimiento` DATE, IN `correo_electronico` VARCHAR(50), IN `escolaridad` VARCHAR(30), IN `contrasenia` VARCHAR(30))  NO SQL
INSERT usuarios (clave_usuario, nombre, apellido_paterno, apellido_materno, genero, fecha_nacimiento, correo_electronico, escolaridad, contrasenia)
VALUES (clave_usuario, nombre, apellido_paterno, apellido_materno, genero, fecha_nacimiento, correo_electronico, escolaridad, contrasenia)$$

CREATE DEFINER=`utn5prgc`@`localhost` PROCEDURE `SeleccionarNiveles` ()  NO SQL
SELECT clave_nivel, descripcion, puntuaje_nivel
FROM niveles$$

CREATE DEFINER=`utn5prgc`@`localhost` PROCEDURE `SeleccionarPreguntas` ()  NO SQL
SELECT clave_pregunta, pregunta, clasificacion, respuesta1, respuesta2, respuesta3, respuesta4, respuesta_correcta
FROM preguntas$$

CREATE DEFINER=`utn5prgc`@`localhost` PROCEDURE `SeleccionarPruebasEjercicios` ()  NO SQL
SELECT folio, fecha, hora, puntuaje_prueba, calificacion, clave_usuario, clave_nivel
FROM pruebas_o_ejercicios$$

CREATE DEFINER=`utn5prgc`@`localhost` PROCEDURE `SeleccionarUsuarios` ()  NO SQL
SELECT clave_usuario, nombre, apellido_paterno,apellido_materno,genero,fecha_nacimiento,correo_electronico, escolaridad,contrasenia
FROM usuarios$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_pruebas`
--

CREATE TABLE `detalle_pruebas` (
  `respuesta` varchar(90) CHARACTER SET latin1 NOT NULL,
  `estatus` tinyint(1) NOT NULL,
  `folio` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `id_pregunta` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `detalle_pruebas`
--

INSERT INTO `detalle_pruebas` (`respuesta`, `estatus`, `folio`, `id_pregunta`) VALUES
('respuesta prueba', 12, NULL, NULL),
('aaaaa', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `niveles`
--

CREATE TABLE `niveles` (
  `clave_nivel` int(11) NOT NULL,
  `descripcion` varchar(60) CHARACTER SET latin1 NOT NULL,
  `puntuaje_nivel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `niveles`
--

INSERT INTO `niveles` (`clave_nivel`, `descripcion`, `puntuaje_nivel`) VALUES
(2, 'sdsd', 10),
(3, 'prueba', 50);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntas`
--

CREATE TABLE `preguntas` (
  `clave_pregunta` int(11) NOT NULL,
  `pregunta` longtext CHARACTER SET latin1 NOT NULL,
  `clasificacion` varchar(60) CHARACTER SET latin1 NOT NULL,
  `respuesta1` varchar(60) CHARACTER SET latin1 NOT NULL,
  `respuesta2` varchar(60) CHARACTER SET latin1 NOT NULL,
  `respuesta3` varchar(60) CHARACTER SET latin1 NOT NULL,
  `respuesta4` varchar(60) CHARACTER SET latin1 NOT NULL,
  `respuesta_correcta` varchar(60) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `preguntas`
--

INSERT INTO `preguntas` (`clave_pregunta`, `pregunta`, `clasificacion`, `respuesta1`, `respuesta2`, `respuesta3`, `respuesta4`, `respuesta_correcta`) VALUES
(1, '¿Cuántas sílabas tiene la palabra \"ESPIRALES\"?', 'Prueba', '4', '3', '2', '1', '4'),
(2, 'A la palabra ESPIRALES quítale la segunda sílaba ¿Cuál es la sílaba que quitamos?', 'Prueba', 'ES', 'PI', 'RA', 'SP', '4'),
(3, 'A la palabra FRI__RIFICO le hace falta una silaba cual es:', 'Prueba', 'TE', 'ME', 'GO', 'SE', '4'),
(4, 'De las palabras \"PLAZA\" y \"APLAUSO\" cuales son las que suenan igual', 'Prueba', 'AZA', 'SO', 'ZA', 'PLA', '4'),
(5, '¿Qué sonido o fonema suena igual en CASTAÑA y CODO?', 'Prueba', 'A', 'O', 'K', 'T', '4'),
(6, 'Ordena las siguientes letras para formar palabras correcta \"E O I N T L V E S I \"', 'Prueba', 'TELEVISION', 'EVOLUCION', 'COMUNICACION', 'VISIONLETE', '4'),
(7, 'Con cuantas palabras cuenta la siguiente oración \"Mis amigos tienen muchos juegos\"', 'Prueba', '8', '10', '5', '6', '4'),
(8, 'Ordena las siguientes letras para formar palabras correcta \"I G A L\"', 'Prueba', 'GALI', 'LAGA', 'IGAL', 'AGIL', '4'),
(9, 'Coloca la palabra inversa de \"CELULAR', 'Prueba', 'LARLUCE', 'ARLULEC', 'RALULEC', 'LUCERAL', '4'),
(10, 'Separa con guiones (-) la siguiente oración \"Todossomoscapacesdecumplirlossueños\"', 'prueba', 'Todos-somos-capacesde-cumplir-los-sueños', 'Todos-somoscapaces-de-cumplirlos-sueños', 'Todossomos-capaces-de-cumplir-lossueños', 'Todos-somos-capaces-de-cumplir-los-sueños', '4'),
(11, '¿Cual de las siguientes palabras existe?', 'Prueba', 'Bravo', 'Brado', 'Brano', 'Cravo', '4'),
(12, 'Coloca la palabra inversa de \"ALIMENTAR\" ', 'Prueba', 'RATNEMILA', 'RANTEMILA', 'RATMENILA', 'RAMNETILA', '4'),
(13, '¿Cuántas sílabas tiene la  palabra \"PLURALIZACION\"?', 'Prueba', '9', '7', '6', '5', '4'),
(14, 'Ordena las siguientes letras para formar la palabra correcta \"A M O V I U T L O\"', 'Prueba', 'MOVILOTU', 'TLOMOVAU', 'AUTOMVOLI', 'AUTOMOVIL', '4'),
(15, '¿Cuántas sílabas tiene la  palabra \"ELECTROCARDIOGRAMA\"?', 'Prueba', '9', '8', '7', '6', '3'),
(16, 'Coloca la palabra inversa de \"OVOVIVIPARO\"', 'Prueba', 'PIVIORAVOVO', 'VIVIPAROOVO', 'ORAPIVIVOVO', 'VOVOPIRAVIA', '4'),
(17, 'Ordena las siguientes letras para formar la palabra correcta \"O V I E I R D T D\"', 'Prueba', 'OVIEIRDT', 'DROVIERTD', 'DRIEVITOD', 'DIVERTIDO', '4'),
(18, 'Ordena las siguientes letras para formar la palabra correcta \"C T R O E L S C T I E D O M E O\"', 'Prueba', 'CTROELSCTIEDOMEO', 'OEMODEOTCSLEORTC', 'AUTODOMESTICOS', 'ELECTRODOMESTICO', '4'),
(19, '¿Cuántas sílabas tiene la  palabra \"MINIMALISTA\"?', 'Prueba', '4', '6', '5', '4', '2'),
(20, '¿Cuántas sílabas tiene la palabra \"ACTIVIDADES\"?', 'Prueba', '3', '6', '5', '4', '1'),
(21, 'cuantas silabas tiene la palabra Aguacate', 'Prueba', '4', '5', '6', '2', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pruebas_o_ejercicios`
--

CREATE TABLE `pruebas_o_ejercicios` (
  `folio` varchar(30) CHARACTER SET latin1 NOT NULL,
  `fecha` date NOT NULL,
  `hora` varchar(30) CHARACTER SET latin1 NOT NULL,
  `puntuaje_prueba` int(11) NOT NULL,
  `calificacion` int(11) NOT NULL,
  `clave_usuario` int(11) DEFAULT NULL,
  `clave_nivel` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `pruebas_o_ejercicios`
--

INSERT INTO `pruebas_o_ejercicios` (`folio`, `fecha`, `hora`, `puntuaje_prueba`, `calificacion`, `clave_usuario`, `clave_nivel`) VALUES
('kNjTnP3oMb', '2021-11-29', '1638246551', 11, 55, NULL, NULL),
('Prueba', '2021-11-02', '1635895883', 7, 8, NULL, NULL),
('Tn2wUu0jlB', '2021-11-29', '1638249083', 4, 19, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `clave_usuario` int(11) NOT NULL,
  `nombre` varchar(30) CHARACTER SET latin1 NOT NULL,
  `apellido_paterno` varchar(30) CHARACTER SET latin1 NOT NULL,
  `apellido_materno` varchar(30) CHARACTER SET latin1 NOT NULL,
  `genero` varchar(30) CHARACTER SET latin1 NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `correo_electronico` varchar(50) CHARACTER SET latin1 NOT NULL,
  `escolaridad` varchar(30) CHARACTER SET latin1 NOT NULL,
  `contrasenia` varchar(30) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`clave_usuario`, `nombre`, `apellido_paterno`, `apellido_materno`, `genero`, `fecha_nacimiento`, `correo_electronico`, `escolaridad`, `contrasenia`) VALUES
(3, 'Kevin', 'castillo', 'estrada', 'masculino', '2019-07-01', 'kevin@gmail.com', 'ingenieria', '159874'),
(4, 'Brandon', 'Rocha', 'Hernandez', 'Masculino', '1999-09-29', 'brandonroocha@gmail.com', 'Primaria', '1234'),
(5, 'RUTH VIANEY', 'PEREZ Z', 'ZETINA A', 'Femenino', '2000-03-27', 'ruthvianey@gmail.com', 'Primaria', '123'),
(6, 'Juan Carlos', 'Luna', 'SanchezZ', 'Masculino', '2008-02-29', 'JuanLuna@gmail.com', 'Primaria', '123'),
(7, 'Verito', 'Guti', 'Agui', 'Femenino', '2000-02-19', 'veriguti@gmail.com', 'Primaria', '123'),
(8, 'Daniel ', 'Luna', 'Sánchez', 'Masculino', '2001-07-10', 'daniel321@gmail.com', 'Primaria', 'daniel3311'),
(9, 'Diana', 'Luna ', 'Arguellez', 'Femenino', '2000-11-21', 'dianan2211@gmail.com', 'Primaria', 'diana2211'),
(10, 'Brandon', 'Rocha', 'Hernandez', 'Masculino', '2000-08-18', 'brandonrocha@gmail.com', 'Primaria', '123'),
(12, 'Veronica', 'Gutierrez', 'Aguirre', 'Femenino', '2000-02-09', 'veriitowoods@gmail.com', 'Primaria', '12345678'),
(13, 'jesus', 'Luna ', 'Mondragón', 'Masculino', '2000-01-29', 'jesus8900@gmail.com', 'Primaria', 'hola4321'),
(14, 'pablo', 'Perez', 'luz', 'Masculino', '2001-03-28', 'pablo4321@gmail.com', 'Primaria', 'pablo4321');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `detalle_pruebas`
--
ALTER TABLE `detalle_pruebas`
  ADD KEY `folio` (`folio`),
  ADD KEY `id_pregunta` (`id_pregunta`);

--
-- Indices de la tabla `niveles`
--
ALTER TABLE `niveles`
  ADD PRIMARY KEY (`clave_nivel`);

--
-- Indices de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  ADD PRIMARY KEY (`clave_pregunta`);

--
-- Indices de la tabla `pruebas_o_ejercicios`
--
ALTER TABLE `pruebas_o_ejercicios`
  ADD PRIMARY KEY (`folio`),
  ADD KEY `clave_usuario` (`clave_usuario`),
  ADD KEY `clave_nivel` (`clave_nivel`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`clave_usuario`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalle_pruebas`
--
ALTER TABLE `detalle_pruebas`
  ADD CONSTRAINT `detalle_pruebas_ibfk_1` FOREIGN KEY (`folio`) REFERENCES `pruebas_o_ejercicios` (`folio`),
  ADD CONSTRAINT `detalle_pruebas_ibfk_2` FOREIGN KEY (`id_pregunta`) REFERENCES `preguntas` (`clave_pregunta`);

--
-- Filtros para la tabla `pruebas_o_ejercicios`
--
ALTER TABLE `pruebas_o_ejercicios`
  ADD CONSTRAINT `pruebas_o_ejercicios_ibfk_1` FOREIGN KEY (`clave_usuario`) REFERENCES `usuarios` (`clave_usuario`),
  ADD CONSTRAINT `pruebas_o_ejercicios_ibfk_2` FOREIGN KEY (`clave_nivel`) REFERENCES `niveles` (`clave_nivel`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
