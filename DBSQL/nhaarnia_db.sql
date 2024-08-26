-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-06-2024 a las 16:31:16
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
-- Base de datos: `nhaarnia_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `armarios`
--

CREATE TABLE `armarios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `armarios`
--

INSERT INTO `armarios` (`id`, `user_id`, `created_at`, `updated_at`) VALUES
(4, 5, '2024-05-23 16:01:10', '2024-05-23 16:01:10'),
(6, 7, '2024-05-30 13:15:04', '2024-05-30 13:15:04'),
(11, 8, '2024-05-30 13:18:46', '2024-05-30 13:18:46'),
(12, 9, '2024-06-09 05:11:01', '2024-06-09 05:11:01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `armario_prenda`
--

CREATE TABLE `armario_prenda` (
  `armario_id` bigint(20) UNSIGNED NOT NULL,
  `prenda_id` bigint(20) UNSIGNED NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `armario_prenda`
--

INSERT INTO `armario_prenda` (`armario_id`, `prenda_id`, `updated_at`, `created_at`) VALUES
(4, 1, '2024-06-01 06:44:56', '2024-06-01 06:44:56'),
(4, 2, '2024-06-01 06:44:56', '2024-06-01 06:44:56'),
(4, 3, '2024-06-01 06:44:56', '2024-06-01 06:44:56'),
(4, 4, '2024-06-09 12:09:30', '2024-06-09 12:09:30'),
(4, 5, '2024-06-09 12:09:30', '2024-06-09 12:09:30'),
(4, 6, '2024-06-09 12:09:30', '2024-06-09 12:09:30'),
(4, 7, '2024-06-01 07:02:53', '2024-06-01 07:02:53'),
(4, 8, '2024-06-01 07:02:53', '2024-06-01 07:02:53'),
(4, 9, '2024-06-09 12:09:30', '2024-06-09 12:09:30'),
(4, 10, '2024-06-01 07:02:53', '2024-06-01 07:02:53'),
(4, 11, '2024-06-09 12:09:30', '2024-06-09 12:09:30'),
(4, 14, '2024-06-09 12:09:30', '2024-06-09 12:09:30'),
(4, 15, '2024-06-01 06:55:22', '2024-06-01 06:55:22'),
(4, 16, '2024-06-01 06:58:22', '2024-06-01 06:58:22'),
(4, 17, '2024-06-09 12:09:30', '2024-06-09 12:09:30'),
(4, 18, '2024-06-09 12:09:30', '2024-06-09 12:09:30'),
(4, 19, '2024-06-09 12:09:30', '2024-06-09 12:09:30'),
(4, 20, '2024-06-09 12:09:30', '2024-06-09 12:09:30'),
(4, 21, '2024-06-09 12:09:30', '2024-06-09 12:09:30'),
(4, 22, '2024-06-09 12:09:30', '2024-06-09 12:09:30'),
(4, 23, '2024-06-09 12:09:30', '2024-06-09 12:09:30'),
(4, 24, '2024-06-09 12:09:30', '2024-06-09 12:09:30'),
(4, 25, '2024-06-01 06:30:38', '2024-06-01 06:30:38'),
(4, 26, '2024-06-01 06:30:38', '2024-06-01 06:30:38'),
(4, 28, '2024-06-01 06:30:38', '2024-06-01 06:30:38'),
(4, 29, '2024-06-01 06:30:38', '2024-06-01 06:30:38'),
(4, 30, '2024-06-09 12:09:30', '2024-06-09 12:09:30'),
(4, 31, '2024-06-01 06:30:38', '2024-06-01 06:30:38'),
(4, 32, '2024-06-01 06:30:38', '2024-06-01 06:30:38'),
(4, 33, '2024-06-01 06:44:30', '2024-06-01 06:44:30'),
(4, 34, '2024-06-09 12:09:30', '2024-06-09 12:09:30'),
(4, 35, '2024-06-09 12:09:30', '2024-06-09 12:09:30'),
(4, 36, '2024-06-09 12:09:30', '2024-06-09 12:09:30'),
(4, 37, '2024-06-09 12:09:30', '2024-06-09 12:09:30'),
(4, 38, '2024-06-09 12:09:30', '2024-06-09 12:09:30'),
(4, 39, '2024-06-09 12:09:30', '2024-06-09 12:09:30'),
(4, 40, '2024-06-09 12:09:30', '2024-06-09 12:09:30'),
(4, 41, '2024-06-09 12:09:30', '2024-06-09 12:09:30'),
(4, 42, '2024-06-09 12:09:30', '2024-06-09 12:09:30'),
(4, 43, '2024-06-09 12:09:30', '2024-06-09 12:09:30'),
(4, 44, '2024-06-09 12:09:30', '2024-06-09 12:09:30'),
(4, 45, '2024-06-09 12:09:30', '2024-06-09 12:09:30'),
(4, 46, '2024-06-09 12:09:30', '2024-06-09 12:09:30'),
(4, 47, '2024-06-09 12:09:30', '2024-06-09 12:09:30'),
(4, 48, '2024-06-09 12:09:30', '2024-06-09 12:09:30'),
(4, 49, '2024-06-09 12:09:30', '2024-06-09 12:09:30'),
(4, 50, '2024-06-09 12:09:30', '2024-06-09 12:09:30'),
(4, 51, '2024-06-09 12:09:30', '2024-06-09 12:09:30'),
(4, 52, '2024-06-09 12:09:30', '2024-06-09 12:09:30'),
(4, 53, '2024-06-09 12:09:30', '2024-06-09 12:09:30'),
(4, 54, '2024-06-09 12:09:30', '2024-06-09 12:09:30'),
(4, 55, '2024-06-09 12:09:30', '2024-06-09 12:09:30'),
(4, 56, '2024-06-09 12:09:30', '2024-06-09 12:09:30'),
(4, 57, '2024-06-09 12:09:30', '2024-06-09 12:09:30'),
(4, 58, '2024-06-09 12:09:30', '2024-06-09 12:09:30'),
(4, 59, '2024-06-09 12:09:30', '2024-06-09 12:09:30'),
(4, 60, '2024-06-09 12:09:30', '2024-06-09 12:09:30'),
(4, 61, '2024-06-09 12:09:30', '2024-06-09 12:09:30'),
(4, 62, '2024-06-09 12:09:30', '2024-06-09 12:09:30'),
(4, 63, '2024-06-09 12:09:30', '2024-06-09 12:09:30'),
(4, 64, '2024-06-09 12:09:30', '2024-06-09 12:09:30'),
(4, 65, '2024-06-09 12:09:30', '2024-06-09 12:09:30'),
(4, 66, '2024-06-09 12:09:30', '2024-06-09 12:09:30'),
(4, 67, '2024-06-09 12:09:30', '2024-06-09 12:09:30'),
(4, 68, '2024-06-09 12:09:30', '2024-06-09 12:09:30'),
(4, 69, '2024-06-09 12:09:30', '2024-06-09 12:09:30'),
(4, 70, '2024-06-09 12:09:30', '2024-06-09 12:09:30'),
(4, 71, '2024-06-09 12:09:30', '2024-06-09 12:09:30'),
(4, 72, '2024-06-09 12:09:30', '2024-06-09 12:09:30'),
(4, 73, '2024-06-09 12:09:30', '2024-06-09 12:09:30'),
(4, 74, '2024-06-09 12:20:22', '2024-06-09 12:20:22'),
(6, 1, '2024-06-04 13:27:59', '2024-06-04 13:27:59'),
(6, 2, '2024-06-04 13:27:59', '2024-06-04 13:27:59'),
(6, 3, '2024-06-04 13:27:59', '2024-06-04 13:27:59'),
(6, 6, '2024-06-08 07:14:48', '2024-06-08 07:14:48'),
(6, 8, '2024-06-08 07:17:48', '2024-06-08 07:17:48'),
(6, 10, '2024-06-08 07:17:48', '2024-06-08 07:17:48'),
(6, 30, '2024-06-08 07:17:48', '2024-06-08 07:17:48'),
(6, 35, '2024-06-08 07:17:48', '2024-06-08 07:17:48'),
(11, 1, '2024-05-30 13:19:48', '2024-05-30 13:19:48'),
(11, 2, '2024-05-30 13:19:48', '2024-05-30 13:19:48'),
(11, 3, '2024-05-30 13:19:48', '2024-05-30 13:19:48'),
(11, 5, '2024-05-30 13:28:29', '2024-05-30 13:28:29'),
(11, 8, '2024-05-30 13:28:29', '2024-05-30 13:28:29'),
(11, 10, '2024-05-30 13:19:33', '2024-05-30 13:19:33'),
(12, 1, '2024-06-09 05:11:11', '2024-06-09 05:11:11'),
(12, 2, '2024-06-09 05:11:11', '2024-06-09 05:11:11'),
(12, 3, '2024-06-09 05:11:11', '2024-06-09 05:11:11'),
(12, 34, '2024-06-09 05:11:37', '2024-06-09 05:11:37');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carritos`
--

CREATE TABLE `carritos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `carritos`
--

INSERT INTO `carritos` (`id`, `user_id`, `created_at`, `updated_at`) VALUES
(4, 5, '2024-05-23 16:01:10', '2024-05-23 16:01:10'),
(6, 7, '2024-05-30 13:15:08', '2024-05-30 13:15:08'),
(7, 8, '2024-05-30 13:15:49', '2024-05-30 13:15:49'),
(8, 9, '2024-06-09 05:11:01', '2024-06-09 05:11:01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito_prenda`
--

CREATE TABLE `carrito_prenda` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `carrito_id` bigint(20) UNSIGNED NOT NULL,
  `prenda_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_03_28_093505_crear_tablas_nharnnia', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `outfits`
--

CREATE TABLE `outfits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `outfit_prenda`
--

CREATE TABLE `outfit_prenda` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `outfit_id` bigint(20) UNSIGNED NOT NULL,
  `prenda_id` bigint(20) UNSIGNED NOT NULL,
  `tipo` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prendas`
--

CREATE TABLE `prendas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `estilo` varchar(255) NOT NULL,
  `color1` varchar(255) NOT NULL,
  `color2` varchar(255) NOT NULL,
  `imagen` varchar(400) NOT NULL,
  `tipo` varchar(255) NOT NULL,
  `precio` double NOT NULL,
  `genero` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `prendas`
--

INSERT INTO `prendas` (`id`, `nombre`, `estilo`, `color1`, `color2`, `imagen`, `tipo`, `precio`, `genero`, `created_at`, `updated_at`) VALUES
(1, 'Camiseta Blanca', 'casual', 'blanco', 'blanco', 'https://ladudapublicidad.b-cdn.net/wp-content/uploads/2014/04/Camiseta-Heavy-T-blanca-fruit-of-the-loom-61-212-30_cutout_front-scaled.jpg', 'arriba_interior', 12.99, 'hombre', '2024-03-28 16:05:01', '2024-06-01 08:09:02'),
(2, 'Pantalones cortos azules', 'deportivo', 'azul', 'azul', 'https://static.sprintercdn.com/products/073e50af-2e57-4dcd-9e57-704de801d525/pantal-n-acerbis-mani-mujer_073e50af-2e57-4dcd-9e57-704de801d525_1_2833153758.jpg', 'pantalones_verano', 15, 'hombre', '2024-03-29 10:17:08', '2024-06-05 15:21:48'),
(3, 'Zapatillas Blancas', 'casual', 'blanco', 'blanco', 'https://m.media-amazon.com/images/I/51cnfh-XAQL._AC_UY580_.jpg', 'calzado', 50, 'hombre', '2024-03-29 10:19:48', '2024-03-29 10:19:48'),
(4, 'Pantalones vaqueros', 'casual', 'azul', 'azul', 'https://www.bolf.es/spa_pl_Pantalon-vaquero-slim-fit-para-hombre-azul-oscuro-Bolf-6147-89601_7.jpg', 'pantalones', 29.99, 'hombre', '2024-03-29 12:14:45', '2024-03-29 12:14:45'),
(5, 'Sudadera Blanca', 'casual', 'blanco', 'blanco', 'https://shoppinginibiza.com/181527-large_default/nike-sudadera-blanca-fd3000-100-ninoa-.jpg', 'arriba_normal', 32.99, 'hombre', '2024-03-29 12:16:25', '2024-03-29 12:16:25'),
(6, 'Northface Azul', 'casual', 'azul', 'azul', 'https://www.lolitamoda.com/uploads/photo/image/135671/gallery_M139358_1.JPG', 'arriba_exterior', 119.99, 'hombre', '2024-03-29 12:18:16', '2024-03-29 12:18:16'),
(7, 'Camiseta Negra', 'casual', 'negro', 'negro', 'https://marinaracewear.com/storage/media/attributes/8/7/4/5/8/87458/2.jpg', 'arriba_interior', 12.99, 'hombre', NULL, NULL),
(8, 'Pantalones Vaqueros Negros', 'casual', 'negro', 'negro', 'https://i.pinimg.com/736x/7d/5f/92/7d5f9208957f5d56daa93e67592ae2f4.jpg', 'pantalones', 29.99, 'hombre', NULL, NULL),
(9, 'Zapatillas Blancas Lacoste', 'casual', 'blanco', 'azul', 'https://cdn.grupoelcorteingles.es/SGFM/dctm/MEDIA03/202401/16/00103347704508____5__516x640.jpg', 'calzado', 125.99, 'hombre', NULL, NULL),
(10, 'Sudadera Danico Boxy', 'casual', 'negro', 'negro', 'https://img01.ztat.net/article/spp-media-p1/3db41f1c70434fa0b2f8bd57a8d6ac45/6962cd6362bd48678acecf40fcb1e1f0.jpg?imwidth=156&filter=packshot', 'arriba_normal', 43.99, 'hombre', NULL, NULL),
(11, 'Abrigo Plumas Carhartt Negro', 'casual', 'negro', 'negro', 'https://img01.ztat.net/article/spp-media-p1/f670bfabb30f420f85b06cdeda240d1e/13778236ce284f708e350928464eab9f.jpg?imwidth=156&filter=packshot', 'arriba_exterior', 139.99, 'hombre', NULL, NULL),
(14, 'Pantalones Beige', 'casual', 'beige', 'beige', 'https://cdn.grupoelcorteingles.es/SGFM/dctm/MEDIA03/202401/31/00160616102202____3__516x640.jpg', 'pantalones', 34.99, 'mujer', NULL, NULL),
(15, 'Pantalones Chándal Grises', 'deportivo', 'gris', 'gris', 'https://m.media-amazon.com/images/I/61wRC6K0asL._AC_UY580_DpWeblab_.jpg', 'pantalones', 28.99, 'mujer', NULL, NULL),
(16, 'Chaqueta Columbia Lightweight', 'deportivo', 'blanco', 'beige', 'https://i8.amplience.net/i/jpl/jd_692396_a?qlt=92&w=750&h=957&v=1&fmt=auto', 'arriba_exterior', 74.99, 'mujer', NULL, NULL),
(17, 'Camiseta Violeta Adidas', 'deportivo', 'morado', 'blanco', 'https://assets.adidas.com/images/w_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/886fbff842944f5dbe788bd18c868647_9366/Camiseta_Baby_3_bandas_Violeta_IP0658_01_laydown.jpg', 'arriba_interior', 29.99, 'mujer', NULL, NULL),
(18, 'Jersey Básico', 'casual', 'beige', 'beige', 'https://static.zara.net/assets/public/e39c/4974/a89740ea9ac7/111c9373f2f1/05536069712-e1/05536069712-e1.jpg?ts=1715702853650&w=750', 'arriba_normal', 25.99, 'mujer', NULL, NULL),
(19, 'Cazadora Vaquera', 'casual', 'azul', 'azul', 'https://static.zara.net/assets/public/19dd/ec5b/65614ae3951c/6968f6b7d23c/08197074406-e1/08197074406-e1.jpg?ts=1714728257482&w=750', 'arriba_normal', 35.99, 'mujer', NULL, NULL),
(20, 'Pantalones vaqueros Wide Leg', 'casual', 'azul', 'azul', 'https://img01.ztat.net/article/spp-media-p1/66110dd53883488ea50ec79ea652acae/9d3a26f8a24247fa89836d9c9be8461c.jpg?imwidth=1800&filter=packshot', 'pantalones', 44.99, 'mujer', NULL, NULL),
(21, 'Camiseta Básica Blanca', 'casual', 'blanco', 'blanco', 'https://img01.ztat.net/article/spp-media-p1/f19f63aa9a7135d082d1791d8ce34527/3956529135424667ba37ec1b63a26a3f.jpg?imwidth=1800&filter=packshot', 'arriba_interior', 16.99, 'mujer', NULL, NULL),
(22, 'Camiseta Básica Negra', 'casual', 'negro', 'negro', 'https://img01.ztat.net/article/spp-media-p1/548824a5417543029f9f7f1f75f8aa89/b4b3c74dfa9b400a823a81137160615a.jpg?imwidth=1800&filter=packshot', 'arriba_interior', 16.99, 'mujer', NULL, NULL),
(23, 'Chaqueta Oversized', 'casual', 'blanco', 'blanco', 'https://img01.ztat.net/article/spp-media-p1/129418d15dac4f138e7b07addf6c6f1e/9a6ef386f4d8491d9c44dcf5b11ea743.jpg?imwidth=1800&filter=packshot', 'arriba_normal', 89.99, 'mujer', NULL, NULL),
(24, 'Zapatillas Adidas VL Court', 'casual', 'gris', 'blanco', 'https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/07be140d2fa04494a7cdb8cfbe051151_9366/Zapatilla_VL_Court_Bold_Gris_IF9784_01_standard.jpg', 'calzado', 79.99, 'mujer', NULL, NULL),
(25, 'Zapatillas Deportivas Negras', 'deportivo', 'negro', 'rosa', 'https://img.kwcdn.com/product/Fancyalgo/VirtualModelMatting/b740bfcdaed6ff0f37e674b04ba7362c.jpg?imageMogr2/auto-orient%7CimageView2/2/w/800/q/70/format/webp', 'calzado', 19.99, 'mujer', NULL, NULL),
(26, 'Chaqueta Challenger Columbia', 'deportivo', 'negro', 'negro', 'https://img01.ztat.net/article/spp-media-p1/a9a0b21006514d51b6e9c792e3276979/c4c19b16c7134a53aa3d3bb2da63d155.jpg?imwidth=1800&filter=packshot', 'arriba_exterior', 55.99, 'mujer', NULL, NULL),
(28, 'Camiseta Básica Azul', 'casual', 'azul', 'azul', 'https://gasoilonline.com/444-large_default/camiseta-mujer-azul-claro-lisa.jpg', 'arriba_interior', 12.99, 'mujer', '2024-06-01 06:09:55', '2024-06-01 06:09:55'),
(29, 'Camiseta Deportiva Adidas Rosa', 'deportivo', 'rosa', 'rosa', 'https://pisandofuerte.es/36697-home_default/camisetas-mujer-adidas-rn-fast-rosa-hk9006.jpg', 'arriba_interior', 25.99, 'mujer', '2024-06-01 06:12:46', '2024-06-01 06:12:46'),
(30, 'Pantalones Cargo Beige', 'casual', 'beige', 'beige', 'https://img.kwcdn.com/product/Fancyalgo/VirtualModelMatting/262fec43239627ed2f2eaaa6eb2b311c.jpg?imageMogr2/auto-orient%7CimageView2/2/w/800/q/70/format/webp', 'pantalones', 35.99, 'hombre', '2024-06-01 06:14:31', '2024-06-01 06:14:31'),
(31, 'Zapatillas Blancas Sketch-Lite', 'deportivo', 'blanco', 'blanco', 'https://cdn.palbincdn.com/users/26844/images/ZAPATILLAS-DEPORTIVAS-MUJER-MEMORY-FOAM-SKECHERS-SKECH-LITE-PRO-1696177642.jpg', 'calzado', 64.99, 'mujer', '2024-06-01 06:18:45', '2024-06-01 06:18:45'),
(32, 'Pantalones Adidas Track', 'deportivo', 'negro', 'negro', 'https://bixoto.com/media/catalog/product/cache/2e45ba69d70625e0fc47dbc2d34862e1/4/0/4061619615715_S6494849_P02.jpg', 'pantalones', 39.99, 'mujer', '2024-06-01 06:29:42', '2024-06-01 06:29:42'),
(33, 'Camiseta Adidas Negra', 'deportivo', 'negro', 'negro', 'https://trideporte.com/35529-medium_default/camiseta-manga-corta-adidas-designed-2-move-3-rayas-mujer-negra.jpg', 'arriba_interior', 24.99, 'mujer', '2024-06-01 06:42:29', '2024-06-01 06:42:29'),
(34, 'Pantalones Cortos Rotos', 'casual', 'azul', 'azul', 'https://www.teachei.es/wp-content/uploads/2023/12/pantalones-vaqueros-cortos-hombre-571xrn-1-1.jpg', 'pantalones_verano', 23.99, 'hombre', '2024-06-05 15:23:01', '2024-06-05 15:23:01'),
(35, 'Sudadera BLKVIS', 'casual', 'gris', 'verde', 'https://img01.ztat.net/article/spp-media-p1/f491c08f63024562ba8f8eef43c741b8/87907358351844a5b5bb6600e29b7897.jpg?imwidth=1800&filter=packshot', 'arriba_normal', 69.99, 'hombre', '2024-06-05 15:46:50', '2024-06-05 16:14:20'),
(36, 'Pantalones Adidas Original', 'deportivo', 'azul', 'azul', 'https://img01.ztat.net/article/spp-media-p1/2b32d97883cc4825b89c38de1c8e113e/af88b613aa31420baa6acbcd6e750253.jpg?imwidth=1800&filter=packshot', 'pantalones', 44.99, 'hombre', '2024-06-05 15:58:04', '2024-06-05 15:58:04'),
(37, 'Pantalones Verdes Adidas', 'deportivo', 'verde', 'verde', 'https://img01.ztat.net/article/spp-media-p1/3bc0f80a65654c9c887cc75ea92920ec/a25bb5a577f748a29fd1dbd8ec56c195.jpg?imwidth=1800&filter=packshot', 'pantalones_verano', 33.95, 'hombre', '2024-06-05 16:06:39', '2024-06-05 16:06:39'),
(38, 'Top Embellished', 'casual', 'beige', 'beige', 'https://img01.ztat.net/article/spp-media-p1/8199e36f1135404fb056c63f4d66876d/86fbbd039bf14cc0b9b4d2df530714f5.jpg?imwidth=1800&filter=packshot', 'arriba_interior', 24.99, 'mujer', '2024-06-05 16:13:56', '2024-06-05 16:13:56'),
(39, 'Pantalones ONLZABBI', 'casual', 'verde', 'verde', 'https://img01.ztat.net/article/spp-media-p1/9badd0a326eb427496266ccccb56b34c/00ab07479b674f3191b53b4d56743181.jpg?imwidth=1800', 'pantalones', 32.99, 'mujer', '2024-06-05 16:47:11', '2024-06-05 16:47:11'),
(40, 'Pantalon Corto Nike Deporte', 'deportivo', 'negro', 'negro', 'https://img01.ztat.net/article/spp-media-p1/6c25a45dc0ec4ebdbc7337e410d18a58/07d57177993a43efa03e976266a0c439.jpg?imwidth=1800', 'pantalones_verano', 29.99, 'mujer', '2024-06-05 17:03:55', '2024-06-05 17:03:55'),
(41, 'Pantalones Cortos Adidas Grises', 'casual', 'gris', 'gris', 'https://img01.ztat.net/article/spp-media-p1/1824d6e4f8ff4de29f4aa838525300c7/f7fa970e5edf45e0a4aea76393e6d065.jpg?imwidth=1800&filter=packshot', 'pantalones_verano', 30.55, 'hombre', '2024-06-09 06:58:09', '2024-06-09 06:58:09'),
(42, 'Pantalones Cortos Nike Blancos', 'deportivo', 'blanco', 'blanco', 'https://shoppinginibiza.com/136743-home_default/nike-pantalon-corto-blanco-dry-cw6107100-hombre.jpg', 'pantalones_verano', 27.99, 'hombre', '2024-06-09 07:02:17', '2024-06-09 07:02:17'),
(43, 'Camiseta Alemania Adidas', 'deportivo', 'blanco', 'morado', 'https://img01.ztat.net/article/spp-media-p1/555619360ae34dc18a5fc30d616a4dac/32e7be0ff22a41f2aa852ccb333790c6.jpg?imwidth=1800&filter=packshot', 'arriba_interior', 44.95, 'hombre', '2024-06-09 07:04:27', '2024-06-09 07:04:27'),
(44, 'Chaqueta de Plumas Deporte Negra', 'deportivo', 'negro', 'negro', 'https://img01.ztat.net/article/spp-media-p1/34ecdabe2fb94d32a680aaf91650afeb/6c70dacc992f4ceeb532b0f780f0fdf8.jpg?imwidth=1800&filter=packshot', 'arriba_exterior', 130.99, 'mujer', '2024-06-09 07:07:24', '2024-06-09 07:07:24'),
(45, 'Chaqueta de Plumas Deporte Azul', 'deportivo', 'azul', 'azul', 'https://img01.ztat.net/article/spp-media-p1/879e5f861f184c7e86fcdefadd41049f/d102bba515864e6abcc94b70963e37e3.jpg?imwidth=1800&filter=packshot', 'arriba_exterior', 183.99, 'mujer', '2024-06-09 07:08:35', '2024-06-09 07:08:35'),
(46, 'Pantalones Largos Adidas Verdes', 'deportivo', 'verde', 'verde', 'https://img01.ztat.net/article/spp-media-p1/a1503200afc04de4854068184a74c48e/96dea2fce6614b92be114f41361f8531.jpg?imwidth=1800&filter=packshot', 'pantalones', 47.99, 'mujer', '2024-06-09 07:14:29', '2024-06-09 07:14:29'),
(47, 'Pantalones Shorts Vaqueros', 'casual', 'azul', 'azul', 'https://img01.ztat.net/article/spp-media-p1/3e8b0343211d4e749de72ca4d95e6e60/bc687e2059664f6fbf21fdc5ef394e92.jpg?imwidth=1800&filter=packshot', 'pantalones_verano', 17.99, 'mujer', '2024-06-09 07:17:32', '2024-06-09 07:17:32'),
(48, 'Bermuda Cargo Cortos', 'casual', 'beige', 'beige', 'https://img01.ztat.net/article/spp-media-p1/124c063827884585a54351e525dc6d0b/61105853fdf94514bff78ae9b9c997f2.jpg?imwidth=1800&filter=packshot', 'pantalones_verano', 17.99, 'mujer', '2024-06-09 07:18:36', '2024-06-09 07:18:36'),
(49, 'Top Inside', 'casual', 'beige', 'beige', 'https://img01.ztat.net/article/spp-media-p1/4ccb98e5e79a44dd84620e758a147cc2/042ac59a20d14c14a7565f864010a3ea.jpg?imwidth=1800&filter=packshot', 'arriba_interior', 12.99, 'mujer', '2024-06-09 07:20:41', '2024-06-09 07:20:41'),
(50, 'Fruncido Top', 'casual', 'rojo', 'rojo', 'https://img01.ztat.net/article/spp-media-p1/2c397634b9c640b48a8b274f6790d0f0/13f45210abd54b34a0ce80a53b001d12.jpg?imwidth=1800&filter=packshot', 'arriba_interior', 9.99, 'mujer', '2024-06-09 07:22:59', '2024-06-09 07:22:59'),
(51, 'Pantalones Even&Odd', 'casual', 'rojo', 'rojo', 'https://img01.ztat.net/article/spp-media-p1/83cb3b095def4341a9eadb6144c1c85e/2d3199372b124a6798a5550a5245d839.jpg?imwidth=1800&filter=packshot', 'pantalones', 31.99, 'mujer', '2024-06-09 07:25:41', '2024-06-09 07:25:41'),
(52, 'Pantalones Noisy May', 'casual', 'negro', 'negro', 'https://img01.ztat.net/article/spp-media-p1/843fde7ceee63a349275dfea7849379e/3041687d591c4432ac5f12c61b55760a.jpg?imwidth=1800&filter=packshot', 'pantalones_verano', 26.99, 'mujer', '2024-06-09 07:27:49', '2024-06-09 07:27:49'),
(53, 'Pantalones Terry Negros', 'casual', 'negro', 'negro', 'https://img01.ztat.net/article/spp-media-p1/d7bf85c2bb924d09a0a7a98a12a29e79/89604c41127f44f580b002477b13a9b1.jpg?imwidth=1800', 'pantalones', 27.99, 'mujer', '2024-06-09 07:29:48', '2024-06-09 07:29:48'),
(54, 'Abrigo Clásico Long', 'casual', 'negro', 'negro', 'https://img01.ztat.net/article/spp-media-p1/796feeeee1c84ff8acf9cac9204d433c/78973d28e2964f3d8f5fc978a2526821.jpg?imwidth=1800&filter=packshot', 'arriba_exterior', 69.99, 'mujer', '2024-06-09 07:31:49', '2024-06-09 07:31:49'),
(55, 'Abrigo de Invierno Negro', 'casual', 'negro', 'negro', 'https://img01.ztat.net/article/spp-media-p1/4a26522013f14d9ea438abc13f98e0cd/cdeb514ab9bf4856a297dced44bd5a2e.jpg?imwidth=1800&filter=packshot', 'arriba_exterior', 33.99, 'mujer', '2024-06-09 07:34:14', '2024-06-09 07:34:14'),
(56, 'Only Parka', 'casual', 'beige', 'beige', 'https://img01.ztat.net/article/spp-media-p1/e465ecf12a703ae4960cdefa04e5dba5/88aa38e1fc4043e19f2ec39349eccfde.jpg?imwidth=1800&filter=packshot', 'arriba_exterior', 38.99, 'mujer', '2024-06-09 07:36:45', '2024-06-09 07:36:45'),
(57, 'Pantalones Ellese JOELS', 'casual', 'negro', 'negro', 'https://img01.ztat.net/article/spp-media-p1/29d2b5f3953344a38d829940471e6174/1a41a355db1a4ada829b7fe1b360c5a4.jpg?imwidth=1800&filter=packshot', 'pantalones_verano', 44.95, 'hombre', '2024-06-09 07:39:44', '2024-06-09 07:39:44'),
(58, 'Sudadera con Capucha Dado', 'casual', 'blanco', 'blanco', 'https://static.pullandbear.net/2/photos//2024/I/0/1/p/3590/388/952/3590388952_2_6_0.jpg?ts=1713199623465&imwidth=1125', 'arriba_normal', 25.99, 'mujer', '2024-06-09 07:42:31', '2024-06-09 07:42:31'),
(59, 'Sudadera Oversize Rayas', '15.99', 'blanco', 'negro', 'https://static.pullandbear.net/2/photos//2024/V/0/1/p/7593/314/098/7593314098_2_6_0.jpg?ts=1701795621121&imwidth=1125', 'arriba_normal', 15.99, 'mujer', '2024-06-09 07:43:49', '2024-06-09 07:43:49'),
(60, 'Chaqueta Nike Permormance PACER', 'deportivo', 'negro', 'negro', 'https://img01.ztat.net/article/spp-media-p1/a7206e508ccd4820b5d94995c0479531/b3a0c88c3e784d009e5c2164deb463b5.jpg?imwidth=1800&filter=packshot', 'arriba_normal', 44.95, 'mujer', '2024-06-09 07:46:35', '2024-06-09 07:46:35'),
(61, 'Adidas Performance Blanca', 'deportivo', 'blanco', 'blanco', 'https://img01.ztat.net/article/spp-media-p1/9841e7b6d3c1441fa7ce44b943a42006/351658d5a1cc4144a4b8942ee7c12c0f.jpg?imwidth=1800&filter=packshot', 'arriba_normal', 74.95, 'mujer', '2024-06-09 07:48:18', '2024-06-09 07:48:18'),
(62, 'Chaqueta de Entrenamiento', 'deportivo', 'rojo', 'rojo', 'https://img01.ztat.net/article/spp-media-p1/fac75b7eead94845b75acb6603ddd1e4/2fdb13d56d1d4603ae1afd5cb349433b.jpg?imwidth=1800&filter=packshot', 'arriba_normal', 49.5, 'mujer', '2024-06-09 07:49:56', '2024-06-09 07:49:56'),
(63, 'Chaqueta Tiro 23 Adidas', 'deportivo', 'nergo', 'negro', 'https://cdn.grupoelcorteingles.es/SGFM/dctm/MEDIA03/202212/20/00132428100716____3__1200x1200.jpg?impolicy=Resize&width=1200', 'arriba_normal', 49.99, 'hombre', '2024-06-09 07:52:04', '2024-06-09 07:52:04'),
(64, 'Chaqueta Entrenamiendo Adidas Verde', 'deportivo', 'verde', 'verde', 'https://img01.ztat.net/article/spp-media-p1/2b344a535cff478fad4219a2025cbd41/5b96a77fdc4a45bcba11d6209aa18d82.jpg?imwidth=300', 'arriba_normal', 59.95, 'hombre', '2024-06-09 07:54:56', '2024-06-09 07:54:56'),
(65, 'Zapatillas Runing Hombre', 'deportivo', 'negro', 'negro', 'https://contents.mediadecathlon.com/p2610502/k$1226f867f7f22fb8f727577a9a0ee8d5/sq/zapatillas-running-hombre-adidas-run-falcon-30-negro.jpg?format=auto&f=800x0', 'calzado', 44.99, 'hombre', '2024-06-09 08:01:13', '2024-06-09 08:01:13'),
(66, 'Zapatillas Blancas Deporte', 'deportivo', 'blanco', 'blanco', 'https://www.marsana.es/wp-content/uploads/2022/05/zapatillas-deportivas-hombre-881uwo-1.jpg', 'calzado', 44.99, 'hombre', '2024-06-09 08:03:51', '2024-06-09 08:03:51'),
(67, 'Zapatillas Blancas Adidas', 'casual', 'blanco', 'blanco', 'https://contents.mediadecathlon.com/p2183222/k$96b96f9456cc64ec40d045ea641dbde9/sq/8768344.jpg?format=auto&f=800x0', 'calzado', 53.95, 'mujer', '2024-06-09 08:06:56', '2024-06-09 08:06:56'),
(68, 'Nike Performance TEE', 'deportivo', 'blanco', 'blanco', 'https://img01.ztat.net/article/spp-media-p1/4004e6b81ee946248e8f17c8063f1f75/066ae67e518942ad8abfa40596d3f735.jpg?imwidth=1800&filter=packshot', 'arriba_interior', 29.95, 'mujer', '2024-06-09 08:09:53', '2024-06-09 08:09:53'),
(69, 'Camiseta Adidas Tiro 23', 'deportivo', 'negro', 'negro', 'https://cdn.grupoelcorteingles.es/SGFM/dctm/MEDIA03/202212/20/00132428000320____3__1200x1200.jpg?impolicy=Resize&width=1200', 'arriba_interior', 24.99, 'hombre', '2024-06-09 08:12:18', '2024-06-09 08:12:18'),
(70, 'Pantalones Adidas Aeroready', 'deportivo', 'negro', 'negro', 'https://m.media-amazon.com/images/I/51LfYTKSoXL._AC_SX679_.jpg', 'pantalones', 29.97, 'hombre', '2024-06-09 08:15:09', '2024-06-09 08:15:09'),
(71, 'Camiseta Adidas Original Beach', 'casual', 'azul', 'azul', 'https://img01.ztat.net/article/spp-media-p1/43c95f4f8fba43a6b73ef19d7f10e088/12956c035025443a9dcd9c818eb4404e.jpg?imwidth=1800&filter=packshot', 'arriba_interior', 34.95, 'hombre', '2024-06-09 08:24:51', '2024-06-09 08:24:51'),
(72, 'Sudadera Capucha STWS', 'casual', 'beige', 'beige', 'https://static.pullandbear.net/2/photos//2023/I/0/2/p/7592/517/712/7592517712_2_6_0.jpg?ts=1696953669865&imwidth=1125', 'arriba_normal', 29.99, 'hombre', '2024-06-09 08:44:10', '2024-06-09 08:44:10'),
(73, 'Sudadera Capucha Básica Azul', 'casual', 'azul', 'azul', 'https://static.pullandbear.net/2/photos//2024/V/0/2/p/7592/513/401/7592513401_2_6_8.jpg?t=1689939170992&imwidth=1125', 'arriba_normal', 19.99, 'hombre', '2024-06-09 08:46:20', '2024-06-09 08:46:20'),
(74, 'Abrigo ITAVIC Adidas', 'deportivo', 'negro', 'negro', 'https://img01.ztat.net/article/spp-media-p1/3ce97533397c4e82a2f73f0113584461/d717df0b424d414eba78ec9ba42db51d.jpg?imwidth=1800&filter=packshot', 'arriba_exterior', 59.99, 'hombre', '2024-06-09 12:17:53', '2024-06-09 12:17:53');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('DP0nxexAya5FDX4eGhIgOHpnFtZZVAR6a8SWQLMN', 5, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiNnU0S2xBQUtZMVFveVYzZ3kwV0xrWVBOaEhrcFZ4RTcwRklsT0VPRyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9vdXRmaXQvbGlzdGEiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTo1O30=', 1717942834);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `rol` varchar(20) NOT NULL DEFAULT 'usuario'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `rol`) VALUES
(5, 'Admin', 'admin@gmail.com', NULL, '$2y$12$vhzom95r/9XPpRBtJ79/UOXMBMEkB5Of6AwCJe1thGuJ1Wu32FIrm', NULL, '2024-05-23 15:53:17', '2024-06-01 08:09:40', 'admin'),
(7, 'Dani', 'dani@gmail.com', NULL, '$2y$12$Ae2Lr.vb7WG51n2zG9ZsnuL93DwYhDK4I6caM/z1/Fz2dyFIeBc5y', NULL, '2024-05-30 13:11:22', '2024-05-30 13:11:22', 'usuario'),
(8, 'Pepe', 'pepe@gmail.com', NULL, '$2y$12$e.jhp7unkO9CY3/dNMOotucx0XBSkte.P8qVQGE3SqUmsETMWiDIy', NULL, '2024-05-30 13:15:41', '2024-05-30 13:15:41', 'usuario'),
(9, 'Manuel', 'manuel@gmail.com', NULL, '$2y$12$FV/KvEZ3YxPhtoCRJpdZQOJ2k9Pw74cLCaEbckrEZqN1a1j/phg1C', NULL, '2024-06-09 05:10:47', '2024-06-09 05:10:47', 'usuario');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `armarios`
--
ALTER TABLE `armarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario_id` (`user_id`);

--
-- Indices de la tabla `armario_prenda`
--
ALTER TABLE `armario_prenda`
  ADD PRIMARY KEY (`armario_id`,`prenda_id`),
  ADD KEY `armario_prenda_prenda_id_foreign` (`prenda_id`);

--
-- Indices de la tabla `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indices de la tabla `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indices de la tabla `carritos`
--
ALTER TABLE `carritos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario_id` (`user_id`);

--
-- Indices de la tabla `carrito_prenda`
--
ALTER TABLE `carrito_prenda`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carrito_prenda_carrito_id_foreign` (`carrito_id`),
  ADD KEY `carrito_prenda_prenda_id_foreign` (`prenda_id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indices de la tabla `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `outfits`
--
ALTER TABLE `outfits`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario_id` (`user_id`);

--
-- Indices de la tabla `outfit_prenda`
--
ALTER TABLE `outfit_prenda`
  ADD PRIMARY KEY (`id`),
  ADD KEY `outfit_prenda_outfit_id_foreign` (`outfit_id`),
  ADD KEY `outfit_prenda_prenda_id_foreign` (`prenda_id`);

--
-- Indices de la tabla `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `prendas`
--
ALTER TABLE `prendas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `armarios`
--
ALTER TABLE `armarios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `carritos`
--
ALTER TABLE `carritos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `carrito_prenda`
--
ALTER TABLE `carrito_prenda`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=360;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `outfits`
--
ALTER TABLE `outfits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=180;

--
-- AUTO_INCREMENT de la tabla `outfit_prenda`
--
ALTER TABLE `outfit_prenda`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=663;

--
-- AUTO_INCREMENT de la tabla `prendas`
--
ALTER TABLE `prendas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `armarios`
--
ALTER TABLE `armarios`
  ADD CONSTRAINT `armarios_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `armario_prenda`
--
ALTER TABLE `armario_prenda`
  ADD CONSTRAINT `armario_prenda_armario_id_foreign` FOREIGN KEY (`armario_id`) REFERENCES `armarios` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `armario_prenda_prenda_id_foreign` FOREIGN KEY (`prenda_id`) REFERENCES `prendas` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `carritos`
--
ALTER TABLE `carritos`
  ADD CONSTRAINT `carritos_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `carrito_prenda`
--
ALTER TABLE `carrito_prenda`
  ADD CONSTRAINT `carrito_prenda_carrito_id_foreign` FOREIGN KEY (`carrito_id`) REFERENCES `carritos` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `carrito_prenda_prenda_id_foreign` FOREIGN KEY (`prenda_id`) REFERENCES `prendas` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `outfits`
--
ALTER TABLE `outfits`
  ADD CONSTRAINT `outfits_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `outfit_prenda`
--
ALTER TABLE `outfit_prenda`
  ADD CONSTRAINT `outfit_prenda_outfit_id_foreign` FOREIGN KEY (`outfit_id`) REFERENCES `outfits` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `outfit_prenda_prenda_id_foreign` FOREIGN KEY (`prenda_id`) REFERENCES `prendas` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
