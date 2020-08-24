-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-06-2018 a las 02:33:32
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistemas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `docad` bigint(15) NOT NULL,
  `tip_doc_ad` varchar(5) NOT NULL,
  `nom1` text NOT NULL,
  `nom2` text,
  `ap1` text NOT NULL,
  `ap2` text,
  `dir_ad` varchar(40) NOT NULL,
  `tel_ad` bigint(10) NOT NULL,
  `tip_user` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`docad`, `tip_doc_ad`, `nom1`, `nom2`, `ap1`, `ap2`, `dir_ad`, `tel_ad`, `tip_user`) VALUES
(7318214, '1', 'Miguel', 'Alvaro', 'Quiroga', 'Panqueva', 'centro', 313, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `coordinador`
--

CREATE TABLE `coordinador` (
  `doc_co` bigint(15) NOT NULL,
  `tip_doc_co` varchar(5) NOT NULL,
  `nom1` text NOT NULL,
  `nom2` text NOT NULL,
  `ap1` text NOT NULL,
  `ap2` text NOT NULL,
  `dir_co` varchar(40) NOT NULL,
  `tel_co` varchar(15) NOT NULL,
  `cel_co` varchar(15) NOT NULL,
  `mail` varchar(40) NOT NULL,
  `tip_user` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `coordinador`
--

INSERT INTO `coordinador` (`doc_co`, `tip_doc_co`, `nom1`, `nom2`, `ap1`, `ap2`, `dir_co`, `tel_co`, `cel_co`, `mail`, `tip_user`) VALUES
(46677958, '1', 'Liliana', 'Edith', 'Quiroga', 'Beltran', 'Calle 17 No 7-34 apto 305', '726 31 11', '320 209 3988', 'liliana@gmail.com', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docente`
--

CREATE TABLE `docente` (
  `id_doc` int(3) NOT NULL,
  `doc_do` bigint(15) NOT NULL,
  `tip_doc_do` varchar(5) NOT NULL,
  `nom1` text NOT NULL,
  `nom2` text NOT NULL,
  `ap1` text NOT NULL,
  `ap2` text NOT NULL,
  `dir_do` varchar(40) NOT NULL,
  `tel_do` int(10) NOT NULL,
  `tip_user` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

CREATE TABLE `estudiante` (
  `doc_es` bigint(15) NOT NULL,
  `tip_doc_es` varchar(5) NOT NULL,
  `nom1` text NOT NULL,
  `nom2` text NOT NULL,
  `ap1` text NOT NULL,
  `ap2` text NOT NULL,
  `dir_es` varchar(40) NOT NULL,
  `tel_es` int(10) NOT NULL,
  `edad_es` int(2) NOT NULL,
  `prog_es` varchar(40) NOT NULL,
  `tip_user` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estudiante`
--

INSERT INTO `estudiante` (`doc_es`, `tip_doc_es`, `nom1`, `nom2`, `ap1`, `ap2`, `dir_es`, `tel_es`, `edad_es`, `prog_es`, `tip_user`) VALUES
(7318214, '1', 'Demetrio', 'Mauricio', 'Estupiñan', 'Fino', 'bogota', 3123, 35, '1', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programa`
--

CREATE TABLE `programa` (
  `cod_pro` int(10) NOT NULL,
  `nom_pro` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`docad`);

--
-- Indices de la tabla `coordinador`
--
ALTER TABLE `coordinador`
  ADD PRIMARY KEY (`doc_co`);

--
-- Indices de la tabla `docente`
--
ALTER TABLE `docente`
  ADD PRIMARY KEY (`id_doc`) USING BTREE,
  ADD UNIQUE KEY `doc_do` (`doc_do`);

--
-- Indices de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD PRIMARY KEY (`doc_es`);

--
-- Indices de la tabla `programa`
--
ALTER TABLE `programa`
  ADD PRIMARY KEY (`cod_pro`) USING BTREE;

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `docente`
--
ALTER TABLE `docente`
  MODIFY `id_doc` int(3) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
