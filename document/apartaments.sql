-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-11-2023 a las 17:44:06
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

--
-- Volcado de datos para la tabla `apartaments`
--

INSERT INTO `apartaments` (`idApartament`, `idUsuari`, `diaMaximCancel`, `latitud`, `longitud`, `habitacions`, `titol`, `descripcio`, `preuTA`, `preuTB`, `metresCuadrats`, `adreca`, `codiPostal`) VALUES
(1, 27, 3, 85.00000000, 79.00000000, 1, 'Apt 1', 'Apt 1 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus diam dui, lacinia quis egestas a, efficitur eu sapien. Quisque vestibulum augue eu semper imperdiet. Quisque tempus molestie dui vel efficitur. Donec est elit, blandit nec luctus et, tincidunt sed purus. Donec ullamcorper sodal', 350.00, 155.00, 25.00, 'Apt 1', 17600),
(2, 27, 20, 85.00000000, 45.00000000, 6, 'gonorrea', 'Aassdnajdbasdnakjbdj abd asdj asdao shdjabsdjkbaskjdb askjhdkja shdkjhaskdhask', 45215.00, 645.00, 1.00, 'dsadasd', 12457),
(3, 27, 6, 85.00000000, 45.00000000, 2, 'Monte Pinar', 'Monte pinar, donde los sueños se hacen realidad', 349.00, 149.00, 57.00, 'Ave del paraiso 35', 17600),
(4, 27, 6, 85.00000000, 45.00000000, 2, 'Monte Pinar', 'Monte pinar, donde los sueños se hacen realidad', 349.00, 149.00, 57.00, 'Ave del paraiso 35', 17600),
(5, 27, 3, 87.65790000, 15.33158000, 3, 'Piso Abuelas Locas', 'El edificio de las yayas locardas', 599.99, 299.99, 67.00, 'Callle sanjose Nº3', 17600),
(6, 27, 3, 87.65790000, 15.33158000, 3, 'Abuelitas YoYO', 'El edificio de las yayas locardas', 599.99, 299.99, 67.00, 'Callle sanjose Nº3', 17600);

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

--
-- Volcado de datos para la tabla `imgapartament`
--

INSERT INTO `imgapartament` (`idImatge`, `idApartament`, `aptUrl`) VALUES
(1, 6, 'apartamento.PNG');

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

--
-- Volcado de datos para la tabla `reserva`
--

INSERT INTO `reserva` (`idReserva`, `idApartament`, `idUsuari`, `DataMaximCancel`, `preu`, `diaEntrada`, `diaSortida`, `estat`) VALUES
(1, 3, 27, '2023-03-27', 149.00, '2023-04-02', '2023-04-03', ''),
(2, 3, 27, '2023-10-27', 2443.00, '2023-11-02', '2023-11-09', ''),
(3, 4, 6, '2023-10-27', 2792.00, '2023-11-02', '2023-11-10', 'Obert'),
(4, 6, 6, '2023-06-21', 1199.98, '2023-06-24', '2023-06-26', 'Tancat'),
(5, 6, 30, '2023-03-30', 1199.98, '2023-04-02', '2023-04-04', 'Obert'),
(6, 6, 27, '2023-03-30', 599.99, '2023-04-02', '2023-04-03', 'Obert');

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

--
-- Volcado de datos para la tabla `serveisapartaments`
--

INSERT INTO `serveisapartaments` (`idServei`, `idApartament`) VALUES
(1, 1),
(3, 1),
(1, 2),
(3, 2),
(2, 2),
(4, 2),
(1, 3),
(2, 3),
(4, 3),
(1, 4),
(2, 4),
(4, 4),
(3, 5),
(4, 5),
(3, 6),
(4, 6);

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

--
-- Volcado de datos para la tabla `temporada`
--

INSERT INTO `temporada` (`idTemporada`, `idApartament`, `nom`, `dataInici`, `dataFinal`) VALUES
(1, 3, 'Temporada Alta', '2023-07-01', '2023-12-31'),
(2, 3, 'Temporada Baixa', '2023-01-01', '2023-06-30'),
(3, 4, 'Temporada Alta', '2023-07-01', '2023-12-31'),
(4, 4, 'Temporada Baixa', '2023-01-01', '2023-06-30'),
(5, 5, 'Temporada Alta', '2023-07-01', '2023-01-11'),
(6, 5, 'Temporada Baixa', '2022-02-11', '1970-01-01'),
(7, 6, 'Temporada Alta', '2023-07-01', '2023-01-11'),
(8, 6, 'Temporada Baixa', '2022-02-11', '1970-01-01');

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
-- Volcado de datos para la tabla `usuari`
--

INSERT INTO `usuari` (`id`, `nom`, `cognom`, `email`, `telefon`, `pass`, `cv`, `rol`) VALUES
(6, 'user', 'user', 'user@gmail.com', 999999998, '202cb962ac59075b964b07152d234b70', 55555487, 'Usuari'),
(8, 'Gestor', 'Gestor', 'gestor@gmail.com', 654521546, '202cb962ac59075b964b07152d234b70', 545454541, 'Gestor'),
(27, 'admin', 'admin', 'admin@gmail.com', 666666666, '202cb962ac59075b964b07152d234b70', 24587532, 'Administrador'),
(30, 'Mamporreros', 'Josema', 'mj@gmail.com', 658458745, 'e10adc3949ba59abbe56e057f20f883e', 45762166, 'Usuari');

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
  MODIFY `idApartament` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `estat`
--
ALTER TABLE `estat`
  MODIFY `idEstat` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `imgapartament`
--
ALTER TABLE `imgapartament`
  MODIFY `idImatge` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `reserva`
--
ALTER TABLE `reserva`
  MODIFY `idReserva` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `serveis`
--
ALTER TABLE `serveis`
  MODIFY `idServei` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `temporada`
--
ALTER TABLE `temporada`
  MODIFY `idTemporada` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `usuari`
--
ALTER TABLE `usuari`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

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
