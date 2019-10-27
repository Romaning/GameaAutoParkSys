-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-10-2019 a las 15:53:33
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
(1, 'AUTOMOVIL', '2019-10-24 01:12:53', '2019-10-24 01:12:53', NULL),
(2, 'CAMIONETA', '2019-10-24 01:13:06', '2019-10-24 01:13:06', NULL),
(3, 'VAGONETA', '2019-10-24 01:13:14', '2019-10-24 01:13:14', NULL),
(4, 'JEEP', '2019-10-24 01:13:21', '2019-10-24 01:13:21', NULL),
(5, 'CAMION', '2019-10-24 01:13:30', '2019-10-24 01:13:30', NULL),
(6, 'BUS', '2019-10-24 01:13:42', '2019-10-24 01:13:42', NULL),
(7, 'CUADRATRACK', '2019-10-24 01:13:49', '2019-10-24 01:13:49', NULL),
(8, 'TRIMOVIL', '2019-10-24 01:13:56', '2019-10-24 01:13:56', NULL),
(10, 'MOTOCICLETA', '2019-10-24 01:14:04', '2019-10-24 01:14:04', NULL);

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
(29, '1147DEK20190121_130004.jpg', '20190121_130004.jpg', '1147DEK', '2019-10-26 06:20:20', '2019-10-26 06:20:20', NULL),
(30, '1147DEK20190121_130016.jpg', '20190121_130016.jpg', '1147DEK', '2019-10-26 06:20:20', '2019-10-26 06:20:20', NULL),
(31, '1147DEK20190121_130026.jpg', '20190121_130026.jpg', '1147DEK', '2019-10-26 06:20:20', '2019-10-26 06:20:20', NULL),
(32, '1147DEK20190121_130107.jpg', '20190121_130107.jpg', '1147DEK', '2019-10-26 06:20:20', '2019-10-26 06:20:20', NULL),
(33, '1147DEK20190121_130113.jpg', '20190121_130113.jpg', '1147DEK', '2019-10-26 06:20:20', '2019-10-26 06:20:20', NULL),
(34, '1147DEKSin_título.png', 'Sin_título.png', '1147DEK', '2019-10-26 06:24:36', '2019-10-26 06:24:36', NULL),
(35, '2720RKF20190123_131925.jpg', '20190123_131925.jpg', '2720RKF', '2019-10-26 06:34:58', '2019-10-26 06:34:58', NULL),
(36, '2720RKF20190123_131931.jpg', '20190123_131931.jpg', '2720RKF', '2019-10-26 06:34:58', '2019-10-26 06:34:58', NULL),
(37, '2720RKF20190123_131937.jpg', '20190123_131937.jpg', '2720RKF', '2019-10-26 06:34:58', '2019-10-26 06:34:58', NULL),
(38, '2720RKF20190123_131941.jpg', '20190123_131941.jpg', '2720RKF', '2019-10-26 06:34:58', '2019-10-26 06:34:58', NULL),
(39, '2720RKF20190123_131950.jpg', '20190123_131950.jpg', '2720RKF', '2019-10-26 06:34:58', '2019-10-26 06:34:58', NULL),
(40, '2720RKF20190123_131955.jpg', '20190123_131955.jpg', '2720RKF', '2019-10-26 06:34:58', '2019-10-26 06:34:58', NULL),
(41, '2911PHC20190123_132000.jpg', '20190123_132000.jpg', '2911PHC', '2019-10-26 06:42:39', '2019-10-26 06:42:39', NULL),
(42, '2911PHC20190123_132004.jpg', '20190123_132004.jpg', '2911PHC', '2019-10-26 06:42:40', '2019-10-26 06:42:40', NULL),
(43, '2911PHC20190123_132010.jpg', '20190123_132010.jpg', '2911PHC', '2019-10-26 06:42:40', '2019-10-26 06:42:40', NULL),
(44, '2911PHC20190123_132017.jpg', '20190123_132017.jpg', '2911PHC', '2019-10-26 06:42:40', '2019-10-26 06:42:40', NULL),
(45, '3411LIP20190123_131848.jpg', '20190123_131848.jpg', '3411LIP', '2019-10-26 06:46:49', '2019-10-26 06:46:49', NULL),
(46, '3411LIP20190123_131854.jpg', '20190123_131854.jpg', '3411LIP', '2019-10-26 06:46:50', '2019-10-26 06:46:50', NULL),
(47, '3411LIP20190123_131900.jpg', '20190123_131900.jpg', '3411LIP', '2019-10-26 06:46:50', '2019-10-26 06:46:50', NULL),
(48, '3411LIP20190123_131908.jpg', '20190123_131908.jpg', '3411LIP', '2019-10-26 06:46:50', '2019-10-26 06:46:50', NULL),
(49, '3411LIP20190123_131914.jpg', '20190123_131914.jpg', '3411LIP', '2019-10-26 06:46:50', '2019-10-26 06:46:50', NULL),
(50, '3411LIP20190123_131920.jpg', '20190123_131920.jpg', '3411LIP', '2019-10-26 06:46:51', '2019-10-26 06:46:51', NULL);

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
(7, 2019, '2020-02-05', '1', '1', '1147DEK', '2019-10-26 06:20:59', '2019-10-26 06:20:59', NULL),
(8, 2019, '2020-02-04', '1', '1', '2720RKF', '2019-10-26 06:35:43', '2019-10-26 06:35:43', NULL),
(9, 2019, '2020-02-27', '1', '0', '2911PHC', '2019-10-26 06:43:31', '2019-10-26 06:43:31', NULL),
(10, 2019, '2020-03-11', '0', '1', '3411LIP', '2019-10-26 06:47:26', '2019-10-26 06:47:26', NULL),
(11, 2016, '2017-02-01', '1', '0', '1147DEK', '2019-10-26 07:01:54', '2019-10-26 07:01:54', NULL),
(12, 2017, '2018-02-06', '1', '1', '1147DEK', '2019-10-26 07:04:42', '2019-10-26 07:05:33', NULL),
(13, 2018, '2019-01-22', '1', '1', '1147DEK', '2019-10-27 01:23:43', '2019-10-27 01:23:43', NULL);

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
(1, 'EN SERVICIO', '2019-10-24 01:32:24', '2019-10-24 01:32:24', NULL),
(2, 'FUERA DE SERVICIO', '2019-10-24 01:32:41', '2019-10-24 01:32:41', NULL);

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
(5, '2016-02-10', 'Inicio de actividades', 1, '1147DEK', '2019-10-26 06:19:46', '2019-10-26 06:19:46', NULL),
(6, '2016-04-12', 'Inicio de actividades', 1, '2720RKF', '2019-10-26 06:34:22', '2019-10-26 06:34:22', NULL),
(7, '2017-01-25', 'Inicio de actividades', 1, '2911PHC', '2019-10-26 06:41:58', '2019-10-26 06:41:58', NULL),
(8, '2016-03-16', 'Inicio de actividades', 1, '3411LIP', '2019-10-26 06:46:19', '2019-10-26 06:46:19', NULL),
(9, '2016-05-10', 'CAMBIO DE ESTADO', 2, '1147DEK', '2019-10-26 06:55:39', '2019-10-26 06:55:39', NULL),
(10, '2016-09-21', 'CAMBIO DE ESTADO', 2, '1147DEK', '2019-10-26 06:58:15', '2019-10-26 15:45:08', NULL),
(11, '2016-10-04', 'CAMBIO DEL 9 AL 10 MES 1147DEK', 1, '1147DEK', '2019-10-26 15:56:10', '2019-10-26 15:56:10', NULL),
(12, '2016-11-23', 'CAMBIO DE ESTADO', 2, '1147DEK', '2019-10-26 16:01:48', '2019-10-26 16:01:48', NULL),
(13, '2016-12-21', 'CAMBIO ACTIVO', 1, '1147DEK', '2019-10-26 16:03:39', '2019-10-26 16:03:39', NULL),
(14, '2016-12-31', 'FIESTA DE AÑO NUEVO', 2, '1147DEK', '2019-10-26 16:07:12', '2019-10-26 16:07:12', NULL),
(15, '2017-02-15', 'ENCENDIDO 2017 FEBRERO', 1, '1147DEK', '2019-10-26 16:53:35', '2019-10-26 16:53:35', NULL),
(16, '2017-04-27', 'APAGADO 2017 ABRIL', 2, '1147DEK', '2019-10-26 16:54:14', '2019-10-26 16:54:14', NULL),
(17, '2017-09-28', 'ENCENDIDO 2017 SEPTIEMBRE', 1, '1147DEK', '2019-10-26 16:54:48', '2019-10-26 16:54:48', NULL),
(18, '2017-12-25', 'APAGADO 2017 DICIEMBRE NAVIDAD', 2, '1147DEK', '2019-10-26 16:55:38', '2019-10-26 16:55:38', NULL),
(19, '2018-07-16', 'ENCENDIDO 2018 JULIO FIESTA', 1, '1147DEK', '2019-10-26 16:56:31', '2019-10-26 16:56:31', NULL),
(20, '2018-12-31', 'APAGADO 2018 FIN DE AÑO', 2, '1147DEK', '2019-10-26 16:57:16', '2019-10-26 16:57:16', NULL),
(21, '2019-01-23', 'ENCENDIDO 2019 INICIO DE AÑO', 1, '1147DEK', '2019-10-26 16:58:01', '2019-10-26 16:58:01', NULL),
(22, '2019-05-27', 'APAGADO 2019 MAYO', 2, '1147DEK', '2019-10-26 16:59:04', '2019-10-26 16:59:04', NULL),
(23, '2019-09-21', 'ENCENDIDO  2019 21 SEPTIEMBRE', 1, '1147DEK', '2019-10-26 16:59:51', '2019-10-26 16:59:51', NULL),
(24, '2019-09-21', 'APAGADO PARA EL MISMO DIA', 1, '1147DEK', '2019-10-27 04:51:11', '2019-10-27 04:51:11', NULL),
(25, '2019-09-21', 'APAGADO PARA EL MISMO DIA', 2, '1147DEK', '2019-10-27 04:52:23', '2019-10-27 04:52:23', NULL),
(26, '2019-09-22', 'ENCENDIDO', 1, '1147DEK', '2019-10-27 05:43:30', '2019-10-27 05:43:30', NULL),
(27, '2016-06-15', 'APAGADO', 2, '2720RKF', '2019-10-27 05:45:43', '2019-10-27 05:45:43', NULL),
(28, '2016-04-12', 'APAGADO', 2, '3411LIP', '2019-10-27 06:57:34', '2019-10-27 06:57:34', NULL),
(29, '2016-04-12', 'ENCENDIDO', 1, '3411LIP', '2019-10-27 06:58:23', '2019-10-27 06:58:23', NULL),
(30, '2016-04-12', 'APAGADO', 1, '3411LIP', '2019-10-27 06:58:47', '2019-10-27 06:58:47', NULL),
(31, '2016-04-12', 'APAGADO', 2, '3411LIP', '2019-10-27 06:58:59', '2019-10-27 06:58:59', NULL),
(33, '2016-02-10', 'ENCENDIDO', 1, '3411LIP', '2019-10-27 07:32:39', '2019-10-27 07:32:39', NULL),
(34, '2019-10-27', 'APAGADO', 2, '1147DEK', '2019-10-27 08:46:10', '2019-10-27 14:38:32', '2019-10-27 14:38:32'),
(35, '2016-08-24', 'ENCENDIDO', 1, '2720RKF', '2019-10-27 14:27:51', '2019-10-27 14:27:51', NULL),
(36, '2016-10-19', 'APAGADO', 1, '2720RKF', '2019-10-27 14:28:10', '2019-10-27 14:28:10', NULL),
(37, '2016-12-28', 'APAGADO', 2, '2720RKF', '2019-10-27 14:28:37', '2019-10-27 14:28:37', NULL),
(38, '2017-06-21', 'ENCENDIDO', 1, '2720RKF', '2019-10-27 14:29:02', '2019-10-27 14:29:02', NULL),
(39, '2018-06-14', 'APAGADO', 2, '2720RKF', '2019-10-27 14:29:23', '2019-10-27 14:29:23', NULL),
(40, '2018-08-23', 'ENCENDIDO', 1, '2720RKF', '2019-10-27 14:29:42', '2019-10-27 14:29:42', NULL),
(41, '2019-08-23', 'APAGADO', 2, '2720RKF', '2019-10-27 14:30:01', '2019-10-27 14:30:01', NULL),
(42, '2019-10-27', 'ENCENDIDO', 1, '2720RKF', '2019-10-27 14:30:21', '2019-10-27 14:30:21', NULL),
(43, '2017-06-14', 'APAGADO', 2, '2911PHC', '2019-10-27 14:30:56', '2019-10-27 14:30:56', NULL),
(44, '2018-06-06', 'ENCENDIDO', 1, '2911PHC', '2019-10-27 14:31:11', '2019-10-27 14:31:11', NULL),
(45, '2018-12-13', 'APAGADO', 2, '2911PHC', '2019-10-27 14:31:26', '2019-10-27 14:31:26', NULL),
(46, '2019-06-11', 'ENCENDIDO', 1, '2911PHC', '2019-10-27 14:31:45', '2019-10-27 14:31:45', NULL),
(47, '2017-05-17', 'ENCENDIDO', 1, '3411LIP', '2019-10-27 14:32:21', '2019-10-27 14:32:21', NULL),
(48, '2018-05-15', 'APAGADO', 2, '3411LIP', '2019-10-27 14:32:39', '2019-10-27 14:32:39', NULL),
(49, '2019-05-07', 'ENCENDIDO', 1, '3411LIP', '2019-10-27 14:32:56', '2019-10-27 14:32:56', NULL);

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
(39, '1147DEKrojo_1.jpg', 'rojo_1.jpg', '1147DEK', '2019-10-26 06:20:44', '2019-10-26 06:20:44', NULL),
(40, '1147DEKrojo_2.jpg', 'rojo_2.jpg', '1147DEK', '2019-10-26 06:20:44', '2019-10-26 06:20:44', NULL),
(41, '1147DEKrojo_4.jpg', 'rojo_4.jpg', '1147DEK', '2019-10-26 06:20:44', '2019-10-26 06:20:44', NULL),
(42, '1147DEKrojo_3.jpg', 'rojo_3.jpg', '1147DEK', '2019-10-26 06:20:44', '2019-10-26 06:20:44', NULL),
(43, '1147DEKrojo_5.jpg', 'rojo_5.jpg', '1147DEK', '2019-10-26 06:20:44', '2019-10-26 06:20:44', NULL),
(44, '1147DEKrojo_6.jpg', 'rojo_6.jpg', '1147DEK', '2019-10-26 06:20:44', '2019-10-26 06:20:44', NULL),
(45, '1147DEKrojo_7.jpg', 'rojo_7.jpg', '1147DEK', '2019-10-26 06:20:45', '2019-10-26 06:20:45', NULL),
(46, '1147DEKrojo_8.jpg', 'rojo_8.jpg', '1147DEK', '2019-10-26 06:20:45', '2019-10-26 06:20:45', NULL),
(47, '1147DEKrojo_9.jpg', 'rojo_9.jpg', '1147DEK', '2019-10-26 06:20:45', '2019-10-26 06:20:45', NULL),
(48, '1147DEKtablero_5.jpg', 'tablero_5.jpg', '1147DEK', '2019-10-26 06:20:45', '2019-10-26 06:20:45', NULL),
(49, '1147DEKcorre_rojo.jpg', 'corre_rojo.jpg', '1147DEK', '2019-10-26 06:25:19', '2019-10-26 06:25:19', NULL),
(50, '2720RKFnegro_1.jpg', 'negro_1.jpg', '2720RKF', '2019-10-26 06:35:23', '2019-10-26 06:35:23', NULL),
(51, '2720RKFnegro_2.png', 'negro_2.png', '2720RKF', '2019-10-26 06:35:23', '2019-10-26 06:35:23', NULL),
(52, '2720RKFnegro_3.jpg', 'negro_3.jpg', '2720RKF', '2019-10-26 06:35:23', '2019-10-26 06:35:23', NULL),
(53, '2720RKFnegro_4.jpg', 'negro_4.jpg', '2720RKF', '2019-10-26 06:35:23', '2019-10-26 06:35:23', NULL),
(54, '2720RKFnegro_5.jpg', 'negro_5.jpg', '2720RKF', '2019-10-26 06:35:24', '2019-10-26 06:35:24', NULL),
(55, '2720RKFnegro_6.jpg', 'negro_6.jpg', '2720RKF', '2019-10-26 06:35:24', '2019-10-26 06:35:24', NULL),
(56, '2720RKFnegro_7.jpg', 'negro_7.jpg', '2720RKF', '2019-10-26 06:35:24', '2019-10-26 06:35:24', NULL),
(57, '2720RKFnegro_8.jpg', 'negro_8.jpg', '2720RKF', '2019-10-26 06:35:24', '2019-10-26 06:35:24', NULL),
(58, '2720RKFtablero_6.jpg', 'tablero_6.jpg', '2720RKF', '2019-10-26 06:35:24', '2019-10-26 06:35:24', NULL),
(59, '2911PHC1024_684.jpg', '1024_684.jpg', '2911PHC', '2019-10-26 06:43:04', '2019-10-26 06:43:04', NULL),
(60, '2911PHC2880_1800.jpg', '2880_1800.jpg', '2911PHC', '2019-10-26 06:43:04', '2019-10-26 06:43:04', NULL),
(61, '2911PHCAZUL1.jpg', 'AZUL1.jpg', '2911PHC', '2019-10-26 06:43:05', '2019-10-26 06:43:05', NULL),
(62, '2911PHCAZUL2.jpg', 'AZUL2.jpg', '2911PHC', '2019-10-26 06:43:05', '2019-10-26 06:43:05', NULL),
(63, '2911PHCAZUL3.jpg', 'AZUL3.jpg', '2911PHC', '2019-10-26 06:43:05', '2019-10-26 06:43:05', NULL),
(64, '2911PHCAZUL4.jpg', 'AZUL4.jpg', '2911PHC', '2019-10-26 06:43:05', '2019-10-26 06:43:05', NULL),
(65, '2911PHCAZUL5.jpg', 'AZUL5.jpg', '2911PHC', '2019-10-26 06:43:05', '2019-10-26 06:43:05', NULL),
(66, '2911PHCAZUL6.jpg', 'AZUL6.jpg', '2911PHC', '2019-10-26 06:43:05', '2019-10-26 06:43:05', NULL),
(67, '2911PHCAZUL7_1200.jpg', 'AZUL7_1200.jpg', '2911PHC', '2019-10-26 06:43:05', '2019-10-26 06:43:05', NULL),
(68, '2911PHCBMW-blue-car_1920_x_1200.jpg', 'BMW-blue-car_1920_x_1200.jpg', '2911PHC', '2019-10-26 06:43:05', '2019-10-26 06:43:05', NULL),
(69, '2911PHCMercedes-Benz_1920x1080.jpg', 'Mercedes-Benz_1920x1080.jpg', '2911PHC', '2019-10-26 06:43:05', '2019-10-26 06:43:05', NULL),
(70, '2911PHCMercedes-Benz_1920x1080.jpg', 'Mercedes-Benz_1920x1080.jpg', '2911PHC', '2019-10-26 06:43:05', '2019-10-26 06:43:05', NULL),
(71, '2911PHCMercedes-Benz_C205_1920x1080.jpg', 'Mercedes-Benz_C205_1920x1080.jpg', '2911PHC', '2019-10-26 06:43:06', '2019-10-26 06:43:06', NULL),
(72, '2911PHCMercedes-Benz_2017_E_3001920x1080.jpg', 'Mercedes-Benz_2017_E_3001920x1080.jpg', '2911PHC', '2019-10-26 06:43:06', '2019-10-26 06:43:06', NULL),
(73, '2911PHCmercedes-mercedes-benz-s-class1920x1080.jpg', 'mercedes-mercedes-benz-s-class1920x1080.jpg', '2911PHC', '2019-10-26 06:43:06', '2019-10-26 06:43:06', NULL),
(74, '2911PHCtablero_8.jpg', 'tablero_8.jpg', '2911PHC', '2019-10-26 06:43:06', '2019-10-26 06:43:06', NULL),
(75, '3411LIPAmarrillo_1.jpg', 'Amarrillo_1.jpg', '3411LIP', '2019-10-26 06:47:12', '2019-10-26 06:47:12', NULL),
(76, '3411LIPAmarrillo_2.jpg', 'Amarrillo_2.jpg', '3411LIP', '2019-10-26 06:47:12', '2019-10-26 06:47:12', NULL),
(77, '3411LIPAmarrillo_4.jpg', 'Amarrillo_4.jpg', '3411LIP', '2019-10-26 06:47:12', '2019-10-26 06:47:12', NULL),
(78, '3411LIPAmarrillo_3.jpg', 'Amarrillo_3.jpg', '3411LIP', '2019-10-26 06:47:12', '2019-10-26 06:47:12', NULL),
(79, '3411LIPAmarrillo_5.jpg', 'Amarrillo_5.jpg', '3411LIP', '2019-10-26 06:47:12', '2019-10-26 06:47:12', NULL),
(80, '3411LIPAmarrillo_6.jpg', 'Amarrillo_6.jpg', '3411LIP', '2019-10-26 06:47:13', '2019-10-26 06:47:13', NULL),
(81, '3411LIPAmarrillo_7.jpg', 'Amarrillo_7.jpg', '3411LIP', '2019-10-26 06:47:13', '2019-10-26 06:47:13', NULL),
(82, '3411LIPAmarrillo_8.jpg', 'Amarrillo_8.jpg', '3411LIP', '2019-10-26 06:47:13', '2019-10-26 06:47:13', NULL),
(83, '3411LIPAmarrillo_9.jpg', 'Amarrillo_9.jpg', '3411LIP', '2019-10-26 06:47:13', '2019-10-26 06:47:13', NULL),
(84, '3411LIPtablero_7.jpg', 'tablero_7.jpg', '3411LIP', '2019-10-26 06:47:13', '2019-10-26 06:47:13', NULL);

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
(1, 'TOYOTA', '2019-10-24 01:18:05', '2019-10-24 01:18:05', NULL),
(2, 'NISSAN', '2019-10-24 01:18:14', '2019-10-24 01:18:14', NULL),
(3, 'FORD', '2019-10-24 01:18:20', '2019-10-24 01:18:20', NULL),
(4, 'VOLKSWAGEN', '2019-10-24 01:18:29', '2019-10-24 01:18:29', NULL),
(5, 'MAZDA', '2019-10-24 01:18:37', '2019-10-24 01:18:37', NULL),
(6, 'SUZUKI', '2019-10-24 01:18:43', '2019-10-24 01:18:43', NULL),
(7, 'VOLVO', '2019-10-24 01:18:50', '2019-10-24 01:18:50', NULL),
(8, 'TESLA', '2019-10-24 01:18:56', '2019-10-24 01:18:56', NULL),
(9, 'QUANTUM', '2019-10-24 01:19:01', '2019-10-24 01:19:01', NULL),
(10, 'HONDA', '2019-10-24 01:19:07', '2019-10-24 01:19:07', NULL),
(11, 'HYUDAI', '2019-10-24 01:19:13', '2019-10-24 01:19:13', NULL),
(12, 'CHEVROLET', '2019-10-24 01:19:18', '2019-10-24 01:19:18', NULL),
(13, 'ISUZU', '2019-10-24 01:19:24', '2019-10-24 01:19:24', NULL);

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
(13, 2019, 'SEGURO 2019 1 B', 'EMPRESA SEGURO 2019 1 B', '2020-02-19', '1147DEKCABALLERIA.jpg', '1147DEK', '2019-10-26 06:22:36', '2019-10-26 20:44:29', NULL),
(14, 2019, 'SEGURO 2019 1  2720RKF', 'EMPRESA SEGURO 2019 1 2720RKF', '2020-02-18', '2720RKFcandy_cruch.jpg', '2720RKF', '2019-10-26 06:37:47', '2019-10-26 06:37:47', NULL),
(15, 2019, 'SEGURO 2019 1  2720RKF', 'EMPRESA SEGURO 2019 1 2720RKF', '2020-03-17', '2720RKFnetflix.jpg', '2720RKF', '2019-10-26 06:37:47', '2019-10-26 06:37:47', NULL),
(16, 2019, 'SEGURO 2019 1  2720RKF', 'EMPRESA SEGURO 2019 1 2720RKF', '2020-02-11', '2720RKFSeñor_Tijeras.jpg', '2720RKF', '2019-10-26 06:37:47', '2019-10-26 06:37:47', NULL),
(17, 2019, 'SEGURO 2019 1 2911PHC', 'EMPRESA SEGURO 2019 1 2911PHC', '2020-02-18', '2911PHC0bfb6f414d22b5f7fc1fb8c87b0219721db470f61612e478332bfe5a9165551e.jpg', '2911PHC', '2019-10-26 06:44:29', '2019-10-26 06:44:29', NULL),
(18, 2019, 'SEGURO 2019 1  2911PHC', 'EMPRESA SEGURO 2019 1 2911PHC', '2020-02-27', '2911PHC5f9efa9593cd23627649a34360a038d2b0ba088d1409e05d7bffd5572ac69f74.jpg', '2911PHC', '2019-10-26 06:44:29', '2019-10-26 06:44:29', NULL),
(22, 2019, 'SEGURO RECIEN HECHO', 'EMPRESA RECIEN', '2019-10-26', '2911PHCCABALLERIA.jpg', '2911PHC', '2019-10-26 21:11:14', '2019-10-26 21:11:14', NULL),
(23, 2019, 'SEGURO RECIEN HECHO', 'EMPRESA RECIEN', '2019-10-26', '2911PHCPRINCESA.jpg', '2911PHC', '2019-10-26 21:11:14', '2019-10-26 21:11:14', NULL),
(24, 2019, 'SEGURO RECIEN HECHO 27', 'EMPRESA RECIEN 27', '2019-10-14', '2720RKFCABALLERIA.jpg', '2720RKF', '2019-10-26 21:47:55', '2019-10-26 21:47:55', NULL),
(25, 2019, 'SEGURO RECIEN HECHO 27', 'EMPRESA RECIEN 27', '2019-10-23', '2720RKFSeñor_Tijeras.jpg', '2720RKF', '2019-10-26 21:47:55', '2019-10-26 21:47:55', NULL),
(26, 2017, 'Seguro 2019 1 1147dek', 'empresa 1', '2019-10-18', '1147DEKTRES_CARTAS.jpg', '1147DEK', '2019-10-27 13:46:58', '2019-10-27 13:46:58', NULL),
(28, 2017, 'Seguro 2017 1 2720RKF', 'empresa 1', '2018-03-06', '2720RKFFRIENDS_ROM.jpg', '2720RKF', '2019-10-27 13:48:41', '2019-10-27 13:48:41', NULL),
(29, 2017, 'Seguro 2019 1 2911phc', 'empresa 1', '2018-03-06', '2911PHCPRINCESA.jpg', '2911PHC', '2019-10-27 13:50:45', '2019-10-27 13:50:45', NULL),
(30, 2018, 'Seguro 2017 1 3411LIP', 'empresa 1', '2019-04-09', '3411LIPGRAN_P.jpg', '3411LIP', '2019-10-27 13:50:45', '2019-10-27 13:50:45', NULL),
(31, 2018, 'Seguro 2018 1 2911PHC', 'empresa 1', '2019-05-15', '2911PHCESTRELLA.jpg', '2911PHC', '2019-10-27 13:50:45', '2019-10-27 13:50:45', NULL);

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
(1, 'LAND CRUISER', '2019-10-24 01:24:22', '2019-10-24 01:24:22', NULL),
(2, 'TIPO 1', '2019-10-24 01:24:29', '2019-10-24 01:24:29', NULL),
(3, 'TIPO 2', '2019-10-24 01:24:34', '2019-10-24 01:24:34', NULL),
(4, 'TIPO 4', '2019-10-24 01:24:41', '2019-10-24 01:24:41', NULL),
(5, 'TIPO 5', '2019-10-24 01:24:46', '2019-10-24 01:24:46', NULL),
(6, 'TIPO 6', '2019-10-24 01:24:52', '2019-10-24 01:24:52', NULL),
(7, 'TIPO 7', '2019-10-24 01:24:56', '2019-10-24 01:24:56', NULL),
(8, 'TIPO 8', '2019-10-24 01:25:01', '2019-10-24 01:25:01', NULL),
(9, 'TIPO 9', '2019-10-24 01:25:06', '2019-10-24 01:25:06', NULL),
(10, 'TIPO 10', '2019-10-24 01:25:19', '2019-10-24 01:25:19', NULL),
(11, 'TIPO 11', '2019-10-24 01:25:28', '2019-10-24 01:25:28', NULL),
(12, 'TIPO 12', '2019-10-24 01:25:36', '2019-10-24 01:25:36', NULL);

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
(1, 'GASOLINA', '2019-10-24 01:29:28', '2019-10-24 01:29:28', NULL),
(2, 'DIESEL', '2019-10-24 01:29:33', '2019-10-24 01:29:33', NULL),
(3, 'ENERGIA ELECTRICA', '2019-10-24 01:29:38', '2019-10-24 01:29:38', NULL),
(4, 'ETANOL', '2019-10-24 01:29:47', '2019-10-24 01:29:47', NULL),
(5, 'GAS NATURAL VEHICULAR (GNV)', '2019-10-24 01:29:50', '2019-10-24 01:29:50', NULL);

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
(1, 'OFICIAL', '2019-10-24 01:26:41', '2019-10-24 01:26:41', NULL),
(2, 'OPERATIVO - ADMINISTRATIVO', '2019-10-24 01:27:02', '2019-10-24 01:27:02', NULL);

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
('1147DEK', 'CRPVA1147DEK', 'CHASIS1147DEK', 'MOTOR1147DEK', 'POLIZA DE IMPORTACION', 8978941325, 5, 4, 'DOBLE', 'ROJO', 1, 1, 1, 1, 1, '2016-01-12', '2019-10-26 06:19:30', '2019-10-26 06:19:30', NULL),
('2720RKF', 'CRPVA2720RKF', 'CHASIS2720RKF', 'MOTOR2720RKF', 'POLIZA DE IMPORTACION', 8978941324, 5, 4, 'DOBLE', 'NEGRO', 2, 3, 3, 3, 2, '2016-02-16', '2019-10-26 06:34:07', '2019-10-26 06:34:07', NULL),
('2911PHC', 'CRPVA2911PHC', 'CHASIS2911PHC', 'MOTOR2911PHC', 'POLIZA DE IMPORTACION', 8978941327, 5, 4, 'TRIPLE', 'AZUL', 4, 4, 6, 5, 2, '2016-01-06', '2019-10-26 06:41:34', '2019-10-26 06:41:34', NULL),
('3411LIP', 'CRPVA3411LIP', 'CHASIS3411LIP', 'MOTOR3411LIP', 'POLIZA DE IMPORTACION', 8978941329, 7, 4, 'DOBLE', 'AMARILLO', 2, 3, 2, 3, 1, '2016-01-27', '2019-10-26 06:45:59', '2019-10-26 06:45:59', NULL);

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
  MODIFY `clase_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `documentos_propiedad_vehiculos`
--
ALTER TABLE `documentos_propiedad_vehiculos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT de la tabla `documentos_ronovable_vehiculos`
--
ALTER TABLE `documentos_ronovable_vehiculos`
  MODIFY `archivero_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `estado_services`
--
ALTER TABLE `estado_services`
  MODIFY `est_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `estado_servicio_vehiculos`
--
ALTER TABLE `estado_servicio_vehiculos`
  MODIFY `est_serv_vehiculo_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `imagenes_perfil_vehiculos`
--
ALTER TABLE `imagenes_perfil_vehiculos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

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
