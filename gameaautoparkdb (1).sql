-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-10-2019 a las 07:03:15
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gameaautoparkdb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clases`
--

CREATE TABLE `clases` (
  `clase_id` bigint(20) UNSIGNED NOT NULL,
  `clase_descripcion` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `clases`
--

INSERT INTO `clases` (`clase_id`, `clase_descripcion`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'AUTOMOVIL', '2019-10-23 21:12:53', '2019-10-23 21:12:53', NULL),
(2, 'CAMIONETA', '2019-10-23 21:13:06', '2019-10-23 21:13:06', NULL),
(3, 'VAGONETA', '2019-10-23 21:13:14', '2019-10-23 21:13:14', NULL),
(4, 'JEEP', '2019-10-23 21:13:21', '2019-10-23 21:13:21', NULL),
(5, 'CAMION', '2019-10-23 21:13:30', '2019-10-23 21:13:30', NULL),
(6, 'BUS', '2019-10-23 21:13:42', '2019-10-23 21:13:42', NULL),
(7, 'CUADRATRACK', '2019-10-23 21:13:49', '2019-10-23 21:13:49', NULL),
(8, 'TRIMOVIL', '2019-10-23 21:13:56', '2019-10-23 21:13:56', NULL),
(9, 'MOTOCICLETA', '2019-10-23 21:14:04', '2019-10-23 21:14:04', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documentos_propiedad_vehiculos`
--

CREATE TABLE `documentos_propiedad_vehiculos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `archivo_subido` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre_documento_propiedad` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `placa_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `documentos_propiedad_vehiculos`
--

INSERT INTO `documentos_propiedad_vehiculos` (`id`, `archivo_subido`, `nombre_documento_propiedad`, `placa_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '2720RKF20190123_131925.jpg', '20190123_131925.jpg', '2720RKF', '2019-10-23 22:30:29', '2019-10-23 22:30:29', NULL),
(2, '2720RKF20190123_131931.jpg', '20190123_131931.jpg', '2720RKF', '2019-10-23 22:30:29', '2019-10-23 22:30:29', NULL),
(3, '2720RKF20190123_131937.jpg', '20190123_131937.jpg', '2720RKF', '2019-10-23 22:30:30', '2019-10-23 22:30:30', NULL),
(4, '2720RKF20190123_131941.jpg', '20190123_131941.jpg', '2720RKF', '2019-10-23 22:30:30', '2019-10-23 22:30:30', NULL),
(5, '2720RKF20190123_132000.jpg', '20190123_132000.jpg', '2720RKF', '2019-10-23 22:30:30', '2019-10-23 22:30:30', NULL),
(6, '2720RKF20190123_132004.jpg', '20190123_132004.jpg', '2720RKF', '2019-10-23 22:30:30', '2019-10-23 22:30:30', NULL),
(7, '2720RKF20190123_132010.jpg', '20190123_132010.jpg', '2720RKF', '2019-10-23 22:30:30', '2019-10-23 22:30:30', NULL),
(8, '2720RKF20190123_132017.jpg', '20190123_132017.jpg', '2720RKF', '2019-10-23 22:30:30', '2019-10-23 22:30:30', NULL),
(9, '2911PHC20190123_131651.jpg', '20190123_131651.jpg', '2911PHC', '2019-10-23 22:38:46', '2019-10-23 22:38:46', NULL),
(10, '2911PHC20190123_131657.jpg', '20190123_131657.jpg', '2911PHC', '2019-10-23 22:38:46', '2019-10-23 22:38:46', NULL),
(11, '2911PHC20190123_131704.jpg', '20190123_131704.jpg', '2911PHC', '2019-10-23 22:38:46', '2019-10-23 22:38:46', NULL),
(12, '2911PHC20190123_131709.jpg', '20190123_131709.jpg', '2911PHC', '2019-10-23 22:38:46', '2019-10-23 22:38:46', NULL),
(13, '2911PHC20190123_131715.jpg', '20190123_131715.jpg', '2911PHC', '2019-10-23 22:38:46', '2019-10-23 22:38:46', NULL),
(14, '2911PHC20190123_131727.jpg', '20190123_131727.jpg', '2911PHC', '2019-10-23 22:38:46', '2019-10-23 22:38:46', NULL),
(15, '2911PHC20190123_131733.jpg', '20190123_131733.jpg', '2911PHC', '2019-10-23 22:38:47', '2019-10-23 22:38:47', NULL),
(16, '2911PHC20190123_131747.jpg', '20190123_131747.jpg', '2911PHC', '2019-10-23 22:38:47', '2019-10-23 22:38:47', NULL),
(17, '2911PHC20190123_131755.jpg', '20190123_131755.jpg', '2911PHC', '2019-10-23 22:38:47', '2019-10-23 22:38:47', NULL),
(18, '1147DEK20190118_095816.jpg', '20190118_095816.jpg', '1147DEK', '2019-10-23 22:44:09', '2019-10-23 22:44:09', NULL),
(19, '1147DEK20190118_095824.jpg', '20190118_095824.jpg', '1147DEK', '2019-10-23 22:44:09', '2019-10-23 22:44:09', NULL),
(20, '1147DEK20190118_095905.jpg', '20190118_095905.jpg', '1147DEK', '2019-10-23 22:44:09', '2019-10-23 22:44:09', NULL),
(21, '1147DEK20190118_095919.jpg', '20190118_095919.jpg', '1147DEK', '2019-10-23 22:44:09', '2019-10-23 22:44:09', NULL),
(22, '1147DEK20190118_100006.jpg', '20190118_100006.jpg', '1147DEK', '2019-10-23 22:44:09', '2019-10-23 22:44:09', NULL),
(23, '1147DEK20190118_121326.jpg', '20190118_121326.jpg', '1147DEK', '2019-10-23 22:44:09', '2019-10-23 22:44:09', NULL),
(24, '1147DEK20190118_121348.jpg', '20190118_121348.jpg', '1147DEK', '2019-10-23 22:44:10', '2019-10-23 22:44:10', NULL),
(25, '4040FER20190121_125911.jpg', '20190121_125911.jpg', '4040FER', '2019-10-23 22:51:26', '2019-10-23 22:51:26', NULL),
(26, '4040FER20190121_125917.jpg', '20190121_125917.jpg', '4040FER', '2019-10-23 22:51:27', '2019-10-23 22:51:27', NULL),
(27, '4040FER20190121_125929.jpg', '20190121_125929.jpg', '4040FER', '2019-10-23 22:51:27', '2019-10-23 22:51:27', NULL),
(28, '4040FER20190121_130004.jpg', '20190121_130004.jpg', '4040FER', '2019-10-23 22:51:27', '2019-10-23 22:51:27', NULL),
(29, '4040FER20190121_130016.jpg', '20190121_130016.jpg', '4040FER', '2019-10-23 22:51:27', '2019-10-23 22:51:27', NULL),
(30, '4040FER20190121_130026.jpg', '20190121_130026.jpg', '4040FER', '2019-10-23 22:51:27', '2019-10-23 22:51:27', NULL),
(31, '4040FER20190121_130107.jpg', '20190121_130107.jpg', '4040FER', '2019-10-23 22:51:27', '2019-10-23 22:51:27', NULL),
(32, '4040FER20190121_130113.jpg', '20190121_130113.jpg', '4040FER', '2019-10-23 22:51:27', '2019-10-23 22:51:27', NULL),
(33, '3411LIP20190123_131459.jpg', '20190123_131459.jpg', '3411LIP', '2019-10-23 22:55:43', '2019-10-23 22:55:43', NULL),
(34, '3411LIP20190123_131527.jpg', '20190123_131527.jpg', '3411LIP', '2019-10-23 22:55:43', '2019-10-23 22:55:43', NULL),
(35, '3411LIP20190123_131533.jpg', '20190123_131533.jpg', '3411LIP', '2019-10-23 22:55:43', '2019-10-23 22:55:43', NULL),
(36, '3411LIP20190123_131539.jpg', '20190123_131539.jpg', '3411LIP', '2019-10-23 22:55:43', '2019-10-23 22:55:43', NULL),
(37, '3411LIP20190123_131604.jpg', '20190123_131604.jpg', '3411LIP', '2019-10-23 22:55:43', '2019-10-23 22:55:43', NULL),
(38, '3411LIP20190123_131610.jpg', '20190123_131610.jpg', '3411LIP', '2019-10-23 22:55:43', '2019-10-23 22:55:43', NULL),
(39, '3411LIP20190123_131615.jpg', '20190123_131615.jpg', '3411LIP', '2019-10-23 22:55:44', '2019-10-23 22:55:44', NULL),
(40, '3411LIP20190123_131621.jpg', '20190123_131621.jpg', '3411LIP', '2019-10-23 22:55:44', '2019-10-23 22:55:44', NULL),
(41, '4139LPZ20190123_131604.jpg', '20190123_131604.jpg', '4139LPZ', '2019-10-23 22:59:55', '2019-10-23 22:59:55', NULL),
(42, '4139LPZ20190123_131610.jpg', '20190123_131610.jpg', '4139LPZ', '2019-10-23 22:59:55', '2019-10-23 22:59:55', NULL),
(43, '4139LPZ20190123_131615.jpg', '20190123_131615.jpg', '4139LPZ', '2019-10-23 22:59:55', '2019-10-23 22:59:55', NULL),
(44, '4139LPZ20190123_131638.jpg', '20190123_131638.jpg', '4139LPZ', '2019-10-23 22:59:55', '2019-10-23 22:59:55', NULL),
(45, '4139LPZ20190123_131651.jpg', '20190123_131651.jpg', '4139LPZ', '2019-10-23 22:59:55', '2019-10-23 22:59:55', NULL),
(46, '4139LPZ20190123_131657.jpg', '20190123_131657.jpg', '4139LPZ', '2019-10-23 22:59:55', '2019-10-23 22:59:55', NULL),
(47, '1231qwfnegroauto.jpg', 'negroauto.jpg', '1231qwf', '2019-10-25 04:39:05', '2019-10-25 04:39:05', NULL),
(48, '1231qwfotronegro.jpg', 'otronegro.jpg', '1231qwf', '2019-10-25 04:39:05', '2019-10-25 04:39:05', NULL),
(49, '1231qwfautonegro.jpg', 'autonegro.jpg', '1231qwf', '2019-10-25 04:39:06', '2019-10-25 04:39:06', NULL),
(50, '1231qwfmercedes_nero.jpg', 'mercedes_nero.jpg', '1231qwf', '2019-10-25 04:39:06', '2019-10-25 04:39:06', NULL),
(51, '1231qwfmercedes_negro.jpg', 'mercedes_negro.jpg', '1231qwf', '2019-10-25 04:39:06', '2019-10-25 04:39:06', NULL),
(52, '1231qwfNissan-Negro.jpg', 'Nissan-Negro.jpg', '1231qwf', '2019-10-25 04:39:06', '2019-10-25 04:39:06', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documentos_ronovable_vehiculos`
--

CREATE TABLE `documentos_ronovable_vehiculos` (
  `archivero_id` bigint(20) UNSIGNED NOT NULL,
  `gestion` int(11) NOT NULL,
  `fecha_fin_cobertura_soat` date NOT NULL,
  `bsisa` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  `inspeccion_vehicular` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  `placa_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `documentos_ronovable_vehiculos`
--

INSERT INTO `documentos_ronovable_vehiculos` (`archivero_id`, `gestion`, `fecha_fin_cobertura_soat`, `bsisa`, `inspeccion_vehicular`, `placa_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 2019, '2020-01-09', '1', '1', '2720RKF', '2019-10-23 22:32:48', '2019-10-23 22:32:48', NULL),
(2, 2019, '2020-01-28', '0', '0', '2911PHC', '2019-10-23 22:39:37', '2019-10-24 01:03:08', NULL),
(3, 2019, '2020-03-11', '0', '1', '1147DEK', '2019-10-23 22:45:10', '2019-10-23 22:45:10', NULL),
(4, 2019, '2020-01-22', '1', '1', '4040FER', '2019-10-23 22:52:17', '2019-10-23 22:52:17', NULL),
(5, 2019, '2020-03-11', '0', '0', '3411LIP', '2019-10-23 22:56:37', '2019-10-23 22:56:37', NULL),
(6, 2019, '2020-01-15', '1', '1', '4139LPZ', '2019-10-23 23:00:38', '2019-10-23 23:00:38', NULL),
(7, 2016, '2017-01-01', '1', '1', '2911PHC', '2019-10-24 01:39:05', '2019-10-24 01:39:05', NULL),
(8, 2017, '2018-01-17', '1', '1', '2911PHC', '2019-10-24 01:39:51', '2019-10-24 01:40:48', NULL),
(9, 2018, '2019-01-23', '1', '1', '2911PHC', '2019-10-24 01:43:48', '2019-10-24 01:43:48', NULL),
(11, 2017, '2018-01-10', '1', '0', '2720RKF', '2019-10-24 15:11:14', '2019-10-24 15:11:14', NULL),
(12, 2018, '2019-01-22', '1', '1', '2720RKF', '2019-10-24 15:11:49', '2019-10-24 15:11:49', NULL),
(13, 2016, '2017-01-30', '1', '1', '1147DEK', '2019-10-24 15:13:22', '2019-10-24 15:13:22', NULL),
(14, 2017, '2018-01-24', '1', '1', '1147DEK', '2019-10-24 15:13:36', '2019-10-24 15:13:36', NULL),
(15, 2018, '2019-01-18', '1', '1', '1147DEK', '2019-10-24 15:13:50', '2019-10-24 15:13:50', NULL),
(16, 2016, '2017-01-22', '1', '0', '3411LIP', '2019-10-24 15:14:57', '2019-10-24 15:14:57', NULL),
(17, 2017, '2018-01-31', '1', '1', '3411LIP', '2019-10-24 15:15:19', '2019-10-24 15:15:19', NULL),
(18, 2018, '2018-01-31', '0', '1', '3411LIP', '2019-10-24 15:15:36', '2019-10-24 15:15:36', NULL),
(19, 2016, '2017-01-17', '1', '1', '4040FER', '2019-10-24 15:16:52', '2019-10-24 15:16:52', NULL),
(20, 2017, '2018-01-24', '1', '1', '4040FER', '2019-10-24 15:17:04', '2019-10-24 15:17:04', NULL),
(21, 2018, '2019-01-28', '1', '1', '4040FER', '2019-10-24 15:17:16', '2019-10-24 15:17:16', NULL),
(22, 2016, '2017-01-17', '0', '1', '4139LPZ', '2019-10-24 15:18:22', '2019-10-24 15:18:22', NULL),
(23, 2017, '2018-01-14', '1', '1', '4139LPZ', '2019-10-24 15:18:41', '2019-10-24 15:18:41', NULL),
(24, 2018, '2019-01-19', '1', '1', '4139LPZ', '2019-10-24 15:19:06', '2019-10-24 15:19:06', NULL),
(25, 2016, '2017-01-25', '1', '1', '2720RKF', '2019-10-24 16:08:24', '2019-10-24 16:08:24', NULL),
(26, 2019, '2019-10-26', '1', '1', '1231qwf', '2019-10-25 04:39:32', '2019-10-25 04:39:32', NULL),
(27, 2019, '2019-10-31', '1', '1', 'asd', '2019-10-25 04:56:23', '2019-10-25 04:56:23', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_services`
--

CREATE TABLE `estado_services` (
  `est_id` bigint(20) UNSIGNED NOT NULL,
  `est_descripcion` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `estado_services`
--

INSERT INTO `estado_services` (`est_id`, `est_descripcion`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'EN SERVICIO', '2019-10-23 21:32:24', '2019-10-23 21:32:24', NULL),
(2, 'FUERA DE SERVICIO', '2019-10-23 21:32:41', '2019-10-23 21:32:41', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_servicio_vehiculos`
--

CREATE TABLE `estado_servicio_vehiculos` (
  `est_serv_vehiculo_id` bigint(20) UNSIGNED NOT NULL,
  `fecha_inicio` date NOT NULL,
  `motivo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `est_id` bigint(20) NOT NULL,
  `placa_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `estado_servicio_vehiculos`
--

INSERT INTO `estado_servicio_vehiculos` (`est_serv_vehiculo_id`, `fecha_inicio`, `motivo`, `est_id`, `placa_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '2016-02-02', 'Inicio de actividades', 1, '2720RKF', '2019-10-23 22:29:39', '2019-10-23 22:29:39', NULL),
(2, '2016-02-02', 'Inicio de actividades', 1, '2911PHC', '2019-10-23 22:37:58', '2019-10-23 22:37:58', NULL),
(3, '2016-03-08', 'Inicio de actividades', 1, '1147DEK', '2019-10-23 22:43:37', '2019-10-23 22:43:37', NULL),
(4, '2016-01-11', 'Inicio de actividades', 1, '4040FER', '2019-10-23 22:50:43', '2019-10-23 22:50:43', NULL),
(5, '2016-01-22', 'Inicio de actividades', 1, '3411LIP', '2019-10-23 22:55:02', '2019-10-23 22:55:02', NULL),
(6, '2016-02-18', 'Inicio de actividades', 1, '4139LPZ', '2019-10-23 22:59:13', '2019-10-23 22:59:13', NULL),
(7, '2017-08-16', 'Inicio de actividades', 1, '1231qwf', '2019-10-25 04:38:40', '2019-10-25 04:38:40', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes_perfil_vehiculos`
--

CREATE TABLE `imagenes_perfil_vehiculos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `archivo_subido` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre_imagen_perfil` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `placa_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `imagenes_perfil_vehiculos`
--

INSERT INTO `imagenes_perfil_vehiculos` (`id`, `archivo_subido`, `nombre_imagen_perfil`, `placa_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '2720RKFAZUL2.jpg', 'AZUL2.jpg', '2720RKF', '2019-10-23 22:31:45', '2019-10-23 22:31:45', NULL),
(2, '2720RKFAZUL3.jpg', 'AZUL3.jpg', '2720RKF', '2019-10-23 22:31:45', '2019-10-23 22:31:45', NULL),
(3, '2720RKFAZUL7 1200.jpg', 'AZUL7 1200.jpg', '2720RKF', '2019-10-23 22:31:45', '2019-10-23 22:31:45', NULL),
(4, '2720RKFBMW-blue-car_1920 x 1200.jpg', 'BMW-blue-car_1920 x 1200.jpg', '2720RKF', '2019-10-23 22:31:45', '2019-10-23 22:31:45', NULL),
(5, '2720RKFMercedes-Benz 1920x1080.jpg', 'Mercedes-Benz 1920x1080.jpg', '2720RKF', '2019-10-23 22:31:45', '2019-10-23 22:31:45', NULL),
(6, '2720RKFMercedes-Benz_1920x1080.jpg', 'Mercedes-Benz_1920x1080.jpg', '2720RKF', '2019-10-23 22:31:45', '2019-10-23 22:31:45', NULL),
(7, '2720RKFMercedes-Benz_2017_E_3001920x1080.jpg', 'Mercedes-Benz_2017_E_3001920x1080.jpg', '2720RKF', '2019-10-23 22:31:46', '2019-10-23 22:31:46', NULL),
(8, '2720RKFMercedes-Benz_C205 1920x1080.jpg', 'Mercedes-Benz_C205 1920x1080.jpg', '2720RKF', '2019-10-23 22:31:46', '2019-10-23 22:31:46', NULL),
(9, '2720RKFmercedes-mercedes-benz-s-class1920x1080.jpg', 'mercedes-mercedes-benz-s-class1920x1080.jpg', '2720RKF', '2019-10-23 22:31:46', '2019-10-23 22:31:46', NULL),
(10, '2720RKFtablero 8.jpg', 'tablero 8.jpg', '2720RKF', '2019-10-23 22:31:46', '2019-10-23 22:31:46', NULL),
(11, '2911PHCAmarrillo 1.jpg', 'Amarrillo 1.jpg', '2911PHC', '2019-10-23 22:39:16', '2019-10-23 22:39:16', NULL),
(12, '2911PHCAmarrillo 2.jpg', 'Amarrillo 2.jpg', '2911PHC', '2019-10-23 22:39:16', '2019-10-23 22:39:16', NULL),
(13, '2911PHCAmarrillo 3.jpg', 'Amarrillo 3.jpg', '2911PHC', '2019-10-23 22:39:16', '2019-10-23 22:39:16', NULL),
(14, '2911PHCAmarrillo 4.jpg', 'Amarrillo 4.jpg', '2911PHC', '2019-10-23 22:39:16', '2019-10-23 22:39:16', NULL),
(15, '2911PHCAmarrillo 5.jpg', 'Amarrillo 5.jpg', '2911PHC', '2019-10-23 22:39:16', '2019-10-23 22:39:16', NULL),
(16, '2911PHCAmarrillo 6.jpg', 'Amarrillo 6.jpg', '2911PHC', '2019-10-23 22:39:16', '2019-10-23 22:39:16', NULL),
(17, '2911PHCAmarrillo 7.jpg', 'Amarrillo 7.jpg', '2911PHC', '2019-10-23 22:39:17', '2019-10-23 22:39:17', NULL),
(18, '2911PHCAmarrillo 8.jpg', 'Amarrillo 8.jpg', '2911PHC', '2019-10-23 22:39:17', '2019-10-23 22:39:17', NULL),
(19, '2911PHCtablero 7.jpg', 'tablero 7.jpg', '2911PHC', '2019-10-23 22:39:17', '2019-10-23 22:39:17', NULL),
(20, '2911PHCAmarrillo 9.jpg', 'Amarrillo 9.jpg', '2911PHC', '2019-10-23 22:39:17', '2019-10-23 22:39:17', NULL),
(21, '1147DEKcafe 1.jpg', 'cafe 1.jpg', '1147DEK', '2019-10-23 22:44:49', '2019-10-23 22:44:49', NULL),
(22, '1147DEKcafe 2.jpg', 'cafe 2.jpg', '1147DEK', '2019-10-23 22:44:49', '2019-10-23 22:44:49', NULL),
(23, '1147DEKcafe 4.jpg', 'cafe 4.jpg', '1147DEK', '2019-10-23 22:44:49', '2019-10-23 22:44:49', NULL),
(24, '1147DEKcafe 3.jpg', 'cafe 3.jpg', '1147DEK', '2019-10-23 22:44:49', '2019-10-23 22:44:49', NULL),
(25, '1147DEKcafe 5.jpg', 'cafe 5.jpg', '1147DEK', '2019-10-23 22:44:50', '2019-10-23 22:44:50', NULL),
(26, '1147DEKcafe 6.jpg', 'cafe 6.jpg', '1147DEK', '2019-10-23 22:44:50', '2019-10-23 22:44:50', NULL),
(27, '1147DEKcafe 7.jpg', 'cafe 7.jpg', '1147DEK', '2019-10-23 22:44:50', '2019-10-23 22:44:50', NULL),
(28, '1147DEKcafe 8.jpg', 'cafe 8.jpg', '1147DEK', '2019-10-23 22:44:50', '2019-10-23 22:44:50', NULL),
(29, '1147DEKcafe 9.jpg', 'cafe 9.jpg', '1147DEK', '2019-10-23 22:44:50', '2019-10-23 22:44:50', NULL),
(30, '1147DEKtablero 4.jpg', 'tablero 4.jpg', '1147DEK', '2019-10-23 22:44:50', '2019-10-23 22:44:50', NULL),
(31, '4040FERnegro 1.jpg', 'negro 1.jpg', '4040FER', '2019-10-23 22:51:56', '2019-10-23 22:51:56', NULL),
(32, '4040FERnegro 2.png', 'negro 2.png', '4040FER', '2019-10-23 22:51:56', '2019-10-23 22:51:56', NULL),
(33, '4040FERnegro 4.jpg', 'negro 4.jpg', '4040FER', '2019-10-23 22:51:56', '2019-10-23 22:51:56', NULL),
(34, '4040FERnegro 3.jpg', 'negro 3.jpg', '4040FER', '2019-10-23 22:51:56', '2019-10-23 22:51:56', NULL),
(35, '4040FERnegro 5.jpg', 'negro 5.jpg', '4040FER', '2019-10-23 22:51:56', '2019-10-23 22:51:56', NULL),
(36, '4040FERnegro 6.jpg', 'negro 6.jpg', '4040FER', '2019-10-23 22:51:56', '2019-10-23 22:51:56', NULL),
(37, '4040FERnegro 7.jpg', 'negro 7.jpg', '4040FER', '2019-10-23 22:51:57', '2019-10-23 22:51:57', NULL),
(38, '4040FERnegro 8.jpg', 'negro 8.jpg', '4040FER', '2019-10-23 22:51:57', '2019-10-23 22:51:57', NULL),
(39, '4040FERtablero 6.jpg', 'tablero 6.jpg', '4040FER', '2019-10-23 22:51:57', '2019-10-23 22:51:57', NULL),
(40, '3411LIPCeleste 1.jpg', 'Celeste 1.jpg', '3411LIP', '2019-10-23 22:56:12', '2019-10-23 22:56:12', NULL),
(41, '3411LIPCeleste 2.jpg', 'Celeste 2.jpg', '3411LIP', '2019-10-23 22:56:12', '2019-10-23 22:56:12', NULL),
(42, '3411LIPCeleste 4.jpg', 'Celeste 4.jpg', '3411LIP', '2019-10-23 22:56:12', '2019-10-23 22:56:12', NULL),
(43, '3411LIPCeleste 3.jpg', 'Celeste 3.jpg', '3411LIP', '2019-10-23 22:56:12', '2019-10-23 22:56:12', NULL),
(44, '3411LIPCeleste 5.jpg', 'Celeste 5.jpg', '3411LIP', '2019-10-23 22:56:12', '2019-10-23 22:56:12', NULL),
(45, '3411LIPCeleste 6.jpg', 'Celeste 6.jpg', '3411LIP', '2019-10-23 22:56:12', '2019-10-23 22:56:12', NULL),
(46, '3411LIPCeleste 7.jpg', 'Celeste 7.jpg', '3411LIP', '2019-10-23 22:56:12', '2019-10-23 22:56:12', NULL),
(47, '3411LIPCeleste 8.jpg', 'Celeste 8.jpg', '3411LIP', '2019-10-23 22:56:12', '2019-10-23 22:56:12', NULL),
(48, '3411LIPCeleste 9.jpg', 'Celeste 9.jpg', '3411LIP', '2019-10-23 22:56:13', '2019-10-23 22:56:13', NULL),
(49, '3411LIPtablero 2.jpg', 'tablero 2.jpg', '3411LIP', '2019-10-23 22:56:13', '2019-10-23 22:56:13', NULL),
(50, '4139LPZrojo 1.jpg', 'rojo 1.jpg', '4139LPZ', '2019-10-23 23:00:15', '2019-10-23 23:00:15', NULL),
(51, '4139LPZrojo 2.jpg', 'rojo 2.jpg', '4139LPZ', '2019-10-23 23:00:15', '2019-10-23 23:00:15', NULL),
(52, '4139LPZrojo 3.jpg', 'rojo 3.jpg', '4139LPZ', '2019-10-23 23:00:15', '2019-10-23 23:00:15', NULL),
(53, '4139LPZrojo 4.jpg', 'rojo 4.jpg', '4139LPZ', '2019-10-23 23:00:15', '2019-10-23 23:00:15', NULL),
(54, '4139LPZrojo 5.jpg', 'rojo 5.jpg', '4139LPZ', '2019-10-23 23:00:16', '2019-10-23 23:00:16', NULL),
(55, '4139LPZrojo 6.jpg', 'rojo 6.jpg', '4139LPZ', '2019-10-23 23:00:16', '2019-10-23 23:00:16', NULL),
(56, '4139LPZrojo 7.jpg', 'rojo 7.jpg', '4139LPZ', '2019-10-23 23:00:16', '2019-10-23 23:00:16', NULL),
(57, '4139LPZrojo 8.jpg', 'rojo 8.jpg', '4139LPZ', '2019-10-23 23:00:16', '2019-10-23 23:00:16', NULL),
(58, '4139LPZrojo 9.jpg', 'rojo 9.jpg', '4139LPZ', '2019-10-23 23:00:16', '2019-10-23 23:00:16', NULL),
(59, '4139LPZtablero 5.jpg', 'tablero 5.jpg', '4139LPZ', '2019-10-23 23:00:16', '2019-10-23 23:00:16', NULL),
(60, '1231qwfrojo bonit.jpg', 'rojo bonit.jpg', '1231qwf', '2019-10-25 04:39:18', '2019-10-25 04:39:18', NULL),
(61, '1231qwfpeop rojo.jpg', 'peop rojo.jpg', '1231qwf', '2019-10-25 04:39:18', '2019-10-25 04:39:18', NULL),
(62, '1231qwfgaso rojo.jpg', 'gaso rojo.jpg', '1231qwf', '2019-10-25 04:39:19', '2019-10-25 04:39:19', NULL),
(63, '1231qwfderec rojo.jpg', 'derec rojo.jpg', '1231qwf', '2019-10-25 04:39:19', '2019-10-25 04:39:19', NULL),
(64, '1231qwfcorre rojo.jpg', 'corre rojo.jpg', '1231qwf', '2019-10-25 04:39:19', '2019-10-25 04:39:19', NULL),
(65, '1231qwfrojo colet.jpg', 'rojo colet.jpg', '1231qwf', '2019-10-25 04:39:19', '2019-10-25 04:39:19', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `image_uploads`
--

CREATE TABLE `image_uploads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `filename` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas`
--

CREATE TABLE `marcas` (
  `marca_id` bigint(20) UNSIGNED NOT NULL,
  `marca_descripcion` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `marcas`
--

INSERT INTO `marcas` (`marca_id`, `marca_descripcion`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'TOYOTA', '2019-10-23 21:18:05', '2019-10-23 21:18:05', NULL),
(2, 'NISSAN', '2019-10-23 21:18:14', '2019-10-23 21:18:14', NULL),
(3, 'FORD', '2019-10-23 21:18:20', '2019-10-23 21:18:20', NULL),
(4, 'VOLKSWAGEN', '2019-10-23 21:18:29', '2019-10-23 21:18:29', NULL),
(5, 'MAZDA', '2019-10-23 21:18:37', '2019-10-23 21:18:37', NULL),
(6, 'SUZUKI', '2019-10-23 21:18:43', '2019-10-23 21:18:43', NULL),
(7, 'VOLVO', '2019-10-23 21:18:50', '2019-10-23 21:18:50', NULL),
(8, 'TESLA', '2019-10-23 21:18:56', '2019-10-23 21:18:56', NULL),
(9, 'QUANTUM', '2019-10-23 21:19:01', '2019-10-23 21:19:01', NULL),
(10, 'HONDA', '2019-10-23 21:19:07', '2019-10-23 21:19:07', NULL),
(11, 'HYUDAI', '2019-10-23 21:19:13', '2019-10-23 21:19:13', NULL),
(12, 'CHEVROLET', '2019-10-23 21:19:18', '2019-10-23 21:19:18', NULL),
(13, 'ISUZU', '2019-10-23 21:19:24', '2019-10-23 21:19:24', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_10_04_145818_create_clases_table', 1),
(5, '2019_10_04_150051_create_marcas_table', 1),
(6, '2019_10_04_150105_create_tipos_table', 1),
(7, '2019_10_04_150148_create_tipo_combustibles_table', 1),
(8, '2019_10_04_150213_create_tipo_usos_table', 1),
(9, '2019_10_04_150215_create_estado_services_table', 1),
(10, '2019_10_04_150336_create_vehiculos_table', 1),
(11, '2019_10_04_150411_create_documentos_propiedad_vehiculos_table', 1),
(12, '2019_10_04_150433_create_documentos_ronovable_vehiculos_table', 1),
(13, '2019_10_04_150556_create_seguros_table', 1),
(14, '2019_10_09_223649_create_image_uploads_table', 1),
(15, '2019_10_10_111614_create_imagenes_perfil_vehiculos_table', 1),
(16, '2019_10_14_175050_create_estado_servicio_vehiculos_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seguros`
--

CREATE TABLE `seguros` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gestion` int(11) NOT NULL,
  `texto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `empresa_aseguradora` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_vigencia` date NOT NULL,
  `archivo_subido` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `placa_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `seguros`
--

INSERT INTO `seguros` (`id`, `gestion`, `texto`, `empresa_aseguradora`, `fecha_vigencia`, `archivo_subido`, `placa_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 2019, 'SEGURO DE TRANSITO', 'LBSS', '2020-02-11', 'Señor Tijeras.jpg', '2720RKF', '2019-10-23 22:35:32', '2019-10-23 22:35:32', NULL),
(2, 2019, 'SEGURO DE VIDA', 'SECURE', '2020-01-22', 'netflix.jpg', '2720RKF', '2019-10-23 22:35:32', '2019-10-23 22:35:32', NULL),
(3, 2019, 'SEGURO CONTRA ACCIDENTES', 'ACCISEG', '2020-01-05', 'candy cruch.jpg', '2720RKF', '2019-10-23 22:35:32', '2019-10-23 22:35:32', NULL),
(4, 2019, 'SEGURO DE VIDA', 'RESOURCE', '2020-02-11', 'hackin.v.jpg', '2911PHC', '2019-10-23 22:40:58', '2019-10-23 22:40:58', NULL),
(5, 2019, 'SEGURO CONTRA ACCIDENTES', 'SECBOL', '2020-02-07', 'logo.png', '2911PHC', '2019-10-23 22:40:58', '2019-10-23 22:40:58', NULL),
(6, 2019, 'SEGURO DE TRANSITO', 'GRADii', '2020-02-02', 'logo.png', '1147DEK', '2019-10-23 22:47:31', '2019-10-25 04:01:49', NULL),
(7, 2019, 'SEGURO VITALICIO', 'LPSEC', '2020-02-03', 'hackin.v.jpg', '1147DEK', '2019-10-23 22:47:31', '2019-10-23 22:47:31', NULL),
(8, 2019, 'SEGURIDAD NACIONAL', 'SN', '2020-01-24', 'image.png', '1147DEK', '2019-10-23 22:47:31', '2019-10-23 22:47:31', NULL),
(9, 2019, 'SEGURO GENERAL', 'LBC', '2020-02-19', 'BD - copia.png', '4040FER', '2019-10-23 22:52:56', '2019-10-23 22:52:56', NULL),
(10, 2019, 'SEGURO GENERAL', 'UNISE', '2020-01-17', 'logo.png', '3411LIP', '2019-10-23 22:57:08', '2019-10-23 22:57:08', NULL),
(11, 2019, 'SEGURIDAD NACIONAL', 'SNEE', '2020-01-27', 'hackin.v.jpg', '4139LPZ', '2019-10-23 23:01:03', '2019-10-23 23:01:03', NULL),
(12, 2016, 'a', 'a', '2019-10-01', 'hackin.v.jpg', '2720RKF', '2019-10-24 22:58:53', '2019-10-24 22:58:53', NULL),
(13, 2019, 'a', 'a', '2019-10-01', 'logo.png', '2911PHC', '2019-10-24 23:13:15', '2019-10-24 23:13:15', NULL),
(14, 2019, 'SEGURO DE TRANSITO', 'EMPRESA ASEGURADORA', '2019-10-31', 'tablero negro.jpg', '1', '2019-10-25 04:44:45', '2019-10-25 04:44:45', NULL),
(15, 2019, 'QWEQ', 'SAD1W', '2019-11-01', 'rojo colet.jpg', '2', '2019-10-25 04:44:45', '2019-10-25 04:44:45', NULL),
(16, 2019, 'SEGURO DE TRANSITO', 'SAD1W', '2019-10-25', 'lambo negro.jpg', '1231qwf', '2019-10-25 04:53:44', '2019-10-25 04:53:44', NULL),
(17, 2019, 'QWEQ', 'SAD1W', '2019-10-25', 'lambo negro.jpg', '1231qwf', '2019-10-25 04:55:05', '2019-10-25 04:55:05', NULL),
(18, 2019, 'descri', 'empr seg', '2019-10-31', 'rojo lamb.jpg', 'asd', '2019-10-25 04:59:12', '2019-10-25 04:59:12', NULL),
(19, 2019, 'SEGURO DE TRANSITO 1', 'empr seg 1', '2019-10-25', 'peop rojo.jpg', 'asd', '2019-10-25 05:01:56', '2019-10-25 05:01:56', NULL),
(20, 2019, 'SEGURO DE TRANSITO 2', 'empr seg 2', '2019-10-25', 'peop rojo.jpg', 'asd', '2019-10-25 05:01:56', '2019-10-25 05:01:56', NULL),
(21, 2019, 'SEGURO DE TRANSITO 3', 'empr seg 3', '2019-10-25', 'tablero negro.jpg', 'asd', '2019-10-25 05:01:56', '2019-10-25 05:01:56', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos`
--

CREATE TABLE `tipos` (
  `tipo_id` bigint(20) UNSIGNED NOT NULL,
  `tipo_descripcion` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tipos`
--

INSERT INTO `tipos` (`tipo_id`, `tipo_descripcion`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'LAND CRUISER', '2019-10-23 21:24:22', '2019-10-23 21:24:22', NULL),
(2, 'TIPO 1', '2019-10-23 21:24:29', '2019-10-23 21:24:29', NULL),
(3, 'TIPO 2', '2019-10-23 21:24:34', '2019-10-23 21:24:34', NULL),
(4, 'TIPO 4', '2019-10-23 21:24:41', '2019-10-23 21:24:41', NULL),
(5, 'TIPO 5', '2019-10-23 21:24:46', '2019-10-23 21:24:46', NULL),
(6, 'TIPO 6', '2019-10-23 21:24:52', '2019-10-23 21:24:52', NULL),
(7, 'TIPO 7', '2019-10-23 21:24:56', '2019-10-23 21:24:56', NULL),
(8, 'TIPO 8', '2019-10-23 21:25:01', '2019-10-23 21:25:01', NULL),
(9, 'TIPO 9', '2019-10-23 21:25:06', '2019-10-23 21:25:06', NULL),
(10, 'TIPO 10', '2019-10-23 21:25:19', '2019-10-23 21:25:19', NULL),
(11, 'TIPO 11', '2019-10-23 21:25:28', '2019-10-23 21:25:28', NULL),
(12, 'TIPO 12', '2019-10-23 21:25:36', '2019-10-23 21:25:36', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_combustibles`
--

CREATE TABLE `tipo_combustibles` (
  `tipo_combustible_id` bigint(20) UNSIGNED NOT NULL,
  `tipo_combustible_descripcion` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tipo_combustibles`
--

INSERT INTO `tipo_combustibles` (`tipo_combustible_id`, `tipo_combustible_descripcion`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'GASOLINA', '2019-10-23 21:29:28', '2019-10-23 21:29:28', NULL),
(2, 'DIESEL', '2019-10-23 21:29:33', '2019-10-23 21:29:33', NULL),
(3, 'ENERGIA ELECTRICA', '2019-10-23 21:29:38', '2019-10-23 21:29:38', NULL),
(4, 'ETANOL', '2019-10-23 21:29:47', '2019-10-23 21:29:47', NULL),
(5, 'GAS NATURAL VEHICULAR (GNV)', '2019-10-23 21:29:50', '2019-10-23 21:29:50', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usos`
--

CREATE TABLE `tipo_usos` (
  `tipo_uso_id` bigint(20) UNSIGNED NOT NULL,
  `tipo_uso_descripcion` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tipo_usos`
--

INSERT INTO `tipo_usos` (`tipo_uso_id`, `tipo_uso_descripcion`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'OFICIAL', '2019-10-23 21:26:41', '2019-10-23 21:26:41', NULL),
(2, 'OPERATIVO - ADMINISTRATIVO', '2019-10-23 21:27:02', '2019-10-23 21:27:02', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculos`
--

CREATE TABLE `vehiculos` (
  `placa_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numero_crpva` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numero_chasis` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numero_motor` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `documento_importacion` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numero_documento_importacion` bigint(20) NOT NULL,
  `plazas` int(11) NOT NULL,
  `ruedas` int(11) NOT NULL,
  `traccion` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `clase_id` bigint(20) NOT NULL,
  `marca_id` bigint(20) NOT NULL,
  `tipo_id` bigint(20) NOT NULL,
  `tipo_combustible_id` bigint(20) NOT NULL,
  `tipo_uso_id` bigint(20) NOT NULL,
  `fecha_incorporacion_institucion` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `vehiculos`
--

INSERT INTO `vehiculos` (`placa_id`, `numero_crpva`, `numero_chasis`, `numero_motor`, `documento_importacion`, `numero_documento_importacion`, `plazas`, `ruedas`, `traccion`, `color`, `clase_id`, `marca_id`, `tipo_id`, `tipo_combustible_id`, `tipo_uso_id`, `fecha_incorporacion_institucion`, `created_at`, `updated_at`, `deleted_at`) VALUES
('1147DEK', 'CRPVA1147DEK', 'CHASIS1147DEK', 'MOTOR1147DEK', 'POLIZA DE IMPORTACION', 8978941325, 6, 4, 'QUINTUPLE', 'CAFE', 6, 4, 4, 5, 1, '2016-01-21', '2019-10-23 22:42:59', '2019-10-23 22:42:59', NULL),
('1231qwf', 'asdqweqw', 'fiqwejhknkn', '123jhk123', 'adasdas', 123213, 3, 3, 'asdas', 'r', 1, 1, 1, 1, 2, '2016-07-05', '2019-10-25 04:38:21', '2019-10-25 04:38:21', NULL),
('2720RKF', 'CRPVA2720RKF', 'CHASIS2720RKF', 'MOTOR2720RKF', 'POLIZA DE IMPORTACION', 8978941321, 4, 4, 'DOBLE', 'AZUL', 2, 1, 1, 1, 1, '2016-01-01', '2019-10-23 21:36:58', '2019-10-23 21:36:58', NULL),
('2911PHC', 'CRPVA2911PHC', 'CHASIS2911PHC', 'MOTOR2911PHC', 'POLIZA DE IMPORTACION', 8978941323, 5, 4, 'TRIPLE', 'AMARILLO', 3, 6, 4, 4, 2, '2016-01-02', '2019-10-23 22:37:41', '2019-10-23 22:37:41', NULL),
('3411LIP', 'CRPVA3411LIP', 'CHASIS3411LIP', 'MOTOR3411LIP', 'POLIZA DE IMPORTACION', 8978941329, 9, 4, 'TRACCION UNO', 'CELESTE', 7, 9, 3, 2, 2, '2016-01-14', '2019-10-23 22:54:39', '2019-10-23 22:54:39', NULL),
('4040FER', 'CRPVA4040FER', 'CHASIS4040FER', 'MOTOR4040FER', 'POLIZA DE IMPORTACION', 8978941327, 7, 4, 'CUATRUPLE', 'NEGRO', 2, 3, 6, 3, 1, '2016-01-07', '2019-10-23 22:50:28', '2019-10-23 22:50:28', NULL),
('4139LPZ', 'CRPVA4139LPZ', 'CHASIS4139LPZ', 'MOTOR4139LPZ', 'POLIZA DE IMPORTACION', 8978941331, 11, 4, 'DOBLE', 'ROJO', 8, 11, 9, 1, 1, '2016-02-16', '2019-10-23 22:58:45', '2019-10-23 22:58:45', NULL),
('asd', 'asd', 'asdasd', 'dsadas', 'sdadssa', 123123, 5, 32, 'eaas', 'roh', 6, 5, 7, 3, 2, '2019-10-25', '2019-10-25 04:56:11', '2019-10-25 04:56:11', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clases`
--
ALTER TABLE `clases`
  ADD PRIMARY KEY (`clase_id`);

--
-- Indices de la tabla `documentos_propiedad_vehiculos`
--
ALTER TABLE `documentos_propiedad_vehiculos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `documentos_ronovable_vehiculos`
--
ALTER TABLE `documentos_ronovable_vehiculos`
  ADD PRIMARY KEY (`archivero_id`);

--
-- Indices de la tabla `estado_services`
--
ALTER TABLE `estado_services`
  ADD PRIMARY KEY (`est_id`);

--
-- Indices de la tabla `estado_servicio_vehiculos`
--
ALTER TABLE `estado_servicio_vehiculos`
  ADD PRIMARY KEY (`est_serv_vehiculo_id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `imagenes_perfil_vehiculos`
--
ALTER TABLE `imagenes_perfil_vehiculos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `image_uploads`
--
ALTER TABLE `image_uploads`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`marca_id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `seguros`
--
ALTER TABLE `seguros`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipos`
--
ALTER TABLE `tipos`
  ADD PRIMARY KEY (`tipo_id`);

--
-- Indices de la tabla `tipo_combustibles`
--
ALTER TABLE `tipo_combustibles`
  ADD PRIMARY KEY (`tipo_combustible_id`);

--
-- Indices de la tabla `tipo_usos`
--
ALTER TABLE `tipo_usos`
  ADD PRIMARY KEY (`tipo_uso_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indices de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  ADD PRIMARY KEY (`placa_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clases`
--
ALTER TABLE `clases`
  MODIFY `clase_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `documentos_propiedad_vehiculos`
--
ALTER TABLE `documentos_propiedad_vehiculos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT de la tabla `documentos_ronovable_vehiculos`
--
ALTER TABLE `documentos_ronovable_vehiculos`
  MODIFY `archivero_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `estado_services`
--
ALTER TABLE `estado_services`
  MODIFY `est_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `estado_servicio_vehiculos`
--
ALTER TABLE `estado_servicio_vehiculos`
  MODIFY `est_serv_vehiculo_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `imagenes_perfil_vehiculos`
--
ALTER TABLE `imagenes_perfil_vehiculos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT de la tabla `image_uploads`
--
ALTER TABLE `image_uploads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `marcas`
--
ALTER TABLE `marcas`
  MODIFY `marca_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `seguros`
--
ALTER TABLE `seguros`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `tipos`
--
ALTER TABLE `tipos`
  MODIFY `tipo_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `tipo_combustibles`
--
ALTER TABLE `tipo_combustibles`
  MODIFY `tipo_combustible_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tipo_usos`
--
ALTER TABLE `tipo_usos`
  MODIFY `tipo_uso_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
