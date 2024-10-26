-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-09-2024 a las 18:24:24
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `itbm`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE `cursos` (
  `id_curso` int(11) NOT NULL,
  `paralelo` varchar(15) NOT NULL,
  `gestion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cursos`
--

INSERT INTO `cursos` (`id_curso`, `paralelo`, `gestion`) VALUES
(3, '3b', 2024);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docente`
--

CREATE TABLE `docente` (
  `id_docente` int(11) NOT NULL,
  `nombre_doc` varchar(30) NOT NULL,
  `ap_pat_doc` varchar(30) NOT NULL,
  `ap_mat_doc` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `docente`
--

INSERT INTO `docente` (`id_docente`, `nombre_doc`, `ap_pat_doc`, `ap_mat_doc`) VALUES
(121212, 'Mateo', 'Lopez', 'Gonzales'),
(131313, 'Lyra', 'Astra', 'Nova'),
(585858, 'Noah', 'Gaia', 'Nimbus'),
(646446, 'Victor', 'Lopez', 'Orion'),
(757575, 'Valentina', 'De la Torre', 'Solaris');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

CREATE TABLE `estudiante` (
  `ci` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `ap_pat` varchar(30) NOT NULL,
  `ap_mat` varchar(30) NOT NULL,
  `genero` varchar(30) NOT NULL,
  `celular` int(11) NOT NULL,
  `edad` int(11) NOT NULL,
  `contrasena` int(11) NOT NULL,
  `id_sesion` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `estudiante`
--

INSERT INTO `estudiante` (`ci`, `nombre`, `ap_pat`, `ap_mat`, `genero`, `celular`, `edad`, `contrasena`, `id_sesion`, `foto`) VALUES
(12, '', '1', '1', 'masculino', 1, 1, 1, 1, ''),
(13, '', '', '', 'masculino', 0, 0, 0, 1, ''),
(14, '', '1', '1', 'femenino', 1, 1, 0, 1, ''),
(15, 'FOTO.png', '1', '1', 'masculino', 1, 1, 1, 1, ''),
(16, '1.png', '2', '1', 'masculino', 1, 1, 1, 1, '16_png'),
(17, '2', '2', '2', 'masculino', 2, 2, 2, 1, '17_jpg'),
(18, '1', '1', '1', 'masculino', 1, 1, 1, 1, '18.png'),
(20, '1', '1', '1', 'masculino', 1, 1, 1, 1, '20.png'),
(21, '1', '1', '2', 'masculino', 1, 1, 1, 1, '21.png'),
(1111111, 'Kenderr', 'Mendozas', 'Canaviris', 'Masculinos', 60539021, 20, 1111111, 1, ''),
(2222222, 'Alambrito', 'Perez', 'Perez', 'Masculino', 77720158, 23, 2222222, 2, ''),
(9247923, 'r', '', '', 'masculino', 0, 0, 9247923, 1, ''),
(9964241, 'DANIEL', 'MAMANI', 'CHOQUE', 'MASCULINO', 12345678, 23, 9964241, 1, 'foto.png'),
(9999999, 'Solas', 'garcias', 'Garcia', 'femenino', 213123, 23, 1, 3, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE `materias` (
  `id_materias` varchar(10) NOT NULL,
  `nombre_materia` varchar(30) NOT NULL,
  `carga_horaria` int(11) NOT NULL,
  `id_docente` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `materias`
--

INSERT INTO `materias` (`id_materias`, `nombre_materia`, `carga_horaria`, `id_docente`) VALUES
('102879', 'programacion_II', 42, '757575'),
('134895', 'programacion_I', 32, '121212'),
('314578', 'hardware', 36, '585858'),
('564615', 'base_de_datos_I', 48, '646446'),
('794615', 'estadistica', 48, '131313');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notas`
--

CREATE TABLE `notas` (
  `id_notas` int(11) NOT NULL,
  `nota1` int(11) NOT NULL,
  `nota2` int(11) NOT NULL,
  `nota3` int(11) NOT NULL,
  `nota4` int(11) NOT NULL,
  `promedio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `notas`
--

INSERT INTO `notas` (`id_notas`, `nota1`, `nota2`, `nota3`, `nota4`, `promedio`) VALUES
(458565, 74, 55, 89, 86, 78),
(464685, 96, 93, 90, 92, 90),
(714465, 54, 65, 68, 70, 65),
(758495, 85, 96, 92, 90, 89),
(784645, 85, 63, 97, 65, 75);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `ci` int(11) NOT NULL,
  `id_materia` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`ci`, `id_materia`) VALUES
(1111111, '102879'),
(3333333, '564615'),
(2222222, '794615'),
(8888888, '314578'),
(9999999, '134895');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sesion`
--

CREATE TABLE `sesion` (
  `id_sesion` int(11) NOT NULL,
  `descripcion_sesion` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `sesion`
--

INSERT INTO `sesion` (`id_sesion`, `descripcion_sesion`) VALUES
(1, 'estudiante'),
(2, 'administrativo'),
(3, 'docente'),
(4, 'rector');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `docente`
--
ALTER TABLE `docente`
  ADD PRIMARY KEY (`id_docente`);

--
-- Indices de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD PRIMARY KEY (`ci`);

--
-- Indices de la tabla `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`id_materias`);

--
-- Indices de la tabla `notas`
--
ALTER TABLE `notas`
  ADD PRIMARY KEY (`id_notas`);

--
-- Indices de la tabla `sesion`
--
ALTER TABLE `sesion`
  ADD PRIMARY KEY (`id_sesion`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
