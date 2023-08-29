-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-08-2023 a las 20:58:22
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `roloburgers`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargos`
--

CREATE TABLE `cargos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `cargos`
--

INSERT INTO `cargos` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '2023-07-26 04:13:59', '2023-07-26 04:13:59'),
(2, 'Cliente', '2023-07-26 04:13:59', '2023-07-26 04:13:59');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 'Hamburguesa', '2023-07-26 04:13:59', '2023-07-26 04:13:59'),
(2, 'Guarnicion', '2023-07-26 04:13:59', '2023-07-26 04:13:59'),
(3, 'Aderezo', '2023-07-26 04:13:59', '2023-07-26 04:13:59'),
(4, 'Bebida', '2023-07-26 04:13:59', '2023-07-26 04:13:59');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_06_01_173842_create_products_table', 1),
(7, '2023_07_09_203118_add_imagen_to_products_table', 1),
(8, '2023_07_09_232416_create_categorias_table', 1),
(9, '2023_07_11_005444_add_id_categoria_to_products_table', 1),
(10, '2023_07_17_022651_create_cargos_table', 1),
(11, '2023_07_17_023021_add_cargo_id_to_users_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `precio` double(8,2) NOT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `imagen` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_categoria` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id`, `nombre`, `precio`, `descripcion`, `created_at`, `updated_at`, `imagen`, `id_categoria`) VALUES
(1, 'Hamburguesa pollo', 2800.00, 'Burger de pollo con aguacate, queso cheddar y aderezo ranchero!', '2023-07-26 04:13:59', '2023-07-26 04:13:59', '1688944441_burger_pollo.jpg', 1),
(2, 'Hamburguesa veggie', 3300.00, 'Burger vegetariana con champiñones, espinacas y queso feta', '2023-07-26 04:13:59', '2023-07-26 04:13:59', '1688942080_burger_veggie.jpg', 1),
(3, 'Hamburguesa con baccon', 3100.00, 'Burger de carne de res con tocino, queso cheddar y salsa BBQ', '2023-07-26 04:13:59', '2023-07-26 04:13:59', '1688942267_burger_tocino.jpg', 1),
(4, 'Hamburguesa doble', 3500.00, 'Doble burger de carne de res con lechuga, tomate y aderezo especial', '2023-07-26 04:13:59', '2023-07-26 04:13:59', '1688942338_burger_doble.jpg', 1),
(5, 'Hamburguesa BBQ', 2900.00, 'Burger de carne de res con salsa BBQ, cebolla frita y queso cheddar', '2023-07-26 04:13:59', '2023-07-26 04:13:59', '1688942591_burger_BBQ.jpg', 1),
(6, 'Hamburguesa de salmon', 3600.00, 'Burger de salmón con aguacate, rúcula, aderezo especial, tomate y lechuga.', '2023-07-26 04:13:59', '2023-07-26 04:13:59', '1688942708_burger_salmon.jpg', 1),
(7, 'Hamburguesa hawaiana', 3200.00, 'Burger de res con piña, queso cheddar, bacoon y salsa teriyaki.', '2023-07-26 04:13:59', '2023-07-26 04:13:59', '1689127286_hawaiana.jpeg', 1),
(8, 'Hamburguesa clasica', 2000.00, 'Burger de 110gr con lechuga, tomate y cebolla caramelizada.', '2023-07-26 04:13:59', '2023-07-26 04:13:59', '1689123956_clasica.jpeg', 1),
(9, 'Papas fritas con chedar', 1000.00, 'Papas fritas con un baño de queso chedar', '2023-07-26 04:13:59', '2023-07-26 04:13:59', '1689123776_papas chedar.jpg', 2),
(10, 'Coca-cola', 500.00, 'Botella de 600 ml de Coca-cola bien helada!', '2023-07-26 04:13:59', '2023-07-26 04:13:59', '1689126676_coca.jpg', 4),
(11, 'Cheedar', 500.00, 'Aderezo extra de cheedar único para tus papas!', '2023-07-26 04:13:59', '2023-07-26 04:13:59', '1689126893_cheedar.jpg', 3),
(12, 'Cervesa Negra', 700.00, 'Cervesa negra de pura malta, elaborada por nosotros!', '2023-07-26 04:13:59', '2023-07-26 04:13:59', '1689127108_cervesa negra.jpg', 4),
(13, 'Aros de cebolla', 500.00, 'Aros de cebolla condimentado a gusto!', '2023-07-26 04:13:59', '2023-07-26 04:13:59', '1689294507_aros de cebolla.jpg', 2),
(14, 'Papas fritas con bacoon', 1100.00, 'Papas fritas con bacoon y cebolla de verdeo!', '2023-07-26 04:13:59', '2023-07-26 04:13:59', '1689294568_papas bacoon.jpg', 2),
(15, 'Salsa barbacoa', 500.00, 'Salsa barbacoa ahumada o picante!', '2023-07-26 04:13:59', '2023-07-26 04:13:59', '1689294875_salsa barbacoa.jpg', 3),
(16, 'Salsa tartara', 700.00, 'No la recomiendo es fea!', '2023-07-26 04:13:59', '2023-07-26 04:13:59', '1689294930_salsa tartara.jpg', 3),
(17, 'Limonada', 1200.00, 'Litro limonada bien helada!', '2023-07-26 04:13:59', '2023-07-26 04:13:59', '1689295054_limonda.jpg', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `cargo_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `cargo_id`) VALUES
(1, 'Emma', 'osh@gmail.com', NULL, '$2y$10$j.nQPF24VVcr5Mm8Axye7esD6ZIZrlUSB/95YhVCXRnYEiEnuwNKW', NULL, '2023-07-26 04:13:59', '2023-07-26 04:13:59', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cargos`
--
ALTER TABLE `cargos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indices de la tabla `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_id_categoria_foreign` (`id_categoria`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_cargo_id_foreign` (`cargo_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cargos`
--
ALTER TABLE `cargos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_id_categoria_foreign` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id`) ON DELETE SET NULL;

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_cargo_id_foreign` FOREIGN KEY (`cargo_id`) REFERENCES `cargos` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
