-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-02-2020 a las 03:42:43
-- Versión del servidor: 10.3.10-MariaDB-log
-- Versión de PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `daw`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `cod_alumno` int(11) NOT NULL,
  `nom_alumno` varchar(50) NOT NULL,
  `apell_alumno` varchar(100) NOT NULL,
  `passwd_alumno` varchar(25) NOT NULL,
  `foto_alumno` varchar(255) NOT NULL,
  `fech_nac_alumno` date NOT NULL,
  `cod_curso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`cod_alumno`, `nom_alumno`, `apell_alumno`, `passwd_alumno`, `foto_alumno`, `fech_nac_alumno`, `cod_curso`) VALUES
(1, 'Ivan', 'Macia Garcia', 'ivan', 'defaultuser.jpg', '1999-05-12', 1),
(3, 'Samir', 'Tenkoul Gonzalez', 'samir', 'defaultuser.jpg', '1983-03-28', 2),
(6, 'Maria', 'Garcia Ramirez', 'Maria', 'defaultuser.jpg', '2000-01-05', 1),
(7, 'Josefa', 'Ibañez Franco', 'Josefa', 'defaultuser.jpg', '1950-09-25', 1),
(8, 'Yusuf', 'Abdelraman', 'Yusuf', 'defaultuser.jpg', '1996-02-28', 2),
(9, 'Jaimito', 'Fernandez Sierra', 'Jaimito', 'defaultuser.jpg', '2001-12-31', 2),
(10, 'Pepe', 'Viyuela Sanz', 'Pepe', 'defaultuser.jpg', '1968-04-02', 1),
(11, 'Lionel', 'Messi', 'Lionel', 'defaultuser.jpg', '1980-08-25', 2),
(13, 'Karim', 'Benzema', 'karim', 'defaultuser.jpg', '1983-06-06', 2),
(14, 'Paco', 'Alcacer', 'paco', 'defaultuser.jpg', '1987-11-03', 2),
(15, 'Jose', 'Garcia', '12345678', 'defaultuser.jpg', '1993-03-28', 1),
(16, 'Miguel', 'Alonso', 'Alonso', 'defaultuser.jpg', '1982-09-20', 1),
(17, 'Alejandro', 'Fernandez', 'fernandez', 'defaultuser.jpg', '2019-11-04', 2),
(18, 'Alicia', 'Corcobado', 'corcobado', 'defaultuser.jpg', '2020-02-04', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE `cursos` (
  `cod_curso` int(11) NOT NULL,
  `nom_curso` varchar(100) NOT NULL,
  `anyo_curso` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cursos`
--

INSERT INTO `cursos` (`cod_curso`, `nom_curso`, `anyo_curso`) VALUES
(1, 'DAW1', 2020),
(2, 'DAW2', 2020);

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Samir', 'samir@samir.com', NULL, '$2y$10$saVz.1STfXlSTJGImhlTg.EWmlIx4HiBUPMOoNMiJUcgshtdLn7yy', NULL, '2020-01-31 16:57:27', '2020-01-31 16:57:27'),
(2, 'admin', 'admin@admin.com', NULL, '$2y$10$CUS.oNxBWMSLCckuRPgdA.vVOj.AYF/j5HPP2H/7/QMuRHvT9sYky', NULL, '2020-01-31 17:00:21', '2020-01-31 17:00:21'),
(4, 'Profesor', 'profesor@profesor.com', NULL, '$2y$10$n0mGnPZv1dok6A1nHjWVJe4rVQutyLXzwNAwwW84c6.u1dly/sELq', NULL, '2020-01-31 17:01:17', '2020-01-31 17:01:17'),
(5, 'juan', 'juan@juan.com', NULL, '$2y$10$Yt6FE7WcdKyDscmzrV2Lv.vxBYDswMpXAJMB9nU8h4kG64N9VG/uC', NULL, '2020-02-02 21:28:03', '2020-02-02 21:28:03');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`cod_alumno`),
  ADD KEY `cod_curso` (`cod_curso`);

--
-- Indices de la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`cod_curso`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

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
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `cod_alumno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `cursos`
--
ALTER TABLE `cursos`
  MODIFY `cod_curso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD CONSTRAINT `alumnos_ibfk_1` FOREIGN KEY (`cod_curso`) REFERENCES `cursos` (`cod_curso`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
