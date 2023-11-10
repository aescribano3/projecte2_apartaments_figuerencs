-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-11-2023 a las 16:37:58
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `apartaments`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `apartaments`
--

CREATE TABLE `apartaments` (
  `idApartament` int(11) NOT NULL,
  `idUsuari` int(11) DEFAULT NULL,
  `diaMaximCancel` int(11) NOT NULL,
  `latitud` decimal(10,8) NOT NULL,
  `longitud` decimal(11,8) NOT NULL,
  `habitacions` int(11) NOT NULL,
  `titol` varchar(150) NOT NULL,
  `descripcio` varchar(300) NOT NULL,
  `preuTA` decimal(10,2) NOT NULL,
  `preuTB` decimal(10,2) NOT NULL,
  `metresCuadrats` decimal(10,2) NOT NULL,
  `adreca` varchar(150) NOT NULL,
  `codiPostal` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estat`
--

CREATE TABLE `estat` (
  `idEstat` int(11) NOT NULL,
  `idApartament` int(11) DEFAULT NULL,
  `dataInici` date DEFAULT NULL,
  `dataFinal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imgapartament`
--

CREATE TABLE `imgapartament` (
  `idImatge` int(11) NOT NULL,
  `idApartament` int(11) DEFAULT NULL,
  `aptUrl` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva`
--

CREATE TABLE `reserva` (
  `idReserva` int(11) NOT NULL,
  `idApartament` int(11) DEFAULT NULL,
  `idUsuari` int(11) DEFAULT NULL,
  `DataMaximCancel` date NOT NULL,
  `preu` decimal(10,2) NOT NULL,
  `diaEntrada` date NOT NULL,
  `diaSortida` date NOT NULL,
  `estat` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `serveis`
--

CREATE TABLE `serveis` (
  `idServei` int(11) NOT NULL,
  `nom` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `serveis`
--

INSERT INTO `serveis` (`idServei`, `nom`) VALUES
(1, 'Piscina'),
(2, 'Parking'),
(3, 'Wi-Fi'),
(4, 'Calefacció');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `serveisapartaments`
--

CREATE TABLE `serveisapartaments` (
  `idServei` int(11) DEFAULT NULL,
  `idApartament` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `temporada`
--

CREATE TABLE `temporada` (
  `idTemporada` int(11) NOT NULL,
  `idApartament` int(11) DEFAULT NULL,
  `nom` varchar(150) NOT NULL,
  `dataInici` date NOT NULL,
  `dataFinal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuari`
--

CREATE TABLE `usuari` (
  `id` int(11) NOT NULL,
  `nom` varchar(150) NOT NULL,
  `cognom` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `telefon` int(9) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `cv` int(13) NOT NULL,
  `rol` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `apartaments`
--
ALTER TABLE `apartaments`
  ADD PRIMARY KEY (`idApartament`),
  ADD KEY `idUsuari` (`idUsuari`);

--
-- Indices de la tabla `estat`
--
ALTER TABLE `estat`
  ADD PRIMARY KEY (`idEstat`),
  ADD KEY `idApartament` (`idApartament`);

--
-- Indices de la tabla `imgapartament`
--
ALTER TABLE `imgapartament`
  ADD PRIMARY KEY (`idImatge`),
  ADD KEY `idApartament` (`idApartament`);

--
-- Indices de la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD PRIMARY KEY (`idReserva`),
  ADD KEY `idApartament` (`idApartament`),
  ADD KEY `idUsuari` (`idUsuari`);

--
-- Indices de la tabla `serveis`
--
ALTER TABLE `serveis`
  ADD PRIMARY KEY (`idServei`);

--
-- Indices de la tabla `serveisapartaments`
--
ALTER TABLE `serveisapartaments`
  ADD KEY `idServei` (`idServei`),
  ADD KEY `idApartament` (`idApartament`);

--
-- Indices de la tabla `temporada`
--
ALTER TABLE `temporada`
  ADD PRIMARY KEY (`idTemporada`),
  ADD KEY `idApartament` (`idApartament`);

--
-- Indices de la tabla `usuari`
--
ALTER TABLE `usuari`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `apartaments`
--
ALTER TABLE `apartaments`
  MODIFY `idApartament` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `estat`
--
ALTER TABLE `estat`
  MODIFY `idEstat` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `imgapartament`
--
ALTER TABLE `imgapartament`
  MODIFY `idImatge` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `reserva`
--
ALTER TABLE `reserva`
  MODIFY `idReserva` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `serveis`
--
ALTER TABLE `serveis`
  MODIFY `idServei` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `temporada`
--
ALTER TABLE `temporada`
  MODIFY `idTemporada` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuari`
--
ALTER TABLE `usuari`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `apartaments`
--
ALTER TABLE `apartaments`
  ADD CONSTRAINT `apartaments_ibfk_1` FOREIGN KEY (`idUsuari`) REFERENCES `usuari` (`id`);

--
-- Filtros para la tabla `estat`
--
ALTER TABLE `estat`
  ADD CONSTRAINT `estat_ibfk_1` FOREIGN KEY (`idApartament`) REFERENCES `apartaments` (`idApartament`);

--
-- Filtros para la tabla `imgapartament`
--
ALTER TABLE `imgapartament`
  ADD CONSTRAINT `imgapartament_ibfk_1` FOREIGN KEY (`idApartament`) REFERENCES `apartaments` (`idApartament`);

--
-- Filtros para la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD CONSTRAINT `reserva_ibfk_1` FOREIGN KEY (`idApartament`) REFERENCES `apartaments` (`idApartament`),
  ADD CONSTRAINT `reserva_ibfk_2` FOREIGN KEY (`idUsuari`) REFERENCES `usuari` (`id`);

--
-- Filtros para la tabla `serveisapartaments`
--
ALTER TABLE `serveisapartaments`
  ADD CONSTRAINT `serveisapartaments_ibfk_1` FOREIGN KEY (`idServei`) REFERENCES `serveis` (`idServei`),
  ADD CONSTRAINT `serveisapartaments_ibfk_2` FOREIGN KEY (`idApartament`) REFERENCES `apartaments` (`idApartament`);

--
-- Filtros para la tabla `temporada`
--
ALTER TABLE `temporada`
  ADD CONSTRAINT `temporada_ibfk_1` FOREIGN KEY (`idApartament`) REFERENCES `apartaments` (`idApartament`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
