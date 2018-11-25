-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-11-2018 a las 22:15:13
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `motos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

CREATE TABLE `marca` (
  `ID_MAR` int(11) NOT NULL,
  `NOM_MAR` varchar(20) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `marca`
--

INSERT INTO `marca` (`ID_MAR`, `NOM_MAR`) VALUES
(1, 'GAS GAS'),
(2, 'HONDA'),
(3, 'YAMAHA'),
(4, 'SUZUKI'),
(5, 'KTM'),
(6, 'HUSQVARNA'),
(7, 'KAWASAKI'),
(8, 'BMW'),
(9, 'DUCATI'),
(10, 'SHERCO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modalidad`
--

CREATE TABLE `modalidad` (
  `NOM_MOD` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `ID_MOD` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `modalidad`
--

INSERT INTO `modalidad` (`NOM_MOD`, `ID_MOD`) VALUES
('SCOOTER', 1),
('NAKED', 2),
('SPORT', 3),
('SUPER SPORT', 4),
('TRIAL', 5),
('MOTOCROSS', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `ID_PROD` int(11) NOT NULL,
  `ID_MAR` int(15) DEFAULT NULL,
  `ID_MOD` int(11) DEFAULT NULL,
  `NOM_PRO` varchar(35) COLLATE utf8_spanish2_ci NOT NULL,
  `COL_PRO` text COLLATE utf8_spanish2_ci NOT NULL,
  `CIL_PRO` int(4) NOT NULL,
  `IMG_PRO` varchar(255) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`ID_PROD`, `ID_MAR`, `ID_MOD`, `NOM_PRO`, `COL_PRO`, `CIL_PRO`, `IMG_PRO`) VALUES
(1, 2, 2, 'CB 650F', 'Negro', 650, 'https://png2.kisspng.com/20180515/wxe/kisspng-honda-cb650f-honda-cbr250r-cbr300r-honda-cbr650f-5afabb0381b579.3974333315263813155313.png\r\n'),
(2, 2, 1, 'SH 300i', 'Negro', 300, 'http://www.ridocciperformance.com/wp-content/uploads/2017/06/SH300i-2017-Blanco.jpg'),
(3, 2, 6, 'CRF 450R', 'Rojo', 450, 'https://cdp.azureedge.net/products/USA/HO/2019/MC/MX/CRF250R/50/RED/2000000015.jpg'),
(4, 2, 1, 'INTEGRA', 'Blanco', 750, 'http://motoruep.com/wp-content/uploads/2018/02/H.Integra-Blanca-perla-LD-300x169.png'),
(5, 2, 5, 'MONTESA COTA 300RR', 'Negro', 300, 'https://cdp.azureedge.net/products/USA/HO/2017/MC/OFFROAD/MONTESA_COTA_300RR_MRT300H/50/RED/2000000011_480px.jpg'),
(6, 3, 2, 'MT-09', 'Gris', 847, 'https://cdn.yamaha-motor.eu/product_assets/2018/MT09/950-75/2018-Yamaha-MT-09-EU-Yamaha-Blue-Studio-002.jpg'),
(7, 3, 1, 'AEROX R', 'Blanco', 50, 'http://stopandgomotos.es/wp-content/uploads/2017/02/2016-Yamaha-Aerox-R-EU-Race-Blu-Studio-002.jpg'),
(8, 3, 3, 'YZF-R1', 'Azul', 998, 'http://www.arpem.com/imagenes/ficha/5/7/7/8/lateral.2285778.jpg'),
(9, 4, 6, 'RMZ 450', 'Amarillo', 450, 'http://www.suzukicycles.com/~/media/403EE5D8E7CF418880DD4447443A0906.ashx?h=344'),
(10, 4, 2, 'GSX-S1000', 'Azul', 1000, 'https://moto.suzuki.es/images/colores/ficha/GSX-S1000AL8_KEL_Right.jpg'),
(11, 4, 3, 'GSX250R', 'Azul', 250, 'http://motos-suzuki.com/motos/images/slider/motos/mobile/gsxr250-03.png'),
(12, 4, 1, 'ADDRESS', 'Azul', 110, 'https://moto.suzuki.es/images/colores/ficha/UK110NEL5_YUH_Right.jpg'),
(13, 5, 2, '790 DUKE', 'Naranja', 790, 'https://cdp.azureedge.net/products/USA/KT/2019/MC/SPORT/790_DUKE/50/ORANGE_-_BLACK/2000000001.png'),
(14, 5, 6, '125 SX', 'Naranja', 125, 'http://www.arpem.com/imagenes/ficha/0/8/1/8/lateral-derecho.1970818.jpg'),
(15, 6, 6, 'FC 250', 'Blanco', 250, 'https://www.motofichas.com/images/cache/3696-medium-01-husqvarna-fc-250-2018.jpg'),
(16, 6, 6, 'TE 300i', 'Blanco', 300, 'http://www.canariasenmoto.com/motos/nuevas/images/moto_1539.jpg'),
(17, 7, 2, 'Z900', 'Negro', 900, 'http://www.probike49.fr/wp-content/uploads/Z9009.jpg'),
(18, 7, 3, 'Ninja ZX-10R', 'Verde', 1000, 'https://cdn.shopify.com/s/files/1/2543/9560/products/e8e24a905f95f3acac8a096cf78cc2e4_68ec42cf-6046-4280-8744-fe4ee2f93459_1200x1200.jpg?v=1514245824'),
(19, 7, 6, 'KX250F', 'Verde', 250, 'https://images-na.ssl-images-amazon.com/images/I/41HNJ%2B8gR7L._SX355_.jpg'),
(20, 8, 3, 'S 1000 RR', 'Blanco', 1000, 'https://media.zigcdn.com/media/model/2017/Dec/bmw-s1000rr-right-view_600x300.jpg'),
(21, 9, 4, 'PANIGALE V4 SPECIALE', 'Rojo', 1299, 'http://www.motociclismo.es/media/cache/recorte_basico/upload/images/paragrapharticle/30919/paragrapharticle-72813-5a006c3e5478b.jpg'),
(26, 3, 6, 'YZ 65', 'Azul', 65, 'https://www.yamahamotorsports.com/content/common/vr/yz65/2018/1/zoomimages/18YZ65blue_1500-01.jpg'),
(27, 8, 2, 'R NINE T', 'Negro', 1000, 'https://auto.ndtvimg.com/bike-images/colors/bmw/r-nine-t/bmw-r-nine-t-black-strom-metallic.jpg?v=1'),
(28, 5, 6, 'SX-F 450', 'Naranja', 450, 'https://www.arpem.com/imagenes/ficha/1/2/7/8/lateral.1381278.jpg'),
(29, 5, 6, '300 EXC', 'Naranja', 300, 'https://www.arpem.com/imagenes/ficha/6/8/8/0/lateral.1376880.jpg'),
(30, 10, 6, '250 SE-R', 'Azul', 250, 'https://motosnuevas.formulamoto.es/galeria/5075/Sherco_250_SE-R.jpg'),
(31, 8, 1, 'C 650 SPORT', 'Blanco', 650, 'https://www.motofichas.com/images/phocagallery/BMW_Motorrad/c-650-sport-2018/02-bmw-c-650-sport-2019-hp-motorsport-perfil.jpg'),
(32, 9, 2, 'Monster 1200 S', 'Blanco', 1200, 'https://motosnuevas.formulamoto.es/galeria/5421/Ducati_Monster_1200_25_Aniversario.jpg'),
(33, 1, 5, 'TXT GP 125', 'Rojo', 125, 'https://cdp.azureedge.net/products/USA/GG/2017/MC/TRIALS/TXT_GP_125/50/BLACK_-_WHITE/2000000001.jpg'),
(34, 1, 5, 'TXT Racing 300', 'Rojo', 300, 'http://cdnmedia.endeavorsuite.com/images/catalogs/15654/products/detail/0a801ffe-9b75-44fd-b1ef-a0a8ca6d37fa.jpg'),
(35, 1, 6, 'Enduro GP', 'Blanco', 250, 'https://a.mcdn.es/mnet/contents/media/gas_gas/ec_200/1012495.jpg/656x369cut/'),
(36, 6, 2, 'VITPILEN 701', 'Gris', 700, 'http://www.teamgreen-bg.com/modules/product/images2/6015.jpg'),
(37, 6, 2, 'VITPILEN 401', 'Blanco', 400, 'https://www.motofichas.com/images/phocagallery/Husqvarna/Vitpilen_401/03-huqvarna-vitpilen-401-2017-accesorios.jpg'),
(38, 4, 4, 'Hayabusa', 'Blanco', 1200, 'https://auto.ndtvimg.com/bike-images/colors/suzuki/hayabusa/suzuki-hayabusa-glass-sparkle-black-pearl-glacier-white.jpg?v=1'),
(39, 2, 4, 'CBR 1000 RR Fireblade', 'Negro', 1000, 'https://www.honda.es/content/dam/central/motorcycles/colour-picker/supersports/cbr1000rr/cbr1000rr_2018/nh-a86m_matteballisticblackmetallic/cbr1000rr_2017_nh-a85m_matteballisticblackbetallic.png/_jcr_content/renditions/c4.png'),
(40, 3, 1, 'T-MAX 530', 'Negro', 530, 'https://api.motorpress-iberica.es/motociclismo-fichas/api/v1/images/modelo/5874a7d0707ba4a76fa53c93.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `ID_USU` int(10) NOT NULL,
  `NICK_USU` varchar(25) COLLATE utf8_spanish2_ci NOT NULL,
  `NOM_USU` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `APE_USU` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `CON_USU` varchar(33) COLLATE utf8_spanish2_ci NOT NULL,
  `COR_USU` varchar(50) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`ID_USU`, `NICK_USU`, `NOM_USU`, `APE_USU`, `CON_USU`, `COR_USU`) VALUES
(7, 'admin', 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@admin.com'),
(49, 'adan', 'adan', 'adan', 'b34f06e907567dfdc6d3c214d42fb9d9', 'adan');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usu_mar_fav`
--

CREATE TABLE `usu_mar_fav` (
  `ID_MAR` int(11) NOT NULL,
  `ID_USU` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usu_mod_fav`
--

CREATE TABLE `usu_mod_fav` (
  `COD_MOD` int(11) NOT NULL,
  `ID_USU` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usu_prod_fav`
--

CREATE TABLE `usu_prod_fav` (
  `ID_PROD` int(11) NOT NULL,
  `ID_USU` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usu_prod_fav`
--

INSERT INTO `usu_prod_fav` (`ID_PROD`, `ID_USU`) VALUES
(2, 7),
(4, 7),
(8, 7);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`ID_MAR`);

--
-- Indices de la tabla `modalidad`
--
ALTER TABLE `modalidad`
  ADD PRIMARY KEY (`ID_MOD`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`ID_PROD`),
  ADD KEY `codigo` (`ID_MAR`),
  ADD KEY `codigo2` (`ID_MOD`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`ID_USU`),
  ADD UNIQUE KEY `index1` (`NICK_USU`);

--
-- Indices de la tabla `usu_mar_fav`
--
ALTER TABLE `usu_mar_fav`
  ADD KEY `codigo6` (`ID_MAR`),
  ADD KEY `codigo7` (`ID_USU`);

--
-- Indices de la tabla `usu_mod_fav`
--
ALTER TABLE `usu_mod_fav`
  ADD KEY `codigo8` (`COD_MOD`),
  ADD KEY `codigo9` (`ID_USU`);

--
-- Indices de la tabla `usu_prod_fav`
--
ALTER TABLE `usu_prod_fav`
  ADD PRIMARY KEY (`ID_PROD`,`ID_USU`) USING BTREE,
  ADD KEY `codigo1` (`ID_PROD`),
  ADD KEY `codigo2` (`ID_USU`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `marca`
--
ALTER TABLE `marca`
  MODIFY `ID_MAR` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `modalidad`
--
ALTER TABLE `modalidad`
  MODIFY `ID_MOD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `ID_PROD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `ID_USU` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `codigo2` FOREIGN KEY (`ID_MOD`) REFERENCES `modalidad` (`ID_MOD`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`ID_MAR`) REFERENCES `marca` (`ID_MAR`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usu_mar_fav`
--
ALTER TABLE `usu_mar_fav`
  ADD CONSTRAINT `codigo6` FOREIGN KEY (`ID_MAR`) REFERENCES `marca` (`ID_MAR`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `codigo7` FOREIGN KEY (`ID_USU`) REFERENCES `usuario` (`ID_USU`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usu_mod_fav`
--
ALTER TABLE `usu_mod_fav`
  ADD CONSTRAINT `codigo8` FOREIGN KEY (`COD_MOD`) REFERENCES `modalidad` (`ID_MOD`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `codigo9` FOREIGN KEY (`ID_USU`) REFERENCES `usuario` (`ID_USU`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usu_prod_fav`
--
ALTER TABLE `usu_prod_fav`
  ADD CONSTRAINT `codigo1` FOREIGN KEY (`ID_PROD`) REFERENCES `producto` (`ID_PROD`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `codigo5` FOREIGN KEY (`ID_USU`) REFERENCES `usuario` (`ID_USU`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
